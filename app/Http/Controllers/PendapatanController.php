<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pendapatan
    	$pendapatan = DB::table('pendapatan')
        ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('pendapatan.*', 'pegawai.pegawai_nama')
        ->paginate(10);

    	// mengirim data pendapatan ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }

    // method untuk menampilkan view form tambah pendapatan
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah');

    }

    // method untuk insert data ke table pendapatan
    public function store(Request $request)
    {
        // insert data ke table pendapatan
        DB::table('pendapatan')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');

    }

    // method untuk edit data pendapatan
    public function edit($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        $pendapatan = DB::table('pendapatan')->where('ID',$id)->get();
        // passing data pendapatan yang didapat ke view edit.blade.php
        return view('pendapatan.edit',['pendapatan' => $pendapatan]);

    }

    // update data pendapatan
    public function update(Request $request)
    {
        // update data pendapatan
        DB::table('pendapatan')->where('ID',$request->ID)->update([
            'IDPegawai' => $request->IDPegawai,
            'Bulan' => $request->Bulan,
            'Tahun' => $request->Tahun,
            'Gaji' => $request->Gaji,
            'Tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }

    // method untuk hapus data pendapatan
    public function hapus($id)
    {
        // menghapus data pendapatan berdasarkan id yang dipilih
        DB::table('pendapatan')->where('ID',$id)->delete();

        // alihkan halaman ke halaman pendapatan
        return redirect('/pendapatan');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pendapatan sesuai pencarian data
        $pendapatan = DB::table('pendapatan')
            ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('pendapatan.*', 'pegawai.pegawai_nama')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pendapatan ke view index
        return view('pendapatan.index', ['pendapatan' => $pendapatan]);
    }
    public function view($id)
    {
        // mengambil data pendapatan berdasarkan id yang dipilih
        
        $pendapatan = DB::table('pendapatan')
        ->join('pegawai', 'pendapatan.IDPegawai', '=', 'pegawai.pegawai_id')
        ->select('pendapatan.*', 'pegawai.pegawai_nama')
        ->where('ID', $id)->get();
        // passing data pendapatan yang didapat ke view edit.blade.php
        return view('pendapatan.detail', ['pendapatan' => $pendapatan]);
    }
}
