 <?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Demande de Prière - Église CCS Bénin</title>
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
            --success: #27ae60;
            --shadow: 0 20px 40px -12px rgba(0,0,0,0.15);
            --shadow-hover: 0 30px 60px -12px rgba(0,0,0,0.25);
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
            max-width: 1100px;
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
            background: linear-gradient(135deg, rgba(10, 25, 40, 0.88) 0%, rgba(10, 25, 40, 0.50) 100%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 750px;
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
            font-size: clamp(2.6rem, 9vw, 4.5rem);
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
            max-width: 550px;
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
            max-width: 550px;
            margin: 0 auto;
        }

        .hero-verse cite {
            display: block;
            font-style: normal;
            font-size: 0.85rem;
            opacity: 0.6;
            margin-top: 4px;
        }

        /* ===== MESSAGE D'ENCOURAGEMENT ===== */
        .encouragement {
            padding: 40px 0 20px;
            text-align: center;
        }

        .encouragement h2 {
            font-size: 2rem;
            margin-bottom: 12px;
        }

        .encouragement h2 span {
            color: var(--gold);
        }

        .encouragement .message {
            max-width: 700px;
            margin: 0 auto 32px;
            color: var(--gray);
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .verses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .verse-card {
            background: #fff;
            padding: 20px 20px 16px;
            border-radius: 16px;
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
            font-size: 0.95rem;
            color: var(--dark);
            margin-bottom: 4px;
        }

        .verse-card .ref {
            font-weight: 600;
            color: var(--gold);
            font-size: 0.8rem;
        }

        /* ===== FORMULAIRE ===== */
        .prayer-form-section {
            padding: 50px 0 30px;
        }

        .form-wrapper {
            background: #fff;
            border-radius: var(--radius);
            padding: 48px 44px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.08);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-wrapper h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 4px;
        }

        .form-wrapper h2 span {
            color: var(--gold);
        }

        .form-wrapper .form-subtitle {
            text-align: center;
            color: var(--gray);
            margin-bottom: 32px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .form-group label .required {
            color: #e74c3c;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 13px 16px;
            border: 2px solid rgba(26, 58, 92, 0.08);
            border-radius: 12px;
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: var(--transition);
            background: var(--cream-light);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--gold);
            background: #fff;
            box-shadow: 0 0 0 4px rgba(201, 168, 76, 0.12);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 4px;
        }

        .form-group .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 400;
            font-size: 0.9rem;
            color: var(--gray);
            cursor: pointer;
        }

        .form-group .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--gold);
            cursor: pointer;
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
            margin-top: 8px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(201, 168, 76, 0.35);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .confidential-badge {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 16px;
            margin-top: 16px;
            color: var(--gray);
            font-size: 0.85rem;
            flex-wrap: wrap;
        }

        .confidential-badge i {
            color: var(--success);
            font-size: 1.1rem;
        }

        /* ===== SUIVI ===== */
        .tracking-section {
            padding: 20px 0 40px;
        }

        .tracking-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 32px 28px;
            box-shadow: var(--shadow);
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid rgba(201, 168, 76, 0.08);
        }

        .tracking-card .icon {
            font-size: 2.8rem;
            color: var(--gold);
            margin-bottom: 8px;
        }

        .tracking-card h3 {
            font-size: 1.4rem;
            margin-bottom: 4px;
        }

        .tracking-card p {
            color: var(--gray);
            margin-bottom: 12px;
        }

        .tracking-card .tracking-number {
            display: inline-block;
            background: var(--cream);
            padding: 8px 24px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: 2px;
            border: 1px dashed var(--gold);
            color: var(--primary);
        }

        .tracking-status {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 16px;
            flex-wrap: wrap;
        }

        .tracking-status .step {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.85rem;
            color: var(--gray);
        }

        .tracking-status .step.active {
            color: var(--gold);
            font-weight: 600;
        }

        .tracking-status .step i {
            font-size: 1.1rem;
        }

        /* ===== TÉMOIGNAGES ===== */
        .testimonies {
            padding: 50px 0;
            background: var(--cream-light);
            border-radius: 40px;
            margin: 20px 0;
        }

        .testimonies h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 8px;
        }

        .testimonies h2 span {
            color: var(--gold);
        }

        .testimonies .sub {
            text-align: center;
            color: var(--gray);
            margin-bottom: 32px;
        }

        .testimonies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
        }

        .testimony-card {
            background: #fff;
            padding: 24px 22px;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            border-top: 4px solid var(--gold);
            transition: var(--transition);
        }

        .testimony-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }

        .testimony-card .quote-icon {
            color: var(--gold-light);
            font-size: 1.8rem;
            margin-bottom: 6px;
        }

        .testimony-card p {
            font-style: italic;
            color: var(--dark);
            margin-bottom: 8px;
        }

        .testimony-card .author {
            font-weight: 600;
            color: var(--primary);
            font-style: normal;
            font-size: 0.9rem;
        }

        /* ===== ÉQUIPE D'INTERCESSION ===== */
        .intercession-team {
            padding: 50px 0;
        }

        .intercession-team .card {
            background: var(--primary-dark);
            color: #fff;
            border-radius: var(--radius);
            padding: 40px 36px;
            box-shadow: var(--shadow);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            align-items: center;
        }

        .intercession-team .card h3 {
            font-size: 1.8rem;
            margin-bottom: 8px;
        }

        .intercession-team .card h3 span {
            color: var(--gold);
        }

        .intercession-team .card p {
            opacity: 0.8;
            line-height: 1.8;
        }

        .intercession-team .card .features {
            list-style: none;
            padding: 0;
        }

        .intercession-team .card .features li {
            padding: 6px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0.85;
        }

        .intercession-team .card .features li i {
            color: var(--gold);
            width: 20px;
        }

        .intercession-team .card .hours {
            background: rgba(255,255,255,0.06);
            padding: 16px 20px;
            border-radius: 12px;
            border-left: 3px solid var(--gold);
            margin-top: 12px;
        }

        .intercession-team .card .hours strong {
            color: var(--gold);
        }

        /* ===== CONTACT RAPIDE ===== */
        .quick-contact {
            padding: 20px 0 50px;
        }

        .quick-contact .cards {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        .quick-contact .contact-item {
            background: #fff;
            padding: 18px 28px;
            border-radius: 50px;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            gap: 12px;
            transition: var(--transition);
            text-decoration: none;
            color: var(--dark);
            border: 1px solid rgba(201, 168, 76, 0.06);
        }

        .quick-contact .contact-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-light);
        }

        .quick-contact .contact-item i {
            color: var(--gold);
            font-size: 1.4rem;
        }

        .quick-contact .contact-item span {
            font-weight: 500;
        }

        /* ===== ANIMATIONS ===== */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.7s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-up.delay-1 { transition-delay: 0.05s; }
        .fade-up.delay-2 { transition-delay: 0.12s; }
        .fade-up.delay-3 { transition-delay: 0.19s; }
        .fade-up.delay-4 { transition-delay: 0.26s; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .intercession-team .card {
                grid-template-columns: 1fr;
                padding: 32px 24px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 50vh;
                border-radius: 0 0 30px 30px;
                padding: 60px 16px;
            }
            .hero h1 { font-size: 2.2rem; }
            .hero-sub { font-size: 1rem; }
            .hero-verse { font-size: 0.9rem; padding: 10px 16px; }

            .form-wrapper {
                padding: 28px 18px;
            }
            .form-row {
                grid-template-columns: 1fr;
            }
            .form-group .checkbox-group {
                flex-direction: column;
                gap: 8px;
            }

            .testimonies-grid {
                grid-template-columns: 1fr;
            }

            .quick-contact .cards {
                flex-direction: column;
                align-items: center;
            }
            .quick-contact .contact-item {
                width: 100%;
                justify-content: center;
            }

            .tracking-status {
                flex-direction: column;
                align-items: center;
                gap: 8px;
            }
        }

        @media (max-width: 480px) {
            .hero h1 { font-size: 1.8rem; }
            .verses-grid { grid-template-columns: 1fr; }
            .intercession-team .card h3 { font-size: 1.4rem; }
            .form-wrapper h2 { font-size: 1.6rem; }
        }

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
        <div class="hero-badge"><i class="fas fa-hands-praying"></i> Priez sans cesse</div>
        <h1>Confiez-nous <span>vos sujets de prière</span></h1>
        <p class="hero-sub">Nous croyons à la puissance de la prière et nous prierons avec vous.</p>
        <div class="hero-verse">
            "Ne vous inquiétez de rien ; mais en toute chose, faites connaître vos besoins à Dieu par des prières et des supplications."
            <cite>— Philippiens 4:6</cite>
        </div>
    </div>
