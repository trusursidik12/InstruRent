<?php

namespace App\Controllers;

use App\Models\Musers;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('home');
		echo view('footer');
		$users = new Musers();
		echo "<pre>";
		print_r($users->findAll());
		echo "</pre>";
	}
}
