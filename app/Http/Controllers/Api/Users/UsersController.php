<?php

namespace App\Http\Controllers\Api\Users;

use Illuminate\Http\Request;
use App\Events\User\Banned;
use App\Events\User\Deleted;
use App\Events\User\UpdatedByAdmin;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Repositories\User\UserRepository;
use App\Support\Enum\UserStatus;
use App\Transformers\UserTransformer;
use App\User;

/**
 * Class UsersController
 * @package App\Http\Controllers\Api\Users
 */
class UsersController extends ApiController
{
    /**
     * @var UserRepository
     */
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->middleware('auth');
        $this->middleware('permission:users.manage');

        $this->users = $users;
    }

    /**
     * Paginate all users.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $users = $this->users->paginate(
            $request->per_page ?: 20,
            $request->search,
            $request->status
        );

        return $this->respondWithPagination(
            $users,
            new UserTransformer
        );
    }

    /**
     * Create new user record.
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateUserRequest $request)
    {
        $data = $request->only([
            'email', 'password', 'username', 'first_name', 'last_name',
            'phone', 'address', 'country_id', 'birthday', 'role_id'
        ]);

        $data += ['status' => UserStatus::ACTIVE, 'hash' => sha1($request->email)];

        $user = $this->users->create($data);

        return $this->setStatusCode(201)
            ->respondWithItem($user, new UserTransformer);
    }

    /**
     * Show the info about requested user.
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(User $user)
    {
        return $this->respondWithItem($user, new UserTransformer);
    }

    /**
     * @param User $user
     * @param UpdateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $data = collect($request->all());

        $data = $data->only([
            'email', 'password', 'username', 'first_name', 'last_name',
            'phone', 'address', 'country_id', 'birthday', 'status', 'role_id'
        ])->toArray();

        $user = $this->users->update($user->id, $data);

        event(new UpdatedByAdmin($user));

        // If user status was updated to "Banned",
        // fire the appropriate event.
        if ($this->userIsBanned($user, $request)) {
            event(new Banned($user));
        }

        return $this->respondWithItem($user, new UserTransformer);
    }

    /**
     * Check if user is banned during last update.
     *
     * @param User $user
     * @param Request $request
     * @return bool
     */
    private function userIsBanned(User $user, Request $request)
    {
        return $user->status != $request->status && $request->status == UserStatus::BANNED;
    }

    /**
     * Remove specified user from storage.
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->id == auth()->id()) {
            return $this->errorForbidden("You cannot delete yourself.");
        }

        event(new Deleted($user));

        $this->users->delete($user->id);

        return $this->respondWithSuccess();
    }
}
