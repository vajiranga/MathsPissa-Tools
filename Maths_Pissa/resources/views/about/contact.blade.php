<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>අප හා සම්බන්ධ වන්න | Contact Us - Maths Pissa</title>
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
            --accent-green: #28a745;           /* සාර්ථකත්වය/ක්‍රියාව සඳහා කොළ */
            --form-border: #ced4da;
            --form-focus-border: #80bdff;
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

        /* Hero Section */
        .contact-hero {
            text-align: center;
            padding: 60px 20px;
            color: var(--text-light);
            background: rgba(0,0,0,0.2); /* Gradient එක මත විනිවිද පෙනෙන ස්තරයක් */
            margin-bottom: 40px;
            animation: fadeInDown 0.8s ease-out;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .contact-hero h1 {
            font-size: 3.5em;
            margin-bottom: 15px;
            font-weight: 700;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        }

        .contact-hero p {
            font-size: 1.3em;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Main Content Container */
        .main-content {
            max-width: 900px;
            margin: 0 auto 50px auto;
            padding: 0 20px;
        }

        /* Contact Section Block */
        .contact-block {
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

        .contact-block h2 {
            color: var(--header-bg);
            font-size: 2.2em;
            margin-top: 0;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--accent-green);
            padding-bottom: 10px;
            text-align: center;
        }

        /* Contact Methods (Email) */
        .contact-methods {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .method-card {
            background-color: var(--section-bg-light);
            padding: 25px;
            border-radius: 10px;
            flex: 1;
            min-width: 250px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e0e0e0;
        }

        .method-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .method-card i {
            font-size: 2.5em;
            color: var(--primary-gradient-end);
            margin-bottom: 15px;
        }

        .method-card h3 {
            font-size: 1.4em;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .method-card a {
            color: var(--accent-blue);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .method-card a:hover {
            color: var(--primary-gradient-start);
            text-decoration: underline;
        }

        /* Contact Form */
        .contact-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-dark);
            text-align: left;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid var(--form-border);
            border-radius: 8px;
            font-family: 'Noto Sans Sinhala', sans-serif;
            font-size: 1em;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: var(--form-focus-border);
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.25);
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }

        .contact-form button {
            background: linear-gradient(90deg, var(--accent-green), #218838);
            color: var(--text-light);
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-form button:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        /* Social Media Links */
        .social-media-links {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .social-media-links h2 {
            color: var(--header-bg);
            font-size: 2em;
            margin-bottom: 30px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .social-icon-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--card-bg);
            color: var(--primary-gradient-end);
            font-size: 1.8em;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .social-icon-link:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            background-color: var(--primary-gradient-start);
            color: var(--text-light);
        }

        /* Specific Social Colors for hover (Optional, but nice touch) */
        .social-icon-link.facebook:hover { background-color: #3b5998; }
        .social-icon-link.twitter:hover { background-color: #00acee; }
        .social-icon-link.instagram:hover { background-color: #C13584; }
        .social-icon-link.whatsapp:hover { background-color: #25D366; }
        .social-icon-link.linkedin:hover { background-color: #0077B5; }
    
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5em;
            }
            .contact-hero p {
                font-size: 1.1em;
            }
            .contact-block h2 {
                font-size: 1.8em;
            }
            .contact-methods {
                flex-direction: column;
                gap: 20px;
            }
            .method-card {
                min-width: unset;
                width: 100%;
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
            .contact-hero h1 {
                font-size: 2em;
            }
            .main-content {
                padding: 0 15px;
            }
            .contact-block {
                padding: 25px;
            }
            .social-icons {
                gap: 15px;
            }
            .social-icon-link {
                width: 50px;
                height: 50px;
                font-size: 1.5em;
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

<div class="contact-hero">
    <h1>අප හා සම්බන්ධ වන්න</h1>
    <p>ඔබට කිසියම් ප්‍රශ්නයක්, අදහසක් හෝ යෝජනාවක් තිබේ නම්, අප හා සම්බන්ධ වීමට පසුබට නොවන්න. ඔබගේ ප්‍රතිචාර අපට ඉතා වටිනා අතර, අපගේ සේවාවන් තවදුරටත් වැඩිදියුණු කිරීමට එය උපකාරී වේ.</p>
</div>

<div class="main-content">
    <div class="contact-block">
        <h2>ඔබට අපව සම්බන්ධ කරගත හැකි ක්‍රම</h2>
        
        <div class="contact-methods">
            <div class="method-card">
                <i class="fas fa-envelope"></i>
                <h3>විද්‍යුත් තැපෑල</h3>
                <p>ඔබගේ විමසීම් අපගේ විද්‍යුත් තැපෑලට යොමු කරන්න.</p>
                {{-- 📧 ඔබේ Email ලිපිනය මෙහි යොදන්න --}}
                <a href="mailto:your_email@example.com">yvajiranga16@example.com</a>
            </div>
            
             <div class="method-card">
                <i class="fab fa-whatsapp"></i>
                <h3>ක්ෂණික පණිවිඩය</h3>
                <p>පෝරමය පුරවා WhatsApp හරහා අපට කෙලින්ම පණිවිඩයක් එවන්න.</p>
                <a href="https://wa.me/94754704699" target="_blank" style="color: var(--accent-green);">WhatsApp අංකය</a>
            </div>
        </div>

        <h2 style="margin-top: 50px;">WhatsApp හරහා පණිවිඩයක් එවන්න</h2>
        {{-- 💥 Form එකේ වෙනස්කම් මෙහි ඇත 💥 --}}
        <form id="whatsapp-form" class="contact-form">
            
            <label for="name">ඔබගේ නම:</label>
            <input type="text" id="name" name="name" required placeholder="ඔබගේ සම්පූර්ණ නම">

            {{-- 💥 මෙතන තමයි 'Email' වෙනුවට 'ඔබගේ ප්‍රදේශය' දැමිය යුත්තේ 💥 --}}
            <label for="region">ඔබගේ ප්‍රදේශය:</label>
            <input type="text" id="region" name="region" required placeholder="ඔබ පදිංචි ප්‍රදේශය">

            {{-- 💥 මෙතන තමයි 'විෂය' වෙනුවට 'ඔබගේ වසර' දැමිය යුත්තේ 💥 --}}
            <label for="year">ඔබගේ වසර:</label>
            <input type="text" id="year" name="year" placeholder="ඔබ ඉගෙන ගන්නා වසර">

            <label for="message">පණිවිඩය:</label>
            <textarea id="message" name="message" rows="6" required placeholder="ඔබගේ පණිවිඩය මෙහි ලියන්න..."></textarea>

            <button type="submit">පණිවිඩය WhatsApp හරහා එවන්න</button>
        </form>
    </div>
<!--
    <div class="social-media-links">
        <h2>සමාජ මාධ්‍ය ඔස්සේ අප හා එක්වන්න</h2>
        <div class="social-icons">
            <a href="https://www.facebook.com/your_mathspissa_page" target="_blank" class="social-icon-link facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/your_mathspissa_handle" target="_blank" class="social-icon-link twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/your_mathspissa_profile" target="_blank" class="social-icon-link instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/9477XXXXXXX" target="_blank" class="social-icon-link whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/your_profile" target="_blank" class="social-icon-link linkedin"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
    -->
</div>

{{-- 💥 WHATSAPP SENDING SCRIPT 💥 --}}
<script>
    document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
        e.preventDefault(); 

        const phoneNumber = '94754704699'; // 🎯 ඔබේ WhatsApp අංකය මෙහි යොදන්න

        // Get Form Data - 💥 මෙතන තමයි ප්‍රධාන වෙනස්කම් 💥
        const name = document.getElementById('name').value;
        const region = document.getElementById('region').value; // 'email' වෙනුවට 'region'
        const year = document.getElementById('year').value;     // 'subject' වෙනුවට 'year'
        const message = document.getElementById('message').value;

        // Message Content Construction
        let whatsappMessage = `*Maths Pissa වෙබ් අඩවියෙන් නව පණිවිඩයක්*\n\n`;
        whatsappMessage += ` *නම:* ${name}\n`;
        whatsappMessage += ` *ප්‍රදේශය:* ${region}\n`; // 'Email' වෙනුවට 'ප්‍රදේශය'
        whatsappMessage += ` *වසර:* ${year}\n\n`;       // 'විෂය' වෙනුවට 'වසර'
        whatsappMessage += ` *පණිවිඩය:*\n${message}`;

        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappLink = `https://wa.me/${phoneNumber}?text=${encodedMessage}`;

        window.open(whatsappLink, '_blank');
    });
</script>

</body>
</html>