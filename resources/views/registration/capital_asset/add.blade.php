@extends('layouts.admin-master')

@section('page-title', trans('app.capital_asset'))
@section('page-heading', trans('app.create_capital_asset_a'))

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
{!! Form::open(['route' => ['registration.edit2',1], 'method' => 'GET', 'id' => 'user-form']) !!}
@else
{!! Form::open(['route' => 'registration.create2', 'files' => true, 'id' => 'user-form']) !!}
@endif


    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                         Capital Asset Details
                    </h5>
                    <p class="text-muted font-weight-light">
                         A capital asset details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('registration.capital_asset.partials.details', ['edit' => false, 'profile' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Placement Details
                    </h5>
                    <p class="text-muted font-weight-light">
                        A placement details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('registration.capital_asset.partials.placement', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        Inspection Details
                    </h5>
                    <p class="text-muted font-weight-light">
                        A inspection details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('registration.capital_asset.partials.inspection', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">                        
                        Useful Age and Current Value Details
                    </h5>
                    <p class="text-muted font-weight-light">
                        A useful age and current value details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('registration.capital_asset.partials.uses', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">                        
                        Transfer/ Disposal/ Delete   Details
                    </h5>
                    <p class="text-muted font-weight-light">
                        A transfer/ disposal/ delete details.
                    </p>
                </div>
                <div class="col-md-9">
                    @include('registration.capital_asset.partials.disposal', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    @if (!empty($edit))
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Capital Asset or Low Value Moveable Asset (KEW.PA-3) Section B
            </button>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">
                Capital Asset or Low Value Moveable Asset (KEW.PA-3) Section B
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