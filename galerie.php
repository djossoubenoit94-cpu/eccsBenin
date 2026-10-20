 <?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Galerie Média - Église CCS Bénin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
    <style>
        /* ===== RESET & VARIABLES ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #1a3a5c;
            --primary-light: #2a5a8c;
            --gold: #c9a84c;
            --gold-light: #e8d48b;
            --gold-gradient: linear-gradient(135deg, #c9a84c, #f0e08a);
            --cream: #fdf8f0;
            --dark: #0e1e2e;
            --gray: #6b7a8a;
            --light-gray: #eef2f7;
            --shadow: 0 20px 40px -12px rgba(0,0,0,0.25);
            --shadow-hover: 0 30px 60px -12px rgba(0,0,0,0.35);
            --radius: 20px;
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--cream);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            position: relative;
            min-height: 75vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 80px 24px;
            background: url('https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=1600&q=80') center/cover no-repeat;
            isolation: isolate;
            border-radius: 0 0 60px 60px;
            margin-bottom: 40px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(10, 25, 40, 0.88) 0%, rgba(10, 25, 40, 0.50) 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            color: #fff;
        }

        .hero-badge {
            display: inline-block;
            background: var(--gold-gradient);
            color: var(--dark);
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 2px;
            padding: 8px 24px;
            border-radius: 50px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .hero h1 {
            font-size: clamp(3rem, 12vw, 5.5rem);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 16px;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .hero h1 span {
            background: var(--gold-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-sub {
            font-size: 1.3rem;
            font-weight: 300;
            opacity: 0.92;
            max-width: 600px;
            margin: 0 auto 32px;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 48px;
            flex-wrap: wrap;
        }

        .hero-stats .stat {
            text-align: center;
        }

        .hero-stats .stat .number {
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--gold);
            display: block;
        }

        .hero-stats .stat .label {
            font-size: 0.85rem;
            opacity: 0.7;
            font-weight: 300;
        }

        /* ===== FILTRES ===== */
        .filters-section {
            padding: 30px 0 40px;
            position: sticky;
            top: 0;
            background: rgba(253, 248, 240, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 50;
            border-bottom: 1px solid rgba(201, 168, 76, 0.1);
        }

        .filters-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .filter-btn {
            padding: 10px 24px;
            border-radius: 50px;
            border: 1.5px solid rgba(26, 58, 92, 0.15);
            background: transparent;
            font-weight: 500;
            font-size: 0.85rem;
            color: var(--gray);
            cursor: pointer;
            transition: var(--transition);
            font-family: 'Inter', sans-serif;
        }

        .filter-btn:hover {
            border-color: var(--gold);
            color: var(--dark);
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: var(--gold-gradient);
            border-color: var(--gold);
            color: var(--dark);
            font-weight: 600;
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.3);
        }

        .filter-btn i {
            margin-right: 8px;
        }

        /* ===== GALERIE MASONRY ===== */
        .gallery-section {
            padding: 20px 0 60px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-auto-rows: 280px;
            gap: 20px;
            margin-top: 20px;
        }

        .gallery-grid .grid-item {
            border-radius: var(--radius);
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: var(--transition);
            background: #fff;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.06);
        }

        .gallery-grid .grid-item:hover {
            transform: scale(1.02);
            box-shadow: var(--shadow-hover);
            z-index: 10;
        }

        .gallery-grid .grid-item img,
        .gallery-grid .grid-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s;
        }

        .gallery-grid .grid-item:hover img,
        .gallery-grid .grid-item:hover video {
            transform: scale(1.06);
        }

        /* Tailles Masonry */
        .gallery-grid .grid-item.tall {
            grid-row: span 2;
        }
        .gallery-grid .grid-item.wide {
            grid-column: span 2;
        }
        .gallery-grid .grid-item.big {
            grid-column: span 2;
            grid-row: span 2;
        }

        /* Overlay sur les items */
        .grid-item .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, rgba(10, 25, 40, 0.7) 0%, transparent 60%);
            opacity: 0;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 24px;
            color: #fff;
        }

        .grid-item:hover .overlay {
            opacity: 1;
        }

        .grid-item .overlay .category-tag {
            display: inline-block;
            background: var(--gold-gradient);
            color: var(--dark);
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 4px 14px;
            border-radius: 30px;
            margin-bottom: 8px;
            align-self: flex-start;
        }

        .grid-item .overlay h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .grid-item .overlay p {
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .grid-item .overlay .actions {
            display: flex;
            gap: 12px;
            margin-top: 12px;
        }

        .grid-item .overlay .actions button {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.2);
            color: #fff;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.75rem;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .grid-item .overlay .actions button:hover {
            background: var(--gold-gradient);
            color: var(--dark);
            border-color: var(--gold);
        }

        /* Badge vidéo */
        .grid-item .video-badge {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(231, 76, 60, 0.92);
            color: #fff;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            backdrop-filter: blur(4px);
            z-index: 5;
        }

        /* ===== LIGHTBOX ===== */
        .lightbox {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.92);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .lightbox.active {
            display: flex;
            opacity: 1;
        }

        .lightbox-content {
            max-width: 1100px;
            width: 100%;
            position: relative;
            animation: zoomIn 0.4s ease;
        }

        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .lightbox-content img,
        .lightbox-content video {
            width: 100%;
            max-height: 80vh;
            object-fit: contain;
            border-radius: 16px;
            box-shadow: 0 40px 80px rgba(0,0,0,0.6);
        }

        .lightbox-close {
            position: absolute;
            top: -50px;
            right: 0;
            background: rgba(255,255,255,0.1);
            border: none;
            color: #fff;
            font-size: 1.8rem;
            cursor: pointer;
            padding: 8px 16px;
            border-radius: 50%;
            transition: var(--transition);
        }

        .lightbox-close:hover {
            background: var(--gold);
            color: var(--dark);
            transform: rotate(90deg);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.08);
            border: none;
            color: #fff;
            font-size: 2rem;
            padding: 16px 20px;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
        }

        .lightbox-nav:hover {
            background: var(--gold);
            color: var(--dark);
        }

        .lightbox-nav.prev { left: -70px; }
        .lightbox-nav.next { right: -70px; }

        .lightbox-caption {
            color: rgba(255,255,255,0.8);
            text-align: center;
            padding: 16px 0 0;
            font-size: 0.95rem;
        }

        .lightbox-share {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 12px;
        }

        .lightbox-share button {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.1);
            color: #fff;
            padding: 8px 18px;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .lightbox-share button:hover {
            background: var(--gold-gradient);
            color: var(--dark);
        }

        /* ===== VIDÉOS EN ÉVIDENCE ===== */
        .video-featured {
            margin: 40px 0;
            padding: 40px 0;
            border-top: 1px solid rgba(201, 168, 76, 0.15);
            border-bottom: 1px solid rgba(201, 168, 76, 0.15);
        }

        .video-featured h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 32px;
        }

        .video-featured h2 span {
            color: var(--gold);
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 24px;
        }

        .video-card {
            border-radius: var(--radius);
            overflow: hidden;
            background: #fff;
            box-shadow: var(--shadow);
            transition: var(--transition);
            cursor: pointer;
        }

        .video-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-hover);
        }

        .video-card .video-thumb {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: var(--dark);
        }

        .video-card .video-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s;
        }

        .video-card:hover .video-thumb img {
            transform: scale(1.05);
        }

        .video-card .video-thumb .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            background: rgba(201, 168, 76, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.8rem;
            transition: var(--transition);
            backdrop-filter: blur(4px);
        }

        .video-card:hover .play-btn {
            transform: translate(-50%, -50%) scale(1.1);
            background: var(--gold);
        }

        .video-card .video-info {
            padding: 16px 20px 20px;
        }

        .video-card .video-info h4 {
            font-size: 1.1rem;
            margin-bottom: 4px;
        }

        .video-card .video-info p {
            font-size: 0.85rem;
            color: var(--gray);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                grid-auto-rows: 220px;
                gap: 16px;
            }
            .gallery-grid .grid-item.big {
                grid-column: span 1;
                grid-row: span 2;
            }
            .gallery-grid .grid-item.wide {
                grid-column: span 1;
            }
            .lightbox-nav.prev { left: 8px; }
            .lightbox-nav.next { right: 8px; }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 50vh;
                border-radius: 0 0 30px 30px;
                padding: 60px 16px;
            }
            .hero h1 { font-size: 2.6rem; }
            .hero-sub { font-size: 1rem; }
            .hero-stats { gap: 24px; }
            .hero-stats .stat .number { font-size: 1.8rem; }

            .filters-section {
                padding: 16px 0;
                top: 0;
            }
            .filter-btn {
                padding: 6px 16px;
                font-size: 0.75rem;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                grid-auto-rows: 160px;
                gap: 10px;
            }
            .gallery-grid .grid-item.tall { grid-row: span 1; }
            .gallery-grid .grid-item.big { grid-row: span 1; }

            .video-grid {
                grid-template-columns: 1fr;
            }

            .lightbox-content {
                padding: 0;
            }
            .lightbox-close {
                top: -40px;
                font-size: 1.4rem;
                padding: 4px 12px;
            }
            .lightbox-nav {
                padding: 10px 14px;
                font-size: 1.2rem;
            }
            .lightbox-nav.prev { left: 4px; }
            .lightbox-nav.next { right: 4px; }
        }

        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr 1fr;
                grid-auto-rows: 140px;
                gap: 8px;
            }
            .grid-item .overlay { padding: 12px; }
            .grid-item .overlay h4 { font-size: 0.9rem; }
            .grid-item .overlay p { font-size: 0.7rem; }
            .grid-item .overlay .category-tag { font-size: 0.6rem; padding: 2px 10px; }
            .grid-item .overlay .actions button { font-size: 0.65rem; padding: 4px 10px; }
        }

        /* Scrollbar stylée */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--cream); }
        ::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--gold-light); }
    </style>
