<!DOCTYPE html>
<html>
<head>
    <title>MVC Laravel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>

        body {
    margin: 0;
    overflow-x: hidden;
    background: linear-gradient(to bottom, #bde0fe, #e0f7fa, #ffffff);
    background-attachment: fixed;
    position: relative;
}

body::before {
    content: "";
    position: fixed;
    width: 100%;
    height: 100%;
    background: url('https://www.transparenttextures.com/patterns/clouds.png');
    opacity: 0.3;
    z-index: -1;
    pointer-events: none;
}
body::after {
    content: "";
    position: fixed;
    bottom: -50px;
    right: -50px;
    width: 250px;
    height: 250px;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
    filter: blur(80px);
    z-index: -1;
}

/* CLOUDS */
.parallax-clouds {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background: url('https://www.transparenttextures.com/patterns/clouds.png');
    opacity: 0.4;
    z-index: -2;
}

/* FOREGROUND (kabut / glow) */
.parallax-foreground {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 300px;
    background: linear-gradient(to top, rgba(255,255,255,0.6), transparent);
    z-index: -1;
}

/* SKY (background utama) */
.parallax-sky {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 120%;
    background: linear-gradient(
        to bottom,
        #a8d8ff 0%,
        #bde0fe 30%,
        #d4f1f9 60%,
        #e0ffe7 85%,
        #ffffff 100%
    );
    z-index: -3;
}


/* LAYER AWAN */
.parallax-clouds {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;

    background-image: url('/images/clouds.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    filter: blur(1px);

    opacity: 0.5;
    z-index: -2;
}

/* CONTENT tetap di atas */
.container {
    position: relative;
    z-index: 1;

    background: rgba(255,255,255,0.65);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 25px;
    border: 1px solid rgba(163,217,165,0.3);
}

.navbar {
    background: rgba(168,216,255,0.4);
    backdrop-filter: blur(10px);
    background-color: #00ff40;
}

/* DARK MODE */
.dark-mode {
    background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364) !important;
    color: #e0f7fa;
}

/* container */
.dark-mode .container {
    background: rgba(0,0,0,0.5);
    color: #e0f7fa;
}

/* navbar */
.dark-mode .navbar {
    background: rgba(0,0,0,0.6) !important;
}

/* text */
.dark-mode h1,
.dark-mode h2,
.dark-mode h3 {
    color: #a3d9a5;
}

.dark-mode p {
    color: #cdeee0;
}

/* card */
.dark-mode .info-card,
.dark-mode .portfolio-card {
    background: rgba(0,0,0,0.4);
}

.dark-mode .parallax-sky {
    background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364);
}

.dark-mode .parallax-clouds {
    opacity: 0.2;
}

/* DARK MODE - NAVBAR BRAND */
.dark-mode .navbar-brand {
    color: #a3d9a5 !important;
}
.dark-mode .navbar-brand:hover {
    color: #d4f1f9 !important;
}
    </style>
</head>

<body>
<div class="parallax-sky"></div>
<div class="parallax-foreground"></div>
<div class="parallax-clouds"></div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/home">Halaman Profil</a>

    <div>
      <a href="/home" class="btn btn-outline-light btn-sm">Home</a>
      <a href="/profil" class="btn btn-outline-light btn-sm">Profil</a>
      <a href="/kontak" class="btn btn-outline-light btn-sm">Kontak</a>
      <!-- DARK MODE BUTTON -->
  <button onclick="toggleDarkMode()" class="btn btn-outline-light btn-sm">
      🌙
  </button>
    </div>
  </div>
</nav>

<!-- CONTENT -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- PARALLAX SCRIPT -->
<script>
window.addEventListener("scroll", function () {
    let scrollY = window.scrollY;

    document.querySelector(".parallax-bg").style.transform =
        "translateY(" + scrollY * 0.3 + "px)";

    document.querySelector(".parallax-clouds").style.transform =
        "translateY(" + scrollY * 0.6 + "px)";
});
</script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-in-out'
  });
</script>
<script>
window.addEventListener("scroll", function () {
    let scrollY = window.scrollY;

    document.querySelector(".parallax-sky").style.transform =
        "translateY(" + scrollY * 0.2 + "px)";

    document.querySelector(".parallax-clouds").style.transform =
        "translateY(" + scrollY * 0.5 + "px)";

    document.querySelector(".parallax-foreground").style.transform =
        "translateY(" + scrollY * 0.8 + "px)";
});
</script>

<script>
function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");

    // simpan ke localStorage
    if (document.body.classList.contains("dark-mode")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}

// load saat halaman dibuka
window.onload = function() {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
    }
}
</script>

</body>
</html>