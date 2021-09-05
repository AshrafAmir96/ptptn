<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="first_name">No. Kod</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="@lang('app.first_name')" value="BA2301923">
        </div>
        <div class="form-group">
            <label for="first_name">Keterangan Aset Alih</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="@lang('app.first_name')" value="Meja Komputer">
        </div>
        <div class="form-group">
            <label for="first_name">Nota Hantaran (DO) </label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="N342DA14400">
        </div>
        <div class="form-group">
            <label for="first_name">Sebab-Sebab Penolakan </label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        
    </div>

    <div class="col-md-6">
        Kuantiti
        <div class="form-group">
            <label for="first_name">Dipesan Catatan (PK)</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="125">
        </div>
        <div class="form-group">
            <label for="first_name">Diterima</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="120">
        </div>
        <div class="form-group">
            <label for="first_name">Ditolak</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="123">
        </div>
        <div class="form-group">
            <label for="first_name">Kurang (-)</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Lebihan (+)</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="3">
        </div>
        <div class="form-group">
            <label for="phone">Catatan</label>
            <input type="text" class="form-control" id="phone"
                   name="phone" placeholder="Catatan" value="">
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
