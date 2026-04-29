@extends('layouts.app')

@section('content')

<!-- PROFIL -->
<div class="d-flex justify-content-center mb-4" data-aos="fade-down">
    <div class="text-center">

        <img src="{{ asset('images/foto3.png') }}" 
             style="
            width:120px;
            height:120px;
            border-radius:50%;
            object-fit:cover;
            object-position: top;
            ">

        <h2 style="color:#4a7c59; margin-top:10px;">
            {{ $nama }}
        </h2>

        <!-- QUOTE GHIBLI -->
        <p style="color:#7a9e7e; font-style:italic;">
            "Petualangan dimulai dari langkah kecil."
        </p>

        <p style="color:#6f8f7a;">
            Kelas: {{ $kelas }}
        </p>

    </div>
</div>

<!-- PORTOFOLIO -->
<h3 class="portfolio-title">✨ Portofolio Saya</h3>

<style>
    body {
        background: linear-gradient(to bottom, #cfe9ff, #ffffff);
        background-image: url('https://www.transparenttextures.com/patterns/clouds.png');
    }

    .portfolio-title {
        text-align: center;
        margin-bottom: 30px;
        color: #4a7c59;
        font-weight: bold;
        font-size: 24px;
    }

    .portfolio-card {
        border-radius: 20px;
        overflow: hidden;
        background: rgba(255,255,255,0.8);
        backdrop-filter: blur(8px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
        position: relative;
    }

    .portfolio-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    .portfolio-img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        filter: brightness(0.9) saturate(1.1);
        transition: 0.4s;
    }

    .portfolio-card:hover .portfolio-img {
        filter: brightness(1) saturate(1.2);
    }

    .portfolio-body {
        padding: 15px;
        text-align: center;
    }

    .portfolio-body h5 {
        color: #3f6f54;
        font-weight: bold;
    }

    .portfolio-body p {
        color: #6f8f7a;
        font-size: 14px;
    }

    /* efek sparkle */
    .portfolio-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: -75%;
        width: 50%;
        height: 100%;
        background: linear-gradient(
            120deg,
            transparent,
            rgba(255,255,255,0.4),
            transparent
        );
        transform: skewX(-25deg);
    }

    .portfolio-card:hover::after {
        left: 130%;
        transition: 0.7s;
    }

    .section-title {
    text-align: center;
    color: #4a7c59;
    margin-bottom: 20px;
    font-weight: bold;
}

/* ABOUT */
.about-card {
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(8px);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    color: #5f7f6f;
    text-align: center;
}

/* SKILL */
.skill-card {
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(8px);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.skill-bar {
    width: 100%;
    height: 10px;
    background: #e0efe4;
    border-radius: 10px;
    margin-bottom: 15px;
    overflow: hidden;
}

.skill-fill {
    height: 100%;
    background: linear-gradient(to right, #88c9a1, #a3d9a5);
    border-radius: 10px;
    transition: 1s;
}
</style>

<div class="row">

    <!-- PROJECT 1 -->
    <div class="col-md-4 mb-4" data-aos="zoom-in">
        <div class="portfolio-card">
            <img src="{{ asset('images/foto2.jpeg') }}" class="portfolio-img">
            <div class="portfolio-body">
                <h5>Website Profil</h5>
                <p>Website dengan nuansa alam dan tampilan lembut.</p>
            </div>
        </div>
    </div>

    <!-- PROJECT 2 -->
    <div class="col-md-4 mb-4" data-aos="zoom-in">
        <div class="portfolio-card">
            <img src="{{ asset('images/foto4.jpeg') }}" class="portfolio-img">
            <div class="portfolio-body">
                <h5>Aplikasi Python</h5>
                <p>Aplikasi GUI dengan pengalaman interaktif.</p>
            </div>
        </div>
    </div>

    <!-- PROJECT 3 -->
    <div class="col-md-4 mb-4" data-aos="zoom-in">
        <div class="portfolio-card">
            <img src="{{ asset('images/foto5.png') }}"  class="portfolio-img">
            <div class="portfolio-body">
                <h5>Sistem Tiket</h5>
                <p>Implementasi struktur data Queue & Stack.</p>
            </div>
        </div>
    </div>

</div>

<!-- TENTANG SAYA -->
<div class="mt-5" data-aos="fade-right">
    <h3 class="section-title">🌿 Tentang Saya</h3>

    <div class="about-card">
        <p>
            Saya adalah seorang pelajar yang tertarik di bidang teknologi,
            khususnya pengembangan web dan pemrograman. Saya senang belajar hal baru
            dan terus mengembangkan keterampilan untuk menjadi developer yang lebih baik.
        </p>
    </div>
</div>

<!-- KETERAMPILAN -->
<div class="mt-5" data-aos="fade-left">
    <h3 class="section-title">🛠️ Keterampilan</h3>

    <div class="skill-card">

        <p>HTML</p>
        <div class="skill-bar">
            <div class="skill-fill" style="width: 85%;"></div>
        </div>

        <p>CSS</p>
        <div class="skill-bar">
            <div class="skill-fill" style="width: 80%;"></div>
        </div>

        <p>Laravel</p>
        <div class="skill-bar">
            <div class="skill-fill" style="width: 70%;"></div>
        </div>

        <p>Python</p>
        <div class="skill-bar">
            <div class="skill-fill" style="width: 75%;"></div>
        </div>

    </div>
</div>

@endsection