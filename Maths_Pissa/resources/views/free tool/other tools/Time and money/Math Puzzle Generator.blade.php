<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ගණිතමය ප්‍රහේලිකා උත්පාදකය | Math Puzzle Generator | Maths Pissa</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-gradient-start: #667eea; /* නිල් */
            --primary-gradient-end: #764ba2;   /* දම් */
            --header-bg: #5A4A87;              /* තද දම්-නිල් */
            --text-dark: #333333;
            --text-light: #ffffff;
            --card-bg: #ffffff;
            --section-bg-light: #f8faff;       /* ලා පසුබිම */
            --button-primary: #FF5722;         /* තද තැඹිලි */
            --button-hover: #E64A19;
            --result-bg: #fbe9e7;              /* ඉතා ලා තද තැඹිලි */
            --accent-orange: #FF9800;          /* තැඹිලි */
            --light-red: #ffebee;              /* ලා රතු */
            --dark-green: #388e3c;
            --puzzle-color: #8D6E63;           /* දුඹුරු */
            --puzzle-bg: #efebe9;              /* ලා දුඹුරු */
        }

        body {
            font-family: 'Noto Sans Sinhala', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--primary-gradient-start) 0%, var(--primary-gradient-end) 100%);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Top Navigation Bar */
        .top-navbar {
            background-color: var(--header-bg);
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-buttons-left, .nav-buttons-right {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            background-color: rgba(255, 255, 255, 0.2);
            color: var(--text-light);
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
        }

        .tool-card {
            background-color: var(--card-bg);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 40px;
            border-left: 6px solid var(--accent-orange);
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tool-card h1 {
            color: var(--header-bg);
            font-size: 2.8em;
            margin-top: 0;
            margin-bottom: 20px;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.1);
        }

        .tool-card p.description {
            font-size: 1.1em;
            color: var(--text-dark);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .input-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-end; /* Align items to the bottom */
            gap: 25px;
            margin-bottom: 30px;
        }

        .input-group {
            width: 100%;
            max-width: 250px;
            text-align: left;
            background-color: var(--section-bg-light);
            padding: 18px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--accent-orange);
        }
        .input-group label {
            display: block;
            font-size: 1.1em;
            font-weight: 600;
            color: var(--accent-orange);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .input-group select {
            width: 100%;
            padding: 10px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1em;
            color: var(--text-dark);
            background-color: var(--card-bg);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
            -webkit-appearance: none; /* Remove default arrow for better styling */
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23764ba2'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E"); /* Custom arrow */
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 20px;
        }
        .input-group select:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(255, 87, 34, 0.2);
            outline: none;
        }
        
        .generate-button {
            background-color: var(--button-primary);
            color: var(--text-light);
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .generate-button:hover {
            background-color: var(--button-hover);
            transform: translateY(-2px);
        }
        
        /* Puzzle Display Section */
        .puzzle-display {
            margin-top: 40px;
            padding: 30px;
            background-color: var(--puzzle-bg);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            border: 1px solid #d7ccc8; /* Light brown */
            display: none; /* මුලින් සඟවා තබයි */
            position: relative;
        }

        .puzzle-display h2 {
            color: var(--puzzle-color);
            font-size: 2em;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .puzzle-display h2 i {
            color: #A1887F; /* Lighter brown for icon */
        }

        .puzzle-question {
            font-size: 1.8em;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 30px;
            line-height: 1.5;
            min-height: 60px; /* Ensure space for longer questions */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .answer-reveal {
            margin-top: 20px;
        }

        .answer-reveal button {
            background-color: var(--dark-green); /* Green to reveal answer */
            color: var(--text-light);
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .answer-reveal button:hover {
            background-color: #2E7D32; /* Darker green */
            transform: translateY(-2px);
        }

        .puzzle-answer {
            font-size: 1.6em;
            font-weight: 700;
            color: var(--dark-blue-gray);
            margin-top: 20px;
            display: none; /* මුලින් සඟවා තබයි */
            background-color: var(--light-peach);
            padding: 15px;
            border-radius: 8px;
            border: 1px dashed var(--puzzle-color);
        }

        /* Explanation Section */
        .explanation-section {
            margin-top: 40px;
        }
        .explanation-section h3 {
            color: var(--accent-orange);
            font-size: 1.5em;
            margin-bottom: 15px;
            text-align: center;
        }

        .explanation-steps {
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            text-align: left;
        }

        .explanation-steps p {
            font-size: 1.05em;
            margin-bottom: 10px;
            line-height: 1.6;
            color: var(--text-dark);
        }
        
        .explanation-steps strong {
            color: var(--primary-gradient-end);
        }
        
        /* Error Message */
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            margin-top: 20px;
            display: none;
            text-align: center;
        }


        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .top-navbar {
                flex-direction: column;
                gap: 10px;
            }
            .nav-buttons-left, .nav-buttons-right {
                width: 100%;
                justify-content: center;
                gap: 10px;
            }
            .nav-btn {
                padding: 8px 15px;
                font-size: 0.9em;
            }
            .tool-card h1 {
                font-size: 2.2em;
            }
            .tool-card p.description {
                font-size: 1em;
            }
            .input-section {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            .input-group {
                max-width: 95%; /* Adjust for mobile */
            }
            .input-group select {
                font-size: 1em;
                padding: 10px;
            }
            .generate-button {
                font-size: 1.1em;
                padding: 10px 20px;
                width: 100%;
            }
            .puzzle-display h2 {
                font-size: 1.6em;
            }
            .puzzle-question {
                font-size: 1.4em;
            }
            .puzzle-answer {
                font-size: 1.3em;
            }
            .explanation-section h3 {
                font-size: 1.3em;
            }
            .explanation-steps p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                margin: 20px auto;
                padding: 0 15px;
            }
            .tool-card {
                padding: 25px;
            }
            .tool-card h1 {
                font-size: 1.8em;
            }
            .input-group {
                padding: 15px;
            }
            .puzzle-display h2 {
                font-size: 1.4em;
            }
            .puzzle-question {
                font-size: 1.2em;
            }
            .puzzle-answer {
                font-size: 1.1em;
            }
        }

    </style>
</head>
<body>

    <header class="top-navbar">
        <div class="nav-buttons-left">
            <a href="{{ url('/') }}" class="nav-btn">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="{{ url('/othertools') }}" class="nav-btn"> {{-- සියලු Tools පිටුවට යාමට --}}
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
        <div class="nav-buttons-right">
            <a href="https://www.youtube.com/@mathspissa" target="_blank" class="nav-btn">
                <i class="fab fa-youtube"></i> YouTube
            </a>
        </div>
    </header>

    <div class="main-content">
        <div class="tool-card">
            <h1>ගණිතමය ප්‍රහේලිකා උත්පාදකය ✨</h1>
            <p class="description">ඔබේ මොළය ක්‍රියාත්මක කිරීමට විවිධ වර්ගවල ගණිතමය ප්‍රහේලිකා සාදාගන්න! ඔබට අවශ්‍ය දුෂ්කරතා මට්ටම සහ ප්‍රහේලිකා වර්ගය තෝරන්න.</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="difficultySelect"><i class="fas fa-signal"></i> දුෂ්කරතා මට්ටම:</label>
                    <select id="difficultySelect">
                        <option value="easy">පහසුයි</option>
                        <option value="medium" selected>මධ්‍යස්ථයි</option>
                        <option value="hard">අමාරුයි</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="puzzleTypeSelect"><i class="fas fa-puzzle-piece"></i> ප්‍රහේලිකා වර්ගය:</label>
                    <select id="puzzleTypeSelect">
                        <option value="arithmetic">අංක ගණිතය</option>
                        <option value="logic">තර්කනය</option>
                        <option value="algebra">වීජ ගණිතය (සරල)</option>
                        <option value="sequence">සංඛ්‍යා අනුක්‍රම</option>
                    </select>
                </div>
            </div>
            
            <button id="generateBtn" class="generate-button"><i class="fas fa-sync-alt"></i> අලුත් ප්‍රහේලිකාවක් සාදන්න</button>

            <div id="errorMessage" class="error-message">
                ප්‍රහේලිකාවක් උත්පාදනය කිරීමේදී දෝෂයක් ඇති විය. කරුණාකර නැවත උත්සාහ කරන්න.
            </div>

            <div id="puzzleDisplay" class="puzzle-display">
                <h2>ඔබේ ගණිතමය ප්‍රහේලිකාව <i class="fas fa-brain"></i></h2>
                
                <div id="puzzleQuestion" class="puzzle-question">
                    {{-- Puzzle question will be inserted here by JavaScript --}}
                </div>

                <div class="answer-reveal">
                    <button id="showAnswerBtn"><i class="fas fa-eye"></i> පිළිතුර බලන්න</button>
                </div>

                <div id="puzzleAnswer" class="puzzle-answer">
                    {{-- Puzzle answer will be inserted here by JavaScript --}}
                </div>
            </div>

            <div class="explanation-section">
                <h3>ගණිතමය ප්‍රහේලිකා විසඳීමෙන්</h3>
                <div id="explanationSteps" class="explanation-steps">
                    <p>1. <strong>ගැටළු විසඳීමේ හැකියාව (Problem Solving):</strong><br>
                    ප්‍රහේලිකා මඟින් ඔබගේ ගැටළු විසඳීමේ හැකියාව වැඩි දියුණු කරයි. විවිධ ක්‍රම මඟින් ගැටළුවකට විසඳුම් සෙවීමට ඔබව දිරිමත් කරයි.</p>
                    <p>2. <strong>තර්කන හැකියාව (Logical Reasoning):</strong><br>
                    බොහෝ ප්‍රහේලිකා විසඳීමට තර්කනය අවශ්‍ය වේ. මෙය ඔබට දත්ත විශ්ලේෂණය කිරීමට සහ නිවැරදි නිගමනවලට එළඹීමට උපකාරී වේ.</p>
                    <p>3. <strong>විශ්ලේෂණාත්මක චින්තනය (Analytical Thinking):</strong><br>
                    ප්‍රහේලිකා විසඳීමේදී ගැටලුව කුඩා කොටස් වලට කඩා, එක් එක් කොටස විශ්ලේෂණය කිරීමට ඔබට සිදු වේ.</p>
                    <p>4. <strong>නව්‍ය චින්තනය (Creative Thinking):</strong><br>
                    සමහර ප්‍රහේලිකා විසඳීමට සාම්ප්‍රදායික නොවන ක්‍රම හෝ "පිටතට සිතීම" (thinking outside the box) අවශ්‍ය වේ.
                    <p><strong> මතක තබා ගන්න:</strong> ප්‍රහේලිකා යනු ගණිතය විනෝදජනක ලෙස ඉගෙන ගැනීමට හොඳම ක්‍රමයකි!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const difficultySelect = document.getElementById('difficultySelect');
        const puzzleTypeSelect = document.getElementById('puzzleTypeSelect');
        const generateBtn = document.getElementById('generateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const puzzleDisplay = document.getElementById('puzzleDisplay');
        const puzzleQuestion = document.getElementById('puzzleQuestion');
        const showAnswerBtn = document.getElementById('showAnswerBtn');
        const puzzleAnswer = document.getElementById('puzzleAnswer');

        generateBtn.addEventListener('click', generatePuzzle);
        showAnswerBtn.addEventListener('click', () => {
            puzzleAnswer.style.display = 'block';
            showAnswerBtn.style.display = 'none'; // Hide button after revealing answer
        });

        // Generate a puzzle on initial load
        document.addEventListener('DOMContentLoaded', generatePuzzle);

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        function generateArithmeticPuzzle(difficulty) {
            let num1, num2, num3, operator1, operator2;
            let answer;
            let question;

            const operators = ['+', '-', '*', '/'];
            
            // Adjust ranges based on difficulty
            let maxNum = 10;
            if (difficulty === 'medium') maxNum = 25;
            if (difficulty === 'hard') maxNum = 50;

            num1 = getRandomInt(1, maxNum);
            num2 = getRandomInt(1, maxNum);
            operator1 = operators[getRandomInt(0, operators.length - 1)];

            // Simple arithmetic: X op Y = ?
            if (difficulty === 'easy' || difficulty === 'medium') {
                if (operator1 === '/') {
                    // Ensure divisible numbers for easy/medium division
                    num1 = num2 * getRandomInt(1, Math.floor(maxNum / num2));
                }
                question = `${num1} ${operator1} ${num2} = ?`;
                try {
                    answer = eval(`${num1} ${operator1} ${num2}`);
                } catch (e) {
                    console.error("Arithmetic eval error:", e);
                    return generateArithmeticPuzzle(difficulty); // Try again
                }
            } else { // Harder arithmetic: X op Y op Z = ? or (X op Y) op Z = ?
                num3 = getRandomInt(1, maxNum);
                operator2 = operators[getRandomInt(0, operators.length - 1)];

                // Ensure non-zero divisor and integer results for hard mode too, if division is involved
                if (operator1 === '/' && num2 === 0) num2 = getRandomInt(1, maxNum);
                if (operator2 === '/' && num3 === 0) num3 = getRandomInt(1, maxNum);
                if (operator1 === '/') {
                    if (num1 % num2 !== 0) { // Make num1 divisible by num2
                        num1 = num2 * getRandomInt(1, Math.floor(maxNum / num2));
                    }
                }
                if (operator2 === '/') {
                    if ((num1 * num2) % num3 !== 0 && operator1 === '*') { // Try to make intermediate result divisible
                        num3 = getRandomInt(1, Math.floor(maxNum / (num1 * num2)));
                    } else if (num1 % num3 !== 0 && operator1 !== '*') {
                        // This case is tricky. May need to regenerate. For now, just generate and ensure no NaN
                    }
                }


                const parentheses = Math.random() < 0.5; // Randomly add parentheses
                if (parentheses) {
                    question = `(${num1} ${operator1} ${num2}) ${operator2} ${num3} = ?`;
                    try {
                         answer = eval(`(${num1} ${operator1} ${num2}) ${operator2} ${num3}`);
                    } catch (e) {
                        console.error("Hard Arithmetic eval error with parentheses:", e);
                        return generateArithmeticPuzzle(difficulty); // Try again
                    }
                } else {
                    question = `${num1} ${operator1} ${num2} ${operator2} ${num3} = ?`;
                    try {
                        // JavaScript eval handles operator precedence correctly
                        answer = eval(`${num1} ${operator1} ${num2} ${operator2} ${num3}`);
                    } catch (e) {
                        console.error("Hard Arithmetic eval error without parentheses:", e);
                        return generateArithmeticPuzzle(difficulty); // Try again
                    }
                }

                // Ensure answer is a reasonable integer or simple float for display
                if (isNaN(answer) || !isFinite(answer) || Math.abs(answer) > 1000) {
                    return generateArithmeticPuzzle(difficulty); // Regenerate if answer is too complex or invalid
                }
                if (answer !== Math.floor(answer)) { // Round floats to a reasonable precision
                    answer = answer.toFixed(2);
                }
            }

            return { question: question, answer: answer };
        }

        function generateLogicPuzzle(difficulty) {
            let question, answer;
            const puzzles = {
                easy: [
                    { q: "සතුන් 5ක් කූඩුවක සිටියා. 2ක් පැනලා ගියා. කූඩුවේ කී දෙනෙක් ඉන්නවද?", a: "3 දෙනෙක්" },
                    { q: "ඔබ 3 වන ස්ථානයේ සිටින කෙනාව පසු කළා. දැන් ඔබ කී වන ස්ථානයේ ද?", a: "3 වන ස්ථානයේ" },
                    { q: "මේ මාසයේ දින 30ක් නැති මාස කීයක් තියෙනවද?", a: "11ක් (සියලුම මාස 30ක් නැහැ)" },
                    { q: "කුරුල්ලෝ 2ක් ගහක් උඩ හිටියා. තවත් 3ක් ආවා. එකෙක් පියාඹලා ගියා. දැන් කී දෙනෙක් ඉන්නවද?", a: "4 දෙනෙක්" }
                ],
                medium: [
                    { q: "දවසේ අටෙන් එකක් නින්දට, හයෙන් එකක් වැඩට, දොළහෙන් එකක් කෑමට යනවා නම්, දවසේ ඉතිරි කොටස කොපමණද?", a: "දවසේ අඩක් (1/2)" },
                    { q: "සහෝදරියන්ට සමාන සහෝදරයන් ප්‍රමාණයක් සිටින සහෝදරයන්ට ඔවුන්ගේ සහෝදරයන් මෙන් දෙගුණයක් සහෝදරියන් සිටී නම්, පවුලේ සහෝදරයන් සහ සහෝදරියන් කී දෙනෙක් සිටීද?", a: "සහෝදරයන් 2ක්, සහෝදරියන් 3ක්" },
                    { q: "මිනිසෙකු තම පුතාට කිව්වා, 'මම ඔයාගේ වයසින් හිටියා, ඔයා දැන් ඉන්න වයසේදී.' පුතා දැන් අවුරුදු 20 නම්, පියාට අවුරුදු 40 නම්, පියාට පුතාගේ වයස තිබුනේ කීයටද?", a: "පියාට අවුරුදු 30 දී" }
                ],
                hard: [
                    { q: "ඔබට ඊතල 3ක් සහ ඉලක්ක 2ක් තිබේ. ඉලක්ක දෙකම එකවර පහර දිය හැක්කේ කෙසේද?", a: "එක් ඊතලයක් අනෙක් ඊතලයට විදින්න." },
                    { q: "මාසයකින් දින 31ක් ඇති මාස කීයක් තිබේද?", a: "7 ක් (ජනවාරි, මාර්තු, මැයි, ජූලි, අගෝස්තු, ඔක්තෝබර්, දෙසැම්බර්)" },
                    { q: "මට පුටු 6ක් තියෙන කාමර 6ක් තියෙනවා. හැම පුටුවකම කකුල් 4ක් තියෙනවා. එක කාමරයක මේස කීයක් තියෙනවද?", a: "මේස කීයක් තියෙනවද කියලා දීලා නැහැ, පුටු ගැන විතරයි තියෙන්නේ." }
                ]
            };
            
            const selectedPuzzles = puzzles[difficulty];
            const randomIndex = getRandomInt(0, selectedPuzzles.length - 1);
            ({ q: question, a: answer } = selectedPuzzles[randomIndex]);
            return { question, answer };
        }

        function generateAlgebraPuzzle(difficulty) {
            let x, num1, num2, num3;
            let question, answer;

            const operators = ['+', '-']; // Simple for algebra
            
            // Adjust ranges based on difficulty
            let maxNum = 10;
            if (difficulty === 'medium') maxNum = 20;
            if (difficulty === 'hard') maxNum = 30;

            num1 = getRandomInt(1, maxNum);
            num2 = getRandomInt(1, maxNum);
            operator1 = operators[getRandomInt(0, operators.length - 1)];

            if (difficulty === 'easy') {
                x = getRandomInt(1, 10);
                let result = eval(`${x} ${operator1} ${num1}`);
                question = `x ${operator1} ${num1} = ${result}. x හි අගය කීයද?`;
                answer = `x = ${x}`;
            } else if (difficulty === 'medium') {
                x = getRandomInt(1, 15);
                num3 = getRandomInt(1, maxNum);
                operator2 = operators[getRandomInt(0, operators.length - 1)];
                let result = eval(`${x} ${operator1} ${num1} ${operator2} ${num2}`);
                question = `x ${operator1} ${num1} ${operator2} ${num2} = ${result}. x හි අගය කීයද?`;
                answer = `x = ${x}`;
            } else { // Hard
                x = getRandomInt(1, 20);
                num3 = getRandomInt(1, maxNum);
                operator2 = operators[getRandomInt(0, operators.length - 1)];
                let coefficient = getRandomInt(2, 5); // Add a coefficient
                let result = eval(`${coefficient} * ${x} ${operator1} ${num1} ${operator2} ${num2}`);
                question = `${coefficient}x ${operator1} ${num1} ${operator2} ${num2} = ${result}. x හි අගය කීයද?`;
                answer = `x = ${x}`;
            }

            return { question, answer };
        }

        function generateSequencePuzzle(difficulty) {
            let question, answer;
            let sequence = [];
            let nextTerm;

            const maxLen = 6; // Max length of sequence displayed
            let firstTermRange = [1, 10];
            let diffOrRatioRange = [1, 5];
            let nTerms = getRandomInt(4, maxLen); // How many terms to show

            if (difficulty === 'medium') {
                firstTermRange = [1, 20];
                diffOrRatioRange = [2, 7];
            } else if (difficulty === 'hard') {
                firstTermRange = [1, 30];
                diffOrRatioRange = [2, 10];
                nTerms = getRandomInt(5, maxLen);
            }

            const type = Math.random() < 0.5 ? 'arithmetic' : 'geometric';

            if (type === 'arithmetic') {
                const a1 = getRandomInt(firstTermRange[0], firstTermRange[1]);
                const d = getRandomInt(diffOrRatioRange[0], diffOrRatioRange[1]) * (Math.random() < 0.5 ? 1 : -1); // Can be negative
                
                for (let i = 0; i < nTerms; i++) {
                    sequence.push(a1 + i * d);
                }
                nextTerm = a1 + nTerms * d;
                question = `මෙම අංක ගණිතමය අනුක්‍රමයේ ඊළඟ පදය සොයන්න: ${sequence.join(', ')}, ?`;
                answer = `ඊළඟ පදය: ${nextTerm}`;
            } else { // Geometric sequence
                const a1 = getRandomInt(firstTermRange[0], firstTermRange[1]);
                const r = getRandomInt(diffOrRatioRange[0], diffOrRatioRange[1]); // Keep ratio positive integer for simplicity
                
                for (let i = 0; i < nTerms; i++) {
                    sequence.push(a1 * Math.pow(r, i));
                }
                nextTerm = a1 * Math.pow(r, nTerms);
                question = `මෙම ජ්‍යාමිතික අනුක්‍රමයේ ඊළඟ පදය සොයන්න: ${sequence.join(', ')}, ?`;
                answer = `ඊළඟ පදය: ${nextTerm}`;
            }

            return { question, answer };
        }


        function generatePuzzle() {
            clearMessages();
            const difficulty = difficultySelect.value;
            const puzzleType = puzzleTypeSelect.value;
            let puzzle = {};

            try {
                switch (puzzleType) {
                    case 'arithmetic':
                        puzzle = generateArithmeticPuzzle(difficulty);
                        break;
                    case 'logic':
                        puzzle = generateLogicPuzzle(difficulty);
                        break;
                    case 'algebra':
                        puzzle = generateAlgebraPuzzle(difficulty);
                        break;
                    case 'sequence':
                        puzzle = generateSequencePuzzle(difficulty);
                        break;
                    default:
                        puzzle = { question: "ප්‍රහේලිකා වර්ගය තෝරන්න.", answer: "තෝරාගත් වර්ගය අනුව පිළිතුර පෙන්වනු ඇත." };
                }

                puzzleQuestion.textContent = puzzle.question;
                puzzleAnswer.textContent = `පිළිතුර: ${puzzle.answer}`;
                puzzleAnswer.style.display = 'none'; // Hide answer initially
                showAnswerBtn.style.display = 'inline-block'; // Show "Show Answer" button
                puzzleDisplay.style.display = 'block';

            } catch (e) {
                console.error("Error generating puzzle:", e);
                errorMessage.style.display = 'block';
                puzzleDisplay.style.display = 'none';
            }
        }

        function clearMessages() {
            errorMessage.style.display = 'none';
            puzzleDisplay.style.display = 'none';
            puzzleQuestion.textContent = '';
            puzzleAnswer.textContent = '';
            showAnswerBtn.style.display = 'none';
        }

    </script>

</body>
</html>