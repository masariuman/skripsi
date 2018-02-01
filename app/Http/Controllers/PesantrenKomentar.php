<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenKomentar extends Controller
{
    //view
    public function index() {
        return view('admin.komentar');
    }
}
