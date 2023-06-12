<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/daftar_barang', function () {
    return view('daftar_barang');
});
Route::get('/daftar_akun', function () {
    return view('daftar_akun');
});
Route::get('/daftar_peminjaman_barang', function () {
    return view('daftar_peminjaman_barang');
});
Route::get('/daftar_persetujuan_barang', function () {
    return view('daftar_persetujuan_barang');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/profile', function () {
    return view('profile');
});
