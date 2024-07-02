<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fare extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'from' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'to' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'price_for_normal_bus' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'price_for_AC_bus' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('fare');
    }

    public function down()
    {
        $this->forge->dropTable('fare');
    }
}
