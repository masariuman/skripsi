<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenArtikel extends Controller
{
    //view
    public function index() {
        return view('admin.artikel');
    }


}
