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

    public function detail($id)
    {
        $produkModel = new ProdukModel();
        
        // Mengambil satu data berdasarkan ID
        $data['produk'] = $produkModel->find($id);

        // Jika data tidak ditemukan, kita bisa tampilkan error atau redirect
        if (empty($data['produk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk tidak ditemukan');
        }

        return view('v_detail', $data);
    }
    public function tambah()
    {
        // 1. Load helper form jika perlu
        helper(['form']);

        // 2. Tampilkan view form tambah
        return view('v_tambah_produk');
    }

    public function simpan()
    {
        helper(['form']);
        $produkModel = new ProdukModel();

        // 3. Aturan Validasi
        $rules = [
            'nama_produk' => 'required|min_length[3]',
            'harga'       => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            // Jika validasi gagal, kembali ke form dengan pesan error
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // 4. Jika sukses, simpan ke database
        $produkModel->save([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'harga'       => $this->request->getPost('harga'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('/produk')->with('success', 'Data berhasil ditambahkan!');
    }
}