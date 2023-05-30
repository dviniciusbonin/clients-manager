<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home', ['title' => 'Gerenciador de clientes']);
	}
}
