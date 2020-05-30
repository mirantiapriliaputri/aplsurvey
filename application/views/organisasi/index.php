 <!-- Begin Page Content -->
 <div class="container">

    <?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mb-3">
    <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    Data organisasi<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    </div>
    <?php endif; ?>
     <div class="row mb-3">
         <div class="col-lg-6">
         <a href="<?= base_url(); ?>organisasi/tambah" class="btn btn-primary">Tambah</a>
         </div>
     </div>

     <div class="row mb-3">
        <div class="col-md-4">       
         <form action="" method="post">
        <div class="input-group">
  <input type="text" class="form-control" placeholder="Cari organisasi.." name="keyword">
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
             <h6 class="m-0 font-weight-bold text-primary">Data Organisasi</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No</th>
                             <th>Nama Organisasi</th>
                             <th class="text-nowrap">Aksi</th>
                             <?php if( empty($organisasi) ) : ?>
                <div class="alert alert-danger" role="alert">
                Organisasi tidak di temukan!
                 </div>
             <?php endif; ?>
                         </tr>
                     </thead>
                     <tbody>
                     <?php $i = 1; ?>
                     <?php foreach($organisasi as $or){ ?>
                         <tr>
                         <td><?= ++$start; ?></td>
                            <td class="text-nowrap"><?= $or['nama'] ?></td>
                            <td class="text-nowrap"><a href="<?= base_url(); ?>organisasi/hapus/<?= $or['id']; ?>" class="fas fa-fw fa-trash-alt ml-1" style="color: #ff6b6b;" onclick="return confirm('Apakah anda yakin?')"></a>
                           <a href="<?= base_url(); ?>organisasi/ubah/<?= $or['id']; ?>"  class="fas fa-fw fa-edit "></a></td>

                         </tr>
                     <?php } ?>
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
                 <h5 class="modal-title" id="exampleModalLabel">Tambah Data Organisasi</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <form action="" method="">
                     <form>

                         <div class="form-group">
                             <label for="nama">Nama Organisasi</label>
                             <input type="text" class="form-control" id="nama" name="nama">
                         </div>


             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Tambah</button>
                 </form>
             </div>
         </div>
     </div>
 </div>