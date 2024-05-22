<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $allowedFields = [
        'kode_barang',
        'nama_barang',
        'deskripsi_barang',
        'harga',
        'stok',
        'foto_barang'
    ];

    protected $returnType = 'array';

    /**
     * Custom method to fetch barang by kode_barang
     */
    public function getBarangByKode($kode_barang)
    {
        return $this->where('kode_barang', $kode_barang)->first();
    }

    /**
     * Custom method to update stock of barang
     */
    public function updateStock($kode_barang, $newStok)
    {
        return $this->where('kode_barang', $kode_barang)->set(['stok' => $newStok])->update();
    }
}
