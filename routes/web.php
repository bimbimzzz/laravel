<?php

use App\Http\Controllers\SiswaCOntroller;
use App\Http\Controllers\SiswaController as ControllersSiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/screen', function () {
    return view('layout.screen');
});

Route::get('/page', function () {
    return view('layout.page');
});

Route::get('/siswa', function () {
    return 'Saya Siswa';
});

// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>saya siswa dengan $id</h1>";
// })->where('id', '[0-9]+'); //jika kita ingin membuat karakter hany angka saja

// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>saya siswa dengan $id dan $nama</h1>";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/screens2', [SiswaController::class, 'index2']);

Route::get('/siswa/{id}', [SiswaController::class, 'detail'])->where('id', '[0-9]+');
Route::get('/siswa/{id}/{nama}', [SiswaController::class, 'detail'])->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);
