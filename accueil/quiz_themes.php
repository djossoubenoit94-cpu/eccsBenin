<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Thèmes Bibliques</title>
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
    <div class="container">
        <h1>📖 Thèmes Bibliques <span>40 Q</span></h1>
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
        <a href="formation.php" style="text-decoration: none;color: #3b28a7;font-size: 20px;">Retour</a>

    </div>

    <script>
        const questions = [{
            question: "Que signifie le mot « Évangile » ?",
            options: ["Loi de Dieu", "Parole prophétique","Bonne nouvelle", "Histoire sainte"],
            correct: "Bonne nouvelle",
            niveau: "facile",
            ref: "Marc 1:1"
        }, {
            question: "Qu'est-ce que la foi selon Hébreux 11:1 ?",
            options: ["Une certitude", "Une assurance des choses qu'on espère", "Une connaissance", "Une expérience"],
            correct: "Une assurance des choses qu'on espère",
            niveau: "facile",
            ref: "Hébreux 11:1"
        }, {
            question: "Quel est le plus grand commandement selon Jésus ?",
            options: ["Aimer Dieu", "Aimer son prochain", "Aimer Dieu et son prochain", "Prier sans cesse"],
            correct: "Aimer Dieu et son prochain",
            niveau: "facile",
            ref: "Matthieu 22:37-39"
        }, {
            question: "Qu'est-ce que le péché selon la Bible ?",
            options: ["Une erreur", "Une transgression de la loi de Dieu", "Un manque de foi", "Un malheur"],
            correct: "Une transgression de la loi de Dieu",
            niveau: "facile",
            ref: "1 Jean 3:4"
        }, {
            question: "Que signifie le pardon selon Dieu ?",
            options: ["Oublier le passé", "Effacer les dettes", "Pardonner comme Dieu nous pardonne", "Ignorer les torts"],
            correct: "Pardonner comme Dieu nous pardonne",
            niveau: "facile",
            ref: "Éphésiens 4:32"
        }, {
            question: "Qu'est-ce que la prière ?",
            options: ["Une méditation", "Une conversation avec Dieu", "Une récitation", "Un rituel"],
            correct: "Une conversation avec Dieu",
            niveau: "facile",
            ref: "1 Thessaloniciens 5:17"
        }, {
            question: "Que signifie le salut en Jésus-Christ ?",
            options: ["Une délivrance du péché", "Une vie meilleure", "Une guérison", "Une promotion"],
            correct: "Une délivrance du péché",
            niveau: "facile",
            ref: "Actes 4:12"
        }, {
            question: "Qu'est-ce que l'amour de Dieu ?",
            options: ["Un sentiment", "Une obligation", "Un choix et un engagement", "Une émotion"],
            correct: "Un choix et un engagement",
            niveau: "facile",
            ref: "1 Jean 4:8"
        }, {
            question: "Que sont les miracles ?",
            options: ["Des coïncidences", "Des actes de puissance divine", "Des illusions", "Des hasards"],
            correct: "Des actes de puissance divine",
            niveau: "facile",
            ref: "Jean 2:11"
        }, {
            question: "Qu'est-ce que la prophétie ?",
            options: ["Une prédiction du futur", "Une parole inspirée de Dieu", "Une malédiction", "Un rêve"],
            correct: "Une parole inspirée de Dieu",
            niveau: "facile",
            ref: "2 Pierre 1:21"
        }, {
            question: "Que nous enseigne le pardon dans la parabole du serviteur impitoyable ?",
            options: ["Pardonner 70 fois 7 fois", "Ne jamais pardonner", "Pardonner une fois","Pardonner 7 fois"],
            correct: "Pardonner 70 fois 7 fois",
            niveau: "facile",
            ref: "Matthieu 18:21-22"
        }, {
            question: "Qu'est-ce que la grâce selon Paul ?",
            options: ["Un mérite", "Une faveur imméritée de Dieu", "Une récompense", "Un privilège"],
            correct: "Une faveur imméritée de Dieu",
            niveau: "facile",
            ref: "Éphésiens 2:8-9"
        }, {
            question: "Que signifie « être sauvé » ?",
            options: ["Être guéri", "Être délivré du jugement de Dieu", "Être riche", "Être heureux"],
            correct: "Être délivré du jugement de Dieu",
            niveau: "facile",
            ref: "Jean 3:16"
        }, {
            question: "Qu'est-ce que la sainteté ?",
            options: ["Une perfection", "Être mis à part pour Dieu", "Être sans péché", "Être religieux"],
            correct: "Être mis à part pour Dieu",
            niveau: "facile",
            ref: "1 Pierre 1:16"
        }, {
            question: "Que signifie le mot « Alliance » dans la Bible ?",
            options: ["Un contrat entre Dieu et son peuple", "Une promesse de Dieu", "Une loi", "Un serment"],
            correct: "Un contrat entre Dieu et son peuple",
            niveau: "facile",
            ref: "Genèse 9:13"
        }, {
            question: "Qu'est-ce que le Royaume de Dieu ?",
            options: ["Un lieu géographique", "La domination de Dieu sur les cœurs", "Le ciel", "Une église"],
            correct: "La domination de Dieu sur les cœurs",
            niveau: "facile",
            ref: "Luc 17:21"
        }, {
            question: "Que signifie l'Esprit Saint pour le croyant ?",
            options: ["Un pouvoir magique", "Le Consolateur et Guide", "Une énergie", "Un ange"],
            correct: "Le Consolateur et Guide",
            niveau: "facile",
            ref: "Jean 14:16-17"
        }, {
            question: "Qu'est-ce que l'adoration selon la Bible ?",
            options: ["Chanter des cantiques", "Un style de vie centré sur Dieu", "Aller à l'église", "Prier le matin"],
            correct: "Un style de vie centré sur Dieu",
            niveau: "facile",
            ref: "Romains 12:1"
        }, {
            question: "Que dit la Bible sur la peur ?",
            options: ["La peur est normale", "Ne crains rien, car Dieu est avec toi", "La peur est un péché", "Il faut craindre tout"],
            correct: "Ne crains rien, car Dieu est avec toi",
            niveau: "facile",
            ref: "Ésaïe 41:10"
        }, {
            question: "Qu'est-ce que le témoignage chrétien ?",
            options: ["Parler de Jésus", "Vivre une vie conforme à l'Évangile", "Avoir un bon comportement", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "facile",
            ref: "Actes 1:8"
        }, {
            question: "Que dit la Bible sur la prière d'intercession ?",
            options: ["Prier pour soi-même", "Prier pour la santé", "Prier pour les autres", "Prier pour la richesse"],
            correct: "Prier pour les autres",
            niveau: "moyen",
            ref: "1 Timothée 2:1"
        }, {
            question: "Qu'est-ce que la repentance selon Jean-Baptiste ?",
            options: ["Regretter ses péchés", "Changer de direction", "Avoir de la tristesse", "Faire pénitence"],
            correct: "Changer de direction",
            niveau: "moyen",
            ref: "Matthieu 3:2"
        }, {
            question: "Que signifie « croire en Dieu » ?",
            options: ["Accepter son existence", "Lui faire confiance et lui obéir", "Le connaître intellectuellement",
                "Aller à l'église"
            ],
            correct: "Lui faire confiance et lui obéir",
            niveau: "moyen",
            ref: "Hébreux 11:6"
        }, {
            question: "Qu'est-ce que la persévérance dans la foi ?",
            options: ["Continuer malgré les épreuves", "Abandonner quand c'est dur", "Attendre passivement",
                "Changer de foi"
            ],
            correct: "Continuer malgré les épreuves",
            niveau: "moyen",
            ref: "Jacques 1:12"
        }, {
            question: "Que signifie le don de prophétie ?",
            options: ["Prédire l'avenir", "Parler de la part de Dieu", "Avoir des visions", "Faire des miracles"],
            correct: "Parler de la part de Dieu",
            niveau: "moyen",
            ref: "1 Corinthiens 14:3"
        }, {
            question: "Qu'est-ce que le fruit de l'Esprit ?",
            options: ["Les dons spirituels", "Les caractères que l'Esprit produit en nous", "Les bonnes œuvres",
                "Les talents"
            ],
            correct: "Les caractères que l'Esprit produit en nous",
            niveau: "moyen",
            ref: "Galates 5:22-23"
        }, {
            question: "Que dit la Bible sur le jugement dernier ?",
            options: ["Ce sera un jour de colère", "Ce sera un jour de justice divine", "Tous seront sauvés",
                "Seuls les chrétiens seront jugés"
            ],
            correct: "Ce sera un jour de justice divine",
            niveau: "moyen",
            ref: "2 Corinthiens 5:10"
        }, {
            question: "Qu'est-ce que l'Église selon Paul ?",
            options: ["Un bâtiment", "Le corps de Christ", "Une organisation religieuse", "Un lieu de culte"],
            correct: "Le corps de Christ",
            niveau: "moyen",
            ref: "Éphésiens 1:22-23"
        }, {
            question: "Que signifie le baptême ?",
            options: ["Un signe extérieur de foi", "Une purification des péchés", "Une initiation religieuse",
                "Un rituel obligatoire"
            ],
            correct: "Un signe extérieur de foi",
            niveau: "moyen",
            ref: "Romains 6:4"
        }, {
            question: "Qu'est-ce que la Cène du Seigneur ?",
            options: ["Un repas commémoratif", "Un sacrifice", "Une fête", "Un rituel quotidien"],
            correct: "Un repas commémoratif",
            niveau: "moyen",
            ref: "1 Corinthiens 11:23-26"
        }, {
            question: "Que signifie « être justifié » ?",
            options: ["Être rendu juste", "Être déclaré juste par la foi en Christ", "Être parfait", "Être sans péché"],
            correct: "Être déclaré juste par la foi en Christ",
            niveau: "difficile",
            ref: "Romains 3:24"
        }, {
            question: "Qu'est-ce que la sanctification ?",
            options: ["Devenir parfait", "Être séparé pour Dieu", "Être purifié", "Un processus de transformation"],
            correct: "Un processus de transformation",
            niveau: "difficile",
            ref: "1 Thessaloniciens 4:3"
        }, {
            question: "Que signifie la réconciliation selon Paul ?",
            options: ["Se pardonner mutuellement", "Dieu qui rétablit la paix avec l'homme", "Se réconcilier avec soi-même",
                "Oublier les offenses"
            ],
            correct: "Dieu qui rétablit la paix avec l'homme",
            niveau: "difficile",
            ref: "2 Corinthiens 5:18-19"
        }, {
            question: "Qu'est-ce que l'apostasie ?",
            options: ["Abandonner la foi", "Changer de religion", "Pécher", "Douter de Dieu"],
            correct: "Abandonner la foi",
            niveau: "difficile",
            ref: "2 Thessaloniciens 2:3"
        }, {
            question: "Que signifie la nouvelle naissance ?",
            options: ["Une nouvelle vie en Christ", "Changer de comportement", "Naître à nouveau", "Être baptisé"],
            correct: "Une nouvelle vie en Christ",
            niveau: "difficile",
            ref: "Jean 3:3"
        }, {
            question: "Qu'est-ce que la rédemption ?",
            options: ["Un paiement pour les péchés", "Le salut gratuit", "Une délivrance contre rançon", "La justice de Dieu"],
            correct: "Une délivrance contre rançon",
            niveau: "difficile",
            ref: "Éphésiens 1:7"
        }, {
            question: "Que dit la Bible sur l'armure de Dieu ?",
            options: ["Une protection spirituelle", "Un équipement militaire", "Une armure physique", "Un symbole religieux"],
            correct: "Une protection spirituelle",
            niveau: "difficile",
            ref: "Éphésiens 6:11-17"
        }, {
            question: "Qu'est-ce que la gloire de Dieu ?",
            options: ["La beauté de Dieu", "La manifestation de sa présence", "La puissance de Dieu", "Toutes ces réponses"],
            correct: "Toutes ces réponses",
            niveau: "difficile",
            ref: "Ésaïe 6:3"
        }, {
            question: "Que signifie la résurrection des morts ?",
            options: ["Un retour à la vie", "Une nouvelle création", "La vie éternelle en Christ", "Un espoir futur"],
            correct: "La vie éternelle en Christ",
            niveau: "difficile",
            ref: "1 Corinthiens 15:20-22"
        }, {
            question: "Qu'est-ce que le Royaume éternel de Dieu ?",
            options: ["Un règne sans fin", "Une domination terrestre", "Un empire spirituel", "Un lieu géographique"],
            correct: "Un règne sans fin",
            niveau: "difficile",
            ref: "2 Pierre 1:11"
        }, {
            question: "Que signifie « la paix de Dieu » ?",
            options: ["L'absence de conflit", "La paix intérieure en Christ", "Une vie sans problème", "Une trêve"],
            correct: "La paix intérieure en Christ",
            niveau: "difficile",
            ref: "Philippiens 4:7"
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
                localStorage.setItem('quizThemesBibliques', JSON.stringify({
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
                badgeText = '🌟 Excellente connaissance des thèmes bibliques !';
                messageText = '« Connaissez la vérité, et la vérité vous affranchira » (Jean 8:32)';
            } else if (pct >= 60) {
                badgeText = '📖 Bonne maîtrise, continuez à approfondir !';
                messageText = '« Heureux l’homme qui trouve la sagesse » (Proverbes 3:13)';
            } else if (pct >= 40) {
                badgeText = '📚 Un bon début, continuez à étudier !';
                messageText = '« Cherchez et vous trouverez » (Matthieu 7:7)';
            } else {
                badgeText = '🕊️ N\'abandonnez pas, les thèmes bibliques sont profonds !';
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
            const saved = localStorage.getItem('quizThemesBibliques');
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
</html>