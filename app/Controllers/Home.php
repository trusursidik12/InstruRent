<?php

namespace App\Controllers;

use App\Models\mUsers;
use CodeIgniter\Controller;

class Home extends BaseController
{
	protected $users;
	protected $session;

	public function __construct()
	{
		$this->users =  new mUsers();
		$this->session = \Config\Services::session();
	}

	public function index()
	{
		echo view('vHeader');
		echo view('vHome');
		echo view('vFooter');
	}
}
