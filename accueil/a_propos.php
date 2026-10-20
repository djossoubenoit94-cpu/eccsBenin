<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos de l’Église | Chérubins & Séraphins</title>
    <style>
        /* ===== RESET & BASE ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
            background: #f9f7fc;
            color: #1e1a2b;
            line-height: 1.6;
            padding: 2rem 1.5rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 2.5rem;
            box-shadow: 0 20px 50px rgba(60, 30, 90, 0.08);
            padding: 2.5rem 2rem;
            transition: all 0.2s;
        }

        /* ===== TYPOGRAPHIE & COULEURS ===== */
        h1, h2, h3, h4 {
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        h1 {
            font-size: 2.6rem;
            background: linear-gradient(145deg, #4a2c6d, #7b4b9e);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
            border-left: 6px solid #c9a7e6;
            padding-left: 1.2rem;
        }

        h2 {
            font-size: 2rem;
            color: #2d1b42;
            margin: 2.2rem 0 1.2rem 0;
            position: relative;
            display: inline-block;
        }

        h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #b58ad4, #d4b0f0);
            border-radius: 4px;
        }

        h3 {
            font-size: 1.5rem;
            color: #3b2357;
            margin: 1.5rem 0 0.8rem 0;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #4e3a66;
            background: #f3edf9;
            padding: 0.8rem 1.8rem;
            border-radius: 40px;
            display: inline-block;
            margin: 0.5rem 0 1.8rem 0;
            border: 1px solid #e3d4f0;
        }

        /* ===== INTRO & CONCLUSION ===== */
        .intro-quote {
            background: #f0e8fa;
            padding: 1.8rem 2.2rem;
            border-radius: 2rem;
            font-size: 1.3rem;
            font-weight: 400;
            color: #2e1b44;
            border-left: 6px solid #b388d6;
            margin: 1.8rem 0 2.5rem 0;
            box-shadow: 0 4px 12px rgba(100, 60, 140, 0.06);
        }

        .intro-quote i {
            font-style: italic;
            display: block;
            margin-top: 0.3rem;
            font-weight: 300;
            color: #5a3e79;
        }

        .conclusion {
            background: linear-gradient(145deg, #f5effa, #ede4f7);
            padding: 1.8rem 2.5rem;
            border-radius: 3rem;
            text-align: center;
            font-size: 1.4rem;
            font-weight: 400;
            color: #2b1a3d;
            margin: 3rem 0 1rem 0;
            border: 1px solid #ddd0ec;
            box-shadow: 0 6px 14px rgba(100, 60, 140, 0.04);
        }

        .conclusion span {
            display: block;
            font-size: 1rem;
            color: #593d79;
            margin-top: 0.5rem;
            font-weight: 300;
        }

        /* ===== SECTIONS ===== */
        .section {
            margin: 2.8rem 0 3.5rem 0;
        }

        .grid-2col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 1.2rem;
        }

        .grid-3col {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 1.2rem;
        }

        /* ===== CARTES (CARDS) ===== */
        .card {
            background: #ffffff;
            border-radius: 1.8rem;
            padding: 1.8rem 1.6rem;
            box-shadow: 0 12px 28px rgba(60, 30, 90, 0.04);
            border: 1px solid #ede6f5;
            transition: transform 0.25s ease, box-shadow 0.3s ease, border-color 0.2s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 24px 48px rgba(90, 50, 130, 0.08);
            border-color: #c9afe0;
        }

        .card h3 {
            margin-top: 0;
            font-size: 1.6rem;
            color: #311f48;
            border-bottom: 3px solid #e3d2f2;
            padding-bottom: 0.6rem;
            margin-bottom: 0.8rem;
        }

        .card p {
            color: #2e2640;
            font-size: 1rem;
            flex: 1;
        }

        .card .badge {
            display: inline-block;
            background: #e7daf5;
            color: #3f2860;
            font-weight: 500;
            padding: 0.2rem 1rem;
            border-radius: 30px;
            font-size: 0.8rem;
            letter-spacing: 0.3px;
            margin-top: 0.8rem;
            align-self: flex-start;
        }

        /* ===== SECTION HISTOIRE (style particulier) ===== */
        .histoire-block {
            background: #fbf9fe;
            border-radius: 2rem;
            padding: 1.8rem 2rem;
            border: 1px solid #e7dbf2;
            margin-bottom: 1.5rem;
        }

        .histoire-block h3 {
            margin-top: 0.2rem;
            color: #3a2453;
        }

        .histoire-block p {
            margin-bottom: 0.6rem;
        }

        .histoire-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 1.8rem;
            margin: 1.8rem 0;
        }

        .histoire-item {
            background: white;
            padding: 1.4rem 1.6rem;
            border-radius: 1.6rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.02);
            border: 1px solid #e4d7ee;
        }

        .histoire-item h4 {
            color: #3e2860;
            font-size: 1.2rem;
            margin-bottom: 0.3rem;
        }

        .histoire-item p {
            font-size: 0.98rem;
        }

        /* ===== RESPONSABLES ===== */
        .leader-card {
            background: #fcfaff;
            border-radius: 2rem;
            padding: 1.8rem 1.5rem;
            border: 1px solid #e6daf0;
            box-shadow: 0 6px 14px rgba(80, 50, 120, 0.02);
            transition: all 0.2s;
            height: 100%;
        }

        .leader-card:hover {
            background: #f8f2ff;
            border-color: #b28fd6;
            transform: scale(1.01);
            box-shadow: 0 12px 28px rgba(100, 60, 140, 0.06);
        }

        .leader-card h4 {
            font-size: 1.4rem;
            color: #311f48;
            margin-bottom: 0.4rem;
        }

        .leader-card .role {
            font-weight: 500;
            color: #7a5b9e;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
            margin-bottom: 0.7rem;
        }

        .leader-card p {
            font-size: 0.98rem;
            color: #2d2342;
        }

        .ministry-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.8rem;
        }

        .ministry-tags span {
            background: #ede3f8;
            padding: 0.2rem 1rem;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #3d285a;
            border: 1px solid #dcc9ed;
        }

        /* ===== SCROLL ANIMATION (fade-in) ===== */
        .fade-section {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1);
        }

        .fade-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .grid-2col, .grid-3col, .histoire-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 650px) {
            .container {
                padding: 1.5rem 1.2rem;
            }
            h1 {
                font-size: 2rem;
                padding-left: 0.8rem;
                border-left-width: 4px;
            }
            .grid-2col, .grid-3col, .histoire-grid {
                grid-template-columns: 1fr;
                gap: 1.2rem;
            }
            .intro-quote {
                font-size: 1.1rem;
                padding: 1.2rem 1.5rem;
            }
            .conclusion {
                font-size: 1.2rem;
                padding: 1.4rem 1.5rem;
            }
            .card, .leader-card {
                padding: 1.2rem 1.2rem;
            }
        }

        @media (max-width: 450px) {
            body {
                padding: 0.8rem;
            }
            .container {
                padding: 1rem 0.8rem;
                border-radius: 1.8rem;
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
    </style>
</head>
<body>

      <?php
include '../accueil/header.php';
?>

<div class="container">

    <!-- ===== TITRE ===== -->
    <h1 style="margin-top: 90px;">✝ 2. À PROPOS DE L’ÉGLISE</h1>
    <div class="subtitle">Fondée sur le Rocher · Communauté vivante</div>

    <!-- ===== INTRO INSPIRANTE ===== -->
    <div class="intro-quote fade-section">
        « L’Église n’est pas un bâtiment, mais un peuple rassemblé par l’amour du Christ. 
        Ici, nous grandissons ensemble dans la foi, l’espérance et la louange. »
        <i>— Église des Chérubins & Séraphins, Bénin</i>
    </div>

    <!-- ============================================================ -->
    <!-- SECTION 2.1 HISTOIRE -->
    <!-- ============================================================ -->
    <div class="section fade-section">
        <h2>📖 2.1 Histoire</h2>

        <div class="histoire-block">
            <h3>✦ Création de l’Église</h3>
            <p>Fondée sur Jésus-Christ et la mission des apôtres, notre église est une communauté de croyants vivants, unis par la foi et l’Esprit. Elle n’est pas seulement un lieu, mais un corps animé par la grâce et la vérité.</p>
        </div>

        <div class="histoire-grid">
            <div class="histoire-item">
                <h4>👼 Chérubins</h4>
                <p>Symboles de la <strong>protection et de la présence divine</strong>. Ils veillent sur la sainteté de Dieu et gardent l’accès à sa gloire.</p>
            </div>
            <div class="histoire-item">
                <h4>🔥 Séraphins</h4>
                <p>Esprits de <strong>louange et d’adoration</strong>. Ils brûlent d’amour pour Dieu et proclament sans cesse : « Saint, Saint, Saint est l’Éternel. »</p>
            </div>
            <div class="histoire-item">
                <h4>🌍 Évolution au Bénin</h4>
                <p>Le christianisme s’est implanté au Bénin dès le XIXe siècle. Aujourd’hui, catholiques, protestants et pentecôtistes (dont les Chérubins & Séraphins) vivent leur foi, impactant la société par des œuvres sociales et spirituelles.</p>
            </div>
        </div>
         <div class="card-grid">
        
         <div class="btn-group">
        <a href="histoir.php" class="btn btn-primary" style="height: 90px;"><i class="fas fa-arrow-right"></i> <h5 style="font-size: 20px;">HISTOIRE COMPLET</h5></a>
      </div>
    </div>
    </div>

    <!-- ============================================================ -->
    <!-- SECTION 2.2 VISION -->
    <!-- ============================================================ -->
    <div class="section fade-section">
        <h2>✨ 2.2 Vision</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; margin-top: 1.2rem;">
            <div style="flex: 1; min-width: 220px;">
                <h3>Pourquoi l’église existe</h3>
                <p style="background: #f7f1fd; padding: 1.2rem 1.5rem; border-radius: 1.6rem; border-left: 6px solid #b58ad4;">
                    <strong>Glorifier Dieu</strong> · Enseigner la Parole · Aider les croyants à grandir spirituellement · Apporter l’amour et l’espérance à tous.
                </p>
            </div>
            <div style="flex: 1; min-width: 220px;">
                <h3>Mission spirituelle</h3>
                <p style="background: #f7f1fd; padding: 1.2rem 1.5rem; border-radius: 1.6rem; border-left: 6px solid #b58ad4;">
                    <strong>Annoncer l’Évangile</strong> · Guider les âmes vers le salut · Former des disciples · Transformer la société avec les valeurs chrétiennes.
                </p>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- SECTION 2.3 MISSION (3 CARTES) -->
    <!-- ============================================================ -->
    <div class="section fade-section">
        <h2>🕊️ 2.3 Mission</h2>
        <div class="grid-3col">
            <div class="card">
                <h3>📢 Évangélisation</h3>
                <p>L’église annonce l’Évangile et partage la Parole de Dieu à toutes les nations, sans frontières ni barrières.</p>
                <span class="badge">Matthieu 28:19</span>
            </div>
            <div class="card">
                <h3>🙏 Prière</h3>
                <p>La prière est essentielle pour la connexion avec Dieu et la croissance spirituelle. Nous croyons en la puissance de l’intercession.</p>
                <span class="badge">1 Thessaloniciens 5:17</span>
            </div>
            <div class="card">
                <h3>🌱 Encadrement spirituel</h3>
                <p>L’église accompagne les fidèles dans leur vie chrétienne, les forme et les soutient pour une foi mature et active.</p>
                <span class="badge">Éphésiens 4:12</span>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- SECTION 2.4 RESPONSABLES -->
    <!-- ============================================================ -->
    <div class="section fade-section">
        <h2>👑 2.4 Responsables</h2>
        <div class="grid-3col" style="margin-top: 1.8rem;">
            <!-- Pasteur principal -->
            <div class="leader-card">
                <h4>Pasteur principal</h4>
                <div class="role">Leader spirituel</div>
                <p>Enseigne la Parole de Dieu, guide l’église dans la vérité et la grâce, et veille sur le troupeau avec discernement.</p>
                <div class="ministry-tags"><span>Enseignement</span><span>Direction</span></div>
            </div>
            <!-- Équipe dirigeante -->
            <div class="leader-card">
                <h4>Équipe dirigeante</h4>
                <div class="role">Supervision & organisation</div>
                <p>Organise, supervise et assure le bon fonctionnement de l’église dans l’unité et la sagesse, en soutien au pasteur.</p>
                <div class="ministry-tags"><span>Gestion</span><span>Conseil</span></div>
            </div>
            <!-- Ministères -->
            <div class="leader-card">
                <h4>Ministères</h4>
                <div class="role">Groupes spécialisés</div>
                <p>Jeunesse, chant, prière, enseignement, évangélisation… Ces ministères servent l’église et développent les dons de chacun.</p>
                <div class="ministry-tags"><span>Jeunesse</span><span>Louange</span><span>Intercession</span><span>Évangélisation</span></div>
            </div>
        </div>
    </div>

    <!-- ===== CONCLUSION SPIRITUELLE ===== -->
    <div class="conclusion fade-section">
        « Que Dieu soit glorifié dans l’Église, et que chaque cœur soit transformé par sa grâce. »
        <span>— Éphésiens 3:20-21 · Amen.</span>
    </div>

</div>

<!-- ============================================================ -->
<!-- JavaScript : fade-in au scroll + interactions cartes -->
<!-- ============================================================ -->
<script>
    (function() {
        "use strict";

        // ---- 1. FADE-IN au scroll (Intersection Observer) ----
        const fadeElements = document.querySelectorAll('.fade-section');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Optionnel : on peut arrêter d'observer une fois visible
                        // observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -30px 0px'
            });

            fadeElements.forEach(el => observer.observe(el));
        } else {
            // fallback : tous visibles
            fadeElements.forEach(el => el.classList.add('visible'));
        }

        // ---- 2. INTERACTIONS CARTES (hover + clic) ----
        // On cible toutes les cartes .card et .leader-card
        const cards = document.querySelectorAll('.card, .leader-card');

        cards.forEach(card => {
            // Effet au clic : un petit "flash" de focus
            card.addEventListener('click', function(e) {
                // On ajoute une classe temporaire pour un effet visuel
                this.style.transition = 'background 0.15s';
                this.style.background = '#f5edfe';
                setTimeout(() => {
                    this.style.background = '';
                }, 250);
                // Optionnel : on peut ajouter un petit console.log
                // console.log('Carte cliquée :', this.querySelector('h3, h4')?.innerText || 'carte');
            });

            // Effet supplémentaire : au survol on change légèrement l'ombre (déjà fait en CSS)
            // mais on peut ajouter un son ou rien ; on garde le CSS.
        });

        // ---- 3. petite animation supplémentaire : au chargement, on marque les éléments déjà visibles ----
        // Si certains sont déjà dans le viewport, on les active
        setTimeout(() => {
            fadeElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const winHeight = window.innerHeight || document.documentElement.clientHeight;
                if (rect.top < winHeight - 80) {
                    el.classList.add('visible');
                }
            });
        }, 100);

        // ---- 4. Gestion du redimensionnement (pour rafraîchir l'état) ----
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                fadeElements.forEach(el => {
                    const rect = el.getBoundingClientRect();
                    const winHeight = window.innerHeight || document.documentElement.clientHeight;
                    if (rect.top < winHeight - 60 && !el.classList.contains('visible')) {
                        el.classList.add('visible');
                    }
                });
            }, 250);
        });

    })();
</script>
<?php
include 'footer.php';
?>
</body>
</html>