<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userstable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
				'type'       => 'VARCHAR',
                'constraint' => '100',
				'unique'     => true,
            ],
			'phone' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true
			],
			'is_admin' => [
				'type' => 'TINYINT',
				'default' => 0
			]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
