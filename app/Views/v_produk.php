<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Produk</h5>

    <table class="table datatable">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach ($produk as $p): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $p['nama'] ?></td>
          <td><?= number_format($p['harga'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>

<?= $this->endSection() ?>