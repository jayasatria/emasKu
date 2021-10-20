<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EmasMini extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => '11',
                'unsigned'       => true,
                'auto_increment' => true,
                'null'  => true,
            ],
            '0.025'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '0.05' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '0.1' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '0.5' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '1' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '5' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '10' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '25' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '50' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
            '100' => [
                'type' => 'DECIMAL',
                'constraint' => '10,0',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hargaEmas');
    }

    public function down()
    {
        $this->forge->dropTable('hargaEmas');
    }
}
