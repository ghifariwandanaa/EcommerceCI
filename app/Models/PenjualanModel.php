<?php

namespace App\Models;

use CodeIgniter\Model;
use Random\Randomizer;

class PenjualanModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_transaksi', 'nama_pembeli', 'no_hp', 'alamat'];


    public function insertPenjualan()
    {
        $id_transaksi = $this->generateRandomID();
        $db = db_connect();
        $query = "INSERT INTO penjualan (id_transaksi) VALUES (?)";
        $db->query($query, [$id_transaksi]);
        return $id_transaksi;
    }

    private function generateRandomID()
    {
        return "TRS-" . bin2hex(random_bytes(8)); // Contoh cara menghasilkan ID acak
    }

    public function updatePenjualan($id_transaksi, $data)
    {
        return $this->update($id_transaksi, $data);
    }
}
