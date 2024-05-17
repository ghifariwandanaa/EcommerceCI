<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $model = new  Mbarang();
        // $data['brg'] = $model->orderBy('Kode', 'DESC')->findAll();
        return view('LandingPage/view_index');
    }
}
