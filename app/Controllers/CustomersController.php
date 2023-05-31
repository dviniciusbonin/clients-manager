<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomersController extends BaseController
{
	public function index()
	{
		$session = session();
		$user_id = $session->get('user_id');
		return view('clientes', ["title" => "Clientes cadastrados", "user_id" => $user_id]);
	}
}
