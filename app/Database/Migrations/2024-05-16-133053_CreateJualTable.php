<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJualTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_barang' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'id_transaksi' => [
                'type' => 'CHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'jumlah' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'harga_jual' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('kode_barang');
        $this->forge->addKey('id_transaksi');
        $this->forge->createTable('jual');
    }

    public function down()
    {
        $this->forge->dropTable('jual');
    }
}
