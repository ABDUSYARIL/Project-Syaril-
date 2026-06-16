<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Donation;

class DonationController extends Controller
{
    // Menampilkan form donation
    public function create()
    {
        $campaigns = Campaign::all();

        return view('donations.create', compact('campaigns'));
    }

    // Menyimpan data donation
    public function store(Request $request)
    {
        Donation::create([
            'name' => $request->name,
            'email' => $request->email,
            'campaign_id' => $request->campaign_id,
            'amount' => $request->amount,
            'message' => $request->message,
        ]);

        return redirect()
                ->route('donations.index')
                ->with('success', 'Donasi berhasil!');
    }

    // Menampilkan daftar donation
    public function index()
    {
        $donations = Donation::with('campaign')->get();

        return view('donations.index', compact('donations'));
    }
}