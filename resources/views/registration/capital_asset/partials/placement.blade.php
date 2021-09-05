<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name">Lokasi</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Lokasi</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Lokasi</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name">Tarikh</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Tarikh</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Tarikh</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name">Nama Pegawai</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Nama Pegawai</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Nama Pegawai</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <!-- <div class="form-group">
            <label for="address">@lang('app.country')</label>
            {!! Form::select('country_id', $countries, $edit ? $user->country_id : '', ['class' => 'form-control']) !!}
        </div> -->
    </div>

    @if ($edit)
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary" id="update-details-btn">
                <i class="fa fa-refresh"></i>
                @lang('app.update_details')
            </button>
        </div>
    @endif
</div>
