<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de Formation Spirituelle | Paroisse Siège Vèpka</title>
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin-top: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #1e2a3a;
            line-height: 1.6;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== COULEURS ===== */
        :root {
            --blanc: #ffffff;
            --bleu-ciel: #e0f2fe;
            --bleu-clair: #b8dff5;
            --bleu-profond: #0b2b4a;
            --bleu-moyen: #1a4b6d;
            --dore: #c9a84c;
            --dore-clair: #f0e0a0;
            --ombre: rgba(11, 43, 74, 0.12);
            --transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* ===== BOUTONS ===== */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, var(--dore), #b8922f);
            color: var(--bleu-profond);
            font-weight: 700;
            padding: 16px 40px;
            border-radius: 60px;
            text-decoration: none;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            box-shadow: 0 8px 28px rgba(201, 168, 76, 0.4);
            letter-spacing: 0.5px;
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 40px rgba(201, 168, 76, 0.55);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            color: var(--bleu-profond);
            font-weight: 600;
            padding: 14px 32px;
            border-radius: 60px;
            text-decoration: none;
            font-size: 1rem;
            border: 2px solid var(--dore);
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-secondary:hover {
            background: var(--dore);
            color: var(--bleu-profond);
            transform: translateY(-2px);
        }

        /* ===== SECTION TITRES ===== */
        .section-title {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--bleu-profond);
            text-align: center;
            margin-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            text-align: center;
            color: #4a5b6e;
            font-size: 1.15rem;
            max-width: 640px;
            margin: 0 auto 48px;
            font-weight: 400;
        }

        .section-tag {
            display: inline-block;
            background: var(--bleu-ciel);
            color: var(--bleu-profond);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 6px 18px;
            border-radius: 40px;
            margin-bottom: 12px;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            padding: 80px 0 100px;
            background: linear-gradient(165deg, var(--bleu-profond) 0%, #0d3557 50%, var(--bleu-moyen) 100%);
            position: relative;
            overflow: hidden;
            border-bottom: 6px solid var(--dore);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -20%;
            width: 700px;
            height: 700px;
            background: radial-gradient(circle, rgba(201, 168, 76, 0.08) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120'%3E%3Cpath d='M0,0 C300,100 700,0 1200,80 L1200,120 L0,120 Z' fill='%23ffffff'/%3E%3C/svg%3E") no-repeat bottom / 100% 100%;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 4.2rem;
            font-weight: 900;
            color: var(--blanc);
            line-height: 1.1;
            margin-bottom: 16px;
            letter-spacing: -1px;
        }

        .hero-content h1 span {
            color: var(--dore);
            position: relative;
        }

        .hero-content h1 span::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--dore);
            border-radius: 4px;
            opacity: 0.3;
        }

        .hero-content p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.3rem;
            font-weight: 300;
            max-width: 500px;
            margin-bottom: 32px;
            line-height: 1.7;
        }

        .hero-verse {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(8px);
            border-left: 4px solid var(--dore);
            padding: 20px 28px;
            border-radius: 12px;
            margin-top: 32px;
            max-width: 480px;
        }

        .hero-verse p {
            color: rgba(255, 255, 255, 0.9) !important;
            font-size: 1rem !important;
            font-style: italic;
            margin-bottom: 4px !important;
            font-weight: 400 !important;
        }

        .hero-verse .ref {
            color: var(--dore-clair) !important;
            font-style: normal !important;
            font-weight: 600 !important;
            font-size: 0.9rem !important;
        }

        .hero-badges {
            display: flex;
            gap: 24px;
            margin-top: 28px;
        }

        .hero-badges .badge-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .hero-badges .badge-item i {
            color: var(--dore);
            font-size: 1.2rem;
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .hero-image .illustration {
            width: 100%;
            max-width: 480px;
            aspect-ratio: 1/1;
            background: linear-gradient(145deg, rgba(201, 168, 76, 0.15), rgba(255, 255, 255, 0.05));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(201, 168, 76, 0.2);
            position: relative;
        }

        .hero-image .illustration i {
            font-size: 10rem;
            color: var(--dore);
            opacity: 0.7;
        }

        .floating-icon {
            position: absolute;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(4px);
            border-radius: 50%;
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--dore);
            border: 1px solid rgba(201, 168, 76, 0.15);
        }

        .floating-icon:nth-child(1) { top: 10%; left: 0; animation: float 6s ease-in-out infinite; }
        .floating-icon:nth-child(2) { bottom: 15%; right: 5%; animation: float 8s ease-in-out infinite reverse; }
        .floating-icon:nth-child(3) { top: 50%; right: -10%; animation: float 7s ease-in-out infinite; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* ===== CARDS ===== */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
        }

        .card {
            background: var(--blanc);
            border-radius: 24px;
            padding: 32px 28px;
            box-shadow: 0 8px 32px var(--ombre);
            transition: var(--transition);
            border: 1px solid rgba(201, 168, 76, 0.1);
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 48px rgba(11, 43, 74, 0.15);
            border-color: var(--dore);
        }

        .card .card-icon {
            width: 56px;
            height: 56px;
            background: var(--bleu-ciel);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--bleu-profond);
            margin-bottom: 18px;
            transition: var(--transition);
        }

        .card:hover .card-icon {
            background: var(--dore);
            color: var(--blanc);
        }

        .card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--bleu-profond);
            margin-bottom: 8px;
        }

        .card p {
            color: #4a5b6e;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }

        .card .card-meta {
            display: flex;
            gap: 16px;
            font-size: 0.85rem;
            color: #6b7a8e;
            margin-bottom: 18px;
        }

        .card .card-meta span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .card .card-meta i {
            color: var(--dore);
        }

        .card .btn-start {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--bleu-profond);
            font-weight: 600;
            text-decoration: none;
            font-size: 0.95rem;
            transition: var(--transition);
        }

        .card .btn-start i {
            transition: var(--transition);
        }

        .card .btn-start:hover {
            color: var(--dore);
        }

        .card .btn-start:hover i {
            transform: translateX(6px);
        }

        .card .badge-level {
            position: absolute;
            top: 16px;
            right: 16px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: 4px 14px;
            border-radius: 40px;
            background: var(--bleu-ciel);
            color: var(--bleu-profond);
        }

        .card .badge-level.intermediaire { background: #fef3c7; color: #92400e; }
        .card .badge-level.avance { background: #fce4ec; color: #b71c1c; }

        /* ===== PROGRESS BAR ===== */
        .progress-wrap {
            background: #eef2f6;
            border-radius: 40px;
            height: 8px;
            overflow: hidden;
            margin: 12px 0 16px;
        }

        .progress-wrap .progress-fill {
            height: 100%;
            border-radius: 40px;
            background: linear-gradient(90deg, var(--dore), #c9a84c);
            width: 0%;
            transition: width 1.2s ease;
        }

        /* ===== MODULE SECTIONS ===== */
        .module-section {
            padding: 80px 0;
        }

        .module-section:nth-child(even) {
            background: #f9fbfd;
        }

        /* ===== SUPPORTS ===== */
        .supports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 24px;
        }

        .support-item {
            background: var(--blanc);
            border-radius: 20px;
            padding: 28px 20px;
            text-align: center;
            box-shadow: 0 4px 16px var(--ombre);
            transition: var(--transition);
            border: 1px solid transparent;
        }

        .support-item:hover {
            border-color: var(--dore);
            transform: translateY(-4px);
        }

        .support-item i {
            font-size: 2.8rem;
            color: var(--dore);
            margin-bottom: 12px;
        }

        .support-item h4 {
            font-weight: 700;
            color: var(--bleu-profond);
            margin-bottom: 4px;
        }

        .support-item p {
            font-size: 0.85rem;
            color: #6b7a8e;
        }

        /* ===== PARCOURS ===== */
        .parcours-card {
            background: var(--blanc);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 8px 32px var(--ombre);
            border-left: 6px solid var(--dore);
            transition: var(--transition);
        }

        .parcours-card:hover {
            transform: translateX(8px);
        }

        .parcours-card .level-tag {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--dore);
        }

        .parcours-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--bleu-profond);
            margin: 4px 0 8px;
        }

        .parcours-card ul {
            list-style: none;
            margin: 12px 0 16px;
        }

        .parcours-card ul li {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px 0;
            color: #4a5b6e;
            font-size: 0.95rem;
        }

        .parcours-card ul li i {
            color: var(--dore);
            font-size: 0.9rem;
        }

        /* ===== QUIZ ===== */
        .quiz-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 24px;
        }

        .quiz-item {
            background: var(--blanc);
            border-radius: 20px;
            padding: 28px;
            text-align: center;
            box-shadow: 0 4px 20px var(--ombre);
            transition: var(--transition);
            cursor: pointer;
        }

        .quiz-item:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 40px var(--ombre);
        }

        .quiz-item .score-circle {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            border: 4px solid var(--dore);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--bleu-profond);
        }

        /* ===== CERTIFICAT ===== */
        .certificate-preview {
            background: linear-gradient(145deg, #fefcf5, #f8f4e8);
            border: 3px solid var(--dore);
            border-radius: 24px;
            padding: 48px 40px;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 16px 48px rgba(201, 168, 76, 0.2);
        }

        .certificate-preview i {
            font-size: 4rem;
            color: var(--dore);
            margin-bottom: 12px;
        }

        .certificate-preview h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--bleu-profond);
        }

        .certificate-preview p {
            color: #4a5b6e;
            margin: 8px 0 16px;
        }

        /* ===== DASHBOARD ===== */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }

        .dash-item {
            background: var(--blanc);
            border-radius: 18px;
            padding: 24px 20px;
            text-align: center;
            box-shadow: 0 4px 16px var(--ombre);
            transition: var(--transition);
        }

        .dash-item:hover {
            transform: translateY(-4px);
        }

        .dash-item i {
            font-size: 2.4rem;
            color: var(--dore);
            margin-bottom: 8px;
        }

        .dash-item .count {
            font-size: 2rem;
            font-weight: 800;
            color: var(--bleu-profond);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .hero-grid { grid-template-columns: 1fr; text-align: center; }
            .hero-content p { margin: 0 auto 32px; }
            .hero-verse { margin: 32px auto 0; }
            .hero-badges { justify-content: center; flex-wrap: wrap; }
            .hero-content h1 { font-size: 3.2rem; }
            .hero-image .illustration { max-width: 320px; }
            .floating-icon { display: none; }
            .section-title { font-size: 2.2rem; }
        }

        @media (max-width: 600px) {
            .hero { padding: 60px 0 80px; }
            .hero-content h1 { font-size: 2.4rem; }
            .hero-content p { font-size: 1rem; }
            .btn-primary { padding: 14px 28px; font-size: 1rem; }
            .section-title { font-size: 1.8rem; }
            .card { padding: 24px 20px; }
            .certificate-preview { padding: 32px 20px; }
        }

        /* ===== ANIMATIONS ===== */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 0.8s ease forwards;
        }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
