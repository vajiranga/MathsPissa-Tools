<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>දත්ත විශ්ලේෂණය (Mean, Median, Mode) | Maths Pissa</title>
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
            --button-primary: #03A9F4;         /* ලා නිල් */
            --button-hover: #0288D1;
            --result-bg: #e1f5fe;              /* ඉතා ලා නිල් */
            --accent-blue: #2196F3;            /* නිල් */
            --light-green: #e8f5e9;            /* ලා කොළ */
            --dark-red: #c62828;
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
        }
        .input-group label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-blue);
            margin-bottom: 10px;
        }
        .input-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 10px;
            font-size: 1.1em;
            color: var(--text-dark);
            background-color: var(--section-bg-light);
            min-height: 100px;
            resize: vertical;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
        }
        .input-group textarea:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(3, 169, 244, 0.3);
            outline: none;
        }
        .input-group textarea::placeholder {
            color: #aaa;
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
            border: 1px solid #90caf9; /* Light blue */
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
            color: #42a5f5; /* Blue for icon */
        }

        .result-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .result-item {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-left: 5px solid var(--accent-blue);
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
            color: var(--accent-blue);
        }

        .result-item p {
            font-size: 1.6em;
            font-weight: 700;
            color: var(--text-dark);
            margin: 0;
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
            .input-group textarea {
                font-size: 1em;
                padding: 10px 12px;
            }
            .input-section button {
                font-size: 1.1em;
                padding: 10px 20px;
            }
            .result-section h2 {
                font-size: 1.5em;
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
                max-width: 95%;
            }
            .input-section button {
                width: 100%;
            }
            .result-section {
                padding: 20px;
            }
            .result-grid {
                grid-template-columns: 1fr;
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
            <h1>මාතය, මධ්‍යන්‍යය, මධ්‍යස්ථය ✨</h1>
            <p class="description">ඔබේ සංඛ්‍යා සමූහය විශ්ලේෂණය කර, එහි මධ්‍යන්‍යය (Mean), මධ්‍යස්ථය (Median) සහ මාතය (Mode) සොයාගන්න. දත්තවල මධ්‍යම ප්‍රවණතාව තේරුම් ගන්න!</p>
            <div class="input-section">
                <div class="input-group">
                    <label for="numberInput">සංඛ්‍යා ඇතුළත් කරන්න (කොමා වලින් වෙන්කර, උදා: 10, 25, 12, 8, 15, 25):</label>
                    <textarea id="numberInput" placeholder="උදා: 10, 25, 12, 8, 15, 25"></textarea>
                </div>
                
                <button id="analyzeBtn"><i class="fas fa-chart-bar"></i> විශ්ලේෂණය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු සංඛ්‍යා ඇතුළත් කරන්න. කොමා වලින් වෙන්කර අවම වශයෙන් සංඛ්‍යා දෙකක් ඇතුළත් කරන්න. (උදා: 10, 25, 12, 8, 15, 25)
            </div>

            <div id="resultSection" class="result-section">
                <h2>ඔබේ දත්තවල විශ්ලේෂණය <i class="fas fa-chart-line"></i></h2>
                
                <div class="result-grid">
                    <div class="result-item">
                        <h3><i class="fas fa-calculator"></i> මධ්‍යන්‍යය (Mean)</h3>
                        <p id="meanResult"></p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-align-center"></i> මධ්‍යස්ථය (Median)</h3>
                        <p id="medianResult"></p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-chart-pie"></i> මාතය (Mode)</h3>
                        <p id="modeResult"></p>
                    </div>
                </div>

                <div class="explanation-section">
                    <h3>දත්ත විශ්ලේෂණය ගැන ඉගෙන ගනිමු</h3>
                    <div id="explanationSteps" class="explanation-steps">
                        <p>1. <strong>මධ්‍යන්‍යය (Mean):</strong><br>
                        මෙය සාමාන්‍යයයි. සියලුම සංඛ්‍යා එකතු කර, එම සංඛ්‍යා ප්‍රමාණයෙන් බෙදූ විට මධ්‍යන්‍යය ලැබේ.
                        <strong>ගණනය:</strong> (සියලු සංඛ්‍යාවල එකතුව) / (සංඛ්‍යා ගණන)</p>
                        <p>2. <strong>මධ්‍යස්ථය (Median):</strong><br>
                        මෙය දත්ත සමූහයේ මැදම පිහිටි අගයයි. මුලින්ම සියලුම සංඛ්‍යා කුඩාම සිට ලොකුම අගය දක්වා පිළිවෙලට සකස් කළ යුතුය.
                        <ul>
                            <li>සංඛ්‍යා ගණන ඔත්තේ නම්, මැදම ඇති සංඛ්‍යාව මධ්‍යස්ථය වේ.</li>
                            <li>සංඛ්‍යා ගණන ඉරට්ටේ නම්, මැද ඇති සංඛ්‍යා දෙකේ මධ්‍යන්‍යය (සාමාන්‍යය) මධ්‍යස්ථය වේ.</li>
                        </ul></p>
                        <p>3. <strong>මාතය (Mode):</strong><br>
                        මෙය දත්ත සමූහයේ වැඩියෙන්ම පුනරාවර්තනය වන (නැවත නැවත එන) සංඛ්‍යාවයි. දත්ත සමූහයකට බහුලත්වයන් එකකට වඩා තිබිය හැකිය, නැතහොත් කිසිවක් නොතිබිය හැකිය.</p>
                        <p><strong> මතක තබා ගන්න:</strong> මෙම මිනුම් මඟින් දත්ත සමූහයක් "කොයි වගේද" යන්න තේරුම් ගැනීමට උපකාරී වේ!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const numberInput = document.getElementById('numberInput');
        const analyzeBtn = document.getElementById('analyzeBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const meanResult = document.getElementById('meanResult');
        const medianResult = document.getElementById('medianResult');
        const modeResult = document.getElementById('modeResult');

        analyzeBtn.addEventListener('click', analyzeNumbers);
        numberInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && e.ctrlKey) { // Ctrl+Enter to analyze
                analyzeNumbers();
            }
        });

        function analyzeNumbers() {
            const rawInput = numberInput.value.trim();
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (!rawInput) {
                errorMessage.textContent = "කරුණාකර සංඛ්‍යා ඇතුළත් කරන්න.";
                errorMessage.style.display = 'block';
                return;
            }

            const numbers = rawInput.split(',').map(num => parseFloat(num.trim())).filter(num => !isNaN(num));

            if (numbers.length < 2) {
                errorMessage.textContent = "කරුණාකර වලංගු සංඛ්‍යා ඇතුළත් කරන්න. කොමා වලින් වෙන්කර අවම වශයෙන් සංඛ්‍යා දෙකක් ඇතුළත් කරන්න.";
                errorMessage.style.display = 'block';
                return;
            }

            // Calculate Mean
            const sum = numbers.reduce((acc, curr) => acc + curr, 0);
            const mean = sum / numbers.length;
            meanResult.textContent = mean.toFixed(2); // Display with 2 decimal places

            // Calculate Median
            const sortedNumbers = [...numbers].sort((a, b) => a - b);
            const mid = Math.floor(sortedNumbers.length / 2);
            let median;
            if (sortedNumbers.length % 2 === 0) {
                median = (sortedNumbers[mid - 1] + sortedNumbers[mid]) / 2;
            } else {
                median = sortedNumbers[mid];
            }
            medianResult.textContent = median.toFixed(2);

            // Calculate Mode
            const counts = {};
            numbers.forEach(num => {
                counts[num] = (counts[num] || 0) + 1;
            });

            let maxCount = 0;
            let modes = [];
            for (const num in counts) {
                if (counts[num] > maxCount) {
                    maxCount = counts[num];
                    modes = [parseFloat(num)];
                } else if (counts[num] === maxCount && maxCount > 1) { // Allow multiple modes if count > 1
                    modes.push(parseFloat(num));
                }
            }
            
            if (maxCount === 1 || modes.length === 0) { // If all numbers appear only once
                modeResult.textContent = "කිසිවක් නැත (සියල්ල එක් වරක්)";
            } else {
                modeResult.textContent = modes.map(m => m.toFixed(2)).join(', ');
            }


            resultSection.style.display = 'block';
        }
    </script>

</body>
</html>