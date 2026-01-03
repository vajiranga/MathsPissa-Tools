<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ගණිතමය අනුක්‍රම හා ශ්‍රේණි | Sequences & Series | Maths Pissa</title>
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
            --button-primary: #FF8A65;         /* ලා තැඹිලි-රතු */
            --button-hover: #FF7043;
            --result-bg: #ffe0b2;              /* ඉතා ලා තැඹිලි */
            --accent-orange-red: #F4511E;      /* තද තැඹිලි-රතු */
            --light-peach: #fffaf0;            /* ලා පීච් */
            --dark-blue-gray: #455a64;
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
            border-left: 6px solid var(--accent-orange-red);
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
            gap: 25px;
            margin-bottom: 30px;
        }

        .input-group {
            width: 100%;
            max-width: 250px;
            text-align: left;
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--accent-orange-red);
        }
        .input-group label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-orange-red);
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
            box-shadow: 0 0 0 4px rgba(255, 138, 101, 0.2);
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
            margin-top: 20px;
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
            border: 1px solid #ffcc80; /* Light orange */
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
            color: #FFAB91; /* Light orange-red for icon */
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
            border-left: 5px solid var(--accent-orange-red);
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
            color: var(--accent-orange-red);
        }

        .result-item p {
            font-size: 1.6em;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0;
            word-break: break-all; /* For very large numbers */
        }


        .explanation-section h3 {
            color: var(--accent-orange-red);
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
            .input-section {
                flex-direction: column;
                gap: 15px;
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
                width: 100%;
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
            <h1>ගණිතමය අනුක්‍රම හා ශ්‍රේණි ✨</h1>
            <p class="description">අංක ගණිතමය (Arithmetic) සහ ජ්‍යාමිතික (Geometric) අනුක්‍රම හා ශ්‍රේණිවල n වන පදය සහ n පදවල එකතුව ගණනය කරන්න.</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="a1Input"><i class="fas fa-sort-numeric-up"></i> මුල් පදය (a₁):</label>
                    <input type="number" id="a1Input" value="1" placeholder="මුල් පදය">
                </div>
                
                <div class="input-group">
                    <label for="dOrRInput"><i class="fas fa-exchange-alt"></i> පොදු අනුපාතය (r) / පොදු වෙනස (d):</label>
                    <input type="number" id="dOrRInput" value="2" placeholder="අනුපාතය/වෙනස">
                </div>

                <div class="input-group">
                    <label for="nInput"><i class="fas fa-hashtag"></i> පද ගණන (n):</label>
                    <input type="number" id="nInput" min="1" value="5" placeholder="පද ගණන">
                </div>
            </div>
            
            <button id="calculateBtn" class="calculate-button"><i class="fas fa-play-circle"></i> ගණනය කරන්න</button>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු සංඛ්‍යා ඇතුළත් කරන්න. n පද ගණන 1 හෝ ඊට වැඩි ධන පූර්ණ සංඛ්‍යාවක් විය යුතුය.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ඔබේ ප්‍රතිඵල <i class="fas fa-chart-pie"></i></h2>
                
                <div class="result-grid">
                    <div class="result-item">
                        <h3><i class="fas fa-arrow-right"></i> අංක ගණිතමය අනුක්‍රමය</h3>
                        <p>n වන පදය (a<sub>n</sub>): <span id="arithmeticNthTerm"></span></p>
                        <p>n පදවල එකතුව (S<sub>n</sub>): <span id="arithmeticSum"></span></p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-chart-line"></i> ජ්‍යාමිතික අනුක්‍රමය</h3>
                        <p>n වන පදය (a<sub>n</sub>): <span id="geometricNthTerm"></span></p>
                        <p>n පදවල එකතුව (S<sub>n</sub>): <span id="geometricSum"></span></p>
                    </div>
                </div>

                <div class="explanation-section">
                    <h3>අනුක්‍රම හා ශ්‍රේණි ගැන ඉගෙන ගනිමු</h3>
                    <div id="explanationSteps" class="explanation-steps">
                        <p>1. <strong>අනුක්‍රමය (Sequence):</strong><br>
                        යම්කිසි රටාවක් අනුව සකස් කරන ලද සංඛ්‍යා සමූහයකි.
                        <br><strong>ශ්‍රේණිය (Series):</strong><br>
                        අනුක්‍රමයක පදවල එකතුවයි.</p>
                        <p>2. <strong>අංක ගණිතමය අනුක්‍රමය (Arithmetic Sequence):</strong><br>
                        මෙමගින්, එක් එක් පදය ඊට පෙර පදයට ස්ථාවර සංඛ්‍යාවක් එකතු කිරීමෙන් ලබා ගනී. මෙම ස්ථාවර සංඛ්‍යාව "පොදු වෙනස (d)" ලෙස හැඳින්වේ.
                        <br><strong>n වන පදය (a<sub>n</sub>):</strong> a₁ + (n-1)d
                        <br><strong>n පදවල එකතුව (S<sub>n</sub>):</strong> n/2 * [2a₁ + (n-1)d]</p>
                        <p>3. <strong>ජ්‍යාමිතික අනුක්‍රමය (Geometric Sequence):</strong><br>
                        මෙමගින්, එක් එක් පදය ඊට පෙර පදය ස්ථාවර සංඛ්‍යාවකින් ගුණ කිරීමෙන් ලබා ගනී. මෙම ස්ථාවර සංඛ්‍යාව "පොදු අනුපාතය (r)" ලෙස හැඳින්වේ.
                        <br><strong>n වන පදය (a<sub>n</sub>):</strong> a₁  r<sup>(n-1)</sup>
                        <br><strong>n පදවල එකතුව (S<sub>n</sub>):</strong> a₁  (1 - r<sup>n</sup>) / (1 - r) (r ≠ 1 විට)</p>
                        <p><strong> මතක තබා ගන්න:</strong> අනුක්‍රම හා ශ්‍රේණි මඟින් රටා තේරුම් ගැනීමට සහ අනාගතය පුරෝකථනය කිරීමට උපකාරී වේ!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const a1Input = document.getElementById('a1Input');
        const dOrRInput = document.getElementById('dOrRInput');
        const nInput = document.getElementById('nInput');
        const calculateBtn = document.getElementById('calculateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const arithmeticNthTerm = document.getElementById('arithmeticNthTerm');
        const arithmeticSum = document.getElementById('arithmeticSum');
        const geometricNthTerm = document.getElementById('geometricNthTerm');
        const geometricSum = document.getElementById('geometricSum');

        calculateBtn.addEventListener('click', calculateSequences);
        // Add event listeners for 'Enter' key press on input fields
        a1Input.addEventListener('keypress', function(e) { if (e.key === 'Enter') calculateSequences(); });
        dOrRInput.addEventListener('keypress', function(e) { if (e.key === 'Enter') calculateSequences(); });
        nInput.addEventListener('keypress', function(e) { if (e.key === 'Enter') calculateSequences(); });

        function calculateSequences() {
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            const a1 = parseFloat(a1Input.value);
            const dOrR = parseFloat(dOrRInput.value);
            const n = parseInt(nInput.value);

            if (isNaN(a1) || isNaN(dOrR) || isNaN(n) || n < 1 || !Number.isInteger(n)) {
                errorMessage.textContent = "කරුණාකර වලංගු සංඛ්‍යා ඇතුළත් කරන්න. n පද ගණන 1 හෝ ඊට වැඩි ධන පූර්ණ සංඛ්‍යාවක් විය යුතුය.";
                errorMessage.style.display = 'block';
                // Clear results if input is invalid
                arithmeticNthTerm.textContent = '';
                arithmeticSum.textContent = '';
                geometricNthTerm.textContent = '';
                geometricSum.textContent = '';
                return;
            }

            // --- Arithmetic Sequence ---
            // nth term: a_n = a_1 + (n - 1) * d
            const arithmeticAn = a1 + (n - 1) * dOrR;
            arithmeticNthTerm.textContent = arithmeticAn.toFixed(3);

            // Sum of n terms: S_n = n/2 * [2*a_1 + (n - 1)*d]
            const arithmeticSn = (n / 2) * (2 * a1 + (n - 1) * dOrR);
            arithmeticSum.textContent = arithmeticSn.toFixed(3);

            // --- Geometric Sequence ---
            // nth term: a_n = a_1 * r^(n-1)
            const geometricAn = a1 * Math.pow(dOrR, (n - 1));
            geometricNthTerm.textContent = geometricAn.toFixed(3);

            // Sum of n terms: S_n = a_1 * (1 - r^n) / (1 - r) (if r != 1)
            let geometricSn;
            if (dOrR === 1) {
                geometricSn = a1 * n; // If r is 1, it's just a1 + a1 + ... (n times)
            } else {
                geometricSn = a1 * (1 - Math.pow(dOrR, n)) / (1 - dOrR);
            }
            geometricSum.textContent = geometricSn.toFixed(3);

            resultSection.style.display = 'block';
        }
    </script>

</body>
</html>