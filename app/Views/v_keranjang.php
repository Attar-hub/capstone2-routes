<h2>Keranjang Belanja</h2>
<table border="1">
    <tr>
        <th>Nama Produk</th>
        <th>Harga</th>
    </tr>
    <?php 
    $cart = session()->get('cart');
    if ($cart) :
        foreach ($cart as $item) : ?>
        <tr>
            <td><?= $item['nama_produk']; ?></td>
            <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
        </tr>
    <?php endforeach; 
    endif; ?>
</table>
<br>
<a href="<?= base_url('produk'); ?>">Kembali Belanja</a>