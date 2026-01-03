<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Wisata',
            'wisata' => Wisata::all(),
        ];
        return view('admin.wisata', compact('data'));
    }

    function tambahwisata()
    {
        $data = [
            'title' => 'Tambah wisata',
        ];
        return view('admin.tambahwisata', compact('data'));
    }
}
