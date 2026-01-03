<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('admin/index', compact('data'));
    }
}
