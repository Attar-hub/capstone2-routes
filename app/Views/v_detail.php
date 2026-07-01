<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Produk</title>
</head>
<body>
    <h2>Detail Produk: <?= $produk['nama_produk']; ?></h2>
    <p><strong>Harga:</strong> Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></p>
    <p><strong>Deskripsi:</strong> <?= $produk['deskripsi']; ?></p>
    
    <br>
    <a href="<?= base_url('produk'); ?>">Kembali ke Daftar Produk</a>
</body>
</html>