<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuController extends Controller
{
    public function index()
    {
        // DB::table('')->get();
        // mengambil data dari table buku
        $buku = DB::table('buku')->paginate(10);

        // mengirim data buku ke view index
        return view('buku.index', [
            'buku' => $buku,

        ]);
    }
    // method untuk menampilkan view form tambah buku
    public function tambah()
    {

        // memanggil view tambah
        return view('buku.tambah');
    }
    // method untuk insert data ke table buku
    public function store(Request $request)
    {
        // insert data ke table buku
        DB::table('buku')->insert([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/buku');
    }
    // method untuk edit data buku
    public function edit($id)
    {
        // mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('kodebuku', $id)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('buku.edit', ['buku' => $buku, 'title' => 'buku']);
    }

    public function view($id)
    {
        // mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('kodebuku', $id)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('buku.detail', ['buku' => $buku]);
    }
    // update data buku

    public function update(Request $request)
    {
        // update data buku
        DB::table('buku')->where('kodebuku', $request->kodebuku)->update([
            'merkbuku' => $request->merkbuku,
            'stockbuku' => $request->stockbuku,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/buku');
    }
    // method untuk hapus data buku
    public function hapus($id)
    {
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('kodebuku', $id)->delete();

        // alihkan halaman ke halaman buku
        return redirect('/buku');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table buku sesuai pencarian data
        $buku = DB::table('buku')
            ->where('merkbuku', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data buku ke view index
        return view('buku.index', ['buku' => $buku]);
    }
}
