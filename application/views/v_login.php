
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login BalitApp</title>
  <!-- inject:css -->
  <link rel="shortcut icon" href="<?= base_url()?>assets/gambar/children.png" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/css/vertical-layout-light/style.css">
  <style>
        .bg_login{
             background-color: linear-gradient(#5245c5, #70bce7);
        }
    </style>
</head>

<body class="bg_login">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            
              <div class="brand-logo text-center">
                <img src="<?= base_url()?>assets/gambar/balitapp.jpg" alt="logo">
              </div>

              <?= $this->session->flashdata('info');?>

              <div class="text-center">  
              <b><h4>Login BalitApp</h4></b>
               <!-- <b><h5 class="font-weight-light">Perpustakaan BPS Kota Malang</h5></b> -->
              </div>
              <br>
                <form method="post" action="<?= base_url()?>c_login" class="admin"> 
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg font-weight-medium auth-form-btn btn-block">SIGN IN</button>
                <!-- <a class="btn btn-info btn-lg font-weight-medium auth-form-btn btn-block" href="<?=base_url() ?>home">BACK TO HOME</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url()?>assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url()?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url()?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url()?>assets/js/template.js"></script>
  <script src="<?= base_url()?>assets/js/settings.js"></script>
  <script src="<?= base_url()?>assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
