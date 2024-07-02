<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactionpass extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'firstname' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'transactionid' => [
                'type' => 'TEXT',
                'null' => true,
            ],   
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactionpass');
    }

    public function down()
    {
        $this->forge->dropTable('transactionpass');
    }
}
