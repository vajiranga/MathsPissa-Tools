<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ලඝුගණක ගණනය | Logarithm Calculator | Maths Pissa</title>
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
            --button-primary: #FFB300;         /* අඳුරු කහ */
            --button-hover: #FFA000;
            --result-bg: #fff8e1;              /* ඉතා ලා අඳුරු කහ */
            --accent-yellow: #FBC02D;          /* කහ */
            --light-orange: #fff3e0;           /* ලා තැඹිලි */
            --dark-brown: #5d4037;
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
            max-width: 400px;
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
        .input-group input[type="number"] {
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
        .input-group input[type="number"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(255, 179, 0, 0.2);
            outline: none;
        }
        .input-group input[type="number"]::placeholder {
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
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: left;
            border: 1px solid #ffe082; /* Light yellow */
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
            color: #FFD54F; /* Yellow for icon */
        }

        .result-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .result-item {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-left: 5px solid var(--accent-yellow);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }
        .result-item:hover {
            transform: translateY(-5px);
        }

        .result-item h3 {
            color: var(--primary-gradient-end);
            font-size: 1.5em;
            margin-top: 0;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .result-item h3 i {
            color: var(--accent-yellow);
        }

        .result-item p {
            font-size: 1.6em;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0;
        }


        .explanation-section h3 {
            color: var(--accent-yellow);
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
            .input-group {
                max-width: 95%; /* Adjust for mobile */
            }
            .input-group input[type="number"] {
                font-size: 1em;
                padding: 10px;
            }
            .calculate-button {
                font-size: 1.1em;
                padding: 10px 20px;
            }
            .result-section h2 {
                font-size: 1.5em;
            }
            .result-grid {
                grid-template-columns: 1fr;
            }
            .result-item h3 {
                font-size: 1.3em;
            }
            .result-item p {
                font-size: 1.4em;
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
            .calculate-button {
                width: 100%;
            }
            .result-item h3 {
                font-size: 1.2em;
            }
            .result-item p {
                font-size: 1.2em;
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
            <h1>ලඝුගණක ගණනය (Logarithm Calculator) ✨</h1>
            <p class="description">ඔබට අවශ්‍ය සංඛ්‍යාවේ සාමාන්‍ය ලඝුගණකය (log₁₀) සහ ස්වභාවික ලඝුගණකය (ln) පහසුවෙන් ගණනය කරන්න.</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="numberInput"><i class="fas fa-input-numeric"></i> සංඛ්‍යාව ඇතුළත් කරන්න:</label>
                    <input type="number" id="numberInput" min="0.000001" step="any" placeholder="උදා: 10, 100, 2.718">
                </div>
            </div>
            
            <button id="calculateBtn" class="calculate-button"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>

            <div id="errorMessage" class="error-message">
                කරුණාකර ධන සංඛ්‍යාවක් ඇතුළත් කරන්න. (ලඝුගණක සොයාගත හැක්කේ ධන සංඛ්‍යා වලට පමණි)
            </div>

            <div id="resultSection" class="result-section">
                <h2>ඔබේ ප්‍රතිඵල <i class="fas fa-chart-line"></i></h2>
                
                <div class="result-grid">
                    <div class="result-item">
                        <h3><i class="fas fa-superscript"></i> සාමාන්‍ය ලඝුගණකය (log₁₀)</h3>
                        <p id="log10Result"></p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-infinity"></i> ස්වභාවික ලඝුගණකය (ln) </h3>
                        <p id="lnResult"></p>[O/L සදහා අවශ්‍ය නොවේ.]
                    </div>
                </div>

                <div class="explanation-section">
                    <h3>ලඝුගණක ගැන ඉගෙන ගනිමු</h3>
                    <div id="explanationSteps" class="explanation-steps">
                        <p>1. <strong>ලඝුගණකය යනු කුමක්ද?</strong><br>
                        ලඝුගණකය (Logarithm) යනු යම් අංකයක් ලබා ගැනීමට පාදයක් (base) කුමන බලයකට (power) නැඟිය යුතුද යන්න සොයාගැනීමේ ක්‍රමයකි. එය ඝාතකවල ප්‍රතිලෝම ක්‍රියාවලියයි.</p>
                        <p>2. <strong>සාමාන්‍ය ලඝුගණකය (Common Logarithm - log₁₀):</strong><br>
                        මෙහි පාදය 10 වේ. එනම්, යම් සංඛ්‍යාවක් ලබා ගැනීමට 10 කුමන බලයකට නැඟිය යුතුද යන්නයි.
                        <br><strong>උදා:</strong> log₁₀(100) = 2, මන්ද 10<sup>2</sup> = 100.</p>
                        <p>3. <strong>ස්වභාවික ලඝුගණකය (Natural Logarithm - ln):</strong><br>
                        මෙහි පාදය 'e' (නියර නියතය, ආසන්න වශයෙන් 2.71828) වේ. 'ln' ලෙස ලියනු ලැබේ.
                        <br><strong>උදා:</strong> ln(e) = 1, මන්ද e<sup>1</sup> = e. (ln(2.71828) ≈ 1); (O/L සදහා අවශ්‍ය නොවේ.)</p>
                        <p><strong> මතක තබා ගන්න:</strong> ලඝුගණක විද්‍යාව, ඉංජිනේරු විද්‍යාව, පරිගණක විද්‍යාව වැනි ක්ෂේත්‍රවල විශාල පරාසයන් නිරූපණය කිරීමට භාවිතා කරයි!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const numberInput = document.getElementById('numberInput');
        const calculateBtn = document.getElementById('calculateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const log10Result = document.getElementById('log10Result');
        const lnResult = document.getElementById('lnResult');

        calculateBtn.addEventListener('click', calculateLogs);
        numberInput.addEventListener('input', calculateLogs); // Calculate on input change

        function calculateLogs() {
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            const num = parseFloat(numberInput.value);

            if (isNaN(num) || num <= 0) {
                errorMessage.textContent = "කරුණාකර ධන සංඛ්‍යාවක් ඇතුළත් කරන්න. (ලඝුගණක සොයාගත හැක්කේ ධන සංඛ්‍යා වලට පමණි)";
                errorMessage.style.display = 'block';
                // Clear previous results if input is invalid
                log10Result.textContent = '';
                lnResult.textContent = '';
                return;
            }

            // Calculate Base 10 Logarithm
            const log10Val = Math.log10(num);
            log10Result.textContent = log10Val.toFixed(6); // To 6 decimal places

            // Calculate Natural Logarithm (ln)
            const lnVal = Math.log(num);
            lnResult.textContent = lnVal.toFixed(6); // To 6 decimal places

            resultSection.style.display = 'block';
        }
    </script>

</body>
</html>