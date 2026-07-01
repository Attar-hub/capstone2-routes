<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdukTable extends Migration
{
    public function up()
    {
        // 1. Mendefinisikan kolom-kolom tabel produk
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        // 2. Menentukan Primary Key
        $this->forge->addKey('id', true);

        // 3. Membuat tabel dengan nama 'produk'
        $this->forge->createTable('produk');
    }

    public function down()
    {
        // Menghapus tabel 'produk' jika di-rollback
        $this->forge->dropTable('produk');
    }
}