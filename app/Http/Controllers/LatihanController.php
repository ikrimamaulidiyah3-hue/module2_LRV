<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        $mataKuliah = [
            'Pemrograman Web Lanjut',
            'Data Mining',
            'Interaksi Manusia Dan Komputer',
            'AI Automation'
        ];

        return view('welcome_mahasiswa', compact('mataKuliah'));
    }
}
