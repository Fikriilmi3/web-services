<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Data Laporan Hasil
                  </p>
                  <hr>
                  <div class="row">

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> Id</th>
                          <th> Nama Anak </th>
                          <!-- <th> Nama Ibu</th> -->
                          <th> Kategori Soal</th>
                          <th> Kategori Umur</th>
                          <th> Jumlah YA</th>
                          <th> Jumlah TIDAK</th>
                          <th> Status Hasil</th>
                          <th> Saran</th>
                          <th> Tanggal Tes</th>
                          <th> Aksi</th>
                        </tr>
                      </thead>

                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data->result() as $row) {?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <!-- <td><?= $row->id;?></td> -->
                                        <td><?= $row->nama_anak;?></td>
                                        <!-- <td><?= $row->nama_ibu;?></td> -->
                                        <td><?= $row->nama_kategori;?></td>
                                        <td><?= $row->umur;?></td>
                                        <td><?= $row->jumlah_ya;?></td>
                                        <td><?= $row->jumlah_tidak;?></td>
                                        <td><?= $row->hasil;?></td>
                                        <td><?= $row->saran;?></td>
                                        <td><?= $row->tgl_tes;?></td>
                                        <td>
                                        <a href="<?= base_url() ?>hasil/delete/<?= $row->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            