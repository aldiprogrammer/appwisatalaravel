<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Kategori',
            'kategori' => Kategori::all(),
        ];
        return view('admin/kategori', compact('data'));
    }

    function store(Request $request)
    {
        $path = $request->file('icon')->store('icon', 'public');

        $kg = new Kategori();
        $kg->kategori = $request->kategori;
        $kg->icon = $path;
        $kg->save();
        return redirect()->route('kategori');
    }

    function update(Request $request, $id)
    {
        $path = $request->file('icon')->store('icon', 'public');
        $kg = Kategori::find($id);
        $kg->kategori = $request->kategori;
        $kg->icon = $path;
        $kg->update();
        return redirect()->route('kategori');
    }

    function delete($id)
    {
        $kg = Kategori::find($id);
        $kg->delete();
        return redirect()->route('kategori');
    }
}
