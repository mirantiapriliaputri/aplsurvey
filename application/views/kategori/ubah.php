<div class="container">

    <div class="row mt-3">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Ubah Data Kategori
        </div>
        <div class="card-body">
        

        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $kategori['id']; ?>">

        <div class="form-group">
        <label for="text">Nama Kategori</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $kategori['nama']; ?>">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>kategori" class="btn btn-secondary">Close</a>
        <button type="submit" class="btn btn-primary" name="ubah" id="ubah">Ubah</button>
        </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
</div>