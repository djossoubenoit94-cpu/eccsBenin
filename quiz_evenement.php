<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Événements Bibliques</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a2a3a, #2c3e50);
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 28px;
            padding: 40px 35px;
            max-width: 750px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            transition: all 0.3s;
        }
        h1 {
            font-size: 2.2rem;
            color: #1a2a3a;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }
        h1 span {
            background: #d4a86a;
            color: #1a2a3a;
            font-size: 0.9rem;
            padding: 2px 16px;
            border-radius: 40px;
            font-weight: 600;
        }
        .subhead {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #5a6a7a;
            font-weight: 500;
            border-bottom: 2px solid #eef2f6;
            padding-bottom: 14px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            gap: 8px;
        }
        .level-badge {
            background: #e8edf2;
            padding: 4px 18px;
            border-radius: 40px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .level-badge.facile {
            background: #d4edda;
            color: #155724;
        }
        .level-badge.moyen {
            background: #fff3cd;
            color: #856404;
        }
        .level-badge.difficile {
            background: #f8d7da;
            color: #721c24;
        }
        #question {
            font-size: 1.45rem;
            font-weight: 600;
            color: #1a2a3a;
            margin-bottom: 24px;
            line-height: 1.4;
            min-height: 80px;
        }
        #options {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
        }
        .opt-btn {
            background: #f6f8fa;
            border: 2px solid #dce1e8;
            border-radius: 16px;
            padding: 14px 20px;
            font-size: 1.05rem;
            font-weight: 500;
            color: #1a2a3a;
            cursor: pointer;
            transition: all 0.2s;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .opt-btn:hover:not(.disabled) {
            background: #eaf0f6;
            border-color: #b0c0d0;
            transform: scale(1.01);
        }
        .opt-btn .letter {
            background: #dce1e8;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #1a2a3a;
            flex-shrink: 0;
            transition: 0.2s;
        }
        .opt-btn.correct {
            border-color: #28a745;
            background: #d4edda;
        }
        .opt-btn.correct .letter {
            background: #28a745;
            color: #fff;
        }
        .opt-btn.wrong {
            border-color: #dc3545;
            background: #f8d7da;
        }
        .opt-btn.wrong .letter {
            background: #dc3545;
            color: #fff;
        }
        .opt-btn.disabled {
            cursor: default;
            opacity: 0.7;
        }
        .opt-btn.disabled:hover {
            transform: none;
        }
        #feedback {
            background: #f8f9fa;
            border-radius: 16px;
            padding: 16px 20px;
            margin-bottom: 20px;
            border-left: 6px solid #d4a86a;
            display: none;
            font-size: 1rem;
        }
        #feedback .verse {
            display: block;
            margin-top: 8px;
            font-style: italic;
            color: #5a6a7a;
            font-weight: 500;
        }
        #feedback .verse i {
            color: #d4a86a;
            margin-right: 6px;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }
        .btn {
            background: #2c3e50;
            border: none;
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            padding: 12px 32px;
            border-radius: 40px;
            cursor: pointer;
            transition: 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn:hover:not(:disabled) {
            background: #1a2a3a;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
        .btn:disabled {
            opacity: 0.4;
            cursor: not-allowed;
            transform: none;
        }
        .btn-secondary {
            background: #dce1e8;
            color: #1a2a3a;
        }
        .btn-secondary:hover:not(:disabled) {
            background: #c8d0da;
        }
        .btn-gold {
            background: #d4a86a;
            color: #1a2a3a;
        }
        .btn-gold:hover:not(:disabled) {
            background: #c49650;
        }
        #score-final {
            background: #f0f4f8;
            border-radius: 24px;
            padding: 28px 24px;
            margin-top: 20px;
            display: none;
            text-align: center;
            border: 2px solid #dce1e8;
        }
        #score-final h2 {
            font-size: 2.8rem;
            color: #1a2a3a;
        }
        #score-final .detail {
            font-size: 1.1rem;
            color: #3a4a5a;
            margin: 6px 0 12px;
        }
        #score-final .badge {
            display: inline-block;
            background: #d4a86a;
            color: #1a2a3a;
            font-weight: 700;
            padding: 6px 24px;
            border-radius: 40px;
            font-size: 0.95rem;
        }
        #score-final .message {
            margin: 14px 0 18px;
            font-style: italic;
            color: #5a6a7a;
        }
        .footer {
            text-align: center;
            margin-top: 18px;
            font-size: 0.8rem;
            color: #8a9aaa;
            border-top: 1px solid #eef2f6;
            padding-top: 16px;
        }
        .footer i {
            color: #d4a86a;
        }
        @media (max-width: 480px) {
            .container {
                padding: 24px 16px;
            }
            h1 {
                font-size: 1.6rem;
            }
            #question {
                font-size: 1.2rem;
            }
            .opt-btn {
                padding: 12px 14px;
                font-size: 0.95rem;
            }
            .btn {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
 <?php
include 'header.php';
?>



    <div class="container">

        <h1 style="margin-top: 50px;">📅 Événements Bibliques <span>40 Q</span></h1>
        <div class="subhead">
            <span id="counter">Question 1 / 40</span>
            <span id="levelDisplay" class="level-badge">Facile</span>
            <span id="scoreDisplay">✅ 0 / 0</span>
        </div>

        <div id="question">Chargement...</div>

        <div id="options"></div>

        <div id="feedback">
            <span id="feedbackMsg"></span>
            <span class="verse"><i>📜</i> <span id="verseRef"></span></span>
        </div>

        <div class="actions">
            <button class="btn btn-secondary" id="prevBtn" disabled>◀ Précédent</button>
            <button class="btn" id="nextBtn">Suivant ▶</button>
            <button class="btn btn-gold" id="submitBtn" style="display:none;">📊 Voir le score</button>
        </div>

        <div id="score-final">
            <h2 id="finalScore">0 / 40</h2>
            <div class="detail" id="finalDetail">Vous avez répondu correctement à 0 question.</div>
            <div class="badge" id="finalBadge">📖 À revoir</div>
            <div class="message" id="finalMessage"></div>
            <button class="btn" id="restartBtn">🔄 Recommencer le quiz</button>
        </div>

        <div class="footer">
            <i>✝</i> « Ta parole est une lampe à mes pieds » — Psaume 119:105
        </div>
        <a href="formation.php" style="text-decoration: none;color: #283ba7;">Retour</a>

    </div>

    <script>
        const questions = [{
            question: "Quel événement marque le début de la Bible ?",
            options: ["La création du monde", "La naissance d'Abraham", "L'Exode", "Le Déluge"],
            correct: "La création du monde",
            niveau: "facile",
            ref: "Genèse 1:1"
        }, {
            question: "Combien de jours Dieu a-t-Il pris pour créer le monde ?",
            options: ["5 jours", "6 jours", "7 jours", "10 jours"],
            correct: "6 jours",
            niveau: "facile",
            ref: "Genèse 2:2"
        }, {
            question: "Quel événement a détruit toute vie sur terre sauf Noé et sa famille ?",
            options: ["Le Déluge", "Un tremblement de terre", "Une famine", "Une guerre"],
            correct: "Le Déluge",
            niveau: "facile",
            ref: "Genèse 6:17"
        }, {
            question: "Combien de jours le Déluge a-t-il duré ?",
            options: ["40 jours et 40 nuits", "7 jours", "100 jours", "150 jours"],
            correct: "40 jours et 40 nuits",
            niveau: "facile",
            ref: "Genèse 7:12"
        }, {
            question: "Quel événement marque la sortie d'Israël d'Égypte ?",
            options: ["L'Exode", "La traversée du Jourdain", "La conquête de Canaan", "Le retour de captivité"],
            correct: "L'Exode",
            niveau: "facile",
            ref: "Exode 12:40-41"
        }, {
            question: "Quel événement a divisé la mer Rouge ?",
            options: ["Moïse a frappé la mer", "Dieu a envoyé un vent", "Josué a prié", "Aaron a levé sa verge"],
            correct: "Moïse a frappé la mer",
            niveau: "facile",
            ref: "Exode 14:21"
        }, {
            question: "Où Jésus est-Il né ?",
            options: ["Jérusalem", "Bethléem", "Nazareth", "Capharnaüm"],
            correct: "Bethléem",
            niveau: "facile",
            ref: "Matthieu 2:1"
        }, {
            question: "Quel événement a marqué la naissance de Jésus ?",
            options: ["Une étoile", "Un tremblement de terre", "Un orage", "Un feu"],
            correct: "Une étoile",
            niveau: "facile",
            ref: "Matthieu 2:2"
        }, {
            question: "Où Jésus a-t-Il été crucifié ?",
            options: ["Golgotha", "Sion", "Béthel", "Jéricho"],
            correct: "Golgotha",
            niveau: "facile",
            ref: "Matthieu 27:33"
        }, {
            question: "Quel événement majeur a suivi la crucifixion ?",
            options: ["La résurrection", "La Pentecôte", "L'ascension", "La transfiguration"],
            correct: "La résurrection",
            niveau: "facile",
            ref: "Matthieu 28:5-6"
        }, {
            question: "Quel événement s'est produit le troisième jour après la crucifixion ?",
            options: ["La résurrection", "La Pentecôte", "L'ascension", "La transfiguration"],
            correct: "La résurrection",
            niveau: "facile",
            ref: "Luc 24:6-7"
        }, {
            question: "Quel événement marque la descente du Saint-Esprit ?",
            options: ["La Pentecôte", "L'ascension", "La transfiguration", "La résurrection"],
            correct: "La Pentecôte",
            niveau: "facile",
            ref: "Actes 2:1-4"
        }, {
            question: "Combien de jours après Pâque la Pentecôte est-elle célébrée ?",
            options: ["40 jours", "50 jours", "60 jours", "70 jours"],
            correct: "50 jours",
            niveau: "facile",
            ref: "Actes 2:1"
        }, {
            question: "Quel événement a marqué l'entrée d'Israël en Terre Promise ?",
            options: ["La traversée du Jourdain", "La traversée de la mer Rouge", "La conquête de Jéricho",
                "La chute de Babylone"
            ],
            correct: "La traversée du Jourdain",
            niveau: "facile",
            ref: "Josué 3:14-17"
        }, {
            question: "Quel événement a fait tomber les murs de Jéricho ?",
            options: ["Le son des trompettes", "La prière de Josué", "Le feu du ciel", "Le cri du peuple"],
            correct: "Le cri du peuple",
            niveau: "facile",
            ref: "Josué 6:20"
        }, {
            question: "Quel événement a sauvé Daniel de la fosse aux lions ?",
            options: ["Dieu a envoyé un ange", "Daniel a prié", "Le roi l'a libéré", "Les lions ont dormi"],
            correct: "Dieu a envoyé un ange",
            niveau: "facile",
            ref: "Daniel 6:22"
        }, {
            question: "Quel événement a marqué l'ascension de Jésus ?",
            options: ["Il est monté au ciel", "Il est parti en voyage", "Il a disparu", "Il est retourné à Nazareth"],
            correct: "Il est monté au ciel",
            niveau: "facile",
            ref: "Actes 1:9"
        }, {
            question: "Quel événement a eu lieu à la transfiguration ?",
            options: ["Jésus a été glorifié", "Jésus a été tenté", "Jésus a prié", "Jésus a parlé aux apôtres"],
            correct: "Jésus a été glorifié",
            niveau: "facile",
            ref: "Matthieu 17:2"
        }, {
            question: "Quel événement a sauvé Joseph de la famine ?",
            options: ["Il a interprété les rêves du pharaon", "Il a construit des greniers", "Il a demandé de l'aide",
                "Il est allé en Égypte"
            ],
            correct: "Il a interprété les rêves du pharaon",
            niveau: "facile",
            ref: "Genèse 41:14-16"
        }, {
            question: "Quel événement a marqué la remise de la Loi ?",
            options: ["Moïse a reçu les tables", "Moïse a parlé à Dieu", "Aaron a fait un veau d'or",
                "Le peuple a murmuré"
            ],
            correct: "Moïse a reçu les tables",
            niveau: "facile",
            ref: "Exode 19:20"
        }, {
            question: "Quel événement a conduit à la dispersion de la tour de Babel ?",
            options: ["La confusion des langues", "La colère de Dieu", "Un tremblement de terre", "Une guerre"],
            correct: "La confusion des langues",
            niveau: "moyen",
            ref: "Genèse 11:7-8"
        }, {
            question: "Quel événement a marqué l'appel d'Abraham ?",
            options: ["Dieu lui a parlé", "Il a vu une étoile", "Il a reçu une vision", "Il a entendu une voix"],
            correct: "Dieu lui a parlé",
            niveau: "moyen",
            ref: "Genèse 12:1-3"
        }, {
            question: "Quel événement a marqué l'alliance de Dieu avec Noé ?",
            options: ["L'arc-en-ciel", "Le Déluge", "L'arche", "La colombe"],
            correct: "L'arc-en-ciel",
            niveau: "moyen",
            ref: "Genèse 9:13"
        }, {
            question: "Quel événement a marqué la naissance de Moïse ?",
            options: ["Il a été sauvé des eaux", "Il a été trouvé dans un panier", "Il a été adopté par la fille du pharaon",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Exode 2:5-10"
        }, {
            question: "Quel événement a marqué la Pâque juive ?",
            options: ["Le passage de l'ange de la mort", "La sortie d'Égypte", "Le sacrifice de l'agneau",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Exode 12:12-13"
        }, {
            question: "Quel événement a marqué la traversée de la mer Rouge ?",
            options: ["La délivrance d'Israël", "La destruction de l'armée égyptienne", "Un miracle de Dieu",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Exode 14:27-28"
        }, {
            question: "Quel événement a marqué la chute de Jérusalem ?",
            options: ["Le siège de Nabuchodonosor", "La destruction du Temple", "L'exil de Juda", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "2 Rois 25:8-11"
        }, {
            question: "Quel événement a marqué le retour de captivité ?",
            options: ["La reconstruction du Temple", "Le retour de Cyrus", "La restauration de Jérusalem",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Esdras 1:1-3"
        }, {
            question: "Quel événement a marqué la naissance de Jean-Baptiste ?",
            options: ["Un ange a annoncé sa naissance", "Ses parents étaient âgés", "Il serait rempli d'Esprit",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Luc 1:13-17"
        }, {
            question: "Quel événement a marqué le baptême de Jésus ?",
            options: ["Le ciel s'est ouvert", "L'Esprit est descendu", "Une voix a parlé", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "moyen",
            ref: "Marc 1:10-11"
        }, {
            question: "Quel événement a marqué la multiplication des pains ?",
            options: ["Jésus a nourri 5000 personnes", "Les disciples ont distribué la nourriture", "Il y avait 12 paniers de restes",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Jean 6:10-13"
        }, {
            question: "Quel événement a marqué la résurrection de Lazare ?",
            options: ["Jésus l'a rappelé à la vie", "Il était mort depuis 4 jours", "Beaucoup ont cru en Jésus",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Jean 11:43-45"
        }, {
            question: "Quel événement a marqué l'entrée triomphale de Jésus à Jérusalem ?",
            options: ["Jésus est entré sur un âne", "La foule criait Hosanna", "Jésus a pleuré sur Jérusalem",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Matthieu 21:1-11"
        }, {
            question: "Quel événement a marqué la dernière Cène ?",
            options: ["Jésus a institué l'Eucharistie", "Jésus a annoncé sa trahison", "Jésus a lavé les pieds des disciples",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Jean 13:1-17"
        }, {
            question: "Quel événement a marqué la résurrection de Jésus ?",
            options: ["Le tombeau était vide", "Jésus est apparu à Marie", "Les gardes ont tremblé", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Matthieu 28:1-8"
        }, {
            question: "Quel événement a marqué l'Ascension ?",
            options: ["Jésus est monté au ciel", "Il a béni ses disciples", "Il est assis à la droite du Père",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 1:9-11"
        }, {
            question: "Quel événement a marqué la Pentecôte ?",
            options: ["Le Saint-Esprit est descendu", "Les apôtres ont parlé en langues", "3000 personnes se sont converties",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 2:1-41"
        }, {
            question: "Quel événement a marqué le martyr d'Étienne ?",
            options: ["Il a été lapidé", "Il a vu Jésus à la droite de Dieu", "Il a prié pour ses persécuteurs",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 7:55-60"
        }, {
            question: "Quel événement a marqué la conversion de Paul ?",
            options: ["Une lumière du ciel", "Une voix a parlé", "Il est devenu aveugle", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 9:3-9"
        }, {
            question: "Quel événement a marqué la libération de Pierre de prison ?",
            options: ["Un ange l'a délivré", "Les portes se sont ouvertes", "Il était enchaîné", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 12:6-10"
        }, {
            question: "Quel événement a marqué le naufrage de Paul ?",
            options: ["Le navire a fait naufrage", "Paul a été mordu par une vipère", "Personne n'a péri",
                "Toutes ces réponses"
            ],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Actes 27:27-44"
        }];

        let currentIndex = 0;
        let userAnswers = new Array(questions.length).fill(null);
        let quizCompleted = false;
        let score = 0;

        const questionEl = document.getElementById('question');
        const optionsEl = document.getElementById('options');
        const feedbackEl = document.getElementById('feedback');
        const feedbackMsg = document.getElementById('feedbackMsg');
        const verseRef = document.getElementById('verseRef');
        const counterEl = document.getElementById('counter');
        const levelDisplay = document.getElementById('levelDisplay');
        const scoreDisplay = document.getElementById('scoreDisplay');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const finalScoreEl = document.getElementById('finalScore');
        const finalDetail = document.getElementById('finalDetail');
        const finalBadge = document.getElementById('finalBadge');
        const finalMessage = document.getElementById('finalMessage');
        const scoreFinalEl = document.getElementById('score-final');
        const restartBtn = document.getElementById('restartBtn');

        function loadQuestion(index) {
            const q = questions[index];
            questionEl.textContent = q.question;
            counterEl.textContent = `Question ${index + 1} / ${questions.length}`;

            const levelMap = { facile: 'Facile', moyen: 'Moyen', difficile: 'Difficile' };
            levelDisplay.textContent = levelMap[q.niveau] || 'Facile';
            levelDisplay.className = 'level-badge ' + q.niveau;

            optionsEl.innerHTML = '';
            const letters = ['A', 'B', 'C', 'D'];
            q.options.forEach((opt, i) => {
                const btn = document.createElement('button');
                btn.className = 'opt-btn';
                if (quizCompleted) btn.classList.add('disabled');
                btn.innerHTML = `<span class="letter">${letters[i]}</span> ${opt}`;
                btn.dataset.index = i;
                btn.dataset.value = opt;

                if (userAnswers[index] !== null) {
                    const selected = userAnswers[index];
                    if (i === selected) {
                        btn.classList.add('selected');
                    }
                    if (quizCompleted) {
                        btn.classList.add('disabled');
                        if (opt === q.correct) btn.classList.add('correct');
                        else if (i === selected && opt !== q.correct) btn.classList.add('wrong');
                    }
                }

                btn.addEventListener('click', function() {
                    if (quizCompleted) return;
                    const val = this.dataset.value;
                    const idx = parseInt(this.dataset.index);
                    handleAnswer(index, idx, val);
                });
                optionsEl.appendChild(btn);
            });

            if (userAnswers[index] !== null && !quizCompleted) {
                showFeedback(index);
            } else {
                feedbackEl.style.display = 'none';
            }

            prevBtn.disabled = (index === 0);
            if (index === questions.length - 1 && !quizCompleted) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'inline-flex';
            } else {
                nextBtn.style.display = 'inline-flex';
                submitBtn.style.display = 'none';
            }

            updateScoreDisplay();
        }

        function handleAnswer(index, optIndex, value) {
            if (quizCompleted) return;
            const q = questions[index];
            userAnswers[index] = optIndex;
            const btns = optionsEl.querySelectorAll('.opt-btn');
            btns.forEach((btn, i) => {
                btn.classList.toggle('selected', i === optIndex);
            });
            showFeedback(index);
            updateScoreDisplay();
        }

        function showFeedback(index) {
            const q = questions[index];
            const answerIdx = userAnswers[index];
            if (answerIdx === null) {
                feedbackEl.style.display = 'none';
                return;
            }
            const isCorrect = (q.options[answerIdx] === q.correct);
            const msg = isCorrect ?
                `✅ Bonne réponse ! « ${q.correct} » est juste.` :
                `❌ « ${q.options[answerIdx]} » n'est pas correct. La bonne réponse est : « ${q.correct} ».`;
            feedbackMsg.textContent = msg;
            verseRef.textContent = q.ref;
            feedbackEl.style.display = 'block';
        }

        function updateScoreDisplay() {
            let correct = 0,
                answered = 0;
            for (let i = 0; i < questions.length; i++) {
                if (userAnswers[i] !== null) {
                    answered++;
                    if (questions[i].options[userAnswers[i]] === questions[i].correct) correct++;
                }
            }
            score = correct;
            scoreDisplay.textContent = `✅ ${correct} / ${answered}`;
        }

        function finishQuiz() {
            quizCompleted = true;
            let correct = 0;
            for (let i = 0; i < questions.length; i++) {
                if (userAnswers[i] !== null && questions[i].options[userAnswers[i]] === questions[i].correct) {
                    correct++;
                }
            }
            score = correct;
            const total = questions.length;

            try {
                localStorage.setItem('quizEvenements', JSON.stringify({
                    score: score,
                    total: total,
                    date: new Date().toISOString()
                }));
            } catch (e) {}

            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'none';

            finalScoreEl.textContent = `${score} / ${total}`;
            finalDetail.textContent = `Vous avez répondu correctement à ${score} question${score > 1 ? 's' : ''} sur ${total}.`;

            const pct = (score / total) * 100;
            let badgeText, messageText;
            if (pct >= 80) {
                badgeText = '🌟 Excellente connaissance des événements bibliques !';
                messageText = '« Dieu est fidèle, il ne permettra pas que vous soyez tentés au-delà de vos forces » (1 Corinthiens 10:13)';
            } else if (pct >= 60) {
                badgeText = '📖 Bonne maîtrise, continuez à approfondir !';
                messageText = '« Heureux l’homme qui trouve la sagesse » (Proverbes 3:13)';
            } else if (pct >= 40) {
                badgeText = '📚 Un bon début, continuez à étudier !';
                messageText = '« Cherchez et vous trouverez » (Matthieu 7:7)';
            } else {
                badgeText = '🕊️ N\'abandonnez pas, les événements bibliques sont fascinants !';
                messageText = '« Tu aimeras le Seigneur ton Dieu… » (Marc 12:30)';
            }
            finalBadge.textContent = badgeText;
            finalMessage.textContent = messageText;
            scoreFinalEl.style.display = 'block';

            const btns = optionsEl.querySelectorAll('.opt-btn');
            btns.forEach((btn, i) => {
                btn.classList.add('disabled');
                const val = btn.dataset.value;
                const q = questions[currentIndex];
                if (val === q.correct) btn.classList.add('correct');
                else if (userAnswers[currentIndex] !== null && i === userAnswers[currentIndex] && val !== q.correct) {
                    btn.classList.add('wrong');
                }
            });
            loadQuestion(currentIndex);
        }

        nextBtn.addEventListener('click', function() {
            if (currentIndex < questions.length - 1) {
                currentIndex++;
                loadQuestion(currentIndex);
            }
        });

        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                loadQuestion(currentIndex);
            }
        });

        submitBtn.addEventListener('click', function() {
            const unanswered = userAnswers.some(a => a === null);
            if (unanswered) {
                if (!confirm('⚠️ Vous n\'avez pas répondu à toutes les questions. Voulez-vous quand même soumettre ?')) {
                    return;
                }
            }
            finishQuiz();
        });

        restartBtn.addEventListener('click', function() {
            userAnswers = new Array(questions.length).fill(null);
            quizCompleted = false;
            currentIndex = 0;
            scoreFinalEl.style.display = 'none';
            prevBtn.style.display = 'inline-flex';
            nextBtn.style.display = 'inline-flex';
            submitBtn.style.display = 'none';
            feedbackEl.style.display = 'none';
            loadQuestion(0);
            updateScoreDisplay();
            const btns = optionsEl.querySelectorAll('.opt-btn');
            btns.forEach(b => b.classList.remove('correct', 'wrong', 'disabled'));
        });

        loadQuestion(0);
        updateScoreDisplay();

        try {
            const saved = localStorage.getItem('quizEvenements');
            if (saved) {
                const data = JSON.parse(saved);
                console.log(`📊 Dernier score enregistré : ${data.score}/${data.total} (${new Date(data.date).toLocaleDateString()})`);
            }
        } catch (e) {}

        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight' && !nextBtn.disabled && nextBtn.style.display !== 'none') {
                nextBtn.click();
            } else if (e.key === 'ArrowLeft' && !prevBtn.disabled) {
                prevBtn.click();
            } else if (e.key === 'Enter' && submitBtn.style.display !== 'none') {
                submitBtn.click();
            }
        });
    </script>
</body>



  <?php
include 'footer.php';
?>
</html>