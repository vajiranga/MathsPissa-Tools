<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ප්‍රාථමික සාධක | Prime Factorization - Maths Pissa</title>
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
            --button-hover: #45a049;
            --result-bg: #e0f7fa;              /* ලා නිල් */
            --accent-purple: #9c27b0;          /* තද දම් */
            --light-green: #d4edda;
            --dark-green: #155724;
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
            justify-content: space-between; /* බොත්තම් වමට, මැදට, දකුණට */
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
            flex: 1; /* Footer එක පහළට තල්ලු කිරීමට */
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
            border-left: 6px solid var(--accent-purple);
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
            color: var(--accent-purple);
            margin-bottom: 15px;
        }

        .input-section input[type="number"] {
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

        .input-section input[type="number"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(76, 175, 80, 0.3);
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
            border: 1px solid #b2ebf2;
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
            color: #ffc107; /* Star color */
        }

        .result-output {
            background-color: #f0f8ff;
            padding: 15px 20px;
            border-radius: 8px;
            border: 1px dashed #a7d9ed;
            margin-bottom: 25px;
            font-size: 1.5em;
            font-weight: 700;
            color: var(--dark-green);
            text-align: center;
            word-wrap: break-word; /* දිගු අගයන් සඳහා */
        }

        .explanation-section h3 {
            color: var(--accent-purple);
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

        /* Factor Tree Styling */
        .factor-tree {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 1.1em;
            color: var(--text-dark);
        }

        .tree-node {
            background-color: #ffe0b2; /* ලා තැඹිලි */
            border: 1px solid #ffcc80;
            padding: 5px 10px;
            border-radius: 5px;
            margin: 5px 0;
            font-weight: 600;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .tree-branch {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
            position: relative;
        }
        .tree-branch::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 10px;
            background-color: #999;
        }
        .tree-branch .line {
            width: 1px;
            height: 15px;
            background-color: #999;
            margin: 0 5px;
        }
        .tree-leaf {
            display: flex;
            gap: 10px;
            margin-top: 10px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .tree-leaf-prime {
            background-color: var(--light-green); /* ලා කොළ */
            border: 1px solid var(--dark-green);
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: 700;
            color: var(--dark-green);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        /* Error Message */
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            margin-top: 20px;
            display: none; /* මුලින් සඟවා තබයි */
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
            .input-section input[type="number"] {
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
            .result-output {
                font-size: 1.2em;
            }
            .explanation-section h3 {
                font-size: 1.3em;
            }
            .explanation-steps p, .factor-tree {
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
            .input-section input[type="number"] {
                width: 90%;
            }
            .result-section {
                padding: 20px;
            }
            .result-output {
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
            <h1>ප්‍රාථමික සාධක සොයනය ✨</h1>
            <p class="description">ඕනෑම සංඛ්‍යාවක ප්‍රාථමික සාධක පහසුවෙන් සොයා ගන්න. ගණිතයේ මූලික සංකල්පයක් වන මෙය වඩාත් හොඳින් අවබෝධ කර ගැනීමට මෙම Tool එක ඔබට උපකාරී වේවි. සාධක ගසක් (Factor Tree) ආධාරයෙන් පියවරෙන් පියවර ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <label for="numberInput">අංකයක් ඇතුළත් කරන්න:</label>
                <input type="number" id="numberInput" placeholder="උදා: 120" min="2" step="1">
                <button id="calculateBtn"><i class="fas fa-calculator"></i> ගණනය කරන්න</button>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර 2ට වඩා විශාල පූර්ණ සංඛ්‍යාවක් ඇතුළත් කරන්න.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ප්‍රතිඵලය <i class="fas fa-star"></i></h2>
                <div class="result-output">
                    <span id="primeFactorizationResult"></span>
                </div>

                <div class="explanation-section">
                    <h3>පියවරෙන් පියවර පැහැදිලි කිරීම (Factor Tree)</h3>
                    <div id="factorTreeContainer" class="factor-tree">
                        {{-- Factor Tree එක මෙහි ජනනය වේ --}}
                    </div>
                    <div class="explanation-steps">
                        <p>1. <strong>ප්‍රාථමික සංඛ්‍යා මොනවාද?</strong> <br> ප්‍රාථමික සංඛ්‍යා යනු 1න් සහ තමන්ගෙන්ම පමණක් බෙදිය හැකි 2, 3, 5, 7, 11 වැනි සංඛ්‍යා වේ.</p>
                        <p>2. <strong>සාධක ගස (Factor Tree):</strong> <br> අපි ලබා දුන් සංඛ්‍යාව කුඩාම ප්‍රාථමික සංඛ්‍යා වලින් බෙදමින් ඉදිරියට යනවා. බෙදිය නොහැකි වන තෙක්ම මෙම ක්‍රියාවලිය සිදුවන අතර අවසානයේදී අපට ලැබෙන්නේ ප්‍රාථමික සාධක පමණි.</p>
                        <p>3. <strong>අවසන් ප්‍රතිඵලය:</strong> <br> ලැබුණු සියලුම ප්‍රාථමික සාධක ගුණිතයක් ලෙස හෝ දර්ශක භාවිතයෙන් ඉදිරිපත් කළ විට, එය එම සංඛ්‍යාවේ ප්‍රාථමික සාධක ලෙස හැඳින්වේ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('calculateBtn').addEventListener('click', calculatePrimeFactors);
        document.getElementById('numberInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                calculatePrimeFactors();
            }
        });

        function calculatePrimeFactors() {
            const numberInput = document.getElementById('numberInput');
            const number = parseInt(numberInput.value);
            const resultSection = document.getElementById('resultSection');
            const primeFactorizationResult = document.getElementById('primeFactorizationResult');
            const factorTreeContainer = document.getElementById('factorTreeContainer');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none'; // Error message එක සඟවන්න
            resultSection.style.display = 'none'; // Result section එක සඟවන්න

            if (isNaN(number) || number < 2) {
                errorMessage.style.display = 'block';
                return;
            }

            const factors = getPrimeFactors(number);
            const factorization = formatFactors(factors);
            
            primeFactorizationResult.textContent = `${number} = ${factorization}`;
            
            // Factor Tree එක ජනනය කිරීම
            factorTreeContainer.innerHTML = ''; // පැරණි Tree එක ඉවත් කරන්න
            generateFactorTree(number, factorTreeContainer);

            resultSection.style.display = 'block';
        }

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
            return result.join(' × '); // 'x' වෙනුවට '×' ගුණිත ලකුණ
        }

        // Factor Tree Generator Function
        function generateFactorTree(num, container) {
            const stack = [{ number: num, parentElement: container }];

            while (stack.length > 0) {
                const { number, parentElement } = stack.pop();

                const nodeDiv = document.createElement('div');
                nodeDiv.classList.add('tree-node');
                nodeDiv.textContent = number;
                parentElement.appendChild(nodeDiv);

                let isPrime = true;
                if (number > 1) {
                    for (let i = 2; i <= Math.sqrt(number); i++) {
                        if (number % i === 0) {
                            isPrime = false;
                            const factor1 = i;
                            const factor2 = number / i;

                            const branchDiv = document.createElement('div');
                            branchDiv.classList.add('tree-branch');
                            
                            // වම් පැත්තේ Factor
                            const factor1Div = document.createElement('div');
                            branchDiv.appendChild(factor1Div);
                            stack.push({ number: factor1, parentElement: factor1Div }); // Recursive call

                            // දකුණු පැත්තේ Factor
                            const factor2Div = document.createElement('div');
                            branchDiv.appendChild(factor2Div);
                            stack.push({ number: factor2, parentElement: factor2Div }); // Recursive call
                            
                            parentElement.appendChild(branchDiv);
                            break; // එක් සාධක යුගලයක් සොයාගත් පසු නවත්වන්න
                        }
                    }
                }
                
                if (isPrime && number > 1) {
                    nodeDiv.classList.add('tree-leaf-prime'); // ප්‍රාථමික සංඛ්‍යා වෙනත් වර්ණයකින්
                }
            }
        }

        // Factor Tree එක උඩු යටිකුරු වන නිසා නිවැරදි කිරීම
        // මෙය Factor Tree එක නිවැරදිව පෙන්වීමට recursion භාවිතා කරයි.
        function generateFactorTreeCorrected(num, container) {
            if (num < 2) return;

            const nodeDiv = document.createElement('div');
            nodeDiv.classList.add('tree-node');
            nodeDiv.textContent = num;
            container.appendChild(nodeDiv);

            if (isNumberPrime(num)) {
                nodeDiv.classList.add('tree-leaf-prime');
                return;
            }

            for (let i = 2; i <= Math.sqrt(num); i++) {
                if (num % i === 0) {
                    const branchDiv = document.createElement('div');
                    branchDiv.classList.add('tree-branch');
                    container.appendChild(branchDiv);

                    // වම් පැත්තේ Factor
                    const factor1Div = document.createElement('div');
                    branchDiv.appendChild(factor1Div);
                    generateFactorTreeCorrected(i, factor1Div);

                    // දකුණු පැත්තේ Factor
                    const factor2Div = document.createElement('div');
                    branchDiv.appendChild(factor2Div);
                    generateFactorTreeCorrected(num / i, factor2Div);
                    
                    return; // එක් සාධක යුගලයක් සොයාගත් පසු නවත්වන්න
                }
            }
        }

        function isNumberPrime(num) {
            if (num < 2) return false;
            for (let i = 2; i <= Math.sqrt(num); i++) {
                if (num % i === 0) return false;
            }
            return true;
        }

        // Initial call to generateFactorTreeCorrected
        // Replace generateFactorTree(number, factorTreeContainer); with:
        // generateFactorTreeCorrected(number, factorTreeContainer);
        // within the calculatePrimeFactors function.
        // Also remove the old generateFactorTree and isNumberPrime functions.
        // Let's refine calculatePrimeFactors function with the corrected tree generation.

        // Refined calculatePrimeFactors function to use the corrected tree
        function calculatePrimeFactors() {
            const numberInput = document.getElementById('numberInput');
            const number = parseInt(numberInput.value);
            const resultSection = document.getElementById('resultSection');
            const primeFactorizationResult = document.getElementById('primeFactorizationResult');
            const factorTreeContainer = document.getElementById('factorTreeContainer');
            const errorMessage = document.getElementById('errorMessage');

            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            if (isNaN(number) || number < 2) {
                errorMessage.style.display = 'block';
                return;
            }

            const factors = getPrimeFactors(number);
            const factorization = formatFactors(factors);
            
            primeFactorizationResult.textContent = `${number} = ${factorization}`;
            
            factorTreeContainer.innerHTML = ''; // Clear previous tree
            generateFactorTreeCorrected(number, factorTreeContainer); // Use the corrected function

            resultSection.style.display = 'block';
        }

    </script>

</body>
</html>