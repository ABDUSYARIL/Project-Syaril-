@extends('layouts.app')

@section('title', 'Profil - Abdu Syaril')

@section('content')

<div class="min-h-screen bg-gray-100 py-16 px-6">

    <!-- HERO PROFILE -->
    <div 
        class="max-w-6xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden mb-16"
        data-aos="fade-up"
    >

        <div class="bg-gradient-to-r from-emerald-500 to-green-600 h-48 relative">

            <!-- FOTO -->
            <div class="absolute left-1/2 -bottom-16 transform -translate-x-1/2">

                <img 
                    src="{{ asset('images/foto3.png') }}"
                    class="w-36 h-36 md:w-40 md:h-40 rounded-full border-8 border-white shadow-2xl object-cover object-top hover:scale-105 transition duration-500"
                >

            </div>

        </div>

        <!-- CONTENT -->
        <div class="pt-24 pb-10 px-8 text-center">

            <h1 class="text-4xl md:text-5xl font-black text-gray-800 mb-4">
                {{ $nama }}
            </h1>

            <p class="text-emerald-600 font-semibold text-xl mb-6">
                Mahasiswa & Web Developer
            </p>

            <blockquote class="max-w-2xl mx-auto text-lg italic text-gray-600 leading-relaxed mb-8">
                “Petualangan dimulai dari langkah kecil. 
                Terus belajar, berkembang, dan menciptakan sesuatu yang bermanfaat.”
            </blockquote>

            <!-- INFO -->
            <div class="flex flex-wrap justify-center gap-4">

                <div class="bg-emerald-50 px-6 py-3 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">Kelas</p>
                    <p class="text-xl font-bold text-emerald-600">
                        {{ $kelas }}
                    </p>
                </div>

                <div class="bg-green-50 px-6 py-3 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">Fokus</p>
                    <p class="text-xl font-bold text-green-600">
                        Laravel & Python
                    </p>
                </div>

                <div class="bg-teal-50 px-6 py-3 rounded-2xl shadow">
                    <p class="text-sm text-gray-500">Status</p>
                    <p class="text-xl font-bold text-teal-600">
                        Active Learner
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- ABOUT -->
    <div 
        class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 mb-16"
    >

        <!-- TENTANG -->
        <div 
            class="bg-white rounded-3xl shadow-xl p-8"
            data-aos="fade-right"
        >

            <h2 class="text-3xl font-bold text-emerald-600 mb-6">
                🌿 Tentang Saya
            </h2>

            <p class="text-gray-600 leading-relaxed text-lg">
                Saya adalah seorang mahasiswa yang memiliki minat besar di bidang 
                teknologi dan pengembangan web. Saya senang mempelajari hal baru, 
                membangun project kreatif, serta mengembangkan kemampuan dalam 
                Laravel, Python, dan desain antarmuka modern.
            </p>

        </div>

        <!-- SKILL -->
        <div 
            class="bg-white rounded-3xl shadow-xl p-8"
            data-aos="fade-left"
        >

            <h2 class="text-3xl font-bold text-green-600 mb-6">
                🛠️ Keterampilan
            </h2>

            <!-- HTML -->
            <div class="mb-5">

                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">HTML</span>
                    <span class="text-emerald-600 font-bold">85%</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-emerald-500 h-3 rounded-full w-[85%]"></div>
                </div>

            </div>

            <!-- CSS -->
            <div class="mb-5">

                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">CSS</span>
                    <span class="text-green-600 font-bold">80%</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-green-500 h-3 rounded-full w-[80%]"></div>
                </div>

            </div>

            <!-- Laravel -->
            <div class="mb-5">

                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Laravel</span>
                    <span class="text-teal-600 font-bold">75%</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-teal-500 h-3 rounded-full w-[75%]"></div>
                </div>

            </div>

            <!-- Python -->
            <div>

                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">Python</span>
                    <span class="text-cyan-600 font-bold">70%</span>
                </div>

                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="bg-cyan-500 h-3 rounded-full w-[70%]"></div>
                </div>

            </div>

        </div>

    </div>

    <!-- PORTFOLIO -->
    <div class="max-w-6xl mx-auto">

        <div class="text-center mb-12" data-aos="fade-up">

            <h2 class="text-4xl font-black text-gray-800 mb-4">
                ✨ Portofolio Saya
            </h2>

            <p class="text-gray-600 text-lg">
                Beberapa project yang pernah saya kerjakan.
            </p>

        </div>

        <!-- GRID -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div 
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-500"
                data-aos="zoom-in"
            >

                <img 
                    src="{{ asset('images/foto2.jpeg') }}"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">
                        Website Profil
                    </h3>

                    <p class="text-gray-600">
                        Website personal modern dengan nuansa hijau dan desain elegan.
                    </p>

                </div>

            </div>

            <!-- CARD 2 -->
            <div 
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-500"
                data-aos="zoom-in"
            >

                <img 
                    src="{{ asset('images/foto4.jpeg') }}"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">
                        UI/UX Design
                    </h3>

                    <p class="text-gray-600">
                        Desain antarmuka modern dengan fokus pada pengalaman pengguna yang intuitif.
                    </p>

                </div>

            </div>

            <!-- CARD 3 -->
            <div 
                class="bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 hover:shadow-2xl transition duration-500"
                data-aos="zoom-in"
            >

                <img 
                    src="{{ asset('images/foto5.png') }}"
                    class="w-full h-56 object-cover"
                >

                <div class="p-6">

                    <h3 class="text-2xl font-bold text-gray-800 mb-3">
                        Pemain Free Fire
                    </h3>

                    <p class="text-gray-600">
                        Saya juga seorang pemain Free Fire yang aktif, dengan pengalaman bermain selama 3 tahun dan berbagai prestasi di dalam game.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection