<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TopiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $topi = DB::table('topi')->get();

    	// mengirim data pegawai ke view index
		return view('indextopi',['topi' => $topi]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahtopi');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// insert data ke table pegawai
		DB::table('topi')->insert([
			'kodetopi' => $request->kode,
			'merktopi' => $request->nama,
			'stocktopi' => $request->jumlah,
			'tersedia' => $status
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');

	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$topi = DB::table('topi')->where('kodetopi',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edittopi',['topi' => $topi]);

	}

	// update data pegawai
	public function update(Request $request)
	{
        if ($request->jumlah > 0) $status = 1;
        else $status = 0;

		// update data pegawai
		DB::table('topi')->where('kodeikan',$request->id)->update([
			'namatopi' => $request->nama,
			'jumlahtopi' => $request->jumlah,
			'tersedia' => $status,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('topi')->where('kodetopi',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/topi');
	}

    // method cari pegawai
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$topi = DB::table('topi')
		->where('merktopi','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indextopi',['topi' => $topi]);

	}

    public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$topi = DB::table('topi')->where('kodetopi',$id)->get();
		// passing data pegawai yang didapat ke view view.blade.php
        return view('viewtopi',['topi' => $topi]);

	}
}
