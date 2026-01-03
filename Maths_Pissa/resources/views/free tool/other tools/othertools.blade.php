<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>සියලු මෙවලම් | All Tools - Maths Pissa</title>
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
            --section-bg-light: #f8faff; /* ලා පසුබිම */

            /* Tool Card Colors (Psychological: Variety & Engagement) */
            --tool-color-1: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); /* Gold/Orange */
            --tool-color-2: linear-gradient(135deg, #7FFF00 0%, #32CD32 100%); /* Chartreuse/Lime */
            --tool-color-3: linear-gradient(135deg, #00BFFF 0%, #1E90FF 100%); /* Deep Sky Blue */
            --tool-color-4: linear-gradient(135deg, #FF6347 0%, #FF4500 100%); /* Tomato/Orange Red */
            --tool-color-5: linear-gradient(135deg, #BA55D3 0%, #9932CC 100%); /* Medium Orchid/Dark Orchid */
            --tool-color-6: linear-gradient(135deg, #FFC0CB 0%, #FF69B4 100%); /* Pink */
            --tool-color-7: linear-gradient(135deg, #40E0D0 0%, #00CED1 100%); /* Turquoise/Dark Turquoise */
            --tool-color-8: linear-gradient(135deg, #FF8C00 0%, #FF7F50 100%); /* Dark Orange/Coral */
            --tool-color-9: linear-gradient(135deg, #87CEEB 0%, #4682B4 100%); /* Sky Blue/Steel Blue */
            --tool-color-10: linear-gradient(135deg, #ADFF2F 0%, #7CFC00 100%); /* Green Yellow */
            --tool-color-11: linear-gradient(135deg, #FFD700 0%, #FFA500 100%); /* Gold/Orange */
            --tool-color-12: linear-gradient(135deg, #7FFF00 0%, #32CD32 100%); /* Chartreuse/Lime */
            --tool-color-13: linear-gradient(135deg, #00BFFF 0%, #1E90FF 100%); /* Deep Sky Blue */
            --tool-color-14: linear-gradient(135deg, #FF6347 0%, #FF4500 100%); /* Tomato/Orange Red */
            --tool-color-15: linear-gradient(135deg, #BA55D3 0%, #9932CC 100%); /* Medium Orchid/Dark Orchid */
            --tool-color-16: linear-gradient(135deg, #FFC0CB 0%, #FF69B4 100%); /* Pink */
            --tool-color-17: linear-gradient(135deg, #40E0D0 0%, #00CED1 100%); /* Turquoise/Dark Turquoise */
            --tool-color-18: linear-gradient(135deg, #FF8C00 0%, #FF7F50 100%); /* Dark Orange/Coral */
            --tool-color-19: linear-gradient(135deg, #87CEEB 0%, #4682B4 100%); /* Sky Blue/Steel Blue */
            --tool-color-20: linear-gradient(135deg, #ADFF2F 0%, #7CFC00 100%); /* Green Yellow */
        }

        body {
            font-family: 'Noto Sans Sinhala', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--primary-gradient-start) 0%, var(--primary-gradient-end) 100%);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Top Navigation Bar */
        .top-navbar {
            background-color: var(--header-bg);
            padding: 15px 30px;
            display: flex;
            justify-content: flex-end; /* බොත්තම් දකුණු කෙළවරට */
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-btn {
            background-color: rgba(255, 255, 255, 0.2);
            color: var(--text-light);
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            margin-left: 15px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn:hover {
            background-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        /* Main Content - All Tools */
        .main-content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            text-align: center;
        }

        .page-title {
            color: var(--text-light);
            font-size: 3em;
            margin-bottom: 50px;
            font-weight: 700;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
            animation: slideInUp 0.8s ease-out; /* Page load animation */
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            justify-content: center;
            align-items: stretch; /* Cards වල උස සමාන කිරීමට */
        }

        /* Tool Card Styling */
        .tool-card {
            background-color: var(--card-bg);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            text-decoration: none;
            color: var(--text-dark);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .tool-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }
        
        /* Each tool card gets a unique color for engagement */
        .tool-card:nth-child(1) { background: var(--tool-color-1); color: var(--text-light); }
        .tool-card:nth-child(2) { background: var(--tool-color-2); color: var(--text-light); }
        .tool-card:nth-child(3) { background: var(--tool-color-3); color: var(--text-light); }
        .tool-card:nth-child(4) { background: var(--tool-color-4); color: var(--text-light); }
        .tool-card:nth-child(5) { background: var(--tool-color-5); color: var(--text-light); }
        .tool-card:nth-child(6) { background: var(--tool-color-6); color: var(--text-dark); } /* Pink may need dark text */
        .tool-card:nth-child(7) { background: var(--tool-color-7); color: var(--text-light); }
        .tool-card:nth-child(8) { background: var(--tool-color-8); color: var(--text-light); }
        .tool-card:nth-child(9) { background: var(--tool-color-9); color: var(--text-light); }
        .tool-card:nth-child(10) { background: var(--tool-color-10); color: var(--text-dark); } /* Green-yellow may need dark text */
        .tool-card:nth-child(11) { background: var(--tool-color-11); color: var(--text-light); }
        .tool-card:nth-child(12) { background: var(--tool-color-12); color: var(--text-light); }
        .tool-card:nth-child(13) { background: var(--tool-color-13); color: var(--text-light); }
        .tool-card:nth-child(14) { background: var(--tool-color-14); color: var(--text-light); }
        .tool-card:nth-child(15) { background: var(--tool-color-15); color: var(--text-light); }
        .tool-card:nth-child(16) { background: var(--tool-color-16); color: var(--text-dark); } /* Pink may need dark text */
        .tool-card:nth-child(17) { background: var(--tool-color-17); color: var(--text-light); }
        .tool-card:nth-child(18) { background: var(--tool-color-18); color: var(--text-light); }
        .tool-card:nth-child(19) { background: var(--tool-color-19); color: var(--text-light); }
        .tool-card:nth-child(20) { background: var(--tool-color-20); color: var(--text-dark); }


        .tool-card i {
            font-size: 3.5em; /* Icon size */
            margin-bottom: 20px;
            opacity: 0.85;
            transition: transform 0.3s ease;
        }
        
        .tool-card:hover i {
            transform: scale(1.1); /* Icon hover effect */
        }

        .tool-card h3 {
            font-size: 1.5em;
            margin: 0 0 10px 0;
            font-weight: 700;
            color: inherit; /* Card background එකට අනුව වර්ණය වෙනස් වේ */
        }

        .tool-card p {
            font-size: 1em;
            margin: 0;
            opacity: 0.9;
            color: inherit; /* Card background එකට අනුව වර්ණය වෙනස් වේ */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2.5em;
                margin-bottom: 30px;
            }
            .tools-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
            .tool-card {
                padding: 25px;
            }
            .tool-card i {
                font-size: 3em;
            }
            .tool-card h3 {
                font-size: 1.3em;
            }
        }

        @media (max-width: 480px) {
            .top-navbar {
                justify-content: center;
                gap: 10px;
            }
            .nav-btn {
                padding: 8px 15px;
                font-size: 0.9em;
                margin-left: 10px;
            }
            .page-title {
                font-size: 2em;
            }
            .tools-grid {
                grid-template-columns: 1fr;
            }
        }

    </style>
</head>
<body>

    <header class="top-navbar">
        <a href="{{ url('/') }}" class="nav-btn">
            <i class="fas fa-home"></i> Home
        </a>
        <a href="https://www.youtube.com/@mathspissa" target="_blank" class="nav-btn">
            <i class="fab fa-youtube"></i> YouTube
        </a>
    </header>

    <div class="main-content">
        <h1 class="page-title">සියලු මෙවලම්</h1> {{-- ප්‍රධාන Title එක --}}
        
        <div class="tools-grid">
            {{-- Tool Card 1--}}
            <a href="{{ url('/calculator') }}" class="tool-card">
                <i class="fas fa-calculator"></i>
                <h3>කැල්කියුරේටරය</h3>
                <p>Calculator for O/L student</p>
            </a>

            {{-- Tool Card 2--}}
            <a href="{{ url('/Data Analysis Mean Median Mode') }}" class="tool-card">
                <i class="fas fa-database"></i>
                <h3>මාතය, මධ්‍යස්ථය, මධ්‍යන්‍යය</h3>
                <p>Data Analysis, Mean, Median, Mode</p>
            </a>

            {{-- Tool Card 3--}}
            <a href="{{ url('/LCM & HCF Calculator') }}" class="tool-card">
                <i class="fas fa-hashtag"></i>
                <h3>කු.පො.ගු. / ම.පො.ස.</h3>
                <p>Factor Finder (LCM & HCF)</p>
            </a>

            {{-- Tool Card 4--}}
            <a href="{{ url('/Fraction Simplifier') }}" class="tool-card">
                <i class="fas fa-divide"></i>
                <h3>භාග සරලකාරකය</h3>
                <p>Fraction Simplifier</p>
            </a>

            {{-- Tool Card 5--}}
            <a href="{{ url('/Decimal Fraction Percent Converter') }}" class="tool-card">
                <i class="fas fa-percent"></i>
                <h3>දශම, භාග, ප්‍රතිශත</h3>
                <p>Decimal Fraction Percent</p>
            </a>
        
            {{-- Tool Card 6--}}
            <a href="{{ url('/Area and Volume Calculator') }}" class="tool-card">
                <i class="fas fa-cube"></i>
                <h3>වර්ගඵලය සහ පරිමාව</h3>
                <p>Area and Volume Calculator</p>
            </a>
            
            {{-- Tool Card 7--}}
            <a href="{{ url('/Math Puzzle Generator') }}" class="tool-card">
            <i class="fas fa-question"></i>
                <h3>ප්‍රහේලිකා උත්පාදකය</h3>
                <p>Math Puzzle Generator</p>
            </a>
            
            {{-- Tool Card 8--}}
            <a href="{{ url('/chatbot') }}" class="tool-card">
                <i class="fas fa-chart-bar"></i>
                <h3>AI Chatbot</h3>
                <p>Chat with Your AI teacher</p>
            </a>
            
            {{-- Tool Card 9--}}
            <a href="{{ url('/index') }}" class="tool-card">
                <i class="fas fa-superscript"></i>
                <h3>දර්ශක ගණකය</h3>
                <p>Exponent Calculator</p>
            </a>
            
            {{-- Tool Card 10--}}
            <a href="{{ url('/Multiplication_Table') }}" class="tool-card">
                <i class="fas fa-times"></i>
                <h3>ගුණ කිරීමේ වගුව</h3>
                <p>Multiplication Table</p>
            </a>

            
            {{-- Tool Card 11--}}
            <a href="{{ url('/Date Difference Calculator') }}" class="tool-card">
                <i class="fas fa-calendar-days"></i>
                <h3>දින වෙනස ගණනය</h3>
                <p>Date Difference calculator</p>
            </a>
            
            {{-- Tool Card 12--}}
            <a href="{{ url('/Fraction Calculator') }}" class="tool-card">
                <i class="fas fa-divide"></i>
                <h3>භාග කැල්කියුලේටරය</h3>
                <p>Fraction Calculator</p>
            </a>

            {{-- Tool Card 13--}}
            <a href="{{ url('/Number Base Converter Dec Bin Oct Hex') }}" class="tool-card">
                <i class="fas fa-mobile-button"></i>
                <h3>සංඛ්‍යා පද්ධති පරිවර්තකය</h3>
                <p>Decimal, Hexadecimal, Binary, octal</p>
            </a>
            
            {{-- Tool Card 14--}}
            <a href="{{ url('/Logarithm Calculator Base 10 & Natural') }}" class="tool-card">
                <i class="fas fa-infinity"></i>
                <h3>ලඝුගණක ගණනය</h3>
                <p>Logarithm Calculator</p>
            </a>

            {{-- Tool Card 15--}}
            <a href="{{ url('/Arithmetic and Geometric Sequences and Series Calculator') }}" class="tool-card">
                <i class="fas fa-wave-square"></i>
                <h3>ශ්‍රේණි හා අනුක්‍රම</h3>
                <p>Sequences and Series Calculator</p>
            </a>
            
            {{-- Tool Card 16 --}}
            <a href="{{ url('/Measurement Converter') }}" class="tool-card">
                <i class="fas fa-weight-scale"></i>
                <h3>මිණුම් පරිවර්තකය</h3>
                <p>Measurement Converter</p>
            </a>

            {{-- Tool Card 17 --}}
            <a href="{{ url('/prime factorization') }}" class="tool-card">
                <i class="fas fa-3"></i>
                <h3>ප්‍රාථමික සාධක සොයනය </h3>
                <p>prime factorization</p>
            </a>
            
            {{-- Tool Card 18 --}}
            <a href="{{ url('/Math Problem Solver Basic Equations') }}" class="tool-card">
                <i class="fas fa-triangle-exclamation"></i>
                <h3>සමීකරණ විසඳන යන්ත්‍රය</h3>
                <p>Math Problem Solver Basic Equations</p>
            </a>
        </div>
    </div>

</body>
</html>