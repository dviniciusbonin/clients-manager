<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use App\Models\Address;

class CustomersController extends BaseController
{
	public function findById($id)
	{
		$userModel = new User();

		$customer = $userModel->findById($id);

		return json_encode($customer);
	}

	public function index()
	{
		$session = session();
		$user_id = $session->get('user_id');

		$userModel = new User();

		$customers = $userModel->findCustomers();

		return view('clientes', [
			"title" => "Clientes cadastrados", "user_id" => $user_id,
			'customers' => $customers
		]);
	}

	public function create()
	{
		try {
			$userData = [
				'name' => $this->request->getVar('name'),
				'email' => $this->request->getVar('email'),
				'phone' => $this->request->getVar('phone')
			];

			$addressData = [
				'cep' => $this->request->getVar('cep'),
				'street' => $this->request->getVar('street'),
				'neighborhood' => $this->request->getVar('neighborhood'),
				'city' => $this->request->getVar('city'),
				'uf' => $this->request->getVar('uf')
			];

			$userModel = new User();
			$userId = $userModel->create($userData);

			$addressData['user_id'] = $userId;
			$addressModel = new Address();
			$addressModel->create($addressData);
		} catch (\Exception $e) {
			var_dump($e);
			die;
		}
	}
	public function update()
	{
		try {
			$id = $this->request->getVar('user-id');
			$userData = [
				'name' => $this->request->getVar('name'),
				'email' => $this->request->getVar('email'),
				'phone' => $this->request->getVar('phone')
			];

			$addressData = [
				'cep' => $this->request->getVar('cep'),
				'street' => $this->request->getVar('street'),
				'neighborhood' => $this->request->getVar('neighborhood'),
				'city' => $this->request->getVar('city'),
				'uf' => $this->request->getVar('uf')
			];

			$userModel = new User();

			$updateUser = $userModel->edit($id, $userData);

			$addressModel = new Address();
			$address = $addressModel->getUserAddress($id);
			$addressModel->update($address['id'], $addressData);
		} catch (\Exception $e) {
			var_dump($e);
			die;
		}
	}

	public function remove($id)
	{
		$userModel = new User();
		$userModel->delete($id);

		return redirect()->to('/clientes');
	}
}
