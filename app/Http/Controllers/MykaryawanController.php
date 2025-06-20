<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MykaryawanController extends Controller {
    public function index(){
        // mengambil data dari table genteng
    	$mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data genteng ke view index
    	return view('indexmykaryawan',['mykaryawan' => $mykaryawan]);
    }

    public function edit($kodepegawai){

        // mengambil data pegawai berdasarkan id yang dipilih
	    $mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editmykaryawan',['mykaryawan' => $mykaryawan]);
    }

    public function update(Request $request){
        // update data pegawai
        DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/eas');
    }

    public function view($kodepegawai) {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('viewmykaryawan', ['mykaryawan' => $mykaryawan]);
    }
}
