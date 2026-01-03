<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 450px;
            width: 100%;
            margin: 0 auto 30px;
            padding: 0 10px;
        }

        .home-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 10px 24px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .home-btn:hover {
            background: rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .home-btn:active {
            transform: translateY(0);
        }

        .youtube-icon {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
        }

        .youtube-icon:hover {
            background: #FF0000;
            border-color: #FF0000;
            transform: translateY(-2px) scale(1.05);
            box-shadow: 0 5px 20px rgba(255, 0, 0, 0.4);
        }

        .youtube-icon:active {
            transform: translateY(0) scale(1);
        }

        /* Calculator Container */
        .calculator-container {
            max-width: 450px;
            width: 100%;
            margin: 0 auto;
        }

        .calculator {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(255, 255, 255, 0.5);
        }

        /* Display */
        .display {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 20px;
            padding: 25px 20px;
            margin-bottom: 25px;
            min-height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
            box-shadow: inset 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .display::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(-30%, -30%); }
        }

        .expression {
            color: rgba(255, 255, 255, 0.8);
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 8px;
            word-break: break-all;
            text-align: right;
            width: 100%;
            min-height: 28px;
            position: relative;
            z-index: 1;
        }

        .result {
            color: white;
            font-size: 36px;
            font-weight: 700;
            word-break: break-all;
            text-align: right;
            width: 100%;
            position: relative;
            z-index: 1;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .result.pop {
            animation: popIn 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0.8) translateY(10px);
            }
            60% {
                transform: scale(1.05) translateY(0);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        /* Button Grid */
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .button {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            border: none;
            border-radius: 15px;
            padding: 18px;
            font-size: 18px;
            font-weight: 600;
            color: #333;
            cursor: pointer;
            transition: all 0.15s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: translate(-50%, -50%);
            transition: width 0.4s, height 0.4s;
        }

        .button:active::before {
            width: 300px;
            height: 300px;
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .button:active {
            transform: scale(0.95);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Number Buttons */
        .button.number {
            background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
            font-weight: 700;
            font-size: 22px;
        }

        .button.number:hover {
            background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        }

        /* Operator Buttons */
        .button.operator {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: white;
            font-size: 24px;
        }

        .button.operator:hover {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        /* Function Buttons */
        .button.function {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            color: white;
            font-size: 16px;
        }

        .button.function:hover {
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        }

        /* Special Buttons */
        .button.clear {
            background: linear-gradient(135deg, #f87171 0%, #ef4444 100%);
            color: white;
            font-weight: 700;
        }

        .button.clear:hover {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        .button.equals {
            background: linear-gradient(135deg, #34d399 0%, #10b981 100%);
            color: white;
            font-size: 28px;
        }

        .button.equals:hover {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }

        /* Constant Buttons */
        .button.constant {
            background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 100%);
            color: white;
            font-weight: 600;
        }

        .button.constant:hover {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        /* Responsive Design */
        @media (max-width: 500px) {
            body {
                padding: 15px;
            }

            .calculator {
                padding: 20px;
                border-radius: 25px;
            }

            .display {
                padding: 20px 15px;
                min-height: 90px;
            }

            .expression {
                font-size: 16px;
            }

            .result {
                font-size: 30px;
            }

            .button {
                padding: 16px;
                font-size: 16px;
                border-radius: 12px;
            }

            .button.number {
                font-size: 20px;
            }

            .button.operator {
                font-size: 22px;
            }

            .button.function {
                font-size: 14px;
            }

            .button.equals {
                font-size: 24px;
            }

            .buttons {
                gap: 10px;
            }
        }

        @media (max-width: 380px) {
            .button {
                padding: 14px;
                font-size: 14px;
            }

            .button.number {
                font-size: 18px;
            }

            .button.function {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="{{ url('/') }}" class="home-btn">Home</a>
        <a href="https://www.youtube.com/@mathspissa" target="_blank" class="youtube-icon">
            <i class="fab fa-youtube"></i>
        </a>
    </div>

    <div class="calculator-container">
        <div class="calculator">
            <div class="display">
                <div class="expression" id="expression"></div>
                <div class="result" id="result">0</div>
            </div>
            <div class="buttons">
                <button class="button clear" data-action="clear">AC</button>
                <button class="button clear" data-action="delete">DEL</button>
                <button class="button function" data-value="%">%</button>
                <button class="button operator" data-value="/">÷</button>
                
                <button class="button function" data-value="sin">sin</button>
                <button class="button function" data-value="cos">cos</button>
                <button class="button function" data-value="tan">tan</button>
                <button class="button operator" data-value="*">×</button>
                
                <button class="button number" data-value="7">7</button>
                <button class="button number" data-value="8">8</button>
                <button class="button number" data-value="9">9</button>
                <button class="button operator" data-value="-">−</button>
                
                <button class="button number" data-value="4">4</button>
                <button class="button number" data-value="5">5</button>
                <button class="button number" data-value="6">6</button>
                <button class="button operator" data-value="+">+</button>
                
                <button class="button number" data-value="1">1</button>
                <button class="button number" data-value="2">2</button>
                <button class="button number" data-value="3">3</button>
                <button class="button function" data-value="(">(</button>
                
                <button class="button number" data-value=".">.</button>
                <button class="button number" data-value="0">0</button>
                <button class="button constant" data-value="π">π</button>
                <button class="button function" data-value=")">)</button>
                
                
                <button class="button function" data-value="square">x²</button>
                <button class="button function" data-value="log">log</button>
                <button class="button constant" data-value="22/7">22/7</button>
                <button class="button equals" data-action="equals">=</button>
            </div>
        </div>
    </div>

    <script>
        class ScientificCalculator {
            constructor() {
                this.expression = '';
                this.result = '0';
                this.expressionElement = document.getElementById('expression');
                this.resultElement = document.getElementById('result');
                this.buttons = document.querySelectorAll('.button');
                
                this.init();
            }

            init() {
                this.buttons.forEach(button => {
                    button.addEventListener('click', (e) => this.handleButtonClick(e));
                });

                document.addEventListener('keydown', (e) => this.handleKeyPress(e));
            }

            handleButtonClick(e) {
                const button = e.currentTarget;
                const value = button.dataset.value;
                const action = button.dataset.action;

                if (action === 'clear') {
                    this.clear();
                } else if (action === 'delete') {
                    this.delete();
                } else if (action === 'equals') {
                    this.calculate();
                } else if (value) {
                    this.appendValue(value);
                }
            }

            handleKeyPress(e) {
                e.preventDefault();
                
                const key = e.key;

                if (key >= '0' && key <= '9') {
                    this.appendValue(key);
                } else if (key === '.') {
                    this.appendValue('.');
                } else if (key === '+' || key === '-' || key === '*' || key === '/') {
                    this.appendValue(key);
                } else if (key === '(' || key === ')') {
                    this.appendValue(key);
                } else if (key === 'Enter' || key === '=') {
                    this.calculate();
                } else if (key === 'Backspace') {
                    this.delete();
                } else if (key === 'Escape') {
                    this.clear();
                }
            }

            appendValue(value) {
                if (value === 'π') {
                    this.expression += Math.PI.toString();
                } else if (value === '22/7') {
                    this.expression += (22 / 7).toString();
                } else if (value === 'sin' || value === 'cos' || value === 'tan' || 
                           value === 'sqrt' || value === 'log' || value === 'ln') {
                    this.expression += value + '(';
                } else if (value === 'square') {
                    this.expression += '^2';
                } else if (value === '%') {
                    this.expression += '/100';
                } else {
                    this.expression += value;
                }

                this.updateDisplay();
            }

            clear() {
                this.expression = '';
                this.result = '0';
                this.updateDisplay();
            }

            delete() {
                this.expression = this.expression.slice(0, -1);
                this.updateDisplay();
            }

            calculate() {
                try {
                    let expr = this.expression;

                    // Replace functions
                    expr = expr.replace(/sin\(/g, 'Math.sin(');
                    expr = expr.replace(/cos\(/g, 'Math.cos(');
                    expr = expr.replace(/tan\(/g, 'Math.tan(');
                    expr = expr.replace(/sqrt\(/g, 'Math.sqrt(');
                    expr = expr.replace(/log\(/g, 'Math.log10(');
                    expr = expr.replace(/ln\(/g, 'Math.log(');
                    expr = expr.replace(/\^2/g, '**2');

                    // Evaluate
                    const result = eval(expr);

                    if (isNaN(result) || !isFinite(result)) {
                        this.result = 'Error';
                    } else {
                        // Round to 10 decimal places
                        this.result = Math.round(result * 10000000000) / 10000000000;
                    }

                    this.resultElement.classList.add('pop');
                    setTimeout(() => {
                        this.resultElement.classList.remove('pop');
                    }, 400);

                } catch (error) {
                    this.result = 'Error';
                }

                this.updateDisplay();
            }

            updateDisplay() {
                this.expressionElement.textContent = this.expression || '';
                this.resultElement.textContent = this.result;
            }
        }

        // Initialize calculator
        const calculator = new ScientificCalculator();
    </script>
</body>
</html>