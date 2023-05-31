<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Exception;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => password_hash('admin', PASSWORD_BCRYPT),
            'phone' => '',
            'is_admin' => 1
        ];

		$this->db->table('users')->insert($data);
    }
}
