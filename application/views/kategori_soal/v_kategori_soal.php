<div class="container-fluid">
    <?php if (!empty($this->session->flashdata('info'))) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> <?= $this->session->flashdata('info') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <div class="col-lg-16 grid-margin stretch-card" style="margin-left:auto;margin-right:auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">BalitApp</h3>
                <p class="card-description">
                    Data Kategori Soal
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <!-- <a href="<?= base_url() ?>kategori_soal/tambah_kategori_soal" class="btn btn-success"><i></i>  Tambah Kategori</a> -->
                    </div>
                </div>

                <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                        <thead>
                            <tr>
                                <th> No</th>
                                <!-- <th>Id Kategori</th> -->
                                <th>Nama Modul</th>
                                <th>Nama Kategori</th>
                                <!-- <th>Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($data->result() as $row) {?>
                                <tr>
                                    <td><?= $no++; ?></td>    
                                    <!-- <td><?= $row->id; ?></td> -->
                                    <td><?= $row->nama_modul; ?></td>
                                    <td><?= $row->nama_kategori; ?></td>
                                    <!-- <td>
                                        <a href="<?= base_url() ?>kategori_soal/edit/<?= $row->id; ?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="<?= base_url() ?>kategori_soal/hapus/<?= $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Delete</a>
                                    </td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
