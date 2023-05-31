<?php

namespace App\Models;

use CodeIgniter\Model;

class Address extends Model
{
	protected $table = 'address';
	protected $primaryKey = 'id';
	protected $allowedFields = ['user_id', 'cep', 'street', 'neighborhood', 'city', 'uf'];

	protected $useTimestamps = false;

	public function create($data)
	{
		return $this->insert($data);
	}

	public function edit($addressId, $data)
	{
		return $this->update($addressId, $data);
	}

	public function getUserAddress($userId)
	{
		return $this->where('user_id', $userId)->first();
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}
}
