<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data = ['title' => 'App wisata', 'kategori' => Kategori::all(), 'wisata' => Wisata::with('kategoritr')->get()];
        return view('app/index', compact('data'));
    }

    function detail($id)
    {


        $detail =  Wisata::with('kategoritr')->where('id', $id)->first();
        $komentar =  Komentar::where('id_wisata', $id)->latest()->take(5)->get();
        $data = [
            'title' => $detail->wisata,
        ];
        return view('app/detail', compact('data', 'detail', 'komentar'));
    }

    function komentar(Request $request, $id)
    {
        $km = new Komentar();
        $km->id_wisata = $id;
        $km->komentar = $request->komentar;
        $km->username = 'Lorem';
        $km->tanggal = date('Y-m-d');
        $km->save();
        return redirect()->route('detail', $id)->with('success', 'Komentar berhasil ditambah');
    }
}
