<!-- <div class="col-12 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>admin/simpan">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Data User
                  </p>
                  <hr>
                  <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $id;?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Input Nama Admin" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Level</label>
                 <select name="level" class="form-control"required>
                    <option value=""> - Pilih Jenis Level - </option>
                    <option value="Super Admin"> Super Admin</option>
                    <option value="Admin"> Admin </option>
                </select>
                  </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Simpan </button>
                    <a href="<?= base_url()?>penerbit" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>User</title>
</head>
<body>
          <div class="col-12 grid-margin stretch-card">
            <div class="card shadow mb-4">
              <div class="card-body">
              <form method="post" action="<?= base_url()?>user/simpan">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Tambah Data User
                  </p>
                  <hr>
                  <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $id;?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Lengkap Anak</label>
                    <input type="text" name="nama_anak" class="form-control" placeholder="Input Nama Lengkap Anak" required>
                </div>
                <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                 <select name="jenis_kelamin" class="form-control"required>
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option value="Laki-laki"> Laki-laki</option>
                    <option value="Perempuan"> Perempuan </option>
                 </select>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputName1">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" placeholder="Input Jenis Kelamin" required>
                </div> -->
                <div class="form-group">
                    <label for="exampleInputName1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Input Tempat Lahir" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Input Tanggal Lahir (thn-bln-tgl)" required>
                    <!-- <button id="btn_tgl_lahir" type="button" class="btn btn-primary">Pilih Tanggal</button> -->
                    <script>
                    $(document).ready(function() {
                        $("#tgl_lahir").datepicker({
                            dateFormat: "yy-mm-dd",
                            changeMonth: true,
                            changeYear: true,
                            yearRange: "1900:2023" // Sesuaikan dengan range tahun yang diinginkan
                        });
                        $("#btn_tgl_lahir").click(function() {
                          $("#tgl_lahir").datepicker("show");
                        });
                    });
                    </script>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Nama Ibu</label>
                    <input type="text" name="nama_ibu" class="form-control" placeholder="Input Nama Ibu" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Telepone</label>
                    <input type="text" name="telepone" class="form-control" placeholder="Input Nomor Telepone" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Input Password" required>
                </div>
                <!-- <div class="form-group">
                <label for="exampleInputPassword1">Level</label>
                 <select name="level" class="form-control"required>
                    <option value=""> - Pilih Jenis Level - </option>
                    <option value="Super Admin"> Super Admin</option>
                    <option value="Admin"> Admin </option>
                 </select>
                </div> -->
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"> Simpan </button>
                      <a href="<?= base_url()?>user" class="btn btn-danger"> Batal</a>
                    </div>

                  </form>
                </div>
              </div>
            </div>
            </body>
</html>
            