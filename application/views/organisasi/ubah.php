<div class="container">

    <div class="row mt-3">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Ubah Data Organisasi
        </div>
        <div class="card-body">
        

        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $organisasi['id']; ?>">

        <div class="form-group">
        <label for="text">Nama Organisasi</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $organisasi['nama']; ?>">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="modal-footer">
        <a href="<?= base_url(); ?>organisasi" class="btn btn-secondary">Close</a>
                 <button type="submit" class="btn btn-primary" name="ubah" id="ubah">Ubah</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>