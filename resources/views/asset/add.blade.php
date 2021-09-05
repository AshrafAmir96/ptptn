@extends('layouts.admin-master')

@section('page-title', trans('app.asset_acceptance'))
@section('page-heading', trans('app.create_asset_acceptance'))

@section('breadcrumbs')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
            <a href="{{ route('user.list') }}">@lang('app.asset_acceptance')</a>
        </div>
        <div class="breadcrumb-item">
            @lang('app.create')
        </div>
    </div>
@stop

@section('content')

@include('partials.messages')

@if (!empty($edit))
{!! Form::open(['route' => ['asset.update.details', 1], 'method' => 'PUT', 'id' => 'user-form']) !!}
@else
{!! Form::open(['route' => 'asset.store', 'files' => true, 'id' => 'user-form']) !!}
@endif


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                         Asset Acceptance Details
                    </h5>
                    <p class="text-muted font-weight-light">
                         An asset acceptance details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('asset.partials.details', ['edit' => false, 'profile' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Asset Details 1
                    </h5>
                    <p class="text-muted font-weight-light">
                        Details used for asset 1.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('asset.partials.asset', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Asset Details 2
                    </h5>
                    <p class="text-muted font-weight-light">
                        Details used for asset 2.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('asset.partials.asset', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    @if (!empty($edit))
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Update Asset Acceptance
            </button>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Create Asset Acceptance
            </button>
        </div>
    </div>
    @endif
  
{!! Form::close() !!}

<br>
@stop

@section('scripts')
    {!! HTML::script('assets/js/as/profile.js') !!}
    
@stop