<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade 11 - 3rd Term | Mathspissa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Colorful animated gradient background */
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #4facfe);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            color: #333;
            line-height: 1.6;
        }

        /* Animated background */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* ===== FIXED NAVIGATION BAR ===== */
        .top-navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #5A4A87, #764ba2, #8b5cf6);
            padding: 1rem 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-left {
            display: flex;
            gap: 1rem;
        }

        .nav-btn {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            padding: 0.7rem 1.5rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,255,255,0.2);
        }

        .nav-btn.youtube {
            background: linear-gradient(135deg, #ff0000, #cc0000);
            border-color: #ff4444;
        }

        .nav-btn.youtube:hover {
            background: linear-gradient(135deg, #ff3333, #ff0000);
            box-shadow: 0 6px 20px rgba(255,0,0,0.4);
        }

        /* ===== PAGE TITLE ===== */
        .page-header {
            margin-top: 80px;
            padding: 2.5rem;
            text-align: center;
            background: linear-gradient(135deg, #ffeaa7, #fdcb6e, #fab1a0);
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }

        .page-title {
            font-size: 2.5rem;
            color: #2d3436;
            font-weight: 900;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(255,255,255,0.5);
        }

        .page-subtitle {
            font-size: 1.2rem;
            color: #636e72;
            font-weight: 500;
        }

        /* ===== MAIN LAYOUT ===== */
        .main-container {
            display: flex;
            max-width: 1600px;
            margin: 0 auto;
            min-height: calc(100vh - 200px);
        }

        /* ===== LEFT SIDEBAR - COLORFUL GRADIENT ===== */
        .sidebar {
            width: 280px;
            /* Beautiful gradient matching your screenshot */
            background: linear-gradient(180deg, #81ecec, #74b9ff, #a29bfe);
            padding: 2rem 1rem;
            position: sticky;
            top: 80px;
            height: calc(100vh - 80px);
            overflow-y: auto;
            box-shadow: 4px 0 20px rgba(0,0,0,0.15);
        }

        .sidebar-title {
            font-size: 1.5rem;
            color: #2d3436;
            font-weight: 800;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .lesson-nav-list {
            list-style: none;
        }

        .lesson-nav-item {
            margin-bottom: 1rem;
        }

        /* Colorful lesson buttons */
        .lesson-nav-link {
            display: block;
            padding: 1.2rem;
            background: rgba(255, 255, 255, 0.9);
            color: #2d3436;
            text-decoration: none;
            border-radius: 15px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border-left: 5px solid transparent;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        /* Different colors for each lesson */
        .lesson-nav-item:nth-child(1) .lesson-nav-link {
            border-left-color: #ff6b6b;
        }
        .lesson-nav-item:nth-child(2) .lesson-nav-link {
            border-left-color: #feca57;
        }
        .lesson-nav-item:nth-child(3) .lesson-nav-link {
            border-left-color: #48dbfb;
        }
        .lesson-nav-item:nth-child(4) .lesson-nav-link {
            border-left-color: #1dd1a1;
        }
        .lesson-nav-item:nth-child(5) .lesson-nav-link {
            border-left-color: #ff9ff3;
        }
        .lesson-nav-item:nth-child(6) .lesson-nav-link {
            border-left-color: #54a0ff;
        }

        .lesson-nav-link:hover {
            transform: translateX(8px) scale(1.02);
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            background: white;
        }

        .lesson-nav-link.active {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateX(8px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        /* ===== RIGHT CONTENT AREA ===== */
        .content-area {
            flex: 1;
            padding: 3rem;
            overflow-y: auto;
            /* Light gradient background */
            background: linear-gradient(180deg, #ffeaa7, #fff5e1, #ffe6f0, #e1f7ff);
        }

        /* ===== LESSON BLOCKS - COLORFUL CARDS ===== */
        .lesson-block {
            background: white;
            border-radius: 25px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border: 3px solid transparent;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        /* Colorful top border for each lesson */
        .lesson-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #ff6b6b, #feca57, #48dbfb, #1dd1a1, #ff9ff3, #54a0ff);
        }

        .lesson-block:hover {
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            transform: translateY(-5px);
        }

        /* Different background tints for variety */
        .lesson-block:nth-child(odd) {
            background: linear-gradient(135deg, #fff, #fff5f5);
        }

        .lesson-block:nth-child(even) {
            background: linear-gradient(135deg, #fff, #f0f8ff);
        }

        .lesson-title {
            font-size: 2rem;
            color: #2d3436;
            font-weight: 900;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .lesson-number {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .lesson-subtitle {
            font-size: 1.5rem;
            color: #636e72;
            margin-top: 0.5rem;
        }

        .lesson-description {
            font-size: 1.1rem;
            color: #2d3436;
            margin: 1.5rem 0;
            line-height: 1.8;
            padding: 1.5rem;
            background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
            border-radius: 15px;
            border-left: 5px solid #f39c12;
        }

        /* ===== VIDEO SECTION ===== */
        .video-section {
            margin: 2rem 0;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .video-card {
            background: linear-gradient(135deg, #a29bfe, #6c5ce7);
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 8px 20px rgba(108, 92, 231, 0.3);
            transition: all 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(108, 92, 231, 0.4);
        }

        .video-label {
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            font-size: 1.1rem;
            text-align: center;
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* ===== PDF DOWNLOAD BUTTON - COLORFUL ===== */
        .pdf-section {
            margin: 2rem 0;
            padding: 2rem;
            background: linear-gradient(135deg, #55efc4, #00b894);
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 184, 148, 0.3);
        }

        .pdf-download-btn {
            display: inline-flex;
            align-items: center;
            gap: 1rem;
            background: white;
            color: #00b894;
            padding: 1.2rem 2.5rem;
            border-radius: 15px;
            text-decoration: none;
            font-weight: 800;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
        }

        .pdf-download-btn:hover {
            transform: scale(1.08);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            background: #00b894;
            color: white;
        }

        .pdf-icon {
            font-size: 2rem;
        }

        /* ===== TEXT CONTENT ===== */
        .text-content {
            margin: 2rem 0;
            padding: 2rem;
            background: linear-gradient(135deg, #ffeaa7, #fdcb6e);
            border-radius: 20px;
            border-left: 6px solid #e17055;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }

        .text-content h3 {
            color: #2d3436;
            margin-bottom: 1rem;
            font-size: 1.4rem;
            font-weight: 800;
        }

        .text-content p {
            color: #2d3436;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .text-content ul, .text-content ol {
            margin-left: 2rem;
            color: #2d3436;
        }

        .text-content li {
            margin-bottom: 0.8rem;
            font-weight: 500;
        }

        /* ===== DECORATIVE ICONS ===== */
        .decorative-icons {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 10px;
            font-size: 1.5rem;
            opacity: 0.6;
        }

        /* ===== DIVIDER ===== */
        .lesson-divider {
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #feca57, #48dbfb, #1dd1a1, #ff9ff3, #54a0ff);
            margin: 3rem 0;
            border-radius: 2px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .main-container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
                top: 0;
            }
        }

        @media (max-width: 768px) {
            .top-navbar {
                flex-direction: column;
                gap: 0.5rem;
            }

            .nav-left {
                flex-direction: column;
                width: 100%;
            }

            .nav-btn {
                width: 100%;
                justify-content: center;
            }

            .content-area {
                padding: 1.5rem;
            }

            .lesson-block {
                padding: 1.5rem;
            }

            .video-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ===== SCROLLBAR ===== */
        .sidebar::-webkit-scrollbar,
        .content-area::-webkit-scrollbar {
            width: 10px;
        }

        .sidebar::-webkit-scrollbar-track,
        .content-area::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.3);
        }

        .sidebar::-webkit-scrollbar-thumb,
        .content-area::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #667eea, #764ba2);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- NAVIGATION -->
    <nav class="top-navbar">
        <div class="nav-left">
            <a href="{{ url('/') }}" class="nav-btn">
                🏠 Home
            </a>
            <a href="{{ url('/sixtonine') }}" class="nav-btn">
                ⬅️ Back
            </a>
        </div>
        <a href="https://www.youtube.com/@mathspissa" target="_blank" class="nav-btn youtube">
            ▶️ YouTube
        </a>
    </nav>

    <!-- PAGE HEADER -->
    <header class="page-header">
        <h1 class="page-title">පාඩම් - Grade 11 - 3rd Term</h1>
        <p class="page-subtitle">සජීව වීඩියෝ පාඩම් සහ සම්පත්</p>
    </header>

    <!-- MAIN LAYOUT -->
    <div class="main-container">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <h2 class="sidebar-title">📚 පාඩම්</h2>
            <ul class="lesson-nav-list">
                <li class="lesson-nav-item">
                    <a href="#lesson-1" class="lesson-nav-link">පාඩම 1</a>
                </li>
                <li class="lesson-nav-item">
                    <a href="#lesson-2" class="lesson-nav-link">පාඩම 2</a>
                </li>
                <li class="lesson-nav-item">
                    <a href="#lesson-3" class="lesson-nav-link">පාඩම 3</a>
                </li>
                <li class="lesson-nav-item">
                    <a href="#lesson-4" class="lesson-nav-link">පාඩම 4</a>
                </li>
                <li class="lesson-nav-item">
                    <a href="#lesson-5" class="lesson-nav-link">පාඩම 5</a>
                </li>
                <li class="lesson-nav-item">
                    <a href="#lesson-6" class="lesson-nav-link">පාඩම 6</a>
                </li>
            </ul>
        </aside>

        <!-- CONTENT AREA -->
        <main class="content-area">
            <!-- LESSON 1 -->
            <article id="lesson-1" class="lesson-block">
                <div class="decorative-icons">
                    <span>🔥</span>
                    <span>🎯</span>
                    <span>✨</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">1</span>
                    <div>
                        <div>Lesson 1:</div>
                        <div class="lesson-subtitle">පන්තිය: පොදු වේ</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    (Number Patterns of Eonh far vite dy ldess 61.0P3 0P5)
                </p>

                <!-- VIDEO SECTION -->
                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Video 1</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Video 2</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PDF SECTION -->
                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson1.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>

                <!-- TEXT CONTENT -->
                <div class="text-content">
                    <h3>📖 Key Points:</h3>
                    <ul>
                        <li>Number patterns and sequences</li>
                        <li>Identifying patterns in numbers</li>
                        <li>Creating your own patterns</li>
                        <li>Real-world applications</li>
                    </ul>
                </div>
            </article>

            <div class="lesson-divider"></div>

            <!-- LESSON 2 -->
            <article id="lesson-2" class="lesson-block">
                <div class="decorative-icons">
                    <span>💡</span>
                    <span>📊</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">2</span>
                    <div>
                        <div>Lesson 2:</div>
                        <div class="lesson-subtitle">වීජ ගණිතය (Algebra)</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    (Number Patterns) - දර්ශක ගණක ප්රාථමික මූලධර්ම
                </p>

                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Introduction</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Practice Problems</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson2.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>

                <div class="text-content">
                    <h3>🎯 Learning Objectives:</h3>
                    <p>මෙම පාඩමෙන් ඔබට ඉගෙන ගත හැක්කේ:</p>
                    <ol>
                        <li>Algebraic expressions මූලික කරුණු</li>
                        <li>Variables සහ Constants</li>
                        <li>Simple equations විසඳීම</li>
                    </ol>
                </div>
            </article>

            <div class="lesson-divider"></div>

            <!-- MORE LESSONS... -->
            <article id="lesson-3" class="lesson-block">
                <div class="decorative-icons">
                    <span>🌟</span>
                    <span>🎨</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">3</span>
                    <div>
                        <div>Lesson 3:</div>
                        <div class="lesson-subtitle">ත්‍රිකෝණ මිතිය</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    Triangles and their properties - ත්‍රිකෝණවල වර්ග සහ ගුණාංග
                </p>

                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Part 1</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Part 2</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson3.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>
            </article>

            <article id="lesson-4" class="lesson-block">
                <div class="decorative-icons">
                    <span>🌟</span>
                    <span>🎨</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">4</span>
                    <div>
                        <div>Lesson 4:</div>
                        <div class="lesson-subtitle">ත්‍රිකෝණ මිතිය</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    Triangles and their properties - ත්‍රිකෝණවල වර්ග සහ ගුණාංග
                </p>

                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Part 1</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Part 2</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson3.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>
            </article>

            <article id="lesson-5" class="lesson-block">
                <div class="decorative-icons">
                    <span>🌟</span>
                    <span>🎨</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">5</span>
                    <div>
                        <div>Lesson 5:</div>
                        <div class="lesson-subtitle">ත්‍රිකෝණ මිතිය</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    Triangles and their properties - ත්‍රිකෝණවල වර්ග සහ ගුණාංග
                </p>

                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Part 1</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Part 2</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson3.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>
            </article>

            <article id="lesson-6" class="lesson-block">
                <div class="decorative-icons">
                    <span>🌟</span>
                    <span>🎨</span>
                </div>
                
                <h2 class="lesson-title">
                    <span class="lesson-number">6</span>
                    <div>
                        <div>Lesson 6:</div>
                        <div class="lesson-subtitle">ත්‍රිකෝණ මිතිය</div>
                    </div>
                </h2>
                
                <p class="lesson-description">
                    Triangles and their properties - ත්‍රිකෝණවල වර්ග සහ ගුණාංග
                </p>

                <div class="video-section">
                    <div class="video-grid">
                        <div class="video-card">
                            <p class="video-label">Part 1</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="video-card">
                            <p class="video-label">Part 2</p>
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pdf-section">
                    <a href="{{ url('/pdfs/lesson3.pdf') }}" class="pdf-download-btn">
                        <span class="pdf-icon">📄</span>
                        Download Notes (PDF)
                    </a>
                </div>
            </article>

            <!-- Completion Message -->
            <div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, #667eea, #764ba2); color: white; border-radius: 25px; margin-top: 3rem; box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">🎉 සුභපැතුම්!</h2>
                <p style="font-size: 1.3rem;">ඔබ සියලුම පාඩම් සම්පූර්ණ කර ඇත. දිගටම ඉගෙන ගන්න!</p>
            </div>
        </main>
    </div>

    <script>
        // Smooth scroll functionality
        document.querySelectorAll('.lesson-nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                document.querySelectorAll('.lesson-nav-link').forEach(l => {
                    l.classList.remove('active');
                });
                
                this.classList.add('active');
                
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    const navHeight = document.querySelector('.top-navbar').offsetHeight;
                    const targetPosition = targetSection.offsetTop - navHeight - 20;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Update active state on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('.lesson-block');
            const navLinks = document.querySelectorAll('.lesson-nav-link');
            const navHeight = document.querySelector('.top-navbar').offsetHeight;
            
            let current = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop - navHeight - 100;
                const sectionHeight = section.clientHeight;
                
                if (window.pageYOffset >= sectionTop && 
                    window.pageYOffset < sectionTop + sectionHeight) {
                    current = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>