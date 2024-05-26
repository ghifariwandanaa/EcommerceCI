<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenjualanModel;
use App\Models\BarangModel;
use App\Models\JualModel;

class CheckoutController extends BaseController
{
    protected $penjualanModel;
    protected $barangModel;
    protected $jualModel;
    protected $session;

    public function __construct()
    {
        $this->penjualanModel = new PenjualanModel();
        $this->barangModel = new BarangModel();
        $this->jualModel = new JualModel();
        $this->session = session();
    }

    public function index()
    {
        $idTransaksi = $this->session->get('id_transaksi');
        if (!$idTransaksi) {
            return redirect()->to('/')->with('error', 'ID Transaksi tidak ditemukan');
        }

        echo view('checkout', ['id_transaksi' => $idTransaksi]);
    }

    public function processCheckout()
    {
        // Ambil data dari form
        $idTransaksi = $this->request->getPost('id_transaksi');
        $namaPembeli = $this->request->getPost('nama_pembeli');
        $noHP = $this->request->getPost('no_hp');
        $alamat = $this->request->getPost('alamat');

        // Perbarui tabel penjualan dengan informasi pembeli
        $dataPenjualan = [
            'nama_pembeli' => $namaPembeli,
            'no_hp' => $noHP,
            'alamat' => $alamat
        ];

        $this->penjualanModel->updatePenjualan($idTransaksi, $dataPenjualan);

        // Ambil semua item di transaksi jual berdasarkan id_transaksi
        $items = $this->jualModel->where('id_transaksi', $idTransaksi)->findAll();

        // Loop melalui barang-barang dalam transaksi untuk mengurangi stok
        foreach ($items as $item) {
            $barang = $this->barangModel->find($item['kode_barang']);
            if ($barang) {
                $newStok = $barang['stok'] - $item['jumlah'];
                $this->barangModel->updateStock($item['kode_barang'], $newStok);
            }
        }

        // Hapus id_transaksi dari session setelah checkout selesai
        $this->session->remove('id_transaksi');

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/barang');
    }
}
