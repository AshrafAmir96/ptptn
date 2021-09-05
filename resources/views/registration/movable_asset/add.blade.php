@extends('layouts.admin-master')

@section('page-title', trans('app.capital_asset'))
@section('page-heading', trans('app.create_capital_asset'))

@section('breadcrumbs')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active">
            <a href="{{ route('rejection.list') }}">@lang('app.capital_asset')</a>
        </div>
        <div class="breadcrumb-item">
            @lang('app.create')
        </div>
    </div>
@stop

@section('content')

@include('partials.messages')

@if (!empty($edit))
{!! Form::open(['route' => ['registration.update.details', 1], 'method' => 'PUT', 'id' => 'user-form']) !!}
@else
{!! Form::open(['route' => 'registration.store', 'files' => true, 'id' => 'user-form']) !!}
@endif


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                         Capital Asset Details
                    </h5>
                    <p class="text-muted font-weight-light">
                         An capital asset details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('rejection.partials.details', ['edit' => false, 'profile' => false])
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
                    @include('rejection.partials.asset', ['edit' => false])
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
                    @include('rejection.partials.asset', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    @if (!empty($edit))
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Update Asset Rejection
            </button>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Create Asset Rejection
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