<div class="container-fluid">
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Data Kategori Umur
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
                  <!-- <a href="<?= base_url() ?>umur/tambah_umur" class="btn btn-success"><i></i>Tambah Kategori Umur</a> -->
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="dataTable" width="100%">
                      <thead>
                        <tr>
                          <th> No</th>
                          <th> Kategori Umur</th>
                          <!-- <th> Aksi </th> -->
                        </tr>
                      </thead>

                            <tbody>
                                <?php
                                foreach($data as $row) {?>
                                    <tr>
                                        <td><?= $row->id;?></td>
                                        <td><?= $row->umur;?></td>
                                        <!-- <td>
                                            <a href="<?= base_url()?>umur/edit/<?= $row->id;?>" class="btn btn-success btn-sm"> Edit </a>
                                            <a href="<?= base_url()?>umur/delete/<?= $row->id;?>" class="btn btn-danger btn-sm"onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Delete </a>
                                        </td> -->
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            