</head>
<body>
    <?php
include '../accueil/header.php';
?>

 <!-- ============================================================ -->
<!-- HERO SECTION -->
<!-- ============================================================ -->
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-content">
            <span class="section-tag" style="background:rgba(255,255,255,0.12);color:var(--dore);">
                <i class="fas fa-graduation-cap" style="margin-right:8px;"></i> Académie Chrétienne
            </span>
            <h1 style="margin-top: 220px;">Centre de <span>Formation</span> Spirituelle</h1>
            <p>Grandir dans la foi, approfondir la Parole et vivre selon les enseignements du Christ.</p>
            <a href="quiz_fin_1.php" class="btn-primary">
                <i class="fas fa-play-circle"></i> Commencer l'apprentissage
            </a>
            <div class="hero-verse">
                <p>« La crainte de l'Éternel est le commencement de la sagesse, et la connaissance du Saint est l'intelligence. »</p>
                <span class="ref">— Proverbes 9:10</span>
            </div>
            <div class="hero-badges">
                <span class="badge-item"><i class="fas fa-book-open"></i> 40+ Cours</span>
                <span class="badge-item"><i class="fas fa-users"></i> Étudiants</span>
                <span class="badge-item"><i class="fas fa-certificate"></i> Certificats</span>
            </div>
        </div>
        <div class="hero-image">
            <div class="illustration">
             <img src="../accueil/logo.jpg" alt="" style="border-radius: 50%; width: 160px;position: absolute;margin-bottom: 190px;">
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- MODULE 1 : COURS BIBLIQUES -->
<!-- ============================================================ -->
<section class="module-section">
    <div class="container">
        <span class="section-tag"><i class="fas fa-book"></i> Module 1</span>
        <h2 class="section-title">Études Bibliques</h2>
        <p class="section-subtitle">Plongez dans la Parole de Dieu avec des cours structurés pour tous les niveaux.</p>

        <div class="cards-grid">
            <!-- Carte 1 -->
            <div class="card fade-up delay-1">
                <span class="badge-level">Débutant</span>
                <div class="card-icon"><i class="fas fa-bible"></i></div>
                <h3>Introduction à la Bible</h3>
                <p>Origine, structure, inspiration et méthodes d'étude des Écritures.</p>
                <div class="card-meta">
                    <span><i class="far fa-clock"></i> 4h</span>
                    <span><i class="fas fa-layer-group"></i> 6 leçons</span>
                </div>
                <div class="progress-wrap"><div class="progress-fill" style="width:30%;"></div></div>
                <a href="quiz_fin_1.php" class="btn-start">Commencé <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Carte 2 -->
            <div class="card fade-up delay-2">
                <span class="badge-level">Débutant</span>
                <div class="card-icon"><i class="fas fa-scroll"></i></div>
                <h3>Ancien Testament</h3>
                <p>La création, les patriarches, Moïse, les prophètes et l'histoire d'Israël.</p>
                <div class="card-meta">
                    <span><i class="far fa-clock"></i> 8h</span>
                    <span><i class="fas fa-layer-group"></i> 12 leçons</span>
                </div>
                <div class="progress-wrap"><div class="progress-fill" style="width:0%;"></div></div>
                <a href="quiz_fin_2.php" class="btn-start">Commencer <i class="fas fa-arrow-right"></i></a>
            </div>
           


            <!-- Carte 3 -->
            <div class="card fade-up delay-3">
                <span class="badge-level intermediaire">Intermédiaire</span>
                <div class="card-icon"><i class="fas fa-church"></i></div>
                <h3>Nouveau Testament</h3>
                <p>Vie de Jésus, Évangiles, Actes, Épîtres et l'Apocalypse.</p>
                <div class="card-meta">
                    <span><i class="far fa-clock"></i> 10h</span>
                    <span><i class="fas fa-layer-group"></i> 14 leçons</span>
                </div>
                <div class="progress-wrap"><div class="progress-fill" style="width:0%;"></div></div>
                <a href="quiz_niveau_1.php" class="btn-start">Commencer <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Carte 4 -->
            <div class="card fade-up delay-3">
                <span class="badge-level intermediaire">Intermédiaire</span>
                <div class="card-icon"><i class="fas fa-church"></i></div>
                <h3>Thème</h3>
                <p>Vie de Jésus, Évangiles, Actes, Épîtres et l'Apocalypse.</p>
                <div class="card-meta">
                    <span><i class="far fa-clock"></i> 10h</span>
                    <span><i class="fas fa-layer-group"></i> 14 leçons</span>
                </div>
                <div class="progress-wrap"><div class="progress-fill" style="width:0%;"></div></div>
                <a href="quiz_personne.php" class="btn-start">Commencer <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Carte 5 -->
            <div class="card fade-up delay-4">
                <span class="badge-level avance">Avancé</span>
                <div class="card-icon"><i class="fas fa-lightbulb"></i></div>
                <h3>personnages</h3>
                <p>La foi, la prière, la sainteté, le pardon, l'amour, le jeûne, le Saint-Esprit.</p>
                <div class="card-meta">
                    <span><i class="far fa-clock"></i> 12h</span>
                    <span><i class="fas fa-layer-group"></i> 18 leçons</span>
                </div>
                <div class="progress-wrap"><div class="progress-fill" style="width:0%;"></div></div>
                <a href="quiz_themes.php" class="btn-start">Commencer <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- MODULE 2 : ENSEIGNEMENTS DE L'ÉGLISE -->
