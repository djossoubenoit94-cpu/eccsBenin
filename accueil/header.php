<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
  <title>Vèpka · CCS Bénin</title>
  <!-- Google Fonts Premium -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <style>
    /* ---------- RESET & BASE ---------- */
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body {
      background: #170974;
      color: #1e1e2a;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }
    h1, h2, h3, .serif {
      font-family: 'Cormorant Garamond', serif;
    }
    .container { max-width: 1280px; margin: 0 auto; padding: 0 2rem; }

    /* ---------- GLASS NAVBAR ---------- */
    .navbar {
      position: fixed;
      top: 0; left: 0; width: 100%;
      z-index: 9999;
      padding: 0 2.5rem;
      height: 78px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: blue;
      backdrop-filter: blur(16px) saturate(180%);
      -webkit-backdrop-filter: blur(16px) saturate(180%);
      border-bottom: 1px solid rgba(255, 255, 255, 0.12);
      transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      box-shadow: 0 0 0 transparent;
    }
    .navbar.scrolled {
      background: rgba(10, 14, 30, 0.78);
      backdrop-filter: blur(20px) saturate(200%);
      -webkit-backdrop-filter: blur(20px) saturate(200%);
      border-bottom: 1px solid rgba(255, 215, 100, 0.15);
      box-shadow: 0 20px 50px -12px rgba(0, 0, 0, 0.4);
    }
    .logo {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.9rem;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1px;
      display: flex;
      align-items: center;
      gap: 10px;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }
    .logo i { color: #f5c542; font-size: 1.7rem; }

    .nav-links {
      display: flex;
      list-style: none;
      gap: 0.3rem;
      align-items: center;
    }
    .nav-links a {
      color: rgba(255, 255, 255, 0.85);
      text-decoration: none;
      font-size: 0.85rem;
      font-weight: 500;
      padding: 0.5rem 1rem;
      border-radius: 40px;
      transition: all 0.25s ease;
      letter-spacing: 0.3px;
      position: relative;
    }
    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: 4px; left: 50%;
      width: 0; height: 2px;
      background: #f5c542;
      transition: all 0.3s ease;
      transform: translateX(-50%);
      border-radius: 4px;
    }
    .nav-links a:hover::after,
    .nav-links a.active::after { width: 60%; }
    .nav-links a:hover { color: #fff; background: rgba(255, 215, 100, 0.12); }
    .nav-links a.active {
      color: #f5c542;
      background: rgba(255, 215, 100, 0.08);
    }

    /* Hamburger */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
      padding: 6px;
      z-index: 100;
    }
    .hamburger span {
      display: block;
      width: 28px; height: 2.5px;
      background: #fff;
      border-radius: 4px;
      transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
      transform-origin: center;
    }
    .hamburger.active span:nth-child(1) { transform: rotate(45deg) translate(6px, 6px); }
    .hamburger.active span:nth-child(2) { opacity: 0; transform: scaleX(0); }
    .hamburger.active span:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

    /* Mobile overlay glass */
    .mobile-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(6, 10, 25, 0.92);
      backdrop-filter: blur(30px) saturate(180%);
      -webkit-backdrop-filter: blur(30px) saturate(180%);
      z-index: 9998;
      padding: 100px 2rem 2rem;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      opacity: 0;
      transition: opacity 0.4s ease;
      pointer-events: none;
      overflow-y: auto;
    }
    .mobile-overlay.open {
      display: flex;
      opacity: 1;
      pointer-events: all;
    }
    .mobile-overlay a {
      color: #f0f0f0;
      font-size: 1.2rem;
      padding: 0.7rem 1.8rem;
      width: 100%;
      max-width: 320px;
      text-align: center;
      border-radius: 60px;
      text-decoration: none;
      transition: 0.2s;
      font-weight: 400;
      letter-spacing: 0.5px;
      border-bottom: 1px solid rgba(255,255,255,0.04);
    }
    .mobile-overlay a:hover {
      background: rgba(255, 215, 100, 0.12);
      color: #f5c542;
    }

    /* ---------- HERO KEN BURNS ---------- */
    .hero {
      position: relative;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
    }
    .slider-bg {
      position: absolute;
      inset: 0;
      z-index: 0;
    }
    .slide {
      position: absolute;
      inset: 0;
      background-size: cover;
      background-position: center;
      opacity: 0;
      transform: scale(1.08);
      transition: opacity 2s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 10s ease-out;
      will-change: transform, opacity;
    }
    .slide.active {
      opacity: 1;
      transform: scale(1.08);
    }
    .slide.ken-burns {
      transform: scale(1.12);
      transition: transform 12s ease-out;
    }
    /* Overlay dégradé premium */
    .hero-overlay {
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse at 30% 40%, rgba(10, 14, 40, 0.40) 0%, rgba(2, 4, 15, 0.70) 80%);
      z-index: 1;
    }
    .hero-content {
      position: relative;
      z-index: 3;
      max-width: 950px;
      padding: 0 1.8rem;
      animation: fadeUp 0.9s cubic-bezier(0.23, 1, 0.32, 1) both;
    }
    @keyframes fadeUp {
      0% { opacity: 0; transform: translateY(40px) scale(0.98); }
      100% { opacity: 1; transform: translateY(0) scale(1); }
    }
    .hero-content h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.8rem, 9vw, 5.2rem);
      font-weight: 700;
      line-height: 1.1;
      text-shadow: 0 12px 40px rgba(0,0,0,0.5);
      margin-bottom: 0.4rem;
    }
    .hero-content h1 i {
      color: #f5c542;
      margin: 0 8px;
      font-weight: 300;
    }
    .hero-sub {
      font-size: clamp(1rem, 2.5vw, 1.7rem);
      font-weight: 300;
      letter-spacing: 8px;
      color: #f5e7c0;
      margin-bottom: 1rem;
      text-shadow: 0 2px 20px rgba(0,0,0,0.5);
    }
    .hero-text {
      font-size: clamp(1rem, 1.6vw, 1.25rem);
      max-width: 620px;
      margin: 0 auto 2.2rem;
      line-height: 1.8;
      opacity: 0.92;
      font-weight: 300;
      text-shadow: 0 4px 20px rgba(0,0,0,0.4);
    }
    .btn-group {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.2rem;
    }
    .btn {
      display: inline-block;
      padding: 0.9rem 2.6rem;
      border-radius: 60px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      font-size: 1rem;
      letter-spacing: 0.5px;
      backdrop-filter: blur(4px);
      border: 1.5px solid rgba(255,255,255,0.15);
      background: rgba(255, 255, 255, 0.06);
      color: #fff;
      box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    }
    .btn-primary {
      background: linear-gradient(135deg, #f5c542, #e0a82b);
      border-color: #f5c542;
      color: #0e0e1a;
      font-weight: 700;
      box-shadow: 0 12px 35px -8px rgba(245, 197, 66, 0.4);
    }
    .btn-primary:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 20px 45px -10px rgba(245, 197, 66, 0.55);
      background: linear-gradient(135deg, #ffd966, #f5c542);
    }
    .btn-outline {
      background: rgba(255,255,255,0.04);
      backdrop-filter: blur(8px);
      border: 1.5px solid rgba(255,255,255,0.3);
    }
    .btn-outline:hover {
      background: rgba(255,215,100,0.15);
      border-color: #f5c542;
      color: #f5c542;
      transform: translateY(-4px);
      box-shadow: 0 12px 35px rgba(0,0,0,0.3);
    }

    /* ---------- SECTIONS PREMIUM ---------- */
    .section-premium {
      padding: 90px 0 110px;
      position: relative;
    }
    .section-premium:nth-child(even) {
      background: #fcf9f5;
    }
    .section-premium h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 3.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: #141824;
      letter-spacing: -0.5px;
      position: relative;
      display: inline-block;
    }
    .section-premium h2::after {
      content: '';
      position: absolute;
      bottom: -6px; left: 0;
      width: 70px; height: 4px;
      background: linear-gradient(90deg, #f5c542, #d4a020);
      border-radius: 4px;
    }
    .section-premium p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #3a3a4a;
      max-width: 700px;
      font-weight: 300;
    }

    /* Cartes premium */
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2.2rem;
      margin-top: 2.5rem;
    }
    .card {
      background: #fff;
      border-radius: 28px;
      padding: 2rem 1.8rem;
      box-shadow: 0 12px 40px -8px rgba(0, 0, 0, 0.06), 0 4px 12px rgba(0,0,0,0.02);
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      border: 1px solid rgba(255,255,255,0.6);
      backdrop-filter: blur(2px);
    }
    .card:hover {
      transform: translateY(-10px) scale(1.01);
      box-shadow: 0 30px 60px -16px rgba(0, 0, 0, 0.15);
      border-color: rgba(245, 197, 66, 0.3);
    }
    .card i {
      font-size: 2.4rem;
      color: #f5c542;
      margin-bottom: 0.8rem;
      display: inline-block;
    }
    .card h3 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.7rem;
      font-weight: 600;
      margin-bottom: 0.4rem;
    }
    .card p {
      font-size: 0.98rem;
      color: #555;
      line-height: 1.6;
    }

    /* Galerie Masonry */
    .masonry {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }
    .masonry-item {
      border-radius: 24px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 8px 30px rgba(0,0,0,0.06);
      transition: all 0.4s ease;
      cursor: pointer;
      aspect-ratio: 1 / 1;
      background: #ddd;
    }
    .masonry-item:nth-child(2) { aspect-ratio: 1 / 1.2; }
    .masonry-item:nth-child(5) { aspect-ratio: 1.2 / 1; }
    .masonry-item img {
      width: 100%; height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .masonry-item:hover img {
      transform: scale(1.08);
    }
    .masonry-item .overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(0deg, rgba(0,0,0,0.4) 0%, transparent 70%);
      opacity: 0;
      transition: opacity 0.4s ease;
      display: flex;
      align-items: flex-end;
      padding: 1.5rem;
      color: #fff;
      font-weight: 500;
    }
    .masonry-item:hover .overlay {
      opacity: 1;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }
      .navbar { padding: 0 1.5rem; }
      .section-premium h2 { font-size: 2.6rem; }
    }
    @media (max-width: 600px) {
      .hero-content h1 { font-size: 2.4rem; }
      .hero-sub { letter-spacing: 4px; font-size: 0.9rem; }
      .btn { padding: 0.7rem 1.6rem; font-size: 0.9rem; }
      .section-premium { padding: 60px 0 70px; }
      .card-grid { grid-template-columns: 1fr; }
      .masonry { grid-template-columns: 1fr 1fr; }
    }
  </style>
