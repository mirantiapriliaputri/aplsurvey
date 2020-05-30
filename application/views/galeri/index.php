<div class="container">

<?php if( $this->session->flashdata('flash') ) : ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
           Data galeri <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>  
            </div>  
            </div>  
    <?php endif; ?>
    <div class="row mt-3 mb-3 mr-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>galeri/tambah" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="row mb-3">
            <div class="col-md-4">
            <form action="" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari galeri.." name="keyword">
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
            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
        </div>

      

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th class="text-nowrap">No</th>
                            <th class="text-nowrap">Nama File</th>
                            <th class="text-nowrap">Url</th>
                            <th class="text-nowrap">Aksi</th>
                            <?php if( empty($galeri) ) : ?>
                                    <div class="alert alert-danger" role="alert">
                                    Galeri tidak di temukan!
                                    </div>
                                <?php endif; ?>
                        </tr>
                        </thead>
                         <tbody>
                     <?php foreach($galeri as $g){ ?>
                         <tr>
                            <td><?= ++$start; ?></td>
                            <td class="text-nowrap"><?= $g['nama'] ?></td>
                            <td class="text-nowrap"><?= $g['url'] ?></td>
                            <td class="text-nowrap"><a href="<?= base_url(); ?>galeri/hapus/<?= $g['id']; ?> " class="fas fa-fw fa-trash-alt ml-1" style="color: #ff6b6b;" onclick="return confirm('Apakah anda yakin?')"></a>
                           <a href="<?= base_url(); ?>galeri/ubah/<?= $g['id']; ?>"  class="fas fa-fw fa-edit "></a></td>
                         </tr>
                     <?php } ?>
                    </tbody>
                </table>

                <?= $this->pagination->create_links(); ?>


            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->