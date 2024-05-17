<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_barang' => [
                'type' => 'CHAR',
                'constraint' => '100',
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'stok' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'foto_barang' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
            ],
        ]);
        $this->forge->addKey('kode_barang', true);
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
