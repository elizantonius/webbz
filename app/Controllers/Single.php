<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Single extends BaseController
{
    public function index()
    {
        echo view('Asset/Header');
        echo view("single");
        echo view('Asset/Footer');
    }
}
