<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenPengaturan extends Controller
{
    //pengaturan
    public function index() {
        return view('admin.pengaturan');
    }
}
