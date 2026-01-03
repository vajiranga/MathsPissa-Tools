<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>දශම, භාග, ප්‍රතිශත පරිවර්තකය | Decimal, Fraction, Percent Converter - Maths Pissa</title>
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
            --button-primary: #FFD700;         /* රන්වන් කහ */
            --button-hover: #e6c200;
            --result-bg: #fffde7;              /* ඉතා ලා කහ */
            --accent-gold: #ffc107;            /* තද කහ */
            --light-violet: #f3e5f5;           /* ලා දම් */
            --dark-violet: #6a1b9a;
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
            border-left: 6px solid var(--accent-gold);
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
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 350px;
        }
        .input-group label {
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-gold);
            margin-bottom: 10px;
        }
        .input-group input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 10px;
            font-size: 1.3em;
            text-align: center;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .input-group input[type="text"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(255, 215, 0, 0.3);
            outline: none;
        }
        .input-group input::placeholder {
            color: #aaa;
        }
        
        .input-section button {
            background-color: var(--button-primary);
            color: var(--dark-violet);
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

        .input-section button:hover {
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
            border: 1px solid #ffecb3;
            display: none; /* මුලින් සඟවා තබයි */
        }

        .result-section h2 {
            color: var(--primary-gradient-end);
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .result-section h2 i {
            color: #80cbc4; /* Teal for icon */
        }

        .result-item {
            background-color: #fffaf0;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #ffd54f;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-violet);
            text-align: center;
            word-wrap: break-word;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .result-item i {
            color: var(--accent-gold);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-gold);
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 15px;
            text-align: center;
        }

        .explanation-steps {
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
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
            .input-group input[type="text"] {
                width: 90%;
                font-size: 1.1em;
            }
            .input-section button {
                font-size: 1.1em;
                padding: 10px 20px;
            }
            .result-section h2 {
                font-size: 1.5em;
            }
            .result-item {
                font-size: 1.2em;
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
            .input-group input[type="text"] {
                width: 95%;
            }
            .input-section button {
                width: 100%;
            }
            .result-section {
                padding: 20px;
            }
            .result-item {
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
            <h1>දශම, භාග, ප්‍රතිශත පරිවර්තකය ✨</h1>
            <p class="description">දශම, භාග සහ ප්‍රතිශත අතර පහසුවෙන් පරිවර්තනය කරන්න. මෙම මූලික සංකල්ප තුන එකිනෙකට සම්බන්ධ වන ආකාරය පියවරෙන් පියවර ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="valueInput">අගයක් ඇතුළත් කරන්න (දශම, භාග, හෝ ප්‍රතිශත):</label>
                    <input type="text" id="valueInput" placeholder="උදා: 0.75 or 3/4 or 75%">
                </div>
                
                <button id="convertBtn"><i class="fas fa-sync-alt"></i> පරිවර්තනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු දශම, භාග (උදා: 3/4), හෝ ප්‍රතිශත (උදා: 75%) අගයක් ඇතුළත් කරන්න.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-star"></i></h2>
                <div class="result-item">
                    <i class="fas fa-dot-circle"></i> <strong>දශම අගය:</strong> <span id="decimalResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-grip-lines"></i> <strong>සරල කළ භාගය:</strong> <span id="fractionResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-percent"></i> <strong>ප්‍රතිශතය:</strong> <span id="percentResult"></span>
                </div>

                <div class="explanation-section">
                    <h3>පියවරෙන් පියවර පැහැදිලි කිරීම</h3>
                    <div id="explanationSteps" class="explanation-steps">
                        {{-- Explanation will be generated here --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('convertBtn').addEventListener('click', convertValues);
        document.getElementById('valueInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                convertValues();
            }
        });

        function convertValues() {
            const inputValue = document.getElementById('valueInput').value.trim();
            const resultSection = document.getElementById('resultSection');
            const decimalResultElement = document.getElementById('decimalResult');
            const fractionResultElement = document.getElementById('fractionResult');
            const percentResultElement = document.getElementById('percentResult');
            const explanationSteps = document.getElementById('explanationSteps');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            let decimal, fractionNum, fractionDen, percent;
            let explanation = '';

            // Determine input type and convert
            if (inputValue.includes('/')) { // Fraction input
                const parts = inputValue.split('/');
                const num = parseInt(parts[0]);
                const den = parseInt(parts[1]);

                if (isNaN(num) || isNaN(den) || den === 0) {
                    errorMessage.style.display = 'block';
                    return;
                }
                
                const simplified = simplifyFractionInternal(num, den);
                fractionNum = simplified.num;
                fractionDen = simplified.den;
                decimal = num / den;
                percent = decimal * 100;

                explanation = `
                    <p>ඔබ ඇතුළත් කළේ භාගයක් (${inputValue})</p>
                    <p>1. <strong>දශමයට පරිවර්තනය:</strong> <br>භාගයේ අංකය හරයෙන් බෙදන්න. (${num} ÷ ${den} = <strong>${decimal.toFixed(4)}</strong>)</p>
                    <p>2. <strong>ප්‍රතිශතයට පරිවර්තනය:</strong> <br>ලැබුණු දශම අගය 100න් ගුණ කරන්න. (${decimal.toFixed(4)} × 100 = <strong>${percent.toFixed(2)}%</strong>)</p>
                    <p>3. <strong>සරල කළ භාගය:</strong> <br>${num}/${den} සරල කළ විට <strong>${fractionNum}/${fractionDen}</strong>.</p>
                `;

            } else if (inputValue.includes('%')) { // Percent input
                const percentValue = parseFloat(inputValue.replace('%', ''));

                if (isNaN(percentValue)) {
                    errorMessage.style.display = 'block';
                    return;
                }

                percent = percentValue;
                decimal = percent / 100;
                ({ num: fractionNum, den: fractionDen } = decimalToFraction(decimal));

                explanation = `
                    <p>ඔබ ඇතුළත් කළේ ප්‍රතිශතයක් (${inputValue})</p>
                    <p>1. <strong>දශමයට පරිවර්තනය:</strong> <br>ප්‍රතිශත අගය 100න් බෙදන්න. (${percent} ÷ 100 = <strong>${decimal.toFixed(4)}</strong>)</p>
                    <p>2. <strong>භාගයට පරිවර්තනය:</strong> <br>දශම අගය භාගයක් ලෙස ලියා සරල කරන්න. (උදා: ${decimal} = ${fractionNum}/${fractionDen})</p>
                    <p>3. <strong>ප්‍රතිශතය:</strong> <br>ඔබ ඇතුළත් කළ අගයම <strong>${percent}%</strong></p>
                `;

            } else { // Decimal input (default)
                const decimalValue = parseFloat(inputValue);

                if (isNaN(decimalValue)) {
                    errorMessage.style.display = 'block';
                    return;
                }

                decimal = decimalValue;
                percent = decimal * 100;
                ({ num: fractionNum, den: fractionDen } = decimalToFraction(decimal));
                
                explanation = `
                    <p>ඔබ ඇතුළත් කළේ දශම අගයක් (${inputValue})</p>
                    <p>1. <strong>ප්‍රතිශතයට පරිවර්තනය:</strong> <br>දශම අගය 100න් ගුණ කරන්න. (${decimal} × 100 = <strong>${percent.toFixed(2)}%</strong>)</p>
                    <p>2. <strong>භාගයට පරිවර්තනය:</strong> <br>දශම අගය භාගයක් ලෙස ලියා සරල කරන්න. (උදා: ${decimal} = ${fractionNum}/${fractionDen})</p>
                    <p>3. <strong>දශම අගය:</strong> <br>ඔබ ඇතුළත් කළ අගයම <strong>${decimal}</strong></p>
                `;
            }

            decimalResultElement.textContent = decimal.toFixed(4);
            fractionResultElement.textContent = `${fractionNum}/${fractionDen}`;
            percentResultElement.textContent = `${percent.toFixed(2)}%`;

            explanationSteps.innerHTML = explanation;
            explanationSteps.innerHTML += `<p><strong> මතක තබා ගන්න:</strong> දශම, භාග සහ ප්‍රතිශත යනු එකම අගයක් විවිධ ආකාරයෙන් පෙන්වන ක්‍රම තුනක් පමණයි. ඒවා හොඳින් අවබෝධ කර ගැනීමෙන් ගණිත ගැටලු පහසුවෙන් විසඳිය හැකියි!</p>`;


            resultSection.style.display = 'block';
        }

        // GCD (HCF) function from Tool 2
        function gcd(a, b) {
            if (b === 0) return a;
            return gcd(b, a % b);
        }

        // Simplify Fraction (from Tool 3)
        function simplifyFractionInternal(num, den) {
            if (num === 0) return { num: 0, den: 1 };
            const commonDivisor = gcd(Math.abs(num), Math.abs(den));
            return { num: num / commonDivisor, den: den / commonDivisor };
        }

        // Convert Decimal to Fraction
        function decimalToFraction(decimal) {
            if (decimal === 0) return { num: 0, den: 1 };

            const tolerance = 1.0E-6; // නිරවද්‍යතාව සඳහා
            let h1 = 1, h2 = 0;
            let k1 = 0, k2 = 1;
            let b = decimal;

            do {
                let a = Math.floor(b);
                let aux = h1; h1 = a * h1 + h2; h2 = aux;
                aux = k1; k1 = a * k1 + k2; k2 = aux;
                b = 1 / (b - a);
            } while (Math.abs(decimal - h1 / k1) > decimal * tolerance);

            return simplifyFractionInternal(h1, k1);
        }
    </script>

</body>
</html>