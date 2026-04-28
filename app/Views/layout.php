<?php
$hlm = "Home";

$uri = uri_string();

if ($uri == "produk") {
  $hlm = "Produk";
} elseif ($uri == "keranjang") {
  $hlm = "Keranjang";
} elseif ($uri != "") {
  $hlm = ucwords($uri);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>- Toko - <?= $hlm ?></title>

  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <?= $this->include('components/header') ?>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= ($uri == '') ? '' : 'collapsed' ?>" href="<?= base_url('/') ?>">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= ($uri == 'keranjang') ? '' : 'collapsed' ?>" href="<?= base_url('keranjang') ?>">
          <i class="bi bi-cart-check"></i>
          <span>Keranjang</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= ($uri == 'produk') ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
          <i class="bi bi-receipt"></i>
          <span>Produk</span>
        </a>
      </li>

    </ul>
  </aside>
  <!-- End Sidebar -->

  <main id="main" class="main">

    <!-- ======= Page Title + Breadcrumb ======= -->
    <div class="pagetitle">
      <h1><?= $hlm ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?= base_url('/') ?>">Home</a>
          </li>
          <?php if ($hlm != "Home") { ?>
            <li class="breadcrumb-item active"><?= $hlm ?></li>
          <?php } ?>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <?= $this->renderSection('content') ?>

        </div>
      </div>
    </section>

  </main>

  <?= $this->include('components/footer') ?>

  <script src="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/js/main.js"></script>

</body>
</html>