</head>
<body>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge"><i class="fas fa-camera"></i> Mémoire vivante</div>
        <h1>Galerie <span>Média</span></h1>
        <p class="hero-sub">Revivez les moments marquants de notre communauté à travers nos photos et vidéos.</p>
        <div class="hero-stats">
            <div class="stat">
                <span class="number">1 284</span>
                <span class="label">Photos</span>
            </div>
            <div class="stat">
                <span class="number">126</span>
                <span class="label">Vidéos</span>
            </div>
            <div class="stat">
                <span class="number">48</span>
                <span class="label">Événements</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== FILTRES ===== -->
<section class="filters-section">
    <div class="container">
        <div class="filters-wrapper">
            <button class="filter-btn active" data-filter="all"><i class="fas fa-th"></i> Tous</button>
            <button class="filter-btn" data-filter="cultes"><i class="fas fa-church"></i> Cultes</button>
            <button class="filter-btn" data-filter="baptemes"><i class="fas fa-water"></i> Baptêmes</button>
            <button class="filter-btn" data-filter="paques"><i class="fas fa-cross"></i> Pâques</button>
            <button class="filter-btn" data-filter="pentecote"><i class="fas fa-fire"></i> Pentecôte</button>
            <button class="filter-btn" data-filter="pelerinage"><i class="fas fa-hiking"></i> Pèlerinages</button>
            <button class="filter-btn" data-filter="noel"><i class="fas fa-star"></i> Noël</button>
            <button class="filter-btn" data-filter="jeunesse"><i class="fas fa-users"></i> Jeunesse</button>
            <button class="filter-btn" data-filter="chorale"><i class="fas fa-music"></i> Chorale</button>
            <button class="filter-btn" data-filter="social"><i class="fas fa-hand-holding-heart"></i> Actions sociales</button>
        </div>
    </div>
