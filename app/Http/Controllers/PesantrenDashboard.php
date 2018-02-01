<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenDashboard extends Controller
{
    //view
    public function index() {
        return view('admin.dashboard');
    }

    //kategori
    public function kategori() {
        return view('admin.kategori');
    }


}
