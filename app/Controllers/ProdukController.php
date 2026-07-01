<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProdukController extends BaseController
{
    public function index()
    {
        // 1. Inisialisasi ProdukModel yang tadi kita buat
        $produkModel = new ProdukModel();

        // 2. Ambil semua data dari tabel produk
        $data['semua_produk'] = $produkModel->findAll();

        // 3. Kirim data tersebut ke sebuah file View bernama 'v_produk'
        return view('v_produk', $data);
    }
}