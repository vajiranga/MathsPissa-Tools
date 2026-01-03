<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>සාමාන්‍යය, මධ්‍යස්ථය, බහුලකය, පරාසය | Mean, Median, Mode, Range - Maths Pissa</title>
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
            --button-primary: #4CAF50;         /* කොළ */
            --button-hover: #43A047;
            --result-bg: #e8f5e9;              /* ඉතා ලා කොළ */
            --accent-teal: #009688;            /* ටීල් */
            --light-grey: #eceff1;             /* ලා අළු */
            --dark-blue-grey: #37474f;
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
            border-left: 6px solid var(--accent-teal);
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
        }
        .input-group label {
            display: block;
            font-size: 1.2em;
            font-weight: 600;
            color: var(--accent-teal);
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
            box-shadow: 0 0 0 4px rgba(76, 175, 80, 0.3);
            outline: none;
        }
        .input-group input::placeholder {
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
            color: #ffe082; /* Amber light for icon */
        }

        .result-item {
            background-color: #f1f8e9; /* Light green */
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #a5d6a7;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-blue-grey);
            text-align: center;
            word-wrap: break-word;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        .result-item i {
            color: var(--accent-teal);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-teal);
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
            <h1>සාමාන්‍යය, මධ්‍යස්ථය, බහුලකය, පරාසය සොයනය ✨</h1>
            <p class="description">සංඛ්‍යා සමූහයක මධ්‍යම ප්‍රවණතාව සහ විසිරීම (Spread) පහසුවෙන් සොයා ගන්න. සාමාන්‍යය, මධ්‍යස්ථය, බහුලකය සහ පරාසය ගණනය කරන ආකාරය සවිස්තරාත්මකව ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="numbersInput">සංඛ්‍යා ඇතුළත් කරන්න (කොමාවලින් වෙන් කර):</label>
                    <input type="text" id="numbersInput" placeholder="උදා: 10, 20, 30, 40, 50">
                </div>
                
                <button id="calculateBtn"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර ධන හෝ සෘණ සංඛ්‍යා කොමාවලින් වෙන් කර ඇතුළත් කරන්න (අවම වශයෙන් සංඛ්‍යා 2ක්).
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-chart-bar"></i></h2>
                <div class="result-item">
                    <i class="fas fa-balance-scale"></i> <strong>සාමාන්‍යය (Mean):</strong> <span id="meanResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-stream"></i> <strong>මධ්‍යස්ථය (Median):</strong> <span id="medianResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-cube"></i> <strong>බහුලකය (Mode):</strong> <span id="modeResult"></span>
                </div>
                <div class="result-item">
                    <i class="fas fa-arrows-alt-h"></i> <strong>පරාසය (Range):</strong> <span id="rangeResult"></span>
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
        document.getElementById('calculateBtn').addEventListener('click', calculateStatistics);
        document.getElementById('numbersInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                calculateStatistics();
            }
        });

        function calculateStatistics() {
            const numbersInput = document.getElementById('numbersInput');
            const numbersString = numbersInput.value;
            const numbers = numbersString.split(',').map(num => parseFloat(num.trim())).filter(num => !isNaN(num));

            const resultSection = document.getElementById('resultSection');
            const meanResultElement = document.getElementById('meanResult');
            const medianResultElement = document.getElementById('medianResult');
            const modeResultElement = document.getElementById('modeResult');
            const rangeResultElement = document.getElementById('rangeResult');
            const explanationSteps = document.getElementById('explanationSteps');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (numbers.length < 2) {
                errorMessage.style.display = 'block';
                return;
            }

            // Calculations
            const mean = calculateMean(numbers);
            const median = calculateMedian(numbers);
            const mode = calculateMode(numbers);
            const range = calculateRange(numbers);

            meanResultElement.textContent = mean.toFixed(2);
            medianResultElement.textContent = median.toFixed(2);
            modeResultElement.textContent = mode.join(', ') || 'බහුලකයක් නොමැත';
            rangeResultElement.textContent = range.toFixed(2);

            // Generate explanations
            generateExplanations(numbers, mean, median, mode, range, explanationSteps);

            resultSection.style.display = 'block';
        }

        function calculateMean(numbers) {
            const sum = numbers.reduce((acc, curr) => acc + curr, 0);
            return sum / numbers.length;
        }

        function calculateMedian(numbers) {
            const sortedNumbers = [...numbers].sort((a, b) => a - b);
            const mid = Math.floor(sortedNumbers.length / 2);
            if (sortedNumbers.length % 2 === 0) {
                return (sortedNumbers[mid - 1] + sortedNumbers[mid]) / 2;
            } else {
                return sortedNumbers[mid];
            }
        }

        function calculateMode(numbers) {
            const frequency = {};
            numbers.forEach(num => {
                frequency[num] = (frequency[num] || 0) + 1;
            });

            let maxFreq = 0;
            for (const num in frequency) {
                if (frequency[num] > maxFreq) {
                    maxFreq = frequency[num];
                }
            }

            if (maxFreq <= 1 && numbers.length > 1) { // No mode if all elements appear once, or only one element
                 return ['බහුලකයක් නොමැත']; // Changed to return an array of string for consistency
            }
            if (numbers.length === 1) { // Single element is its own mode
                return [numbers[0]];
            }

            const modes = [];
            for (const num in frequency) {
                if (frequency[num] === maxFreq) {
                    modes.push(parseFloat(num));
                }
            }
            // If all numbers appear with the same highest frequency, but that frequency is 1, there is no mode.
            if (modes.length === numbers.length && maxFreq === 1) {
                return ['බහුලකයක් නොමැත'];
            }
            return modes.sort((a, b) => a - b); // Sort modes for consistent output
        }


        function calculateRange(numbers) {
            const min = Math.min(...numbers);
            const max = Math.max(...numbers);
            return max - min;
        }

        function generateExplanations(numbers, mean, median, mode, range, explanationEl) {
            const sortedNumbers = [...numbers].sort((a, b) => a - b);
            const mid = Math.floor(sortedNumbers.length / 2);

            let explanationHtml = `
                <p>ඔබ ඇතුළත් කළ සංඛ්‍යා සමූහය: <strong>${numbers.join(', ')}</strong></p>
                <p>1. <strong>සාමාන්‍යය (Mean):</strong> <br>සියලු සංඛ්‍යා එකතු කර සංඛ්‍යා ගණනින් බෙදීමෙන් සාමාන්‍යය ලැබේ.
                <br> (${numbers.join(' + ')}) ÷ ${numbers.length} = <strong>${mean.toFixed(2)}</strong></p>
                
                <p>2. <strong>මධ්‍යස්ථය (Median):</strong> <br>සංඛ්‍යා කුඩාම අගයේ සිට විශාලම අගය දක්වා පෙළ ගස්වන්න.
                <br> පෙළ ගැස්වූ සංඛ්‍යා: <strong>${sortedNumbers.join(', ')}</strong><br>
            `;

            if (sortedNumbers.length % 2 === 0) {
                explanationHtml += `   සංඛ්‍යා යුගල ගණනක් ඇති විට, මැද ඇති සංඛ්‍යා දෙකේ සාමාන්‍යය මධ්‍යස්ථය වේ.
                <br> (${sortedNumbers[mid - 1]} + ${sortedNumbers[mid]}) ÷ 2 = <strong>${median.toFixed(2)}</strong></p>`;
            } else {
                explanationHtml += `   සංඛ්‍යා ඔත්තේ ගණනක් ඇති විට, මැද ඇති සංඛ්‍යාව මධ්‍යස්ථය වේ.
                <br> මැද සංඛ්‍යාව: <strong>${sortedNumbers[mid]}</strong> = <strong>${median.toFixed(2)}</strong></p>`;
            }

            explanationHtml += `
                <p>3. <strong>බහුලකය (Mode):</strong> <br>සංඛ්‍යා සමූහයේ වැඩිම වාර ගණනක් දිස්වන සංඛ්‍යාව (හෝ සංඛ්‍යා) බහුලකය වේ.
            `;
            if (Array.isArray(mode) && mode.includes('බහුලකයක් නොමැත')) {
                explanationHtml += `   මෙම සංඛ්‍යා සමූහයේ බහුලකයක් නොමැත.</p>`;
            } else {
                explanationHtml += `   මෙම සංඛ්‍යා සමූහයේ බහුලකය (බහුලකයන්) වන්නේ: <strong>${mode.join(', ')}</strong></p>`;
            }

            explanationHtml += `
                <p>4. <strong>පරාසය (Range):</strong> <br>සංඛ්‍යා සමූහයේ විශාලතම අගය සහ කුඩාම අගය අතර වෙනස පරාසය වේ.
                <br> විශාලතම අගය (${Math.max(...numbers)}) - කුඩාම අගය (${Math.min(...numbers)}) = <strong>${range.toFixed(2)}</strong></p>
                <p><strong> මතක තබා ගන්න:</strong> සංඛ්‍යාත්මක දත්ත විශ්ලේෂණය කිරීමට මෙම සංකල්ප ඉතා වැදගත් වේ. දිගටම පුහුණු වන්න!</p>
            `;
            explanationEl.innerHTML = explanationHtml;
        }
    </script>

</body>
</html>