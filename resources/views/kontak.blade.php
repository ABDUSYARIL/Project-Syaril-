@extends('layouts.app')

@section('title', 'Kontak - Abdu Syaril')

@section('content')

<div class="min-h-screen py-16 px-6">

    <!-- HEADER -->
    <div class="text-center mb-16" data-aos="fade-down">

        <h1 class="text-4xl md:text-5xl font-black bg-gradient-to-r from-emerald-600 via-green-600 to-emerald-700 bg-clip-text text-transparent mb-4">
            📞 Hubungi Saya
        </h1>

        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Terima kasih sudah mengunjungi website saya. 
            Jika ingin berdiskusi, bekerja sama, atau sekadar menyapa,
            silakan hubungi melalui platform berikut.
        </p>

    </div>

    <!-- CARD KONTAK -->
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">

        <!-- EMAIL -->
        <div 
            class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-8 border border-emerald-100 hover:-translate-y-2 hover:shadow-2xl transition duration-500"
            data-aos="zoom-in"
        >

            <div class="w-16 h-16 bg-emerald-100 rounded-2xl flex items-center justify-center text-3xl mb-6">
                ✉️
            </div>

            <h2 class="text-2xl font-bold text-emerald-700 mb-3">
                Email
            </h2>

            <p class="text-gray-600 mb-4">
                Hubungi saya melalui email untuk keperluan formal,
                project, atau pertanyaan lainnya.
            </p>

            <a 
                href="mailto:abdusyaril@example.com"
                class="inline-block text-emerald-600 font-semibold hover:text-emerald-800 transition"
            >
                abdusyaril@example.com
            </a>

        </div>

        <!-- WHATSAPP -->
        <div 
            class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-8 border border-green-100 hover:-translate-y-2 hover:shadow-2xl transition duration-500"
            data-aos="zoom-in"
        >

            <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center text-3xl mb-6">
                💬
            </div>

            <h2 class="text-2xl font-bold text-green-700 mb-3">
                WhatsApp
            </h2>

            <p class="text-gray-600 mb-4">
                Hubungi saya lebih cepat melalui WhatsApp untuk komunikasi langsung.
            </p>

            <a 
                href="https://wa.me/6281234567890"
                target="_blank"
                class="inline-block text-green-600 font-semibold hover:text-green-800 transition"
            >
                +62 812-3456-7890
            </a>

        </div>

        <!-- INSTAGRAM -->
        <div 
            class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-8 border border-pink-100 hover:-translate-y-2 hover:shadow-2xl transition duration-500"
            data-aos="zoom-in"
        >

            <div class="w-16 h-16 bg-pink-100 rounded-2xl flex items-center justify-center text-3xl mb-6">
                📸
            </div>

            <h2 class="text-2xl font-bold text-pink-600 mb-3">
                Instagram
            </h2>

            <p class="text-gray-600 mb-4">
                Ikuti aktivitas dan project terbaru saya di Instagram.
            </p>

            <a 
                href="https://instagram.com/"
                target="_blank"
                class="inline-block text-pink-600 font-semibold hover:text-pink-800 transition"
            >
                @abdusyaril
            </a>

        </div>

        <!-- GITHUB -->
        <div 
            class="bg-white/80 backdrop-blur-md rounded-3xl shadow-xl p-8 border border-gray-200 hover:-translate-y-2 hover:shadow-2xl transition duration-500"
            data-aos="zoom-in"
        >

            <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center text-3xl mb-6">
                💻
            </div>

            <h2 class="text-2xl font-bold text-gray-700 mb-3">
                GitHub
            </h2>

            <p class="text-gray-600 mb-4">
                Lihat source code dan project yang pernah saya kerjakan.
            </p>

            <a 
                href="https://github.com/"
                target="_blank"
                class="inline-block text-gray-700 font-semibold hover:text-black transition"
            >
                github.com/abdusyaril
            </a>

        </div>

    </div>

    <!-- FOOTER MESSAGE -->
    <div 
        class="max-w-3xl mx-auto mt-20 text-center bg-gradient-to-r from-emerald-500 to-green-500 text-white rounded-3xl p-10 shadow-2xl"
        data-aos="fade-up"
    >

        <h2 class="text-3xl font-bold mb-4">
            🌟 Mari Terhubung
        </h2>

        <p class="text-lg text-white/90">
            Saya selalu terbuka untuk belajar, berdiskusi,
            dan berkolaborasi dalam project teknologi.
        </p>

    </div>

</div>

@endsection