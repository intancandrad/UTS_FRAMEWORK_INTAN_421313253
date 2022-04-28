<?php

namespace App\Controllers;

class Intan extends BaseController
{
    public function index()
    {
        return view('test');
    }
     public function halaman($nama,$nim)
    { 
        return ("Halo nama saya $nama, nim saya adalah $nim");
    }
}
