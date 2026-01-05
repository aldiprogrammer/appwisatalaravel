<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $data = ['title' => 'App wisata'];
        return view('app/index', compact('data'));
    }
}
