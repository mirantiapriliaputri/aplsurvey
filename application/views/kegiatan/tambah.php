<div class="container">

    <div class="row mt-3 mb-5">
    <div class="col-md-6"> 
    <div class="card">
        <div class="card-header">
            Form Tambah Data Kegiatan
        </div>
        <div class="card-body">
        

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Nama Kegiatan</label>
        <input type="text" name="nama" class="form-control" id="nama">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group">
        <label for="text">Tanggal Awal</label>
        <input type="date" name="tgl_awal" class="form-control" id="tgl_awal">
        <small class="form-text text-danger"><?= form_error('tgl_awal'); ?></small>
        </div>
        <div class="form-group">
        <label for="text">Tanggal Akhir</label>
        <input type="date" name="tgl_akhir" class="form-control" id="tgl_akhir">
        <small class="form-text text-danger"><?= form_error('tgl_akhir'); ?></small>
        </div>
        <div class="form-group">
        <label for="text">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat">
        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
        </div>
        <div class="form-group">
        <label for="text">Upload Gambar</label>
        <input type="file" name="gambar" class="form-control" id="gambar">
        </div>
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>kategori" class="btn btn-secondary">Batal</a>
                 <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>

    <!--<div class="modal-body">

<form action="" method="post">
    <form>
    
        <div class="form-group">
            <label for="nama">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama" name="nama">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Awal</label>
            <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
            <small class="form-text text-danger"><?= form_error('tgl_awal'); ?></small>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Akhir</label>
            <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
            <small class="form-text text-danger"><?= form_error('tgl_akhir'); ?></small>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
        </div>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload Gambar</label>
                <input type="file" class="form-control-file" id="gambar" name="alamat">
            </div>
        </form>

</div>
            <div class="modal-footer">
        <a href=" <?= base_url(); ?>kegiatan" class="btn btn-secondary">Close</a>
                 <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</form>
</div>
</div>
</div>
</div>