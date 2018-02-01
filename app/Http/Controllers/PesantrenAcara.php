<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenAcara extends Controller
{
    //view
    public function index() {
        return view('admin.acara');
    }

}
