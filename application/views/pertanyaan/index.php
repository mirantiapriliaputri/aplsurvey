<div class="container">
    <div class="row mt-3 mb-3 mr-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>pertanyaan/tambah" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
        <form action="" method="post">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari pertanyaan.." name="keyword">
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
            <h6 class="m-0 font-weight-bold text-primary">Data Pertanyaan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th class="text-nowrap">No</th>
                            <th class="text-nowrap">Organisasi</th>
                            <th class="text-nowrap">Kategori</th>
                            <th class="text-nowrap">Pertanyaan</th>
                            <th class="text-nowrap">Pilihan</th>
                            <th class="text-nowrap">Aksi</th>
                        </tr>
                        </head>
                        <tbody>
                        
                </table>
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