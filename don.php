  <?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dons & Offrandes - Église CCS Bénin</title>
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
            --dark: #0e1e2e;
            --gray: #6b7a8a;
            --light-gray: #eef2f7;
            --success: #27ae60;
            --shadow: 0 20px 40px -12px rgba(0,0,0,0.20);
            --shadow-hover: 0 30px 60px -12px rgba(0,0,0,0.30);
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
            min-height: 70vh;
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
            background: linear-gradient(135deg, rgba(10, 25, 40, 0.88) 0%, rgba(10, 25, 40, 0.55) 100%);
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
            margin-bottom: 24px;
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
            margin: 0 auto 32px;
        }

        .hero-verse {
            font-style: italic;
            font-size: 1.1rem;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            padding: 16px 32px;
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
            opacity: 0.7;
            margin-top: 6px;
        }

        /* ===== SECTION POURQUOI DONNER ===== */
        .why-give {
            padding: 60px 0;
            text-align: center;
        }

        .why-give h2 {
            font-size: 2.4rem;
            margin-bottom: 12px;
        }

        .why-give h2 span {
            color: var(--gold);
        }

        .why-give > p {
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto 40px;
        }

        .why-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 24px;
        }

        .why-card {
            background: #fff;
            padding: 32px 24px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid rgba(201, 168, 76, 0.06);
            text-align: center;
        }

        .why-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-light);
        }

        .why-card .icon {
            width: 64px;
            height: 64px;
            background: var(--gold-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            font-size: 1.6rem;
            color: var(--dark);
        }

        .why-card h4 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .why-card p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* ===== MOYENS DE PAIEMENT ===== */
        .payment-methods {
            padding: 60px 0;
            background: #fff;
            border-radius: 40px;
            margin: 20px 0;
            box-shadow: var(--shadow);
        }

        .payment-methods h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 12px;
        }

        .payment-methods h2 span {
            color: var(--gold);
        }

        .payment-methods > p {
            text-align: center;
            color: var(--gray);
            margin-bottom: 40px;
        }

        .payment-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
            padding: 0 20px;
        }

        .payment-card {
            background: var(--cream);
            border-radius: var(--radius);
            padding: 28px 24px;
            border: 1px solid rgba(201, 168, 76, 0.1);
            transition: var(--transition);
        }

        .payment-card:hover {
            border-color: var(--gold);
            transform: translateY(-4px);
        }

        .payment-card .card-header {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .payment-card .card-header i {
            font-size: 2rem;
            color: var(--gold);
        }

        .payment-card .card-header h4 {
            font-size: 1.2rem;
        }

        .payment-card ul {
            list-style: none;
            padding: 0;
        }

        .payment-card ul li {
            padding: 6px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--gray);
            font-size: 0.95rem;
        }

        .payment-card ul li i {
            color: var(--gold);
            width: 20px;
        }

        .payment-card .highlight {
            background: var(--gold-gradient);
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--dark);
            display: inline-block;
            margin-top: 12px;
        }

        .bank-details {
            background: var(--cream);
            padding: 16px 20px;
            border-radius: 12px;
            margin-top: 12px;
            font-size: 0.9rem;
            border-left: 3px solid var(--gold);
        }

        .bank-details strong {
            color: var(--primary);
        }

        /* ===== FORMULAIRE ===== */
        .donation-form {
            padding: 60px 0;
        }

        .donation-form .form-wrapper {
            background: #fff;
            border-radius: var(--radius);
            padding: 48px 40px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.08);
            max-width: 700px;
            margin: 0 auto;
        }

        .donation-form h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .donation-form h2 span {
            color: var(--gold);
        }

        .donation-form .form-subtitle {
            text-align: center;
            color: var(--gray);
            margin-bottom: 32px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 6px;
            color: var(--dark);
        }

        .form-group label .required {
            color: #e74c3c;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid rgba(26, 58, 92, 0.08);
            border-radius: 12px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: var(--transition);
            background: var(--cream);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--gold);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(201, 168, 76, 0.15);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group .amount-presets {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 8px;
        }

        .form-group .amount-presets button {
            padding: 8px 20px;
            border: 2px solid rgba(26, 58, 92, 0.1);
            background: transparent;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.9rem;
        }

        .form-group .amount-presets button:hover,
        .form-group .amount-presets button.active {
            background: var(--gold-gradient);
            border-color: var(--gold);
            color: var(--dark);
            transform: scale(1.02);
        }

        .btn-submit {
            width: 100%;
            padding: 16px;
            background: var(--gold-gradient);
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--dark);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(201, 168, 76, 0.4);
        }

        .secure-badge {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
            color: var(--gray);
            font-size: 0.85rem;
            flex-wrap: wrap;
        }

        .secure-badge i {
            color: var(--success);
            font-size: 1.2rem;
        }

        /* ===== TRANSPARENCE ===== */
        .transparency {
            padding: 60px 0;
            background: var(--primary-dark);
            color: #fff;
            border-radius: 40px;
            margin: 20px 0;
        }

        .transparency .container {
            max-width: 1100px;
        }

        .transparency h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 8px;
        }

        .transparency h2 span {
            color: var(--gold);
        }

        .transparency > p {
            text-align: center;
            opacity: 0.7;
            margin-bottom: 40px;
        }

        .transparency-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .transparency-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(8px);
            padding: 28px 24px;
            border-radius: var(--radius);
            border: 1px solid rgba(255,255,255,0.06);
            transition: var(--transition);
        }

        .transparency-card:hover {
            background: rgba(255,255,255,0.10);
            transform: translateY(-4px);
        }

        .transparency-card .icon {
            font-size: 2rem;
            color: var(--gold);
            margin-bottom: 12px;
        }

        .transparency-card h4 {
            font-size: 1.1rem;
            margin-bottom: 6px;
        }

        .transparency-card p {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        .transparency-card .progress {
            margin-top: 12px;
            height: 6px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .transparency-card .progress .bar {
            height: 100%;
            background: var(--gold-gradient);
            border-radius: 10px;
            transition: width 1s ease;
        }

        /* ===== VERSETS ===== */
        .verses-section {
            padding: 60px 0;
            text-align: center;
        }

        .verses-section h2 {
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .verses-section h2 span {
            color: var(--gold);
        }

        .verses-slider {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-top: 32px;
        }

        .verse-card {
            background: #fff;
            padding: 24px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border-left: 4px solid var(--gold);
            text-align: left;
            transition: var(--transition);
        }

        .verse-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }

        .verse-card .quote {
            font-style: italic;
            font-size: 1.05rem;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .verse-card .ref {
            font-weight: 600;
            color: var(--gold);
            font-size: 0.9rem;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: rgba(255,255,255,0.6);
            padding: 40px 24px;
            text-align: center;
            border-radius: 40px 40px 0 0;
            margin-top: 40px;
        }

        footer p {
            font-size: 0.9rem;
        }

        footer .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            color: var(--gold);
            margin-bottom: 8px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero {
                min-height: 50vh;
                border-radius: 0 0 30px 30px;
                padding: 60px 16px;
            }
            .hero h1 { font-size: 2.4rem; }
            .hero-sub { font-size: 1rem; }
            .hero-verse { font-size: 0.95rem; padding: 12px 20px; }

            .why-give h2, .payment-methods h2, .donation-form h2, .transparency h2, .verses-section h2 {
                font-size: 1.8rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .donation-form .form-wrapper {
                padding: 28px 20px;
            }

            .payment-grid {
                grid-template-columns: 1fr;
            }

            .transparency-grid {
                grid-template-columns: 1fr;
            }

            .verses-slider {
                grid-template-columns: 1fr;
            }

            .why-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .why-grid {
                grid-template-columns: 1fr;
            }
            .hero h1 { font-size: 2rem; }
            .payment-card .card-header h4 { font-size: 1rem; }
        }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: var(--cream); }
        ::-webkit-scrollbar-thumb { background: var(--gold); border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--gold-light); }

        /* Animations */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeUp 0.7s ease forwards;
        }
        .fade-up:nth-child(1) { animation-delay: 0.05s; }
        .fade-up:nth-child(2) { animation-delay: 0.12s; }
        .fade-up:nth-child(3) { animation-delay: 0.19s; }
        .fade-up:nth-child(4) { animation-delay: 0.26s; }

        @keyframes fadeUp {
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-badge"><i class="fas fa-hand-holding-heart"></i> 2 Corinthiens 9:7</div>
        <h1>Soutenez <span>l'œuvre de Dieu</span></h1>
        <p class="hero-sub">Votre générosité contribue à l'évangélisation et au développement de l'Église.</p>
        <div class="hero-verse">
            "Que chacun donne comme il l'a décidé en son cœur, sans tristesse ni contrainte ; car Dieu aime celui qui donne avec joie."
            <cite>— 2 Corinthiens 9:7</cite>
        </div>
    </div>
</section>

<!-- ===== POURQUOI DONNER ===== -->
<section class="why-give container">
    <h2>Pourquoi <span>donner ?</span></h2>
    <p>Votre offrande participe à la mission de l'Église et transforme des vies.</p>
    <div class="why-grid">
        <div class="why-card fade-up">
            <div class="icon"><i class="fas fa-globe-africa"></i></div>
            <h4>Soutien aux missions</h4>
            <p>Financement des missionnaires et de l'évangélisation à travers le Bénin et au-delà.</p>
        </div>
        <div class="why-card fade-up">
            <div class="icon"><i class="fas fa-hands-helping"></i></div>
            <h4>Aide sociale</h4>
            <p>Assistance aux orphelins, veuves et familles dans le besoin de notre communauté.</p>
        </div>
        <div class="why-card fade-up">
            <div class="icon"><i class="fas fa-church"></i></div>
            <h4>Développement des paroisses</h4>
            <p>Construction et entretien des lieux de culte et des centres communautaires.</p>
        </div>
        <div class="why-card fade-up">
            <div class="icon"><i class="fas fa-bible"></i></div>
            <h4>Formation spirituelle</h4>
            <p>Programmes de disciples, écoles bibliques et séminaires de formation.</p>
        </div>
    </div>
</section>

<!-- ===== MOYENS DE PAIEMENT ===== -->
<section class="payment-methods container">
    <h2>Moyens de <span>paiement</span></h2>
    <p>Choisissez le mode de don qui vous convient le mieux.</p>

    <div class="payment-grid">
        <!-- Mobile Money -->
        <div class="payment-card">
            <div class="card-header">
                <i class="fas fa-mobile-alt"></i>
                <h4>Mobile Money</h4>
            </div>
            <ul>
                <li><i class="fas fa-check-circle"></i> MTN MoMo</li>
                <li><i class="fas fa-check-circle"></i> Moov Money</li>
                <li><i class="fas fa-check-circle"></i> Celtiis Cash</li>
            </ul>
            <div class="highlight">
                <i class="fas fa-phone"></i> +229 97 00 00 00
            </div>
        </div>

        <!-- Virement bancaire -->
        <div class="payment-card">
            <div class="card-header">
                <i class="fas fa-university"></i>
                <h4>Virement bancaire</h4>
            </div>
            <div class="bank-details">
                <p><strong>Banque :</strong> ECOBANK Bénin</p>
                <p><strong>Compte :</strong> 123 456 789 01</p>
                <p><strong>IBAN :</strong> BJ12 1234 5678 9012 3456 7890 12</p>
                <p><strong>Titulaire :</strong> Église CCS Bénin</p>
            </div>
        </div>

        <!-- Dons physiques -->
        <div class="payment-card">
            <div class="card-header">
                <i class="fas fa-hand-holding-usd"></i>
                <h4>Dons physiques</h4>
            </div>
            <p style="color:var(--gray); margin-bottom:12px;">
                Vous pouvez également faire un don en nature ou en espèces lors de nos cultes.
            </p>
            <ul>
                <li><i class="fas fa-check-circle"></i> Urnes d'offrandes pendant les cultes</li>
                <li><i class="fas fa-check-circle"></i> Bureau de l'église (du lundi au vendredi)</li>
                <li><i class="fas fa-check-circle"></i> Dons en nature (vivres, vêtements, matériel)</li>
            </ul>
            <div class="highlight" style="margin-top:12px;">
                <i class="fas fa-map-pin"></i> Temple Central, Cotonou
            </div>
        </div>
    </div>
</section>

<!-- ===== FORMULAIRE DE DON ===== -->
<section class="donation-form container">
    <div class="form-wrapper">
        <h2>Faire un <span>don</span></h2>
        <p class="form-subtitle">Remplissez ce formulaire pour nous faire parvenir votre offrande.</p>

        <form id="donationForm" onsubmit="event.preventDefault(); alert('Merci pour votre don ! Dieu vous bénisse abondamment.');">
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom complet <span class="required">*</span></label>
                    <input type="text" id="nom" placeholder="Votre nom et prénom" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="votre@email.com" />
                </div>
            </div>

            <div class="form-group">
                <label for="montant">Montant (FCFA) <span class="required">*</span></label>
                <input type="number" id="montant" placeholder="Ex: 5000" required min="100" />
                <div class="amount-presets">
                    <button type="button" onclick="setAmount(1000)">1 000 F</button>
                    <button type="button" onclick="setAmount(5000)">5 000 F</button>
                    <button type="button" onclick="setAmount(10000)">10 000 F</button>
                    <button type="button" onclick="setAmount(25000)">25 000 F</button>
                    <button type="button" onclick="setAmount(50000)">50 000 F</button>
                </div>
            </div>

            <div class="form-group">
                <label for="moyen">Moyen de paiement <span class="required">*</span></label>
                <select id="moyen" required>
                    <option value="">Sélectionnez un moyen</option>
                    <option value="mtn">MTN MoMo</option>
                    <option value="moov">Moov Money</option>
                    <option value="celtiis">Celtiis Cash</option>
                    <option value="virement">Virement bancaire</option>
                    <option value="especes">Espèces / En nature</option>
                </select>
            </div>

            <div class="form-group">
                <label for="intention">Intention (optionnelle)</label>
                <textarea id="intention" placeholder="Précisez si vous souhaitez orienter votre don (missions, aide sociale, etc.)"></textarea>
            </div>

            <button type="submit" class="btn-submit">
                <i class="fas fa-pray"></i> Donner maintenant
            </button>

            <div class="secure-badge">
                <span><i class="fas fa-lock"></i> Paiement sécurisé</span>
                <span><i class="fas fa-shield-alt"></i> Vos données sont confidentielles</span>
                <span><i class="fas fa-receipt"></i> Reçu fiscal disponible</span>
            </div>
        </form>
    </div>
</section>

<!-- ===== TRANSPARENCE ===== -->
<section class="transparency">
    <div class="container">
        <h2>Transparence & <span>Réalisations</span></h2>
        <p>Découvrez comment vos dons transforment des vies et bâtissent le royaume de Dieu.</p>

        <div class="transparency-grid">
            <div class="transparency-card">
                <div class="icon"><i class="fas fa-church"></i></div>
                <h4>Construction de paroisses</h4>
                <p>2 nouvelles églises construites en 2025 dans les zones rurales.</p>
                <div class="progress"><div class="bar" style="width:85%;"></div></div>
                <p style="margin-top:6px; font-size:0.8rem; opacity:0.6;">85% des fonds utilisés</p>
            </div>
            <div class="transparency-card">
                <div class="icon"><i class="fas fa-user-graduate"></i></div>
                <h4>Formation spirituelle</h4>
                <p>120 jeunes formés en leadership chrétien cette année.</p>
                <div class="progress"><div class="bar" style="width:70%;"></div></div>
                <p style="margin-top:6px; font-size:0.8rem; opacity:0.6;">70% des fonds utilisés</p>
            </div>
            <div class="transparency-card">
                <div class="icon"><i class="fas fa-utensils"></i></div>
                <h4>Aide alimentaire</h4>
                <p>150 familles soutenues par des colis alimentaires chaque mois.</p>
                <div class="progress"><div class="bar" style="width:95%;"></div></div>
                <p style="margin-top:6px; font-size:0.8rem; opacity:0.6;">95% des fonds utilisés</p>
            </div>
            <div class="transparency-card">
                <div class="icon"><i class="fas fa-hands-praying"></i></div>
                <h4>Évangélisation</h4>
                <p>14 campagnes d'évangélisation organisées en 2025.</p>
                <div class="progress"><div class="bar" style="width:60%;"></div></div>
                <p style="margin-top:6px; font-size:0.8rem; opacity:0.6;">60% des fonds utilisés</p>
            </div>
        </div>

        <div style="text-align:center; margin-top:32px; padding:16px; background:rgba(255,255,255,0.04); border-radius:16px;">
            <p style="font-style:italic; opacity:0.8;">
                "Nous rendons grâce pour chaque donateur. Dieu voit votre cœur et bénit votre générosité."
            </p>
        </div>
    </div>
</section>

<!-- ===== VERSETS BIBLIQUES ===== -->
<section class="verses-section container">
    <h2>Paroles de <span>bénédiction</span></h2>
    <p style="color:var(--gray);">Des promesses pour ceux qui donnent avec un cœur généreux.</p>

    <div class="verses-slider">
        <div class="verse-card">
            <div class="quote">"Donnez, et l'on vous donnera : une bonne mesure, pressée, secouée et qui déborde, on vous la versera dans le sein."</div>
            <div class="ref">— Luc 6:38</div>
        </div>
        <div class="verse-card">
            <div class="quote">"Dieu aime celui qui donne avec joie. Dieu peut vous combler de toutes sortes de grâces."</div>
            <div class="ref">— 2 Corinthiens 9:7-8</div>
        </div>
        <div class="verse-card">
            <div class="quote">"Celui qui sème peu moissonnera peu, et celui qui sème abondamment moissonnera abondamment."</div>
            <div class="ref">— 2 Corinthiens 9:6</div>
        </div>
        <div class="verse-card">
            <div class="quote">"L'âme généreuse sera rassasiée, et celui qui arrose sera lui-même arrosé."</div>
            <div class="ref">— Proverbes 11:25</div>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer>
    <div class="footer-logo">✝ Église CCS Bénin</div>
    <p style="margin-bottom:4px;">"Soutenez l'œuvre de Dieu avec un cœur joyeux."</p>
    <p>© 2026 - Tous droits réservés</p>
</footer>

<!-- ===== JAVASCRIPT ===== -->
<script>
    // Montants présélectionnés
    function setAmount(value) {
        document.getElementById('montant').value = value;
        document.querySelectorAll('.amount-presets button').forEach(b => b.classList.remove('active'));
        event.target.classList.add('active');
    }

    // Animation au scroll pour les cartes
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-up').forEach(el => {
        observer.observe(el);
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.7s ease';
    });

    // Rendre actif le premier montant par défaut
    document.addEventListener('DOMContentLoaded', () => {
        const firstPreset = document.querySelector('.amount-presets button');
        if (firstPreset) {
            firstPreset.classList.add('active');
            document.getElementById('montant').value = firstPreset.textContent.replace(/[^0-9]/g, '');
        }
    });
</script>

</body>
</html>

  <?php
include 'footer.php';
?>