</section>

<!-- ===== MESSAGE D'ENCOURAGEMENT ===== -->
<section class="encouragement container">
    <h2>La prière <span>change les choses</span></h2>
    <div class="message">
        <p>
            <i class="fas fa-quote-left" style="color:var(--gold); margin-right:6px;"></i>
            Confier ses fardeaux à Dieu est un acte de foi et de confiance. Nous sommes là pour porter avec vous vos besoins, 
            vos joies et vos peines dans la prière. Aucune demande n'est trop petite ou trop grande pour Dieu.
        </p>
    </div>
    <div class="verses-grid">
        <div class="verse-card">
            <div class="quote">"Demandez, et l'on vous donnera ; cherchez, et vous trouverez ; frappez, et l'on vous ouvrira."</div>
            <div class="ref">— Matthieu 7:7</div>
        </div>
        <div class="verse-card">
            <div class="quote">"Ne vous inquiétez de rien ; mais en toute chose, faites connaître vos besoins à Dieu."</div>
            <div class="ref">— Philippiens 4:6</div>
        </div>
        <div class="verse-card">
            <div class="quote">"Invoque-moi, et je te répondrai ; je t'annoncerai de grandes choses, des choses cachées que tu ne connais pas."</div>
            <div class="ref">— Jérémie 33:3</div>
        </div>
    </div>
