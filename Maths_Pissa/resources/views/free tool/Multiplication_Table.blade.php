<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
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
            padding-bottom: 50px;
        }

        .header {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 25px 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            font-size: 2.5em;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            font-weight: bold;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .home-btn {
            background: linear-gradient(135deg, #48c6ef 0%, #6f86d6 100%);
            color: white;
        }

        .youtube-btn {
            background: #FF0000;
            color: white;
        }

        .nav-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .input-section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            margin-bottom: 40px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .input-label {
            font-size: 1.5em;
            color: #667eea;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        .input-wrapper {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        #numberInput {
            flex: 1;
            padding: 18px;
            font-size: 1.3em;
            border: 3px solid #e0e0e0;
            border-radius: 15px;
            transition: all 0.3s ease;
            outline: none;
        }

        #numberInput:focus {
            border-color: #667eea;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
            transform: scale(1.02);
        }

        .generate-btn {
            padding: 18px 40px;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 1.3em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(245, 87, 108, 0.4);
        }

        .generate-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(245, 87, 108, 0.6);
        }

        .quick-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .quick-btn {
            padding: 15px 30px;
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(67, 233, 123, 0.4);
        }

        .quick-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(67, 233, 123, 0.6);
        }

        .results-section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: none;
            animation: slideUp 0.5s ease;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .results-title {
            font-size: 1.8em;
            color: #667eea;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }

        .table-row {
            padding: 15px 25px;
            margin: 10px 0;
            border-radius: 12px;
            font-size: 1.3em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            opacity: 0;
            animation: rowFadeIn 0.4s ease forwards;
            transition: all 0.3s ease;
        }

        @keyframes rowFadeIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .table-row:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .table-row:nth-child(even) {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }

        .table-row:nth-child(odd) {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }

        .multiplier {
            color: #667eea;
            font-weight: bold;
        }

        .base-number {
            color: #f5576c;
            font-weight: bold;
        }

        .result {
            color: #4a77fcff;
            font-weight: bold;
            font-size: 1.2em;
            padding: 8px 20px;
            background: rgba(67, 233, 123, 0.2);
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 1.8em;
            }
            
            .input-wrapper {
                flex-direction: column;
            }
            
            .nav-buttons {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="title">ගුණන වගුව</div>
        <div class="nav-buttons">
            <a href="/" class="nav-btn home-btn">
                🏠 Home
            </a>
            <a href="https://www.youtube.com/@mathspissa" target="_blank" class="nav-btn youtube-btn">
                ▶️ YouTube
            </a>
        </div>
    </header>

    <div class="container">
        <div class="input-section">
            <div class="input-label">චක්කරය අවශ්‍ය සංඛ්‍යාව ඇතුලත් කරන්න:</div>
            <div class="input-wrapper">
                <input type="number" id="numberInput" placeholder="0 - 9999..." min="0">
                <button class="generate-btn" onclick="generateTable()">Generate ✨</button>
            </div>
            <div class="quick-buttons">
                <button class="quick-btn" onclick="quickGenerate(3)">3</button>
                <button class="quick-btn" onclick="quickGenerate(8)">8</button>
                <button class="quick-btn" onclick="quickGenerate(11)">11</button>
                <button class="quick-btn" onclick="quickGenerate(32)">32</button>
                <button class="quick-btn" onclick="quickGenerate(113)">113</button>
                <button class="quick-btn" onclick="quickGenerate(1535)">1535</button>
                <button class="quick-btn" onclick="quickGenerate(65418)">65418</button>
            </div>
        </div>

        <div class="results-section" id="resultsSection">
            <div class="results-title" id="resultsTitle"></div>
            <div id="tableResults"></div>
        </div>
    </div>

    <script>
        const numberInput = document.getElementById('numberInput');
        const resultsSection = document.getElementById('resultsSection');
        const resultsTitle = document.getElementById('resultsTitle');
        const tableResults = document.getElementById('tableResults');

        numberInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                generateTable();
            }
        });

        function quickGenerate(number) {
            numberInput.value = number;
            generateTable();
        }

        function generateTable() {
            const number = parseInt(numberInput.value);
            
            if (isNaN(number) || number < 0) {
                alert('කරුණාකර වලංගු සංඛ්‍යාවක් ඇතුළත් කරන්න!');
                return;
            }

            resultsTitle.textContent = `${number} හි ගුණිත වගුව (Multiplication Table of ${number})`;
            tableResults.innerHTML = '';
            resultsSection.style.display = 'block';

            for (let i = 0; i <= 25; i++) {
                const result = number * i;
                const row = document.createElement('div');
                row.className = 'table-row';
                row.style.animationDelay = `${i * 0.05}s`;
                row.innerHTML = `
                    <span><span class="base-number">${number}</span> × <span class="multiplier">${i}</span> =</span>
                    <span class="result">${result}</span>
                `;
                tableResults.appendChild(row);
            }

            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    </script>
</body>
</html>