</section>

<!-- ===== GALERIE PHOTOS ===== -->
<section class="gallery-section container">
    <div class="gallery-grid" id="galleryGrid">
        <!-- Les éléments seront générés dynamiquement par JavaScript -->
    </div>
</section>

<!-- ===== VIDÉOS EN ÉVIDENCE ===== -->
<section class="video-featured container">
    <h2>Vidéos <span>en vedette</span></h2>
    <div class="video-grid" id="videoGrid">
        <!-- Généré par JS -->
    </div>
</section>

<!-- ===== LIGHTBOX ===== -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close" id="lightboxClose"><i class="fas fa-times"></i></button>
        <button class="lightbox-nav prev" id="lightboxPrev"><i class="fas fa-chevron-left"></i></button>
        <button class="lightbox-nav next" id="lightboxNext"><i class="fas fa-chevron-right"></i></button>
        <div id="lightboxMedia">
            <img src="" alt="" />
        </div>
        <div class="lightbox-caption" id="lightboxCaption">Titre de l'image</div>
        <div class="lightbox-share">
            <button onclick="share('facebook')"><i class="fab fa-facebook-f"></i> Partager</button>
            <button onclick="share('twitter')"><i class="fab fa-twitter"></i> Partager</button>
            <button onclick="share('whatsapp')"><i class="fab fa-whatsapp"></i> Partager</button>
            <button onclick="downloadImage()"><i class="fas fa-download"></i> Télécharger</button>
        </div>
    </div>
</div>

