<?php

namespace App\Controllers;

use App\Models\mUsers;
use CodeIgniter\Controller;

class Register extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users =  new mUsers();
    }

    public function index()
    {
        if ($this->request->getPost("Register")) {
            if ($this->users->register($this->request->getPost())) {
                return redirect()->to('login');
            }
        }
        echo view('vHeader2');
        echo view('vRegister', $this->request->getPost());
        echo view('vFooter');
    }
}
