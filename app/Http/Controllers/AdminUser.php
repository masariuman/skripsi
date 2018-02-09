<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUser extends Controller
{
    //view
  	public function index() {
        return view('admin.user');
    } 
}
