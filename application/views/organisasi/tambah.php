<div class="container">

    <div class="row mt-3">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Tambah Data Organisasi
        </div>
        <div class="card-body">
        

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Nama Organisasi</label>
        <input type="text" name="nama" class="form-control" id="nama">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>organisasi" class="btn btn-secondary">Batal</a>
                 <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>