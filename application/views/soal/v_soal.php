<div class="container-fluid">

<?php
    if(!empty($this->session->flashdata('info'))){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> <?= $this->session->flashdata('info')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
  </button>
</div>

    <?php }

?>

<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Data Soal
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <!-- <a href="<?= base_url() ?>soal/tambah_soal" class="btn btn-success"><i></i>  Tambah Soal</a> -->
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> No</th>
                          <th> Kategori Soal</th>
                          <th> Kategori Umur</th>
                          <th> No Pertanyaan</th>
                          <th> Pertanyaan</th>
                          <!-- <th> Gambar</th> -->
                          <!-- <th> Aksi </th> -->
                      </thead>
                      <tbody>
                      <?php
                              $no = 1;
                              foreach ($data->result() as $row) {?>
                              <tr>
                                  <td><?= $no++; ?></td>
                                  <!-- <td><?= $row->id;?></td> -->
                                  <td><?= $row->nama_kategori;?></td>
                                  <td><?= $row->umur;?></td>
                                  <td><?= $row->no_pertanyaan;?></td>
                                  <td><?= $row->pertanyaan;?></td>
                                  <!-- <td class="text-center">
                                      <a href="<?= base_url()?>assets/buku/gambar/<?= $row->gambar;?>" target="_blank">
                                          <img src="<?= base_url()?>assets/buku/gambar/<?= $row->gambar;?>" alt="">
                                      </a>
                                  </td> -->
                                  <!-- <td>
                                  <a href="<?= base_url()?>soal/edit/<?= $row->id;?>" class="btn btn-success btn-sm"> Edit </a>
                                  <a href="<?= base_url()?>soal/hapus/<?= $row->id;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Hapus </a>
                                  </td> -->
                              </tr>
                      <?php }
                      ?>
                      </tbody>
                      </table>
                  </div>
                </div>
              </div>
            