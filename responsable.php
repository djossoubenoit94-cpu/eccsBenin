 <?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Responsables - Église CCS Bénin</title>
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
            --shadow: 0 20px 40px -12px rgba(0,0,0,0.20);
            --shadow-hover: 0 30px 60px -12px rgba(0,0,0,0.30);
            --radius: 20px;
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
            background: linear-gradient(135deg, rgba(10, 25, 40, 0.90) 0%, rgba(10, 25, 40, 0.55) 100%);
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

        /* ===== SECTION RESPONSABLE PRINCIPAL ===== */
        .leader-main {
            padding: 40px 0 60px;
        }

        .leader-main .card {
            background: #fff;
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            display: grid;
            grid-template-columns: 340px 1fr;
            border: 1px solid rgba(201, 168, 76, 0.08);
            transition: var(--transition);
        }

        .leader-main .card:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-4px);
        }

        .leader-main .card .photo {
            height: 100%;
            min-height: 400px;
            background: var(--light-gray);
            overflow: hidden;
        }

        .leader-main .card .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s;
        }

        .leader-main .card:hover .photo img {
            transform: scale(1.03);
        }

        .leader-main .card .info {
            padding: 40px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .leader-main .card .info .badge {
            display: inline-block;
            background: var(--gold-gradient);
            color: var(--dark);
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 4px 16px;
            border-radius: 30px;
            align-self: flex-start;
            margin-bottom: 12px;
        }

        .leader-main .card .info h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .leader-main .card .info .title {
            color: var(--gold);
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 12px;
        }

        .leader-main .card .info .bio {
            color: var(--gray);
            line-height: 1.8;
            margin-bottom: 16px;
        }

        .leader-main .card .info .message {
            background: var(--cream);
            padding: 16px 20px;
            border-radius: 12px;
            border-left: 4px solid var(--gold);
            font-style: italic;
            color: var(--dark);
            margin-bottom: 16px;
        }

        .leader-main .card .info .socials {
            display: flex;
            gap: 12px;
        }

        .leader-main .card .info .socials a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light-gray);
            color: var(--primary);
            transition: var(--transition);
            text-decoration: none;
        }

        .leader-main .card .info .socials a:hover {
            background: var(--gold-gradient);
            color: var(--dark);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(201, 168, 76, 0.3);
        }

        /* ===== SECTION BUREAU & SPIRITUELS ===== */
        .section-title {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 8px;
        }

        .section-title span {
            color: var(--gold);
        }

        .section-subtitle {
            text-align: center;
            color: var(--gray);
            margin-bottom: 40px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 28px;
            margin-bottom: 60px;
        }

        .team-card {
            background: #fff;
            border-radius: var(--radius);
            padding: 28px 24px;
            text-align: center;
            box-shadow: var(--shadow);
            border: 1px solid rgba(201, 168, 76, 0.06);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .team-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gold-gradient);
            opacity: 0;
            transition: var(--transition);
        }

        .team-card:hover::before {
            opacity: 1;
        }

        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
            border-color: var(--gold-light);
        }

        .team-card .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 16px;
            border: 4px solid var(--gold-light);
            transition: var(--transition);
        }

        .team-card:hover .avatar {
            border-color: var(--gold);
        }

        .team-card .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .team-card h4 {
            font-size: 1.15rem;
            margin-bottom: 2px;
        }

        .team-card .role {
            color: var(--gold);
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 8px;
        }

        .team-card .desc {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 12px;
        }

        .team-card .contact-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 500;
            font-size: 0.85rem;
            text-decoration: none;
            transition: var(--transition);
        }

        .team-card .contact-link:hover {
            color: var(--gold);
        }

        .team-card .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .team-card .social-icons a {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
            transition: var(--transition);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .team-card .social-icons a:hover {
            background: var(--gold-gradient);
            color: var(--dark);
            transform: translateY(-2px);
        }

        /* ===== SECTION MINISTÈRES ===== */
        .ministries-section {
            padding: 40px 0 60px;
            background: #fff;
            border-radius: 40px;
            margin: 20px 0;
            box-shadow: var(--shadow);
        }

        .ministries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            padding: 0 20px;
        }

        .ministry-card {
            background: var(--cream);
            border-radius: var(--radius);
            padding: 24px 20px;
            text-align: center;
            border: 1px solid rgba(201, 168, 76, 0.06);
            transition: var(--transition);
        }

        .ministry-card:hover {
            transform: translateY(-6px);
            border-color: var(--gold-light);
            box-shadow: var(--shadow-hover);
        }

        .ministry-card .icon {
            font-size: 2.4rem;
            color: var(--gold);
            margin-bottom: 10px;
        }

        .ministry-card h4 {
            font-size: 1.1rem;
            margin-bottom: 2px;
        }

        .ministry-card .role {
            color: var(--gold);
            font-size: 0.85rem;
            font-weight: 500;
            margin-bottom: 6px;
        }

        .ministry-card .desc {
            color: var(--gray);
            font-size: 0.85rem;
            margin-bottom: 8px;
        }

        .ministry-card .contact {
            font-size: 0.8rem;
            color: var(--primary);
            font-weight: 500;
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

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .leader-main .card {
                grid-template-columns: 1fr;
            }
            .leader-main .card .photo {
                min-height: 300px;
                max-height: 340px;
            }
            .leader-main .card .info {
                padding: 32px 28px;
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

            .section-title { font-size: 1.8rem; }
            .team-grid { grid-template-columns: 1fr 1fr; gap: 16px; }
            .ministries-grid { grid-template-columns: 1fr 1fr; }

            .leader-main .card .info h2 { font-size: 1.6rem; }
            .leader-main .card .info .bio { font-size: 0.9rem; }
        }

        @media (max-width: 480px) {
            .team-grid { grid-template-columns: 1fr; }
            .ministries-grid { grid-template-columns: 1fr; }
            .leader-main .card .info { padding: 24px 16px; }
            .leader-main .card .photo { min-height: 220px; }
            .hero h1 { font-size: 2rem; }
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
        <div class="hero-badge"><i class="fas fa-users"></i> Équipe dirigeante</div>
        <h1>Nos <span>Responsables</span></h1>
        <p class="hero-sub">Des serviteurs engagés au service de Dieu et de sa communauté.</p>
        <div class="hero-verse">
            "Que chacun de vous considère les autres comme plus importants que lui-même."
            <cite>— Philippiens 2:3</cite>
        </div>
    </div>
</section>

<!-- ===== RESPONSABLE PRINCIPAL ===== -->
<section class="leader-main container">
    <div class="card fade-up visible">
        <div class="photo">
            <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=600&q=80" alt="Pasteur Principal" />
        </div>
        <div class="info">
            <span class="badge"><i class="fas fa-crown"></i> Responsable Principal</span>
            <h2>Pasteur Jean-Baptiste HOUNSOU</h2>
            <div class="title">Pasteur Fondateur & Président de l'Église CCS Bénin</div>
            <p class="bio">
                Pasteur Jean-Baptiste HOUNSOU est le fondateur et président de l'Église Chrétienne des Chérubins et Séraphins du Bénin. 
                Il a consacré sa vie à l'évangélisation et à la formation spirituelle des fidèles depuis plus de 25 ans. 
                Son enseignement biblique profond et sa vision prophétique ont transformé des milliers de vies à travers le Bénin et au-delà.
            </p>
            <div class="message">
                <i class="fas fa-quote-left" style="color:var(--gold); margin-right:8px;"></i>
                "C'est un honneur de servir Dieu avec vous. Ensemble, bâtissons une Église forte, unie et rayonnante de la gloire de Dieu. 
                Je vous invite à marcher dans la foi et l'obéissance, car Dieu a de grands projets pour notre communauté."
            </div>
            <div class="socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== BUREAU PAROISSIAL ===== -->
<section class="container">
    <h2 class="section-title">Bureau <span>Paroissial</span></h2>
    <p class="section-subtitle">L'équipe administrative au service de l'Église.</p>

    <div class="team-grid">
        <div class="team-card fade-up delay-1">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=200&q=80" alt="Secrétaire" />
            </div>
            <h4>Frère David KOUASSI</h4>
            <div class="role">Secrétaire Général</div>
            <p class="desc">Coordination des activités et gestion administrative de l'Église.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> d.kouassi@ccsbenin.org</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="team-card fade-up delay-2">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=200&q=80" alt="Trésorier" />
            </div>
            <h4>Frère Mathieu ADJOVI</h4>
            <div class="role">Trésorier</div>
            <p class="desc">Gestion financière et transparence des comptes de l'Église.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> m.adjovi@ccsbenin.org</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="team-card fade-up delay-3">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=200&q=80" alt="Admin" />
            </div>
            <h4>Frère Samuel AMOUSSOU</h4>
            <div class="role">Responsable Administratif</div>
            <p class="desc">Gestion des ressources humaines et des infrastructures.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> s.amoussou@ccsbenin.org</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== RESPONSABLES SPIRITUELS ===== -->
<section class="container">
    <h2 class="section-title">Responsables <span>Spirituels</span></h2>
    <p class="section-subtitle">Ceux qui veillent sur la vie spirituelle de notre communauté.</p>

    <div class="team-grid">
        <div class="team-card fade-up delay-4">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1583939003579-730e1998d44a?w=200&q=80" alt="Prière" />
            </div>
            <h4>Pasteur Élie DAH</h4>
            <div class="role">Responsable de la Prière</div>
            <p class="desc">Animation des veillées, jeûnes et intercessions.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> e.dah@ccsbenin.org</a>
        </div>

        <div class="team-card fade-up delay-5">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1523119348179-1783083943bb?w=200&q=80" alt="Évangélisation" />
            </div>
            <h4>Pasteur Isaac TOSSOU</h4>
            <div class="role">Responsable de l'Évangélisation</div>
            <p class="desc">Organisation des campagnes et missions évangéliques.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> i.tossou@ccsbenin.org</a>
        </div>

        <div class="team-card fade-up delay-6">
            <div class="avatar">
                <img src="https://images.unsplash.com/photo-1542446228736-d9b4d1eb6a1e?w=200&q=80" alt="Formation" />
            </div>
            <h4>Pasteur Samuel HOUNKPATIN</h4>
            <div class="role">Responsable de la Formation</div>
            <p class="desc">École biblique, séminaires et enseignement.</p>
            <a href="#" class="contact-link"><i class="fas fa-envelope"></i> s.hounkpatin@ccsbenin.org</a>
        </div>
    </div>
</section>

<!-- ===== MINISTÈRES ===== -->
<section class="ministries-section container">
    <h2 class="section-title">Nos <span>Ministères</span></h2>
    <p class="section-subtitle">Des équipes dédiées à des domaines spécifiques du service.</p>

    <div class="ministries-grid">
        <div class="ministry-card fade-up delay-1">
            <div class="icon"><i class="fas fa-user-graduate"></i></div>
            <h4>Ministère de la Jeunesse</h4>
            <div class="role">Frère Marc AGBOTON</div>
            <p class="desc">Activités, camps et formations pour les jeunes.</p>
            <span class="contact"><i class="fas fa-phone"></i> +229 97 11 22 33</span>
        </div>

        <div class="ministry-card fade-up delay-2">
            <div class="icon"><i class="fas fa-music"></i></div>
            <h4>Ministère de la Chorale</h4>
            <div class="role">Sœur Rebecca TCHEDJI</div>
            <p class="desc">Direction musicale et louange.</p>
            <span class="contact"><i class="fas fa-phone"></i> +229 97 44 55 66</span>
        </div>

        <div class="ministry-card fade-up delay-3">
            <div class="icon"><i class="fas fa-female"></i></div>
            <h4>Ministère des Femmes</h4>
            <div class="role">Sœur Esther YEDO</div>
            <p class="desc">Encadrement et activités des femmes chrétiennes.</p>
            <span class="contact"><i class="fas fa-phone"></i> +229 97 77 88 99</span>
        </div>

        <div class="ministry-card fade-up delay-4">
            <div class="icon"><i class="fas fa-male"></i></div>
            <h4>Ministère des Hommes</h4>
            <div class="role">Frère Daniel SOGLO</div>
            <p class="desc">Groupes d'hommes et actions communautaires.</p>
            <span class="contact"><i class="fas fa-phone"></i> +229 97 00 11 22</span>
        </div>

        <div class="ministry-card fade-up delay-5">
            <div class="icon"><i class="fas fa-bible"></i></div>
            <h4>École Biblique</h4>
            <div class="role">Pasteur Joseph ABIOLA</div>
            <p class="desc">Formation biblique et théologique.</p>
            <span class="contact"><i class="fas fa-phone"></i> +229 97 33 44 55</span>
        </div>
    </div>
</section>

<!-- ===== FOOTER ===== -->
<footer style="background:var(--dark); color:rgba(255,255,255,0.6); padding:40px 24px; text-align:center; border-radius:40px 40px 0 0; margin-top:40px;">
    <div style="font-family:'Playfair Display',serif; font-size:1.4rem; color:var(--gold); margin-bottom:8px;">✝ Église CCS Bénin</div>
    <p style="margin-bottom:4px;">"Des serviteurs engagés au service de Dieu et de sa communauté."</p>
    <p>© 2026 - Tous droits réservés</p>
</footer>

<!-- ===== JAVASCRIPT ===== -->
<script>
    // ===== ANIMATION AU SCROLL =====
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -30px 0px' });

    document.querySelectorAll('.fade-up').forEach(el => {
        observer.observe(el);
    });

    // ===== Rendre visible le leader principal immédiatement =====
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('.leader-main .card')?.classList.add('visible');
    });

    // ===== CLIC SUR LES CARTES POUR AFFICHER UN MESSAGE (optionnel) =====
    document.querySelectorAll('.team-card').forEach(card => {
        card.addEventListener('click', function(e) {
            // On évite si on clique sur un lien
            if (e.target.closest('a')) return;
            const name = this.querySelector('h4')?.textContent || 'Ce responsable';
            alert(`✝ ${name}\n\nContactez ce responsable pour plus d'informations.\nQue Dieu vous bénisse !`);
        });
    });
</script>

</body>
</html>

 <?php
include 'footer.php';
?>