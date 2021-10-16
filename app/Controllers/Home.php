<?php

namespace App\Controllers;



class Home extends BaseController
{
    public function index()
    {
        $data['url'] = "http://localhost:8080";
        $data['title'] = "EmasKu";

        return view('index/index', $data);
    }
}
