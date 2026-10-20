<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site officiel de la Paroisse Siège Vèpka - Église Chrétienne des Chérubins et Séraphins du Bénin. Foi, Prière, Sainteté, Communion.">
  <title>Paroisse Siège Vèpka | Église CSB Bénin</title>
  <!-- Font & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background: #fff;
      color: #1a1a1a;
      scroll-behavior: smooth;
      line-height: 1.6;
    }
    a { text-decoration: none; color: inherit; }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }
    /* HEADER / NAV */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background: rgba(255,255,255,0.85);
      backdrop-filter: blur(12px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      padding: 8px 0;
      border-bottom: 1px solid rgba(33, 150, 243, 0.1);
    }
    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo-area {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .logo-icon {
      font-size: 2rem;
      color: #0D47A1;
    }
    .logo-text {
      font-weight: 700;
      font-size: 1.2rem;
      color: #0D47A1;
      letter-spacing: -0.5px;
    }
    .logo-text span {
      color: #FFD700;
    }
    .nav-links {
      display: flex;
      gap: 28px;
      list-style: none;
      font-weight: 600;
      font-size: 0.95rem;
    }
    .nav-links a {
      color: #1e293b;
      transition: 0.2s;
      position: relative;
    }
    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: #2196F3;
      transition: 0.3s;
    }
    .nav-links a:hover { color: #0D47A1; }
    .nav-links a:hover::after { width: 100%; }
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 6px;
      cursor: pointer;
      background: none;
      border: none;
    }
    .hamburger span {
      width: 28px;
      height: 3px;
      background: #0D47A1;
      border-radius: 4px;
      transition: 0.3s;
    }
    /* mobile nav */
    @media (max-width: 992px) {
      .nav-links {
        position: fixed;
        top: 0;
        right: -100%;
        width: 75%;
        max-width: 320px;
        height: 100vh;
        background: #ffffff;
        flex-direction: column;
        padding: 80px 30px 30px;
        box-shadow: -10px 0 30px rgba(0,0,0,0.05);
        transition: 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        gap: 18px;
        overflow-y: auto;
        border-left: 1px solid rgba(0,0,0,0.03);
      }
      .nav-links.open {
        right: 0;
      }
      .hamburger {
        display: flex;
        z-index: 1001;
      }
      .hamburger.active span:nth-child(1) {
        transform: rotate(45deg) translate(6px, 6px);
      }
      .hamburger.active span:nth-child(2) {
        opacity: 0;
      }
      .hamburger.active span:nth-child(3) {
        transform: rotate(-45deg) translate(6px, -6px);
      }
      .logo-text { font-size: 1rem; }
    }

    /* HERO */
    .hero {
      min-height: 100vh;
      background: linear-gradient(135deg, rgba(13, 71, 161, 0.8) 0%, rgba(33, 150, 243, 0.7) 100%), url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cmVjdCB3aWR0aD0iODAiIGhlaWdodD0iODAiIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjAuMDYiLz48cGF0aCBkPSJNMzAgMTBhMTAgMTAgMCAwIDEgMjAgMCAxMCAxMCAwIDAgMS0yMCAweiIgZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMC4wNSIvPjwvc3ZnPg==');
      background-image: url('paroisse/adjagunmokadi/images/adjagunmokadi_7.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      text-align: center;
      padding: 120px 20px 80px;
      position: relative;
    }
    .hero-overlay {
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.35);
      backdrop-filter: brightness(0.9);
    }
    .hero-content {
      position: relative;
      z-index: 2;
      max-width: 900px;
      margin: 0 auto;
      color: white;
    }
    .hero-logo {
      font-size: 4rem;
      color: #FFD700;
      margin-bottom: 10px;
      filter: drop-shadow(0 8px 20px rgba(0,0,0,0.3));
    }
    .hero h1 {
      font-size: 3.8rem;
      font-weight: 800;
      letter-spacing: -0.5px;
      margin-bottom: 12px;
      text-shadow: 0 4px 20px rgba(0,0,0,0.3);
    }
    .hero h1 span { color: #FFD700; }
    .hero-sub {
      font-size: 1.5rem;
      font-weight: 300;
      letter-spacing: 6px;
      margin-bottom: 30px;
      opacity: 0.95;
    }
    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 16px;
      margin: 28px 0 36px;
    }
    .btn {
      padding: 14px 36px;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: white;
      color: #0D47A1;
      box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    }
    .btn-primary {
      background: #FFD700;
      color: #0D47A1;
    }
    .btn-primary:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 32px rgba(255, 215, 0, 0.3);
    }
    .btn-outline {
      background: transparent;
      border: 2px solid white;
      color: white;
    }
    .btn-outline:hover {
      background: white;
      color: #0D47A1;
      transform: translateY(-4px);
    }
    .hero-verse {
      margin-top: 30px;
      font-style: italic;
      font-weight: 300;
      font-size: 1.2rem;
      padding: 16px 24px;
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(6px);
      border-radius: 60px;
      display: inline-block;
      border-left: 4px solid #FFD700;
    }
    @media (max-width: 768px) {
      .hero h1 { font-size: 2.6rem; }
      .hero-sub { font-size: 1.1rem; letter-spacing: 3px; }
      .btn { padding: 12px 28px; }
    }

    /* sections génériques */
    section {
      padding: 80px 0;
    }
    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 16px;
      color: #0D47A1;
      text-align: center;
    }
    .section-subtitle {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 48px;
      color: #475569;
      font-size: 1.1rem;
    }
    .section-title span { color: #FFD700; }

    /* cartes */
    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 30px;
    }
    .card {
      background: white;
      border-radius: 24px;
      padding: 28px 22px;
      box-shadow: 0 12px 40px rgba(0,0,0,0.04);
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.02);
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 24px 60px rgba(13, 71, 161, 0.08);
      border-color: rgba(33, 150, 243, 0.15);
    }
    .card-icon {
      font-size: 2.8rem;
      color: #2196F3;
      margin-bottom: 16px;
    }
    .card h3 {
      font-size: 1.3rem;
      margin-bottom: 10px;
      color: #0D47A1;
    }
    .card p { color: #334155; }

    /* A propos */
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: start;
    }
    @media (max-width: 768px) { .about-grid { grid-template-columns: 1fr; } }

    /* responsables */
    .resp-card {
      text-align: center;
      padding: 30px 20px;
    }
    .resp-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      background: #e2e8f0;
      margin-bottom: 16px;
      border: 4px solid #FFD700;
    }
    .resp-card .role {
      color: #2196F3;
      font-weight: 600;
      font-size: 0.9rem;
      letter-spacing: 1px;
    }

    /* activités tableau */
    .schedule-table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.03);
    }
    .schedule-table th {
      background: #0D47A1;
      color: white;
      padding: 18px 16px;
      font-weight: 600;
    }
    .schedule-table td {
      padding: 16px;
      border-bottom: 1px solid #eef2f6;
    }
    .schedule-table tr:last-child td { border: 0; }

    /* galerie */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }
    .gallery-item {
      border-radius: 20px;
      overflow: hidden;
      background: #f1f5f9;
      aspect-ratio: 1/1;
      transition: 0.3s;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 3rem;
      border: 2px solid #eef2f6;
      object-fit: contain;
    }
 img{
  overflow: hidden;  /* cache ce qui dépasse */
  display: flex;
  justify-content: center;
  align-items: center;
}

