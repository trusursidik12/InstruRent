<?php

namespace App\Controllers;

use App\Models\mUsers;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		echo view('vHeader');
		echo view('vHome');
		echo view('vFooter');
	}
}
