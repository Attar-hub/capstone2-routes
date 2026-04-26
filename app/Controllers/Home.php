<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $data = ['title' => 'Home Page'];
        return view('v_home', $data);
    }

    public function about()
    {
        $data = ['title' => 'About Page'];
        return view('v_about', $data);
    }

    public function produk()
    {
        $data['produk'] = [
            ['id' => 1, 'nama' => 'Baju', 'harga' => 50000],
            ['id' => 2, 'nama' => 'Celana', 'harga' => 75000],
        ];

        return view('v_produk', $data);
    }

    public function tambah($id)
    {
        // ambil keranjang dari session
        $keranjang = $this->session->get('keranjang') ?? [];

        // tambahin produk ke keranjang
        $keranjang[] = $id;

        // simpan lagi ke session
        $this->session->set('keranjang', $keranjang);

        return redirect()->to('/home/keranjang');
    }

    public function keranjang()
{
    $keranjang = $this->session->get('keranjang') ?? [];

    $produkList = [
        1 => ['nama' => 'Produk 1', 'harga' => 10000],
        2 => ['nama' => 'Produk 2', 'harga' => 20000],
    ];

    $data['keranjang'] = [];
    $data['total'] = 0;

    foreach ($keranjang as $id) {
        if (isset($produkList[$id])) {

            $produk = $produkList[$id];
            $produk['id'] = $id;

            $data['keranjang'][] = $produk;
            $data['total'] += $produk['harga'];
        }
    }

    return view('v_keranjang', $data);
}
public function hapus($id)
{
    $keranjang = $this->session->get('keranjang') ?? [];

    // cari index dan hapus
    $key = array_search($id, $keranjang);
    if ($key !== false) {
        unset($keranjang[$key]);
    }

    // simpan lagi ke session
    $this->session->set('keranjang', $keranjang);

    return redirect()->to('/home/keranjang');
}
public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}

}

