<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
            'last_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gender' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'from' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'to' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'contact_no' =>[
                  'type' => 'TEXT',
                  'null' =>  true,
            ],
            'date'  =>[
                'type' => 'TEXT',
                'null' =>  true,
            ],
            'price' =>[
                'type' =>'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('reservation');
    }

    public function down()
    {
        $this->forge->dropTable('reservation');
    }
}
