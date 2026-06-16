<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// DONASI
Route::get('/donasi', [CampaignController::class, 'index'])->name('donasi');
Route::get('/donasi/create', [CampaignController::class, 'create']);
Route::post('/donasi', [CampaignController::class, 'store']);

// EDIT & UPDATE
Route::get('/donasi/{id}/edit', [CampaignController::class, 'edit'])
    ->name('donasi.edit');
Route::put('/donasi/{id}', [CampaignController::class, 'update']);

#Hapus Campaign
Route::delete('/donasi/{id}', [CampaignController::class, 'destroy'])
    ->name('donasi.destroy');

Route::get('/donations', [DonationController::class, 'index'])
        ->name('donations.index');

Route::get('/donations/create', [DonationController::class, 'create'])
        ->name('donations.create');

Route::post('/donations', [DonationController::class, 'store'])
        ->name('donations.store');