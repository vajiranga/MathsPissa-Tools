<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>දර්ශක ගණනය</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding-top: 80px;
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
            padding: 20px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            color: white;
            font-size: 2em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            background: white;
            border: none;
            padding: 12px 20px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.2em;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }

        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        #home {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .youtube-btn {
            background: #FF0000;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .youtube-btn:hover {
            background: #cc0000;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .input-section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input-label {
            font-size: 1.5em;
            color: #5a67d8;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        .main-input {
            width: 100%;
            padding: 20px;
            font-size: 2em;
            border: 3px solid #e0e0e0;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .main-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.4);
            transform: scale(1.02);
        }

        .generate-btn {
            width: 100%;
            padding: 18px;
            font-size: 1.5em;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .generate-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.5);
        }

        .generate-btn:active {
            transform: translateY(0);
        }

        .quick-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .quick-btn {
            padding: 15px 35px;
            font-size: 1.3em;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .quick-btn:nth-child(1) {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            color: white;
        }

        .quick-btn:nth-child(2) {
            background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);
            color: white;
        }

        .quick-btn:nth-child(3) {
            background: linear-gradient(135deg, #fa709a 0%, #C21A5C 100%);
            color: white;
        }
        .quick-btn:nth-child(4) {
            background: linear-gradient(135deg, #fee140 0%, #808000 100%);
            color: white;
        }
        .quick-btn:nth-child(5) {
            background: linear-gradient(135deg, #30cfd0 0%, #00FF00 100%);
            color: white;
        }.quick-btn:nth-child(6) {
            background: linear-gradient(135deg, #330867 0%, #50C878 100%);
            color: white;
        }.quick-btn:nth-child(7) {
            background: linear-gradient(135deg, #fa709a 0%, #FADFCA 100%);
            color: white;
        }

        .quick-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.25);
        }

        .results-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-height: 600px;
            overflow-y: auto;
            display: none;
        }

        .results-section.show {
            display: block;
            animation: fadeIn 0.6s ease;
        }

        .results-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .results-table tr {
            animation: slideIn 0.4s ease backwards;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .results-table tr:nth-child(1) { animation-delay: 0.05s; }
        .results-table tr:nth-child(2) { animation-delay: 0.1s; }
        .results-table tr:nth-child(3) { animation-delay: 0.15s; }
        .results-table tr:nth-child(4) { animation-delay: 0.2s; }
        .results-table tr:nth-child(5) { animation-delay: 0.25s; }

        .results-table td {
            padding: 15px 20px;
            font-size: 1.3em;
            border-radius: 10px;
        }

        .results-table tr:nth-child(odd) td {
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        }

        .results-table tr:nth-child(even) td {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }

        .calc-part {
            color: #333;
            font-weight: 500;
        }

        .result-value {
            color: #d946ef;
            font-weight: 700;
            font-size: 1.2em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .base-num {
            color: #0891b2;
            font-weight: 600;
        }

        .power-num {
            color: #7c3aed;
            font-weight: 600;
            vertical-align: super;
            font-size: 0.8em;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5em;
            }

            .input-section {
                padding: 25px;
            }

            .main-input {
                font-size: 1.5em;
            }

            .quick-buttons {
                flex-direction: column;
            }

            .quick-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>දර්ශක ගණනය</h1>
        <div class="nav-buttons">
            <a href="{{ url('/') }}" class="nav-btn" id="home">
                🏠 Home
            </a>
            <a href="https://www.youtube.com/@mathspissa" target="_blank" class="nav-btn youtube-btn">
                ▶️ YouTube
            </a>
        </div>
    </header>
    
    <div class="container">
        <div class="input-section">
            <div class="input-label">මූලික සංඛ්‍යාව (Base Number) ඇතුළත් කරන්න:</div>
            <input type="number" class="main-input" id="baseInput" placeholder="මූලික සංඛ්‍යාව...">
            <button class="generate-btn" onclick="generateTable()">ගණනය කරන්න (Calculate)</button>
            <div class="quick-buttons">
                <button class="quick-btn" onclick="quickCalculate(1)">1</button>
                <button class="quick-btn" onclick="quickCalculate(2)">2</button>
                <button class="quick-btn" onclick="quickCalculate(3)">3</button>
                <button class="quick-btn" onclick="quickCalculate(5)">5</button>
                <button class="quick-btn" onclick="quickCalculate(8)">8</button>
                <button class="quick-btn" onclick="quickCalculate(10)">10</button>
                <button class="quick-btn" onclick="quickCalculate(18)">18</button>
            </div>
        </div>

        <div class="results-section" id="resultsSection">
            <table class="results-table" id="resultsTable">
            </table>
        </div>
    </div>

    <script>
        document.getElementById('home').addEventListener('click', function() {
            location.reload();
        });

        function generateTable() {
            const baseInput = document.getElementById('baseInput');
            const base = parseFloat(baseInput.value);

            if (isNaN(base) || base === '') {
                alert('කරුණාකර වලංගු මූලික සංඛ්‍යාවක් ඇතුළත් කරන්න!');
                return;
            }

            const resultsSection = document.getElementById('resultsSection');
            const resultsTable = document.getElementById('resultsTable');
            
            resultsTable.innerHTML = '';

            for (let power = 0; power <= 25; power++) {
                const result = Math.pow(base, power);
                const row = document.createElement('tr');
                
                const cell = document.createElement('td');
                cell.innerHTML = `<span class="calc-part"><span class="base-num">${base}</span><span class="power-num">${power}</span> = <span class="result-value">${formatNumber(result)}</span></span>`;
                
                row.appendChild(cell);
                resultsTable.appendChild(row);
            }

            resultsSection.classList.add('show');
            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function quickCalculate(base) {
            document.getElementById('baseInput').value = base;
            generateTable();
        }

        function formatNumber(num) {
            if (num >= 1e15) {
                return num.toExponential(2);
            }
            return num.toLocaleString('en-US');
        }

        document.getElementById('baseInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                generateTable();
            }
        });
    </script>
</body>
</html>