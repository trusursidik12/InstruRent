<?php

namespace App\Controllers;

use App\Models\mUsers;
use CodeIgniter\Controller;

class Register extends BaseController
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
        if ($this->request->getPost("Register")) {
            if ($this->users->register($this->request->getPost())) {
                $logindata = [
                    'email'  => $this->request->getPost("email"),
                    'password'  => $this->request->getPost("password"),
                    'logging_in' => TRUE
                ];

                $this->session->set($logindata);
                return redirect()->to('login');
            }
        }
        echo view('vHeader2');
        echo view('vRegister', $this->request->getPost());
        echo view('vFooter');
    }
}