</section>

<!-- ===== FORMULAIRE ===== -->
<section class="prayer-form-section container">
    <div class="form-wrapper fade-up" id="prayerForm">
        <h2>Formulaire de <span>prière</span></h2>
        <p class="form-subtitle">Votre demande sera traitée avec discrétion et confiance.</p>

        <form id="prayerRequestForm" onsubmit="return handleSubmit(event)">
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom complet <span class="required">*</span></label>
                    <input type="text" id="nom" placeholder="Votre nom" required />
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone <span class="required">*</span></label>
                    <input type="tel" id="telephone" placeholder="+229 97 00 00 00" required />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="votre@email.com" />
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" placeholder="Cotonou, Porto-Novo..." />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="sujet">Sujet de la demande <span class="required">*</span></label>
                    <input type="text" id="sujet" placeholder="Ex: Guérison, Famille..." required />
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie <span class="required">*</span></label>
                    <select id="categorie" required>
                        <option value="">Sélectionnez...</option>
                        <option value="sante">Santé</option>
                        <option value="famille">Famille</option>
                        <option value="mariage">Mariage</option>
                        <option value="travail">Travail</option>
                        <option value="etudes">Études</option>
                        <option value="voyage">Voyage</option>
                        <option value="delivrance">Délivrance</option>
                        <option value="action-grace">Action de grâce</option>
                        <option value="spirituel">Vie spirituelle</option>
                        <option value="autres">Autres</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="message">Message détaillé <span class="required">*</span></label>
                <textarea id="message" placeholder="Décrivez votre demande de prière en détail..." required></textarea>
            </div>

            <div class="form-group">
                <label>Options supplémentaires</label>
                <div class="checkbox-group">
                    <label>
                        <input type="checkbox" id="confidentiel" />
                        <i class="fas fa-lock" style="color:var(--gold);"></i> Demande confidentielle
                    </label>
                    <label>
                        <input type="checkbox" id="contact" />
                        <i class="fas fa-phone" style="color:var(--gold);"></i> Autoriser l'équipe à me contacter
                    </label>
                    <label>
                        <input type="checkbox" id="rappel" />
                        <i class="fas fa-clock" style="color:var(--gold);"></i> Je souhaite être rappelé
                    </label>
                </div>
            </div>

            <button type="submit" class="btn-submit" id="submitBtn">
                <i class="fas fa-praying-hands"></i> Envoyer ma demande de prière
            </button>

            <div class="confidential-badge">
                <span><i class="fas fa-shield-alt"></i> Confidentialité garantie</span>
                <span><i class="fas fa-lock"></i> Données sécurisées</span>
                <span><i class="fas fa-heart"></i> Traité avec compassion</span>
            </div>
        </form>
    </div>
</section>

<!-- ===== SUIVI ===== -->
<section class="tracking-section container">
    <div class="tracking-card fade-up delay-1" id="trackingCard" style="display:none;">
        <div class="icon"><i class="fas fa-check-circle"></i></div>
        <h3>Demande envoyée avec succès !</h3>
        <p>Votre demande de prière a été reçue. Notre équipe d'intercession priera pour vous.</p>
        <div class="tracking-number" id="trackingNumber">CCS-P-2026-0042</div>
        <div class="tracking-status">
            <span class="step active"><i class="fas fa-check-circle"></i> Reçue</span>
            <span class="step"><i class="fas fa-spinner"></i> En prière</span>
            <span class="step"><i class="fas fa-check-circle"></i> Exaucée</span>
        </div>
        <p style="margin-top:12px; font-size:0.85rem; color:var(--gray);">
            <i class="fas fa-info-circle"></i> Vous pouvez utiliser ce numéro pour suivre votre demande.
        </p>
    </div>
</section>

