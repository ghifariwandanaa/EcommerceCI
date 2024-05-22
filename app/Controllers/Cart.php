<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use App\Models\JualModel;
use App\Models\PenjualanModel;

class Cart extends BaseController
{
    protected $session;
    protected $barangModel;
    protected $penjualanModel;
    protected $jualModel;

    public function __construct()
    {
        $this->session = session();
        $this->barangModel = new BarangModel();
        $this->penjualanModel = new PenjualanModel();
        $this->jualModel = new JualModel();
    }

    public function index()
    {
        $items = $this->session->get('cart') ?? [];
        $data['items'] = $items;
        $data['subtotal'] = $this->calculateSubtotal($items);

        echo view('cart', $data);
    }

    public function addToCart($id)
    {
        $barang = $this->barangModel->find($id);

        if (!$barang) {
            return redirect()->to('/')->with('error', 'Barang tidak ditemukan');
        }

        $item = [
            'kode_barang' => $barang['kode_barang'],
            'nama_barang' => $barang['nama_barang'],
            'harga' => $barang['harga'],
            'jumlah' => 1,
            'foto_barang' => $barang['foto_barang']
        ];

        $cart = $this->session->get('cart') ?? [];

        $found = false;
        foreach ($cart as &$cart_item) {
            if ($cart_item['kode_barang'] == $item['kode_barang']) {
                $cart_item['jumlah']++;
                $found = true;
                break;
            }
        }

        if (!$found) {
            $cart[] = $item;
        }

        $this->session->set('cart', $cart);

        return redirect()->to('/cart');
    }

    public function store()
    {
        $cart = $this->session->get('cart');

        if (!$cart) {
            return redirect()->to('/cart')->with('error', 'Keranjang belanja kosong');
        }

        // Insert a new transaction in penjualan table
        $idTransaksi = $this->penjualanModel->insertPenjualan();

        // Insert each item in the cart into the jual table
        foreach ($cart as $item) {
            $data = [
                'kode_barang' => $item['kode_barang'],
                'id_transaksi' => $idTransaksi,
                'jumlah' => $item['jumlah'],
                'harga_jual' => $item['harga']
            ];
            $this->jualModel->insert($data);
        }

        // Store the transaction ID in session for use in the checkout
        $this->session->set('id_transaksi', $idTransaksi);

        // Clear the cart session
        $this->session->remove('cart');

        return redirect()->to('/checkout')->with('success', 'Checkout berhasil');
    }



    public function updateCart()
    {
        $quantities = $this->request->getPost('quantities');
        $cart = $this->session->get('cart');

        if ($cart && $quantities) {
            foreach ($cart as &$item) {
                if (isset($quantities[$item['kode_barang']])) {
                    $item['jumlah'] = (int)$quantities[$item['kode_barang']];
                }
            }

            $this->session->set('cart', $cart);

            return $this->response->setJSON([
                'subtotal' => $this->calculateSubtotal($cart),
                'items' => $cart
            ]);
        }

        return $this->response->setStatusCode(400, 'Invalid cart update request');
    }

    public function clearCart()
    {
        $this->session->remove('cart');
        return redirect()->to('/cart');
    }

    public function checkout()
    {
        $cart = $this->session->get('cart');

        if (!$cart) {
            return redirect()->to('/cart')->with('error', 'Keranjang belanja kosong');
        }

        foreach ($cart as $item) {
            $barang = $this->barangModel->find($item['kode_barang']);

            if (!$barang || $barang['stok'] < $item['jumlah']) {
                return redirect()->to('/cart')->with('error', 'Stok barang tidak mencukupi untuk ' . $barang['nama_barang']);
            }

            $newStok = $barang['stok'] - $item['jumlah'];
            $this->barangModel->update($item['kode_barang'], ['stok' => $newStok]);
        }

        $this->session->remove('cart');

        return redirect()->to('/cart')->with('success', 'Checkout berhasil');
    }

    private function calculateSubtotal($items)
    {
        return array_sum(array_map(function ($item) {
            return $item['harga'] * $item['jumlah'];
        }, $items));
    }
}
