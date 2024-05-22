<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SBarang extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang'  => 'BRG001',
                'nama_barang'  => 'Kursi',
                'harga'        => 100000,
                'stok'         => 50,
                'foto_barang'  => 'product-1.jpg'
            ],
            [
                'kode_barang'  => 'BRG002',
                'nama_barang'  => 'Meja Doraemon',
                'harga'        => 20000,
                'stok'         => 30,
                'foto_barang'  => 'product-2.jpg'
            ],
            [
                'kode_barang'  => 'BRG003',
                'nama_barang'  => 'Barang Tiga',
                'harga'        => 10000,
                'stok'         => 20,
                'foto_barang'  => 'product-3.jpg'
            ],
            [
                'kode_barang'  => 'BRG004',
                'nama_barang'  => 'Barang Empat',
                'harga'        => 12000,
                'stok'         => 20,
                'foto_barang'  => 'product-4.jpg'
            ],
            [
                'kode_barang'  => 'BRG005',
                'nama_barang'  => 'Barang Lima',
                'harga'        => 11000,
                'stok'         => 30,
                'foto_barang'  => 'product-5.jpg'
            ],
            [
                'kode_barang'  => 'BRG006',
                'nama_barang'  => 'Barang Lima',
                'harga'        => 21000,
                'stok'         => 40,
                'foto_barang'  => 'product-5.jpg'
            ],
            // Tambahkan data barang lainnya sesuai kebutuhan
        ];

        // Using Query Builder
        $this->db->table('barang')->insertBatch($data);
    }
}
