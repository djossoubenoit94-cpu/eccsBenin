<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Quiz Biblique – 20 questions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, system-ui, sans-serif;
        }
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(145deg, #f5f0e7 0%, #e8e0d3 100%);
            padding: 20px;
        }
        .quiz-wrapper {
            max-width: 720px;
            width: 100%;
            background: #ffffff;
            border-radius: 40px;
            padding: 35px 30px 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            transition: 0.3s;
            border: 1px solid rgba(200, 170, 120, 0.2);
        }
        h1 {
            font-size: 1.9rem;
            font-weight: 600;
            color: #2c3e4e;
            display: flex;
            align-items: center;
            gap: 10px;
            border-bottom: 2px solid #e2d9cc;
            padding-bottom: 18px;
            margin-bottom: 22px;
            letter-spacing: -0.3px;
        }
        h1 i {
            color: #b68b5c;
            font-size: 2rem;
        }
        .progress-bar {
            background: #ede8df;
            border-radius: 30px;
            height: 8px;
            margin-bottom: 18px;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #b68b5c, #d4af7a);
            border-radius: 30px;
            transition: width 0.3s ease;
        }
        .question-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #5f6b7a;
            margin-bottom: 20px;
            font-weight: 500;
        }
        .question-text {
            font-size: 1.35rem;
            font-weight: 600;
            color: #1f2a36;
            margin-bottom: 24px;
            line-height: 1.4;
        }
        .options {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 28px;
        }
        .option {
            background: #f8f5f0;
            border: 2px solid #e3dbcf;
            border-radius: 16px;
            padding: 14px 20px;
            font-size: 1rem;
            font-weight: 500;
            color: #1f2a36;
            cursor: pointer;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .option:hover:not(.disabled) {
            background: #efe8dd;
            border-color: #c9b49b;
            transform: scale(1.01);
        }
        .option input[type="radio"] {
            accent-color: #b68b5c;
            width: 18px;
            height: 18px;
            cursor: pointer;
            flex-shrink: 0;
        }
        .option.selected {
            border-color: #b68b5c;
            background: #f3ede5;
        }
        .option.correct {
            border-color: #2a7d4e;
            background: #e3f3e9;
        }
        .option.wrong {
            border-color: #b13e3e;
            background: #f8e3e3;
        }
        .option.disabled {
            cursor: default;
            opacity: 0.85;
        }
        .feedback {
            background: #f2eee8;
            border-radius: 18px;
            padding: 16px 20px;
            margin: 10px 0 22px;
            border-left: 6px solid #b68b5c;
            display: none;
            font-size: 0.98rem;
        }
        .feedback.show {
            display: block;
        }
        .feedback .verse {
            display: block;
            margin-top: 8px;
            font-style: italic;
            color: #6f5e4a;
            font-weight: 500;
        }
        .feedback .verse i {
            color: #a67c4e;
            margin-right: 6px;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 8px;
        }
        .btn {
            background: #2c3e4e;
            border: none;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            padding: 14px 34px;
            border-radius: 40px;
            cursor: pointer;
            transition: 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        .btn:hover:not(:disabled) {
            background: #1f2a36;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        }
        .btn:disabled {
            opacity: 0.45;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        .btn-secondary {
            background: #d4c9bb;
            color: #1f2a36;
        }
        .btn-secondary:hover:not(:disabled) {
            background: #c4b7a6;
        }
        .btn-gold {
            background: #b68b5c;
            color: #1f1a14;
        }
        .btn-gold:hover:not(:disabled) {
            background: #a0774b;
        }
        .score-final {
            background: #f2eee8;
            border-radius: 30px;
            padding: 22px 28px;
            margin-top: 20px;
            display: none;
            text-align: center;
            border: 1px solid #d4c9bb;
        }
        .score-final.show {
            display: block;
        }
        .score-final h2 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #1f2a36;
        }
        .score-final .detail {
            font-size: 1.1rem;
            color: #3a4a5a;
            margin: 6px 0 12px;
        }
        .score-final .badge {
            display: inline-block;
            background: #b68b5c;
            color: #1f1a14;
            font-weight: 700;
            padding: 6px 20px;
            border-radius: 40px;
            font-size: 0.9rem;
            margin-top: 4px;
        }
        .score-final .message {
            margin-top: 14px;
            font-style: italic;
            color: #5f6b7a;
        }
        .score-final .btn {
            margin-top: 18px;
        }
        .footer-note {
            text-align: center;
            margin-top: 18px;
            font-size: 0.8rem;
            color: #887e70;
            border-top: 1px solid #e2d9cc;
            padding-top: 18px;
        }
        .footer-note i {
            color: #b68b5c;
        }
        @media (max-width: 480px) {
            .quiz-wrapper {
                padding: 22px 16px 28px;
            }
            h1 {
                font-size: 1.5rem;
            }
            .question-text {
                font-size: 1.15rem;
            }
            .option {
                padding: 12px 16px;
                font-size: 0.95rem;
            }
            .btn {
                padding: 12px 24px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

    <div class="quiz-wrapper">
        <h1>
            <i class="fas fa-bible"></i> Quiz Biblique
        </h1>

        <!-- barre de progression -->
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>

        <!-- en‑tête : question courante / total -->
        <div class="question-meta">
            <span id="questionCounter">Question 1 / 20</span>
            <span id="scoreDisplay">✅ 0 / 0</span>
        </div>

        <!-- zone question + options -->
        <div id="questionContainer">
            <div class="question-text" id="questionText">Chargement…</div>
            <div class="options" id="optionsContainer"></div>
        </div>

        <!-- feedback (réponse + verset) -->
        <div class="feedback" id="feedback">
            <span id="feedbackMessage"></span>
            <span class="verse" id="feedbackVerse"><i class="fas fa-scroll"></i> <span id="verseRef"></span></span>
        </div>

        <!-- boutons -->
        <div class="actions">
            <button class="btn btn-secondary" id="prevBtn" disabled>
                <i class="fas fa-arrow-left"></i> Précédent
            </button>
            <button class="btn" id="nextBtn">
                Suivant <i class="fas fa-arrow-right"></i>
            </button>
            <button class="btn btn-gold" id="submitBtn" style="display:none;">
                <i class="fas fa-check-circle"></i> Voir le score
            </button>
        </div>

        <!-- écran résultat final -->
        <div class="score-final" id="scoreFinal">
            <h2 id="finalScore">0 / 20</h2>
            <div class="detail" id="finalDetail">Vous avez répondu correctement à 0 question.</div>
            <div class="badge" id="finalBadge">📖 À revoir</div>
            <div class="message" id="finalMessage"></div>
            <button class="btn" id="restartBtn"><i class="fas fa-undo-alt"></i> Refaire le quiz</button>
        </div>

        <div class="footer-note">
            <i class="fas fa-dove"></i> « Ta parole est une lampe à mes pieds » — Psaume 119:105
        </div>
        <a href="formation.php" style="text-decoration: none;color: #282aa7;">Retoure</a>

    </div>

    <!-- Font Awesome (pour les icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <script>
        // ================================================================
        // 1. DONNÉES : 20 questions bibliques (Ancien + Nouveau Testament)
        //    niveau facile → moyen
        // ================================================================
        const questions = [{
            question: "Quel est le premier livre de la Bible ?",
            options: ["Genèse", "Exode", "Lévitique", "Deutéronome"],
            correct: 0,
            ref: "Genèse 1:1"
        }, {
            question: "Qui a construit l'arche ?",
            options: ["Abraham", "Noé", "Moïse", "David"],
            correct: 1,
            ref: "Genèse 6:14"
        }, {
            question: "Combien de jours Dieu a‑t‑Il mis pour créer le ciel et la terre ?",
            options: ["5 jours", "6 jours", "7 jours", "10 jours"],
            correct: 1,
            ref: "Genèse 2:2"
        }, {
            question: "Quel est le plus petit livre de la Bible ?",
            options: ["Abdias", "Philémon", "Jude", "2 Jean"],
            correct: 0,
            ref: "Abdias 1"
        }, {
            question: "Qui a été le premier roi d’Israël ?",
            options: ["Saül", "David", "Salomon", "Josué"],
            correct: 0,
            ref: "1 Samuel 10:1"
        }, {
            question: "Quel est le verset le plus court de la Bible ?",
            options: ["Jean 11:35", "1 Thessaloniciens 5:16", "Éphésiens 4:26", "Psaume 117:1"],
            correct: 0,
            ref: "Jean 11:35"
        }, {
            question: "Qui a été jeté dans la fosse aux lions ?",
            options: ["Daniel", "Jérémie", "Élie", "Josué"],
            correct: 0,
            ref: "Daniel 6:16"
        }, {
            question: "Quel est le premier miracle de Jésus ?",
            options: ["Guérir un lépreux", "Transformer l'eau en vin", "Marcher sur l'eau", "Ressusciter Lazare"],
            correct: 1,
            ref: "Jean 2:1-11"
        }, {
            question: "Combien de livres compose le Nouveau Testament ?",
            options: ["27", "39", "66", "24"],
            correct: 0,
            ref: "2 Timothée 3:16"
        }, {
            question: "Qui a trahi Jésus avec un baiser ?",
            options: ["Pierre", "Judas", "Jean", "Thomas"],
            correct: 1,
            ref: "Matthieu 26:48-49"
        }, {
            question: "Sur quel mont Moïse a‑t‑il reçu les tables de la Loi ?",
            options: ["Mont Sinaï", "Mont des Oliviers", "Mont Carmel", "Mont Nebo"],
            correct: 0,
            ref: "Exode 19:20"
        }, {
            question: "Quel est le nom de l’épouse d’Abraham ?",
            options: ["Rachel", "Léa", "Sara", "Rebecca"],
            correct: 2,
            ref: "Genèse 17:15"
        }, {
            question: "Quel roi a écrit la plupart des Psaumes ?",
            options: ["Salomon", "David", "Ézéchias", "Josias"],
            correct: 1,
            ref: "Psaume 23 (Titre)"
        }, {
            question: "Que signifie le mot « Evangile » ?",
            options: ["Bonne nouvelle", "Loi de Dieu", "Parole prophétique", "Histoire sainte"],
            correct: 0,
            ref: "Marc 1:1"
        }, {
            question: "Qui était le père de Jean-Baptiste ?",
            options: ["Zacharie", "Élisabeth", "Siméon", "Anne"],
            correct: 0,
            ref: "Luc 1:5-13"
        }, {
            question: "Dans quel livre trouve‑t‑on les 10 plaies d’Égypte ?",
            options: ["Exode", "Lévitique", "Nombres", "Deutéronome"],
            correct: 0,
            ref: "Exode 7–12"
        }, {
            question: "Quelle est la première parole de Jésus sur la croix ?",
            options: ["Père, pardonne-leur", "Mon Dieu, mon Dieu", "Tout est accompli", "Aujourd'hui tu seras avec moi"],
            correct: 0,
            ref: "Luc 23:34"
        }, {
            question: "Qui est monté au ciel dans un char de feu ?",
            options: ["Élie", "Élisée", "Énoch", "Moïse"],
            correct: 0,
            ref: "2 Rois 2:11"
        }, {
            question: "Combien de jours Jonas est‑il resté dans le ventre du grand poisson ?",
            options: ["1 jour", "2 jours", "3 jours", "7 jours"],
            correct: 2,
            ref: "Jonas 1:17"
        }, {
            question: "Qui a écrit l’Apocalypse ?",
            options: ["Pierre", "Jean", "Paul", "Jacques"],
            correct: 1,
            ref: "Apocalypse 1:1"
        }];

        // ================================================================
        // 2. ÉTAT DU QUIZ
        // ================================================================
        let currentIndex = 0;
        let userAnswers = new Array(questions.length).fill(null); // index de l'option choisie (null = pas répondu)
        let quizCompleted = false;
        let score = 0;

        const questionText = document.getElementById('questionText');
        const optionsContainer = document.getElementById('optionsContainer');
        const feedbackDiv = document.getElementById('feedback');
        const feedbackMessage = document.getElementById('feedbackMessage');
        const verseRef = document.getElementById('verseRef');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const progressFill = document.getElementById('progressFill');
        const questionCounter = document.getElementById('questionCounter');
        const scoreDisplay = document.getElementById('scoreDisplay');
        const scoreFinal = document.getElementById('scoreFinal');
        const finalScore = document.getElementById('finalScore');
        const finalDetail = document.getElementById('finalDetail');
        const finalBadge = document.getElementById('finalBadge');
        const finalMessage = document.getElementById('finalMessage');
        const restartBtn = document.getElementById('restartBtn');

        // ================================================================
        // 3. FONCTIONS
        // ================================================================

        // charger une question (et mettre à jour l'interface)
        function loadQuestion(index) {
            const q = questions[index];
            questionText.textContent = q.question;

            // construire les options
            optionsContainer.innerHTML = '';
            q.options.forEach((opt, i) => {
                const label = document.createElement('label');
                label.className = 'option';
                // si déjà répondue, on restore la sélection
                const isSelected = (userAnswers[index] === i);
                if (isSelected) label.classList.add('selected');
                // si quiz terminé, on désactive les radios
                const disabled = quizCompleted ? 'disabled' : '';

                label.innerHTML = `
                    <input type="radio" name="question" value="${i}" ${isSelected ? 'checked' : ''} ${disabled}>
                    ${opt}
                `;
                label.addEventListener('click', function(e) {
                    // ne pas interférer si quiz fini ou si déjà répondu
                    if (quizCompleted) return;
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                    handleOptionChange(index, i);
                });
                optionsContainer.appendChild(label);
            });

            // mettre à jour le compteur
            questionCounter.textContent = `Question ${index+1} / ${questions.length}`;

            // mettre à jour la progression
            const progress = ((index + 1) / questions.length) * 100;
            progressFill.style.width = progress + '%';

            // afficher/masquer feedback (on le cache au changement de question)
            feedbackDiv.classList.remove('show');

            // désactiver / activer boutons
            prevBtn.disabled = (index === 0);
            // nextBtn : désactivé si on est sur la dernière question et que le quiz n'est pas terminé
            if (index === questions.length - 1 && !quizCompleted) {
                nextBtn.style.display = 'none';
                submitBtn.style.display = 'inline-flex';
            } else {
                nextBtn.style.display = 'inline-flex';
                submitBtn.style.display = 'none';
            }

            // si le quiz est terminé, on désactive tout
            if (quizCompleted) {
                disableAllOptions(true);
                // on affiche le feedback de la question courante si elle a une réponse
                showStoredFeedback(index);
            } else {
                disableAllOptions(false);
                // si une réponse est déjà enregistrée pour cette question, on affiche le feedback
                if (userAnswers[index] !== null) {
                    showFeedbackForCurrent(index);
                }
            }

            // mettre à jour le score affiché (en cours)
            updateScoreDisplay();
        }

        // gérer le changement d'option
        function handleOptionChange(index, selectedIdx) {
            if (quizCompleted) return;
            // enregistrer la réponse
            userAnswers[index] = selectedIdx;
            // mettre à jour la classe selected
            const options = optionsContainer.querySelectorAll('.option');
            options.forEach((el, i) => {
                el.classList.toggle('selected', i === selectedIdx);
            });
            // afficher le feedback immédiatement
            showFeedbackForCurrent(index);
            // mettre à jour le score affiché
            updateScoreDisplay();
            // activer le bouton next/submit
            // (pas besoin : déjà actif)
        }

        // afficher le feedback pour la question courante
        function showFeedbackForCurrent(index) {
            const q = questions[index];
            const answerIdx = userAnswers[index];
            if (answerIdx === null) {
                feedbackDiv.classList.remove('show');
                return;
            }
            const isCorrect = (answerIdx === q.correct);
            const correctText = q.options[q.correct];
            const userChoice = q.options[answerIdx];
            let msg = isCorrect ?
                `✅ Bonne réponse ! « ${correctText} » est juste.` :
                `❌ « ${userChoice} » n'est pas correct. La bonne réponse est : « ${correctText} ».`;
            feedbackMessage.textContent = msg;
            verseRef.textContent = q.ref;
            feedbackDiv.classList.add('show');

            // mettre en surbrillance les options
            const options = optionsContainer.querySelectorAll('.option');
            options.forEach((el, i) => {
                el.classList.remove('correct', 'wrong');
                if (i === q.correct) el.classList.add('correct');
                else if (i === answerIdx && !isCorrect) el.classList.add('wrong');
            });
        }

        // afficher le feedback stocké (pour le mode terminé)
        function showStoredFeedback(index) {
            const q = questions[index];
            const answerIdx = userAnswers[index];
            if (answerIdx === null) {
                feedbackDiv.classList.remove('show');
                return;
            }
            const isCorrect = (answerIdx === q.correct);
            const correctText = q.options[q.correct];
            const userChoice = q.options[answerIdx];
            let msg = isCorrect ?
                `✅ Bonne réponse ! « ${correctText} » est juste.` :
                `❌ « ${userChoice} » est incorrect. La bonne réponse est : « ${correctText} ».`;
            feedbackMessage.textContent = msg;
            verseRef.textContent = q.ref;
            feedbackDiv.classList.add('show');

            const options = optionsContainer.querySelectorAll('.option');
            options.forEach((el, i) => {
                el.classList.remove('correct', 'wrong');
                if (i === q.correct) el.classList.add('correct');
                else if (i === answerIdx && !isCorrect) el.classList.add('wrong');
            });
        }

        // désactiver / activer toutes les options
        function disableAllOptions(disabled) {
            const radios = optionsContainer.querySelectorAll('input[type="radio"]');
            radios.forEach(r => r.disabled = disabled);
            const labels = optionsContainer.querySelectorAll('.option');
            labels.forEach(l => {
                if (disabled) l.classList.add('disabled');
                else l.classList.remove('disabled');
            });
        }

        // mettre à jour l'affichage du score courant
        function updateScoreDisplay() {
            let correct = 0;
            let answered = 0;
            for (let i = 0; i < questions.length; i++) {
                if (userAnswers[i] !== null) {
                    answered++;
                    if (userAnswers[i] === questions[i].correct) correct++;
                }
            }
            score = correct;
            scoreDisplay.textContent = `✅ ${correct} / ${answered}`;
        }

        // calculer le score final et afficher l'écran de résultats
        function finishQuiz() {
            quizCompleted = true;
            // calculer le score
            let correct = 0;
            for (let i = 0; i < questions.length; i++) {
                if (userAnswers[i] !== null && userAnswers[i] === questions[i].correct) {
                    correct++;
                }
            }
            score = correct;
            const total = questions.length;

            // stocker dans localStorage
            try {
                localStorage.setItem('quizBibliqueScore', JSON.stringify({ score: score, total: total, date: new Date()
                        .toISOString() }));
            } catch (e) {}

            // masquer les boutons de navigation
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'none';

            // afficher le résultat final
            finalScore.textContent = `${score} / ${total}`;
            finalDetail.textContent = `Vous avez répondu correctement à ${score} question${score > 1 ? 's' : ''} sur ${total}.`;

            let badgeText, messageText;
            const pct = (score / total) * 100;
            if (pct >= 80) {
                badgeText = '🌟 Excellente connaissance biblique !';
                messageText = '« Ta parole est une lampe à mes pieds » (Psaume 119:105)';
            } else if (pct >= 60) {
                badgeText = '📖 Bonne maîtrise, continuez à creuser !';
                messageText = '« Heureux l’homme qui trouve la sagesse » (Proverbes 3:13)';
            } else if (pct >= 40) {
                badgeText = '📚 Un bon début, relisez les Écritures !';
                messageText = '« Cherchez et vous trouverez » (Matthieu 7:7)';
            } else {
                badgeText = '🕊️ N’abandonnez pas, la Bible est un trésor !';
                messageText = '« Tu aimeras le Seigneur ton Dieu… » (Marc 12:30)';
            }
            finalBadge.textContent = badgeText;
            finalMessage.textContent = messageText;

            // afficher l'écran des scores
            scoreFinal.classList.add('show');

            // désactiver toutes les options
            disableAllOptions(true);

            // recharger la question courante en mode terminé (pour afficher les corrections)
            loadQuestion(currentIndex);
        }

        // ================================================================
        // 4. GESTIONNAIRES D'ÉVÉNEMENTS
        // ================================================================

        // bouton suivant
        nextBtn.addEventListener('click', function() {
            if (currentIndex < questions.length - 1) {
                currentIndex++;
                loadQuestion(currentIndex);
            }
        });

        // bouton précédent
        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                loadQuestion(currentIndex);
            }
        });

        // bouton soumettre (dernière question)
        submitBtn.addEventListener('click', function() {
            // vérifier que toutes les questions ont une réponse
            const unanswered = userAnswers.some(a => a === null);
            if (unanswered) {
                if (!confirm('⚠️ Vous n\'avez pas répondu à toutes les questions. Voulez-vous quand même soumettre ?')) {
                    return;
                }
            }
            finishQuiz();
        });

        // bouton recommencer
        restartBtn.addEventListener('click', function() {
            // réinitialiser
            userAnswers = new Array(questions.length).fill(null);
            quizCompleted = false;
            currentIndex = 0;
            scoreFinal.classList.remove('show');
            prevBtn.style.display = 'inline-flex';
            nextBtn.style.display = 'inline-flex';
            submitBtn.style.display = 'none';
            // recharger
            loadQuestion(0);
            updateScoreDisplay();
            // réactiver les radios
            disableAllOptions(false);
            // remettre le feedback à zéro
            feedbackDiv.classList.remove('show');
        });

        // ================================================================
        // 5. INITIALISATION
        // ================================================================
        // charger la première question
        loadQuestion(0);
        updateScoreDisplay();

        // restaurer un score précédent (affichage console uniquement)
        try {
            const saved = localStorage.getItem('quizBibliqueScore');
            if (saved) {
                const data = JSON.parse(saved);
                console.log(`📊 Dernier score enregistré : ${data.score}/${data.total} (${new Date(data.date).toLocaleDateString()})`);
            }
        } catch (e) {}

        // ================================================================
        // 6. GESTION DU CLAVIER (accessibilité)
        // ================================================================
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