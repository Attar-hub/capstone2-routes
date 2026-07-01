<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>

    <!-- Tampilkan pesan error validasi jika ada -->
    <?php if(session()->has('validation')): ?>
        <div style="color: red;">
            <?= session('validation')->listErrors(); ?>
        </div>
    <?php endif; ?>

    <?= form_open('produk/simpan'); ?>
        <p>Nama Produk: <br> <input type="text" name="nama_produk" value="<?= old('nama_produk'); ?>"></p>
        <p>Harga: <br> <input type="text" name="harga" value="<?= old('harga'); ?>"></p>
        <p>Deskripsi: <br> <textarea name="deskripsi"><?= old('deskripsi'); ?></textarea></p>
        <button type="submit">Simpan</button>
    <?= form_close(); ?>

    <br>
    <a href="<?= base_url('produk'); ?>">Kembali</a>
</body>
</html>