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
      background: blue;
      color:blue(128, 128, 128) ;
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
      padding: 40px;
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
  transform: scale(1.05);
  transition: opacity 2s ease, transform 10s ease-out;
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
      padding: 30px 0 110px;
      position: relative;
      background: #fcf9f5;

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
      position: absolute;
      display: inline-block;
      margin-top: -100px;
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

/* Liste des responsables */
    .responsables-list {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }
    .responsable-item {
      background: #fff;
      border-radius: 20px;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      transition: 0.3s;
    }
    .responsable-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }
    .responsable-item .avatar {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: linear-gradient(135deg, #f5c542, #d4a020);
      margin: 0 auto 0.8rem;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: #fff;
      font-weight: 700;
    }
    .responsable-item h4 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.3rem;
      font-weight: 600;
    }
    .responsable-item p {
      font-size: 0.9rem;
      color: #777;
      margin-top: 0.2rem;
    }

.contact-section {
            max-width: 1280px;
            width: 100%;
            background: #ffffff;
            border-radius: 48px;
            box-shadow: 0 30px 80px -20px rgba(0, 0, 0, 0.12), 0 10px 30px -10px rgba(0, 0, 0, 0.05);
            padding: 3.5rem 4rem;
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -150px;
            right: -150px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(245, 197, 66, 0.06) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .contact-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(245, 197, 66, 0.04) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* En-tête */
        .contact-header {
            text-align: center;
            margin-bottom: 3.5rem;
            position: relative;
            z-index: 1;
        }

        .contact-header .badge {
            display: inline-block;
            background: rgba(245, 197, 66, 0.12);
            color: #b8860b;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            margin-bottom: 1rem;
            border: 1px solid rgba(245, 197, 66, 0.15);
        }

        .contact-header h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3.2rem;
            font-weight: 700;
            color: #141824;
            letter-spacing: -0.5px;
        }

        .contact-header h2 span {
            color: #f5c542;
        }

        .contact-header p {
            font-size: 1.1rem;
            color: #6a6a7a;
            max-width: 520px;
            margin: 0.5rem auto 0;
            font-weight: 300;
            line-height: 1.7;
        }

        .contact-header .ornament {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 1rem;
        }

        .contact-header .ornament span {
            display: block;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #f5c542, transparent);
            border-radius: 4px;
        }

        /* Grille principale */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 3.5rem;
            position: relative;
            z-index: 1;
        }

        /* --- Informations de contact --- */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.8rem;
        }

        .contact-info .info-card {
            background: #faf9f7;
            border-radius: 24px;
            padding: 1.8rem 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.03);
            display: flex;
            align-items: flex-start;
            gap: 1.2rem;
        }

        .contact-info .info-card:hover {
            background: #ffffff;
            border-color: rgba(245, 197, 66, 0.2);
            box-shadow: 0 12px 40px -12px rgba(0, 0, 0, 0.06);
            transform: translateY(-2px);
        }

        .contact-info .info-card .icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: linear-gradient(135deg, rgba(245, 197, 66, 0.12), rgba(245, 197, 66, 0.04));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #f5c542;
        }

        .contact-info .info-card .text h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
            color: #141824;
        }

        .contact-info .info-card .text p {
            font-size: 0.95rem;
            color: #5a5a6a;
            line-height: 1.5;
            font-weight: 400;
        }

        .contact-info .info-card .text a {
            color: #5a5a6a;
            text-decoration: none;
            transition: 0.2s;
        }

        .contact-info .info-card .text a:hover {
            color: #f5c542;
        }

        /* Réseaux sociaux */
        .social-section {
            margin-top: 0.5rem;
        }

        .social-section h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #141824;
        }

        .social-links {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .social-links a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.2rem;
            border-radius: 60px;
            background: #faf9f7;
            color: #2a2a3a;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .social-links a i {
            font-size: 1.1rem;
        }

        .social-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px -8px rgba(0, 0, 0, 0.08);
        }

        .social-links a.facebook:hover {
            background: #1877f2;
            color: #fff;
            border-color: #1877f2;
        }

        .social-links a.youtube:hover {
            background: #ff0000;
            color: #fff;
            border-color: #ff0000;
        }

        .social-links a.instagram:hover {
            background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            color: #fff;
            border-color: #bc1888;
        }

        .social-links a.whatsapp:hover {
            background: #25d366;
            color: #fff;
            border-color: #25d366;
        }

        /* --- Formulaire --- */
        .contact-form-wrapper {
            background: #faf9f7;
            border-radius: 32px;
            padding: 2.5rem;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .contact-form-wrapper h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: #141824;
        }

        .contact-form-wrapper .form-subtitle {
            font-size: 0.95rem;
            color: #6a6a7a;
            margin-bottom: 1.8rem;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #2a2a3a;
            margin-bottom: 0.4rem;
            letter-spacing: 0.3px;
        }

        .form-group label .required {
            color: #e74c3c;
            margin-left: 2px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 2px solid #e8e6e2;
            border-radius: 16px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            background: #ffffff;
            transition: all 0.3s ease;
            color: #1a1a2e;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #f5c542;
            outline: none;
            box-shadow: 0 0 0 4px rgba(245, 197, 66, 0.08);
        }

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group .btn-submit {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 60px;
            background: linear-gradient(135deg, #f5c542, #d4a020);
            color: #0e0e1a;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.35s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: 'Inter', sans-serif;
            margin-top: 0.5rem;
            box-shadow: 0 12px 35px -8px rgba(245, 197, 66, 0.3);
        }

        .form-group .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 50px -10px rgba(245, 197, 66, 0.4);
            background: linear-gradient(135deg, #ffd966, #f5c542);
        }

        .form-group .btn-submit:active {
            transform: scale(0.98);
        }

        .form-group .btn-submit i {
            font-size: 1rem;
        }

        /* Message de succès (caché par défaut) */
        .success-message {
            display: none;
            background: #eafaf1;
            border: 1.5px solid #2ecc71;
            border-radius: 16px;
            padding: 1.2rem 1.5rem;
            color: #1a6e3a;
            font-weight: 500;
            margin-top: 1rem;
            align-items: center;
            gap: 12px;
        }

        .success-message.show {
            display: flex;
        }

        .success-message i {
            font-size: 1.4rem;
            color: #2ecc71;
        }

        /* --- Responsive --- */
        @media (max-width: 1024px) {
            .contact-section {
                padding: 2.5rem 2rem;
            }

            .contact-grid {
                gap: 2.5rem;
            }
        }

        @media (max-width: 900px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-section {
                border-radius: 32px;
                padding: 2rem 1.5rem;
            }

            .contact-header h2 {
                font-size: 2.6rem;
            }

            .contact-form-wrapper {
                padding: 1.8rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        
            .contact-section {
                padding: 1.5rem 1rem;
                border-radius: 24px;
            }

            .contact-header h2 {
                font-size: 2rem;
            }

            .contact-info .info-card {
                padding: 1.2rem 1.2rem;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .contact-info .info-card .icon {
                width: 44px;
                height: 44px;
                min-width: 44px;
                font-size: 1rem;
            }

            .social-links a {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .contact-form-wrapper {
                padding: 1.2rem;
            }
        



  </style>
</head>
<body>

  <!-- GLASS NAVBAR -->
  <nav class="navbar" id="navbar">
    <div class="logo"> <img src="logo.jpg" alt="" style="border-radius: 50%;width: 60px;"> <h6 style="color: #d4a020;font-size: 40px;">ECCSB</h6>  </div>
    <ul class="nav-links" id="navLinks">
      <li><a href="#accueil" class="active">Accueil</a></li>
      <li><a href="#a-propos">À propos</a></li>
      <li><a href="#responsables">Responsables</a></li>
      <li><a href="#ministere">Ministères</a></li>
      <li><a href="#cultes">Cultes</a></li>
      <li><a href="#sermons">Sermons</a></li>
      <li><a href="#galerie">Galerie</a></li>
      <li><a href="#paroisses">Paroisses</a></li>
      <li><a href="#formation">Formation</a></li>
      <li><a href="#priere">Prière</a></li>
      <li><a href="don.php">Dons</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
  </nav>

  <!-- MOBILE OVERLAY -->
  <div class="mobile-overlay" id="mobileOverlay">
    <a href="#accueil">Accueil</a><a href="#a-propos">À propos</a><a href="#responsables">Responsables</a>
    <a href="#ministeres">Ministères</a><a href="#cultes">Cultes</a><a href="#sermons">Sermons</a>
    <a href="#galerie">Galerie</a><a href="#paroisses">Paroisses</a><a href="#formation">Formation</a>
    <a href="don.php">Dons</a><a href="#contact">Contact</a>
  </div>

  <!-- HERO KEN BURNS -->
  <section class="hero" id="accueil">
    <div class="slider-bg" id="sliderBg">
      <div class="slide active ken-burns" style="background-image: url('images/moise.jpg');"></div>
      <div class="slide" style="background-image: url('images/accueil.jpg');"></div>
      <div class="slide" style="background-image: url('images/accueil.jpg');"></div>
      <div class="slide" style="background-image: url('images/club_jeunesse_1.jpg');"></div>
      <div class="slide" style="background-image: url('images/acceil7.jpg');"></div>
      <div class="slide" style="background-image: url('images/accueil_4.jpg');"></div>
      <div class="slide" style="background-image: url('images/accueil_5.jpg');"></div>
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
        <a href="paroisse.php" class="btn btn-outline"><i class="fas fa-praying-hands"></i> Nos paroisse</a>
      </div>
    </div>
  </section>

  <!-- SECTIONS PREMIUM (exemples) -->
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
     <div class="card-grid">
        
         <div class="btn-group">
        <a href="a_propos.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Savoir plus sur nous</h5></a>
      </div>
    </div>
  </section>
  
      
    

   <!-- SECTIONS PREMIUM (exemples) -->
  <section id="responsables" class="section-premium">
    
    <!-- SECTION RESPONSABLES -->
  <section id="responsables" class="section-premium" style="background:#fcf9f5;">
    <div class="container">
       <h2>Les responsables</h2>
   
      <div class="section-header">
       
        <p class="section-subtitle">Des serviteurs dévoués à la tête de notre communauté.</p>
      </div>
      <div class="responsables-list">
        <div class="responsable-item">
          <div class="avatar"><i class="fas fa-user"></i></div>
          <h4>Pasteur Jean Hounkpè</h4>
          <p>Pasteur Fondateur</p>
        </div>
        <div class="responsable-item">
          <div class="avatar"><i class="fas fa-user"></i></div>
          <h4>Pasteur Marie Ahouan</h4>
          <p>Pasteur Principal</p>
        </div>
        <div class="responsable-item">
          <div class="avatar"><i class="fas fa-user"></i></div>
          <h4>Frère David Kpon</h4>
          <p>Coordinateur des Ministères</p>
        </div>
        <div class="responsable-item">
          <div class="avatar"><i class="fas fa-user"></i></div>
          <h4>Sœur Ruth Zannou</h4>
          <p>Responsable des Femmes</p>
        </div>
        <div class="responsable-item">
          <div class="avatar"><i class="fas fa-user"></i></div>
          <h4>Frère Samuel Togbé</h4>
          <p>Responsable Jeunesse</p>
        </div>
      </div>
    </div>
     <div class="btn-group">
        <a href="responsable.php" class="btn btn-primary" style="margin-top: 20px;"><i class="fas fa-arrow-right"></i> Voire tout</a>
      </div>
  </section>
  </section>
  <section id="galerie" class="section-premium" style="background:#fcf9f5;">
    <div class="container">
     <h2>Galerie</h2>
      <p>Moments de grâce, cultes et rencontres.</p>
      <div class="masonry">
        <div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay">Adoration</div></div>
        <div class="masonry-item"><img src="images/acceil7.jpg" alt="Prière" /><div class="overlay">Prière</div></div>
        <div class="masonry-item"><img src="images/accueil_4.jpg" alt="Louange" /><div class="overlay">Louange</div></div>
        <div class="masonry-item"><img src="images/accueil_5.jpg" alt=""><div class="overlay">Église</div></div>
        <div class="masonry-item"><img src="images/accueil_5.jpg" alt=""/><div class="overlay">Événement</div></div>
        <div class="masonry-item"><img src="images/accueil.jpg" alt="" /><div class="overlay">Fidèles</div></div>
      </div>
    </div>
     <div class="btn-group">
        <a href="galerie.php" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Voire plus</a>
      </div>
  </section>

   <!-- SECTIONS PREMIUM (exemples) -->
  <section id="cultes" class="section-premium">
    <div class="container">
      <h2>Cultes et Evenement</h2>
   
      <p>La Paroisse Siège Vèpka est le cœur spirituel de l'Église Chrétienne des Chérubins et Séraphins du Bénin. Nous célébrons la foi, l'unité et la sanctification dans un cadre de louange et de partage fraternel.</p>
      <div class="container">
     
      <p>Moments de grâce, cultes et rencontres.</p>
      <div class="masonry">
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Pâque</div></div></a> 
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Pentocôte</div></div></a> 
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Pélerinage</div></div></a> 
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Adjodoun</div></div></a> 
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Ramo</div></div></a> 
       <a href="evenement.php"><div class="masonry-item"><img src="images/accueil_1.jpg" alt="Culte" /><div class="overlay" style="font-size: 25px;color: #d4a020;">Jeunesse</div></div></a> 

      </div>
    </div>

    <div class="btn-group">
        <a href="evenement.php" class="btn btn-primary" style="margin-top: 20px;"><i class="fas fa-arrow-right"></i> Découvrir plus</a>
      </div>
  </section>

  <section id="galerie" class="section-premium" style="background:#fcf9f5;">

     <!-- SECTIONS PREMIUM (exemples) -->
  <section id="sermons" class="section-premium">
    <div class="container">
      <h2>Sermons</h2>
   
      <p>La Paroisse Siège Vèpka est le cœur spirituel de l'Église Chrétienne des Chérubins et Séraphins du Bénin. Nous célébrons la foi, l'unité et la sanctification dans un cadre de louange et de partage fraternel.</p>
      <div class="card-grid">
        <div class="card"><i class="fas fa-bible"></i><h3>Parole vivante</h3><p>Enseignement biblique profond et actualisé.</p></div>
        <div class="card"><i class="fas fa-hands-praying"></i><h3>Adoration</h3><p>Louanges et prières dans l'Esprit.</p></div>
        <div class="card"><i class="fas fa-users"></i><h3>Communauté</h3><p>Fraternité et entraide fraternelle.</p></div>
      </div>
    </div>
  </section>

  <section id="galerie" class="section-premium" style="background:#fcf9f5;">

     <!-- SECTIONS PREMIUM (exemples) -->
  <section id="paroisses" class="section-premium">
    <div class="container">
      <h2>Paroisse</h2>
   
      <p>La Paroisse Siège Vèpka est le cœur spirituel de l'Église Chrétienne des Chérubins et Séraphins du Bénin. Nous célébrons la foi, l'unité et la sanctification dans un cadre de louange et de partage fraternel.</p>
      <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Découvrir nos paroisses</h5></a>
      </div>
    </div>
    </div>
  </section>

  

  <section id="galerie" class="section-premium" style="background:#fcf9f5;">

     <!-- SECTIONS PREMIUM (exemples) -->
  <section id="formation" class="section-premium">
    <div class="container">
      <h2>Aprentissage</h2>
   
      <p>La Paroisse Siège Vèpka est le cœur spirituel de l'Église Chrétienne des Chérubins et Séraphins du Bénin. Nous célébrons la foi, l'unité et la sanctification dans un cadre de louange et de partage fraternel.</p>
      <div class="card-grid">
        
         <div class="btn-group">
        <a href="formation.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Découvrir le centre de formation</h5></a>
      </div>
    </div>
  </section>



  </section>
 <section class="contact-section" id="contact">
  
        <!-- En-tête -->
        <div class="contact-header">
            <div class="badge"><i class="fas fa-envelope"></i> &nbsp;Restons connectés</div>
            <h2>Prenez <span>contact</span> avec nous</h2>
            <p>Nous sommes là pour vous écouter, vous soutenir et prier avec vous. Écrivez-nous ou rejoignez-nous lors de nos rencontres.</p>
            <div class="ornament">
                <span></span>
                <span style="width:20px;"></span>
                <span></span>
            </div>
        </div>

       <!-- Grille Contact + Formulaire -->
        <div class="contact-grid">
            <!-- Colonne gauche : Infos -->
            <div class="contact-info">
                <!-- Carte 1 : Adresse -->
                <div class="info-card">
                    <div class="icon"><i class="fas fa-location-dot"></i></div>
                    <div class="text">
                        <h4>Notre adresse</h4>
                        <p>Paroisse Siège Vèpka<br />Cotonou, Bénin</p>
                    </div>
                </div>

                <!-- Carte 2 : Téléphone -->
                <div class="info-card">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h4>Appelez-nous</h4>
                        <p><a href="tel:+22997000000">+229 97 00 00 00</a></p>
                        <p style="font-size:0.85rem; color:#888;">Lun–Ven : 8h–18h</p>
                    </div>
                </div>

                <!-- Carte 3 : Email 
                <div class="info-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h4>Écrivez-nous</h4>
                        <p><a href="mailto:veepka@ccs.bj">veepka@ccs.bj</a></p>
                    </div>
                </div>

                 Carte 4 : Horaires des cultes 
                <div class="info-card">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <div class="text">
                        <h4>Horaires des cultes</h4>
                        <p>Dimanche : 9h00 – 12h00<br />Mercredi : 18h30 – 20h00 (Veillée)</p>
                    </div>
                </div>

                <!-- Réseaux sociaux -->
                <div class="social-section">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i> YouTube</a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Colonne droite : Formulaire -->
            <div class="contact-form-wrapper">
                <h3>Envoyez-nous un message</h3>
                <p class="form-subtitle">Votre message sera traité avec bienveillance et discrétion.</p>

                <form id="contactForm" onsubmit="return handleSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom complet <span class="required">*</span></label>
                            <input type="text" id="nom" name="nom" placeholder="Jean Dupont" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" placeholder="jean@exemple.com" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" placeholder="+229 97 00 00 00" />
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet <span class="required">*</span></label>
                        <select id="sujet" name="sujet" required>
                            <option value="">-- Choisissez un sujet --</option>
                            <option value="priere">Demande de prière</option>
                            <option value="information">Demande d'information</option>
                            <option value="temoignage">Partager un témoignage</option>
                            <option value="visite">Visite pastorale</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="Écrivez votre message ici..." required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Envoyer le message
                        </button>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit">
                            <a href="index.php" style="text-decoration: none;"> Retour</a>
                        </button>
                    </div>

                    <!-- Message de succès -->
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        Votre message a été envoyé avec succès ! Nous vous répondrons dans les meilleurs délais.
                    </div>
                </form>
            </div>
        </div>
    </section>

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

   

    <script>
        function handleSubmit(e) {
            e.preventDefault();

            // Simulation d'envoi (remplacez par un vrai appel AJAX)
            const btn = document.querySelector('.btn-submit');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
            btn.disabled = true;

            setTimeout(() => {
                // Réinitialiser le formulaire
                document.getElementById('contactForm').reset();
                btn.innerHTML = originalText;
                btn.disabled = false;

                // Afficher le message de succès
                const successMsg = document.getElementById('successMessage');
                successMsg.classList.add('show');

                // Cacher après 6 secondes
                setTimeout(() => {
                    successMsg.classList.remove('show');
                }, 6000);
            }, 1500);

            return false;
        }
    </script>
  
  <?php
include 'footer.php';
?>
</body>
</html>