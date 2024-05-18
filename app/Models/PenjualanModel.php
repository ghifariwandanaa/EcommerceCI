<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_transaksi', 'nama_pembeli', 'no_hp', 'alamat'];
}
