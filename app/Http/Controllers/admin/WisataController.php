<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Wisata',
            'wisata' => Wisata::with('kategoritr')->get(),
        ];

        // dd($data['wisata']);
        // die();
        return view('admin.wisata', compact('data'));
    }

    function tambahwisata()
    {
        $data = [
            'title' => 'Tambah wisata',
            'kategori' => Kategori::all(),
        ];
        return view('admin.tambahwisata', compact('data'));
    }

    function store(Request $request)
    {
        $path = $request->file('gambar')->store('wisata', 'public');
        $store = new Wisata();
        $store->wisata = $request->nama;
        $store->kategori = $request->kategori;
        $store->lokasi = $request->lokasi;
        $store->latitude = $request->lat;
        $store->longitude = $request->long;
        $store->keterangan = $request->keterangan;
        $store->rating = 0;
        $store->gambar = $path;

        $store->save();
        return redirect()->route('wisata');
    }

    function edit($id)
    {
        $data = [
            'title' => "Edit wisata",
            'kategori' => Kategori::all(),
        ];

        $ws = Wisata::with('kategoritr')->find($id);
        return view('admin/editwisata', compact('data', 'ws'));
    }

    function update(Request $request, $id)
    {

        $path = $request->file('gambar')->store('wisata', 'public');
        $update = Wisata::find($id);
        $update->wisata = $request->nama;
        $update->kategori = $request->kategori;
        $update->lokasi = $request->lokasi;
        $update->latitude = $request->lat;
        $update->longitude = $request->long;
        $update->keterangan = $request->keterangan;
        $update->rating = 0;
        $update->gambar = $path;

        $update->update();
        return redirect()->route('wisata');
    }
}
