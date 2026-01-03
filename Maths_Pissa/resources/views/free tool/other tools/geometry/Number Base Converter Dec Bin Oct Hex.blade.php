<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>සංඛ්‍යා පද්ධති පරිවර්තකය | Number Base Converter | Maths Pissa</title>
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
            --accent-purple: #9C27B0;          /* තද දම් */
            --light-purple-bg: #f3e5f5;        /* ඉතා ලා දම් */
            --input-border: #ab47bc;           /* මධ්‍යම දම් */
            --dark-blue: #1a237e;
            --button-primary: #9C27B0;         /* තද දම් */
            --button-hover: #8E24AA;
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

        .input-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .input-group {
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--input-border);
            text-align: left;
        }
        .input-group label {
            display: block;
            font-size: 1.1em;
            font-weight: 600;
            color: var(--accent-purple);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .input-group input[type="text"] {
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
        .input-group input[type="text"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(156, 39, 176, 0.2);
            outline: none;
        }
        .input-group input[type="text"]::placeholder {
            color: #aaa;
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
                grid-template-columns: 1fr;
            }
            .input-group input[type="text"] {
                font-size: 1em;
                padding: 10px;
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
            <h1>සංඛ්‍යා පද්ධති පරිවර්තකය ✨</h1>
            <p class="description">Decimal, Binary, Octal, Hexadecimal සංඛ්‍යා පද්ධති අතර පහසුවෙන් පරිවර්තනය කරන්න. පරිගණක විද්‍යාවේ පදනම ඉගෙන ගන්න!</p>
            
            <div class="input-section">
                <div class="input-group">
                    <label for="decimalInput"><i class="fas fa-calculator"></i> Decimal (දශමය)</label>
                    <input type="text" id="decimalInput" placeholder="උදා: 10, 42, 255">
                </div>
                
                <div class="input-group">
                    <label for="binaryInput"><i class="fas fa-binary"></i> Binary (ද්විමය)</label>
                    <input type="text" id="binaryInput" placeholder="උදා: 1010, 11111111">
                </div>

                <div class="input-group">
                    <label for="octalInput"><i class="fas fa-grip-lines"></i> Octal (අෂ්ටමය)</label>
                    <input type="text" id="octalInput" placeholder="උදා: 12, 52, 377">
                </div>

                <div class="input-group">
                    <label for="hexInput"><i class="fas fa-hashtag"></i> Hexadecimal (ෂඩ් දශමය)</label>
                    <input type="text" id="hexInput" placeholder="උදා: A, 2A, FF">
                </div>
            </div>

            <div id="errorMessage" class="error-message">
                කරුණාකර වලංගු සංඛ්‍යාවක් ඇතුළත් කරන්න.
            </div>

            <div class="explanation-section">
                <h3>සංඛ්‍යා පද්ධති ගැන ඉගෙන ගනිමු</h3>
                <div id="explanationSteps" class="explanation-steps">
                    <p>1. <strong>Decimal (දශමය - පාදය 10):</strong><br>
                    අප එදිනෙදා භාවිතා කරන සංඛ්‍යා පද්ධතියයි. 0 සිට 9 දක්වා සංඛ්‍යා භාවිතා කරයි.</p>
                    <p>2. <strong>Binary (ද්විමය - පාදය 2):</strong><br>
                    පරිගණක භාවිතා කරන සංඛ්‍යා පද්ධතියයි. 0 සහ 1 යන සංඛ්‍යා පමණක් භාවිතා කරයි.</p>
                    <p>3. <strong>Octal (අෂ්ටමය - පාදය 8):</strong><br>
                    0 සිට 7 දක්වා සංඛ්‍යා භාවිතා කරයි. Binary සංඛ්‍යා කෙටියෙන් ලිවීමට සමහර විට භාවිතා වේ.</p>
                    <p>4. <strong>Hexadecimal (ෂඩ් දශමය - පාදය 16):</strong><br>
                    0-9 සංඛ්‍යා සහ A-F අකුරු (10 සිට 15 දක්වා නියෝජනය කරයි) භාවිතා කරයි. පරිගණක මතක ලිපින වැනි දේ සඳහා බහුලව භාවිතා වේ.</p>
                    <p><strong> මතක තබා ගන්න:</strong> විවිධ සංඛ්‍යා පද්ධති මඟින් එකම අගයක් විවිධ ආකාරවලින් නිරූපණය කළ හැකිය!</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        const decimalInput = document.getElementById('decimalInput');
        const binaryInput = document.getElementById('binaryInput');
        const octalInput = document.getElementById('octalInput');
        const hexInput = document.getElementById('hexInput');
        const errorMessage = document.getElementById('errorMessage');

        function clearErrors() {
            errorMessage.style.display = 'none';
        }

        function validateAndConvert(value, fromBase) {
            clearErrors();
            if (value.trim() === '') {
                return NaN;
            }
            
            let decimalValue;
            let isValid = true;

            switch (fromBase) {
                case 10:
                    // Check if it's a valid decimal number
                    if (!/^\d+$/.test(value)) {
                        isValid = false;
                    } else {
                        decimalValue = parseInt(value, 10);
                    }
                    break;
                case 2:
                    // Check if it's a valid binary number (only 0s and 1s)
                    if (!/^[01]+$/.test(value)) {
                        isValid = false;
                    } else {
                        decimalValue = parseInt(value, 2);
                    }
                    break;
                case 8:
                    // Check if it's a valid octal number (0-7)
                    if (!/^[0-7]+$/.test(value)) {
                        isValid = false;
                    } else {
                        decimalValue = parseInt(value, 8);
                    }
                    break;
                case 16:
                    // Check if it's a valid hexadecimal number (0-9, A-F)
                    if (!/^[0-9a-fA-F]+$/.test(value)) {
                        isValid = false;
                    } else {
                        decimalValue = parseInt(value, 16);
                    }
                    break;
            }

            if (!isValid || isNaN(decimalValue)) {
                errorMessage.textContent = `කරුණාකර වලංගු ${fromBase === 10 ? 'Decimal' : fromBase === 2 ? 'Binary' : fromBase === 8 ? 'Octal' : 'Hexadecimal'} සංඛ්‍යාවක් ඇතුළත් කරන්න.`;
                errorMessage.style.display = 'block';
                return NaN;
            }
            return decimalValue;
        }

        function convertFrom(inputElement, fromBase) {
            const value = inputElement.value;
            const decimal = validateAndConvert(value, fromBase);

            if (isNaN(decimal)) {
                // Clear other fields if input is invalid
                if (inputElement !== decimalInput) decimalInput.value = '';
                if (inputElement !== binaryInput) binaryInput.value = '';
                if (inputElement !== octalInput) octalInput.value = '';
                if (inputElement !== hexInput) hexInput.value = '';
                return;
            }

            if (inputElement !== decimalInput) decimalInput.value = decimal.toString(10);
            if (inputElement !== binaryInput) binaryInput.value = decimal.toString(2);
            if (inputElement !== octalInput) octalInput.value = decimal.toString(8);
            if (inputElement !== hexInput) hexInput.value = decimal.toString(16).toUpperCase();
        }

        decimalInput.addEventListener('input', () => convertFrom(decimalInput, 10));
        binaryInput.addEventListener('input', () => convertFrom(binaryInput, 2));
        octalInput.addEventListener('input', () => convertFrom(octalInput, 8));
        hexInput.addEventListener('input', () => convertFrom(hexInput, 16));

    </script>

</body>
</html>