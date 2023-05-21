
<?php
  if ($this->session->userdata('level') == 'Super Admin') {?>

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>dashboard">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>soal">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Manajemen Soal</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>user">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">Data User</span>
          </a>
        </li>
        <ul>
    </nav>

      
      </ul>
    </nav>
    <?php } else { ?>
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>dashboard">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-paper menu-icon"></i>
            <span class="menu-title">Data Buku</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="<?= base_url()?>penyunting">Penyunting</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url()?>penerbit">Penerbit</a></li>
              <li class="nav-item"> <a class="nav-link" href="<?= base_url()?>buku">Buku</a></li>
            </ul>
          </div>
        </li>
        
      <!-- <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>a_katalog">
            <i class="icon-layout menu-icon"></i>
            <span class="menu-title">Katalog Buku</span>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>galeri">
            <i class="icon-contract menu-icon"></i>
            <span class="menu-title">Galeri</span>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a class="nav-link" href="<?= base_url()?>feedback">
            <i class="icon-columns menu-icon"></i>
            <span class="menu-title">Feedback</span>
          </a>
        </li> -->

      
      </ul>
    </nav>
    <?php }
?>
