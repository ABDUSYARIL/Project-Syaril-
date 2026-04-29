@extends('layouts.app')

@section('content')
   
<style>
   .hero-title {
    font-size: 40px;
    font-weight: bold;
    color: #3f6f54;
}

.hero-subtitle {
    font-size: 18px;
    color: #5f7f6f;
}

.info-card {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 20px;
    margin-top: 20px;
    text-align: center;
    transition: 0.3s;
}

.info-card:hover {
    transform: translateY(-10px);
}
</style>

<div class="text-center mt-5" data-aos="fade-up">

    <!-- HERO -->
    <h1 class="hero-title">
        🌿 Selamat Datang
    </h1>

    <p class="hero-subtitle">
        Di Website Abdu Syaril ✨
    </p>

    <!-- BUTTON -->
    <div class="mt-4">
        <a href="{{ route('profil') }}" class="btn btn-success btn-lg me-2">
            🌿 Lihat Profil
        </a>

        <a href="{{ route('kontak') }}" class="btn btn-outline-success btn-lg">
            ✉️ Kontak
        </a>
    </div>

</div>

<!-- SECTION INFO -->
<div class="row mt-5">

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="info-card">
            <h5>💻 Web Developer</h5>
            <p>Membangun website dengan tampilan modern dan nyaman.</p>
        </div>
    </div>

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="info-card">
            <h5>🐍 Python</h5>
            <p>Mengembangkan aplikasi interaktif dan logika program.</p>
        </div>
    </div>

    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="info-card">
            <h5>🌱 Belajar & Berkembang</h5>
            <p>Selalu belajar hal baru untuk menjadi lebih baik.</p>
        </div>
    </div>

</div>

@endsection