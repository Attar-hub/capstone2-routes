<?= $this->extend('layout/v_wrapper') ?>

<?= $this->section('content') ?>

<div class="card p-4">
    <h1>Daftar Produk</h1>
    <hr>

    <p>Produk 1 - Rp10.000</p>
    <a href="<?= base_url('home/tambah/1') ?>" class="btn btn-primary">
        Tambah ke Keranjang
    </a>

    <br><br>

    <p>Produk 2 - Rp20.000</p>
    <a href="<?= base_url('home/tambah/2') ?>" class="btn btn-primary">
        Tambah ke Keranjang
    </a>
</div>

<?= $this->endSection() ?>