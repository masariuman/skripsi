<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenKategori extends Controller
{
    //kategori
    public function index() {
        return view('admin.kategori');
    }
}
