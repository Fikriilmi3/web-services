<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>admin/update">
                <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $admin['id'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input type="text" name="nama"  value="<?= $admin['nama'];?>" class="form-control" placeholder="Input Nama Admin" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username"  value="<?= $admin['username'];?>" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="text" name="password"  value="<?= $admin['password'];?>" class="form-control" placeholder="Input Password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Level</label>
                    <select name="level" class="form-control"required>
                 <?php 
                    if ($admin['level'] == "Super Admin") {?>
                        <option value="Super Admin" selected> Super Admin </option>
                        <option value="Admin"> Admin </option>
                    <?php } else {?>
                        <option value="Super Admin" > Super Admin </option>
                        <option value="Admin" selected> Admin </option>
                    <?php }
                    ?>
                </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>admin" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html> -->

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
    <div class="container-fluid">
        <!-- <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1> -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>user/update">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Edit Data User
                  </p>
                  <hr>
                <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $user['id'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Username</label>
                    <input type="text" name="username"  value="<?= $user['username'];?>" class="form-control" placeholder="Input Username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Lengkap Anak</label>
                    <input type="text" name="nama_anak"  value="<?= $user['nama_anak'];?>" class="form-control" placeholder="Input Nama Lengkap Anak" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control"required>
                 <?php 
                    if ($user['jenis_kelamin'] == "Laki-laki") {?>
                        <option value="Laki-laki" selected> Laki-laki</option>
                        <option value="Perempuan"> Perempuan </option>
                    <?php } else {?>
                        <option value="Laki-laki" > Laki-laki</option>
                        <option value="Perempuan" selected> Perempuan </option>
                    <?php }
                    ?>
                </select>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputName1">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin"  value="<?= $user['jenis_kelamin'];?>" class="form-control" placeholder="Input Jenis Kelamin" required>
                </div> -->
                <div class="form-group">
                    <label for="exampleInputName1">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir"  value="<?= $user['tempat_lahir'];?>" class="form-control" placeholder="Input Tempat Lahir" required>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?= $user['tgl_lahir'];?>" class="form-control" placeholder="Input Tanggal Lahir" required>
                    <script>
                    $(document).ready(function() {
                        $("#tgl_lahir").datepicker({
                            dateFormat: "yy-mm-dd",
                            changeMonth: true,
                            changeYear: true,
                            yearRange: "1900:2023" // Sesuaikan dengan range tahun yang diinginkan
                        });
                    });
                    </script>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Nama Ibu</label>
                    <input type="text" name="nama_ibu"  value="<?= $user['nama_ibu'];?>" class="form-control" placeholder="Input Nama Ibu" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Telepone</label>
                    <input type="text" name="telepone"  value="<?= $user['telepone'];?>" class="form-control" placeholder="Input Nomor Telepone" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="text" name="password"  value="<?= $user['password'];?>" class="form-control" placeholder="Input Password" required>
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>user" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html>