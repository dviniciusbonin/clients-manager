<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddressTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'BIGINT',
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'user_id' => [
				'type'       => 'BIGINT',
				'unsigned'   => true,
			],
			'cep' => [
				'type'       => 'VARCHAR',
				'constraint' => '10',
			],
			'street' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'neighborhood' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'city' => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'uf' => [
				'type'       => 'VARCHAR',
				'constraint' => '2',
			],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('address');
	}

	public function down()
	{
		$this->forge->dropTable('address');
	}
}
