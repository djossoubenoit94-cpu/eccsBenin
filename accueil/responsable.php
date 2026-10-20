<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ECCSB · Église Chrétienne Cœur Sacré du Bénin</title>
  <style>
    /* ===== RESET & BASE ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
      background: #f8f6fc;
      color: #1f1a2e;
      scroll-behavior: smooth;
      line-height: 1.5;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.8rem;
    }

    /* ===== HERO ===== */
    .hero {
      position: relative;
      min-height: 86vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 3rem 1.5rem;
      background: linear-gradient(145deg, #0d0720 0%, #1e1138 100%);
      overflow: hidden;
      border-radius: 0 0 3.5rem 3.5rem;
      margin-bottom: 1.5rem;
      box-shadow: 0 16px 40px rgba(30, 15, 60, 0.2);
    }

    /* Fond texturé subtil + overlay */
    .hero-bg {
      position: absolute;
      inset: 0;
      background: 
        radial-gradient(circle at 20% 30%, rgba(160, 120, 210, 0.12) 0%, transparent 50%),
        radial-gradient(circle at 80% 70%, rgba(210, 180, 255, 0.08) 0%, transparent 50%),
        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" opacity="0.06"><path d="M0 0 L400 0 L400 400 L0 400 Z" fill="none" stroke="%23b8a0d0" stroke-width="0.6"/><circle cx="200" cy="200" r="180" fill="none" stroke="%23b8a0d0" stroke-width="0.5"/><circle cx="200" cy="200" r="120" fill="none" stroke="%23b8a0d0" stroke-width="0.5"/><circle cx="200" cy="200" r="60" fill="none" stroke="%23b8a0d0" stroke-width="0.5"/></svg>');
      background-size: cover, cover, 300px 300px;
      background-blend-mode: overlay;
      z-index: 0;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 880px;
      backdrop-filter: blur(2px);
      padding: 1.2rem 2rem;
      border-radius: 3rem;
      background: rgba(18, 8, 38, 0.25);
      box-shadow: 0 20px 50px rgba(0,0,0,0.2);
      border: 1px solid rgba(215, 190, 240, 0.15);
    }

    .hero-content .eccsb-name {
      font-size: 3.2rem;
      font-weight: 700;
      letter-spacing: 3px;
      color: #f7efff;
      text-shadow: 0 4px 24px rgba(100, 60, 180, 0.3);
      margin-bottom: 0.4rem;
    }

    .hero-content .eccsb-name small {
      display: block;
      font-size: 1rem;
      font-weight: 300;
      letter-spacing: 6px;
      color: #cdb9ec;
      margin-top: 0.2rem;
      text-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }

    .hero-content h1 {
      font-size: 2.8rem;
      font-weight: 400;
      color: #fff4f0;
      margin: 1rem 0 0.6rem 0;
      letter-spacing: 1px;
      text-shadow: 0 2px 12px rgba(0,0,0,0.3);
    }

    .hero-content .slogan {
      font-size: 1.4rem;
      font-weight: 300;
      color: #e6d8fd;
      margin-bottom: 2.2rem;
      letter-spacing: 2px;
      border-top: 1px solid rgba(215, 190, 240, 0.2);
      padding-top: 0.8rem;
      display: inline-block;
    }

    .btn-primary {
      display: inline-block;
      background: linear-gradient(145deg, #b591e0, #8f6bc9);
      color: #0f0820;
      font-weight: 600;
      padding: 1rem 2.8rem;
      border-radius: 60px;
      text-decoration: none;
      font-size: 1.2rem;
      letter-spacing: 0.8px;
      box-shadow: 0 8px 24px rgba(120, 70, 190, 0.35);
      border: 1px solid rgba(255, 235, 255, 0.25);
      transition: all 0.25s ease;
      backdrop-filter: blur(2px);
    }

    .btn-primary:hover {
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 16px 40px rgba(120, 70, 190, 0.5);
      background: linear-gradient(145deg, #c4a3e8, #9e7ad0);
      color: #120a20;
    }

    .btn-primary:active {
      transform: scale(0.97);
    }

    /* ===== SECTIONS COMMUNES ===== */
    .section {
      padding: 3.5rem 0 2.5rem 0;
    }

    .section-title {
      font-size: 2.2rem;
      font-weight: 600;
      color: #1d1233;
      margin-bottom: 1.8rem;
      position: relative;
      display: inline-block;
    }

    .section-title::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 70px;
      height: 4px;
      background: linear-gradient(90deg, #9b7ac9, #c7a9ea);
      border-radius: 4px;
    }

    /* ===== CARTE VERSET BIBLIQUE ===== */
    .verse-card {
      background: linear-gradient(145deg, #f5effc, #e7ddf5);
      padding: 2rem 2.5rem;
      border-radius: 2.8rem;
      box-shadow: 0 8px 26px rgba(70, 40, 120, 0.06);
      border-left: 6px solid #b591e0;
      transition: all 0.3s;
      margin: 0.5rem 0 1rem 0;
      text-align: center;
    }

    .verse-card blockquote {
      font-size: 1.6rem;
      font-weight: 400;
      color: #1e1236;
      font-style: italic;
      letter-spacing: 0.3px;
    }

    .verse-card .ref {
      display: block;
      margin-top: 0.6rem;
      font-weight: 500;
      color: #5a3e82;
      font-size: 1.1rem;
    }

    /* ===== CARDS ACTUS & ÉVÈNEMENTS ===== */
    .cards-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 2rem;
      margin-top: 1.2rem;
    }

    .card-item {
      background: white;
      border-radius: 2rem;
      padding: 1.6rem 1.6rem 1.8rem;
      box-shadow: 0 8px 28px rgba(50, 30, 80, 0.04);
      border: 1px solid #ece2f7;
      transition: transform 0.2s, box-shadow 0.3s, border-color 0.2s;
      backdrop-filter: blur(2px);
      display: flex;
      flex-direction: column;
    }

    .card-item:hover {
      transform: translateY(-8px);
      border-color: #bc9adc;
      box-shadow: 0 20px 44px rgba(80, 50, 130, 0.08);
    }

    .card-item h3 {
      font-size: 1.4rem;
      font-weight: 600;
      color: #1d1036;
      margin-bottom: 0.4rem;
    }

    .card-item .meta {
      font-size: 0.85rem;
      font-weight: 500;
      color: #7f61a5;
      letter-spacing: 0.3px;
      margin-bottom: 0.6rem;
    }

    .card-item p {
      color: #2f2545;
      flex: 1;
      font-size: 0.98rem;
    }

    .card-item .badge-date {
      background: #ede3f9;
      padding: 0.25rem 1rem;
      border-radius: 40px;
      display: inline-block;
      font-size: 0.8rem;
      font-weight: 600;
      color: #3b255b;
      margin-top: 0.8rem;
      align-self: flex-start;
      border: 1px solid #d8c5ec;
    }

    /* ===== FOOTER ===== */
    .footer {
      margin-top: 3.5rem;
      padding: 2.5rem 0 2rem 0;
      border-top: 1px solid #e2d5ee;
      text-align: center;
      background: #faf8fe;
      border-radius: 2.5rem 2.5rem 0 0;
    }

    .footer p {
      color: #3b2d54;
      font-size: 1rem;
      font-weight: 300;
    }

    .footer .footer-quote {
      font-style: italic;
      color: #482f69;
      font-size: 1.1rem;
      letter-spacing: 0.4px;
    }

    .footer .contact {
      margin-top: 0.6rem;
      font-size: 0.95rem;
      color: #5b427b;
    }

    /* ===== SCROLL ANIMATION ===== */
    .fade-up {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.3, 1), transform 0.8s cubic-bezier(0.2, 0.9, 0.3, 1);
    }

    .fade-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 850px) {
      .hero {
        min-height: 70vh;
      }
      .hero-content .eccsb-name {
        font-size: 2.6rem;
      }
      .hero-content h1 {
        font-size: 2.2rem;
      }
      .hero-content .slogan {
        font-size: 1.2rem;
      }
      .verse-card blockquote {
        font-size: 1.3rem;
      }
    }

    @media (max-width: 600px) {
      .container {
        padding: 0 1rem;
      }
      .hero {
        border-radius: 0 0 2.5rem 2.5rem;
        min-height: 64vh;
        padding: 2rem 1rem;
      }
      .hero-content {
        padding: 0.8rem 1rem;
        background: rgba(18, 8, 38, 0.35);
      }
      .hero-content .eccsb-name {
        font-size: 2rem;
      }
      .hero-content h1 {
        font-size: 1.8rem;
      }
      .btn-primary {
        padding: 0.8rem 2rem;
        font-size: 1rem;
      }
      .section-title {
        font-size: 1.8rem;
      }
      .cards-grid {
        grid-template-columns: 1fr;
        gap: 1.2rem;
      }
      .verse-card {
        padding: 1.5rem 1rem;
      }
      .verse-card blockquote {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 400px) {
      .hero-content .eccsb-name {
        font-size: 1.6rem;
        letter-spacing: 1px;
      }
      .hero-content h1 {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>
  <?php
include 'header.php';
?>





  <!-- ============================================================ -->
  <!-- HERO -->
  <!-- ============================================================ -->
  <header class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <div class="eccsb-name">
        ECCSB
        <small>ÉGLISE CHRÉTIENNE CŒUR SACRÉ DU BÉNIN</small>
      </div>
      <h1>Bienvenue dans la présence de Dieu</h1>
      <div class="slogan">✝ Unis dans la foi · Transformés par l’amour</div>
      <a href="#" class="btn-primary" id="discoverBtn">Découvrir l’église</a>
    </div>
  </header>

  <main class="container">

    <!-- ============================================================ -->
    <!-- VERSET BIBLIQUE DU JOUR -->
    <!-- ============================================================ -->
    <section class="section fade-up" id="verse-section">
      <div class="verse-card" id="verseCard">
        <blockquote>
          « Ne vous inquiétez de rien ; mais en toute chose faites connaître vos besoins à Dieu par des prières et des supplications, avec des actions de grâces. »
          <span class="ref">— Philippiens 4:6</span>
        </blockquote>
      </div>
    </section>

    <!-- ============================================================ -->
    <!-- ACTUALITÉS RÉCENTES -->
    <!-- ============================================================ -->
    <section class="section fade-up">
      <h2 class="section-title">📰 Actualités récentes</h2>
      <div class="cards-grid">
        <div class="card-item">
          <h3>Grande campagne d’évangélisation</h3>
          <p>Une semaine de prière et de témoignages dans les quartiers de Cotonou. Rejoignez-nous !</p>
          <span class="badge-date">28 mars 2026</span>
        </div>
        <div class="card-item">
          <h3>Retraite des jeunes « Flamme »</h3>
          <p>Un temps fort de louange, d’enseignement et de partage pour la jeunesse.</p>
          <span class="badge-date">12 avril 2026</span>
        </div>
        <div class="card-item">
          <h3>Nouveau livre de méditation</h3>
          <p>« Cœur Sacré, source de vie » – disponible au stand de l’église.</p>
          <span class="badge-date">5 mai 2026</span>
        </div>
        <div class="card-item">
          <h3>Concert de louange</h3>
          <p>Soirée de célébration avec les chorales invitées. Entrée libre.</p>
          <span class="badge-date">20 mai 2026</span>
        </div>
      </div>
    </section>

    <!-- ============================================================ -->
    <!-- PROCHAINS ÉVÉNEMENTS -->
    <!-- ============================================================ -->
    <section class="section fade-up">
      <h2 class="section-title">📅 Prochains événements</h2>
      <div class="cards-grid">
        <div class="card-item">
          <h3>🙏 Veillée de prière</h3>
          <div class="meta">📆 18 juin 2026 · 19h00</div>
          <p>Une nuit d’intercession pour le Bénin et les nations. Venez avec un cœur ouvert.</p>
        </div>
        <div class="card-item">
          <h3>📖 École biblique</h3>
          <div class="meta">📆 25 juin 2026 · 15h00</div>
          <p>Étude approfondie des Épîtres de Paul. Inscription sur place.</p>
        </div>
        <div class="card-item">
          <h3>🎶 Soirée louange & adoration</h3>
          <div class="meta">📆 3 juillet 2026 · 18h30</div>
          <p>Un moment de gloire avec l’équipe de louange ECCSB.</p>
        </div>
      </div>
    </section>

  </main>

  <!-- ============================================================ -->
  <!-- FOOTER -->
  <!-- ============================================================ -->
  <footer class="footer container">
    <p class="footer-quote">« Que la paix du Christ règne dans vos cœurs. » — Colossiens 3:15</p>
    <p class="contact">📧 contact@eccsb.bj · 📞 +229 61 00 00 00</p>
    <p style="margin-top: 1.2rem; font-size: 0.85rem; color: #60477e;">&copy; 2026 ECCSB · Église Chrétienne Cœur Sacré du Bénin</p>
  </footer>
  <?php
include 'footer.php';
?>

  <!-- ============================================================ -->
  <!-- JAVASCRIPT : fade-in + interactions -->
  <!-- ============================================================ -->
  <script>
    (function() {
      "use strict";

      // ----- 1. FADE-IN au scroll (Intersection Observer) -----
      const fadeElements = document.querySelectorAll('.fade-up');

      if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('visible');
              // on peut observer une seule fois
              // observer.unobserve(entry.target);
            }
          });
        }, {
          threshold: 0.12,
          rootMargin: '0px 0px -20px 0px'
        });

        fadeElements.forEach(el => observer.observe(el));
      } else {
        // fallback
        fadeElements.forEach(el => el.classList.add('visible'));
      }

      // ----- 2. INTERACTION BOUTON HERO (Découvrir l'église) -----
      const discoverBtn = document.getElementById('discoverBtn');
      if (discoverBtn) {
        discoverBtn.addEventListener('click', function(e) {
          e.preventDefault();
          // Petit effet de feedback
          this.style.transform = 'scale(0.96)';
          setTimeout(() => { this.style.transform = ''; }, 180);
          // scroll vers la section verset (ou actu)
          const verseSection = document.getElementById('verse-section');
          if (verseSection) {
            verseSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        });
      }

      // ----- 3. INTERACTION SUR LES CARTES (effet clic) -----
      const cards = document.querySelectorAll('.card-item');
      cards.forEach(card => {
        card.addEventListener('click', function() {
          // animation flash douce
          this.style.transition = 'background 0.15s';
          this.style.background = '#f1eafc';
          setTimeout(() => {
            this.style.background = '';
          }, 200);
          // affiche un petit log mais sans rien casser
          // console.log('Carte cliquée :', this.querySelector('h3')?.innerText || '');
        });
      });

      // ----- 4. VERSET : animation subtile (changement de couleur au survol) -----
      const verseCard = document.getElementById('verseCard');
      if (verseCard) {
        verseCard.addEventListener('mouseenter', function() {
          this.style.transition = 'background 0.3s, border-left-color 0.2s';
          this.style.background = 'linear-gradient(145deg, #efe6fc, #e3d6f5)';
          this.style.borderLeftColor = '#b38ae0';
        });
        verseCard.addEventListener('mouseleave', function() {
          this.style.background = '';
          this.style.borderLeftColor = '#b591e0';
        });
      }

      // ----- 5. Optionnel : changer le verset dynamiquement après 8 secondes -----
      // (pour montrer un verset alternatif)
      const verseBlock = document.querySelector('.verse-card blockquote');
      const verseRef = document.querySelector('.verse-card .ref');
      if (verseBlock && verseRef) {
        const verses = [
          { text: '« Ne vous inquiétez de rien ; mais en toute chose faites connaître vos besoins à Dieu par des prières et des supplications, avec des actions de grâces. »', ref: '— Philippiens 4:6' },
          { text: '« L’Éternel est mon berger : je ne manquerai de rien. »', ref: '— Psaume 23:1' },
          { text: '« Car Dieu a tant aimé le monde qu’il a donné son Fils unique, afin que quiconque croit en lui ne périsse pas, mais qu’il ait la vie éternelle. »', ref: '— Jean 3:16' },
          { text: '« Que votre foi repose, non sur la sagesse des hommes, mais sur la puissance de Dieu. »', ref: '— 1 Corinthiens 2:5' }
        ];
        let index = 0;
        setInterval(() => {
          index = (index + 1) % verses.length;
          verseBlock.innerText = verses[index].text;
          if (verseRef) verseRef.innerText = verses[index].ref;
        }, 9000);
      }

      // ----- 6. petite vérification : si des éléments sont déjà visibles au chargement -----
      setTimeout(() => {
        fadeElements.forEach(el => {
          const rect = el.getBoundingClientRect();
          const winHeight = window.innerHeight || document.documentElement.clientHeight;
          if (rect.top < winHeight - 60) {
            el.classList.add('visible');
          }
        });
      }, 150);

      // au resize
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
        }, 300);
      });

    })();
  </script>
</body>
</html>