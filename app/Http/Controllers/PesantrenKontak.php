<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenKontak extends Controller
{
    //kontak
    public function index() {
        return view('admin.kontak');
    }
}