<!-- ===== TÉMOIGNAGES ===== -->
<section class="testimonies container">
    <h2>Témoignages de <span>prières exaucées</span></h2>
    <p class="sub">Des vies transformées par la puissance de Dieu.</p>

    <div class="testimonies-grid">
        <div class="testimony-card fade-up delay-1">
            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
            <p>"Après avoir confié ma maladie à l'église, j'ai reçu une guérison miraculeuse. Dieu est fidèle !"</p>
            <div class="author">— Sœur Marie B.</div>
        </div>
        <div class="testimony-card fade-up delay-2">
            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
            <p>"Ma famille était en crise. Les prières de l'église ont restauré la paix et l'harmonie chez nous."</p>
            <div class="author">— Frère Jean A.</div>
        </div>
        <div class="testimony-card fade-up delay-3">
            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
            <p>"J'avais perdu espoir dans ma recherche d'emploi. Dieu m'a ouvert une porte inattendue. Merci pour vos prières !"</p>
            <div class="author">— Frère David K.</div>
        </div>
    </div>
</section>

<!-- ===== ÉQUIPE D'INTERCESSION ===== -->
<section class="intercession-team container">
    <div class="card fade-up">
        <div>
            <h3>Équipe d'<span>intercession</span></h3>
            <p>Notre équipe de prière est composée de fidèles engagés, formés à l'accompagnement spirituel et à l'intercession. Chaque demande est traitée avec soin, discrétion et amour.</p>
            <ul class="features">
                <li><i class="fas fa-check-circle"></i> Prière quotidienne pour chaque demande</li>
                <li><i class="fas fa-check-circle"></i> Confidentialité absolue</li>
                <li><i class="fas fa-check-circle"></i> Suivi personnalisé</li>
                <li><i class="fas fa-check-circle"></i> Accompagnement spirituel</li>
            </ul>
        </div>
        <div>
            <div class="hours">
                <p><strong><i class="fas fa-clock"></i> Horaires de prière :</strong></p>
                <p>🕊 Lundi - Vendredi : 5h30, 12h00, 19h00</p>
                <p>🕊 Samedi : 6h00, 15h00</p>
                <p>🕊 Dimanche : 6h00 (culte de prière)</p>
                <p style="margin-top:10px; opacity:0.6; font-style:italic;">
                    "La prière fervente du juste a une grande efficace." — Jacques 5:16
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CONTACT RAPIDE ===== -->
<section class="quick-contact container">
    <div class="cards">
        <a href="tel:+22997000000" class="contact-item">
            <i class="fas fa-phone"></i>
            <span>+229 97 00 00 00</span>
        </a>
        <a href="https://wa.me/22997000000" target="_blank" class="contact-item">
            <i class="fab fa-whatsapp" style="color:#25D366;"></i>
            <span>WhatsApp</span>
        </a>
        <a href="mailto:priere@ccsbenin.org" class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>priere@ccsbenin.org</span>
        </a>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer style="background:var(--dark); color:rgba(255,255,255,0.6); padding:40px 24px; text-align:center; border-radius:40px 40px 0 0; margin-top:20px;">
    <div style="font-family:'Playfair Display',serif; font-size:1.4rem; color:var(--gold); margin-bottom:8px;">✝ Église CCS Bénin</div>
    <p style="margin-bottom:4px;">"Priez sans cesse." — 1 Thessaloniciens 5:17</p>
    <p>© 2026 - Tous droits réservés</p>
</footer>

<!-- ===== JAVASCRIPT ===== -->
<script>
    // ===== GESTION DU FORMULAIRE =====
    function handleSubmit(e) {
        e.preventDefault();

        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';

        // Simuler un envoi
        setTimeout(() => {
            // Générer un numéro de suivi aléatoire
            const num = Math.floor(Math.random() * 9000) + 1000;
            const trackingNumber = `CCS-P-2026-${num}`;
            document.getElementById('trackingNumber').textContent = trackingNumber;

            // Cacher le formulaire, afficher le suivi
            document.getElementById('prayerForm').style.display = 'none';
            document.getElementById('trackingCard').style.display = 'block';
            document.getElementById('trackingCard').classList.add('visible');

            // Réactiver le bouton
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-praying-hands"></i> Envoyer ma demande de prière';

            // Animer les étapes
            const steps = document.querySelectorAll('.tracking-status .step');
            setTimeout(() => {
                steps[1].classList.add('active');
            }, 1500);
            setTimeout(() => {
                steps[2].classList.add('active');
            }, 3000);

            // Scroll vers le suivi
            document.getElementById('trackingCard').scrollIntoView({ behavior: 'smooth', block: 'center' });

        }, 2000);

        return false;
    }

    // ===== ANIMATION AU SCROLL =====
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.fade-up').forEach(el => {
        observer.observe(el);
    });

    // ===== Rendre le formulaire visible immédiatement =====
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('.form-wrapper')?.classList.add('visible');
    });
</script>

</body>
</html>

  <?php
include 'footer.php';
?>