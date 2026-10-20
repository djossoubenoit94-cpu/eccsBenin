 <?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Événements & Célébrations - Église CCS Bénin</title>
    <!-- Font Awesome pour les icônes -->
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
        }

        h1, h2, h3, h4 {
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
            min-height: 90vh;
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
            background: linear-gradient(135deg, rgba(10, 25, 40, 0.85) 0%, rgba(10, 25, 40, 0.55) 100%);
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
            font-size: clamp(2.8rem, 10vw, 5.2rem);
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
            opacity: 0.9;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Barre de recherche & filtres */
        .search-filters {
            background: rgba(255,255,255,0.12);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 60px;
            padding: 8px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 8px;
            max-width: 700px;
            margin: 0 auto 20px;
            border: 1px solid rgba(255,255,255,0.15);
        }

        .search-filters .search-input {
            flex: 1;
            min-width: 180px;
            background: transparent;
            border: none;
            padding: 14px 20px;
            color: #fff;
            font-size: 1rem;
            outline: none;
        }

        .search-filters .search-input::placeholder {
            color: rgba(255,255,255,0.6);
        }

        .search-filters .filter-group {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            padding: 4px;
        }

        .filter-btn {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.8);
            padding: 10px 20px;
            border-radius: 40px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(4px);
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--gold-gradient);
            color: var(--dark);
            border-color: var(--gold);
            transform: scale(1.02);
        }

        .search-btn {
            background: var(--gold-gradient);
            border: none;
            color: var(--dark);
            padding: 12px 28px;
            border-radius: 40px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .search-btn:hover {
            transform: scale(1.04);
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.4);
        }

        /* ===== SECTION ÉVÉNEMENTS ===== */
        .events-section {
            padding: 60px 0 80px;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 48px;
        }

        .section-header h2 {
            font-size: 2.4rem;
            font-weight: 700;
        }

        .section-header h2 span {
            color: var(--gold);
        }

        .section-header p {
            color: var(--gray);
            max-width: 400px;
        }

        /* Timeline / Grille */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
            gap: 32px;
        }

        /* ===== CARTE ÉVÉNEMENT ===== */
        .event-card {
            background: #fff;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid rgba(201, 168, 76, 0.08);
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-light);
        }

        .event-card-image {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: var(--light-gray);
        }

        .event-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s;
        }

        .event-card:hover .event-card-image img {
            transform: scale(1.05);
        }

        .event-category-tag {
            position: absolute;
            top: 16px;
            left: 16px;
            background: var(--gold-gradient);
            color: var(--dark);
            font-weight: 600;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 6px 16px;
            border-radius: 30px;
        }

        .event-countdown {
            position: absolute;
            bottom: 16px;
            right: 16px;
            background: rgba(0,0,0,0.7);
            backdrop-filter: blur(8px);
            color: #fff;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .event-countdown i {
            color: var(--gold);
        }

        .event-card-body {
            padding: 24px 24px 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .event-card-body h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 12px;
        }

        .event-meta i {
            color: var(--gold);
            width: 18px;
        }

        .event-card-body p {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 16px;
            flex: 1;
        }

        .event-card-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 8px;
            border-top: 1px solid var(--light-gray);
            padding-top: 16px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(26, 58, 92, 0.3);
        }

        .btn-gold {
            background: var(--gold-gradient);
            color: var(--dark);
        }

        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.35);
        }

        .btn-outline {
            background: transparent;
            border: 1.5px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: #fff;
        }

        .btn-pdf {
            background: #e74c3c;
            color: #fff;
        }
        .btn-pdf:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        /* ===== GALERIE MINI ===== */
        .mini-gallery {
            display: flex;
            gap: 6px;
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .mini-gallery img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid transparent;
            transition: var(--transition);
            cursor: pointer;
        }

        .mini-gallery img:hover {
            border-color: var(--gold);
            transform: scale(1.08);
        }

        /* ===== CALENDRIER INTERACTIF ===== */
        .calendar-section {
            background: #fff;
            border-radius: var(--radius);
            padding: 40px 32px;
            margin: 60px 0;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.1);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-bottom: 24px;
        }

        .calendar-header h3 {
            font-size: 1.6rem;
        }

        .calendar-nav {
            display: flex;
            gap: 8px;
        }

        .calendar-nav button {
            background: var(--light-gray);
            border: none;
            padding: 8px 16px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .calendar-nav button:hover {
            background: var(--gold);
            color: #fff;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 4px;
            text-align: center;
        }

        .calendar-grid .day-name {
            font-weight: 600;
            color: var(--gray);
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 8px 0;
        }

        .calendar-grid .day {
            padding: 12px 4px;
            border-radius: 12px;
            font-weight: 500;
            transition: var(--transition);
            cursor: default;
            position: relative;
        }

        .calendar-grid .day:hover {
            background: var(--light-gray);
        }

        .calendar-grid .day.has-event {
            background: var(--gold-gradient);
            color: var(--dark);
            font-weight: 700;
            cursor: pointer;
        }

        .calendar-grid .day.has-event::after {
            content: '•';
            position: absolute;
            bottom: 2px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--dark);
            font-size: 1.2rem;
        }

        .calendar-grid .day.today {
            border: 2px solid var(--primary);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero {
                min-height: 70vh;
                border-radius: 0 0 30px 30px;
                padding: 60px 16px;
            }

            .search-filters {
                border-radius: 30px;
                flex-direction: column;
                padding: 12px;
                background: rgba(255,255,255,0.18);
            }

            .search-filters .search-input {
                width: 100%;
                text-align: center;
                padding: 12px;
            }

            .filter-group {
                justify-content: center;
            }

            .filter-btn {
                font-size: 0.75rem;
                padding: 6px 14px;
            }

            .search-btn {
                width: 100%;
                justify-content: center;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .section-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .calendar-grid {
                font-size: 0.8rem;
            }
            .calendar-grid .day {
                padding: 8px 2px;
            }
            .calendar-section {
                padding: 24px 16px;
            }
            .event-card-image {
                height: 170px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            .hero-sub {
                font-size: 1rem;
            }
            .event-meta {
                font-size: 0.75rem;
                gap: 8px;
            }
            .btn {
                font-size: 0.75rem;
                padding: 8px 14px;
            }
        }

        /* ===== SCROLL ANIMATION ===== */
        .event-card {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.6s ease forwards;
        }
        .event-card:nth-child(1) { animation-delay: 0.05s; }
        .event-card:nth-child(2) { animation-delay: 0.12s; }
        .event-card:nth-child(3) { animation-delay: 0.19s; }
        .event-card:nth-child(4) { animation-delay: 0.26s; }
        .event-card:nth-child(5) { animation-delay: 0.33s; }
        .event-card:nth-child(6) { animation-delay: 0.40s; }
        .event-card:nth-child(7) { animation-delay: 0.47s; }
        .event-card:nth-child(8) { animation-delay: 0.54s; }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
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
        <div class="hero-badge"><i class="fas fa-calendar-alt"></i> Année 2026</div>
        <h1>Événements & <span>Célébrations</span></h1>
        <p class="hero-sub">Vivez chaque moment de foi dans la joie et la communion. Découvrez notre calendrier d'activités spirituelles.</p>

        <!-- Search & Filtres -->
        <div class="search-filters">
            <input type="text" class="search-input" placeholder="Rechercher un événement..." />
            <div class="filter-group">
                <button class="filter-btn active">Tous</button>
                <button class="filter-btn">Pâques</button>
                <button class="filter-btn">Pentecôte</button>
                <button class="filter-btn">Noël</button>
                <button class="filter-btn">Jeûne</button>
            </div>
            <button class="search-btn"><i class="fas fa-search"></i> Chercher</button>
        </div>
    </div>
</section>

<!-- ===== SECTION ÉVÉNEMENTS ===== -->
<section class="events-section container">
    <div class="section-header">
        <div>
            <h2>Nos <span>Événements</span></h2>
            <p>Des moments de grâce et de partage pour toute la communauté.</p>
        </div>
        <div style="display:flex; gap:12px; flex-wrap:wrap;">
            <button class="btn btn-gold"><i class="fas fa-calendar-plus"></i> Voir le calendrier</button>
        </div>
    </div>

    <div class="events-grid">

        <!-- ===== CARTE PÂQUES ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=600&q=80" alt="Pâques" />
                <span class="event-category-tag">Pâques</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-14</div>
            </div>
            <div class="event-card-body">
                <h3>Résurrection de Christ</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 20 Avril 2026</span>
                    <span><i class="fas fa-map-pin"></i> Temple Central, Cotonou</span>
                </div>
                <p>Célébration de la résurrection avec programme complet, cantiques et partage de la parole.</p>
                <div class="mini-gallery">
                    <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie" />
                    <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie" />
                    <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie" />
                </div>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                    <button class="btn btn-gold"><i class="fas fa-check-circle"></i> S'inscrire</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE PENTECÔTE ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=600&q=80" alt="Pentecôte" />
                <span class="event-category-tag">Pentecôte</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-32</div>
            </div>
            <div class="event-card-body">
                <h3>Pentecôte 2026</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 8 Juin 2026</span>
                    <span><i class="fas fa-map-pin"></i> Parvis de l'Église</span>
                </div>
                <p>Enseignements sur le Saint-Esprit, prière et programme spécial avec invités.</p>
                <div class="mini-gallery">
                    <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie" />
                    <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie" />
                </div>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE PÈLERINAGE ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Pèlerinage" />
                <span class="event-category-tag">Pèlerinage</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-48</div>
            </div>
            <div class="event-card-body">
                <h3>Pèlerinage à Jérusalem</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 25 Juillet 2026</span>
                    <span><i class="fas fa-map-pin"></i> Jérusalem, Israël</span>
                </div>
                <p>Marche de foi sur les traces du Christ. Conditions et programme détaillés.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-gold"><i class="fas fa-check-circle"></i> S'inscrire</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE NOËL ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Noël" />
                <span class="event-category-tag">Noël</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-98</div>
            </div>
            <div class="event-card-body">
                <h3>Fête de Noël</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 25 Décembre 2026</span>
                    <span><i class="fas fa-map-pin"></i> Église CCS</span>
                </div>
                <p>Chorales, veillées, partage de cadeaux et célébration de la naissance du Sauveur.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE CONVENTION ANNUELLE ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Convention" />
                <span class="event-category-tag">Convention</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-150</div>
            </div>
            <div class="event-card-body">
                <h3>Convention Annuelle 2026</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 15-20 Août 2026</span>
                    <span><i class="fas fa-map-pin"></i> Palais des Congrès</span>
                </div>
                <p>6 jours de revival avec intervenants internationaux, horaires et programmes.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-gold"><i class="fas fa-check-circle"></i> S'inscrire</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE VEILLÉES DE PRIÈRE ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Veillée" />
                <span class="event-category-tag">Veillée</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-5</div>
            </div>
            <div class="event-card-body">
                <h3>Veillée de Feu</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 28 Fév 2026</span>
                    <span><i class="fas fa-map-pin"></i> Temple CCS</span>
                </div>
                <p>Thème : "Le Feu de l'Esprit" – Prière puissante et intercession.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE JEÛNE ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Jeûne" />
                <span class="event-category-tag">Jeûne</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-2</div>
            </div>
            <div class="event-card-body">
                <h3>Jeûne de 21 Jours</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 1-21 Mars 2026</span>
                    <span><i class="fas fa-map-pin"></i> En ligne & Présentiel</span>
                </div>
                <p>Période de prière et de consécration avec enseignements quotidiens.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-pdf"><i class="fas fa-file-pdf"></i> PDF</button>
                </div>
            </div>
        </div>

        <!-- ===== CARTE CAMP DES JEUNES ===== -->
        <div class="event-card">
            <div class="event-card-image">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Camp jeunes" />
                <span class="event-category-tag">Jeunesse</span>
                <div class="event-countdown"><i class="fas fa-clock"></i> J-65</div>
            </div>
            <div class="event-card-body">
                <h3>Camp des Jeunes</h3>
                <div class="event-meta">
                    <span><i class="fas fa-calendar-day"></i> 10-14 Avril 2026</span>
                    <span><i class="fas fa-map-pin"></i> Centre de Retraite</span>
                </div>
                <p>Activités, enseignements, louange et inscriptions ouvertes.</p>
                <div class="event-card-actions">
                    <button class="btn btn-primary"><i class="fas fa-eye"></i> Voir détails</button>
                    <button class="btn btn-gold"><i class="fas fa-check-circle"></i> S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CALENDRIER INTERACTIF ===== -->
<section class="container">
    <div class="calendar-section">
        <div class="calendar-header">
            <h3><i class="fas fa-calendar-alt" style="color:var(--gold);"></i> Calendrier des événements</h3>
            <div class="calendar-nav">
                <button><i class="fas fa-chevron-left"></i></button>
                <button style="background:var(--gold-gradient); color:var(--dark);">Mars 2026</button>
                <button><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        <div class="calendar-grid">
            <div class="day-name">Lun</div>
            <div class="day-name">Mar</div>
            <div class="day-name">Mer</div>
            <div class="day-name">Jeu</div>
            <div class="day-name">Ven</div>
            <div class="day-name">Sam</div>
            <div class="day-name">Dim</div>
            <!-- Simulacre de jours -->
            <div class="day">1</div>
            <div class="day">2</div>
            <div class="day">3</div>
            <div class="day">4</div>
            <div class="day">5</div>
            <div class="day">6</div>
            <div class="day">7</div>
            <div class="day">8</div>
            <div class="day">9</div>
            <div class="day">10</div>
            <div class="day">11</div>
            <div class="day">12</div>
            <div class="day">13</div>
            <div class="day">14</div>
            <div class="day has-event">15</div>
            <div class="day">16</div>
            <div class="day">17</div>
            <div class="day">18</div>
            <div class="day">19</div>
            <div class="day has-event">20</div>
            <div class="day">21</div>
            <div class="day">22</div>
            <div class="day">23</div>
            <div class="day">24</div>
            <div class="day">25</div>
            <div class="day has-event">26</div>
            <div class="day">27</div>
            <div class="day">28</div>
            <div class="day">29</div>
            <div class="day">30</div>
            <div class="day">31</div>
        </div>
        <div style="margin-top:16px; display:flex; gap:20px; flex-wrap:wrap; font-size:0.9rem;">
            <span><span style="display:inline-block; width:12px; height:12px; background:var(--gold-gradient); border-radius:4px;"></span> Événement</span>
            <span><span style="display:inline-block; width:12px; height:12px; border:2px solid var(--primary); border-radius:4px;"></span> Aujourd'hui</span>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer style="background:var(--dark); color:rgba(255,255,255,0.7); padding:40px 24px; margin-top:60px; text-align:center; border-radius:40px 40px 0 0;">
    <p style="font-family:'Playfair Display',serif; font-size:1.4rem; color:var(--gold);

<a href="index.php">Retour</a>
  <?php
include 'footer.php';
?>