<!-- ============================================================ -->
<section class="module-section" style="background:#f9fbfd;">
    <div class="container">
        <span class="section-tag"><i class="fas fa-church"></i> Module 2</span>
        <h2 class="section-title">Enseignements de l'Église</h2>
        <p class="section-subtitle">Les fondements doctrinaux et les valeurs spirituelles des Chérubins et Séraphins.</p>

        <div class="cards-grid">
            <div class="card fade-up delay-1">
                <div class="card-icon"><i class="fas fa-history"></i></div>
                <h3>Doctrine des Chérubins et Séraphins</h3>
                <p>Historique, fondements doctrinaux et valeurs spirituelles de notre Église.</p>
                <a href="#" class="btn-start">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card fade-up delay-2">
                <div class="card-icon"><i class="fas fa-praying-hands"></i></div>
                <h3>Règles spirituelles</h3>
                <p>Discipline chrétienne, vie de prière et comportement du fidèle.</p>
                <a href="#" class="btn-start">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="card fade-up delay-3">
                <div class="card-icon"><i class="fas fa-home"></i></div>
                <h3>Vie chrétienne pratique</h3>
                <p>Famille chrétienne, service, témoignage et leadership spirituel.</p>
                <a href="#" class="btn-start">Explorer <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- MODULE 3 : SUPPORTS D'APPRENTISSAGE -->
