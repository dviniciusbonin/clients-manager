<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustomersController extends BaseController
{
	public function index()
	{
		return view('clientes', ["title" => "Clientes cadastrados"]);
	}
}
