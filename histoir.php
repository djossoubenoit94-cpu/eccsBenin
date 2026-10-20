<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Histoire de l'Église – ECCSB · Église Chrétienne Céleste Source de Bénédiction</title>
    <meta name="description" content="Découvrez l'histoire de l'Église ECCSB : fondation, parcours, vision et œuvres accomplies par Dieu." />
    <!-- Font Awesome 6 -->
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
               COULEURS
            ============================================================ */
        :root {
            --bleu-profond: #0f2847;
            --bleu-royal: #1a3b6b;
            --bleu-lumiere: #2e5a8a;
            --or-dore: #c9a84c;
            --or-doux: #e8d5a3;
            --blanc-casse: #f5f2ed;
            --gris-clair: #eae7f0;
            --ombre: 0 20px 40px -12px rgba(15, 40, 71, 0.25);
            --ombre-doree: 0 20px 40px -12px rgba(201, 168, 76, 0.25);
        }

        /* ============================================================
               TYPOGRAPHIE
            ============================================================ */
        h1,
        h2,
        h3,
        h4 {
            font-weight: 700;
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
            padding: 0.8rem 2.2rem;
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

        .btn-dore {
            background: var(--or-dore);
            color: #1e1a2b;
        }
        .btn-dore:hover {
            background: #b8953a;
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.35);
        }

        .btn-outline-dore {
            background: transparent;
            color: var(--or-dore);
            border-color: var(--or-dore);
        }
        .btn-outline-dore:hover {
            background: var(--or-dore);
            color: #1e1a2b;
            transform: translateY(-3px);
        }

        .btn-outline-blanc {
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, 0.4);
        }
        .btn-outline-blanc:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            border-color: #fff;
        }

        /* ============================================================
               SECTION HERO
            ============================================================ */
        .hero-histoire {
            background: linear-gradient(135deg, rgba(15, 40, 71, 0.92), rgba(26, 59, 107, 0.85)),
                url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            padding: 7rem 2rem 6rem;
            text-align: center;
            color: #fff;
            position: relative;
            border-bottom: 6px solid var(--or-dore);
        }

        .hero-histoire h1 {
            font-size: clamp(2.8rem, 8vw, 4.8rem);
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeUp 1s ease forwards;
        }

        .hero-histoire h1 i {
            color: var(--or-dore);
            margin-right: 0.6rem;
        }

        .hero-histoire p {
            font-size: clamp(1.1rem, 2vw, 1.5rem);
            max-width: 750px;
            margin: 1.2rem auto 2rem;
            opacity: 0.92;
            font-weight: 300;
            animation: fadeUp 1s ease 0.2s forwards;
            opacity: 0;
        }

        .hero-histoire .btn-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            animation: fadeUp 1s ease 0.4s forwards;
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
               INTRODUCTION
            ============================================================ */
        .section-intro {
            padding: 5rem 2rem;
            background: #fff;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .intro-image {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--ombre);
            position: relative;
        }

        .intro-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .intro-image:hover img {
            transform: scale(1.03);
        }

        .intro-texte h2 {
            text-align: left;
            margin-bottom: 0.5rem;
        }

        .intro-texte .sous-titre-section {
            text-align: left;
            margin: 0 0 1.5rem 0;
        }

        .intro-texte p {
            margin-bottom: 0.8rem;
            font-size: 1.05rem;
            color: #2d2a3e;
        }

        .intro-texte .highlight {
            display: inline-block;
            background: var(--or-doux);
            padding: 0.1rem 0.6rem;
            border-radius: 4px;
            color: var(--bleu-profond);
            font-weight: 500;
        }

        .intro-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .intro-stats .stat {
            text-align: center;
            background: var(--gris-clair);
            padding: 1rem;
            border-radius: 16px;
            border-left: 4px solid var(--or-dore);
        }

        .intro-stats .stat .nombre {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--bleu-profond);
        }

        .intro-stats .stat .label {
            font-size: 0.8rem;
            color: #4a4560;
        }

        /* ============================================================
               TIMELINE (FRISE CHRONOLOGIQUE)
            ============================================================ */
        .section-timeline {
            padding: 5rem 2rem;
            background: var(--gris-clair);
        }

        .timeline {
            position: relative;
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, var(--or-dore), var(--bleu-royal));
            transform: translateX(-50%);
        }

        .timeline-item {
            display: flex;
            justify-content: flex-end;
            padding: 0 2rem 3rem 2rem;
            position: relative;
            width: 50%;
        }

        .timeline-item:nth-child(odd) {
            justify-content: flex-start;
            padding-left: 4rem;
            padding-right: 2rem;
        }

        .timeline-item:nth-child(even) {
            padding-right: 4rem;
            padding-left: 2rem;
        }

        .timeline-item .timeline-content {
            background: #fff;
            border-radius: 24px;
            padding: 1.8rem;
            box-shadow: var(--ombre);
            width: 100%;
            max-width: 420px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 4px solid var(--or-dore);
        }

        .timeline-item .timeline-content:hover {
            transform: translateY(-6px);
            box-shadow: var(--ombre-doree);
        }

        .timeline-item .timeline-content .annee {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--or-dore);
            margin-bottom: 0.2rem;
        }

        .timeline-item .timeline-content h3 {
            color: var(--bleu-profond);
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
        }

        .timeline-item .timeline-content p {
            color: #4a4560;
            font-size: 0.95rem;
        }

        .timeline-item .timeline-content .timeline-img {
            margin-top: 0.8rem;
            border-radius: 16px;
            overflow: hidden;
            height: 120px;
        }

        .timeline-item .timeline-content .timeline-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .timeline-item .timeline-content:hover .timeline-img img {
            transform: scale(1.05);
        }

        .timeline-item .timeline-dot {
            position: absolute;
            top: 10px;
            width: 20px;
            height: 20px;
            background: var(--or-dore);
            border-radius: 50%;
            border: 4px solid #fff;
            box-shadow: 0 0 0 4px var(--or-dore);
            z-index: 2;
        }

        .timeline-item:nth-child(odd) .timeline-dot {
            right: -10px;
        }

        .timeline-item:nth-child(even) .timeline-dot {
            left: -10px;
        }

        /* ============================================================
               FONDATEURS
            ============================================================ */
        .section-fondateurs {
            padding: 5rem 2rem;
            background: #fff;
        }

        .grid-fondateurs {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .carte-fondateur {
            background: #fff;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--ombre);
            transition: transform 0.35s ease, box-shadow 0.35s ease;
            border: 1px solid rgba(201, 168, 76, 0.08);
            text-align: center;
        }

        .carte-fondateur:hover {
            transform: translateY(-12px);
            box-shadow: var(--ombre-doree);
        }

        .carte-fondateur .photo-fondateur {
            height: 220px;
            overflow: hidden;
            background: var(--bleu-lumiere);
        }

        .carte-fondateur .photo-fondateur img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .carte-fondateur:hover .photo-fondateur img {
            transform: scale(1.06);
        }

        .carte-fondateur .contenu-fondateur {
            padding: 1.8rem 1.5rem 2rem;
        }

        .carte-fondateur .contenu-fondateur h3 {
            color: var(--bleu-profond);
            font-size: 1.3rem;
        }

        .carte-fondateur .contenu-fondateur .fonction {
            color: var(--or-dore);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .carte-fondateur .contenu-fondateur p {
            color: #4a4560;
            font-size: 0.95rem;
            margin-bottom: 0.8rem;
        }

        .carte-fondateur .contenu-fondateur .citation {
            font-style: italic;
            color: var(--bleu-royal);
            font-size: 0.95rem;
            padding: 0.8rem;
            background: var(--gris-clair);
            border-radius: 16px;
            border-left: 4px solid var(--or-dore);
        }

        /* ============================================================
               RÉALISATIONS
            ============================================================ */
        .section-realisations {
            padding: 5rem 2rem;
            background: var(--gris-clair);
        }

        .grid-realisations {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .carte-realisation {
            background: #fff;
            border-radius: 24px;
            padding: 2rem 1.5rem;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(201, 168, 76, 0.06);
        }

        .carte-realisation:hover {
            transform: translateY(-8px);
            box-shadow: var(--ombre);
        }

        .carte-realisation i {
            font-size: 2.8rem;
            color: var(--or-dore);
            margin-bottom: 0.6rem;
        }

        .carte-realisation .chiffre {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--bleu-profond);
        }

        .carte-realisation h4 {
            font-size: 1.1rem;
            color: var(--bleu-profond);
            margin: 0.2rem 0;
        }

        .carte-realisation p {
            font-size: 0.9rem;
            color: #4a4560;
        }

        /* ============================================================
               GALERIE HISTORIQUE
            ============================================================ */
        .section-galerie-historique {
            padding: 5rem 2rem;
            background: #fff;
        }

        .grid-galerie-histoire {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            max-width: 1300px;
            margin: 0 auto;
        }

        .item-galerie-histoire {
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            aspect-ratio: 4/3;
            background: var(--bleu-lumiere);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
        }

        .item-galerie-histoire:hover {
            transform: scale(1.02);
            box-shadow: 0 20px 40px rgba(15, 40, 71, 0.20);
        }

        .item-galerie-histoire img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .item-galerie-histoire:hover img {
            transform: scale(1.08);
        }

        .item-galerie-histoire .overlay-histoire {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(15, 40, 71, 0.7), transparent);
            display: flex;
            align-items: flex-end;
            padding: 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 1rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .item-galerie-histoire:hover .overlay-histoire {
            opacity: 1;
        }

        /* ============================================================
               TÉMOIGNAGES
            ============================================================ */
        .section-temoignages-histoire {
            padding: 5rem 2rem;
            background: var(--gris-clair);
        }

        .grid-temoignages-histoire {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .carte-temoignage-histoire {
            background: #fff;
            border-radius: 28px;
            padding: 2rem 1.8rem;
            box-shadow: var(--ombre);
            position: relative;
            border-left: 6px solid var(--or-dore);
            transition: transform 0.3s ease;
        }

        .carte-temoignage-histoire:hover {
            transform: translateY(-6px);
        }

        .carte-temoignage-histoire .quote {
            font-size: 2rem;
            color: var(--or-dore);
            opacity: 0.3;
            line-height: 1;
            margin-bottom: 0.2rem;
        }

        .carte-temoignage-histoire p {
            font-style: italic;
            color: #2d2a3e;
            margin-bottom: 1rem;
        }

        .carte-temoignage-histoire .auteur-histoire {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .carte-temoignage-histoire .auteur-histoire img {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--or-dore);
        }

        .carte-temoignage-histoire .auteur-histoire .nom {
            font-weight: 600;
            color: var(--bleu-profond);
        }

        .carte-temoignage-histoire .auteur-histoire .detail {
            font-size: 0.8rem;
            color: #6a6580;
        }

        /* ============================================================
               VISION POUR L'AVENIR
            ============================================================ */
        .section-avenir {
            padding: 5rem 2rem;
            background: linear-gradient(145deg, var(--bleu-profond), var(--bleu-royal));
            color: #fff;
        }

        .section-avenir h2 {
            color: #fff;
        }

        .section-avenir h2 i {
            color: var(--or-dore);
        }

        .section-avenir .sous-titre-section {
            color: #c5d4ec;
        }

        .grid-avenir {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            max-width: 1100px;
            margin: 2rem auto 0;
        }

        .carte-avenir {
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(8px);
            border-radius: 24px;
            padding: 2rem 1.5rem;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .carte-avenir:hover {
            transform: translateY(-8px);
            background: rgba(255, 255, 255, 0.10);
        }

        .carte-avenir i {
            font-size: 2.6rem;
            color: var(--or-dore);
            margin-bottom: 0.6rem;
        }

        .carte-avenir h4 {
            font-size: 1.1rem;
            margin-bottom: 0.2rem;
        }

        .carte-avenir p {
            font-size: 0.9rem;
            opacity: 0.85;
        }

        /* ============================================================
               CITATION BIBLIQUE
            ============================================================ */
        .section-bible {
            padding: 4rem 2rem;
            background: var(--gris-clair);
            text-align: center;
        }

        .citation-bible {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 3rem 2.5rem;
            border-radius: 32px;
            box-shadow: var(--ombre);
            border-top: 6px solid var(--or-dore);
        }

        .citation-bible .verset {
            font-size: clamp(1.4rem, 3vw, 2.2rem);
            font-weight: 300;
            color: var(--bleu-profond);
            font-style: italic;
            line-height: 1.4;
        }

        .citation-bible .ref {
            display: block;
            margin-top: 0.8rem;
            font-weight: 600;
            color: var(--or-dore);
            font-style: normal;
            font-size: 1.1rem;
        }

        .citation-bible .icon-bible {
            font-size: 2.5rem;
            color: var(--or-dore);
            margin-bottom: 0.5rem;
        }

        /* ============================================================
               CTA
            ============================================================ */
        .section-cta-histoire {
            padding: 4rem 2rem;
            background: #fff;
            text-align: center;
            border-top: 6px solid var(--or-dore);
            border-bottom: 6px solid var(--or-dore);
        }

        .section-cta-histoire h2 {
            color: var(--bleu-profond);
        }

        .section-cta-histoire h2 i {
            color: var(--or-dore);
        }

        .section-cta-histoire p {
            font-size: clamp(1rem, 1.4vw, 1.3rem);
            color: #4a4560;
            max-width: 600px;
            margin: 0.5rem auto 2rem;
        }

        .section-cta-histoire .btn-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
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
        @media (max-width: 968px) {
            .intro-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .intro-image img {
                height: 300px;
            }
            .intro-texte h2 {
                text-align: center;
            }
            .intro-texte .sous-titre-section {
                text-align: center;
            }
            .intro-stats {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }
            .hero-histoire {
                padding: 4rem 1.5rem 3.5rem;
            }
            .timeline::before {
                left: 20px;
            }
            .timeline-item {
                width: 100%;
                padding-left: 3.5rem !important;
                padding-right: 0 !important;
                justify-content: flex-start !important;
            }
            .timeline-item .timeline-dot {
                left: 10px !important;
                right: auto !important;
            }
            .timeline-item .timeline-content {
                max-width: 100%;
            }
            .intro-stats {
                grid-template-columns: 1fr 1fr;
            }
            .grid-fondateurs {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 550px) {
            .hero-histoire h1 {
                font-size: 2.2rem;
            }
            .hero-histoire p {
                font-size: 1rem;
            }
            .intro-stats {
                grid-template-columns: 1fr;
            }
            .grid-fondateurs {
                grid-template-columns: 1fr;
            }
            .grid-realisations {
                grid-template-columns: 1fr 1fr;
            }
            .grid-avenir {
                grid-template-columns: 1fr 1fr;
            }
            .grid-galerie-histoire {
                grid-template-columns: 1fr 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 1.8rem;
            }
            .section-cta-histoire .btn-group {
                flex-direction: column;
                align-items: center;
            }
            .citation-bible {
                padding: 2rem 1.2rem;
            }
        }

        @media (max-width: 400px) {
            .grid-realisations {
                grid-template-columns: 1fr;
            }
            .grid-avenir {
                grid-template-columns: 1fr;
            }
            .grid-galerie-histoire {
                grid-template-columns: 1fr;
            }
        }

        /* ============================================================
               ANIMATIONS FADE-IN
            ============================================================ */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============================================================
               LIGHTBOX SIMPLE
            ============================================================ */
        .lightbox-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            padding: 2rem;
            cursor: pointer;
        }

        .lightbox-overlay.active {
            display: flex;
        }

        .lightbox-overlay img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 16px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
            object-fit: contain;
        }

        .lightbox-overlay .close-lightbox {
            position: absolute;
            top: 30px;
            right: 40px;
            color: #fff;
            font-size: 2.5rem;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .lightbox-overlay .close-lightbox:hover {
            transform: scale(1.2);
        }
    </style>
</head>
<body>
<?php
include 'header.php';
?>

    <!-- ============================================================
    HERO
    ============================================================ -->
    <section class="hero-histoire">
        <h1><i class="fas fa-scroll" style="margin-top: 20px;"></i> Notre Histoire</h1>
        <p>Découvrez le parcours, la vision et les œuvres que Dieu a accomplies au sein de notre communauté.</p>
        <div class="btn-group">
            <a href="#timeline" class="btn btn-dore"><i class="fas fa-timeline"></i> Parcourir l'histoire</a>
            <a href="paroisse.php" class="btn btn-outline-blanc"><i class="fas fa-church"></i> Nos paroisses</a>
        </div>
    </section>

    <!-- ============================================================
    INTRODUCTION
    ============================================================ -->
    <section class="section-intro" id="intro">
        <div class="container">
            <div class="intro-grid">
                <div class="intro-image">
                    <img src="https://images.unsplash.com/photo-1535982330050-f1c2fb79ff78?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Histoire de l'ECCSB" loading="lazy" />
                </div>
                <div class="intro-texte">
                    <h2><i class="fas fa-church"></i> Une histoire de foi</h2>
                    <p class="sous-titre-section">Depuis 1985, Dieu écrit une histoire de grâce à travers l'ECCSB.</p>
                    <p>
                        <span class="highlight">L'Église Chrétienne Céleste Source de Bénédiction</span> est née d'une vision

                        <?php
include 'footer.php';
?>
