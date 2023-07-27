
<div class="col-lg-16 grid-margin stretch-card"  style="margin-left:auto;margin-right:auto" >
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">BalitApp</h4>
                  <p class="card-description">
                    Data User
                  </p>
                  <hr>
                  <div class="row">
                  <div class="col-md-6">
        <a href="<?= base_url() ?>user/tambah_user" class="btn btn-success"><i></i> Tambah User</a>
    </div>

                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                    <thead>
                            <tr>
                                    <th>No</th>
                                    <!-- <th>id User</th> -->
                                    <th>Username</th>
                                    <th>Nama Anak</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nama Ibu</th>
                                    <th>Telepone</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                foreach($data as $row) {?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <!-- <td><?= $row->id; ?></td> -->
                                        <td><?= $row->username;?></td>
                                        <td><?= $row->nama_anak;?></td>
                                        <td><?= $row->jenis_kelamin;?></td>
                                        <td><?= $row->tempat_lahir;?></td>
                                        <td><?= $row->tgl_lahir;?></td>
                                        <td><?= $row->nama_ibu;?></td>
                                        <td><?= $row->telepone;?></td>
                                        <td><?= $row->password;?></td>
                                        <td>
                                            <a href="<?= base_url()?>user/edit/<?= $row->id;?>" class="btn btn-success btn-sm"> Edit </a>
                                            <a href="<?= base_url()?>user/delete/<?= $row->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> Delete </a>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            