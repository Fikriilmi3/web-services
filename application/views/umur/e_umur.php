<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Kategori Umur</title>
</head>
<body>
    <div class="container-fluid">
        <!-- <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1> -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>umur/update">
                  <h3 class="card-title">BalitApp</h3>
                  <p class="card-description">
                    Form Edit Data Kategori Umur
                  </p>
                  <hr>
                <div class="form-group">
                    <label for="exampleInputName1">Id</label>
                    <input type="text" name="id" value="<?= $umur['id'];?>"class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Kategori Umur</label>
                    <input type="text" name="umur"  value="<?= $umur['umur'];?>" class="form-control" placeholder="Input Kategori Umur" required>
                </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Update </button>
                    <a href="<?= base_url()?>umur" class="btn btn-danger"> Batal</a>
                </div>
                
            </form>
            </div>
        </div>
    </div>
</body>
</html>