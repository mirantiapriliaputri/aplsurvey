 <!-- Begin Page Content -->
 <div class="container">

        <?php if( $this->session->flashdata('flash') ) : ?>   
        <div class="row mb-3">
            <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
       Data kegiatan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
        </div>
        <?php endif; ?>

     <div class="row mb-3">
         <div class="col-lg-6">
       <a href="<?= base_url(); ?>kegiatan/tambah" class="btn btn-primary">Tambah</a>
         </div>
     </div>

     <div class="row mb-3">
        <div class="col-md-4">
        <form action="" method="post">
        <div class="input-group">
  <input type="text" class="form-control" placeholder="Cari kegiatan.." name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Cari</button>
  </div>
</div>
</form>
        </div>
        </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Kegiatan</th>
                             <th>Tanggal Awal</th>
                             <th>Tanggal Akhir</th>
                             <th>Alamat</th>
                             <th>Galeri</th>
                             <th class="text-nowrap">Aksi</th>
                             <?php if( empty($kegiatan) ) : ?>
                <div class="alert alert-danger" role="alert">
                Kegiatan tidak di temukan!
                 </div>
             <?php endif; ?>
                         </tr>
                     </thead>
                     <tbody>
                     <?php $i = 1; ?>
                     <?php foreach($kegiatan as $kg){ ?>
                         <tr>
                         <td><?= ++$start; ?></td>
                            <td class="text-nowrap"><?= $kg['nama'] ?></td>
                            <td class="text-nowrap"><?= $kg['tanggal_awal'] ?></td>
                            <td class="text-nowrap"><?= $kg['tanggal_akhir'] ?></td>
                            <td class="text-nowrap"><?= $kg['alamat'] ?></td>
                            <td class="text"><?= $kg['galeri'] ?></td>
                            <td class="text-nowrap"><a href="<?= base_url(); ?>kegiatan/hapus/<?= $kg['id']; ?>" class="fas fa-fw fa-trash-alt ml-1" style="color: #ff6b6b;" onclick="return confirm('Apakah anda yakin?')"></a>
                           <a href="<?= base_url(); ?>kegiatan/ubah/<?= $kg['id']; ?>" class="fas fa-fw fa-edit "></a></td>

                            
                         </tr>
                     <?php } ?>
                    </tbody>
                 </table>
                 <?= $this->pagination->create_links(); ?>

             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->
 <!-- Modal -->
 <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form action="" method="">
                     <form>

                         <div class="form-group">
                             <label for="nama">Nama Kegiatan</label>
                             <input type="text" class="form-control" id="nama" name="nama">
                         </div>
                         <div class="form-group">
                             <label for="date">Tanggal Awal</label>
                             <input type="date" class="form-control" id="tgl_awal" name="tgl_awal">
                         </div>
                         <div class="form-group">
                             <label for="date">Tanggal Akhir</label>
                             <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir">
                         </div>
                         <div class="form-group">
                             <label for="exampleFormControlTextarea1">Alamat</label>
                             <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                         </div>
                         <form>
                             <div class="form-group">
                                 <label for="exampleFormControlFile1">Upload Gambar</label>
                                 <input type="file" class="form-control-file" id="gambar" name="alamat">
                             </div>
                         </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Tambah</button>
                 </form>
             </div>
         </div>
     </div>
 </div>