<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenProfil extends Controller
{
    //index
    public function index() {
        return view('admin.profil');
    }
}
