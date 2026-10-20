<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nos Paroisses – ECCSB · Église Chrétienne Céleste Source de Bénédiction</title>
    <!-- Font Awesome 6 (gratuit) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* ============================================================
               RESET & BASE
            ============================================================ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin-top: 80px;
            font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
            background: #faf9fc;
            color: #1e1a2b;
            line-height: 1.6;
            scroll-behavior: smooth;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* ============================================================
               COULEURS CHRISTIENNES ÉLÉGANTES
            ============================================================ */
        :root {
            --bleu-profond: #0f2847;
            --bleu-royal: #1a3b6b;
            --bleu-lumiere: #2e5a8a;
            --or-dore: #c9a84c;
            --or-doux: #e8d5a3;
            --blanc-casse: #f5f2ed;
            --gris-clair: #eae7f0;
            --texte-fonce: #1a1628;
            --ombre: 0 20px 40px -12px rgba(15, 40, 71, 0.25);
        }

        /* ============================================================
               TYPOGRAPHIE
            ============================================================ */
        h1,
        h2,
        h3,
        h4 {
            font-weight: 600;
            letter-spacing: -0.01em;
        }

        h2 {
            font-size: clamp(2rem, 5vw, 3rem);
            text-align: center;
            margin-bottom: 1rem;
            color: var(--bleu-profond);
        }

        h2 i {
            color: var(--or-dore);
            margin-right: 0.5rem;
        }

        .sous-titre-section {
            text-align: center;
            font-size: clamp(1rem, 1.4vw, 1.25rem);
            color: #4a4560;
            max-width: 720px;
            margin: 0 auto 2.5rem auto;
            font-weight: 300;
        }

        /* ============================================================
               BOUTONS
            ============================================================ */
        .btn {
            display: inline-block;
            padding: 0.7rem 1.8rem;
            border-radius: 60px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            cursor: pointer;
            text-align: center;
            letter-spacing: 0.3px;
        }

        .btn-primaire {
            background: var(--bleu-royal);
            color: #fff;
            box-shadow: 0 4px 14px rgba(26, 59, 107, 0.25);
        }
        .btn-primaire:hover {
            background: var(--bleu-profond);
            transform: translateY(-3px);
            box-shadow: 0 8px 28px rgba(26, 59, 107, 0.3);
        }

        .btn-secondaire {
            background: transparent;
            color: var(--bleu-royal);
            border-color: var(--bleu-royal);
        }
        .btn-secondaire:hover {
            background: var(--bleu-royal);
            color: #fff;
            transform: translateY(-3px);
        }

        .btn-dore {
            background: var(--or-dore);
            color: #1e1a2b;
        }
        .btn-dore:hover {
            background: #b8953a;
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.35);
        }

        /* ============================================================
               HERO
            ============================================================ */
        .hero-paroisses {
            background: linear-gradient(135deg, rgba(15, 40, 71, 0.88), rgba(26, 59, 107, 0.80)),
                url('paroisse/gbekue/image/chef_gbinkue.jpg') center/cover no-repeat;
            padding: 6rem 2rem 5rem;
            text-align: center;
            color: #fff;
            position: relative;
            border-bottom: 6px solid var(--or-dore);
        }

        .hero-paroisses h1 {
            font-size: clamp(2.8rem, 8vw, 4.8rem);
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeUp 1s ease forwards;
        }

        .hero-paroisses h1 i {
            color: var(--or-dore);
            margin-right: 0.6rem;
        }

        .hero-paroisses p {
            font-size: clamp(1.1rem, 2vw, 1.5rem);
            max-width: 700px;
            margin: 1.2rem auto 0;
            opacity: 0.92;
            font-weight: 300;
            animation: fadeUp 1s ease 0.2s forwards;
            opacity: 0;
        }

        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ============================================================
               SECTION PRÉSENTATION
            ============================================================ */
        .section-presentation {
            padding: 4rem 2rem 3rem;
            background: #fff;
        }

        .presentation-texte {
            max-width: 820px;
            margin: 0 auto;
            font-size: clamp(1rem, 1.2vw, 1.15rem);
            color: #2d2a3e;
            text-align: center;
            line-height: 1.8;
        }

        .presentation-texte i {
            color: var(--or-dore);
            margin: 0 0.2rem;
        }

        /* ============================================================
               LISTE PAROISSES (CARDS)
            ============================================================ */
        .section-paroisses {
            padding: 4rem 2rem 5rem;
            background: var(--gris-clair);
        }

        .grid-paroisses {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2.5rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        .carte-paroisse {
            background: #fff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--ombre);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(201, 168, 76, 0.10);
        }

        .carte-paroisse:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px -12px rgba(15, 40, 71, 0.30);
        }

        .carte-paroisse .photo {
            height: 220px;
            background: var(--bleu-lumiere);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.3);
            font-size: 2.8rem;
            position: relative;
            overflow: hidden;
        }

        .carte-paroisse .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .carte-paroisse:hover .photo img {
            transform: scale(1.05);
        }

        .carte-paroisse .photo .badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: var(--or-dore);
            color: #1e1a2b;
            padding: 0.2rem 1rem;
            border-radius: 60px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .carte-contenu {
            padding: 1.6rem 1.5rem 1.8rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .carte-contenu h3 {
            font-size: 1.4rem;
            color: var(--bleu-profond);
            margin-bottom: 0.3rem;
        }

        .carte-contenu .adresse {
            font-size: 0.9rem;
            color: #4f4a66;
            margin-bottom: 0.7rem;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .carte-contenu .adresse i {
            color: var(--or-dore);
            width: 1.2rem;
        }

        .carte-contenu .infos {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            font-size: 0.9rem;
            color: #2d2a3e;
            margin-bottom: 1rem;
        }

        .carte-contenu .infos span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .carte-contenu .infos i {
            color: var(--bleu-royal);
            width: 1.4rem;
            font-size: 0.9rem;
        }

        .carte-contenu .horaires {
            background: #f3f1f8;
            border-radius: 40px;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            margin: 0.5rem 0 1rem;
            color: #1e1a2b;
            align-self: flex-start;
        }

        .carte-contenu .horaires i {
            color: var(--or-dore);
        }

        .carte-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid rgba(0, 0, 0, 0.04);
        }

        .carte-actions .btn {
            flex: 1 1 auto;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            min-width: 100px;
        }

        /* ============================================================
               CARTE INTERACTIVE (GOOGLE MAPS)
            ============================================================ */
        .section-carte {
            padding: 4rem 2rem 3rem;
            background: #fff;
        }

        .carte-container {
            border-radius: 32px;
            overflow: hidden;
            box-shadow: var(--ombre);
            border: 2px solid rgba(201, 168, 76, 0.15);
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .carte-container iframe {
            width: 100%;
            height: 450px;
            border: 0;
            display: block;
            filter: grayscale(0.1) contrast(1.05);
        }

        .carte-container .carte-legende {
            background: var(--bleu-profond);
            color: #fff;
            padding: 0.8rem 1.5rem;
            font-size: 0.95rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem 2.5rem;
        }

        .carte-legende i {
            color: var(--or-dore);
            margin-right: 0.4rem;
        }

        /* ============================================================
               ACTIVITÉS
            ============================================================ */
        .section-activites {
            padding: 4rem 2rem 5rem;
            background: var(--gris-clair);
        }

        .grid-activites {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        .carte-activite {
            background: #fff;
            border-radius: 24px;
            padding: 2rem 1.2rem;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(201, 168, 76, 0.08);
        }

        .carte-activite:hover {
            transform: translateY(-8px);
            box-shadow: var(--ombre);
        }

        .carte-activite i {
            font-size: 2.8rem;
            color: var(--or-dore);
            margin-bottom: 0.6rem;
        }

        .carte-activite h4 {
            font-size: 1.1rem;
            color: var(--bleu-profond);
            margin-bottom: 0.2rem;
        }

        .carte-activite p {
            font-size: 0.9rem;
            color: #4a4560;
        }

        /* ============================================================
               GALERIE
            ============================================================ */
        .section-galerie {
            padding: 4rem 2rem 5rem;
            background: #fff;
        }

        .grid-galerie {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            max-width: 1300px;
            margin: 0 auto;
        }

        .item-galerie {
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            aspect-ratio: 4/3;
            background: var(--bleu-lumiere);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
        }

        .item-galerie:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(15, 40, 71, 0.20);
        }

        .item-galerie img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .item-galerie:hover img {
            transform: scale(1.08);
        }

        .item-galerie .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15, 40, 71, 0.6), transparent);
            display: flex;
            align-items: flex-end;
            padding: 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 1rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .item-galerie:hover .overlay {
            opacity: 1;
        }

        /* ============================================================
               TÉMOIGNAGES
            ============================================================ */
        .section-temoignages {
            padding: 4rem 2rem 5rem;
            background: var(--gris-clair);
        }

        .grid-temoignages {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .carte-temoignage {
            background: #fff;
            border-radius: 28px;
            padding: 2rem 1.8rem;
            box-shadow: var(--ombre);
            position: relative;
            border-left: 6px solid var(--or-dore);
            transition: transform 0.3s ease;
        }

        .carte-temoignage:hover {
            transform: translateY(-6px);
        }

        .carte-temoignage .quote {
            font-size: 2rem;
            color: var(--or-dore);
            opacity: 0.3;
            line-height: 1;
            margin-bottom: 0.2rem;
        }

        .carte-temoignage p {
            font-style: italic;
            color: #2d2a3e;
            margin-bottom: 1rem;
        }

        .carte-temoignage .auteur {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .carte-temoignage .auteur img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--or-dore);
        }

        .carte-temoignage .auteur .nom {
            font-weight: 600;
            color: var(--bleu-profond);
        }

        .carte-temoignage .auteur .paroisse {
            font-size: 0.8rem;
            color: #6a6580;
        }

        /* ============================================================
               CTA
            ============================================================ */
        .section-cta {
            padding: 4rem 2rem;
            background: linear-gradient(145deg, var(--bleu-profond), var(--bleu-royal));
            color: #fff;
            text-align: center;
            border-top: 6px solid var(--or-dore);
            border-bottom: 6px solid var(--or-dore);
        }

        .section-cta h2 {
            color: #fff;
            font-size: clamp(2rem, 5vw, 3.2rem);
        }

        .section-cta h2 i {
            color: var(--or-dore);
        }

        .section-cta p {
            font-size: clamp(1rem, 1.4vw, 1.3rem);
            opacity: 0.9;
            max-width: 600px;
            margin: 0.5rem auto 2rem;
        }

        /* ============================================================
               FOOTER
            ============================================================ */
        .footer-eccsb {
            background: #0b1a30;
            color: #d4dcec;
            padding: 3.5rem 2rem 1.5rem;
            border-top: 4px solid var(--or-dore);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2.5rem;
            max-width: 1300px;
            margin: 0 auto;
        }

        .footer-grid h4 {
            color: #f0e9dc;
            font-size: 1.1rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid rgba(201, 168, 76, 0.2);
            padding-bottom: 0.5rem;
        }

        .footer-grid h4 i {
            color: var(--or-dore);
            margin-right: 0.4rem;
        }

        .footer-grid p,
        .footer-grid li {
            font-size: 0.9rem;
            line-height: 1.8;
            color: #bcc8de;
        }

        .footer-grid ul {
            list-style: none;
            padding: 0;
        }

        .footer-grid ul li a {
            transition: color 0.2s, padding-left 0.2s;
            display: inline-block;
        }
        .footer-grid ul li a:hover {
            color: #fff;
            padding-left: 6px;
        }

        .footer-socials {
            display: flex;
            gap: 0.8rem;
            margin-top: 0.5rem;
            flex-wrap: wrap;
        }

        .footer-socials a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(201, 168, 76, 0.15);
            color: #d4dcec;
            transition: all 0.25s ease;
            font-size: 1.2rem;
        }

        .footer-socials a:hover {
            background: var(--or-dore);
            color: #0b1a30;
            transform: translateY(-4px);
            border-color: var(--or-dore);
        }

        .footer-newsletter input {
            padding: 0.6rem 1rem;
            border-radius: 60px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.04);
            color: #fff;
            width: 100%;
            max-width: 260px;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        .footer-newsletter input::placeholder {
            color: #8899b0;
        }
        .footer-newsletter button {
            background: var(--or-dore);
            border: none;
            padding: 0.6rem 1.8rem;
            border-radius: 60px;
            font-weight: 600;
            color: #1e1a2b;
            cursor: pointer;
            transition: background 0.2s;
        }
        .footer-newsletter button:hover {
            background: #b8953a;
        }

        .footer-copyright {
            max-width: 1300px;
            margin: 2rem auto 0;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            text-align: center;
            font-size: 0.85rem;
            color: #8a9bb5;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.5rem 1.8rem;
        }

        /* ============================================================
               RESPONSIVE
            ============================================================ */
        @media (max-width: 768px) {
            .hero-paroisses {
                padding: 4rem 1.5rem 3.5rem;
            }
            .container {
                padding: 0 1rem;
            }
            .grid-paroisses {
                gap: 1.8rem;
            }
            .carte-container iframe {
                height: 300px;
            }
            .carte-legende {
                flex-direction: column;
                align-items: center;
                gap: 0.4rem;
                padding: 0.8rem 1rem;
                font-size: 0.85rem;
            }
            .carte-actions .btn {
                flex: 1 1 100%;
            }
            .grid-galerie {
                grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
                gap: 1rem;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2rem 1.5rem;
            }
        }

        @media (max-width: 500px) {
            .hero-paroisses h1 {
                font-size: 2.2rem;
            }
            .hero-paroisses p {
                font-size: 1rem;
            }
            .grid-paroisses {
                grid-template-columns: 1fr;
            }
            .grid-activites {
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }
            .grid-temoignages {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 1.8rem;
            }
            .footer-newsletter input {
                max-width: 100%;
            }
            .carte-container iframe {
                height: 220px;
            }
            .section-cta {
                padding: 3rem 1rem;
            }
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

        /* ============================================================
               PETITES ANIMATIONS SUPPLÉMENTAIRES
            ============================================================ */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============================================================
               UTILITAIRES POUR REMPLACER LES IMAGES (ADMIN)
            ============================================================ */
        /* Les images sont en placeholders Unsplash. L'admin peut remplacer
               les src par ses propres images. */
    </style>
</head>
<body>
<?php
include 'header.php';
?>
    <!-- ============================================================
    HERO
    ============================================================ -->
    <section class="hero-paroisses">
        <h1><i class="fas fa-church" style="margin-top: 25px;"></i> Nos Paroisses</h1>
        <p>Une communauté unie dans la foi et la communion fraternelle.</p>
    </section>

    <!-- ============================================================
    PRÉSENTATION
    ============================================================ -->
    <section class="section-presentation">
        <div class="container">
            <h2><i class="fas fa-hands-praying"></i> Bienvenue dans nos paroisses</h2>
            <p class="sous-titre-section">
                L’ECCSB c’est une famille de croyants répartis en plusieurs paroisses, toutes animées par la même
                flamme : annoncer l’Évangile, former des disciples et servir nos communautés avec amour.
            </p>
            <div class="presentation-texte">
                <p>
                    <i class="fas fa-quote-left"></i> Chaque paroisse ECCSB est un lieu de vie, de prière et de partage.
                    Nous croyons que l’Église est le corps du Christ et que chaque membre apporte sa pierre à l’édifice.
                    À travers nos cultes, nos études bibliques et nos actions sociales, nous voulons rayonner la lumière
                    de Dieu dans tout le Bénin et au-delà. <i class="fas fa-quote-right"></i>
                </p>
            </div>
        </div>
    </section>

    <!-- ============================================================
    LISTE DES PAROISSES (CARDS)
    ============================================================ -->
    <section class="section-paroisses">
        <div class="container">
            <h2><i class="fas fa-map-pin"></i> Nos paroisses</h2>
            <p class="sous-titre-section">Retrouvez l’assemblée la plus proche de vous.</p>

            <div class="card-grid">
        
         <div class="btn-group">
        <a href="vepka.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Siège Vèpka</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="adjagunmokadi.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Saint Adjagunmokadi</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/vodenou/vodenou.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Vodenou</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/agbokou.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Wèfin Agbokou A</h5></a>
      </div>
    </div>

    <div class="card-grid">


        <div  style="height: 90px; background-color: #8899b0;border-radius: 13px;"><h5 style="font-size: 35px; text-align: center;">Region Avrankou</h5> </div>

        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/idjadopin/idjadopin.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Idjadopkin</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/gbekue/gbekue.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Gbinkuè</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
        <a href="paroisse/adjagunmokadi/ifeni _oluwa/ifeni.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">Ifè ni oluwa</h5></a>
      </div>
    </div>

    <div class="card-grid">
        
         <div class="btn-group">
      </div>
    </div>













 

           <!-- <div class="grid-paroisses">

                <!-- PAROISSE 1 
                <div class="carte-paroisse fade-in">
                    <div class="photo">
                        <img src="https://images.unsplash.com/photo-1544890225-2f3faec4cd60?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Paroisse Cotonou" loading="lazy" />
                        <span class="badge">Mère</span>
                    </div>
                    <div class="carte-contenu">
                        <h3>Paroisse de Cotonou</h3>
                        <div class="adresse"><i class="fas fa-location-dot"></i> Avenue Jean-Paul II, Cotonou</div>
                        <div class="infos">
                            <span><i class="fas fa-user-pastor"></i> Pasteur Jean-Marc Houndolo</span>
                            <span><i class="fas fa-phone"></i> +229 61 00 00 01</span>
                        </div>
                        <div class="horaires"><i class="far fa-clock"></i> Dimanche 08h30 · 10h30</div>
                        <div class="carte-actions">
                            <a href="#" class="btn btn-primaire">Voir les détails</a>
                            <a href="#" class="btn btn-secondaire">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- PAROISSE 2 
                <div class="carte-paroisse fade-in">
                    <div class="photo">
                        <img src="https://images.unsplash.com/photo-1587679507395-e94872e6d021?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Paroisse Porto-Novo" loading="lazy" />
                        <span class="badge">Historique</span>
                    </div>
                    <div class="carte-contenu">
                        <h3>Paroisse de Porto-Novo</h3>
                        <div class="adresse"><i class="fas fa-location-dot"></i> Rue des Missions, Porto-Novo</div>
                        <div class="infos">
                            <span><i class="fas fa-user-pastor"></i> Pasteur David K. Ahouandjinou</span>
                            <span><i class="fas fa-phone"></i> +229 61 00 00 02</span>
                        </div>
                        <div class="horaires"><i class="far fa-clock"></i> Dimanche 07h30 · 09h30</div>
                        <div class="carte-actions">
                            <a href="#" class="btn btn-primaire">Voir les détails</a>
                            <a href="#" class="btn btn-secondaire">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- PAROISSE 3 --
                <div class="carte-paroisse fade-in">
                    <div class="photo">
                        <img src="https://images.unsplash.com/photo-1543616194-5076ab8a3f6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Paroisse Ouidah" loading="lazy" />
                    </div>
                    <div class="carte-contenu">
                        <h3>Paroisse d'Ouidah</h3>
                        <div class="adresse"><i class="fas fa-location-dot"></i> Boulevard du Golfe, Ouidah</div>
                        <div class="infos">
                            <span><i class="fas fa-user-pastor"></i> Pasteur Émilienne G. Kpognon</span>
                            <span><i class="fas fa-phone"></i> +229 61 00 00 03</span>
                        </div>
                        <div class="horaires"><i class="far fa-clock"></i> Dimanche 09h00 · 11h00</div>
                        <div class="carte-actions">
                            <a href="#" class="btn btn-primaire">Voir les détails</a>
                            <a href="#" class="btn btn-secondaire">Nous contacter</a>
                        </div>
                    </div>
                </div>

                <!-- PAROISSE 4 --
                <div class="carte-paroisse fade-in">
                    <div class="photo">
                        <img src="https://images.unsplash.com/photo-1558904541-efa843b96f01?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Paroisse Abomey" loading="lazy" />
                    </div>
                    <div class="carte-contenu">
                        <h3>Paroisse d'Abomey</h3>
                        <div class="adresse"><i class="fas fa-location-dot"></i> Route des Palais, Abomey</div>
                        <div class="infos">
                            <span><i class="fas fa-user-pastor"></i> Pasteur Samuel T. Aïssi</span>
                            <span><i class="fas fa-phone"></i> +229 61 00 00 04</span>
                        </div>
                        <div class="horaires"><i class="far fa-clock"></i> Dimanche 08h00 · 10h00</div>
                        <div class="carte-actions">
                            <a href="#" class="btn btn-primaire">Voir les détails</a>
                            <a href="#" class="btn btn-secondaire">Nous contacter</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

                <div class="bouton"><a href="../paroisse/vepaka/vepka.php">Voir l'église</a></div>


    <!-- ============================================================
    CARTE INTERACTIVE (GOOGLE MAPS)
    ============================================================ --
    <section class="section-carte">
        <div class="container">
            <h2><i class="fas fa-map-location-dot"></i> Trouvez une paroisse</h2>
            <p class="sous-titre-section">Localisez nos différentes assemblées sur la carte.</p>

            <div class="carte-container">
                <!-- Remplacer le src par votre propre embed Google Maps --
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126787.123456789!2d2.3918!3d6.3678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e9f0c8a0b1c3%3A0x3f7c2e4a5b6c7d8e!2sCotonou%2C%20B%C3%A9nin!5e0!3m2!1sfr!2sfr!4v1700000000000"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Carte des paroisses ECCSB">
            </iframe>
            <div class="carte-legende">
                <span><i class="fas fa-circle"></i> Cotonou (Mère)</span>
               