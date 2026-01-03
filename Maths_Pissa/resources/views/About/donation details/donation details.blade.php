<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>අපට සහය වන්න | Donate Us - Maths Pissa</title>
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
            --accent-green: #28a745;           /* WhatsApp සඳහා කොළ */
            --copy-btn-bg: #e9ecef;            /* Copy බොත්තමේ පසුබිම */
            --copy-btn-hover: #dae0e5;         /* Copy බොත්තමේ hover වර්ණය */
            --qr-code-bg: #f0f2f5;
        }

        body {
            font-family: 'Noto Sans Sinhala', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, var(--primary-gradient-start) 0%, var(--primary-gradient-end) 100%);
            color: var(--text-dark);
            min-height: 100vh;
            overflow-x: hidden;
            display: flex; /* Footer button එක පහළට තැබීමට */
            flex-direction: column;
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

        /* Hero Section */
        .donate-hero {
            text-align: center;
            padding: 60px 20px 40px 20px;
            color: var(--text-light);
            background: rgba(0,0,0,0.2); /* Gradient එක මත විනිවිද පෙනෙන ස්තරයක් */
            margin-bottom: 40px;
            animation: fadeInDown 0.8s ease-out;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .donate-hero h1 {
            font-size: 3.5em;
            margin-bottom: 15px;
            font-weight: 700;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .donate-hero p {
            font-size: 1.3em;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Main Content Container */
        .main-content {
            max-width: 800px;
            margin: 0 auto 50px auto;
            padding: 0 20px;
            flex: 1; /* Page content එක ඉහළට තබා, footer button එක පහළට තල්ලු කිරීමට */
        }

        /* Donation Info Card */
        .donation-info-card {
            background-color: var(--card-bg);
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 40px;
            border-left: 6px solid var(--primary-gradient-end);
            animation: fadeInUp 0.8s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .donation-info-card h2 {
            color: var(--header-bg);
            font-size: 2.2em;
            margin-top: 0;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--accent-green);
            padding-bottom: 10px;
            text-align: center;
        }

        .bank-details {
            margin-bottom: 30px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 1.1em;
            color: var(--text-dark);
            background-color: var(--section-bg-light);
            padding: 12px 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .detail-label {
            font-weight: 600;
            color: var(--header-bg);
            min-width: 120px; /* Labels align කිරීමට */
        }

        .detail-value {
            flex-grow: 1;
            text-align: right;
            margin-right: 15px;
        }

        .copy-btn {
            background-color: var(--copy-btn-bg);
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
            color: var(--text-dark);
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .copy-btn:hover {
            background-color: var(--copy-btn-hover);
            transform: translateY(-1px);
        }

        .copy-btn i {
            margin-right: 5px;
        }

        .thank-you-message {
            text-align: center;
            font-size: 1.2em;
            color: var(--header-bg);
            margin-top: 40px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .thank-you-message i {
            color: #FFD700; /* රන්වන් වර්ණය */
            font-size: 1.5em;
        }

        /* QR Code Section (Optional) */
        .qr-code-section {
            text-align: center;
            margin-top: 50px;
            padding: 30px;
            background-color: var(--qr-code-bg);
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .qr-code-section h3 {
            color: var(--primary-gradient-end);
            font-size: 1.8em;
            margin-bottom: 25px;
        }

        .qr-code-section img {
            width: 200px;
            height: 200px;
            border: 5px solid var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        /* WhatsApp Footer Button */
        .whatsapp-footer-btn {
            background: linear-gradient(45deg, #25D366, #128C7E); /* WhatsApp Green Gradient */
            color: var(--text-light);
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: 600;
            position: fixed; /* පිටුවේ පහළින් තබා ගැනීමට */
            bottom: 30px;
            right: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            z-index: 1000; /* අනෙකුත් අංග මතට පැමිණීමට */
        }

        .whatsapp-footer-btn:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        /* ... (other responsive adjustments) ... */
        @media (max-width: 480px) {
            .whatsapp-send-proof-btn {
                padding: 10px 20px;
                font-size: 0.95em;
                gap: 8px;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .donate-hero h1 {
                font-size: 2.5em;
            }
            .donate-hero p {
                font-size: 1.1em;
            }
            .donation-info-card {
                padding: 25px;
            }
            .donation-info-card h2 {
                font-size: 1.8em;
            }
            .detail-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            .detail-value {
                text-align: left;
                margin-right: 0;
            }
            .whatsapp-footer-btn {
                bottom: 20px;
                right: 20px;
                padding: 12px 25px;
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .top-navbar {
                flex-direction: column;
                gap: 10px;
            }
            .nav-btn {
                padding: 8px 15px;
                font-size: 0.9em;
                margin-left: 10px;
            }
            .donate-hero h1 {
                font-size: 2em;
            }
            .main-content {
                padding: 0 15px;
            }
            .whatsapp-footer-btn {
                bottom: 15px;
                right: 15px;
                padding: 10px 20px;
                font-size: 0.9em;
                gap: 8px;
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

    <div class="donate-hero">
        <h1>අපට සහය වන්න 💖</h1>
        <p>ඔබගේ කුඩා හෝ විශාල දායකත්වය, Maths Pissa ව්‍යාපෘතිය ඉදිරියට ගෙන යාමට සහ නොමිලේ ගණිත අධ්‍යාපනය තව තවත් සිසුන් වෙත ලබා දීමට මහත් රුකුලක් වනු ඇත.</p>
    </div>

    <div class="main-content">
        <div class="donation-info-card">
            <h2>බැංකු ගිණුම් විස්තර</h2>
            <div class="bank-details">
                <div class="detail-item">
                    <span class="detail-label">ගිණුම් හිමියා:</span>
                    <span class="detail-value" id="account-holder">A. P. Y. V. Pathirana</span>
                    <button class="copy-btn" onclick="copyToClipboard('account-holder')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">ගිණුම් අංකය:</span>
                    <span class="detail-value" id="account-number">092200210009520</span> {{-- 💥 ඔබේ ගිණුම් අංකය මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('account-number')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">බැංකුව:</span>
                    <span class="detail-value" id="bank-name">Peoples Bank</span> {{-- 💥 ඔබේ බැංකු නාමය මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('bank-name')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">ශාඛාව:</span>
                    <span class="detail-value" id="bank-branch">Giriulla</span> {{-- 💥 ඔබේ බැංකු ශාඛාව මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('bank-branch')"><i class="fas fa-copy"></i> Copy</button>
                </div>
            </div>
            <div class="bank-details">
                {{-- ... (existing bank details) ... --}}
            </div>
            <p class="thank-you-message">ඔබගේ නොමසුරු දායකත්වයට ස්තූතියි! <i class="fas fa-star"></i></p>
        </div>

        <div class="donation-info-card">
            <h2>බැංකු ගිණුම් විස්තර</h2>
            <div class="bank-details">
                <div class="detail-item">
                    <span class="detail-label">ගිණුම් හිමියා:</span>
                    <span class="detail-value" id="account-holder">A. P. Y. V. Pathirana</span>
                    <button class="copy-btn" onclick="copyToClipboard('account-holder')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">ගිණුම් අංකය:</span>
                    <span class="detail-value" id="account-number">115511640522</span> {{-- 💥 ඔබේ ගිණුම් අංකය මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('account-number')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">බැංකුව:</span>
                    <span class="detail-value" id="bank-name">National Development Bank(NDB)</span> {{-- 💥 ඔබේ බැංකු නාමය මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('bank-name')"><i class="fas fa-copy"></i> Copy</button>
                </div>
                <div class="detail-item">
                    <span class="detail-label">ශාඛාව:</span>
                    <span class="detail-value" id="bank-branch">Giriulla</span> {{-- 💥 ඔබේ බැංකු ශාඛාව මෙහි යොදන්න 💥 --}}
                    <button class="copy-btn" onclick="copyToClipboard('bank-branch')"><i class="fas fa-copy"></i> Copy</button>
                </div>
            </div>
            <div class="bank-details">
                {{-- ... (existing bank details) ... --}}
            </div>
            <p class="thank-you-message">ඔබගේ නොමසුරු දායකත්වයට ස්තූතියි! <i class="fas fa-star"></i></p>
        </div>
            
            <div style="text-align: center; margin-top: 30px;">
                <a href="#" id="send-donation-proof-btn" class="whatsapp-footer-btn">
                    <i class="fab fa-whatsapp"></i> පරිත්‍යාගය තහවුරු කරන්න
                </a>
            </div>

        {{-- QR Code Section (Optional - අවශ්‍ය නම් පමණක් භාවිත කරන්න) --}}
        {{-- 💥 ඔබට QR Code එකක් තිබේ නම්, මෙහි ඇතුළත් කරන්න 💥 --}}
        {{-- <div class="qr-code-section">
            <h3>QR කේතය හරහා ගෙවන්න</h3>
            <img src="{{ url('/images/your_boc_qr_code.png') }}" alt="Bank of Ceylon QR Code">
            <p style="margin-top: 20px; font-size: 0.9em; color: #666;">ගෙවීම් පහසුව සඳහා QR කේතය Scan කරන්න.</p>
        </div> --}}
    </div>
    
<script>
    // 🎯 ඔබගේ WhatsApp අංකය මෙහි යොදන්න (රටේ කේතය සමග, '0' නැතුව)
    // උදා: 712345678 නම්, '94712345678' ලෙස යොදන්න.
    const YOUR_WHATSAPP_NUMBER = '94754704699'; 

    // Footer WhatsApp Button Link update කරන්න
    document.querySelector('.whatsapp-footer-btn').href = `https://wa.me/${YOUR_WHATSAPP_NUMBER}`;


    // ---- Copy to Clipboard Functionality ----
    function copyToClipboard(elementId) {
        const element = document.getElementById(elementId);
        const textToCopy = element.innerText || element.textContent;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    alert(`"${textToCopy}" පිටපත් කරන ලදී!`);
                })
                .catch(err => {
                    console.error('Copy කිරීමට අසමත් විය:', err);
                    fallbackCopyTextToClipboard(textToCopy);
                });
        } else {
            fallbackCopyTextToClipboard(textToCopy);
        }
    }

    // Fallback method for older browsers
    function fallbackCopyTextToClipboard(text) {
        const textArea = document.createElement("textarea");
        textArea.value = text;
        textArea.style.position = "fixed";
        textArea.style.left = "-9999px";
        textArea.style.top = "-9999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            document.execCommand('copy');
            alert(`"${text}" පිටපත් කරන ලදී! (Fallback)`);
        } catch (err) {
            console.error('Fallback: Copy කිරීමට අසමත් විය:', err);
            alert('පිටපත් කිරීමට අසමත් විය. කරුණාකර අතින් පිටපත් කරන්න.');
        }
        document.body.removeChild(textArea);
    }

    // ---- "පරිත්‍යාගය තහවුරු කරන්න" Button Functionality ----
    document.getElementById('send-donation-proof-btn').addEventListener('click', function(e) {
        e.preventDefault(); 

        // ඉහළින්ම සඳහන් කළ ඔබගේ WhatsApp අංකය මෙහි භාවිත වේ.
        const receiverPhoneNumber = YOUR_WHATSAPP_NUMBER; 

        const predefinedMessage = "මම Maths Pissa ව්‍යාපෘතියට පරිත්‍යාගයක් කළා. මෙය ඒ පිළිබඳ තහවුරු කිරීමක්.";

        const encodedMessage = encodeURIComponent(predefinedMessage);
        
        const whatsappLink = `https://wa.me/${receiverPhoneNumber}?text=${encodedMessage}`;

        window.open(whatsappLink, '_blank');
    });
</script>

</body>
</html>