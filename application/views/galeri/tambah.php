<div class="container">

    <div class="row mt-3">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Tambah Data Galeri
        </div>
        <div class="card-body">
        

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Nama File</label>
        <input type="text" name="nama" class="form-control" id="nama">       
         <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Url</label>
        <input type="text" name="url" class="form-control" id="url">
        <small class="form-text text-danger"><?= form_error('url'); ?></small>
        </div>
        <div class="modal-footer">
        <a href="<?= base_url(); ?>galeri" class="btn btn-secondary">Batal</a>
                 <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
