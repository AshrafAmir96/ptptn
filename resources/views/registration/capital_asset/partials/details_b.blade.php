<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name">No. Siri Pendaftaran Komponen</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Jenis/ Jenama/ Model</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="first_name">Tempoh Jaminan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Asal/ Tambah/ Naik Taraf/ Penggantian</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Catatan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
        <div class="form-group">
            <label for="first_name">Kos (RM)</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="">
        </div>
    </div>

    <div class="col-md-4">
        Tarikh
        <div class="form-group">
            <label for="first_name">Dipasang</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="06/09/2021">
        </div>
        <div class="form-group">
            <label for="first_name">Dikeluarkan</label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="06/09/2021">
        </div>
        <div class="form-group">
            <label for="first_name">Dilupus/ Dihapus Kira </label>
            <input type="text" class="form-control" id="first_name"
                   name="first_name" placeholder="" value="06/09/2021">
        </div>
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

