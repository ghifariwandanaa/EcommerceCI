<?php

namespace App\Models;

use CodeIgniter\Model;

class JualModel extends Model
{
    protected $table = 'jual';
    protected $allowedFields = ['kode_barang', 'id_transaksi', 'jumlah', 'harga_jual'];
}
