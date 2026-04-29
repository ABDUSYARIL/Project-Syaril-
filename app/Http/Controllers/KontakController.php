<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $email = "abdusyaril@gmail.com";
        $no_hp = "085751052374";

        return view('kontak', compact('email', 'no_hp'));
    }
}