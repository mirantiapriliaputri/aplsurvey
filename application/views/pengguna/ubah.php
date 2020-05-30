<div class="container">

    <div class="row mt-3 mb-5">
    <div class="col-md-6">  

            <div class="card">
        <div class="card-header">
            Form Ubah Data Pengguna
        </div>
        <div class="card-body">
        <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pengguna['id']; ?>">
        <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control" id="nama" value="<?= $pengguna['nama']; ?>">
        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
        </div>

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Email</label>
        <input type="text" name="email" class="form-control" id="email" value="<?= $pengguna['email']; ?>">
        <small class="form-text text-danger"><?= form_error('email'); ?></small>
        </div>

        <form action="" method="post">
        <div class="form-group">
        <label for="text">Usia (tahun)</label>
        <input type="text" name="usia" class="form-control" id="usia" value="<?= $pengguna['usia']; ?>"> 
        <small class="form-text text-danger"><?= form_error('usia'); ?></small>   
        </div>
        
                    <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" id="jk" name="jk">
                <?php foreach( $jenis_kelamin as $jk ) : ?>
                <?php if( $jk == $pengguna['jenis_kelamin'] ) : ?>
                <option value="<?= $jk; ?>" selected><?= $jk; ?></option>
                <?php else : ?>
                <option value="<?= $jk; ?>"><?= $jk; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>
        
                    <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <select class="form-control" id="pekerjaan" name="pekerjaan">
                <?php foreach( $pekerjaan as $pj ) : ?>
                <?php if( $pj == $pengguna['pekerjaan'] ) : ?>
                <option value="<?= $pj; ?>" selected><?= $pj; ?></option>
                <?php else : ?>
                <option value="<?= $pj; ?>"><?= $pj; ?></option>
                <?php endif; ?>
                <?php endforeach; ?>
                </select>
            </div>

            
        <form action="" method="post">
        <div class="form-group">
        <label for="text">No Telepon</label>
        <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="<?= $pengguna['no_telepon']; ?>">
        <small class="form-text text-danger"><?= form_error('no_telepon'); ?></small>
        </div>
        
        <form action="" method="post">
        <div class="form-group">
        <label for="text">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="alamat"  value="<?= $pengguna['alamat']; ?>">
        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
        </div>
        
        
        <div class="modal-footer">
        <a href=" <?= base_url(); ?>pengguna" class="btn btn-secondary">Close</a>
                 <button type="submit" class="btn btn-primary" name="ubah" id="ubah">Ubah</button>
        </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>