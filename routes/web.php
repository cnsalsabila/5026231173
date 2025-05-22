<?php

use Illuminate\Support\Facades\Route;
// import java.io ;

//System.out.println
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

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
