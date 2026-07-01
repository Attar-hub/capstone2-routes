<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        // 1. Menyiapkan data tiruan yang mau dimasukkan
        $data = [
            [
                'nama_produk' => 'Laptop Asus ROG',
                'harga'       => 15000000,
                'deskripsi'   => 'Laptop gaming spesifikasi tinggi.',
            ],
            [
                'nama_produk' => 'Mouse Gaming Logitech',
                'harga'       => 500000,
                'deskripsi'   => 'Mouse responsif dengan lampu RGB.',
            ],
            [
                'nama_produk' => 'Keyboard Mechanical',
                'harga'       => 850000,
                'deskripsi'   => 'Keyboard mechanical dengan switch mantap.',
            ],
        ];

        // 2. Memasukkan data ke dalam tabel 'produk'
        $this->db->table('produk')->insertBatch($data);
    }
}