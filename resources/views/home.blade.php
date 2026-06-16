@extends('layouts.app')

@section('title', 'Home - Abdu Syaril')

@section('content')

<!-- HERO -->
<div class="text-center py-16 px-6">
    <h1 class="text-4xl md:text-5xl font-bold text-green-600 mb-4">
        🌿 Selamat Datang di Donasiku
    </h1>

    <p class="text-lg text-gray-600 max-w-xl mx-auto mb-8">
        Mari bersama membantu sesama dan membuat perubahan kecil menjadi berarti.
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
        <a href="{{ route('profil') }}" 
           class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
            Lihat Profil
        </a>

        <a href="{{ route('kontak') }}" 
           class="px-6 py-3 border border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition">
            Kontak
        </a>
    </div>
</div>

<!-- FITUR / INFO -->
<div class="max-w-5xl mx-auto px-6 pb-16 grid md:grid-cols-3 gap-6">

    <div class="bg-white shadow rounded-xl p-6 text-center">
        <h3 class="text-lg font-semibold text-green-600 mb-2">💚 Donasi</h3>
        <p class="text-gray-500 text-sm">
            Salurkan bantuan dengan mudah dan cepat.
        </p>
    </div>

    <div class="bg-white shadow rounded-xl p-6 text-center">
        <h3 class="text-lg font-semibold text-green-600 mb-2">🌍 Dampak</h3>
        <p class="text-gray-500 text-sm">
            Setiap donasi memberikan perubahan nyata.
        </p>
    </div>

    <div class="bg-white shadow rounded-xl p-6 text-center">
        <h3 class="text-lg font-semibold text-green-600 mb-2">🤝 Transparan</h3>
        <p class="text-gray-500 text-sm">
            Semua donasi tercatat dan dapat dipantau.
        </p>
    </div>

</div>

@endsection