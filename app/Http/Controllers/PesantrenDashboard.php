<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesantrenDashboard extends Controller
{
    //view
    public function dashboard() {
        return view('admin.dashboard');
    }

    //artikel
    public function artikel() {
        return view('admin.artikel');
    }

    //kategori
    public function kategori() {
        return view('admin.kategori');
    }


}
