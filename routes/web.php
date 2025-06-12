<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\GentengDBController;
use App\Http\Controllers\PageCounterController;

//System.out.println
Route::get('/', function () {
    return view('welcome');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('tryit', function () {
	return view('tryit');
});

Route::get('relative', function () {
	return view('relative');
});

Route::get('images', function () {
	return view('images');
});

Route::get('latihan', function () {
	return view('latihan');
});

Route::get('bootstrapz', function () {
	return view('bootstrapz');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('index', function () {
	return view('index');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/genteng', [GentengDBController::class, 'indexgenteng']);
Route::get('/genteng/tambah', [GentengDBController::class, 'tambahgenteng']);
Route::post('/genteng/store', [GentengDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/genteng/edit/{id}',[GentengDBController::class, 'editgenteng']);
Route::post('/genteng/update',[GentengDBController::class, 'update']);
Route::get('/genteng/hapus/{id}', [GentengDBController::class, 'hapus']);
Route::get('/genteng/cari', [GentengDBController::class, 'cari']);

Route::get('/pagecounter', [PageCounterController::class, 'indexpage']);
