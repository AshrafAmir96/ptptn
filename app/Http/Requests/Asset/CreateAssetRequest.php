<?php

namespace App\Http\Requests\Asset;

use App\Http\Requests\Request;
use App\User;

class CreateAssetRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
           
        ];

        if ($this->get('country_id')) {
            
        }

        return $rules;
    }
}