</head>
<body>

  <!-- GLASS NAVBAR -->
  <nav class="navbar" id="navbar">
     <div class="logo"> <img src="logo.jpg" alt="" style="border-radius: 50%;width: 60px;"> <h6 style="color: #d4a020;font-size: 40px;">ECCSB</h6>  </div>
    <ul class="nav-links" id="navLinks">
      <li><a href="index.php" class="active">Accueil</a></li>
<!--  <li><a href="a_propos.php">À propos</a></li>
      <li><a href="responsables.php">Responsables</a></li>
      <li><a href="#ministeres">Ministères</a></li>
      <li><a href="#cultes">Cultes</a></li>
      <li><a href="#sermons">Sermons</a></li> -->
      <li><a href="galerie.php">Galerie</a></li>  
      <li><a href="paroisse.php">Paroisses</a></li>
      <li><a href="formation.php">Formation</a></li>
      <li><a href="#priere">Prière</a></li>
      <li><a href="don.php">Dons</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
  </nav>

  <!-- MOBILE OVERLAY -->
  <div class="mobile-overlay" id="mobileOverlay">
    <a href="index.php">Accueil</a>
    <!--<a href="a_propos.php">À propos</a>
    <a href="responsables.php">Responsables</a>
    <a href="ministeres.php">Ministères</a>
    <a href="cultes.php">Cultes</a>-->
    <a href="evenement.php">Evenement</a>
    <a href="galerie.php">Galerie</a>
    <a href="paroisse.php">Paroisses</a>
    <a href="formation.php">Formation</a>
    <a href="responsable.php">Responsables</a>
    <a href="don.php">Dons</a>
    <a href="contact.php">Contact</a>
  </div>

  <!-- HERO KEN BURNS 
  <section class="hero" id="accueil">
    <div class="slider-bg" id="sliderBg">
      <div class="slide active ken-burns" style="background-image: url('https://images.unsplash.com/photo-1545179302-b7a7cb2b3b3b?w=1400&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?w=1400&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1504052434569-70ad5836ab23?w=1400&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=1400&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=1400&q=80');"></div>
      <div class="slide" style="background-image: url('https://images.unsplash.com/photo-1548611635-b6e7827d7c4a?w=1400&q=80');"></div>
    </div>
    
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h1><i class="fas fa-cross"></i> Église Chrétienne <br>des Chérubins et Séraphins du Bénin</h1>
      <div class="hero-sub">Foi · Prière · Sainteté · Communion</div>
      <p class="hero-text">
        « Venez, adorons et prosternons-nous, fléchissons le genou devant l’Éternel, notre Créateur. »<br>
        Une communauté vivante, ancrée dans la parole et la louange.
      </p>
      <div class="btn-group">
        <a href="#a-propos" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Découvrir</a>
        <a href="#priere" class="btn btn-outline"><i class="fas fa-praying-hands"></i> Demande de prière</a>
      </div>
    </div>
  </section>

  SECTIONS PREMIUM (exemples) 
  <section id="a-propos" class="section-premium">
    <div class="container">
      <h2>À propos</h2>
      <p>La Paroisse Siège Vèpka est le cœur spirituel de l'Église Chrétienne des Chérubins et Séraphins du Bénin. Nous célébrons la foi, l'unité et la sanctification dans un cadre de louange et de partage fraternel.</p>
      <div class="card-grid">
        <div class="card"><i class="fas fa-bible"></i><h3>Parole vivante</h3><p>Enseignement biblique profond et actualisé.</p></div>
        <div class="card"><i class="fas fa-hands-praying"></i><h3>Adoration</h3><p>Louanges et prières dans l'Esprit.</p></div>
        <div class="card"><i class="fas fa-users"></i><h3>Communauté</h3><p>Fraternité et entraide fraternelle.</p></div>
      </div>
    </div>
  </section>

  <section id="galerie" class="section-premium" style="background:#fcf9f5;">
    <div class="container">
      <h2>Galerie</h2>
      <p>Moments de grâce, cultes et rencontres.</p>
      <div class="masonry">
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1545179302-b7a7cb2b3b3b?w=600&q=80" alt="Culte" /><div class="overlay">Adoration</div></div>
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?w=600&q=80" alt="Prière" /><div class="overlay">Prière</div></div>
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1504052434569-70ad5836ab23?w=600&q=80" alt="Louange" /><div class="overlay">Louange</div></div>
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1544383835-bda2bc66a55d?w=600&q=80" alt="Église" /><div class="overlay">Église</div></div>
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?w=600&q=80" alt="Événement" /><div class="overlay">Événement</div></div>
        <div class="masonry-item"><img src="https://images.unsplash.com/photo-1548611635-b6e7827d7c4a?w=600&q=80" alt="Fidèles" /><div class="overlay">Fidèles</div></div>
      </div>
    </div>
  </section>

  <section id="contact" class="section-premium">
    <div class="container">
      <h2>Contact</h2>
      <p>Rejoignez-nous, écrivez-nous, prions ensemble.</p>
      <div style="margin-top:1.5rem; display:flex; gap:1.5rem; flex-wrap:wrap;">
        <span><i class="fas fa-map-pin" style="color:#f5c542;"></i> Cotonou, Bénin</span>
        <span><i class="fas fa-phone" style="color:#f5c542;"></i> +229 97 00 00 00</span>
        <span><i class="fas fa-envelope" style="color:#f5c542;"></i> veepka@ccs.bj</span>
      </div>
    </div>
  </section>
     -->
  <script>
    (function() {
      "use strict";

      // ---------- KEN BURNS SLIDER (3s, zoom fluide) ----------
      const slides = document.querySelectorAll('.slide');
      let current = 0;
      let interval;

      function goTo(index) {
        slides.forEach((s, i) => {
          s.classList.remove('active', 'ken-burns');
          if (i === index) {
            s.classList.add('active');
            // ajoute la classe ken-burns après un court délai pour relancer l'effet
            setTimeout(() => s.classList.add('ken-burns'), 50);
          }
        });
        current = index;
      }

      function nextSlide() {
        goTo((current + 1) % slides.length);
      }

      function startSlider() {
        if (interval) clearInterval(interval);
        goTo(0);
        interval = setInterval(nextSlide, 3000);
      }

      // Préchargement + démarrage
      if (slides.length) {
        // préchargement : on force le chargement des images
        slides.forEach(s => {
          const bg = s.style.backgroundImage;
          if (bg) {
            const url = bg.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');
            if (url) { const img = new Image(); img.src = url; }
          }
        });
        startSlider();
      }

      // ---------- NAVBAR GLASS + ACTIVE LINK ----------
      const navbar = document.getElementById('navbar');
      const navLinks = document.querySelectorAll('.nav-links a');
      const sections = document.querySelectorAll('section[id]');
      const mobileOverlay = document.getElementById('mobileOverlay');
      const hamburger = document.getElementById('hamburger');

      window.addEventListener('scroll', function() {
        const scrollY = window.scrollY;
        navbar.classList.toggle('scrolled', scrollY > 50);

        let currentId = '';
        sections.forEach(sec => {
          const rect = sec.getBoundingClientRect();
          if (rect.top <= 100 && rect.bottom >= 100) {
            currentId = sec.getAttribute('id');
          }
        });
        navLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === '#' + currentId);
        });
      });

      // ---------- HAMBURGER ----------
      function toggleMobile(open) {
        const isOpen = mobileOverlay.classList.contains('open');
        if (open === undefined) {
          mobileOverlay.classList.toggle('open');
          hamburger.classList.toggle('active');
        } else if (open && !isOpen) {
          mobileOverlay.classList.add('open');
          hamburger.classList.add('active');
        } else if (!open && isOpen) {
          mobileOverlay.classList.remove('open');
          hamburger.classList.remove('active');
        }
        document.body.style.overflow = mobileOverlay.classList.contains('open') ? 'hidden' : '';
      }

      hamburger.addEventListener('click', (e) => { e.stopPropagation(); toggleMobile(); });
      mobileOverlay.querySelectorAll('a').forEach(link => link.addEventListener('click', () => toggleMobile(false)));
      mobileOverlay.addEventListener('click', function(e) { if (e.target === this) toggleMobile(false); });

      // ---------- SMOOTH SCROLL (offset navbar) ----------
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
          const href = this.getAttribute('href');
          if (href === '#') return;
          const target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            const top = target.getBoundingClientRect().top + window.pageYOffset - 80;
            window.scrollTo({ top, behavior: 'smooth' });
          }
        });
      });

      // relancer slider si on revient sur l'onglet
      document.addEventListener('visibilitychange', () => { if (!document.hidden) startSlider(); });
    })();
  </script>
  
</body>
</html>