<script>
    // ===== DONNÉES DE LA GALERIE =====
    const galleryData = [
        // Cultes
        { id: 1, category: 'cultes', title: 'Culte dominical', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },
        { id: 2, category: 'cultes', title: 'Louange et adoration', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'tall' },
        { id: 3, category: 'cultes', title: 'Prédication', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'wide' },

        // Baptêmes
        { id: 4, category: 'baptemes', title: 'Baptême dans le fleuve', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },
        { id: 5, category: 'baptemes', title: 'Cérémonie de baptême', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'tall' },

        // Pâques
        { id: 6, category: 'paques', title: 'Célébration de Pâques', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'big' },
        { id: 7, category: 'paques', title: 'Chorale de Pâques', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },

        // Pentecôte
        { id: 8, category: 'pentecote', title: 'Pentecôte - Feu de l\'Esprit', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'wide' },
        { id: 9, category: 'pentecote', title: 'Prière et onction', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'normal' },

        // Pèlerinage
        { id: 10, category: 'pelerinage', title: 'Pèlerinage à Jérusalem', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'tall' },
        { id: 11, category: 'pelerinage', title: 'Marche de foi', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'normal' },

        // Noël
        { id: 12, category: 'noel', title: 'Veillée de Noël', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'big' },
        { id: 13, category: 'noel', title: 'Chorale de Noël', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },

        // Jeunesse
        { id: 14, category: 'jeunesse', title: 'Camp des jeunes', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'wide' },
        { id: 15, category: 'jeunesse', title: 'Activités jeunesse', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'normal' },

        // Chorale
        { id: 16, category: 'chorale', title: 'Répétition chorale', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },
        { id: 17, category: 'chorale', title: 'Concert de louange', type: 'image', src: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=800&q=80', size: 'tall' },

        // Actions sociales
        { id: 18, category: 'social', title: 'Distribution de repas', type: 'image', src: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=800&q=80', size: 'wide' },
        { id: 19, category: 'social', title: 'Visite aux orphelins', type: 'image', src: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=800&q=80', size: 'normal' },
    ];

    // ===== DONNÉES VIDÉOS =====
    const videoData = [
        { id: 101, title: 'Culte de louange - Mars 2026', desc: 'Un moment puissant de louange et d\'adoration.', thumb: 'https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80', videoUrl: '#' },
        { id: 102, title: 'Baptême collectif - Avril 2026', desc: 'Cérémonie de baptême dans le fleuve.', thumb: 'https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=600&q=80', videoUrl: '#' },
        { id: 103, title: 'Camp des jeunes - Édition 2026', desc: 'Temps fort de partage et d\'enseignement.', thumb: 'https://images.unsplash.com/photo-1523119348179-1783083943bb?w=600&q=80', videoUrl: '#' },
    ];

    // ===== RENDU DE LA GALERIE =====
    const galleryGrid = document.getElementById('galleryGrid');

    function renderGallery(filter = 'all') {
        const filtered = filter === 'all' ? galleryData : galleryData.filter(item => item.category === filter);
        galleryGrid.innerHTML = filtered.map(item => `
            <div class="grid-item ${item.size}" data-category="${item.category}" data-id="${item.id}" onclick="openLightbox(${item.id})">
                ${item.type === 'video' ? `<div class="video-badge"><i class="fas fa-play"></i> Vidéo</div>` : ''}
                <img src="${item.src}" alt="${item.title}" loading="lazy" />
                <div class="overlay">
                    <span class="category-tag">${item.category}</span>
                    <h4>${item.title}</h4>
                    <p>Cliquez pour agrandir</p>
                    <div class="actions">
                        <button onclick="event.stopPropagation(); shareItem('${item.src}', '${item.title}')"><i class="fas fa-share-alt"></i> Partager</button>
                        <button onclick="event.stopPropagation(); downloadImage('${item.src}', '${item.title}')"><i class="fas fa-download"></i> Télécharger</button>
                    </div>
                </div>
            </div>
        `).join('');
    }

    // ===== RENDU VIDÉOS =====
    const videoGrid = document.getElementById('videoGrid');

    function renderVideos() {
        videoGrid.innerHTML = videoData.map(video => `
            <div class="video-card" onclick="openVideo('${video.videoUrl}')">
                <div class="video-thumb">
                    <img src="${video.thumb}" alt="${video.title}" loading="lazy" />
                    <div class="play-btn"><i class="fas fa-play"></i></div>
                </div>
                <div class="video-info">
                    <h4>${video.title}</h4>
                    <p>${video.desc}</p>
                </div>
            </div>
        `).join('');
    }

    // ===== FILTRES =====
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const filter = this.dataset.filter;
            renderGallery(filter);
        });
    });

    // ===== LIGHTBOX =====
    let currentIndex = 0;
    let currentItems = [];

    function openLightbox(id) {
        const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
        currentItems = activeFilter === 'all' ? galleryData : galleryData.filter(item => item.category === activeFilter);
        const index = currentItems.findIndex(item => item.id === id);
        if (index !== -1) {
            currentIndex = index;
            updateLightbox();
            document.getElementById('lightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function updateLightbox() {
        const item = currentItems[currentIndex];
        const mediaContainer = document.getElementById('lightboxMedia');
        if (item.type === 'video') {
            mediaContainer.innerHTML = `<video controls autoplay><source src="${item.src}" type="video/mp4"></video>`;
        } else {
            mediaContainer.innerHTML = `<img src="${item.src}" alt="${item.title}" />`;
        }
        document.getElementById('lightboxCaption').textContent = `${item.title} - ${item.category}`;
    }

    document.getElementById('lightboxClose').addEventListener('click', closeLightbox);
    document.getElementById('lightboxPrev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + currentItems.length) % currentItems.length;
        updateLightbox();
    });
    document.getElementById('lightboxNext').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % currentItems.length;
        updateLightbox();
    });

    document

  <?php
include 'footer.php';
?>