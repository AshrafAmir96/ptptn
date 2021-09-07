@extends('layouts.admin-master')

@section('page-title', trans('app.capital_asset'))
@section('page-heading', trans('app.create_capital_asset_b'))

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
                <div class="col-md-12">
                    <h5 class="card-title">                        
                        Original Details/ Additions/ Upgrades/ Replacements Details 1
                    </h5>
                    <p class="text-muted font-weight-light">
                        An original details, additions, upgrades or replacements details.
                    </p>
                </div>
                <div class="col-md-12">
                    @include('registration.capital_asset.partials.details_b', ['edit' => false])
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title">                        
                        Original Details/ Additions/ Upgrades/ Replacements Details 2
                    </h5>
                    <p class="text-muted font-weight-light">
                        An original details, additions, upgrades or replacements details.
                    </p>
                </div>
                <div class="col-md-12">
                    @include('registration.capital_asset.partials.details_b', ['edit' => false])
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title">                        
                        Original Details/ Additions/ Upgrades/ Replacements Details 3
                    </h5>
                    <p class="text-muted font-weight-light">
                        An original details, additions, upgrades or replacements details.
                    </p>
                </div>
                <div class="col-md-12">
                    @include('registration.capital_asset.partials.details_b', ['edit' => false])
                </div>
            </div>
        </div>
    </div>

    @if (!empty($edit))
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-rounded float-right">
                    Update Capital Asset or Low Value Moveable Asset
            </button>
            <a href="{{ route('registration.edit',1) }}" class="btn btn-primary btn-rounded float-left">
            <i class="fas fa-angle-left"></i>
                    Capital Asset or Low Value Moveable Asset (KEW.PA-3) Section B
            </a>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-rounded float-right">
                  Create Capital Asset or Low Value Moveable Asset
            </button>
            <a href="{{ route('registration.create') }}" class="btn btn-primary btn-rounded float-left">
            <i class="fas fa-angle-left"></i>
                  Capital Asset or Low Value Moveable Asset (KEW.PA-3) Section A
            </a>
        </div>
    </div>
    @endif
  
{!! Form::close() !!}

<br>
@stop

@section('scripts')
    {!! HTML::script('assets/js/as/profile.js') !!}
    
@stop