<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    // 1. Tentukan nama tabel yang digunakan oleh model ini
    protected $table            = 'produk';
    
    // 2. Tentukan primary key dari tabelnya
    protected $primaryKey       = 'id';

    // 3. Daftarkan kolom mana saja yang boleh diisi atau diubah datanya
    protected $allowedFields    = ['nama_produk', 'harga', 'deskripsi'];

    // 4. Aktifkan fitur otomatis mencatat waktu (opsional, biarkan default jika tidak dipakai)
    protected $useTimestamps    = false;
}