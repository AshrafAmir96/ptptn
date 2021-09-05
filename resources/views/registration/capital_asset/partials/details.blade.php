<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">Kementerian/ Jabatan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="JPM">
        </div>
        <div class="form-group">
            <label for="first_name">Bahagian/ Cawangan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="APMM">
        </div>
        <div class="form-group">
            <label for="first_name">Kod Nasional</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        
        <div class="form-group">
            <label for="first_name">Keterangan Aset</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Kategori</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Sub Kategori</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Jenis/ Jenama/ Model</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Buatan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Jenis Dan No. Enjin</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Sub Kategori</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Sub Kategori</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Jenis Kenderaan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">No. Enjin</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">No Casis/ Siri Pembuat</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">No Pendaftaran (Bagi Kenderaan) </label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">Spesifikasi/ Catatan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>
        <!-- <div class="form-group">
            <label for="status">@lang('app.status')</label>
            {!! Form::select('status', $statuses, $edit ? $user->status : '',
                ['class' => 'form-control', 'id' => 'status', $profile ? 'disabled' : '']) !!}
        </div>
        <div class="form-group">
            <label for="first_name">@lang('app.first_name')</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="@lang('app.first_name')" value="{{ $edit ? $user->first_name : '' }}">
        </div>
        <div class="form-group">
            <label for="last_name">@lang('app.last_name')</label>
            <input type="text" class="form-control" id="last_name"
                   name="last_name" placeholder="@lang('app.last_name')" value="{{ $edit ? $user->last_name : '' }}">
        </div> -->
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="birthday">No. Siri Pendaftaran</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="Nombor Rujukan" value="JPM/APMM/CP/H/18/002" readonly>
        </div>
        <div class="form-group">
            <label for="first_name">Harga Perolehan Asal (RM)</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Tarikh Perolehan</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Tarikh Diterima</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="07/09/2021">
        </div>
        <div class="form-group">
            <label for="phone">No. Pesanan Rasmi Kerajaan/Kontrak</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="address">Tempoh Jaminan</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="address">Nama Pembekal</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="address">Alamat Pembekal</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="" value="">
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
