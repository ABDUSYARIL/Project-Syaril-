<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Abdu Syaril";
        $kelas = "06 A Sistem Informasi";

        return view('profil', compact('nama', 'kelas'));
    }
}