<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
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
        $data = [
            'title' => $detail->wisata,

        ];
        return view('app/detail', compact('data', 'detail'));
    }
}
