 <?php
include 'header.php';
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ministères & Départements - Église CCS Bénin</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
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
            --primary-dark: #0e1e2e;
            --gold: #c9a84c;
            --gold-light: #e8d48b;
            --gold-gradient: linear-gradient(135deg, #c9a84c, #f0e08a);
            --cream: #fdf8f0;
            --cream-light: #fffcf7;
            --dark: #0e1e2e;
            --gray: #6b7a8a;
            --light-gray: #eef2f7;
            --shadow: 0 20px 40px -12px rgba(0,0,0,0.15);
            --shadow-hover: 0 30px 60px -12px rgba(0,0,0,0.25);
            --radius: 20px;
            --radius-sm: 12px;
            --transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--cream);
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== HERO ===== */
        .hero {
            position: relative;
            min-height: 65vh;
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
            padding: 8px 28px;
            border-radius: 50px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2.8rem, 10vw, 4.8rem);
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
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.92;
            max-width: 600px;
            margin: 0 auto 28px;
        }

        .hero-verse {
            font-style: italic;
            font-size: 1.05rem;
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(8px);
            padding: 14px 28px;
            border-radius: 16px;
            border-left: 4px solid var(--gold);
            display: inline-block;
            max-width: 600px;
            margin: 0 auto;
        }

        .hero-verse cite {
            display: block;
            font-style: normal;
            font-size: 0.85rem;
            opacity: 0.6;
            margin-top: 4px;
        }

        /* ===== STATS ===== */
        .stats-bar {
            display: flex;
            justify-content: center;
            gap: 48px;
            flex-wrap: wrap;
            padding: 24px 0 0;
        }

        .stats-bar .stat {
            text-align: center;
        }

        .stats-bar .stat .number {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--gold);
            display: block;
            font-family: 'Playfair Display', serif;
        }

        .stats-bar .stat .label {
            font-size: 0.85rem;
            opacity: 0.7;
            font-weight: 300;
        }

        /* ===== SECTION MINISTÈRES ===== */
        .ministries-section {
            padding: 20px 0 60px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-header h2 {
            font-size: 2.4rem;
            margin-bottom: 8px;
        }

        .section-header h2 span {
            color: var(--gold);
        }

        .section-header p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        /* ===== CARTE MINISTÈRE ===== */
        .ministry-card {
            background: #fff;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.06);
            transition: var(--transition);
            margin-bottom: 40px;
            display: grid;
            grid-template-columns: 340px 1fr;
        }

        .ministry-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-light);
        }

        .ministry-card .card-image {
            position: relative;
            overflow: hidden;
            min-height: 300px;
            background: var(--light-gray);
        }

        .ministry-card .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.7s;
        }

        .ministry-card:hover .card-image img {
            transform: scale(1.05);
        }

        .ministry-card .card-image .icon-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(8px);
            padding: 10px 16px;
            border-radius: 12px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .ministry-card .card-image .icon-overlay i {
            font-size: 1.6rem;
            color: var(--gold);
        }

        .ministry-card .card-body {
            padding: 32px 36px;
            display: flex;
            flex-direction: column;
        }

        .ministry-card .card-body .badge {
            display: inline-block;
            background: var(--gold-gradient);
            color: var(--dark);
            font-size: 0.65rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            padding: 4px 14px;
            border-radius: 30px;
            align-self: flex-start;
            margin-bottom: 10px;
        }

        .ministry-card .card-body h3 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .ministry-card .card-body .leader {
            color: var(--gold);
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .ministry-card .card-body .leader i {
            margin-right: 6px;
        }

        .ministry-card .card-body .description {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 12px;
        }

        .ministry-card .card-body .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px 20px;
            margin: 8px 0 16px;
        }

        .ministry-card .card-body .details-grid .detail-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: var(--dark);
        }

        .ministry-card .card-body .details-grid .detail-item i {
            color: var(--gold);
            width: 18px;
        }

        .ministry-card .card-body .gallery-preview {
            display: flex;
            gap: 8px;
            margin: 12px 0 16px;
            flex-wrap: wrap;
        }

        .ministry-card .card-body .gallery-preview img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: var(--radius-sm);
            border: 2px solid transparent;
            transition: var(--transition);
            cursor: pointer;
        }

        .ministry-card .card-body .gallery-preview img:hover {
            border-color: var(--gold);
            transform: scale(1.08);
        }

        .ministry-card .card-body .card-actions {
            display: flex;
            gap: 12px;
            margin-top: auto;
            flex-wrap: wrap;
        }

        .btn {
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Inter', sans-serif;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(26, 58, 92, 0.3);
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
            border: 1.5px solid var(--gray);
            color: var(--gray);
        }

        .btn-outline:hover {
            border-color: var(--gold);
            color: var(--dark);
            background: var(--cream);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .ministry-card {
                grid-template-columns: 1fr;
            }
            .ministry-card .card-image {
                min-height: 220px;
                max-height: 280px;
            }
            .ministry-card .card-body {
                padding: 28px 24px;
            }
            .stats-bar {
                gap: 24px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 50vh;
                border-radius: 0 0 30px 30px;
                padding: 60px 16px;
            }
            .hero h1 { font-size: 2.4rem; }
            .hero-sub { font-size: 1rem; }
            .hero-verse { font-size: 0.9rem; padding: 10px 16px; }

            .section-header h2 { font-size: 1.8rem; }
            .ministry-card .card-body h3 { font-size: 1.3rem; }
            .ministry-card .card-body .details-grid {
                grid-template-columns: 1fr;
                gap: 6px;
            }
            .stats-bar .stat .number { font-size: 1.6rem; }
        }

        @media (max-width: 480px) {
            .hero h1 { font-size: 2rem; }
            .ministry-card .card-body {
                padding: 20px 16px;
            }
            .ministry-card .card-body .card-actions {
                flex-direction: column;
            }
            .ministry-card .card-body .card-actions .btn {
                width: 100%;
                justify-content: center;
            }
            .ministry-card .card-body .gallery-preview img {
                width: 48px;
                height: 48px;
            }
        }

        /* ===== ANIMATIONS ===== */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-up.delay-1 { transition-delay: 0.05s; }
        .fade-up.delay-2 { transition-delay: 0.12s; }
        .fade-up.delay-3 { transition-delay: 0.19s; }
        .fade-up.delay-4 { transition-delay: 0.26s; }
        .fade-up.delay-5 { transition-delay: 0.33s; }
        .fade-up.delay-6 { transition-delay: 0.40s; }
        .fade-up.delay-7 { transition-delay: 0.47s; }
        .fade-up.delay-8 { transition-delay: 0.54s; }

        /* Scrollbar */
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
        <div class="hero-badge"><i class="fas fa-hands-helping"></i> Servir avec passion</div>
        <h1>Nos <span>Ministères</span></h1>
        <p class="hero-sub">Servir Dieu à travers nos dons et nos talents.</p>
        <div class="hero-verse">
            "Nous sommes les serviteurs de Dieu, et nous travaillons ensemble à son œuvre."
            <cite>— 1 Corinthiens 3:9</cite>
        </div>
        <div class="stats-bar">
            <div class="stat">
                <span class="number">8</span>
                <span class="label">Ministères actifs</span>
            </div>
            <div class="stat">
                <span class="number">200+</span>
                <span class="label">Serviteurs engagés</span>
            </div>
            <div class="stat">
                <span class="number">50+</span>
                <span class="label">Activités par an</span>
            </div>
        </div>
    </div>
