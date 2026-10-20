<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Ancien Testament</title>
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
            max-width: 700px;
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
        <h1>📖 Ancien Testament <span>20 Q</span></h1>
        <div class="subhead">
            <span id="counter">Question 1 / 20</span>
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
            <h2 id="finalScore">0 / 20</h2>
            <div class="detail" id="finalDetail">Vous avez répondu correctement à 0 question.</div>
            <div class="badge" id="finalBadge">📖 À revoir</div>
            <div class="message" id="finalMessage"></div>
            <button class="btn" id="restartBtn">🔄 Recommencer le quiz</button>
        </div>

        <div class="footer">
            <i>✝</i> « Ta parole est une lampe à mes pieds » — Psaume 119:105
        </div>
        <a href="formation.php" style="text-decoration: none;color: #3528a7;">Retoure</a>

    </div>

    <script>
        const questions = [{
            question: "Quel est le premier livre de l'Ancien Testament ?",
            options: ["Genèse", "Exode", "Lévitique", "Nombres"],
            correct: "Genèse",
            niveau: "facile",
            ref: "Genèse 1:1"
        }, {
            question: "Qui a construit l'arche pour échapper au déluge ?",
            options: ["Abraham", "Noé", "Moïse", "David"],
            correct: "Noé",
            niveau: "facile",
            ref: "Genèse 6:14"
        }, {
            question: "Combien de jours Dieu a-t-Il pris pour créer le monde ?",
            options: ["5 jours", "6 jours", "7 jours", "10 jours"],
            correct: "6 jours",
            niveau: "facile",
            ref: "Genèse 2:2"
        }, {
            question: "Qui a été le premier roi d'Israël ?",
            options: ["Saül", "David", "Salomon", "Josué"],
            correct: "Saül",
            niveau: "facile",
            ref: "1 Samuel 10:1"
        }, {
            question: "Quel prophète a été enlevé au ciel dans un char de feu ?",
            options: ["Élie", "Élisée", "Ésaïe", "Jérémie"],
            correct: "Élie",
            niveau: "facile",
            ref: "2 Rois 2:11"
        }, {
            question: "Sur quel mont Moïse a-t-il reçu les tables de la Loi ?",
            options: ["Mont Sinaï", "Mont des Oliviers", "Mont Carmel", "Mont Nebo"],
            correct: "Mont Sinaï",
            niveau: "facile",
            ref: "Exode 19:20"
        }, {
            question: "Quel roi a écrit la plupart des Psaumes ?",
            options: ["Salomon", "David", "Ézéchias", "Josias"],
            correct: "David",
            niveau: "facile",
            ref: "Psaume 23 (Titre)"
        }, {
            question: "Qui a été vendu comme esclave par ses frères ?",
            options: ["Joseph", "Moïse", "David", "Jacob"],
            correct: "Joseph",
            niveau: "facile",
            ref: "Genèse 37:28"
        }, {
            question: "Quel est le nom de l'épouse d'Abraham ?",
            options: ["Rachel", "Léa", "Sara", "Rebecca"],
            correct: "Sara",
            niveau: "moyen",
            ref: "Genèse 17:15"
        }, {
            question: "Qui était le père de Jean-Baptiste ?",
            options: ["Zacharie", "Élisabeth", "Siméon", "Anne"],
            correct: "Zacharie",
            niveau: "moyen",
            ref: "Luc 1:5-13"
        }, {
            question: "Dans quel livre trouve-t-on les 10 plaies d'Égypte ?",
            options: ["Exode", "Lévitique", "Nombres", "Deutéronome"],
            correct: "Exode",
            niveau: "moyen",
            ref: "Exode 7–12"
        }, {
            question: "Combien de jours Jonas est-il resté dans le ventre du grand poisson ?",
            options: ["1 jour", "2 jours", "3 jours", "7 jours"],
            correct: "3 jours",
            niveau: "moyen",
            ref: "Jonas 1:17"
        }, {
            question: "Qui a succédé à Moïse pour conduire Israël en Terre Promise ?",
            options: ["Josué", "Caleb", "Aaron", "Éléazar"],
            correct: "Josué",
            niveau: "moyen",
            ref: "Josué 1:1-2"
        }, {
            question: "Quelle ville est tombée après que Josué ait fait sept fois le tour avec l'arche ?",
            options: ["Jéricho", "Jérusalem", "Samarie", "Babylone"],
            correct: "Jéricho",
            niveau: "moyen",
            ref: "Josué 6:20"
        }, {
            question: "Qui a été jeté dans la fosse aux lions ?",
            options: ["Daniel", "Jérémie", "Élie", "Josué"],
            correct: "Daniel",
            niveau: "moyen",
            ref: "Daniel 6:16"
        }, {
            question: "Quel est le plus petit livre de l'Ancien Testament ?",
            options: ["Abdias", "Philémon", "Jude", "2 Jean"],
            correct: "Abdias",
            niveau: "difficile",
            ref: "Abdias 1"
        }, {
            question: "Quel est le nom du frère de Moïse ?",
            options: ["Aaron", "Miriam", "Josué", "Caleb"],
            correct: "Aaron",
            niveau: "difficile",
            ref: "Exode 4:14"
        }, {
            question: "Qui a construit le premier Temple de Jérusalem ?",
            options: ["David", "Salomon", "Ézéchias", "Josias"],
            correct: "Salomon",
            niveau: "difficile",
            ref: "1 Rois 6:1"
        }, {
            question: "Quel prophète a annoncé la destruction de Jérusalem et a vu le rouleau mangé ?",
            options: ["Ézéchiel", "Ésaïe", "Jérémie", "Daniel"],
            correct: "Ézéchiel",
            niveau: "difficile",
            ref: "Ézéchiel 3:1-3"
        }, {
            question: "Combien de livres composent l'Ancien Testament ?",
            options: ["27", "39", "66", "24"],
            correct: "39",
            niveau: "difficile",
            ref: "Luc 24:44"
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
                localStorage.setItem('quizAncienTestament', JSON.stringify({
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
                badgeText = '🌟 Excellente connaissance de l\'Ancien Testament !';
                messageText = '« Ta parole est une lampe à mes pieds » (Psaume 119:105)';
            } else if (pct >= 60) {
                badgeText = '📖 Bonne maîtrise, continuez à creuser !';
                messageText = '« Heureux l’homme qui trouve la sagesse » (Proverbes 3:13)';
            } else if (pct >= 40) {
                badgeText = '📚 Un bon début, relisez les Écritures !';
                messageText = '« Cherchez et vous trouverez » (Matthieu 7:7)';
            } else {
                badgeText = '🕊️ N’abandonnez pas, l\'Ancien Testament est un trésor !';
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
            const saved = localStorage.getItem('quizAncienTestament');
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