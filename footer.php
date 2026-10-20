<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ECCSB · Footer premium – Bleu</title>
  <style>
    /* ===== RESET & BASE ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Roboto, system-ui, -apple-system, sans-serif;
      background: #f0edf7;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ===== CONTENU FACTICE ===== */
    .dummy-content {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 3rem 1.5rem;
      text-align: center;
      background: #f0edf7;
    }

    .dummy-content h2 {
      font-size: clamp(1.4rem, 4vw, 2.5rem);
      color: #1a0f30;
      font-weight: 300;
      letter-spacing: 1px;
      border-bottom: 2px solid #7f9fd0;
      padding-bottom: 0.5rem;
    }

    /* ============================================================ */
    /* FOOTER – BLEU NUIT, GLASSMORPHISM, IMAGE D'ÉGLISE           */
    /* ============================================================ */
    .footer-premium {
      width: 100%;
      min-height: 780px;        /* entre 700 et 900px */
      height: auto;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800" opacity="0.12"><rect width="1200" height="800" fill="%231a2a4a"/><path d="M0 400 L1200 400" stroke="%237f9fd0" stroke-width="0.8"/><circle cx="200" cy="200" r="180" fill="none" stroke="%237f9fd0" stroke-width="0.6"/><circle cx="1000" cy="600" r="220" fill="none" stroke="%237f9fd0" stroke-width="0.6"/><circle cx="600" cy="400" r="280" fill="none" stroke="%237f9fd0" stroke-width="0.5"/></svg>'),
        linear-gradient(145deg, #0a1a3a 0%, #0f284f 40%, #0a1e3d 100%);
      background-blend-mode: overlay, normal;
      background-size: cover, cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      padding: 3rem 2rem;
      border-top: 1px solid rgba(120, 170, 230, 0.15);
      box-shadow: 0 -20px 60px rgba(10, 30, 60, 0.5);
    }

    /* Overlay bleu nuit profond + glassmorphism */
    .footer-premium::before {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(8, 22, 52, 0.82);   /* bleu nuit profond */
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      z-index: 0;
      pointer-events: none;
    }

    .footer-grid {
      position: relative;
      z-index: 2;
      width: 100%;
      max-width: 1400px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2rem 1.8rem;
      color: #e8edf8;
      backdrop-filter: blur(2px);
    }

    /* ===== GLASSMORPHISM SUR CHAQUE ZONE – teinte bleutée ===== */
    .footer-block {
      background: rgba(180, 210, 245, 0.06);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border: 1px solid rgba(120, 170, 230, 0.12);
      border-radius: 2rem;
      padding: clamp(1.2rem, 2vw, 1.6rem) clamp(1rem, 1.5vw, 1.4rem);
      box-shadow: 0 12px 36px rgba(0, 10, 30, 0.3);
      transition: transform 0.25s ease, border-color 0.3s, box-shadow 0.3s;
      display: flex;
      flex-direction: column;
    }

    .footer-block:hover {
      transform: translateY(-6px);
      border-color: rgba(120, 180, 240, 0.30);
      box-shadow: 0 20px 50px rgba(0, 20, 60, 0.4);
      background: rgba(180, 210, 245, 0.09);
    }

    .footer-block h4 {
      font-size: clamp(0.95rem, 1.5vw, 1.1rem);
      font-weight: 600;
      letter-spacing: 0.5px;
      color: #c5daf5;
      border-bottom: 2px solid rgba(120, 170, 230, 0.15);
      padding-bottom: 0.6rem;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .footer-block h4 i {
      font-style: normal;
      font-size: 1.2rem;
    }

    .footer-block p, .footer-block li {
      font-size: clamp(0.85rem, 1.2vw, 0.92rem);
      line-height: 1.6;
      color: #d0dff5;
      font-weight: 300;
    }

    .footer-block a {
      color: #c5daf5;
      text-decoration: none;
      transition: color 0.2s, transform 0.15s;
      display: inline-block;
    }

    .footer-block a:hover {
      color: #ffffff;
      transform: translateX(4px);
    }

    /* ===== LISTES ===== */
    .footer-block ul {
      list-style: none;
      padding: 0;
    }

    .footer-block ul li {
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .footer-block ul li::before {
      content: "›";
      color: #7fafdf;
      font-weight: 700;
      font-size: 1.2rem;
    }

    /* ===== NEWSLETTER ===== */
    .newsletter-form {
      display: flex;
      flex-direction: column;
      gap: 0.6rem;
      margin-top: 0.4rem;
    }

    .newsletter-form input {
      padding: clamp(0.6rem, 1vw, 0.7rem) clamp(0.8rem, 1.5vw, 1rem);
      border-radius: 60px;
      border: 1px solid rgba(120, 170, 230, 0.2);
      background: rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(6px);
      color: #e8edf8;
      font-size: clamp(0.85rem, 1.2vw, 0.9rem);
      transition: border 0.2s, background 0.2s;
      outline: none;
      min-height: 44px; /* pour mobile */
    }

    .newsletter-form input::placeholder {
      color: #a0bcdb;
    }

    .newsletter-form input:focus {
      border-color: #7fafdf;
      background: rgba(255, 255, 255, 0.08);
    }

    .newsletter-form button {
      padding: clamp(0.6rem, 1vw, 0.7rem) clamp(1rem, 1.5vw, 1.2rem);
      border-radius: 60px;
      border: none;
      background: linear-gradient(145deg, #5a8fc9, #3a6fa8);
      color: #ffffff;
      font-weight: 600;
      letter-spacing: 0.5px;
      cursor: pointer;
      transition: all 0.25s ease;
      backdrop-filter: blur(4px);
      box-shadow: 0 4px 16px rgba(50, 100, 180, 0.3);
      font-size: clamp(0.85rem, 1.2vw, 0.95rem);
      min-height: 44px;
    }

    .newsletter-form button:hover {
      transform: scale(1.03);
      background: linear-gradient(145deg, #6a9fd9, #4a7fb8);
      box-shadow: 0 8px 28px rgba(50, 100, 180, 0.45);
    }

    /* ===== RÉSEAUX SOCIAUX ===== */
    .social-icons {
      display: flex;
      gap: clamp(0.5rem, 1vw, 0.8rem);
      flex-wrap: wrap;
      margin-top: 0.6rem;
    }

    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: clamp(40px, 5vw, 44px);
      height: clamp(40px, 5vw, 44px);
      border-radius: 50%;
      background: rgba(180, 210, 245, 0.05);
      border: 1px solid rgba(120, 170, 230, 0.12);
      color: #c5daf5;
      font-size: clamp(1rem, 1.5vw, 1.2rem);
      transition: all 0.25s ease;
      text-decoration: none;
      backdrop-filter: blur(4px);
    }

    .social-icons a:hover {
      background: rgba(120, 170, 230, 0.15);
      border-color: #7fafdf;
      transform: translateY(-4px) scale(1.05);
      color: white;
      box-shadow: 0 8px 24px rgba(50, 100, 180, 0.2);
    }

    /* ===== CARTE GOOGLE MAPS ===== */
    .map-placeholder {
      width: 100%;
      height: clamp(90px, 12vw, 110px);
      border-radius: 1.2rem;
      background: rgba(180, 210, 245, 0.05);
      border: 1px solid rgba(120, 170, 230, 0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: clamp(0.7rem, 1vw, 0.8rem);
      color: #a0bcdb;
      backdrop-filter: blur(4px);
      margin-top: 0.4rem;
      transition: background 0.3s;
      cursor: pointer;
      padding: 0 0.8rem;
      text-align: center;
    }

    .map-placeholder:hover {
      background: rgba(180, 210, 245, 0.08);
    }

    .map-placeholder span {
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    /* ===== COPYRIGHT ===== */
    .footer-copyright {
      grid-column: 1 / -1;
      text-align: center;
      padding-top: 1.2rem;
      margin-top: 0.6rem;
      border-top: 1px solid rgba(120, 170, 230, 0.08);
      font-size: clamp(0.75rem, 1vw, 0.85rem);
      color: #9bb5d9;
      letter-spacing: 0.5px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.5rem 1.8rem;
    }

    .footer-copyright a {
      color: #9bb5d9;
      transition: color 0.2s;
      text-decoration: none;
    }

    .footer-copyright a:hover {
      color: #e8edf8;
    }

    .footer-copyright .separator {
      color: rgba(120, 170, 230, 0.2);
    }

    /* ===== VERSET ===== */
    .verse-block {
      font-style: italic;
      border-left: 2px solid rgba(120, 170, 230, 0.2);
      padding-left: 0.8rem;
      margin-top: 0.4rem;
      color: #c5daf5;
    }

    .verse-block .ref {
      display: block;
      font-style: normal;
      font-weight: 400;
      color: #7fafdf;
      margin-top: 0.2rem;
      font-size: clamp(0.7rem, 1vw, 0.8rem);
    }

    /* ============================================================ */
    /* RESPONSIVE - MEDIA QUERIES                                   */
    /* ============================================================ */
    
    /* --- Tablette large / petit desktop (≤ 1100px) --- */
    @media (max-width: 1100px) {
      .footer-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
      }
      .footer-copyright {
        grid-column: 1 / -1;
      }
    }

    /* --- Tablette (≤ 820px) --- */
    @media (max-width: 820px) {
      .footer-premium {
        min-height: 820px;
        padding: 2rem 1.5rem;
      }
      .footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.2rem;
      }
      .footer-block {
        border-radius: 1.5rem;
      }
    }

     /*--- Mobile (≤ 550px) ---*/
    @media (max-width: 550px) {
      .footer-premium {
        min-height: 880px;
        padding: 1.5rem 0.8rem;
      } */
      .footer-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
      }
      .footer-block {
        padding: 1rem 0.9rem;
        border-radius: 1.2rem;
      }
      .footer-block:hover {
        transform: translateY(-3px);
      }
      .social-icons {
        justify-content: center;
      }
      .footer-copyright {
        flex-direction: column;
        gap: 0.3rem;
      }
      .footer-copyright .separator {
        display: none;
      }
      .map-placeholder {
        height: 80px;
      }
      .newsletter-form input,
      .newsletter-form button {
        min-height: 48px; /* plus grands sur mobile */
      }
    }

    /* --- Très petits écrans (≤ 380px) --- */
    @media (max-width: 380px) {
      .footer-premium {
        padding: 1rem 0.5rem;
        min-height: 900px;
      }
      .footer-block {
        padding: 0.8rem 0.6rem;
      }
      .footer-block h4 {
        font-size: 0.9rem;
      }
      .social-icons a {
        width: 36px;
        height: 36px;
        font-size: 0.9rem;
      }
    }

    /* ===== ANIMATIONS ===== */
    .footer-block {
      transition: transform 0.25s ease, border-color 0.3s, box-shadow 0.3s, background 0.3s;
    }

    .icon {
      display: inline-block;
      width: 1.4rem;
      text-align: center;
    }
  </style>
</head>
<body>

  
  <!-- ============================================================ -->
  <!-- FOOTER PREMIUM – BLEU NUIT AVEC GLASSMORPHISM               -->
  <!-- ============================================================ -->
  <footer class="footer-premium">

    <div class="footer-grid">

      <!-- 1. PRÉSENTATION ÉGLISE -->
      <div class="footer-block">
        <h4><span class="icon">✝</span> ECCSB</h4>
        <p style="font-weight: 300; margin-bottom: 0.3rem;">
          Église Chrétienne Cœur Sacré du Bénin – une communauté vivante, fondée sur l’amour du Christ et la puissance de l’Esprit.
        </p>
        <div class="verse-block">
          « L’Éternel est mon berger, je ne manquerai de rien. »
          <span class="ref">— Psaume 23:1</span>
        </div>
        <p style="margin-top: 0.6rem; font-size: clamp(0.8rem, 1vw, 0.85rem); color: #a0bcdb;">
          <span class="icon">📍</span> Cotonou, Bénin · Quartier Sainte-Trinité
        </p>
      </div>

      <!-- 2. NAVIGATION -->
      <div class="footer-block">
        <h4><span class="icon">🧭</span> Navigation</h4>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="#">Cultes & horaires</a></li>
          <li><a href="#">Ministères</a></li>
          <li><a href="#">Actualités</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- 3. HORAIRES DES CULTES -->
      <div class="footer-block">
        <h4><span class="icon">🕊️</span> Horaires des cultes</h4>
        <ul style="list-style: none;">
          <li style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(120,170,230,0.06); padding: 0.3rem 0; flex-wrap: wrap; gap: 0.2rem;">
            <span>Dimanche</span> <span style="color: #c5daf5;">08h30 · 10h30</span>
          </li>
          <li style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(120,170,230,0.06); padding: 0.3rem 0; flex-wrap: wrap; gap: 0.2rem;">
            <span>Mercredi</span> <span style="color: #c5daf5;">19h00 (prière)</span>
          </li>
          <li style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(120,170,230,0.06); padding: 0.3rem 0; flex-wrap: wrap; gap: 0.2rem;">
            <span>Vendredi</span> <span style="color: #c5daf5;">18h30 (jeunesse)</span>
          </li>
          <li style="display: flex; justify-content: space-between; padding: 0.3rem 0; flex-wrap: wrap; gap: 0.2rem;">
            <span>Samedi</span> <span style="color: #c5daf5;">07h00 (intercession)</span>
          </li>
        </ul>
      </div>

      <!-- 4. CONTACT + NEWSLETTER -->
      <div class="footer-block">
        <h4><span class="icon">📬</span> Contact & Newsletter</h4>
        <p style="display: flex; align-items: center; gap: 0.4rem; margin-bottom: 0.3rem; flex-wrap: wrap;">
          <span style="font-size: clamp(1rem, 1.5vw, 1.1rem);">📞</span> +229 61 00 00 00
        </p>
        <p style="display: flex; align-items: center; gap: 0.4rem; margin-bottom: 0.8rem; flex-wrap: wrap;">
          <span style="font-size: clamp(1rem, 1.5vw, 1.1rem);">✉️</span> contact@eccsb.bj
        </p>
        <div class="newsletter-form">
          <input type="email" placeholder="Votre email" />
          <button type="button">S'abonner</button>
        </div>
        <div style="margin-top: 0.8rem;">
          <h4 style="border: none; padding: 0; margin: 0 0 0.2rem 0; font-size: clamp(0.85rem, 1.2vw, 0.95rem); color: #c5daf5;">
            <span class="icon">🌐</span> Réseaux sociaux
          </h4>
          <div class="social-icons">
            <a href="#" aria-label="Facebook">f</a>
            <a href="#" aria-label="YouTube">▶</a>
            <a href="#" aria-label="Instagram">◈</a>
            <a href="#" aria-label="WhatsApp">☏</a>
          </div>
        </div>
      </div>

      <!-- 5. CARTE GOOGLE MAPS (sur la 2e ligne) -->
      <div class="footer-block" style="grid-column: span 2;">
        <h4><span class="icon">🗺️</span> Nous trouver</h4>
        <div class="map-placeholder">
          <span>📍 Carte interactive — Cliquez pour ouvrir</span>
        </div>
        <p style="font-size: clamp(0.75rem, 1vw, 0.85rem); color: #9bb5d9; margin-top: 0.4rem;">
          Avenue Jean-Paul II, Cotonou · Bénin
        </p>
      </div>

      <!-- 6. COPYRIGHT + MENTIONS (pleine largeur) -->
      <div class="footer-copyright">
        <span>&copy; 2026 ECCSB · Église Chrétienne Cœur Sacré du Bénin</span>
        <span class="separator">|</span>
        <a href="#">Mentions légales</a>
        <span class="separator">|</span>
        <a href="#">Politique de confidentialité</a>
        <span class="separator">|</span>
        <span style="color: #7fafdf;">✝ « Que Dieu soit glorifié »</span>
      </div>

    </div> <!-- fin footer-grid -->
  </footer>

  <!-- ============================================================ -->
  <!-- JavaScript : interactions                                    -->
  <!-- ============================================================ -->
  <script>
    (function() {
      "use strict";

      // 1. Effet sur les blocs : au clic, un léger flash
      const blocks = document.querySelectorAll('.footer-block');
      blocks.forEach(block => {
        block.addEventListener('click', function(e) {
          if (e.target.closest('a') || e.target.closest('button') || e.target.closest('input')) return;
          this.style.transition = 'background 0.15s';
          this.style.background = 'rgba(180, 210, 245, 0.12)';
          setTimeout(() => {
            this.style.background = '';
          }, 200);
        });
      });

      // 2. Bouton newsletter : feedback
      const newsletterBtn = document.querySelector('.newsletter-form button');
      const newsletterInput = document.querySelector('.newsletter-form input');
      if (newsletterBtn) {
        newsletterBtn.addEventListener('click', function() {
          const email = newsletterInput ? newsletterInput.value.trim() : '';
          if (email === '' || !email.includes('@')) {
            this.textContent = '✉️ Email valide ?';
            this.style.background = '#4a7fb8';
            setTimeout(() => {
              this.textContent = "S'abonner";
              this.style.background = '';
            }, 1200);
          } else {
            this.textContent = '✅ Merci !';
            this.style.background = '#3a6fa8';
            setTimeout(() => {
              this.textContent = "S'abonner";
              this.style.background = '';
            }, 1500);
          }
        });
      }

      // 3. Carte Map : interaction au clic (simulée)
      const mapPlaceholder = document.querySelector('.map-placeholder');
      if (mapPlaceholder) {
        mapPlaceholder.addEventListener('click', function() {
          this.style.transition = 'background 0.2s';
          this.style.background = 'rgba(120, 170, 230, 0.12)';
          this.innerHTML = '<span>📍 Ouverture Google Maps (simulé)</span>';
          setTimeout(() => {
            this.innerHTML = '<span>📍 Carte interactive — Cliquez pour ouvrir</span>';
            this.style.background = '';
          }, 1800);
        });
      }

      // 4. Animation du verset au survol
      const verseBlock = document.querySelector('.verse-block');
      if (verseBlock) {
        verseBlock.addEventListener('mouseenter', function() {
          this.style.transition = 'border-left-color 0.3s, padding-left 0.2s';
          this.style.borderLeftColor = '#7fafdf';
          this.style.paddingLeft = '1rem';
        });
        verseBlock.addEventListener('mouseleave', function() {
          this.style.borderLeftColor = 'rgba(120, 170, 230, 0.2)';
          this.style.paddingLeft = '0.8rem';
        });
      }

      console.log('Footer premium ECCSB – Bleu ✅');
    })();
  </script>

</body>
</html>