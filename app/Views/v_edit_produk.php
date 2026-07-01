<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk: <?= $produk['nama_produk']; ?></h2>

    <?= form_open('produk/update/' . $produk['id']); ?>
        <p>Nama Produk: <br> <input type="text" name="nama_produk" value="<?= $produk['nama_produk']; ?>"></p>
        <p>Harga: <br> <input type="text" name="harga" value="<?= $produk['harga']; ?>"></p>
        <p>Deskripsi: <br> <textarea name="deskripsi"><?= $produk['deskripsi']; ?></textarea></p>
        <button type="submit">Update Data</button>
    <?= form_close(); ?>

    <br>
    <a href="<?= base_url('produk'); ?>">Kembali</a>
</body>
</html>     