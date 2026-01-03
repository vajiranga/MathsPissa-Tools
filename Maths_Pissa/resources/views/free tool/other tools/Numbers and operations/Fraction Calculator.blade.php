<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>භාග කැල්කියුලේටරය | Fraction Calculator - Maths Pissa</title>
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
            --button-primary: #8BC34A;         /* ලා කොළ */
            --button-hover: #7cb342;
            --result-bg: #e8f5e9;              /* ඉතා ලා කොළ */
            --accent-green: #689f38;           /* තද කොළ */
            --light-purple: #ede7f6;           /* ලා දම් */
            --dark-purple: #4527a0;
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
            border-left: 6px solid var(--accent-green);
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

        .fraction-input-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .fraction-input-group label {
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-green);
        }

        .fraction-input-group input[type="number"] {
            width: 80px;
            padding: 10px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.2em;
            text-align: center;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .fraction-input-group input[type="number"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(139, 195, 74, 0.3);
            outline: none;
        }

        .fraction-separator {
            font-size: 1.8em;
            font-weight: 700;
            color: var(--text-dark);
        }

        .operator-select {
            padding: 10px 15px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.2em;
            background-color: var(--card-bg);
            color: var(--text-dark);
            cursor: pointer;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .operator-select:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(139, 195, 74, 0.3);
            outline: none;
        }

        .input-section button {
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
            border: 1px solid #c8e6c9;
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
            color: #ffeb3b; /* Yellow star */
        }

        .result-item {
            background-color: #f7fff7;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #a5d6a7;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-purple);
            text-align: center;
            word-wrap: break-word;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .result-item i {
            color: var(--accent-green);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-green);
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
            .fraction-input-group label {
                font-size: 1.1em;
            }
            .fraction-input-group input[type="number"] {
                width: 60px;
                font-size: 1.1em;
            }
            .fraction-separator {
                font-size: 1.5em;
            }
            .operator-select {
                font-size: 1.1em;
                padding: 8px 12px;
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
            .fraction-input-group {
                flex-direction: column;
                gap: 5px;
            }
            .fraction-input-group input[type="number"] {
                width: 70px;
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
            <h1>භාග කැල්කියුලේටරය ✨</h1>
            <p class="description">භාග දෙකක් එකතු කරන්න, අඩු කරන්න, ගුණ කරන්න, හෝ බෙදන්න. පියවරෙන් පියවර පැහැදිලි කිරීම් සමඟ භාග ගණනය කරන ආකාරය පහසුවෙන් ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <div class="fraction-input-group">
                    <input type="number" id="num1" value="1" min="0" step="1">
                    <span class="fraction-separator">/</span>
                    <input type="number" id="den1" value="2" min="1" step="1">
                </div>
                
                <select id="operatorSelect" class="operator-select">
                    <option value="add">+</option>
                    <option value="subtract">-</option>
                    <option value="multiply">×</option>
                    <option value="divide">÷</option>
                </select>

                <div class="fraction-input-group">
                    <input type="number" id="num2" value="1" min="0" step="1">
                    <span class="fraction-separator">/</span>
                    <input type="number" id="den2" value="3" min="1" step="1">
                </div>
                
                <button id="calculateBtn"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර නිවැරදි භාග අගයන් ඇතුළත් කරන්න. හරය බිංදුව විය නොහැක. බෙදීමේදී දෙවන භාගය බිංදුව විය නොහැක.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-lightbulb"></i></h2>
                <div class="result-item">
                    <i class="fas fa-equals"></i> <strong>සරල කළ භාගය:</strong> <span id="finalFractionResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-calculator"></i> <strong>දශම අගය:</strong> <span id="decimalResult"></span>
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
        document.getElementById('calculateBtn').addEventListener('click', calculateFraction);
        document.querySelectorAll('.fraction-input-group input, .operator-select').forEach(element => {
            element.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    calculateFraction();
                }
            });
        });

        function calculateFraction() {
            const num1 = parseInt(document.getElementById('num1').value);
            const den1 = parseInt(document.getElementById('den1').value);
            const operator = document.getElementById('operatorSelect').value;
            const num2 = parseInt(document.getElementById('num2').value);
            const den2 = parseInt(document.getElementById('den2').value);

            const resultSection = document.getElementById('resultSection');
            const finalFractionResult = document.getElementById('finalFractionResult');
            const decimalResult = document.getElementById('decimalResult');
            const explanationSteps = document.getElementById('explanationSteps');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (isNaN(num1) || isNaN(den1) || isNaN(num2) || isNaN(den2) || den1 === 0 || den2 === 0) {
                errorMessage.style.display = 'block';
                return;
            }

            if (operator === 'divide' && num2 === 0) {
                errorMessage.style.display = 'block';
                return;
            }

            let resultNum, resultDen;
            let explanationText = '';

            switch (operator) {
                case 'add':
                    ({ num: resultNum, den: resultDen, explanation: explanationText } = addFractions(num1, den1, num2, den2));
                    break;
                case 'subtract':
                    ({ num: resultNum, den: resultDen, explanation: explanationText } = subtractFractions(num1, den1, num2, den2));
                    break;
                case 'multiply':
                    ({ num: resultNum, den: resultDen, explanation: explanationText } = multiplyFractions(num1, den1, num2, den2));
                    break;
                case 'divide':
                    ({ num: resultNum, den: resultDen, explanation: explanationText } = divideFractions(num1, den1, num2, den2));
                    break;
            }

            const simplifiedResult = simplifyFractionInternal(resultNum, resultDen);
            finalFractionResult.textContent = `${simplifiedResult.num}/${simplifiedResult.den}`;
            decimalResult.textContent = (resultNum / resultDen).toFixed(4); // දශම ස්ථාන 4කට වටකුරු කරයි

            explanationSteps.innerHTML = explanationText;
            
            // Add a concluding message
            explanationSteps.innerHTML += `<p><strong> මතක තබා ගන්න:</strong> භාග ගණන් කිරීමේදී පොදු හරයක් හෝ හරයන් ගුණ කිරීම වැදගත් වේ. දිගටම පුහුණු වන්න!</p>`;

            resultSection.style.display = 'block';
        }

        // GCD (HCF) function
        function gcd(a, b) {
            if (b === 0) return a;
            return gcd(b, a % b);
        }

        // LCM function
        function lcm(a, b) {
            return (Math.abs(a * b)) / gcd(a, b);
        }

        // Simplify Fraction
        function simplifyFractionInternal(num, den) {
            if (num === 0) return { num: 0, den: 1 };
            const commonDivisor = gcd(Math.abs(num), Math.abs(den));
            return { num: num / commonDivisor, den: den / commonDivisor };
        }

        // Add Fractions
        function addFractions(num1, den1, num2, den2) {
            const commonDenominator = lcm(den1, den2);
            const newNum1 = num1 * (commonDenominator / den1);
            const newNum2 = num2 * (commonDenominator / den2);
            const resultNum = newNum1 + newNum2;
            
            let explanation = `
                <p>1. <strong>පොදු හරය සොයා ගැනීම:</strong> <br> ${den1} සහ ${den2} හි කුඩාම පොදු ගුණාකාරය (කු.පො.ගු. - LCM) = <strong>${commonDenominator}</strong>.</p>
                <p>2. <strong>භාග පොදු හරයට ගෙන ඒම:</strong> <br>
                ${num1}/${den1} = ${num1} × ${commonDenominator / den1} / ${den1} × ${commonDenominator / den1} = <strong>${newNum1}/${commonDenominator}</strong><br>
                ${num2}/${den2} = ${num2} × ${commonDenominator / den2} / ${den2} × ${commonDenominator / den2} = <strong>${newNum2}/${commonDenominator}</strong></p>
                <p>3. <strong>අංක එකතු කිරීම:</strong> <br>
                (${newNum1} + ${newNum2}) / ${commonDenominator} = <strong>${resultNum}/${commonDenominator}</strong></p>
                <p>4. <strong>සරල කිරීම:</strong> <br>අවශ්‍ය නම්, අවසාන භාගය සරල කරන්න.</p>
            `;
            return { num: resultNum, den: commonDenominator, explanation: explanation };
        }

        // Subtract Fractions
        function subtractFractions(num1, den1, num2, den2) {
            const commonDenominator = lcm(den1, den2);
            const newNum1 = num1 * (commonDenominator / den1);
            const newNum2 = num2 * (commonDenominator / den2);
            const resultNum = newNum1 - newNum2;
            
            let explanation = `
                <p>1. <strong>පොදු හරය සොයා ගැනීම:</strong> <br> ${den1} සහ ${den2} හි කුඩාම පොදු ගුණාකාරය (කු.පො.ගු. - LCM) = <strong>${commonDenominator}</strong>.</p>
                <p>2. <strong>භාග පොදු හරයට ගෙන ඒම:</strong> <br>
                ${num1}/${den1} = ${num1} × ${commonDenominator / den1} / ${den1} × ${commonDenominator / den1} = <strong>${newNum1}/${commonDenominator}</strong><br>
                ${num2}/${den2} = ${num2} × ${commonDenominator / den2} / ${den2} × ${commonDenominator / den2} = <strong>${newNum2}/${commonDenominator}</strong></p>
                <p>3. <strong>අංක අඩු කිරීම:</strong> <br>
                (${newNum1} - ${newNum2}) / ${commonDenominator} = <strong>${resultNum}/${commonDenominator}</strong></p>
                <p>4. <strong>සරල කිරීම:</strong> <br>අවශ්‍ය නම්, අවසාන භාගය සරල කරන්න.</p>
            `;
            return { num: resultNum, den: commonDenominator, explanation: explanation };
        }

        // Multiply Fractions
        function multiplyFractions(num1, den1, num2, den2) {
            const resultNum = num1 * num2;
            const resultDen = den1 * den2;
            
            let explanation = `
                <p>1. <strong>අංක ගුණ කිරීම:</strong> <br>${num1} × ${num2} = <strong>${resultNum}</strong></p>
                <p>2. <strong>හරයන් ගුණ කිරීම:</strong> <br>${den1} × ${den2} = <strong>${resultDen}</strong></p>
                <p>3. <strong>සරල කිරීම:</strong> <br>ලැබුණු භාගය ${resultNum}/${resultDen} සරල කරන්න.</p>
            `;
            return { num: resultNum, den: resultDen, explanation: explanation };
        }

        // Divide Fractions
        function divideFractions(num1, den1, num2, den2) {
            // පළමු භාගය දෙවන භාගයේ ප්‍රතිලෝමයෙන් ගුණ කරන්න
            const resultNum = num1 * den2;
            const resultDen = den1 * num2;

            let explanation = `
                <p>1. <strong>දෙවන භාගයේ ප්‍රතිලෝමය:</strong> <br>${num2}/${den2} හි ප්‍රතිලෝමය (අංකය සහ හරය මාරු කිරීම) <strong>${den2}/${num2}</strong> වේ.</p>
                <p>2. <strong>පළමු භාගය ප්‍රතිලෝමයෙන් ගුණ කිරීම:</strong> <br>දැන්, ${num1}/${den1} × ${den2}/${num2} ලෙස ගුණ කරන්න.</p>
                <p>3. <strong>අංක ගුණ කිරීම:</strong> <br>${num1} × ${den2} = <strong>${resultNum}</strong></p>
                <p>4. <strong>හරයන් ගුණ කිරීම:</strong> <br>${den1} × ${num2} = <strong>${resultDen}</strong></p>
                <p>5. <strong>සරල කිරීම:</strong> <br>ලැබුණු භාගය ${resultNum}/${resultDen} සරල කරන්න.</p>
            `;
            return { num: resultNum, den: resultDen, explanation: explanation };
        }
    </script>

</body>
</html>