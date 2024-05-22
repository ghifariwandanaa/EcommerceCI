<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BarangModel;

class Cart extends BaseController
{
    public function __construct()
    {
        $this->session = session();
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $session = session();
        $items = $session->get('cart') ?? [];

        $data['items'] = $items;
        $data['subtotal'] = $this->calculateSubtotal($items);

        echo view('cart', $data);
    }

    public function viewCart()
    {
        $cart = $this->session->get('cart') ?? [];
        $subtotal = array_sum(array_map(function ($item) {
            return $item['harga'] * $item['jumlah'];
        }, $cart));

        return view('cart', ['items' => $cart, 'subtotal' => $subtotal]);
    }

    public function addToCart($id)
    {
        $model = new BarangModel();
        $barang = $model->find($id);

        $item = [
            'kode_barang' => $barang['kode_barang'],
            'nama_barang' => $barang['nama_barang'],
            'harga' => $barang['harga'],
            'jumlah' => 1,
            'foto_barang' => $barang['foto_barang']
        ];

        $cart = $this->session->get('cart') ?? [];

        // Check if item is already in cart
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

    public function updateCart()
    {
        $quantities = $this->request->getPost('quantities');
        $cart = $this->session->get('cart');

        if ($cart && $quantities) {
            foreach ($cart as &$item) {
                if (isset($quantities[$item['kode_barang']])) {
                    $item['jumlah'] = (int) $quantities[$item['kode_barang']];
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

    private function calculateSubtotal($items)
    {
        return array_sum(array_map(function ($item) {
            return $item['harga'] * $item['jumlah'];
        }, $items));
    }

    public function checkout()
    {
        $cart = $this->session->get('cart');

        // Lakukan validasi, pastikan keranjang tidak kosong
        if (!$cart) {
            // Tampilkan pesan kesalahan atau redirect ke halaman lain
        }

        // Loop melalui barang-barang dalam keranjang
        foreach ($cart as $item) {
            // Dapatkan informasi stok barang dari database
            $barang = $this->barangModel->find($item['kode_barang']);

            // Perbarui stok barang
            $newStok = $barang['stok'] - $item['jumlah'];
            $this->barangModel->updateStock($item['kode_barang'], $newStok);
        }

        // Setelah mengupdate stok barang, hapus session keranjang
        $this->session->remove('cart');

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->to('/cart');
    }

}
