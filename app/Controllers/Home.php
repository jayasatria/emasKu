<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "EmasKu";
        echo view('template/header', $data);
        echo view('index/index');
        echo view('template/footer');
    }
}
