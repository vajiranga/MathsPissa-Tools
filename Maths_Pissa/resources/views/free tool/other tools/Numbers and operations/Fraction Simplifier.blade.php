<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>භාග සරලකාරකය | Fraction Simplifier - Maths Pissa</title>
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
            --button-primary: #FF5722;         /* තැඹිලි */
            --button-hover: #e64a19;
            --result-bg: #fff3e0;              /* ලා තැඹිලි */
            --accent-orange: #ff9800;          /* තැඹිලි */
            --light-blue: #e3f2fd;             /* ලා නිල් */
            --dark-blue: #0d47a1;
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

        .input-section label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-orange);
            margin-bottom: 15px;
        }

        .input-section input[type="text"] {
            width: 70%;
            max-width: 250px;
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
            box-shadow: 0 0 0 4px rgba(255, 87, 34, 0.3);
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
            color: #4dd0e1; /* Light Blue for icon */
        }

        .result-item {
            background-color: #fff9e6;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #ffd54f;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-blue);
            text-align: center;
            word-wrap: break-word;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .result-item i {
            color: var(--button-primary);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-orange);
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
                width: 80%;
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
            <h1>භාග සරලකාරකය ✨</h1>
            <p class="description">ඕනෑම භාගයක් එහි සරලම ආකාරයට පත් කරන්න. භාග සරල කිරීමේ මූලික නීති සහ ක්‍රමවේදයන් මෙයින් ඔබට පහසුවෙන් ඉගෙන ගත හැකියි.</p>
            
            <div class="input-section">
                <label for="fractionInput">භාගයක් ඇතුළත් කරන්න (උදා: 12/18 හෝ 3/9):</label>
                <input type="text" id="fractionInput" placeholder="උදා: 12/18">
                <button id="simplifyBtn"><i class="fas fa-cut"></i> සරල කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර නිවැරදි භාගයක් ඇතුළත් කරන්න (උදා: 12/18). භාගයේ හරය බිංදුව නොවිය යුතුය.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-check-circle"></i></h2>
                <div class="result-item">
                    <i class="fas fa-grip-lines"></i> <strong>සරල කළ භාගය:</strong> <span id="simplifiedFraction"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-equals"></i> <strong>දශම අගය:</strong> <span id="decimalValue"></span>
                </div>

                <div class="explanation-section">
                    <h3>පියවරෙන් පියවර පැහැදිලි කිරීම</h3>
                    <div class="explanation-steps">
                        <p>1. <strong>අංක සහ හරය හඳුනා ගැනීම:</strong> <br>ඔබ ඇතුළත් කළ භාගයේ අංකය (ඉහළ අගය) සහ හරය (පහළ අගය) වෙන් කර ගන්න.</p>
                        <p>2. <strong>ම.පො.සා. (HCF) සොයා ගැනීම:</strong> <br>අංකයේ සහ හරයේ විශාලතම පොදු සාධකය (ම.පො.සා. - HCF) සොයා ගන්න. </p>
                        <p id="hcfStep"></p>
                        <p>3. <strong>සරල කිරීම:</strong> <br>දැන් අංකයත්, හරයත් යන දෙකම එම ම.පො.සා. යෙන් බෙදන්න. එවිට ඔබට භාගයේ සරලම ස්වරූපය ලැබෙනු ඇත.</p>
                        <p id="simplificationStep"></p>
                        <p><strong> මතක තබා ගන්න:</strong> භාග සරල කිරීමෙන් ගණන් කිරීම පහසු වෙනවා. දිගටම පුහුණු වන්න!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('simplifyBtn').addEventListener('click', simplifyFraction);
        document.getElementById('fractionInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                simplifyFraction();
            }
        });

        function simplifyFraction() {
            const fractionInput = document.getElementById('fractionInput');
            const fractionString = fractionInput.value.trim();
            const resultSection = document.getElementById('resultSection');
            const simplifiedFractionElement = document.getElementById('simplifiedFraction');
            const decimalValueElement = document.getElementById('decimalValue');
            const hcfStepElement = document.getElementById('hcfStep');
            const simplificationStepElement = document.getElementById('simplificationStep');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            const parts = fractionString.split('/');
            if (parts.length !== 2) {
                errorMessage.style.display = 'block';
                return;
            }

            let numerator = parseInt(parts[0]);
            let denominator = parseInt(parts[1]);

            if (isNaN(numerator) || isNaN(denominator) || denominator === 0) {
                errorMessage.style.display = 'block';
                return;
            }

            const originalNumerator = numerator;
            const originalDenominator = denominator;

            // Calculate HCF (GCD)
            const commonDivisor = gcd(Math.abs(numerator), Math.abs(denominator));

            // Simplify
            numerator /= commonDivisor;
            denominator /= commonDivisor;

            simplifiedFractionElement.textContent = `${numerator}/${denominator}`;
            decimalValueElement.textContent = (originalNumerator / originalDenominator).toFixed(4); // දශම ස්ථාන 4කට වටකුරු කරයි

            // Explanation Steps
            hcfStepElement.innerHTML = `2. <strong>ම.පො.සා. (HCF) සොයා ගැනීම:</strong> <br> ${originalNumerator} සහ ${originalDenominator} යන සංඛ්‍යාවල ම.පො.සා. (HCF) = <strong>${commonDivisor}</strong>.`;
            simplificationStepElement.innerHTML = `3. <strong>සරල කිරීම:</strong> <br>අංකය ${originalNumerator} ÷ ${commonDivisor} = <strong>${numerator}</strong><br>හරය ${originalDenominator} ÷ ${commonDivisor} = <strong>${denominator}</strong><br>සරල කළ භාගය = <strong>${numerator}/${denominator}</strong>.`;

            resultSection.style.display = 'block';
        }

        // GCD (HCF) function from Tool 2
        function gcd(a, b) {
            if (b === 0) return a;
            return gcd(b, a % b);
        }
    </script>

</body>
</html>