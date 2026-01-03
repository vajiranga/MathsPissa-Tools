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
            justify-content: flex-end;
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
        <h1 class="page-title">වෙනත් දේවල්</h1> {{-- ප්‍රධාන Title එක --}}
        
        <div class="tools-grid">
            <a href="{{ url('/donation details') }}" class="tool-card">
                <i class="fas fa-donate"></i>
                <h3>DONATE US!!!</h3>
            </a>

         <!--   {{-- Tool Card 2: වර්ගමූල ගණකය --}}
            <a href="{{ url('/tools/square-root-calculator') }}" class="tool-card">
                <i class="fas fa-square-root-alt"></i>
                <h3>වර්ගමූල ගණකය</h3>
                <p>Square Root Calculator</p>
            </a>

            {{-- Tool Card 3: සාධක සොයනය --}}
            <a href="{{ url('/tools/factor-finder') }}" class="tool-card">
                <i class="fas fa-hashtag"></i>
                <h3>සාධක සොයනය</h3>
                <p>Factor Finder (LCM & HCF)</p>
            </a>

            {{-- Tool Card 4: භාග සරලකාරකය --}}
            <a href="{{ url('/tools/fraction-simplifier') }}" class="tool-card">
                <i class="fas fa-divide"></i>
                <h3>භාග සරලකාරකය</h3>
                <p>Fraction Simplifier</p>
            </a>

            {{-- Tool Card 5: ප්‍රතිශත ගණකය --}}
            <a href="{{ url('/tools/percentage-calculator') }}" class="tool-card">
                <i class="fas fa-percent"></i>
                <h3>ප්‍රතිශත ගණකය</h3>
                <p>Percentage Calculator</p>
            </a>
            
            {{-- Tool Card 6: ප්‍රදේශය සහ පරිමාව --}}
            <a href="{{ url('/tools/area-volume-calculator') }}" class="tool-card">
                <i class="fas fa-cube"></i>
                <h3>ප්‍රදේශය සහ පරිමාව</h3>
                <p>Area and Volume Calculator</p>
            </a>
            
            {{-- Tool Card 7: පයිතගරස් ප්‍රමේය විසඳුම --}}
            <a href="{{ url('/tools/pythagoras-solver') }}" class="tool-card">
                <i class="fas fa-ruler-triangle"></i>
                <h3>පයිතගරස් ප්‍රමේය විසඳුම</h3>
                <p>Pythagoras Theorem Solver</p>
            </a>
            
            {{-- Tool Card 8: මධ්‍යන්‍ය, මධ්‍යස්ථ, බහුලත්වය --}}
            <a href="{{ url('/tools/mean-median-mode') }}" class="tool-card">
                <i class="fas fa-chart-bar"></i>
                <h3>සංඛ්‍යාන ගණකය</h3>
                <p>Mean, Median, Mode Calculator</p>
            </a>
            
            {{-- Tool Card 9: දර්ශක ගණකය --}}
            <a href="{{ url('/tools/index-calculator') }}" class="tool-card">
                <i class="fas fa-superscript"></i>
                <h3>දර්ශක ගණකය</h3>
                <p>Exponent Calculator</p>
            </a>
            
            {{-- Tool Card 10: ගුණ කිරීමේ වගුව --}}
            <a href="{{ url('/tools/multiplication-table') }}" class="tool-card">
                <i class="fas fa-times"></i>
                <h3>ගුණ කිරීමේ වගුව</h3>
                <p>Multiplication Table</p>
            </a> -->
        </div>
    </div>

</body>
</html>