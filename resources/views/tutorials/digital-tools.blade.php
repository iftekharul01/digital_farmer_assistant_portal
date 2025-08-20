<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>খামার রেকর্ড রাখার ডিজিটাল টুলস | কৃষক পোর্টাল</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --light-green: #eafce9;
            --dark-green: #1e3d2c;
            --shadow-light: rgba(11,212,41,0.07);
            --shadow-medium: rgba(11,212,41,0.08);
            --shadow-card: rgba(11, 212, 41, 0.06);
            --text-color-light: #f2fff6;
            --text-color-dark: #555;
            --border-light: #b2eac1;
            --tech-blue: #3498db;
            --digital-purple: #9b59b6;
            --app-orange: #f39c12;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            line-height: 1.6;
            color: var(--text-color-dark);
            background: #f9fafb;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: var(--primary-green);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 2px 12px var(--shadow-light);
        }
        .header-wrapper {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
            height: 74px;
        }
        .logo {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.6rem;
            font-weight: 900;
            margin-right: 32px;
        }
        .logo a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        nav#main-navbar {
            display: flex;
            align-items: center;
            gap: 18px;
            flex: 1;
            min-width: 0;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 1.05rem;
            transition: background 0.2s, color 0.2s;
            white-space: nowrap;
        }
        .nav-link:hover, .nav-link.active {
            background: white !important;
            color: var(--primary-green) !important;
            text-decoration: none;
        }
        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
            margin-left: auto;
        }
        .user-profile span {
            color: white;
            font-weight: 700;
            font-size: 1.05rem;
        }
        .user-profile .profile-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: white;
            border-radius: 50%;
        }
        .user-profile .profile-icon i {
            color: var(--primary-green);
            font-size: 1.3rem;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--tech-blue), var(--digital-purple));
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><polygon fill="rgba(255,255,255,0.1)" points="1000,0 1000,100 0,100"/></svg>');
            background-size: cover;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        .hero p {
            font-size: 1.3rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        .hero-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        /* Content Section */
        .content {
            padding: 60px 0;
        }

        .section {
            margin-bottom: 60px;
        }

        .section h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 30px;
            text-align: center;
            position: relative;
        }

        .section h2::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--primary-green);
            margin: 10px auto;
            border-radius: 2px;
        }

        /* Mobile Apps Grid */
        .apps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .app-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .app-header {
            background: var(--app-orange);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .app-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .app-icon {
            font-size: 2rem;
        }

        .app-body {
            padding: 25px;
        }

        .app-features {
            margin-bottom: 20px;
        }

        .app-features h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .app-features ul {
            list-style: none;
            padding: 0;
        }

        .app-features ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .app-features ul li::before {
            content: "•";
            color: var(--app-orange);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .app-rating {
            background: var(--light-green);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stars {
            color: #ffc107;
        }

        .download-btn {
            background: var(--primary-green);
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            transition: background 0.3s ease;
        }

        .download-btn:hover {
            background: #09b824;
            color: white;
            text-decoration: none;
        }

        /* Web Tools Grid */
        .web-tools {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .tool-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--tech-blue);
        }

        .tool-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tool-icon {
            color: var(--tech-blue);
            font-size: 1.4rem;
        }

        .tool-link {
            background: var(--tech-blue);
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 10px;
            transition: background 0.3s ease;
        }

        .tool-link:hover {
            background: #2980b9;
            color: white;
            text-decoration: none;
        }

        /* Record Keeping System */
        .record-system {
            background: var(--light-green);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .record-system h3 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 30px;
        }

        .record-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .category-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid var(--border-light);
            text-align: center;
        }

        .category-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .category-icon {
            color: var(--primary-green);
            font-size: 1.8rem;
        }

        .record-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .record-items li {
            padding: 3px 0;
            font-size: 0.9rem;
            color: var(--text-color-dark);
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .benefit-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--digital-purple);
            text-align: center;
        }

        .benefit-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .benefit-icon {
            color: var(--digital-purple);
            font-size: 1.4rem;
        }

        /* Getting Started Steps */
        .getting-started {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .step-card {
            text-align: center;
            padding: 20px;
        }

        .step-number {
            background: var(--primary-green);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 auto 15px;
        }

        .step-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Back Button */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--primary-green);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
            margin-bottom: 20px;
        }

        .back-button:hover {
            background: #09b824;
            color: white;
            text-decoration: none;
        }

        /* Video Section */
        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            margin: 20px 0;
            background: #000;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-description {
            color: var(--text-color-dark);
            font-size: 1rem;
            text-align: center;
            margin-top: 15px;
            padding: 15px;
            background: var(--light-green);
            border-radius: 8px;
            border-left: 4px solid var(--primary-green);
        }

        /* Video Section */
        .tutorial-video-section {
            background: linear-gradient(135deg, #f8fff8 0%, #e8f5e8 100%);
            padding: 60px 0;
            margin-top: 50px;
            border-top: 3px solid var(--primary-green);
            position: relative;
            overflow: hidden;
        }

        .tutorial-video-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><polygon fill="rgba(11,212,41,0.05)" points="1000,0 1000,100 0,100"/></svg>');
            pointer-events: none;
        }

        .video-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .video-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .video-title i {
            color: var(--primary-green);
            font-size: 2.2rem;
        }

        .video-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            margin: 0 auto 30px;
            background: #000;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
            border: 4px solid white;
            max-width: 800px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 16px;
        }

        .video-description {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(11,212,41,0.1);
            border-left: 5px solid var(--primary-green);
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
            max-width: 700px;
            margin: 0 auto;
        }

        .video-description::before {
            content: "💡";
            font-size: 1.5rem;
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .tutorial-video-section {
                padding: 40px 0;
            }
            .video-title {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            .video-subtitle {
                font-size: 1rem;
                margin-bottom: 30px;
            }
            .video-container {
                max-width: 100%;
                border: 2px solid white;
            }
            .video-description {
                padding: 20px;
                font-size: 1rem;
            }
        }

        /* Tips Box */
        .tips-box {
            background: #e8f5e8;
            border: 2px solid var(--primary-green);
            border-radius: 10px;
            padding: 20px;
            margin: 30px 0;
        }

        .tips-box h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tips-box ul {
            list-style: none;
            padding: 0;
        }

        .tips-box ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 25px;
        }

        .tips-box ul li::before {
            content: "💡";
            position: absolute;
            left: 0;
            top: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .apps-grid { grid-template-columns: 1fr; }
            .web-tools { grid-template-columns: 1fr; }
            .benefits-grid { grid-template-columns: 1fr; }
            .record-categories { grid-template-columns: 1fr; }
            .steps-grid { grid-template-columns: 1fr; }
            .record-system { padding: 25px; }
            .getting-started { padding: 25px; }
            .header-wrapper { padding: 0 15px; height: auto; flex-direction: column; gap: 10px; }
            .nav-link { padding: 5px 10px; font-size: 0.9rem; }
            .container { padding: 0 15px; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-icon">
                    <i class="fas fa-tablet-alt"></i>
                </div>
                <h1>খামার রেকর্ড রাখার ডিজিটাল টুলস</h1>
                <p>আধুনিক প্রযুক্তি ব্যবহার করে খামারের সব তথ্য সংরক্ষণ ও ব্যবস্থাপনা করুন</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="content">
        <div class="container">
            <a href="/tutorials" class="back-button">
                <i class="fas fa-arrow-left"></i>
                টিউটোরিয়াল পেজে ফিরে যান
            </a>

            <!-- Mobile Apps -->
            <section class="section">
                <h2><i class="fas fa-mobile-alt"></i> কৃষি মোবাইল অ্যাপস</h2>
                <div class="apps-grid">
                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-seedling app-icon"></i>কৃষক বন্ধু</h3>
                            <p>বাংলাদেশের প্রধান কৃষি অ্যাপ</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>ফসলের রেকর্ড রাখা</li>
                                    <li>আবহাওয়া তথ্য</li>
                                    <li>বাজার দাম</li>
                                    <li>কৃষি পরামর্শ</li>
                                    <li>খরচের হিসাব</li>
                                    <li>লাভ-ক্ষতির বিশ্লেষণ</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐⭐ (৪.৫)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-chart-line app-icon"></i>ফার্ম ট্র্যাকার</h3>
                            <p>সম্পূর্ণ খামার ব্যবস্থাপনা</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>জমির তথ্য সংরক্ষণ</li>
                                    <li>বীজ ও সারের হিসাব</li>
                                    <li>শ্রমিক ব্যবস্থাপনা</li>
                                    <li>ফসল বিক্রয় তথ্য</li>
                                    <li>রিপোর্ট তৈরি</li>
                                    <li>ব্যাকআপ সুবিধা</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐ (৪.২)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-calculator app-icon"></i>কৃষি ক্যালকুলেটর</h3>
                            <p>কৃষি সংক্রান্ত গণনা</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>সারের মাত্রা নির্ণয়</li>
                                    <li>বীজের পরিমাণ</li>
                                    <li>সেচের হিসাব</li>
                                    <li>লাভ-ক্ষতি গণনা</li>
                                    <li>জমির ক্ষেত্রফল</li>
                                    <li>EMI হিসাব</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐ (৪.০)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-camera app-icon"></i>প্ল্যান্ট ডক্টর</h3>
                            <p>রোগ নির্ণয় ও চিকিৎসা</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>ছবি তুলে রোগ নির্ণয়</li>
                                    <li>চিকিৎসার পরামর্শ</li>
                                    <li>পোকামাকড় চিহ্নিত করা</li>
                                    <li>বিশেষজ্ঞ পরামর্শ</li>
                                    <li>প্রতিরোধ পদ্ধতি</li>
                                    <li>চিকিৎসার রেকর্ড</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐⭐ (৪.৭)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-cloud app-icon"></i>আবহাওয়া প্রো</h3>
                            <p>কৃষি আবহাওয়া পূর্বাভাস</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>১৫ দিনের পূর্বাভাস</li>
                                    <li>বৃষ্টিপাতের সম্ভাবনা</li>
                                    <li>তাপমাত্রা ও আর্দ্রতা</li>
                                    <li>কৃষি সতর্কতা</li>
                                    <li>সেচ পরামর্শ</li>
                                    <li>ফসল কাটার সময়</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐ (৪.৩)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>

                    <div class="app-card">
                        <div class="app-header">
                            <h3><i class="fas fa-chart-bar app-icon"></i>ফার্ম বুক</h3>
                            <p>খামারের হিসাব-নিকাশ</p>
                        </div>
                        <div class="app-body">
                            <div class="app-features">
                                <h4><i class="fas fa-star"></i>বৈশিষ্ট্য</h4>
                                <ul>
                                    <li>আয়-ব্যয়ের হিসাব</li>
                                    <li>ইনভেন্টরি ম্যানেজমেন্ট</li>
                                    <li>বিক্রয় রেকর্ড</li>
                                    <li>কর্মচারী বেতন</li>
                                    <li>ট্যাক্স ক্যালকুলেশন</li>
                                    <li>ফিন্যান্সিয়াল রিপোর্ট</li>
                                </ul>
                            </div>
                            <div class="app-rating">
                                <div class="stars">
                                    ⭐⭐⭐⭐ (৪.১)
                                </div>
                                <a href="#" class="download-btn">ডাউনলোড</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Web-based Tools -->
            <section class="section">
                <h2><i class="fas fa-globe"></i> ওয়েব-ভিত্তিক টুলস</h2>
                <div class="web-tools">
                    <div class="tool-card">
                        <h4><i class="fas fa-chart-pie tool-icon"></i>গুগল শিটস</h4>
                        <p>সহজ ও বিনামূল্যে স্প্রেডশিট সফটওয়্যার। খামারের সব ধরনের ডেটা সংরক্ষণ ও বিশ্লেষণ করুন। অটোমেটিক ক্যালকুলেশন ও চার্ট তৈরির সুবিধা।</p>
                        <a href="https://sheets.google.com" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>

                    <div class="tool-card">
                        <h4><i class="fas fa-table tool-icon"></i>মাইক্রোসফট এক্সেল অনলাইন</h4>
                        <p>শক্তিশাল স্প্রেডশিট টুল। জটিল হিসাব-নিকাশ, ডেটা এনালাইসিস এবং প্রফেশনাল রিপোর্ট তৈরি করুন।</p>
                        <a href="https://office.live.com/start/Excel.aspx" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>

                    <div class="tool-card">
                        <h4><i class="fas fa-tasks tool-icon"></i>ট্রেলো</h4>
                        <p>কাজের তালিকা ও প্রজেক্ট ম্যানেজমেন্ট। খামারের বিভিন্ন কাজের পরিকল্পনা ও অগ্রগতি ট্র্যাক করুন।</p>
                        <a href="https://trello.com" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>

                    <div class="tool-card">
                        <h4><i class="fas fa-calendar tool-icon"></i>গুগল ক্যালেন্ডার</h4>
                        <p>খামারের সব কাজের সময়সূচী তৈরি করুন। বীজ বপন, সেচ, সার প্রয়োগের তারিখ মনে রাখুন।</p>
                        <a href="https://calendar.google.com" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>

                    <div class="tool-card">
                        <h4><i class="fas fa-cloud tool-icon"></i>গুগল ড্রাইভ</h4>
                        <p>খামারের সব তথ্য ক্লাউডে সংরক্ষণ করুন। যেকোনো ডিভাইস থেকে এক্সেস করুন এবং অন্যদের সাথে শেয়ার করুন।</p>
                        <a href="https://drive.google.com" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>

                    <div class="tool-card">
                        <h4><i class="fas fa-camera tool-icon"></i>গুগল ফটো</h4>
                        <p>খামারের বিভিন্ন পর্যায়ের ছবি সংরক্ষণ করুন। ফসলের বৃদ্ধি, রোগবালাই ও সফলতার ছবি রাখুন।</p>
                        <a href="https://photos.google.com" class="tool-link" target="_blank">ব্যবহার করুন</a>
                    </div>
                </div>
            </section>

            <!-- Record Keeping System -->
            <section class="section">
                <div class="record-system">
                    <h3><i class="fas fa-book"></i> ডিজিটাল রেকর্ড কিপিং সিস্টেম</h3>
                    <div class="record-categories">
                        <div class="category-card">
                            <h4><i class="fas fa-seedling category-icon"></i>ফসল রেকর্ড</h4>
                            <ul class="record-items">
                                <li>বীজ বপনের তারিখ</li>
                                <li>ব্যবহৃত বীজের জাত ও পরিমাণ</li>
                                <li>জমি প্রস্তুতির খরচ</li>
                                <li>ফসল কাটার তারিখ</li>
                                <li>উৎপাদিত ফসলের পরিমাণ</li>
                                <li>ফসলের গুণমান</li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <h4><i class="fas fa-tint category-icon"></i>সেচ ও সার</h4>
                            <ul class="record-items">
                                <li>সেচের তারিখ ও পরিমাণ</li>
                                <li>সারের ধরন ও মাত্রা</li>
                                <li>সার প্রয়োগের তারিখ</li>
                                <li>কীটনাশক ব্যবহার</li>
                                <li>জৈব সার প্রয়োগ</li>
                                <li>পানির উৎস ও খরচ</li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <h4><i class="fas fa-coins category-icon"></i>আর্থিক হিসাব</h4>
                            <ul class="record-items">
                                <li>বীজ ক্রয়ের খরচ</li>
                                <li>সার ও কীটনাশকের খরচ</li>
                                <li>শ্রমিক মজুরি</li>
                                <li>যন্ত্রপাতি ভাড়া</li>
                                <li>ফসল বিক্রয়ের দাম</li>
                                <li>নেট মুনাফা</li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <h4><i class="fas fa-tools category-icon"></i>যন্ত্রপাতি</h4>
                            <ul class="record-items">
                                <li>যন্ত্রের নাম ও মডেল</li>
                                <li>ক্রয়ের তারিখ ও দাম</li>
                                <li>রক্ষণাবেক্ষণের খরচ</li>
                                <li>মেরামতের ইতিহাস</li>
                                <li>জ্বালানি খরচ</li>
                                <li>যন্ত্রের বর্তমান অবস্থা</li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <h4><i class="fas fa-bug category-icon"></i>রোগ ও পোকা</h4>
                            <ul class="record-items">
                                <li>রোগের ধরন ও লক্ষণ</li>
                                <li>আক্রমণের তারিখ</li>
                                <li>ক্ষতির পরিমাণ</li>
                                <li>চিকিৎসা পদ্ধতি</li>
                                <li>ওষুধের নাম ও মাত্রা</li>
                                <li>চিকিৎসার ফলাফল</li>
                            </ul>
                        </div>

                        <div class="category-card">
                            <h4><i class="fas fa-cloud-sun category-icon"></i>আবহাওয়া</h4>
                            <ul class="record-items">
                                <li>বৃষ্টিপাতের পরিমাণ</li>
                                <li>সর্বোচ্চ ও সর্বনিম্ন তাপমাত্রা</li>
                                <li>আর্দ্রতার মাত্রা</li>
                                <li>বাতাসের গতি</li>
                                <li>প্রাকৃতিক দুর্যোগ</li>
                                <li>আবহাওয়ার প্রভাব</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits of Digital Tools -->
            <section class="section">
                <h2><i class="fas fa-thumbs-up"></i> ডিজিটাল টুলসের সুবিধা</h2>
                <div class="benefits-grid">
                    <div class="benefit-card">
                        <h4><i class="fas fa-save benefit-icon"></i>তথ্য সংরক্ষণ</h4>
                        <p>সব তথ্য নিরাপদে সংরক্ষিত থাকে। হারিয়ে যাওয়া বা নষ্ট হওয়ার ভয় নেই। ক্লাউড স্টোরেজে ব্যাকআপ রাখা যায়।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-search benefit-icon"></i>সহজ খোঁজা</h4>
                        <p>যেকোনো তথ্য সহজেই খুঁজে পাওয়া যায়। ফিল্টার ও সার্চ ফিচার ব্যবহার করে দ্রুত প্রয়োজনীয় ডেটা পেতে পারেন।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-chart-line benefit-icon"></i>বিশ্লেষণ</h4>
                        <p>ডেটার ভিত্তিতে গ্রাফ ও চার্ট তৈরি করুন। খামারের অগ্রগতি ও সমস্যা সহজেই বুঝতে পারবেন।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-clock benefit-icon"></i>সময় সাশ্রয়</h4>
                        <p>কাগজ-কলমের চেয়ে অনেক দ্রুত ডেটা এন্ট্রি করা যায়। রিপোর্ট তৈরিও সময়সাপেক্ষ নয়।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-share benefit-icon"></i>তথ্য শেয়ার</h4>
                        <p>অন্য কৃষক, বিশেষজ্ঞ বা পরিবারের সদস্যদের সাথে তথ্য শেয়ার করা যায়। পরামর্শ নেওয়া সহজ হয়।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-bell benefit-icon"></i>রিমাইন্ডার</h4>
                        <p>গুরুত্বপূর্ণ কাজের জন্য অটোমেটিক রিমাইন্ডার পাওয়া যায়। সেচ, সার দেওয়া, ফসল কাটার কথা ভুলে যাবেন না।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-mobile-alt benefit-icon"></i>সব জায়গায় এক্সেস</h4>
                        <p>স্মার্টফোন, ট্যাবলেট বা কম্পিউটার - যেকোনো ডিভাইস থেকে তথ্য দেখা ও আপডেট করা যায়।</p>
                    </div>

                    <div class="benefit-card">
                        <h4><i class="fas fa-calculator benefit-icon"></i>অটোমেটিক গণনা</h4>
                        <p>লাভ-ক্ষতি, খরচ, উৎপাদনশীলতা ইত্যাদি অটোমেটিক হিসাব হয়ে যায়। ম্যানুয়াল ভুলের সম্ভাবনা নেই।</p>
                    </div>
                </div>
            </section>

            <!-- Getting Started -->
            <section class="section">
                <div class="getting-started">
                    <h3><i class="fas fa-rocket"></i> কীভাবে শুরু করবেন</h3>
                    <div class="steps-grid">
                        <div class="step-card">
                            <div class="step-number">১</div>
                            <h4>স্মার্টফোন প্রস্তুত</h4>
                            <p>একটি স্মার্টফোন ও ইন্টারনেট সংযোগ নিশ্চিত করুন। গুগল একাউন্ট তৈরি করুন।</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">২</div>
                            <h4>অ্যাপ ডাউনলোড</h4>
                            <p>গুগল প্লে স্টোর থেকে পছন্দের কৃষি অ্যাপ ডাউনলোড ও ইনস্টল করুন।</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">৩</div>
                            <h4>অ্যাকাউন্ট তৈরি</h4>
                            <p>অ্যাপে নিবন্ধন করুন। ব্যক্তিগত ও খামারের মৌলিক তথ্য দিন।</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">৪</div>
                            <h4>ডেটা এন্ট্রি শুরু</h4>
                            <p>বর্তমান ফসলের তথ্য দিয়ে শুরু করুন। ধীরে ধীরে সব তথ্য যোগ করুন।</p>
                        </div>
                        <div class="step-card">
                            <div class="step-number">৫</div>
                            <h4>নিয়মিত আপডেট</h4>
                            <p>প্রতিদিনের কাজের পর তথ্য আপডেট করুন। অভ্যাস করে নিন।</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tips -->
            <div class="tips-box">
                <h4><i class="fas fa-lightbulb"></i>সফল ব্যবহারের টিপস</h4>
                <ul>
                    <li>প্রথমে সহজ অ্যাপ দিয়ে শুরু করুন এবং ধীরে ধীরে এডভান্স ফিচার ব্যবহার করুন</li>
                    <li>নিয়মিত ডেটা এন্ট্রি করার অভ্যাস গড়ুন - দিন শেষে ৫ মিনিট ব্যয় করুন</li>
                    <li>ইন্টারনেট ছাড়াও কাজ করে এমন অ্যাপ বেছে নিন</li>
                    <li>পরিবারের অন্য সদস্যদেরও শিখিয়ে দিন যাতে সবাই তথ্য আপডেট করতে পারে</li>
                    <li>মাসে একবার ব্যাকআপ নিশ্চিত করুন এবং পুরানো ডেটা রিভিউ করুন</li>
                    <li>অন্য কৃষকদের সাথে অভিজ্ঞতা শেয়ার করুন এবং নতুন টিপস শিখুন</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- Tutorial Video Section -->
    <section class="tutorial-video-section">
        <div class="container">
            <div class="video-content">
                <h2 class="video-title">
                    <i class="fas fa-play-circle"></i>
                    টিউটোরিয়াল ভিডিও
                </h2>
                <p class="video-subtitle">
                    ডিজিটাল কৃষি ও খামার ব্যবস্থাপনার বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/h4wm4yQf3d8" 
                        title="ডিজিটাল কৃষি ও খামার ব্যবস্থাপনা"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    ডিজিটাল টুলস ব্যবহার করে খামার ব্যবস্থাপনার আধুনিক পদ্ধতি জানুন। মোবাইল অ্যাপস এবং অনলাইন সেবা ব্যবহার করে কৃষিকাজ আরও সহজ করার উপায় দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
