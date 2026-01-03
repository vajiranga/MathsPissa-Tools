<!DOCTYPE html>
<html lang="si">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathspissa - Learn Maths with A P Y Vajiranga Pathirana</title>
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
            padding-bottom: 2rem;
        }

        header {
            background: #5A4A87;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
    	.header-logo {
   	        max-width: 100%;
 	        height: auto; 
   	        max-height: 100px;
    	    margin: 0 auto 0.5rem auto; 
 	        position: relative;
 	        z-index: 1;
}

        .brand-name {
            font-size: 3rem;
            font-weight: 900;
            color: #fff;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }

        .tagline {
            font-size: 1.2rem;
            color: #f0f0f0;
            margin-bottom: 1.5rem;
        }

        .nav-button {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-right: 1rem;
        }

        .nav-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .cta-button {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            color: #333;
            padding: 1.2rem 2.5rem;
            border: 3px solid #fff;
            border-radius: 50px;
            font-size: 1.3rem;
            font-weight: 900;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(253, 160, 133, 0.5);
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(253, 160, 133, 0.7);
        }

        .hero-section {
            text-align: center;
            padding: 3rem 2rem;
        }

        .section-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #fff;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .lesson-card, .tool-card {
            background: #fff;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 180px;
            position: relative;
        }

        .lesson-card:hover, .tool-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.3);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #5A4A87;
        }

        /* Special styling for ALL TOOLS card */
        .all-tools-card {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            position: relative;
            overflow: visible;
        }

        .all-tools-card .card-icon-circle {
            width: 80px;
            height: 80px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            transform: translateY(-10px);
        }

        .all-tools-card .card-icon-circle .arrow-icon {
            font-size: 2.5rem;
            color: #667eea;
        }

        .all-tools-card .card-title {
            color: #fff;
            font-size: 1.5rem;
            transform: translateY(-10px);
        }

        .all-tools-card .banner {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #f7a61d;
            padding: 0.6rem;
            font-weight: bold;
            font-size: 0.9rem;
            color: #fff;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        /* Footer Navigation Section */
        .footer-nav-section {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 2rem;
        }

        .footer-nav-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .simple-nav-btn {
            background: #f5f5f5;
            color: #333;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            display: block;
        }

        .simple-nav-btn:hover {
            background: #fff;
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
        }

        /* Footer Contact Section */
        footer {
            background: #5A4A87;
            color: white;
            padding: 2rem;
            text-align: center;
            margin-top: 3rem;
        }

        .footer-title {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #f6d365;
        }

        .contact-icons {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            background: linear-gradient(135deg, #fefefeff, #ffffffff);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: all 0.3s ease
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .contact-icon:hover {
            transform: scale(1.15);
            transform: rotate(360deg);
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
            color: #000000ff; 
}
        }

        .teacher-name {
            font-size: 1.3rem;
            margin-top: 1rem;
            color: #f6d365;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .brand-name {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
	<a href="https://www.youtube.com/@mathspissa" style="text-decoration: none;">
        <img src="{{ asset('images/Logo_circle_frame.png') }}" alt="MATHSPISSA Logo" class="header-logo">
        <h1 class="brand-name">MATHS PISSA</h1>
        <p class="tagline">Learn Maths with - A P Y Vajiranga Pathirana</p>
    </a>
        <nav>
            <a href="{{ url('/chatbot') }}" class="nav-button">AI Chat Bot</a>
        </nav>
    </header>
    <section class="hero-section">
        <a href="https://wa.me/94754704699?text=Hi,%20I%20want%20to%20join%20maths%20class" class="cta-button">Join Our Paid Class</a>
    </section>
    <section class="section-container">
        <h2 class="section-title">නොමිලේ පාඩම්</h2>
        <div class="cards-grid">
            <a href="{{ url('/sixtonine') }}" class="lesson-card">
                <div class="card-icon">📚</div>
                <div class="card-title">6-9 ශ්‍රේණි</div>
            </a>
            <a href="{{ url('tenandeleven') }}" class="lesson-card">
                <div class="card-icon">📐</div>
                <div class="card-title">10-11 ශ්‍රේණි</div>
            </a>
            <a href="{{ url('/ol') }}" class="lesson-card">
                <div class="card-icon">🎓</div>
                <div class="card-title">O/L</div>
            </a>
            <a href="{{ url('othertools') }}" class="lesson-card all-tools-card">
                <div class="card-icon-circle">
                    <span class="arrow-icon">→</span>
                </div>
                <div class="card-title">ALL TOOLS</div>
                <div class="banner">සියලුම සිසුන් සඳහා</div>
            </a>
        </div>
    </section>

    <!-- Free Tools Section -->
    <section class="section-container">
        <h2 class="section-title">නොමිලේ මෙවලම්</h2>
        <div class="cards-grid">
            <a href="{{ url('/calculator') }}" class="tool-card">
                <div class="card-icon">🧮</div>
                <div class="card-title">කැල්කියුලේටරය</div>
            </a>
            <a href="{{ url('/Multiplication_Table') }}" class="tool-card">
                <div class="card-icon">×</div>
                <div class="card-title">චක්කරය</div>
            </a>
            <a href="{{ url('/index') }}" class="tool-card">
                <div class="card-icon">📊</div>
                <div class="card-title">දර්ශක ගණකය</div>
            </a>
            <a href="{{ url('/othertools') }}" class="tool-card all-tools-card">
                <div class="card-icon-circle">
                    <span class="arrow-icon">→</span>
                </div>
                <div class="card-title">ALL TOOLS</div>
                <div class="banner">සියලුම සිසුන් සඳහා</div>
            </a>
        </div>
    </section>

    <section class="footer-nav-section">
        <div class="footer-nav-grid">
            <a href="{{ url('/about') }}" class="simple-nav-btn">👤 මා ගැන</a>
            <a href="{{ url('/reviews') }}" class="simple-nav-btn">⭐ සිසුන්ගේ අදහස්</a>
            <a href="{{ url('/contact') }}" class="simple-nav-btn">📞 අප හා සම්බන්ධ වන්න</a>
            <a href="{{ url('/others') }}" class="simple-nav-btn">💖 වෙනත්</a>
        </div>
    </section>
    <footer>
        <h3 class="footer-title">Contact Us</h3>
    <div class="contact-icons">
        <a href="https://web.facebook.com/profile.php?id=61581002633293" class="contact-icon" title="Facebook">
            <i class="fa-brands fa-facebook-f"></i>
        </a> 

        <a href="https://www.youtube.com/@mathspissa" class="contact-icon" title="YouTube">
            <i class="fa-brands fa-youtube"></i>
        </a>

        <a href="https://www.tiktok.com/@mathspissa" class="contact-icon" title="TikTok">
            <i class="fa-brands fa-tiktok"></i>
        </a>
        
        <a href="https://wa.me/94754704699?text=Hi,%20I%20want%20to%20join%20maths%20class" class="contact-icon" title="WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        
        <a href="tel:0754704699" class="contact-icon" title="Phone">
            <i class="fa-solid fa-phone"></i>
        </a>
        
    </div>
        <p class="teacher-name">A P Y Vajiranga Pathirana</p>
    </footer>
</body>
</html>