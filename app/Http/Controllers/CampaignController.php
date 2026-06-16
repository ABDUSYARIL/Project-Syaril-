<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaigns.index', compact('campaigns'));
    }

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);
        return view('campaigns.edit', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'collected_donation' => $request->collected_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/donasi')->with('success', 'Campaign berhasil diupdate!');
    }
    public function create()
{
    return view('campaigns.create');
}

public function store(Request $request)
{
    Campaign::create([
        'title' => $request->title,
        'description' => $request->description,
        'target_donation' => $request->target_donation,
        'collected_donation' => $request->collected_donation,
        'deadline' => $request->deadline,
    ]);

    return redirect('/donasi')
        ->with('success', 'Campaign berhasil ditambahkan!');
}
public function destroy($id)
{
    $campaign = Campaign::findOrFail($id);

    $campaign->delete();

    return redirect('/donasi')
        ->with('success', 'Campaign berhasil dihapus!');
}
}