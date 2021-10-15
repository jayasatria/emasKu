<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['url'] = "http://localhost:8080";
        $data['title'] = "EmasKu";
        echo view('template/header', $data);
        echo view('index/index');
        echo view('template/footer');
    }
}
