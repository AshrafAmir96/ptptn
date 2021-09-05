@extends('layouts.admin-master')

@section('page-title', trans('app.asset_acceptance'))
@section('page-heading', trans('app.asset_acceptance'))

@section('breadcrumbs')
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item">
            <a href="{{ route('asset.list') }}">@lang('app.administration')</a>
        </div>
        <div class="breadcrumb-item">@lang('app.asset_acceptance')</div>
    </div>
@stop

@section('content')

@include('partials.messages')

<div class="card">
    <div class="card-body">

        <form action="" method="GET" id="assets-form" class="pb-2 mb-3 border-bottom-light">
            <div class="row my-3 flex-md-row flex-column-reverse">
                <div class="col-md-4 mt-md-0 mt-2">
                    <div class="input-group custom-search-form">
                        <input type="text"
                               class="form-control input-solid"
                               name="search"
                               value="{{ Request::has('search') ? Request::get('search') : '' }}"
                               placeholder="@lang('app.search_asset_acceptance')">

                            <span class="input-group-append">
                                @if (Request::has('search') && Request::get('search') != '')
                                    <a href="{{ route('asset.list') }}"
                                           class="btn btn-light d-flex align-items-center text-muted"
                                           role="button">
                                        <i class="fas fa-times"></i>
                                    </a>
                                @endif
                                <button class="btn btn-light" type="submit" id="search-users-btn">
                                    <i class="fas fa-search text-muted"></i>
                                </button>
                            </span>
                    </div>
                </div>

                <div class="col-md-2 mt-2 mt-md-0">
                    {!! Form::select('status', $statuses, Request::get('status'), ['id' => 'status', 'class' => 'form-control input-solid']) !!}
                </div>

                <div class="col-md-6">
                    <a href="{{ route('asset.create') }}" class="btn btn-primary btn-rounded float-right">
                        <i class="fas fa-plus mr-2"></i>
                        Asset Acceptance
                    </a>
                </div>
            </div>
        </form>

        <div class="table-responsive" id="users-table-wrapper">
            <table class="table table-borderless table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th class="min-width-150">No. Rujukan</th>
                    <th class="min-width-100">Jenis Penerimaan</th>
                    <th class="min-width-80">Nombor Rujukan Pesanan Kerajaan (PK)/ Kontrak/ Surat Kelulusan</th>
                    <th class="min-width-80">Nombor Rujukan Nota Hantaran (DO)</th>
                    <th class="text-center min-width-80">@lang('app.action')</th>
                </tr>
                </thead>
                <tbody>
                    @if (count($users))
                         <tr>
                            <td>1</td>
                            <td>LH1AJ20011</td>
                            <td></td>
                            <td>LHDS2021AJ23099</td>
                            <td>BLA3200AD94</td>
                            <td>    
                                <a href="{{ route('asset.edit', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Edit Asset Acceptance"
                                data-toggle="tooltip" data-placement="top">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{ route('asset.delete', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Delete Asset Acceptance"
                                data-toggle="tooltip"
                                data-placement="top"
                                data-method="DELETE"
                                data-confirm-title="@lang('app.please_confirm')"
                                data-confirm-text="Are you sure want to delete Asset Acceptance"
                                data-confirm-delete="Delete">
                                    <i class="fas fa-trash"></i>
                                </a>            
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>LH1AJ20212</td>
                            <td></td>
                            <td>LHDS20AS123300</td>
                            <td>BLA3200AD94</td>
                            <td>    
                                <a href="{{ route('asset.edit', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Edit Asset Acceptance"
                                data-toggle="tooltip" data-placement="top">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{ route('asset.delete', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Delete Asset Acceptance"
                                data-toggle="tooltip"
                                data-placement="top"
                                data-method="DELETE"
                                data-confirm-title="@lang('app.please_confirm')"
                                data-confirm-text="Are you sure want to delete Asset Acceptance"
                                data-confirm-delete="Delete">
                                    <i
                                     class="fas fa-trash"></i>
                                </a>            
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>LH1AJ24401</td>
                            <td></td>
                            <td>LHDD39120DD229</td>
                            <td>BLA3200AD94</td>
                            <td>    
                                <a href="{{ route('asset.edit', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Edit Asset Acceptance"
                                data-toggle="tooltip" data-placement="top">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{ route('asset.delete', 1) }}"
                                style="padding: 2px;" class="text-dark"
                                title="Delete Asset Acceptance"
                                data-toggle="tooltip"
                                data-placement="top"
                                data-method="DELETE"
                                data-confirm-title="@lang('app.please_confirm')"
                                data-confirm-text="Are you sure want to delete Asset Acceptance"
                                data-confirm-delete="Delete">
                                    <i
                                     class="fas fa-trash"></i>
                                </a>            
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="7"><em>@lang('app.no_records_found')</em></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

{!! $users->render() !!}

@stop

@section('scripts')
    <script>
        $("#status").change(function () {
            $("#assets-form").submit();
        });
    </script>
@stop