<!-- ============================================================ -->
<section class="module-section">
    <div class="container">
        <span class="section-tag"><i class="fas fa-download"></i> Module 3</span>
        <h2 class="section-title">Supports d'Apprentissage</h2>
        <p class="section-subtitle">Une bibliothèque numérique riche pour approfondir votre foi à tout moment.</p>

        <div class="supports-grid">
            <div class="support-item fade-up delay-1">
                <i class="fas fa-video"></i>
                <h4>Vidéos</h4>
                <p>Enseignements filmés</p>
            </div>
            <div class="support-item fade-up delay-2">
                <i class="fas fa-headphones"></i>
                <h4>Audio</h4>
                <p>Messages et prédications</p>
            </div>
            <div class="support-item fade-up delay-3">
                <i class="fas fa-file-pdf"></i>
                <h4>PDF</h4>
                <p>Cours et guides de prière</p>
            </div>
            <div class="support-item fade-up delay-4">
                <i class="fas fa-comment-dots"></i>
                <h4>Versets commentés</h4>
                <p>Analyses et applications</p>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
            <a href="#" class="btn-secondary"><i class="fas fa-search"></i> Rechercher des ressources</a>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- MODULE 4 : PARCOURS D'APPRENTISSAGE -->
<!-- ============================================================ -->
<section class="module-section" style="background:#f9fbfd;">
    <div class="container">
        <span class="section-tag"><i class="fas fa-route"></i> Module 4</span>
        <h2 class="section-title">Parcours d'Apprentissage</h2>
        <p class="section-subtitle">Progressez pas à pas, du débutant à l'avancé, avec des modules adaptés.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:28px;">
            <div class="parcours-card fade-up delay-1">
                <span class="level-tag"><i class="fas fa-seedling"></i> Niveau Débutant</span>
                <h3>Fondements de la foi</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Découverte de la Bible</li>
                    <li><i class="fas fa-check-circle"></i> Les fondements de la foi</li>
                    <li><i class="fas fa-check-circle"></i> Introduction à la prière</li>
                </ul>
                <div class="progress-wrap"><div class="progress-fill" style="width:65%;"></div></div>
                <span style="font-size:0.9rem;color:#4a5b6e;">65% complété</span>
            </div>

            <div class="parcours-card fade-up delay-2" style="border-left-color:#c9a84c;">
                <span class="level-tag"><i class="fas fa-fire"></i> Niveau Intermédiaire</span>
                <h3>Approfondissement</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Étude approfondie des Écritures</li>
                    <li><i class="fas fa-check-circle"></i> Vie chrétienne pratique</li>
                    <li><i class="fas fa-check-circle"></i> Service dans l'Église</li>
                </ul>
                <div class="progress-wrap"><div class="progress-fill" style="width:20%;"></div></div>
                <span style="font-size:0.9rem;color:#4a5b6e;">20% complété</span>
            </div>

            <div class="parcours-card fade-up delay-3" style="border-left-color:#b71c1c;">
                <span class="level-tag"><i class="fas fa-crown"></i> Niveau Avancé</span>
                <h3>Formation de disciples</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Théologie biblique</li>
                    <li><i class="fas fa-check-circle"></i> Leadership spirituel</li>
                    <li><i class="fas fa-check-circle"></i> Formation de disciples</li>
                </ul>
                <div class="progress-wrap"><div class="progress-fill" style="width:0%;"></div></div>
                <span style="font-size:0.9rem;color:#4a5b6e;">0% complété</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================================ -->
<!-- MODULE 5 : QUIZ BIBLIQUES -->
<!-- ============================================================ -->
<section class="module-section">
    <div class="container">
        <span class="section-tag"><i class="fas fa-question-circle"></i> Module 5</span>
        <h2 class="section-title"><a href="quiz_niveau_1.php">Quiz Bibliques</a></h2>
        <p class="section-subtitle">Évaluez vos connaissances et suivez vos progrès.</p>


  <?php
include '../accueil/footer.php';
?>
       <!-- <div class="quiz-grid">
            <div class="quiz-item fade-up delay-1">
               