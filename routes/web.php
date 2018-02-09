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

// ADMIN user
Route::get('admin/user', 'AdminUser@index');
Route::get('admin/user/tambah_baru', 'AdminUser@create');
//search
Route::post('admin/user/search', 'ArtikelController@search');
//simpan data artikel
Route::post('admin/user', 'ArtikelController@store');
//edit kategori;;
Route::get('admin/user/{kategori}/edit', 'ArtikelController@edit');
Route::patch('admin/user/{kategori}', 'ArtikelController@update');
//hapus
Route::post('/admin/user/delete/{id}', 'ArtikelController@destroy');
//show
//Route::get('artikel/{kategori}', 'ArtikelController@show');
//show komen on artikel
//Route::get('artikel/komentar/{artikel}/{kategori}', 'ArtikelController@show_komentar_artikel');


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


