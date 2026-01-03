<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>අවකලන ගණනය | Derivatives Calculator | Maths Pissa</title>
    <link href="https://fonts.css.lk/noto-sans-sinhala/latest.css">
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
            --button-primary: #FFB300;         /* කහ-තැඹිලි */
            --button-hover: #FF8F00;
            --result-bg: #fff8e1;              /* ඉතා ලා කහ */
            --accent-yellow: #FFC107;          /* කහ */
            --light-yellow-border: #ffecb3;    /* ලා කහ මායිම */
            --dark-red: #c62828;
            --step-color: #FBC02D;             /* තද කහ */
            --step-bg: #fffde7;                /* ඉතා ලා කහ */
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
            border-left: 6px solid var(--accent-yellow);
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
            max-width: 600px;
            text-align: left;
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--accent-yellow);
        }
        .input-group label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-yellow);
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
            box-shadow: 0 0 0 4px rgba(255, 179, 0, 0.2);
            outline: none;
        }
        .input-group input[type="text"]::placeholder {
            color: #aaa;
        }
        
        .calculate-button {
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

        .calculate-button:hover {
            background-color: var(--button-hover);
            transform: translateY(-2px);
        }
        
        /* Result Section */
        .result-section {
            margin-top: 40px;
            padding: 30px;
            background-color: var(--result-bg);
            border-radius:15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: left;
            border: 1px solid var(--light-yellow-border);
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
            color: var(--accent-yellow);
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
            color: var(--accent-yellow);
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
            .calculate-button {
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
            <h1>අවකලන (Derivatives) ගණනය ✨</h1>
            <p class="description">සරල අවකලන ගැටළු පියවරෙන් පියවර විසඳා බලන්න. (උදා: `x^2 + 3x - 5`, `sin(x)`, `e^x`)</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="expressionInput"><i class="fas fa-calculator"></i> අවකලනය කළ යුතු ප්‍රකාශනය ඇතුළත් කරන්න:</label>
                    <input type="text" id="expressionInput" placeholder="උදා: 3x^4 - 2x + 7, sin(x), e^x">
                </div>
            </div>
            
            <button id="calculateBtn" class="calculate-button"><i class="fas fa-cogs"></i> ගණනය කරන්න</button>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු අවකලන ප්‍රකාශනයක් ඇතුළත් කරන්න. (සරල බහුවලදී, ත්‍රිකෝණමිතික, ඝාතීය ශ්‍රිත පමණක් දැනට සහය දක්වයි)
            </div>

            <div id="resultSection" class="result-section">
                <h2>අවකලන විසඳුම <i class="fas fa-chart-line"></i></h2>
                
                <div class="solution-steps" id="solutionSteps">
                    {{-- Solution steps will be dynamically inserted here --}}
                </div>
            </div>

            <div class="explanation-section">
                <h3>අවකලනය (Differentiation) යනු කුමක්ද?</h3>
                <div id="explanationStepsText" class="explanation-steps-text">
                    <p>අවකලනය යනු <strong>ශ්‍රිතයක වෙනස්වීමේ සීඝ්‍රතාවය</strong> (rate of change) මැනීම සඳහා භාවිතා කරන ගණිතමය ක්‍රියාවලියකි. මෙය ප්‍රධාන වශයෙන් කොටස් දෙකකට බෙදා දැක්විය හැක:</p>
                    <p>1. <strong>ශ්‍රිතයක අනුක්‍රමණය (Gradient of a Function):</strong><br>
                    ඕනෑම ලක්ෂ්‍යයකදී වක්‍රයක ස්පර්ශකයේ (tangent) අනුක්‍රමණය සොයා ගැනීමට අවකලනය භාවිතා කරයි.</p>
                    <p>2. <strong>වෙනස්වීමේ සීඝ්‍රතාවය (Rate of Change):</strong><br>
                    විචල්‍යයක් (variable) වෙනස් වන විට තවත් විචල්‍යයක් (variable) වෙනස් වන ආකාරය විස්තර කිරීමට මෙය උපකාරී වේ. උදාහරණයක් ලෙස, වේගය යනු පිහිටීමෙහි (position) වෙනස්වීමේ සීඝ්‍රතාවයයි.</p>
                    <p><strong>මූලික අවකලන නීති:</strong></p>
                    <ul>
                        <li><strong>බල නීතිය (Power Rule):</strong> <code>d/dx (x^n) = n * x^(n-1)</code></li>
                        <li><strong>ස්ථිර සංඛ්‍යා නීතිය (Constant Rule):</strong> <code>d/dx (c) = 0</code> (c යනු ස්ථිර සංඛ්‍යාවක්)</li>
                        <li><strong>ස්ථිර සංඛ්‍යා ගුණ කිරීමේ නීතිය (Constant Multiple Rule):</strong> <code>d/dx (c * f(x)) = c * d/dx (f(x))</code></li>
                        <li><strong>එකතු කිරීමේ/අඩු කිරීමේ නීතිය (Sum/Difference Rule):</strong> <code>d/dx (f(x) ± g(x)) = d/dx (f(x)) ± d/dx (g(x))</code></li>
                    </ul>
                    <p><strong>පොදු අවකලන:</strong></p>
                    <ul>
                        <li><code>d/dx (sin(x)) = cos(x)</code></li>
                        <li><code>d/dx (cos(x)) = -sin(x)</code></li>
                        <li><code>d/dx (tan(x)) = sec^2(x)</code></li>
                        <li><code>d/dx (e^x) = e^x</code></li>
                        <li><code>d/dx (ln(x)) = 1/x</code></li>
                    </ul>
                    <p><strong> මතක තබා ගන්න:</strong> අවකලනය භෞතික විද්‍යාව, ඉංජිනේරු විද්‍යාව, ආර්ථික විද්‍යාව වැනි ක්ෂේත්‍රවල ඉතා වැදගත් මෙවලමකි!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const expressionInput = document.getElementById('expressionInput');
        const calculateBtn = document.getElementById('calculateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const solutionSteps = document.getElementById('solutionSteps');

        calculateBtn.addEventListener('click', calculateDerivative);
        expressionInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                calculateDerivative();
            }
        });

        function calculateDerivative() {
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';
            solutionSteps.innerHTML = ''; // Clear previous steps

            let expression = expressionInput.value.trim().toLowerCase();
            let steps = [];
            let derivative = '';

            try {
                if (expression.includes('sin(x)')) {
                    derivative = 'cos(x)';
                    steps.push(`<div class="step"><strong>ප්‍රකාශනය:</strong> ${expressionInput.value}</div>`);
                    steps.push(`<div class="step">sin(x) හි අවකලනය cos(x) වේ.</div>`);
                } else if (expression.includes('cos(x)')) {
                    derivative = '-sin(x)';
                    steps.push(`<div class="step"><strong>ප්‍රකාශනය:</strong> ${expressionInput.value}</div>`);
                    steps.push(`<div class="step">cos(x) හි අවකලනය -sin(x) වේ.</div>`);
                } else if (expression.includes('e^x')) {
                    derivative = 'e^x';
                    steps.push(`<div class="step"><strong>ප්‍රකාශනය:</strong> ${expressionInput.value}</div>`);
                    steps.push(`<div class="step">e^x හි අවකලනය e^x වේ.</div>`);
                } else if (expression.includes('ln(x)')) {
                    derivative = '1/x';
                    steps.push(`<div class="step"><strong>ප්‍රකාශනය:</strong> ${expressionInput.value}</div>`);
                    steps.push(`<div class="step">ln(x) හි අවකලනය 1/x වේ.</div>`);
                } else {
                    // Handle polynomial expressions like ax^n + bx^m + c
                    // First, normalize the expression for easy parsing
                    expression = expression.replace(/\s/g, ''); // Remove all spaces
                    expression = expression.replace(/-/g, '+-'); // Convert "x-y" to "x+-y"
                    if (expression.startsWith('+')) expression = expression.substring(1);

                    let terms = expression.split('+').filter(term => term !== '');
                    let derivedTerms = [];

                    steps.push(`<div class="step"><strong>ප්‍රකාශනය:</strong> ${expressionInput.value}</div>`);
                    steps.push(`<div class="step">එකතු කිරීමේ/අඩු කිරීමේ නීතිය යොදන්න (සෑම පදයක්ම වෙන වෙනම අවකලනය කරන්න).</div>`);
                    
                    terms.forEach(term => {
                        let originalTerm = term;
                        let derivedTerm = '';
                        
                        if (term.includes('x')) {
                            const parts = term.split('x');
                            let coefficient = parseFloat(parts[0]) || (parts[0] === '-' ? -1 : 1);
                            let power = 1;

                            if (parts[1] && parts[1].startsWith('^')) {
                                power = parseFloat(parts[1].substring(1));
                            }

                            if (isNaN(coefficient) || isNaN(power)) {
                                throw new Error("Invalid term: " + term);
                            }

                            if (power === 0) { // e.g., 5x^0 = 5, derivative is 0
                                derivedTerm = '0';
                                steps.push(`<div class="step">පදය ${originalTerm}: බලය 0 බැවින් අවකලනය 0 වේ.</div>`);
                            } else {
                                let newCoefficient = coefficient * power;
                                let newPower = power - 1;
                                
                                if (newPower === 0) {
                                    derivedTerm = `${newCoefficient}`;
                                    steps.push(`<div class="step">පදය ${originalTerm}: බල නීතිය යොදන්න (${coefficient} * ${power})x^(${power}-1) = ${newCoefficient}x^0 = ${newCoefficient}</div>`);
                                } else if (newPower === 1) {
                                    derivedTerm = `${newCoefficient}x`;
                                    steps.push(`<div class="step">පදය ${originalTerm}: බල නීතිය යොදන්න (${coefficient} * ${power})x^(${power}-1) = ${newCoefficient}x</div>`);
                                } else {
                                    derivedTerm = `${newCoefficient}x^${newPower}`;
                                    steps.push(`<div class="step">පදය ${originalTerm}: බල නීතිය යොදන්න (${coefficient} * ${power})x^(${power}-1) = ${newCoefficient}x^${newPower}</div>`);
                                }
                            }
                        } else { // Constant term
                            derivedTerm = '0';
                            steps.push(`<div class="step">පදය ${originalTerm}: ස්ථිර සංඛ්‍යා නීතිය අනුව අවකලනය 0 වේ.</div>`);
                        }
                        if (derivedTerm !== '0') {
                            derivedTerms.push(derivedTerm);
                        }
                    });

                    if (derivedTerms.length === 0) {
                        derivative = '0';
                    } else {
                        derivative = derivedTerms.join(' + ').replace(/\+\s*-/g, '- '); // Format output
                    }
                }
                
                solutionSteps.innerHTML = steps.join('') + `<div class="step final-answer">අවසාන අවකලනය: ${derivative}</div>`;
                resultSection.style.display = 'block';

            } catch (e) {
                console.error("Error calculating derivative:", e);
                errorMessage.textContent = "අවකලනය ගණනය කිරීමේදී දෝෂයක් ඇති විය. කරුණාකර වලංගු සරල ප්‍රකාශනයක් ඇතුළත් කරන්න. (සරල බහුවලදී, sin(x), cos(x), e^x, ln(x) පමණක් දැනට සහය දක්වයි)";
                errorMessage.style.display = 'block';
            }
        }
    </script>

</body>
</html>