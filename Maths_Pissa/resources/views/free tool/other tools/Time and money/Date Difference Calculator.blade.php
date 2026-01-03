<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>දින වෙනස ගණනය | Date Difference Calculator | Maths Pissa</title>
    <link href="https://fonts.css.lk/noto-sans-sinhala/latest.css">
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
            --button-primary: #00BCD4;         /* තද සයන් */
            --button-hover: #0097A7;
            --result-bg: #e0f7fa;              /* ඉතා ලා සයන් */
            --accent-cyan: #00ACC1;            /* සයන් */
            --light-cyan-border: #b2ebf2;      /* ලා සයන් මායිම */
            --dark-gray: #424242;
            --step-color: #00838F;             /* තද නිල්-කොළ */
            --step-bg: #e0f7fa;                /* ඉතා ලා සයන් */
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
            border-left: 6px solid var(--accent-cyan);
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

        .date-input-group {
            display: flex;
            gap: 20px;
            width: 100%;
            max-width: 650px;
            justify-content: center;
        }

        .input-group {
            flex: 1;
            text-align: left;
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            border: 1px solid var(--accent-cyan);
        }
        .input-group label {
            display: block;
            font-size: 1.1em;
            font-weight: 600;
            color: var(--step-color);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .input-group input[type="date"] {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--primary-gradient-end);
            border-radius: 8px;
            font-size: 1.1em;
            color: var(--text-dark);
            background-color: var(--card-bg);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            box-sizing: border-box;
            cursor: pointer;
        }
        .input-group input[type="date"]:focus {
            border-color: var(--button-primary);
            box-shadow: 0 0 0 4px rgba(0, 188, 212, 0.2);
            outline: none;
        }
        
        .calculate-button {
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

        .calculate-button:hover {
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
            border: 1px solid var(--light-cyan-border);
            display: none; /* මුලින් සඟවා තබයි */
        }

        .result-section h2 {
            color: var(--primary-gradient-end);
            font-size: 2em;
            margin-bottom: 25px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .result-section h2 i {
            color: var(--accent-cyan);
        }

        .result-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .result-item {
            background-color: var(--card-bg);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            border-left: 5px solid var(--accent-cyan);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }
        .result-item:hover {
            transform: translateY(-5px);
        }

        .result-item h3 {
            color: var(--primary-gradient-end);
            font-size: 1.4em;
            margin-top: 0;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .result-item h3 i {
            color: var(--step-color);
        }

        .result-item p {
            font-size: 1.8em;
            font-weight: 700;
            color: var(--dark-gray);
            margin: 0;
        }

        .result-item.total-days {
            grid-column: 1 / -1;
            background-color: var(--step-bg);
            border: 2px solid var(--accent-cyan);
        }
        .result-item.total-days h3 {
            color: var(--step-color);
            font-size: 1.6em;
        }

        .explanation-section h3 {
            color: var(--accent-cyan);
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 15px;
            text-align: center;
        }

        .explanation-steps-text {
            background-color: var(--section-bg-light);
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            text-align: left;
        }

        .explanation-steps-text p {
            font-size: 1.05em;
            margin-bottom: 10px;
            line-height: 1.6;
            color: var(--text-dark);
        }
        
        .explanation-steps-text strong {
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
            .date-input-group {
                flex-direction: column;
                gap: 15px;
            }
            .calculate-button {
                font-size: 1.1em;
                padding: 10px 20px;
                width: 100%;
            }
            .result-section h2 {
                font-size: 1.6em;
            }
            .result-grid {
                grid-template-columns: 1fr;
            }
            .result-item h3 {
                font-size: 1.2em;
            }
            .result-item p {
                font-size: 1.4em;
            }
            .result-item.total-days h3 {
                font-size: 1.4em;
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
            .result-section h2 {
                font-size: 1.4em;
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
            <h1>දින වෙනස ගණනය (Date Difference) 📅</h1>
            <p class="description">ආරම්භක දිනයක් සහ අවසාන දිනයක් අතර ඇති මුළු දින ගණන, වසර, මාස සහ දින ගණන පහසුවෙන් සොයා බලන්න. (උදා: ව්‍යාපෘති කාලය, නිවාඩු කාලය ගණනය කිරීමට)</p>
            
            <div class="input-section">
                <div class="date-input-group">
                    <div class="input-group">
                        <label for="startDate"><i class="fas fa-calendar-day"></i> ආරම්භක දිනය (Start Date):</label>
                        <input type="date" id="startDate" required>
                    </div>
                    <div class="input-group">
                        <label for="endDate"><i class="fas fa-calendar-check"></i> අවසාන දිනය (End Date):</label>
                        <input type="date" id="endDate" required>
                    </div>
                </div>
            </div>
            
            <button id="calculateBtn" class="calculate-button"><i class="fas fa-clock"></i> දින වෙනස ගණනය කරන්න</button>

            <div id="errorMessage" class="error-message">
                කරුණාකර ආරම්භක සහ අවසාන දින දෙකම ඇතුළත් කරන්න. ආරම්භක දිනය අවසාන දිනයට පෙර විය යුතුය.
            </div>

            <div id="resultSection" class="result-section">
                <h2>ගණනය කළ ප්‍රතිඵල <i class="fas fa-hourglass-half"></i></h2>

                <div class="result-grid">
                    <div class="result-item">
                        <h3><i class="fas fa-calendar-alt"></i> වසර (Years)</h3>
                        <p id="yearsResult">0</p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-calendar"></i> මාස (Months)</h3>
                        <p id="monthsResult">0</p>
                    </div>
                    <div class="result-item">
                        <h3><i class="fas fa-sun"></i> දින (Days)</h3>
                        <p id="daysResult">0</p>
                    </div>
                    <div class="result-item total-days">
                        <h3><i class="fas fa-list-ol"></i> මුළු දින ගණන (Total Days)</h3>
                        <p id="totalDaysResult">0</p>
                    </div>
                </div>
                
                <div class="explanation-section">
                    <h3>දින වෙනස ගණනය කිරීමේ වැදගත්කම</h3>
                    <div id="explanationStepsText" class="explanation-steps-text">
                        <p><strong>සංකල්පය:</strong> දින වෙනස ගණනය කිරීමේදී, දින දෙකක් අතර ඇති කාල සීමාව නිවැරදිව තීරණය කිරීමට, <strong>කැලැන්ඩරයේ සියලු විචල්‍යයන්</strong> (දින 365/366, මාසවල දින ගණන) සලකා බැලීම අත්‍යවශ්‍ය වේ.</p>
                        <p>1. <strong>මුළු දින ගණන (Total Days):</strong><br>
                        මෙම ගණනය සඳහා වඩාත් නිවැරදි ක්‍රමය වන්නේ දින දෙකම මිලි තත්පර (Milliseconds) බවට පරිවර්තනය කර, ඒවායේ වෙනස ගෙන, එම වෙනස එක් දිනක මිලි තත්පර (<code>1000 * 60 * 60 * 24 = 86,400,000</code>) ගණනින් බෙදීමයි. මේ ආකාරයට, කාල කලාප (Time Zones) සහ දිවා ආලෝකය ඉතිරි කිරීමේ වේලාව (Daylight Saving Time) වැනි ගැටලු මඟ හැරේ.</p>
                        <p>2. <strong>වසර, මාස, දින (Years, Months, Days):</strong><br>
                        මෙම ගණනය වඩාත් <strong>මිනිස් කියවීමට පහසු</strong> (Human-Readable) ආකෘතියක් ලබා දෙයි. මෙහිදී, වසරින් වසර, මාසයෙන් මාසයට සහ දිනෙන් දිනට වෙනස ගණනය කරන අතර, දින ගණන සෘණ වූ විට, එය පෙර මාසයෙන් දින "ඉල්ලා ගැනීම" (Borrowing) වැනි සංකල්ප භාවිතා කරයි.</p>
                        <p><strong>උපයෝගීතාව:</strong> විභාග සඳහා සූදානම් වීමේදී ඉතිරි කාලය ගණනය කිරීමට, ව්‍යාපෘති කළමනාකරණයේදී කාලරාමු නිර්ණය කිරීමට, සහ පරිගණක විද්‍යාවේදී (IT) දින-වේලා (Date-Time) හැසිරවීමේ සංකල්ප අවබෝධ කර ගැනීමට මෙම ගණක යන්ත්‍රය වැදගත් වේ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');
        const calculateBtn = document.getElementById('calculateBtn');
        const errorMessage = document.getElementById('errorMessage');
        const resultSection = document.getElementById('resultSection');
        const yearsResult = document.getElementById('yearsResult');
        const monthsResult = document.getElementById('monthsResult');
        const daysResult = document.getElementById('daysResult');
        const totalDaysResult = document.getElementById('totalDaysResult');

        calculateBtn.addEventListener('click', calculateDateDifference);

        // Utility function to get the number of days between two dates in UTC for accuracy
        const MS_PER_DAY = 1000 * 60 * 60 * 24;
        function dateDiffInDays(d1, d2) {
            // Discard the time and time-zone information by converting to UTC
            const utc1 = Date.UTC(d1.getFullYear(), d1.getMonth(), d1.getDate());
            const utc2 = Date.UTC(d2.getFullYear(), d2.getMonth(), d2.getDate());

            // Calculate the difference in days
            return Math.floor((utc2 - utc1) / MS_PER_DAY);
        }

        // Utility function to get the human-readable difference (Years, Months, Days)
        function dateDiffYMD(d1, d2) {
            let year1 = d1.getFullYear();
            let month1 = d1.getMonth();
            let day1 = d1.getDate();

            let year2 = d2.getFullYear();
            let month2 = d2.getMonth();
            let day2 = d2.getDate();

            let years_diff = year2 - year1;
            let months_diff = month2 - month1;
            let days_diff = day2 - day1;

            if (days_diff < 0) {
                // Borrow from month
                months_diff--;
                // Get days in the previous month (month2 is the current month, month2-1 is the previous)
                let daysInPreviousMonth = new Date(year2, month2, 0).getDate();
                days_diff += daysInPreviousMonth;
            }

            if (months_diff < 0) {
                // Borrow from year
                years_diff--;
                months_diff += 12;
            }
            
            // Safety check for negative values (shouldn't happen if d2 >= d1)
            if (years_diff < 0 || months_diff < 0 || days_diff < 0) {
                 return { years: 0, months: 0, days: 0 };
            }

            return {
                years: years_diff,
                months: months_diff,
                days: days_diff
            };
        }


        function calculateDateDifference() {
            errorMessage.style.display = 'none';
            resultSection.style.display = 'none';

            const startValue = startDateInput.value;
            const endValue = endDateInput.value;

            if (!startValue || !endValue) {
                errorMessage.textContent = "කරුණාකර ආරම්භක සහ අවසාන දින දෙකම ඇතුළත් කරන්න.";
                errorMessage.style.display = 'block';
                return;
            }

            const startDate = new Date(startValue);
            const endDate = new Date(endValue);

            if (startDate > endDate) {
                errorMessage.textContent = "ආරම්භක දිනය අවසාන දිනයට වඩා පසු දිනයක් විය නොහැක.";
                errorMessage.style.display = 'block';
                return;
            }

            // 1. Calculate Total Days (Accurate)
            const totalDays = dateDiffInDays(startDate, endDate);
            totalDaysResult.textContent = totalDays.toLocaleString('si-LK');

            // 2. Calculate Years, Months, Days (Human-Readable)
            const ymdDiff = dateDiffYMD(startDate, endDate);

            yearsResult.textContent = ymdDiff.years.toLocaleString('si-LK');
            monthsResult.textContent = ymdDiff.months.toLocaleString('si-LK');
            daysResult.textContent = ymdDiff.days.toLocaleString('si-LK');

            resultSection.style.display = 'block';
        }
    </script>

</body>
</html>