<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pass extends Migration
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
            'fromdate' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'todate' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'price' =>[
                  'type' => 'TEXT',
                  'null' =>  true,
            ],
            'identity'  =>[
                'type' => 'bytea',
                'null' =>  true,
            ],
            'bonafidefile' =>[
                'type' =>'bytea',
                'null' => true,
            ],
            'bonafide' =>[
                'type' =>'TEXT',
                'null' => true,
            ],
            'subject' =>[
                 'type' =>'TEXT',
                 'null' =>true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pass');
    }

    public function down()
    {
        $this->forge->dropTable('pass');
    }
}
