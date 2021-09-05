<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">Nama Pembekal/ Agen Penghantaran/ Pemberi</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="Nama" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Alamat Pembekal/ Agen Penghantaran/ Pemberi</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="Alamat" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Jenis Penerimaan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        
        <div class="form-group">
            <label for="first_name">Maklumat Pengangkutan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>

        <div class="form-group">
            <label for="first_name">No. Ruj. Penerimaan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="LH1AJ20011" readonly>
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
            <label for="birthday">No Rujukan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="Nombor Rujukan" value="LH1AJ20011" readonly>
        </div>
        Pesanan Kerajaan (PK)/ Kontrak/ Surat Kelulusan
        <div class="form-group">
            <label for="first_name">Nombor Rujukan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="Nombor Rujukan" value="LHDS2021AJ23099">
        </div>
        <div class="form-group">
            <label for="first_name">Tarikh</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="Tarikh" value="07/09/2021">
        </div>
        Nota Hantaran (DO)
        <div class="form-group">
            <label for="phone">Nombor Rujukan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="Nombor Rujukan" value="BLA3200AD94">
        </div>
        <div class="form-group">
            <label for="address">Tarikh</label>
            <input type="text" class="form-control" id="address"
                   name="address" placeholder="Tarikh" value="07/09/2021">
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
