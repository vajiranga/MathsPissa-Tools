<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades 10-11 - Mathspissa</title>
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
        }

        /* Header Navigation */
        .top-header {
            background: #5A4A87;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .header-links {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .header-btn {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .header-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.3);
        }

        /* Main Navigation Container */
        .main-nav {
            background: rgba(255, 255, 255, 0.95);
            padding: 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            position: relative;
            z-index: 1000;
        }

        .grade-buttons {
            display: flex;
            justify-content: center;
            align-items: stretch;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Individual Grade Button Container */
        .grade-item {
            position: relative;
            flex: 1;
        }

        .grade-btn {
            width: 100%;
            background: #fff;
            color: #5A4A87;
            padding: 1.5rem 2rem;
            border: none;
            border-right: 1px solid #e0e0e0;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            text-align: center;
        }

        .grade-item:last-child .grade-btn {
            border-right: none;
        }

        .grade-btn:hover {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            transform: translateY(-2px);
        }

        /* Dropdown/Popup Sub-menu */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            width: 800px;
            background: white;
            box-shadow: 0 8px 30px rgba(0,0,0,0.3);
            border-radius: 0 0 12px 12px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 999;
            overflow: hidden;
        }

        .grade-item:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* Keep dropdown open when hovering over it */
        .dropdown-menu:hover {
            opacity: 1;
            visibility: visible;
        }

        /* Clickable Area Wrapper */
        .dropdown-link {
            display: block;
            text-decoration: none;
            color: inherit;
            cursor: pointer;
        }

        .dropdown-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            padding: 2rem 1.5rem;
        }

        /* Term Sections */
        .term-section {
            padding: 0 1rem;
            border-right: 2px solid #f0f0f0;
        }

        .term-section:last-child {
            border-right: none;
        }

        .term-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #5A4A87;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #667eea;
        }

        .lesson-list {
            list-style: none;
            padding: 0;
        }

        .lesson-item {
            padding: 0.4rem 0;
            font-size: 0.9rem;
            color: #555;
            transition: color 0.2s ease;
        }

        .lesson-item:hover {
            color: #667eea;
        }

        /* Others Section */
        .others-section .lesson-item {
            font-weight: 600;
            color: #764ba2;
            padding: 0.6rem 0;
        }

        /* Call to Action at Bottom */
        .cta-banner {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            padding: 1rem;
            text-align: center;
            margin-top: 1.5rem;
            border-radius: 0 0 12px 12px;
            font-weight: 700;
            font-size: 1rem;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
        }

        /* Main Content Area */
        .content-area {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 2rem;
            text-align: center;
        }

        .welcome-message {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }

        .welcome-message h1 {
            color: #5A4A87;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .welcome-message p {
            color: #555;
            font-size: 1.2rem;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .dropdown-menu {
                width: 700px;
            }

            .dropdown-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            .term-section {
                border-right: none;
                border-bottom: 2px solid #f0f0f0;
                padding-bottom: 1rem;
                margin-bottom: 1rem;
            }

            .term-section:last-child {
                border-bottom: none;
                margin-bottom: 0;
            }
        }

        @media (max-width: 768px) {
            .grade-buttons {
                flex-direction: column;
            }

            .grade-btn {
                border-right: none;
                border-bottom: 1px solid #e0e0e0;
            }

            .dropdown-menu {
                width: 100%;
                left: 0;
            }

            .dropdown-content {
                grid-template-columns: 1fr;
            }

            .header-links {
                flex-direction: column;
                gap: 0.5rem;
            }

            .header-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="top-header">
        <nav class="header-links">
            <a href="{{ url('/') }}" class="header-btn">🏠 Home</a>
            <a href="https://www.youtube.com/@mathspissa" target="_blank" class="header-btn">📺 YouTube Channel</a>
        </nav>
    </header>
    <nav class="main-nav">
        <div class="grade-buttons">
            <div class="grade-item">
                <button class="grade-btn">Grade 10</button>
                <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <div class="term-section">
                                <a href="{{ url('/10-1term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">1st Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>                                
                                </a>
                            </div>
                            <div class="term-section">
                                <a href="{{ url('/10-2term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">2nd Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>
                                </a>
                            </div>
                            <div class="term-section">
                                <a href="{{ url('/10-3term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">3rd Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>
                                </a>
                            </div>
                            <div class="term-section others-section">
                                <a href="{{ url('/10grade') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">Others</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">📄 Past Papers</li>
                                    <li class="lesson-item">📚 Textbook</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>         
                                </a>
                            </div>
                        </div>
                </div>
            </div>
            
            <div class="grade-item">
                <button class="grade-btn">Grade 11</button>
                <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <!-- 1st Term -->
                            <div class="term-section">
                                <a href="{{ url('/11-1term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">1st Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>                                
                                </a>
                            </div>
                            <div class="term-section">
                                <a href="{{ url('/11-2term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">2nd Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>
                                </a>
                            </div>
                            <div class="term-section">
                                <a href="{{ url('/11-3term') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">3rd Term</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">Lesson 1 Name</li>
                                    <li class="lesson-item">Lesson 2 Name</li>
                                    <li class="lesson-item">Lesson 3 Name</li>
                                    <li class="lesson-item">Lesson 4 Name</li>
                                    <li class="lesson-item">Lesson 5 Name</li>
                                    <li class="lesson-item">Lesson 6 Name</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>
                                </a>
                            </div>
                            <div class="term-section others-section">
                                <a href="{{ url('/11grade') }}" target="_blank" class="dropdown-link">
                                <h3 class="term-title">Others</h3>
                                <ul class="lesson-list">
                                    <li class="lesson-item">📄 Past Papers</li>
                                    <li class="lesson-item">📚 Textbook</li>
                                </ul>
                                <div class="cta-banner">
                                    CLICK HERE!!!
                                </div>         
                                </a>
                            </div>
                        </div>
                </div>
            </div>
    </nav>

    <main class="content-area">
        <div class="welcome-message">
            <h1>Welcome to Grades 10-11 Mathematics</h1>
            <p>Hover over any grade button above to explore lessons organized by term. Click anywhere in the dropdown to view all lessons for that grade!</p>
        </div>
    </main>
</body>
</html>