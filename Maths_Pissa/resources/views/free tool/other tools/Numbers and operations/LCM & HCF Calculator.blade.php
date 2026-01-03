<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>කු.පො.ගු. / ම.පො.ස. | LCM & HCF - Maths Pissa</title>
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
            --button-primary: #007bff;         /* නිල් */
            --button-hover: #0056b3;
            --result-bg: #e0f2f7;              /* ලා නිල් */
            --accent-blue: #2196f3;            /* තද නිල් */
            --light-orange: #fff3e0;           /* ලා තැඹිලි */
            --dark-orange: #e65100;
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

        .input-section label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-blue);
            margin-bottom: 15px;
        }

        .input-section input[type="text"] {
            width: 80%;
            max-width: 400px;
            padding: 12px 15px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 10px;
            font-size: 1.3em;
            text-align: center;
            margin-bottom: 20px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-section input[type="text"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(0, 123, 255, 0.3);
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
            border: 1px solid #b3e5fc;
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
            color: #ffcc80; /* Icon color */
        }

        .result-item {
            background-color: #f5fafd;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #c0d8f0;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-orange);
            text-align: center;
            word-wrap: break-word;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .result-item i {
            color: var(--accent-blue);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-blue);
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
            .input-section input[type="text"] {
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
            .input-section input[type="text"] {
                width: 95%;
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
            <h1>කු.පො.ගු. / ම.පො.ස. සොයනය ✨</h1>
            <p class="description">සංඛ්‍යා දෙකක හෝ වැඩි ගණනක කුඩාම පොදු ගුණාකාරය (කු.පො.ගු.) සහ විශාලතම පොදු සාධකය (ම.පො.සා.) පහසුවෙන් සොයා ගන්න. ප්‍රථමක සාධක භාවිතයෙන් මේවා සොයා ගන්නා ආකාරය පියවරෙන් පියවර ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <label for="numbersInput">සංඛ්‍යා ඇතුළත් කරන්න (කොමාවලින් වෙන් කර):</label>
                <input type="text" id="numbersInput" placeholder="උදා: 12, 18, 30">
                <button id="calculateBtn"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර ධන පූර්ණ සංඛ්‍යා දෙකක් හෝ වැඩි ගණනක් කොමාවලින් වෙන් කර ඇතුළත් කරන්න.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-lightbulb"></i></h2>
                <div class="result-item">
                    <i class="fas fa-compress-alt"></i> <strong>ම.පො.සා. (HCF):</strong> <span id="hcfResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-expand-alt"></i> <strong>කු.පො.ගු. (LCM):</strong> <span id="lcmResult"></span>
                </div>

                <div class="explanation-section">
                    <h3>පියවරෙන් පියවර පැහැදිලි කිරීම</h3>
                    <div class="explanation-steps">
                        <p>1. <strong>සංඛ්‍යා විශ්ලේෂණය:</strong> <br>මුලින්ම, ඔබ ඇතුළත් කළ එක් එක් සංඛ්‍යාවේ ප්‍රථමක සාධක සොයා ගන්න.</p>
                        <p id="primeFactorsExplanation">
                            {{-- මෙහි එක් එක් සංඛ්‍යාවේ ප්‍රාථමික සාධක පෙන්වයි --}}
                        </p>
                        <p>2. <strong>ම.පො.සා. (HCF) සොයා ගැනීම:</strong> <br>සියලුම සංඛ්‍යාවලට පොදු වන ප්‍රථමක සාධක තෝරාගෙන ඒවා ගුණ කරන්න. (කුඩාම දර්ශකය සහිත ඒවා)</p>
                        <p id="hcfExplanation">
                            {{-- මෙහි HCF සොයාගත් ආකාරය පෙන්වයි --}}
                        </p>
                        <p>3. <strong>කු.පො.ගු. (LCM) සොයා ගැනීම:</strong> <br>සියලුම සංඛ්‍යාවල ඇති සෑම ප්‍රථමක සාධකයක්ම (විශාලතම දර්ශකය සහිතව) තෝරාගෙන ඒවා ගුණ කරන්න.</p>
                        <p id="lcmExplanation">
                            {{-- මෙහි LCM සොයාගත් ආකාරය පෙන්වයි --}}
                        </p>
                        <p><strong> මතක තබා ගන්න:</strong> ගණිතය යනු පුහුණුවෙන් දියුණු වන විෂයකි. දිගටම උත්සාහ කරන්න!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('calculateBtn').addEventListener('click', calculateLCMandHCF);
        document.getElementById('numbersInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                calculateLCMandHCF();
            }
        });

        function calculateLCMandHCF() {
            const numbersInput = document.getElementById('numbersInput');
            const numbersString = numbersInput.value;
            const numbers = numbersString.split(',').map(num => parseInt(num.trim())).filter(num => !isNaN(num) && num > 0);

            const resultSection = document.getElementById('resultSection');
            const hcfResultElement = document.getElementById('hcfResult');
            const lcmResultElement = document.getElementById('lcmResult');
            const errorMessage = document.getElementById('errorMessage');
            const primeFactorsExplanation = document.getElementById('primeFactorsExplanation');
            const hcfExplanation = document.getElementById('hcfExplanation');
            const lcmExplanation = document.getElementById('lcmExplanation');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (numbers.length < 2) {
                errorMessage.style.display = 'block';
                return;
            }

            // Calculate HCF and LCM
            const hcf = findHCF(numbers);
            const lcm = findLCM(numbers);

            hcfResultElement.textContent = hcf;
            lcmResultElement.textContent = lcm;
            
            // Generate explanations
            generateExplanations(numbers, primeFactorsExplanation, hcfExplanation, lcmExplanation, hcf, lcm);

            resultSection.style.display = 'block';
        }

        // --- Helper functions from Tool 1 (getPrimeFactors, formatFactors) ---
        function getPrimeFactors(n) {
            const factors = [];
            let divisor = 2;
            while (n > 1) {
                if (n % divisor === 0) {
                    factors.push(divisor);
                    n /= divisor;
                } else {
                    divisor++;
                }
            }
            return factors;
        }

        function formatFactors(factors) {
            const counts = {};
            factors.forEach(factor => {
                counts[factor] = (counts[factor] || 0) + 1;
            });
            let result = [];
            for (const factor in counts) {
                if (counts[factor] === 1) {
                    result.push(factor);
                } else {
                    result.push(`${factor}^${counts[factor]}`);
                }
            }
            return result.join(' × ');
        }
        
        // --- HCF (GCD) Calculation ---
        function gcd(a, b) {
            if (b === 0) return a;
            return gcd(b, a % b);
        }

        function findHCF(numbers) {
            let result = numbers[0];
            for (let i = 1; i < numbers.length; i++) {
                result = gcd(result, numbers[i]);
            }
            return result;
        }

        // --- LCM Calculation ---
        function lcm(a, b) {
            return (a * b) / gcd(a, b);
        }

        function findLCM(numbers) {
            let result = numbers[0];
            for (let i = 1; i < numbers.length; i++) {
                result = lcm(result, numbers[i]);
            }
            return result;
        }

        // --- Explanation Generation ---
        function generateExplanations(numbers, primeFactorsEl, hcfEl, lcmEl, hcfValue, lcmValue) {
            let primeFactorsHtml = '1. <strong>සංඛ්‍යා විශ්ලේෂණය:</strong> <br>';
            const allPrimeFactors = {}; // All prime factors with highest powers for LCM

            numbers.forEach(num => {
                const factors = getPrimeFactors(num);
                const formatted = formatFactors(factors);
                primeFactorsHtml += `   - ${num} = ${formatted}<br>`;

                // For LCM, collect highest powers
                const counts = {};
                factors.forEach(factor => {
                    counts[factor] = (counts[factor] || 0) + 1;
                });
                for (const factor in counts) {
                    if (!allPrimeFactors[factor] || allPrimeFactors[factor] < counts[factor]) {
                        allPrimeFactors[factor] = counts[factor];
                    }
                }
            });
            primeFactorsEl.innerHTML = primeFactorsHtml;

            // HCF Explanation
            let hcfExplanationText = `2. <strong>ම.පො.සා. (HCF) සොයා ගැනීම:</strong> <br>සියලු සංඛ්‍යාවලට පොදු වන ප්‍රාථමික සාධකවල කුඩාම දර්ශක සහිත බලයන් ගුණ කිරීමෙන් අපට ම.පො.සා. ලැබේ. <br>මෙහිදී, ඔබ ඇතුළත් කළ සංඛ්‍යාවල ම.පො.සා. (HCF) = <strong>${hcfValue}</strong>.`;
            hcfEl.innerHTML = hcfExplanationText;

            // LCM Explanation
            let lcmExplanationText = `3. <strong>කු.පො.ගු. (LCM) සොයා ගැනීම:</strong> <br>සියලු සංඛ්‍යාවල ඇති සෑම ප්‍රාථමික සාධකයක්ම (විශාලතම දර්ශකය සහිතව) තෝරාගෙන ඒවා ගුණ කිරීමෙන් අපට කු.පො.ගු. ලැබේ. <br>උදා: `;
            
            let lcmFormula = '';
            for (const factor in allPrimeFactors) {
                if (allPrimeFactors[factor] === 1) {
                    lcmFormula += `${factor} × `;
                } else {
                    lcmFormula += `${factor}^${allPrimeFactors[factor]} × `;
                }
            }
            lcmFormula = lcmFormula.slice(0, -3); // Remove trailing ' × '

            lcmExplanationText += `<strong>${lcmFormula}</strong> = <strong>${lcmValue}</strong>.`;
            lcmEl.innerHTML = lcmExplanationText;
        }
    </script>

</body>
</html>