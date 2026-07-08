<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class FeedController extends Controller
{
    public function index(request $request)
    {
        $feeds = Feed::query()
        // Fitur 1: Pencarian berdasarkan judul
        ->when($request->search, function ($query) use ($request) {
            return $query->where('title', 'like', '%' . $request->search . '%');
    }
    // Fitur 2: Filter berdasarkan minimal jumlah like feed
    )->when($request->min_likes, function ($query) use ($request) {
        return $query->where('likeFeed', '>=', $request->min_likes);
    })
    ->latest()
    ->paginate(5) // Memotong data, hanya tampilkan 
    ->withQueryString(); // Krusial: mengunci keyword pencarian saat pindah halaman

        return view('partials.feed', compact('feeds'));
    
    }   
}