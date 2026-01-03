<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>වර්ගඵල සහ පරිමාව ගණනය | Area & Volume Calculator - Maths Pissa</title>
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
            --button-primary: #9C27B0;         /* තද දම් */
            --button-hover: #8e24aa;
            --result-bg: #f3e5f5;              /* ඉතා ලා දම් */
            --accent-pink: #e91e63;            /* රෝස */
            --light-orange: #ffe0b2;           /* ලා තැඹිලි */
            --dark-orange: #ff6f00;
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
            border-left: 6px solid var(--accent-pink);
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

        .shape-selector {
            width: 100%;
            max-width: 400px;
            padding: 12px 15px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 10px;
            font-size: 1.3em;
            background-color: var(--card-bg);
            color: var(--text-dark);
            cursor: pointer;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .shape-selector:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(156, 39, 176, 0.3);
            outline: none;
        }

        .input-fields-container {
            width: 100%;
            max-width: 400px;
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            display: none; /* මුලින් සඟවා තබයි */
            flex-direction: column;
            gap: 15px;
            margin-top: 15px;
            text-align: left;
        }
        .input-field-group {
            display: flex;
            flex-direction: column;
        }
        .input-field-group label {
            font-size: 1.1em;
            font-weight: 600;
            color: var(--dark-orange);
            margin-bottom: 5px;
        }
        .input-field-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.1em;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .input-field-group input[type="number"]:focus {
            border-color: var(--accent-pink);
            box-shadow: 0 0 0 3px rgba(233, 30, 99, 0.2);
            outline: none;
        }

        .shape-image {
            width: 150px;
            height: 150px;
            background-color: #eee;
            border: 2px dashed #bbb;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.9em;
            color: #666;
            margin-top: 20px;
            margin-bottom: 10px;
            align-self: center;
        }
        .shape-image img {
            max-width: 100%;
            max-height: 100%;
            display: none; /* Images will be shown based on selection */
        }
        /* Example images - you'd replace these with actual image URLs */
        #img-square { content: url('https://via.placeholder.com/150/ffb74d/ffffff?text=Square'); }
        #img-rectangle { content: url('https://via.placeholder.com/150x100/ffb74d/ffffff?text=Rectangle'); }
        #img-circle { content: url('https://via.placeholder.com/150/ffb74d/ffffff?text=Circle'); border-radius: 50%; }
        #img-triangle { content: url('https://via.placeholder.com/150/ffb74d/ffffff?text=Triangle'); }
        #img-cube { content: url('https://via.placeholder.com/150/ffb74d/ffffff?text=Cube'); }
        #img-sphere { content: url('https://via.placeholder.com/150/ffb74d/ffffff?text=Sphere'); border-radius: 50%; }
        #img-cylinder { content: url('https://via.placeholder.com/150x150/ffb74d/ffffff?text=Cylinder'); }


        .input-section button.calculate-btn {
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

        .input-section button.calculate-btn:hover {
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
            border: 1px solid #e1bee7;
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
            color: #ffab40; /* Amber for icon */
        }

        .result-item {
            background-color: #fce4ec; /* Light pink */
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #f48fb1;
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
            color: var(--accent-pink);
            font-size: 1.2em;
        }

        .explanation-section h3 {
            color: var(--accent-pink);
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
            .shape-selector {
                width: 90%;
                font-size: 1.1em;
            }
            .input-fields-container {
                width: 90%;
            }
            .input-section button.calculate-btn {
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
            .shape-image {
                width: 100px;
                height: 100px;
            }
            .input-section button.calculate-btn {
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
            <h1>වර්ගඵල සහ පරිමාව ගණනය ✨</h1>
            <p class="description">විවිධ හැඩතලවල වර්ගඵලය සහ පරිමාව සොයා ගන්න. සූත්‍ර සහ පැහැදිලි කිරීම් සමඟින් ජ්‍යාමිතිය පහසුවෙන් ඉගෙන ගන්න. සෑම හැඩතලයක් සඳහාම රූපයක් ද ඇතුළත් කර ඇත!</p>
            
            <div class="input-section">
                <select id="shapeSelect" class="shape-selector">
                    <option value="">හැඩතලයක් තෝරන්න</option>
                    <option value="square_area">සමචතුරස්‍රයක වර්ගඵලය</option>
                    <option value="rectangle_area">සෘජුකෝණාස්‍රයක වර්ගඵලය</option>
                    <option value="circle_area">වෘත්තයක වර්ගඵලය</option>
                    <option value="triangle_area">ත්‍රිකෝණයක වර්ගඵලය</option>
                    <option value="cube_volume">ඝනකයක පරිමාව</option>
                    <option value="sphere_volume">ගෝලයක පරිමාව</option>
                    <option value="cylinder_volume">සිලින්ඩරයක පරිමාව</option>
                </select>

                <div id="inputFieldsContainer" class="input-fields-container">
                    <div class="shape-image">
                        <img id="currentShapeImage" src="" alt="Shape Image">
                    </div>
                    {{-- Input fields will be dynamically generated here --}}
                </div>
                
                <button id="calculateBtn" class="calculate-btn" style="display: none;"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර සියලුම අවශ්‍ය අගයන් ධන සංඛ්‍යා ලෙස ඇතුළත් කරන්න.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-magic"></i></h2>
                <div class="result-item">
                    <i class="fas fa-vector-square"></i> <strong>ගණනය කළ අගය:</strong> <span id="calculatedValue"></span>
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
        const shapeSelect = document.getElementById('shapeSelect');
        const inputFieldsContainer = document.getElementById('inputFieldsContainer');
        const calculateBtn = document.getElementById('calculateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const calculatedValueElement = document.getElementById('calculatedValue');
        const explanationSteps = document.getElementById('explanationSteps');
        const currentShapeImage = document.getElementById('currentShapeImage');

        const PI = Math.PI;

        shapeSelect.addEventListener('change', generateInputFields);
        calculateBtn.addEventListener('click', calculateValue);

        function generateInputFields() {
            const selectedShape = shapeSelect.value;
            inputFieldsContainer.innerHTML = ''; // Clear previous fields
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';
            calculateBtn.style.display = 'none';
            currentShapeImage.style.display = 'none';
            
            let html = '';
            let imageSrc = '';
            let imageAlt = '';

            switch (selectedShape) {
                case 'square_area':
                    html += '<div class="input-field-group"><label for="side">පැත්තේ දිග (a):</label><input type="number" id="side" min="0" step="any" placeholder="උදා: 5"></div>';
                    imageSrc = 'https://placehold.co/100x100/000000/ffffff?text=Square&font=roboto'; imageAlt = 'Square';
                    break;
                case 'rectangle_area':
                    html += '<div class="input-field-group"><label for="length">දිග (l):</label><input type="number" id="length" min="0" step="any" placeholder="උදා: 8"></div>';
                    html += '<div class="input-field-group"><label for="width">පළල (w):</label><input type="number" id="width" min="0" step="any" placeholder="උදා: 4"></div>';
                    imageSrc = 'https://placehold.co/100x50/000000/ffffff?text=Square&font=roboto'; imageAlt = 'Rectangle';
                    break;
                case 'circle_area':
                    html += '<div class="input-field-group"><label for="radius">අරය (r):</label><input type="number" id="radius" min="0" step="any" placeholder="උදා: 7"></div>';
                    break;
                case 'triangle_area':
                    html += '<div class="input-field-group"><label for="base">පාදය (b):</label><input type="number" id="base" min="0" step="any" placeholder="උදා: 10"></div>';
                    html += '<div class="input-field-group"><label for="height">උස (h):</label><input type="number" id="height" min="0" step="any" placeholder="උදා: 6"></div>';
                    break;
                case 'cube_volume':
                    html += '<div class="input-field-group"><label for="cubeSide">පැත්තේ දිග (a):</label><input type="number" id="cubeSide" min="0" step="any" placeholder="උදා: 3"></div>';
                    break;
                case 'sphere_volume':
                    html += '<div class="input-field-group"><label for="sphereRadius">අරය (r):</label><input type="number" id="sphereRadius" min="0" step="any" placeholder="උදා: 5"></div>';
                    break;
                case 'cylinder_volume':
                    html += '<div class="input-field-group"><label for="cylinderRadius">අරය (r):</label><input type="number" id="cylinderRadius" min="0" step="any" placeholder="උදා: 4"></div>';
                    html += '<div class="input-field-group"><label for="cylinderHeight">උස (h):</label><input type="number" id="cylinderHeight" min="0" step="any" placeholder="උදා: 10"></div>';
                    break;
                default:
                    inputFieldsContainer.style.display = 'none';
                    return;
            }

            // Add image placeholder
            inputFieldsContainer.innerHTML = `<div class="shape-image"><img id="currentShapeImage" src="${imageSrc}" alt="${imageAlt}" style="display: block;"></div>` + html;

            inputFieldsContainer.style.display = 'flex';
            calculateBtn.style.display = 'inline-flex';

            // Add event listener for 'Enter' key on newly created input fields
            inputFieldsContainer.querySelectorAll('input').forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        calculateValue();
                    }
                });
            });
        }

        function calculateValue() {
            const selectedShape = shapeSelect.value;
            let value, unit = '';
            let explanation = '';
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            let inputsValid = true;
            let currentInputs = {};
            inputFieldsContainer.querySelectorAll('input').forEach(input => {
                const val = parseFloat(input.value);
                if (isNaN(val) || val <= 0) {
                    inputsValid = false;
                }
                currentInputs[input.id] = val;
            });

            if (!inputsValid) {
                errorMessage.style.display = 'block';
                return;
            }

            switch (selectedShape) {
                case 'square_area':
                    const side = currentInputs.side;
                    value = side * side;
                    unit = 'වර්ග ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>වර්ගයක වර්ගඵලය (A) = පැත්තේ දිග × පැත්තේ දිග = (a²) </p>
                        <p>2. <strong>ගණනය:</strong> <br>${side} × ${side} = <strong>${value.toFixed(2)}</strong></p>
                    `;
                    break;
                case 'rectangle_area':
                    const length = currentInputs.length;
                    const width = currentInputs.width;
                    value = length * width;
                    unit = 'වර්ග ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>සෘජුකෝණාස්‍රයක වර්ගඵලය (A) = දිග × පළල</p>
                        <p>2. <strong>ගණනය:</strong> <br>${length} × ${width} = <strong>${value.toFixed(2)}</strong></p>
                    `;
                    break;
                case 'circle_area':
                    const radius = currentInputs.radius;
                    value = PI * radius * radius;
                    unit = 'වර්ග ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>වෘත්තයක වර්ගඵලය (A) = π × අරය × අරය (πr²)</p>
                        <p>2. <strong>ගණනය:</strong> <br>${PI.toFixed(2)} × ${radius} × ${radius} = <strong>${value.toFixed(2)}</strong> (π සඳහා 3.14 ලෙස ගෙන ඇත)</p>
                    `;
                    break;
                case 'triangle_area':
                    const base = currentInputs.base;
                    const height = currentInputs.height;
                    value = 0.5 * base * height;
                    unit = 'වර්ග ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>ත්‍රිකෝණයක වර්ගඵලය (A) = ½ × පාදය × උස (½bh)</p>
                        <p>2. <strong>ගණනය:</strong> <br>0.5 × ${base} × ${height} = <strong>${value.toFixed(2)}</strong></p>
                    `;
                    break;
                case 'cube_volume':
                    const cubeSide = currentInputs.cubeSide;
                    value = cubeSide * cubeSide * cubeSide;
                    unit = 'ඝන ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>ඝනකයක පරිමාව (V) = පැත්තේ දිග × පැත්තේ දිග × පැත්තේ දිග = (a³)</p>
                        <p>2. <strong>ගණනය:</strong> <br>${cubeSide} × ${cubeSide} × ${cubeSide} = <strong>${value.toFixed(2)}</strong></p>
                    `;
                    break;
                case 'sphere_volume':
                    const sphereRadius = currentInputs.sphereRadius;
                    value = (4/3) * PI * sphereRadius * sphereRadius * sphereRadius;
                    unit = 'ඝන ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>ගෝලයක පරිමාව (V) = ⁴⁄₃πr³</p>
                        <p>2. <strong>ගණනය:</strong> <br>(4/3) × ${PI.toFixed(2)} × ${sphereRadius}³ = <strong>${value.toFixed(2)}</strong> (π සඳහා 3.14 ලෙස ගෙන ඇත)</p>
                    `;
                    break;
                case 'cylinder_volume':
                    const cylinderRadius = currentInputs.cylinderRadius;
                    const cylinderHeight = currentInputs.cylinderHeight;
                    value = PI * cylinderRadius * cylinderRadius * cylinderHeight;
                    unit = 'ඝන ඒකක';
                    explanation = `
                        <p>1. <strong>සූත්‍රය:</strong> <br>සිලින්ඩරයක පරිමාව (V) = πr²h</p>
                        <p>2. <strong>ගණනය:</strong> <br>${PI.toFixed(2)} × ${cylinderRadius}² × ${cylinderHeight} = <strong>${value.toFixed(2)}</strong> (π සඳහා 3.14 ලෙස ගෙන ඇත)</p>
                    `;
                    break;
                default:
                    return;
            }

            calculatedValueElement.textContent = `${value.toFixed(2)} ${unit}`;
            explanationSteps.innerHTML = explanation;
            explanationSteps.innerHTML += `<p><strong> මතක තබා ගන්න:</strong> හැඩතලවල වර්ගඵලය සහ පරිමාව අවබෝධ කර ගැනීම එදිනෙදා ජීවිතයේදීත් බොහෝ වැදගත්. දිගටම උත්සාහ කරන්න!</p>`;

            resultSection.style.display = 'block';
        }
    </script>

</body>
</html>