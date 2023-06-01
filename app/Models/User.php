<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $allowedFields        = ['id', 'name', 'email', 'phone', 'is_admin'];

	public function create($data)
	{
		return $this->insert($data);
	}

	public function edit($userId, $data)
	{
		return $this->update($userId, $data);
	}

	public function findUserByEmail($email)
	{
		return $this->where('email', $email)->first();
	}

	public function verifyPassword($password, $hashedPassword)
	{
		return password_verify($password, $hashedPassword);
	}

	public function findCustomers()
	{
		$users = $this->where('is_admin', 0)->findAll();
		return $users;
	}

	public function findById($id)
	{
		$user = $this->select('id, name, email, phone')->where('id', $id)->where('is_admin', 0)->first();

		if(!$user) return null;

		$addressModel = new Address();
		$address = $addressModel->where('user_id', $id)->first();

		$user['address'] = $address;

		return $user;
	}
}
