<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>මිණුම් පරිවර්තකය | Measurement Converter - Maths Pissa</title>
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
            --button-hover: #039BE5;
            --result-bg: #e1f5fe;              /* ඉතා ලා නිල් */
            --accent-blue: #2196F3;            /* නිල් */
            --light-green: #e8f5e9;            /* ලා කොළ */
            --dark-green: #2e7d32;
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
            max-width: 400px;
            text-align: left;
        }
        .input-group label {
            display: block;
            font-size: 1.1em;
            font-weight: 600;
            color: var(--accent-blue);
            margin-bottom: 8px;
        }
        .input-group select, .input-group input[type="number"] {
            width: 100%;
            padding: 10px 12px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.1em;
            background-color: var(--card-bg);
            color: var(--text-dark);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box; /* Ensures padding doesn't increase width */
        }
        .input-group select:focus, .input-group input[type="number"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(3, 169, 244, 0.3);
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
            color: #81c784; /* Light green for icon */
        }

        .result-item {
            background-color: #e3f2fd; /* Light blue */
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #90caf9;
            margin-bottom: 15px;
            font-size: 1.4em;
            font-weight: 700;
            color: var(--dark-green);
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
            .input-group select, .input-group input[type="number"] {
                font-size: 1em;
                padding: 8px 10px;
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
            .input-group {
                max-width: 95%;
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
            <h1>මිණුම් පරිවර්තකය ✨</h1>
            <p class="description">දිග, ස්කන්ධය සහ පරිමාව වැනි මිණුම් ඒකක එකකින් තවත් එකකට පහසුවෙන් පරිවර්තනය කරන්න. සැබෑ ලෝකයේ මිණුම් ගැන ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="conversionType">පරිවර්තනය කළ යුතු වර්ගය:</label>
                    <select id="conversionType">
                        <option value="length">දිග</option>
                        <option value="mass">ස්කන්ධය</option>
                        <option value="volume">පරිමාව</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="inputValue">අගය ඇතුළත් කරන්න:</label>
                    <input type="number" id="inputValue" min="0" step="any" value="1">
                </div>

                <div class="input-group">
                    <label for="fromUnit">සිට (From) ඒකකය:</label>
                    <select id="fromUnit"></select>
                </div>

                <div class="input-group">
                    <label for="toUnit">වෙත (To) ඒකකය:</label>
                    <select id="toUnit"></select>
                </div>
                
                <button id="convertBtn"><i class="fas fa-exchange-alt"></i> පරිවර්තනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු අගයක් ඇතුළත් කරන්න. අගය බිංදුවට වඩා වැඩි විය යුතුය.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-check-circle"></i></h2>
                <div class="result-item">
                    <i class="fas fa-arrow-right"></i> <strong>පරිවර්තනය කළ අගය:</strong> <span id="convertedValue"></span>
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
        const conversionTypeSelect = document.getElementById('conversionType');
        const inputValueElement = document.getElementById('inputValue');
        const fromUnitSelect = document.getElementById('fromUnit');
        const toUnitSelect = document.getElementById('toUnit');
        const convertBtn = document.getElementById('convertBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const convertedValueElement = document.getElementById('convertedValue');
        const explanationSteps = document.getElementById('explanationSteps');

        const units = {
            length: {
                'meter': { name: 'මීටර්', factor: 1 },
                'kilometer': { name: 'කිලෝමීටර්', factor: 1000 },
                'centimeter': { name: 'සෙන්ටිමීටර්', factor: 0.01 },
                'millimeter': { name: 'මිලිමීටර්', factor: 0.001 },
                'mile': { name: 'සැතපුම්', factor: 1609.34 },
                'yard': { name: 'යාර', factor: 0.9144 },
                'foot': { name: 'අඩි', factor: 0.3048 },
                'inch': { name: 'අඟල්', factor: 0.0254 }
            },
            mass: {
                'kilogram': { name: 'කිලෝග්‍රෑම්', factor: 1 },
                'gram': { name: 'ග්‍රෑම්', factor: 0.001 },
                'milligram': { name: 'මිලිග්‍රෑම්', factor: 0.000001 },
                'tonne': { name: 'මෙට්‍රික් ටොන්', factor: 1000 },
                'pound': { name: 'රාත්තල් (lb)', factor: 0.453592 },
                'ounce': { name: 'අවුන්ස (oz)', factor: 0.0283495 }
            },
            volume: {
                'liter': { name: 'ලීටර්', factor: 1 },
                'milliliter': { name: 'මිලිලීටර්', factor: 0.001 },
                'cubic_meter': { name: 'ඝන මීටර්', factor: 1000 },
                'cubic_centimeter': { name: 'ඝන සෙන්ටිමීටර්', factor: 0.001 },
                'gallon_us': { name: 'ගැලුම් (US)', factor: 3.78541 },
                'pint_us': { name: 'පයින්ට් (US)', factor: 0.473176 }
            }
        };

        function populateUnitDropdowns() {
            const selectedType = conversionTypeSelect.value;
            const typeUnits = units[selectedType];

            fromUnitSelect.innerHTML = '';
            toUnitSelect.innerHTML = '';

            for (const key in typeUnits) {
                const option = document.createElement('option');
                option.value = key;
                option.textContent = typeUnits[key].name;
                fromUnitSelect.appendChild(option);

                const option2 = document.createElement('option');
                option2.value = key;
                option2.textContent = typeUnits[key].name;
                toUnitSelect.appendChild(option2);
            }
            // Select default units if available
            if (fromUnitSelect.options.length > 0) {
                fromUnitSelect.value = Object.keys(typeUnits)[0];
            }
            if (toUnitSelect.options.length > 1) {
                toUnitSelect.value = Object.keys(typeUnits)[1]; // Select a different unit for 'to'
            } else if (toUnitSelect.options.length > 0) {
                 toUnitSelect.value = Object.keys(typeUnits)[0];
            }
        }

        function convertMeasurement() {
            const selectedType = conversionTypeSelect.value;
            const inputValue = parseFloat(inputValueElement.value);
            const fromUnitKey = fromUnitSelect.value;
            const toUnitKey = toUnitSelect.value;

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (isNaN(inputValue) || inputValue <= 0) {
                errorMessage.style.display = 'block';
                return;
            }

            const fromUnit = units[selectedType][fromUnitKey];
            const toUnit = units[selectedType][toUnitKey];

            // Convert to base unit (e.g., meters for length)
            const valueInBaseUnit = inputValue * fromUnit.factor;
            // Convert from base unit to target unit
            const convertedValue = valueInBaseUnit / toUnit.factor;

            convertedValueElement.textContent = `${convertedValue.toFixed(4)} ${toUnit.name}`;

            // Generate Explanation
            let explanation = `
                <p>ඔබට <strong>${inputValue} ${fromUnit.name}</strong>, <strong>${toUnit.name}</strong> බවට පරිවර්තනය කිරීමට අවශ්‍යයි.</p>
                <p>1. <strong>මුල් අගය පාදක ඒකකයට පරිවර්තනය කිරීම:</strong> <br>
                ${fromUnit.name} සිට පාදක ඒකකය දක්වා පරිවර්තන සාධකය = <strong>${fromUnit.factor}</strong></p>
                <p>එබැවින්, ${inputValue} ${fromUnit.name} = ${inputValue} × ${fromUnit.factor} (පාදක ඒකක) = <strong>${valueInBaseUnit.toFixed(4)}</strong> (පාදක ඒකක)</p>
                <p>2. <strong>පාදක ඒකකයෙන් අවසාන ඒකකයට පරිවර්තනය කිරීම:</strong> <br>
                පාදක ඒකකයෙන් ${toUnit.name} දක්වා පරිවර්තන සාධකය = <strong>${toUnit.factor}</strong></p>
                <p>එබැවින්, ${valueInBaseUnit.toFixed(4)} (පාදක ඒකක) ÷ ${toUnit.factor} = <strong>${convertedValue.toFixed(4)} ${toUnit.name}</strong></p>
                <p><strong> මතක තබා ගන්න:</strong> මිණුම් පරිවර්තන එදිනෙදා ජීවිතයේදී සහ විද්‍යා කටයුතුවලදී ඉතා වැදගත් වේ. දිගටම පුහුණු වන්න!</p>
            `;
            explanationSteps.innerHTML = explanation;

            resultSection.style.display = 'block';
        }

        // Event Listeners
        conversionTypeSelect.addEventListener('change', populateUnitDropdowns);
        convertBtn.addEventListener('click', convertMeasurement);
        inputValueElement.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                convertMeasurement();
            }
        });
        fromUnitSelect.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                convertMeasurement();
            }
        });
        toUnitSelect.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                convertMeasurement();
            }
        });

        // Initial population
        populateUnitDropdowns();
    </script>

</body>
</html>