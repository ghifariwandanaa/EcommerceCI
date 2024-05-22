<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang'  => 'BRG004',
                'nama_barang'  => 'Ayam Bakar',
                'harga'        => 100000,
                'stok'         => 50,
                'foto_barang'  => 'product-7.jpg'
            ],
            [
                'kode_barang'  => 'BRG005',
                'nama_barang'  => 'Persib Bandung',
                'harga'        => 20000,
                'stok'         => 30,
                'foto_barang'  => 'product-6.jpg'
            ],
            [
                'kode_barang'  => 'BRG006',
                'nama_barang'  => 'Naga Air',
                'harga'        => 15000,
                'stok'         => 20,
                'foto_barang'  => 'product-8.jpg'
            ],
            // Tambahkan data barang lainnya sesuai kebutuhan
        ];

        // Using Query Builder
        $this->db->table('barang')->insertBatch($data);
    }
}
