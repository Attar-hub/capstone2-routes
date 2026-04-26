<?= $this->extend('layout/v_wrapper') ?>

<?= $this->section('content') ?>

<div class="card p-4">
    <h1 class="text-success">Keranjang Belanja</h1>
    <hr>

    <?php if (!empty($keranjang)) : ?>
        <ul>
            <?php foreach ($keranjang as $item) : ?>
            <li>
    <?= $item['nama']; ?> - Rp<?= number_format($item['harga']); ?>

    <a href="<?= base_url('home/hapus/' . $item['id']); ?>"
        style="color:red; margin-left:10px;">
        Hapus 
        <a>
        </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <p><b>Total: Rp <?= number_format($total, 0, ',', '.') ?></b></p>
    <?php else : ?>
        <p>Keranjang masih kosong</p>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>