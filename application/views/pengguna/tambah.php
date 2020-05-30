<div class="container">

    <div class="row mt-3 mb-5">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Tambah Data Pengguna
        </div>
        <div class="card-body">
        <form action="" method="post">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Email</label>
        <input type="text" name="email" class="form-control" id="email">
        <small class="form-text text-danger"><?= form_error('email'); ?></small>
        </div>

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Usia (tahun)</label>
        <input type="text" name="usia" class="form-control" id="usia"> 
        <small class="form-text text-danger"><?= form_error('usia'); ?></small>   
        </div>
        
                    <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" id="jk" name="jk">
                <?php foreach( $jenis_kelamin as $jk) :  ?>
                <option value="<?= $jk; ?>"><?= $jk; ?></option>
               
                <?php endforeach; ?>
                </select>
            </div>
        
                    <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <select class="form-control" id="pekerjaan" name="pekerjaan">
                <?php foreach( $pekerjaan as $pj) :  ?>
                <option value="<?= $pj; ?>"><?= $pj; ?></option>
               
                <?php endforeach; ?>
                </select>
            </div>

            
        <form action="" method="post">
        <div class="form-group">
        <label for="text">No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" id="no_telepon">
        <small class="form-text text-danger"><?= form_error('no_telepon'); ?></small>
        </div>
        
        <form action="" method="post">
        <div class="form-group">
        <label for="text">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
        </div>
        
        
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>pengguna" class="btn btn-secondary">Batal</a>
                 <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>