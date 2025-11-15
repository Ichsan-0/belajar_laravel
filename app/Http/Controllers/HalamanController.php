<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        $deskripsi = "Ini adalah halaman home";
        return view('welcome2', compact('deskripsi'));
    }
}
