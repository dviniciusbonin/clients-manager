<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
	public function login()
	{
		$data = [
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password')
		];

		$rule = [
			'password'   =>  'required|min_length[3]',
			'email' => 'required|min_length[10]',
		];

		if (!$this->validate($rule)) {
			return view('home', [
				'errors' => $this->validator->getErrors()
			]);
		}

		$userModel = new User();
		$user = $userModel->where('email', $data['email'])->first();

		if ($user && password_verify($data['password'], $user['password'])) {
			var_dump('logado');
			$session = session();
			$session->set('user_id', $user['id']);

			return redirect()->to('/clientes');
		}

		return view('home', [
			'errors' => ['Email ou senha incorretos!']
		]);
	}

	public function logout()
	{
		$session = session();
		$session->destroy();

		return redirect()->to('/');
	}
}
