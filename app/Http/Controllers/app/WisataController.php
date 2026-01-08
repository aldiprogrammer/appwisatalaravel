<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    function index(Request $request, $kategori)
    {
        $data = ['title' => 'Wisata'];
        $kategori = Kategori::find($kategori);
        $wisata = Wisata::where('kategori', $kategori)->get();
        return view('app/wisata', compact('data', 'kategori', 'wisata'));
    }
}
