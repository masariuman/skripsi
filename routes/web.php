<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//   return view('welcome');
//});
//
//Route::get('admin/dashboard', function () {
//    return view('admin/dashboard');
//});
//
//Route::get('admin/artikel', function () {
//    return view('admin/artikel');
//});
//
//Route:: get('admin/kategori', function () {
//    return view('admin/kategori');
//});

//auth
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN
Route::get('admin/user', 'AdminUser@index');

// PESANTREN
Route::get('admin/dashboard', 'PesantrenDashboard@index');
Route::get('admin/artikel', 'PesantrenArtikel@index');
Route::get('admin/artikel/kategori', 'PesantrenKategori@index');
Route::get('admin/artikel/komentar', 'PesantrenKomentar@index');
Route::get('admin/acara', 'PesantrenAcara@index');
Route::get('admin/profil', 'PesantrenProfil@index');
Route::get('admin/kontak', 'PesantrenKontak@index');
Route::get('admin/pengaturan', 'PesantrenPengaturan@index');
Route::get('admin/logout', 'PesantrenSession@logout');


