<?php

namespace App\Controllers;



class Home extends BaseController
{
    public function index()
    {
        $this->db->where('id' < 9);
        $data['emasMini'] = $this->db->get('emasMini')->result_array();
        $data['title'] = "EmasKu";

        return view('index/index', $data);
    }
}