.image-container img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain; /* adapte l’image sans déformation */
}


    .gallery-item:hover { transform: scale(1.02); border-color: #2196F3; }

    /* formulaire */
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      color: #0D47A1;
    }
    .form-control {
      width: 100%;
      padding: 14px 18px;
      border: 2px solid #e2e8f0;
      border-radius: 16px;
      transition: 0.2s;
      font-family: inherit;
      background: #fafcff;
    }
    .form-control:focus {
      outline: none;
      border-color: #2196F3;
      box-shadow: 0 0 0 4px rgba(33,150,243,0.1);
    }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
    }
    @media (max-width: 768px) { .contact-grid { grid-template-columns: 1fr; } }

    /* footer */
    footer {
      background: #0D1B2A;
      color: #e2e8f0;
      padding: 50px 0 24px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
      margin-bottom: 40px;
    }
    .footer-grid h4 { color: #FFD700; margin-bottom: 16px; }
    .footer-social a {
      display: inline-block;
      margin-right: 16px;
      font-size: 1.4rem;
      color: #94a3b8;
      transition: 0.2s;
    }
    .footer-social a:hover { color: #FFD700; }
    .footer-bottom {
      border-top: 1px solid #1e2a3a;
      padding-top: 24px;
      text-align: center;
      font-size: 0.9rem;
      color: #94a3b8;
    }

    /* misc */
    .text-gold { color: #FFD700; }
    .bg-soft { background: #f8faff; }
    .mt-4 { margin-top: 24px; }
    .flex-center { display: flex; justify-content: center; }
    iframe { border-radius: 16px; width: 100%; }
    .whatsapp{
      position:fixed;
      bottom:20px;
      right:20px;
      width:65px;
      height:65px;
      border-radius:50%;
      display:flex;
      justify-content:center;
      align-items:center;
      background:var(--accent);
      box-shadow:0 0 25px rgba(34,197,94,0.6);
      animation:pulse 1.6s infinite;
    }

    .whatsapp img{width:35px;}
   
  </style>
</head>
<body>

    <?php
include 'header.php';
?>


 

   <!-- HEADER 
  <header>
    <div class="container nav-container">
      <div class="logo-area">
        <i class="fas fa-church logo-icon"></i>
        <span class="logo-text">Siège <span>Vèpka</span></span>
      </div>
      <ul class="nav-links" id="navLinks">
        <li><a href="#accueil">Accueil</a></li>
        <li><a href="#a-propos">À propos</a></li>
        <li><a href="#responsables">Responsables</a></li>
        <li><a href="#ministeres">Ministères</a></li>
        <li><a href="#activites">Activités</a></li>
        <li><a href="#galerie">Galerie</a></li>
        <li><a href="#apprentissage">Apprentissage</a></li>
        <li><a href="#priere">Demande de prière</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>
      -->

  <!-- HERO -->
  <section class="hero" id="accueil">
    <div class="hero-overlay"></div>
    <div class="hero-content">
     <!-- <div class="hero-logo"><i class="fas fa-cross"></i></div> -->
      <h1>Paroisse N°5 <span>Saint Adjagunmokadi</span></h1>
      <div class="hero-sub">Foi – Prière – Sainteté – Communion</div>
      <div class="hero-buttons">
        <a href="#a-propos" class="btn btn-primary"><i class="fas fa-chevron-right"></i> Découvrir la paroisse</a>
        <a href="#activites" class="btn btn-outline"><i class="fas fa-praying-hands"></i> Nos activités</a>
      </div>
      <div class="hero-verse">
        <i class="fas fa-quote-left" style="margin-right: 8px; opacity:0.7;"></i> 
        Car là où deux ou trois sont assemblés en mon nom, je suis au milieu d'eux. – Matthieu 18:20
      </div>
    </div>
  </section>

  <!-- À PROPOS -->
  <section id="a-propos" class="bg-soft">
    <div class="container">
      <h2 class="section-title">À <span>propos</span></h2>
      <div class="about-grid">
        <div>
          <h3 style="color:#0D47A1; font-size:1.8rem;">Histoire</h3>
          <p style="margin:16px 0; color:#334155;">La Paroisse Saint Adjagunmokadi est une communauté chrétienne vivante, ancrée dans la foi et la tradition des Églises des Chérubins et Séraphins du Bénin. Fondée sur la prière et la sainteté, elle rayonne par son engagement spirituel et son dynamisme.</p>
          <h3 style="color:#0D47A1; font-size:1.8rem; margin-top:30px;">Vision</h3>
          <p style="color:#334155;">Former une communauté chrétienne forte fondée sur la prière, la sainteté et la parole de Dieu, pour impacter notre génération.</p>
        </div>
        <div>
          <h3 style="color:#0D47A1; font-size:1.8rem;">Mission</h3>
          <div class="card-grid" style="margin-top:12px;">
            <div class="card"><i class="fas fa-bible card-icon"></i><h4>Évangélisation</h4><p>Annoncer la bonne nouvelle avec audace et amour.</p></div>
            <div class="card"><i class="fas fa-user-graduate card-icon"></i><h4>Formation spirituelle</h4><p>Enseigner la parole pour une foi solide.</p></div>
            <div class="card"><i class="fas fa-hands-helping card-icon"></i><h4>Accompagnement</h4><p>Écoute, conseil et soutien des fidèles.</p></div>
            <div class="card"><i class="fas fa-hand-holding-heart card-icon"></i><h4>Actions sociales</h4><p>Servir la communauté par des œuvres de compassion.</p></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RESPONSABLES -->
  <section id="responsables">
    <div class="container">
      <h2 class="section-title">Nos <span>responsables</span></h2>
      <div class="card-grid">
        <div class="card resp-card"><img src="" alt=""><h3>SN</h3><div class="role">Responsable paroissial</div><p>Serviteur dévoué, homme de prière et d'enseignement.</p></div>
        <div class="card resp-card"><img src="" alt=""><h3>Frère David</h3><div class="role">Secrétaire</div><p>Organisation et rigueur au service de la paroisse.</p></div>
        <div class="card resp-card"><img src="" alt=""><h3>Frère Samuel</h3><div class="role">Trésorier</div><p>Intégrité et gestion transparente des ressources.</p></div>
        <div class="card resp-card"><img src="" alt=""><h3>Frère Marc</h3><div class="role">Responsable jeunesse</div><p>Dynamisme et vision pour la jeune génération.</p></div>
        <div class="card resp-card"><img src="" alt=""><h3>Sœur Esther</h3><div class="role">Responsable chorale</div><p>Passionnée par l'adoration et l'harmonie.</p></div>
      </div>
    </div>
  </section>

  <!-- MINISTÈRES -->
  <section id="ministeres" class="bg-soft">
    <div class="container">
      <h2 class="section-title">Nos <span>ministères</span></h2>
      <div class="card-grid">
        <div class="card"><i class="fas fa-music card-icon"></i><h3>Chorale</h3><p>Animation des cultes par le chant et l'adoration.</p></div>
        <div class="card"><i class="fas fa-users card-icon"></i><h3>Jeunesse</h3><p>Encadrement spirituel et social des jeunes.</p></div>
        <div class="card"><i class="fas fa-venus card-icon"></i><h3>Femmes chrétiennes</h3><p>Formation, entraide et actions sociales.</p></div>
        <div class="card"><i class="fas fa-mars card-icon"></i><h3>Hommes chrétiens</h3><p>Leadership et accompagnement fraternel.</p></div>
        <div class="card"><i class="fas fa-book-open card-icon"></i><h3>École biblique</h3><p>Formation spirituelle approfondie.</p></div>
      </div>
    </div>
  </section>

  <!-- ACTIVITÉS -->
  <section id="activites">
    <div class="container">
      <h2 class="section-title">Nos <span>activités</span></h2>
      <table class="schedule-table">
        <thead><tr><th>Activité</th><th>Horaire</th></tr></thead>
        <tbody>
          <tr><td><i class="fas fa-church" style="margin-right:10px;color:#0D47A1;"></i> Cultes dominicaux</td><td>Dimanche 8h30 & 10h00</td></tr>
          <tr><td><i class="fas fa-book" style="margin-right:10px;color:#0D47A1;"></i> Études bibliques</td><td>Mercredi 19h00</td></tr>
          <tr><td><i class="fas fa-pray" style="margin-right:10px;color:#0D47A1;"></i> Réunions de prière</td><td>Vendredi 18h30</td></tr>
          <tr><td><i class="fas fa-moon" style="margin-right:10px;color:#0D47A1;"></i> Veillées</td><td>1er samedi du mois 20h00</td></tr>
          <tr><td><i class="fas fa-bullhorn" style="margin-right:10px;color:#0D47A1;"></i> Évangélisation</td><td>Samedi 15h00 (contactez-nous)</td></tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- GALERIE -->
  <section id="galerie" class="bg-soft">
    <div class="container">
      <h2 class="section-title">Galerie <span>photo & vidéo</span></h2>
      <div class="gallery-grid">
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/adjagunmokadi_1.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/adjagunmokadi_7.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmakadi_1.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_2.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_3.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_4.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_5.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_6.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_7.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_8.jpg" alt=""></div>
        <div class="gallery-item"><img src="paroisse/adjagunmokadi/images/chorale_adjagunmokadi_10.jpg" alt=""></div>

      </div>
      <p style="text-align:center; margin-top:20px; color:#64748b;"><i class="fas fa-expand-arrows-alt"></i> Cliquez pour ouvrir en lightbox (effet zoom)</p>
    </div>
  </section>

  <!-- APPRENTISSAGE 
  <section id="apprentissage">
    <div class="container">
      <h2 class="section-title">Apprentissage <span>spirituel</span></h2>
      <div class="card-grid">
        <div class="card"><i class="fas fa-torah card-icon"></i><h3>Ancien Testament</h3><p>Parcours à travers la Genèse, les Psaumes et les prophètes.</p></div>
        <div class="card"><i class="fas fa-bible card-icon"></i><h3>Nouveau Testament</h3><p>Évangiles, Actes, Épîtres et Apocalypse.</p></div>
        <div class="card"><i class="fas fa-seedling card-icon"></i><h3>Vie chrétienne</h3><p>Discipleship, prière et sainteté au quotidien.</p></div>
        <div class="card"><i class="fas fa-cross card-icon"></i><h3>Doctrine</h3><p>Fondements de la foi chrétienne.</p></div>
        <div class="card"><i class="fas fa-hands-praying card-icon"></i><h3>Priere & Sainteté</h3><p>Approfondir la vie de prière et la sanctification.</p></div>
      </div>
    </div>
  </section>
-->
  <!-- DEMANDE DE PRIERE -->
  <section id="priere" class="bg-soft">
    <div class="container" style="max-width:720px;">
      <h2 class="section-title">Demande de <span>prière</span></h2>
      <p style="text-align:center; margin-bottom:30px;">Nous sommes avec vous dans la prière. Confiez-nous votre fardeau.</p>
      <form>
        <div class="form-group"><label>Nom complet</label><input class="form-control" placeholder="Votre nom" required></div>
        <div class="form-group"><label>Téléphone</label><input class="form-control" placeholder="+229 90 00 00 00"></div>
        <div class="form-group"><label>Email</label><input class="form-control" type="email" placeholder="exemple@email.com"></div>
        <div class="form-group"><label>Sujet de prière</label><input class="form-control" placeholder="Sujet principal"></div>
        <div class="form-group"><label>Message</label><textarea class="form-control" rows="5" placeholder="Décrivez votre demande..."></textarea></div>
        <button class="btn btn-primary" style="width:100%; justify-content:center;"><i class="fas fa-praying-hands"></i> Envoyer ma demande</button>
      </form>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container">
      <h2 class="section-title">Nous <span>contacter</span></h2>
      <div class="contact-grid">
        <div>
          <p><i class="fas fa-map-pin" style="color:#0D47A1; width:24px;"></i> Cotonou, Bénin – Quartier Vèpka</p>
          <p><i class="fas fa-phone-alt" style="color:#0D47A1; width:24px;"></i> +229 90 00 00 00</p>
          <p><i class="fas fa-envelope" style="color:#0D47A1; width:24px;"></i> contact@siegevepka.org</p>
          <div class="footer-social" style="margin-top:20px;">
            <a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-youtube"></i></a><a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <div style="margin-top:24px; border-radius:16px; overflow:hidden; height:200px; background:#e2e8f0; display:flex; align-items:center; justify-content:center; color:#64748b;"><i class="fas fa-map-marked-alt" style="font-size:2rem;"></i> Google Maps</div>
        </div>
        <div>
          <form>
            <div class="form-group"><label>Votre nom</label><input class="form-control" placeholder="Nom"></div>
            <div class="form-group"><label>Email</label><input class="form-control" type="email" placeholder="Email"></div>
            <div class="form-group"><label>Message</label><textarea class="form-control" rows="5" placeholder="Votre message..."></textarea></div>
            <button class="btn btn-primary" style="width:100%; justify-content:center;"><i class="fas fa-paper-plane"></i> Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <a class="whatsapp" href="https://wa.me/2290156273882" target="_blank">
  <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png">
</a>


 <?php
include 'footer.php';
?>


  <!-- FOOTER 
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div><h4><i class="fas fa-church" style="margin-right:8px;"></i> Siège Vèpka</h4><p>Église Chrétienne des Chérubins et Séraphins du Bénin</p></div>
        <div><h4>Liens rapides</h4><p><a href="#accueil" style="color:#94a3b8;">Accueil</a><br><a href="#a-propos" style="color:#94a3b8;">À propos</a><br><a href="#responsables" style="color:#94a3b8;">Responsables</a></p></div>
        <div><h4>Nous suivre</h4><div class="footer-social"><a href="#"><i class="fab fa-facebook"></i></a><a href
  -->