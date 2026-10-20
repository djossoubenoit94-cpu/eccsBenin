<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact · Vèpka CCS Bénin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8f6f2;
            color: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 2rem;
        }

        .contact-section {
            max-width: 1280px;
            width: 100%;
            background: #ffffff;
            border-radius: 48px;
            box-shadow: 0 30px 80px -20px rgba(0, 0, 0, 0.12), 0 10px 30px -10px rgba(0, 0, 0, 0.05);
            padding: 3.5rem 4rem;
            position: relative;
            overflow: hidden;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -150px;
            right: -150px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(245, 197, 66, 0.06) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        .contact-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(245, 197, 66, 0.04) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* En-tête */
        .contact-header {
            text-align: center;
            margin-bottom: 3.5rem;
            position: relative;
            z-index: 1;
        }

        .contact-header .badge {
            display: inline-block;
            background: rgba(245, 197, 66, 0.12);
            color: #b8860b;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 0.4rem 1.2rem;
            border-radius: 40px;
            margin-bottom: 1rem;
            border: 1px solid rgba(245, 197, 66, 0.15);
        }

        .contact-header h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 3.2rem;
            font-weight: 700;
            color: #141824;
            letter-spacing: -0.5px;
        }

        .contact-header h2 span {
            color: #f5c542;
        }

        .contact-header p {
            font-size: 1.1rem;
            color: #6a6a7a;
            max-width: 520px;
            margin: 0.5rem auto 0;
            font-weight: 300;
            line-height: 1.7;
        }

        .contact-header .ornament {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 1rem;
        }

        .contact-header .ornament span {
            display: block;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #f5c542, transparent);
            border-radius: 4px;
        }

        /* Grille principale */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 3.5rem;
            position: relative;
            z-index: 1;
        }

        /* --- Informations de contact --- */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.8rem;
        }

        .contact-info .info-card {
            background: #faf9f7;
            border-radius: 24px;
            padding: 1.8rem 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.03);
            display: flex;
            align-items: flex-start;
            gap: 1.2rem;
        }

        .contact-info .info-card:hover {
            background: #ffffff;
            border-color: rgba(245, 197, 66, 0.2);
            box-shadow: 0 12px 40px -12px rgba(0, 0, 0, 0.06);
            transform: translateY(-2px);
        }

        .contact-info .info-card .icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            background: linear-gradient(135deg, rgba(245, 197, 66, 0.12), rgba(245, 197, 66, 0.04));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #f5c542;
        }

        .contact-info .info-card .text h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
            color: #141824;
        }

        .contact-info .info-card .text p {
            font-size: 0.95rem;
            color: #5a5a6a;
            line-height: 1.5;
            font-weight: 400;
        }

        .contact-info .info-card .text a {
            color: #5a5a6a;
            text-decoration: none;
            transition: 0.2s;
        }

        .contact-info .info-card .text a:hover {
            color: #f5c542;
        }

        /* Réseaux sociaux */
        .social-section {
            margin-top: 0.5rem;
        }

        .social-section h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #141824;
        }

        .social-links {
            display: flex;
            gap: 0.8rem;
            flex-wrap: wrap;
        }

        .social-links a {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.2rem;
            border-radius: 60px;
            background: #faf9f7;
            color: #2a2a3a;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.04);
        }

        .social-links a i {
            font-size: 1.1rem;
        }

        .social-links a:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px -8px rgba(0, 0, 0, 0.08);
        }

        .social-links a.facebook:hover {
            background: #1877f2;
            color: #fff;
            border-color: #1877f2;
        }

        .social-links a.youtube:hover {
            background: #ff0000;
            color: #fff;
            border-color: #ff0000;
        }

        .social-links a.instagram:hover {
            background: linear-gradient(135deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
            color: #fff;
            border-color: #bc1888;
        }

        .social-links a.whatsapp:hover {
            background: #25d366;
            color: #fff;
            border-color: #25d366;
        }

        /* --- Formulaire --- */
        .contact-form-wrapper {
            background: #faf9f7;
            border-radius: 32px;
            padding: 2.5rem;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .contact-form-wrapper h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: #141824;
        }

        .contact-form-wrapper .form-subtitle {
            font-size: 0.95rem;
            color: #6a6a7a;
            margin-bottom: 1.8rem;
            font-weight: 300;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #2a2a3a;
            margin-bottom: 0.4rem;
            letter-spacing: 0.3px;
        }

        .form-group label .required {
            color: #e74c3c;
            margin-left: 2px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 2px solid #e8e6e2;
            border-radius: 16px;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            background: #ffffff;
            transition: all 0.3s ease;
            color: #1a1a2e;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #f5c542;
            outline: none;
            box-shadow: 0 0 0 4px rgba(245, 197, 66, 0.08);
        }

        .form-group textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group .btn-submit {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 60px;
            background: linear-gradient(135deg, #f5c542, #d4a020);
            color: #0e0e1a;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.35s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: 'Inter', sans-serif;
            margin-top: 0.5rem;
            box-shadow: 0 12px 35px -8px rgba(245, 197, 66, 0.3);
        }

        .form-group .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 50px -10px rgba(245, 197, 66, 0.4);
            background: linear-gradient(135deg, #ffd966, #f5c542);
        }

        .form-group .btn-submit:active {
            transform: scale(0.98);
        }

        .form-group .btn-submit i {
            font-size: 1rem;
        }

        /* Message de succès (caché par défaut) */
        .success-message {
            display: none;
            background: #eafaf1;
            border: 1.5px solid #2ecc71;
            border-radius: 16px;
            padding: 1.2rem 1.5rem;
            color: #1a6e3a;
            font-weight: 500;
            margin-top: 1rem;
            align-items: center;
            gap: 12px;
        }

        .success-message.show {
            display: flex;
        }

        .success-message i {
            font-size: 1.4rem;
            color: #2ecc71;
        }

        /* --- Responsive --- */
        @media (max-width: 1024px) {
            .contact-section {
                padding: 2.5rem 2rem;
            }

            .contact-grid {
                gap: 2.5rem;
            }
        }

        @media (max-width: 900px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .contact-section {
                border-radius: 32px;
                padding: 2rem 1.5rem;
            }

            .contact-header h2 {
                font-size: 2.6rem;
            }

            .contact-form-wrapper {
                padding: 1.8rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 1rem;
            }

            .contact-section {
                padding: 1.5rem 1rem;
                border-radius: 24px;
            }

            .contact-header h2 {
                font-size: 2rem;
            }

            .contact-info .info-card {
                padding: 1.2rem 1.2rem;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .contact-info .info-card .icon {
                width: 44px;
                height: 44px;
                min-width: 44px;
                font-size: 1rem;
            }

            .social-links a {
                padding: 0.5rem 1rem;
                font-size: 0.8rem;
            }

            .contact-form-wrapper {
                padding: 1.2rem;
            }
        }
    </style>
</head>
<body>

 <?php
include 'header.php';
?>


    

    <section class="contact-section" id="contact">
        <!-- En-tête -->
        <div class="contact-header">
            <div class="badge"><i class="fas fa-envelope"></i> &nbsp;Restons connectés</div>
            <h2>Prenez <span>contact</span> avec nous</h2>
            <p>Nous sommes là pour vous écouter, vous soutenir et prier avec vous. Écrivez-nous ou rejoignez-nous lors de nos rencontres.</p>
            <div class="ornament">
                <span></span>
                <span style="width:20px;"></span>
                <span></span>
            </div>
        </div>

       <!-- Grille Contact + Formulaire -->
        <div class="contact-grid">
            <!-- Colonne gauche : Infos -->
            <div class="contact-info">
                <!-- Carte 1 : Adresse -->
                <div class="info-card">
                    <div class="icon"><i class="fas fa-location-dot"></i></div>
                    <div class="text">
                        <h4>Notre adresse</h4>
                        <p>Paroisse Siège Vèpka<br />Cotonou, Bénin</p>
                    </div>
                </div>

                <!-- Carte 2 : Téléphone -->
                <div class="info-card">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <div class="text">
                        <h4>Appelez-nous</h4>
                        <p><a href="tel:+22997000000">+229 97 00 00 00</a></p>
                        <p style="font-size:0.85rem; color:#888;">Lun–Ven : 8h–18h</p>
                    </div>
                </div>

                <!-- Carte 3 : Email 
                <div class="info-card">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <div class="text">
                        <h4>Écrivez-nous</h4>
                        <p><a href="mailto:veepka@ccs.bj">veepka@ccs.bj</a></p>
                    </div>
                </div>

                 Carte 4 : Horaires des cultes 
                <div class="info-card">
                    <div class="icon"><i class="fas fa-clock"></i></div>
                    <div class="text">
                        <h4>Horaires des cultes</h4>
                        <p>Dimanche : 9h00 – 12h00<br />Mercredi : 18h30 – 20h00 (Veillée)</p>
                    </div>
                </div>

                <!-- Réseaux sociaux -->
                <div class="social-section">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" class="youtube"><i class="fab fa-youtube"></i> YouTube</a>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
            </div>

            <!-- Colonne droite : Formulaire -->
            <div class="contact-form-wrapper">
                <h3>Envoyez-nous un message</h3>
                <p class="form-subtitle">Votre message sera traité avec bienveillance et discrétion.</p>

                <form id="contactForm" onsubmit="return handleSubmit(event)">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom complet <span class="required">*</span></label>
                            <input type="text" id="nom" name="nom" placeholder="Jean Dupont" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" placeholder="jean@exemple.com" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" placeholder="+229 97 00 00 00" />
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet <span class="required">*</span></label>
                        <select id="sujet" name="sujet" required>
                            <option value="">-- Choisissez un sujet --</option>
                            <option value="priere">Demande de prière</option>
                            <option value="information">Demande d'information</option>
                            <option value="temoignage">Partager un témoignage</option>
                            <option value="visite">Visite pastorale</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message <span class="required">*</span></label>
                        <textarea id="message" name="message" placeholder="Écrivez votre message ici..." required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Envoyer le message
                        </button>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit">
                            <a href="index.php" style="text-decoration: none;"> Retour</a>
                        </button>
                    </div>

                    <!-- Message de succès -->
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i>
                        Votre message a été envoyé avec succès ! Nous vous répondrons dans les meilleurs délais.
                    </div>
                </form>
            </div>
        </div>
    </section>

 <?php
include 'footer.php';
?>

    <script>
        function handleSubmit(e) {
            e.preventDefault();

            // Simulation d'envoi (remplacez par un vrai appel AJAX)
            const btn = document.querySelector('.btn-submit');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
            btn.disabled = true;

            setTimeout(() => {
                // Réinitialiser le formulaire
                document.getElementById('contactForm').reset();
                btn.innerHTML = originalText;
                btn.disabled = false;

                // Afficher le message de succès
                const successMsg = document.getElementById('successMessage');
                successMsg.classList.add('show');

                // Cacher après 6 secondes
                setTimeout(() => {
                    successMsg.classList.remove('show');
                }, 6000);
            }, 1500);

            return false;
        }
    </script>

</body>
</html>