<?php

namespace App\Controllers;

use App\Models\mUsers;
use CodeIgniter\Controller;

class Login extends BaseController
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
        if ($this->session->logging_in || true) {
            if ($this->login_action($this->session->email, $this->session->password)) {
                return redirect()->to('home');
            } else {
                return redirect()->to('register');
            }
        }
    }

    public function login_action($email, $password)
    {
        $user = $this->users->where('email', $email)->first();
        if ($user->email == $email && password_verify($password, $user->password)) {
            $this->session->remove(['logging_in', 'password']);
            $logindata = [
                'username'  => $email,
                'user_id'  => $user->id,
                'group_id'  => $user->group_id,
                'name'  => $user->name,
                'company'  => $user->company,
                'is_backofficer'  => $user->is_backofficer,
                'isloggedin' => TRUE
            ];
            $this->session->set($logindata);

            $this->users->login_action($user->id);
            $this->session->setFlashdata('msg', 'Login Berhasil');
            return true;
        }
        $this->session->setFlashdata('msg', 'Login Gagal');
        return false;
    }
}
