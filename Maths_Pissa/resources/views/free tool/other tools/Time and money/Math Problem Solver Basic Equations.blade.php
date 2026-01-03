<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ගණිතමය ප්‍රශ්න විසඳන යන්ත්‍රය | Math Problem Solver | Maths Pissa</title>
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
            --button-primary: #1E88E5;         /* නිල් */
            --button-hover: #1976D2;
            --result-bg: #e3f2fd;              /* ඉතා ලා නිල් */
            --accent-blue: #2196F3;            /* ලා නිල් */
            --light-blue-bg: #e0f2f7;          /* ඉතා ලා නිල්-කොළ */
            --dark-red: #c62828;
            --step-color: #4CAF50;             /* කොළ */
            --step-bg: #f1f8e9;                /* ලා කොළ */
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
            border-left: 6px solid var(--accent-blue);
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
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .input-group {
            width: 100%;
            max-width: 500px;
            text-align: left;
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--accent-blue);
        }
        .input-group label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-blue);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .input-group input[type="text"] {
            width: calc(100% - 24px); /* Adjust for padding */
            padding: 12px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.1em;
            color: var(--text-dark);
            background-color: var(--card-bg);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }
        .input-group input[type="text"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(30, 136, 229, 0.2);
            outline: none;
        }
        .input-group input[type="text"]::placeholder {
            color: #aaa;
        }
        
        .solve-button {
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

        .solve-button:hover {
            background-color: var(--button-hover);
            transform: translateY(-2px);
        }
        
        /* Result Section */
        .result-section {
            margin-top: 40px;
            padding: 30px;
            background-color: var(--result-bg);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: left;
            border: 1px solid #90caf9; /* Light blue */
            display: none; /* මුලින් සඟවා තබයි */
        }

        .result-section h2 {
            color: var(--primary-gradient-end);
            font-size: 2em;
            margin-bottom: 25px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .result-section h2 i {
            color: var(--accent-blue);
        }

        .solution-steps {
            background-color: var(--step-bg);
            padding: 20px;
            border-radius: 10px;
            border: 1px dashed var(--step-color);
        }

        .solution-steps .step {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed rgba(0,0,0,0.1);
            font-size: 1.1em;
            color: var(--text-dark);
        }
        .solution-steps .step:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .solution-steps .step strong {
            color: var(--step-color);
        }
        .solution-steps .final-answer {
            font-size: 1.8em;
            font-weight: 700;
            color: var(--header-bg);
            text-align: center;
            margin-top: 20px;
        }


        .explanation-section h3 {
            color: var(--accent-blue);
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 15px;
            text-align: center;
        }

        .explanation-steps-text {
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            text-align: left;
        }

        .explanation-steps-text p {
            font-size: 1.05em;
            margin-bottom: 10px;
            line-height: 1.6;
            color: var(--text-dark);
        }
        
        .explanation-steps-text strong {
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
            .input-group {
                max-width: 95%; /* Adjust for mobile */
            }
            .input-group input[type="text"] {
                font-size: 1em;
                padding: 10px;
            }
            .solve-button {
                font-size: 1.1em;
                padding: 10px 20px;
                width: 100%;
            }
            .result-section h2 {
                font-size: 1.6em;
            }
            .solution-steps .step {
                font-size: 1em;
            }
            .solution-steps .final-answer {
                font-size: 1.5em;
            }
            .explanation-section h3 {
                font-size: 1.3em;
            }
            .explanation-steps-text p {
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
            .result-section h2 {
                font-size: 1.4em;
            }
            .solution-steps .final-answer {
                font-size: 1.3em;
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
            <h1>ගණිතමය ප්‍රශ්න විසඳන යන්ත්‍රය ✨</h1>
            <p class="description">සරල වීජ ගණිත සමීකරණ විසඳා, පියවරෙන් පියවර පිළිතුර බලන්න. උදා: `2x + 5 = 15` හෝ `3x - 7 = x + 3`</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="equationInput"><i class="fas fa-terminal"></i> සමීකරණය ඇතුළත් කරන්න (x සමඟ):</label>
                    <input type="text" id="equationInput" placeholder="උදා: 2x + 5 = 15">
                </div>
            </div>
            
            <button id="solveBtn" class="solve-button"><i class="fas fa-play-circle"></i> විසඳන්න</button>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු සරල වීජ ගණිත සමීකරණයක් ඇතුළත් කරන්න. (උදා: 2x + 5 = 15, 3x - 7 = x + 3)
            </div>

            <div id="resultSection" class="result-section">
                <h2>සමීකරණය විසඳීම <i class="fas fa-lightbulb"></i></h2>
                
                <div class="solution-steps" id="solutionSteps">
                    {{-- Solution steps will be dynamically inserted here --}}
                </div>
            </div>

            <div class="explanation-section">
                <h3>වීජ ගණිත සමීකරණ විසඳන්නේ කෙසේද?</h3>
                <div id="explanationStepsText" class="explanation-steps-text">
                    <p>1. <strong>විචල්‍යය වෙන් කිරීම (Isolate the Variable):</strong><br>
                    ඔබට සොයාගත යුතු විචල්‍යය (උදා: x) සමීකරණයේ එක් පැත්තක තනි කිරීමට උත්සාහ කරන්න.</p>
                    <p>2. <strong>ප්‍රතිලෝම ක්‍රියාකාරකම් (Inverse Operations):</strong><br>
                    විචල්‍යය වෙන් කිරීමට එකතු කිරීමේ ප්‍රතිලෝමය අඩු කිරීම ද, ගුණ කිරීමේ ප්‍රතිලෝමය බෙදීම ද යනාදී වශයෙන් ප්‍රතිලෝම ක්‍රියාකාරකම් භාවිතා කරන්න.</p>
                    <p>3. <strong>දෙපැත්තටම එකම දේ කිරීම (Do the Same to Both Sides):</strong><br>
                    සමීකරණය සමතුලිතව තබා ගැනීමට, ඔබ සමීකරණයේ එක් පැත්තකට කරන ඕනෑම ක්‍රියාවක් (එකතු කිරීම, අඩු කිරීම, ගුණ කිරීම, බෙදීම) අනෙක් පැත්තටත් කළ යුතුය.</p>
                    <p>4. <strong>සරල කිරීම (Simplify):</strong><br>
                    සෑම පියවරකින් පසු සමීකරණය සරල කරන්න.</p>
                    <p><strong> මතක තබා ගන්න:</strong> සමීකරණ විසඳීම ප්‍රහේලිකාවක් විසඳීම වැනියි - සෑම පියවරක්ම ඔබව අවසාන පිළිතුරට සමීප කරයි!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const equationInput = document.getElementById('equationInput');
        const solveBtn = document.getElementById('solveBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const solutionSteps = document.getElementById('solutionSteps');

        solveBtn.addEventListener('click', solveEquation);
        equationInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                solveEquation();
            }
        });

        // Basic equation solver for ax + b = cx + d type equations
        function solveEquation() {
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';
            solutionSteps.innerHTML = ''; // Clear previous steps

            let equation = equationInput.value.replace(/\s/g, ''); // Remove all spaces
            
            // Basic validation for an equation with '=' and 'x'
            if (!equation.includes('=') || !equation.includes('x')) {
                errorMessage.textContent = "කරුණාකර වලංගු සරල වීජ ගණිත සමීකරණයක් ඇතුළත් කරන්න. (උදා: 2x + 5 = 15)";
                errorMessage.style.display = 'block';
                return;
            }

            try {
                let parts = equation.split('=');
                let leftSide = parseExpression(parts[0]);
                let rightSide = parseExpression(parts[1]);

                let steps = [];
                steps.push(`<div class="step"><strong>ප්‍රශ්නය:</strong> ${equationInput.value}</div>`);

                // Collect x terms on one side, constants on the other
                // Goal: (leftX - rightX)x = (rightConst - leftConst)
                let xTermOnLeft = leftSide.xCoeff;
                let constTermOnLeft = leftSide.constant;
                let xTermOnRight = rightSide.xCoeff;
                let constTermOnRight = rightSide.constant;

                // Move x terms to the left
                if (xTermOnRight !== 0) {
                    const op = xTermOnRight > 0 ? '-' : '+';
                    const absX = Math.abs(xTermOnRight);
                    steps.push(`<div class="step">දෙපැත්තෙන්ම ${absX}x ${op === '-' ? 'එකතු කරන්න' : 'අඩු කරන්න'}: <br> 
                                ${formatSide(xTermOnLeft, constTermOnLeft)} ${op} ${absX}x = ${formatSide(xTermOnRight, constTermOnRight)} ${op} ${absX}x</div>`);
                    xTermOnLeft -= xTermOnRight;
                    xTermOnRight = 0;
                    steps.push(`<div class="step">සරල කරන්න: <br> ${formatSide(xTermOnLeft, constTermOnLeft)} = ${formatSide(xTermOnRight, constTermOnRight)}</div>`);
                }

                // Move constant terms to the right
                if (constTermOnLeft !== 0) {
                    const op = constTermOnLeft > 0 ? '-' : '+';
                    const absConst = Math.abs(constTermOnLeft);
                    steps.push(`<div class="step">දෙපැත්තෙන්ම ${absConst} ${op === '-' ? 'එකතු කරන්න' : 'අඩු කරන්න'}: <br>
                                ${formatSide(xTermOnLeft, constTermOnLeft)} ${op} ${absConst} = ${formatSide(xTermOnRight, constTermOnRight)} ${op} ${absConst}</div>`);
                    constTermOnRight -= constTermOnLeft;
                    constTermOnLeft = 0;
                    steps.push(`<div class="step">සරල කරන්න: <br> ${formatSide(xTermOnLeft, constTermOnLeft)} = ${formatSide(xTermOnRight, constTermOnRight)}</div>`);
                }

                // Solve for x
                if (xTermOnLeft === 0) {
                    if (constTermOnRight === 0) {
                        steps.push(`<div class="step final-answer">x හි ඕනෑම අගයක් සඳහා සමීකරණය සත්‍ය වේ. (අනන්ත විසඳුම්)</div>`);
                    } else {
                        steps.push(`<div class="step final-answer">මෙම සමීකරණයට විසඳුම් නොමැත.</div>`);
                    }
                } else {
                    steps.push(`<div class="step">දෙපැත්තම ${xTermOnLeft} න් බෙදන්න: <br> ${formatSide(xTermOnLeft, 0)} / ${xTermOnLeft} = ${formatSide(0, constTermOnRight)} / ${xTermOnLeft}</div>`);
                    let x = constTermOnRight / xTermOnLeft;
                    steps.push(`<div class="step final-answer">පිළිතුර: x = ${x.toFixed(4).replace(/\.?0+$/, '')}</div>`); // Format to 4 decimal places, remove trailing zeros
                }

                solutionSteps.innerHTML = steps.join('');
                resultSection.style.display = 'block';

            } catch (e) {
                console.error("Error solving equation:", e);
                errorMessage.textContent = "සමීකරණය විසඳීමේදී දෝෂයක් ඇති විය. කරුණාකර වලංගු සරල සමීකරණයක් ඇතුළත් කරන්න.";
                errorMessage.style.display = 'block';
            }
        }

        // Helper function to parse an algebraic expression side (e.g., "2x+5" or "x-3")
        function parseExpression(expression) {
            let xCoeff = 0;
            let constant = 0;

            // Normalize expression for easier parsing (e.g., -x to -1x, +x to +1x, add + if first term is positive)
            expression = expression.replace(/-/g, '+-').replace(/^\+/, ''); // Replace all - with +-, add + if starts with positive
            if (expression.startsWith('x')) expression = '1x' + expression.substring(1);
            if (expression.startsWith('-x')) expression = '-1x' + expression.substring(2);

            let terms = expression.split('+').filter(term => term !== ''); // Split by '+' and remove empty strings

            terms.forEach(term => {
                term = term.trim();
                if (term.includes('x')) {
                    if (term === 'x') {
                        xCoeff += 1;
                    } else if (term === '-x') {
                        xCoeff -= 1;
                    } else {
                        let coeff = parseFloat(term.replace('x', ''));
                        xCoeff += coeff;
                    }
                } else {
                    constant += parseFloat(term);
                }
            });

            return { xCoeff, constant };
        }

        // Helper function to format a side of the equation for display
        function formatSide(xCoeff, constant) {
            let parts = [];
            if (xCoeff !== 0) {
                parts.push(xCoeff === 1 ? 'x' : xCoeff === -1 ? '-x' : `${xCoeff}x`);
            }
            if (constant !== 0) {
                if (constant > 0 && parts.length > 0) {
                    parts.push(`+ ${constant}`);
                } else {
                    parts.push(`${constant}`);
                }
            }
            if (parts.length === 0) return '0';
            return parts.join(' ').replace(/\+ -/g, '- ').replace(/^-/, '-'); // Clean up double signs
        }

    </script>

</body>
</html>