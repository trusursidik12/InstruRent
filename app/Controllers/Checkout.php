<?php

namespace App\Controllers;

use App\Models\mProducts;
use CodeIgniter\Controller;

class Checkout extends BaseController
{
    protected $products;
    protected $session;

    public function __construct()
    {
        $this->products =  new mProducts();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data[] = "";
        echo view('vHeader2');
        echo view('vCheckout', $data);
        echo view('vFooter');
    }
}