</section>

<!-- ===== MINISTÈRES ===== -->
<section class="ministries-section container">
    <div class="section-header">
        <h2>Découvrez nos <span>départements</span></h2>
        <p>Chaque ministère contribue à la vie et à la mission de l'Église.</p>
    </div>

    <!-- ===== 1. CHORALE ===== -->
    <div class="ministry-card fade-up delay-1">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=600&q=80" alt="Chorale" />
            <div class="icon-overlay">
                <i class="fas fa-music"></i>
                <span>Ministère de la Chorale</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-microphone-alt"></i> Louange</span>
            <h3>Ministère de la Chorale</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Sœur Rebecca TCHEDJI</div>
            <p class="description">
                La chorale de l'Église CCS Bénin a pour mission d'animer les cultes par la louange et l'adoration, 
                d'édifier l'assemblée et de propager la parole de Dieu à travers le chant sacré.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Répétitions : Mercredi & Samedi 16h-18h</div>
                <div class="detail-item"><i class="fas fa-users"></i> 45 choristes</div>
                <div class="detail-item"><i class="fas fa-compact-disc"></i> Album en préparation</div>
                <div class="detail-item"><i class="fas fa-church"></i> Animation des cultes</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 2" />
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie 3" />
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 4" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 12 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-play-circle"></i> Écouter</button>
            </div>
        </div>
    </div>

    <!-- ===== 2. JEUNESSE ===== -->
    <div class="ministry-card fade-up delay-2">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Jeunesse" />
            <div class="icon-overlay">
                <i class="fas fa-users"></i>
                <span>Ministère de la Jeunesse</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-user-graduate"></i> Jeunesse</span>
            <h3>Ministère de la Jeunesse</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Frère Marc AGBOTON</div>
            <p class="description">
                Former une génération de jeunes chrétiens engagés, passionnés par Dieu et transformant leur environnement 
                à travers des activités spirituelles, culturelles et sociales.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Rencontres : Samedi 14h-17h</div>
                <div class="detail-item"><i class="fas fa-campground"></i> Camp annuel en juillet</div>
                <div class="detail-item"><i class="fas fa-hands-praying"></i> Veillées mensuelles</div>
                <div class="detail-item"><i class="fas fa-futbol"></i> Activités sportives</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie 2" />
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 3" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 8 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-user-plus"></i> Rejoindre</button>
            </div>
        </div>
    </div>

    <!-- ===== 3. FEMMES CHRÉTIENNES ===== -->
    <div class="ministry-card fade-up delay-3">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=600&q=80" alt="Femmes" />
            <div class="icon-overlay">
                <i class="fas fa-female"></i>
                <span>Ministère des Femmes</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-venus"></i> Femmes</span>
            <h3>Ministère des Femmes Chrétiennes</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Sœur Esther YEDO</div>
            <p class="description">
                Encourager les femmes à vivre leur foi, à développer leurs talents et à s'engager dans des actions 
                sociales et spirituelles au service de la communauté.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Rencontres : 1er Dimanche du mois</div>
                <div class="detail-item"><i class="fas fa-hand-holding-heart"></i> Actions caritatives</div>
                <div class="detail-item"><i class="fas fa-church"></i> Retraites spirituelles</div>
                <div class="detail-item"><i class="fas fa-utensils"></i> Ateliers culinaires</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 2" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 5 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-user-plus"></i> Rejoindre</button>
            </div>
        </div>
    </div>

    <!-- ===== 4. HOMMES CHRÉTIENS ===== -->
    <div class="ministry-card fade-up delay-4">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Hommes" />
            <div class="icon-overlay">
                <i class="fas fa-male"></i>
                <span>Ministère des Hommes</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-mars"></i> Hommes</span>
            <h3>Ministère des Hommes Chrétiens</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Frère Daniel SOGLO</div>
            <p class="description">
                Rassembler les hommes pour grandir spirituellement, assumer leurs responsabilités familiales et 
                professionnelles et être des modèles chrétiens dans la société.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Rencontres : 2ème Dimanche du mois</div>
                <div class="detail-item"><i class="fas fa-briefcase"></i> Séminaires professionnels</div>
                <div class="detail-item"><i class="fas fa-hiking"></i> Retraites hommes</div>
                <div class="detail-item"><i class="fas fa-tools"></i> Projets communautaires</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie 2" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 6 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-user-plus"></i> Rejoindre</button>
            </div>
        </div>
    </div>

    <!-- ===== 5. ÉVANGÉLISATION ===== -->
    <div class="ministry-card fade-up delay-5">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=600&q=80" alt="Évangélisation" />
            <div class="icon-overlay">
                <i class="fas fa-bullhorn"></i>
                <span>Ministère d'Évangélisation</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-globe-africa"></i> Mission</span>
            <h3>Ministère de l'Évangélisation</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Pasteur Isaac TOSSOU</div>
            <p class="description">
                Porter la bonne nouvelle de Jésus-Christ à travers tout le Bénin par des campagnes, des missions 
                et des actions d'évangélisation en milieu urbain et rural.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Campagnes trimestrielles</div>
                <div class="detail-item"><i class="fas fa-map-marked-alt"></i> 15 villages visités</div>
                <div class="detail-item"><i class="fas fa-people-arrows"></i> 500+ personnes touchées</div>
                <div class="detail-item"><i class="fas fa-hand-holding-heart"></i> Distribution de vivres</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 2" />
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie 3" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 15 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-hands-praying"></i> Participer</button>
            </div>
        </div>
    </div>

    <!-- ===== 6. FORMATION SPIRITUELLE ===== -->
    <div class="ministry-card fade-up delay-6">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=600&q=80" alt="Formation" />
            <div class="icon-overlay">
                <i class="fas fa-bible"></i>
                <span>Ministère de Formation</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-graduation-cap"></i> Enseignement</span>
            <h3>Ministère de la Formation Spirituelle</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Pasteur Samuel HOUNKPATIN</div>
            <p class="description">
                Former spirituellement l'assemblée à travers l'étude approfondie de la Bible, des cours théologiques 
                et des parcours de croissance chrétienne.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Cours : Mercredi 19h-21h</div>
                <div class="detail-item"><i class="fas fa-book"></i> École Biblique</div>
                <div class="detail-item"><i class="fas fa-question-circle"></i> Quiz bibliques mensuels</div>
                <div class="detail-item"><i class="fas fa-certificate"></i> Certificats de formation</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=100&q=80" alt="galerie 2" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 4 photos</span>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary"><i class="fas fa-eye"></i> En savoir plus</button>
                <button class="btn btn-gold"><i class="fas fa-user-graduate"></i> S'inscrire</button>
            </div>
        </div>
    </div>

    <!-- ===== 7. PRIÈRE ET INTERCESSION ===== -->
    <div class="ministry-card fade-up delay-7">
        <div class="card-image">
            <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=600&q=80" alt="Prière" />
            <div class="icon-overlay">
                <i class="fas fa-hands-praying"></i>
                <span>Ministère de Prière</span>
            </div>
        </div>
        <div class="card-body">
            <span class="badge"><i class="fas fa-pray"></i> Intercession</span>
            <h3>Ministère de la Prière et Intercession</h3>
            <div class="leader"><i class="fas fa-user-circle"></i> Responsable : Pasteur Élie DAH</div>
            <p class="description">
                Animer la vie de prière de l'Église à travers des veillées, des chaînes de prière et des groupes 
                d'intercession pour les besoins de l'Église et de la nation.
            </p>
            <div class="details-grid">
                <div class="detail-item"><i class="fas fa-calendar-alt"></i> Veillées : Vendredi 20h-22h</div>
                <div class="detail-item"><i class="fas fa-clock"></i> Chaîne de prière permanente</div>
                <div class="detail-item"><i class="fas fa-users"></i> 5 groupes d'intercession</div>
                <div class="detail-item"><i class="fas fa-map-pin"></i> Prière pour la nation</div>
            </div>
            <div class="gallery-preview">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=100&q=80" alt="galerie 1" />
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=100&q=80" alt="galerie 2" />
                <span style="font-size:0.8rem; color:var(--gray); display:flex; align-items:center;">+ 7 photos</span

  <?php
include 'footer.php';
?>