<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GentengDBController extends Controller
{
    public function indexgenteng()
    {
    	// mengambil data dari table genteng
    	$genteng = DB::table('genteng')->paginate(10);

    	// mengirim data genteng ke view index
    	return view('indexgenteng',['genteng' => $genteng]);
    }

// method untuk menampilkan view form tambah genteng
    public function tambahgenteng(){
        // memanggil view tambah
        return view('tambahgenteng');
    }

    // method untuk insert data ke table genteng
public function store(Request $request)
{
	// insert data ke table genteng
	DB::table('genteng')->insert([
		'merkGenteng' => $request->merkgenteng,
		'hargaGenteng' => $request->hargagenteng,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman genteng
	return redirect('/genteng');

}

// method untuk edit data genteng
public function editgenteng($id)
{
	// mengambil data genteng berdasarkan id yang dipilih
	$genteng = DB::table('genteng')->where('ID',$id)->get();
	// passing data genteng yang didapat ke view edit.blade.php
	return view('editgenteng',['genteng' => $genteng]);

}

// update data genteng
public function update(Request $request)
{
	// update data genteng
	DB::table('genteng')->where('ID',$request->id)->update([
		'merkGenteng' => $request->merkgenteng,
		'hargaGenteng' => $request->hargagenteng,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman genteng
	return redirect('/genteng');
}

// method untuk hapus data genteng
public function hapus($id)
{
	// menghapus data genteng berdasarkan id yang dipilih
	DB::table('genteng')->where('ID',$id)->delete();

	// alihkan halaman ke halaman genteng
	return redirect('/genteng');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table genteng sesuai pencarian data
		$genteng = DB::table('genteng')
		->where('merkGenteng','like',"%".$cari."%")
		->paginate();

    		// mengirim data genteng ke view index
		return view('indexgenteng',['genteng' => $genteng]);
    }
}
