<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index()
    {
        echo view('Asset/Header');
        echo view('beranda_vw');
        echo view('Asset/Footer');
    }
}
