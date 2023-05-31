<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = ['name', 'email', 'phone', 'address'];

	public function registerUser($data)
    {
        return $this->insert($data);
    }

	public function findUserByEmail($email)
	{
		return $this->where('email', $email)->first();
	}

	public function verifyPassword($password, $hashedPassword)
	{
		return password_verify($password, $hashedPassword);
	}
}
