<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ফসল সংরক্ষণের পরামর্শ | কৃষক পোর্টাল</title>
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
            --storage-orange: #f39c12;
            --warning-red: #e74c3c;
            --info-blue: #3498db;
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
            background: linear-gradient(135deg, var(--storage-orange), #e67e22);
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

        /* Storage Methods Grid */
        .storage-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .method-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .method-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .method-header {
            background: var(--storage-orange);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .method-header h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .method-icon {
            font-size: 2rem;
        }

        .method-body {
            padding: 25px;
        }

        .method-info h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .method-info ul {
            list-style: none;
            padding: 0;
            margin-bottom: 15px;
        }

        .method-info ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .method-info ul li::before {
            content: "•";
            color: var(--storage-orange);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .storage-duration {
            background: var(--light-green);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            color: var(--dark-green);
        }

        /* Crop-specific Storage */
        .crop-storage {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .crop-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--primary-green);
        }

        .crop-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .crop-icon {
            color: var(--primary-green);
            font-size: 1.4rem;
        }

        .storage-conditions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 15px 0;
        }

        .condition-box {
            background: #f8f9fa;
            padding: 12px;
            border-radius: 6px;
            text-align: center;
        }

        .condition-box .label {
            font-size: 0.8rem;
            color: #666;
            text-transform: uppercase;
        }

        .condition-box .value {
            font-weight: 700;
            color: var(--dark-green);
            font-size: 1.1rem;
        }

        /* Storage Problems */
        .problem-solutions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .problem-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            overflow: hidden;
        }

        .problem-header {
            background: var(--warning-red);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .problem-header h4 {
            font-size: 1.2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .problem-body {
            padding: 20px;
        }

        .causes, .solutions {
            margin-bottom: 15px;
        }

        .causes h5, .solutions h5 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Storage Calculator */
        .calculator {
            background: var(--light-green);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .calculator h3 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 30px;
        }

        .calc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
        }

        .input-group label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--dark-green);
        }

        .input-group input, .input-group select {
            padding: 12px;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        .calc-button {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
            display: block;
            margin: 0 auto;
        }

        .calc-button:hover {
            background: #09b824;
        }

        .calc-result {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            border: 2px solid var(--border-light);
        }

        /* Tips Grid */
        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .tip-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--info-blue);
        }

        .tip-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .tip-icon {
            color: var(--info-blue);
            font-size: 1.4rem;
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

        /* Warning Box */
        .warning-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
            margin: 30px 0;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .warning-box .warning-icon {
            color: #856404;
            font-size: 1.5rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .warning-box div {
            flex: 1;
        }

        .warning-box h4 {
            color: #856404;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .warning-box p {
            color: #856404;
            margin: 5px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .storage-methods { grid-template-columns: 1fr; }
            .crop-storage { grid-template-columns: 1fr; }
            .problem-solutions { grid-template-columns: 1fr; }
            .calc-grid { grid-template-columns: 1fr; }
            .calculator { padding: 25px; }
            .storage-conditions { grid-template-columns: 1fr; }
            .tips-grid { grid-template-columns: 1fr; }
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
                    <i class="fas fa-warehouse"></i>
                </div>
                <h1>ফসল সংরক্ষণের পরামর্শ</h1>
                <p>ফসল কাটার পরবর্তী সময়ে ক্ষতি কমিয়ে লাভজনক সংরক্ষণের কার্যকর পদ্ধতি জানুন</p>
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

            <!-- Storage Methods -->
            <section class="section">
                <h2><i class="fas fa-boxes"></i> সংরক্ষণের পদ্ধতিসমূহ</h2>
                <div class="storage-methods">
                    <div class="method-card">
                        <div class="method-header">
                            <h3><i class="fas fa-home method-icon"></i>ঘরোয়া সংরক্ষণ</h3>
                        </div>
                        <div class="method-body">
                            <div class="method-info">
                                <h4><i class="fas fa-check-circle"></i>উপযুক্ত ফসল</h4>
                                <ul>
                                    <li>ধান (২-৩ মাস)</li>
                                    <li>গম (৩-৪ মাস)</li>
                                    <li>ডাল (৪-৫ মাস)</li>
                                    <li>পেঁয়াজ (২-৩ মাস)</li>
                                </ul>
                            </div>
                            <div class="method-info">
                                <h4><i class="fas fa-tools"></i>প্রয়োজনীয় উপকরণ</h4>
                                <ul>
                                    <li>মাটির মটকা/কলসি</li>
                                    <li>প্লাস্টিকের পাত্র</li>
                                    <li>চটের বস্তা</li>
                                    <li>নিমপাতা/হলুদ গুঁড়া</li>
                                </ul>
                            </div>
                            <div class="storage-duration">
                                সংরক্ষণকাল: ২-৫ মাস
                            </div>
                        </div>
                    </div>

                    <div class="method-card">
                        <div class="method-header">
                            <h3><i class="fas fa-warehouse method-icon"></i>গুদাম সংরক্ষণ</h3>
                        </div>
                        <div class="method-body">
                            <div class="method-info">
                                <h4><i class="fas fa-check-circle"></i>উপযুক্ত ফসল</h4>
                                <ul>
                                    <li>সব ধরনের শস্য</li>
                                    <li>বড় পরিমাণে সংরক্ষণ</li>
                                    <li>বাণিজ্যিক ব্যবহার</li>
                                    <li>দীর্ঘমেয়াদী সংরক্ষণ</li>
                                </ul>
                            </div>
                            <div class="method-info">
                                <h4><i class="fas fa-tools"></i>প্রয়োজনীয় সুবিধা</h4>
                                <ul>
                                    <li>বায়ু চলাচলের ব্যবস্থা</li>
                                    <li>আর্দ্রতা নিয়ন্ত্রণ</li>
                                    <li>পোকামাকড় নিয়ন্ত্রণ</li>
                                    <li>তাপমাত্রা নিয়ন্ত্রণ</li>
                                </ul>
                            </div>
                            <div class="storage-duration">
                                সংরক্ষণকাল: ৬-১২ মাস
                            </div>
                        </div>
                    </div>

                    <div class="method-card">
                        <div class="method-header">
                            <h3><i class="fas fa-snowflake method-icon"></i>ঠান্ডা সংরক্ষণ</h3>
                        </div>
                        <div class="method-body">
                            <div class="method-info">
                                <h4><i class="fas fa-check-circle"></i>উপযুক্ত ফসল</h4>
                                <ul>
                                    <li>সবজি ও ফল</li>
                                    <li>দুধ ও মাংস</li>
                                    <li>প্রক্রিয়াজাত খাবার</li>
                                    <li>বীজ সংরক্ষণ</li>
                                </ul>
                            </div>
                            <div class="method-info">
                                <h4><i class="fas fa-tools"></i>প্রয়োজনীয় যন্ত্র</h4>
                                <ul>
                                    <li>রেফ্রিজারেটর</li>
                                    <li>কোল্ড স্টোরেজ</li>
                                    <li>ফ্রিজার</li>
                                    <li>তাপমাত্রা নিয়ন্ত্রক</li>
                                </ul>
                            </div>
                            <div class="storage-duration">
                                সংরক্ষণকাল: দিন থেকে বছর
                            </div>
                        </div>
                    </div>

                    <div class="method-card">
                        <div class="method-header">
                            <h3><i class="fas fa-sun method-icon"></i>শুকানো সংরক্ষণ</h3>
                        </div>
                        <div class="method-body">
                            <div class="method-info">
                                <h4><i class="fas fa-check-circle"></i>উপযুক্ত ফসল</h4>
                                <ul>
                                    <li>ধান, গম, ভুট্টা</li>
                                    <li>ডাল জাতীয় ফসল</li>
                                    <li>মরিচ, হলুদ</li>
                                    <li>পেঁয়াজ, রসুন</li>
                                </ul>
                            </div>
                            <div class="method-info">
                                <h4><i class="fas fa-tools"></i>শুকানোর পদ্ধতি</h4>
                                <ul>
                                    <li>রোদে শুকানো</li>
                                    <li>হট এয়ার ড্রায়ার</li>
                                    <li>ছায়ায় শুকানো</li>
                                    <li>মেকানিক্যাল ড্রায়ার</li>
                                </ul>
                            </div>
                            <div class="storage-duration">
                                সংরক্ষণকাল: ৬-১২ মাস
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Crop-specific Storage -->
            <section class="section">
                <h2><i class="fas fa-seedling"></i> ফসল অনুযায়ী সংরক্ষণ</h2>
                <div class="crop-storage">
                    <div class="crop-card">
                        <h4><i class="fas fa-seedling crop-icon"></i>ধান</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">১২-১৪%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">২৫-৩০°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> ভালভাবে শুকিয়ে পরিষ্কার করুন। নিম পাতা মিশিয়ে বায়ুরোধী পাত্রে রাখুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ৮-১০ মাস</p>
                    </div>

                    <div class="crop-card">
                        <h4><i class="fas fa-carrot crop-icon"></i>আলু</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">৮৫-৯০%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">২-৪°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> মাটি পরিষ্কার করে ছায়ায় শুকান। কাটা বা ক্ষতিগ্রস্ত আলু আলাদা করুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ৩-৫ মাস</p>
                    </div>

                    <div class="crop-card">
                        <h4><i class="fas fa-apple-alt crop-icon"></i>পেঁয়াজ</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">৬৫-৭০%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">০-৪°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> ভালভাবে শুকিয়ে মুখ শক্ত করে বেঁধে রাখুন। বাতাস চলাচল নিশ্চিত করুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ৪-৬ মাস</p>
                    </div>

                    <div class="crop-card">
                        <h4><i class="fas fa-leaf crop-icon"></i>মরিচ</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">৮-১০%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">২৫-৩০°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> ভালভাবে রোদে শুকিয়ে বায়ুরোধী পাত্রে রাখুন। আর্দ্রতা থেকে দূরে রাখুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ৬-১২ মাস</p>
                    </div>

                    <div class="crop-card">
                        <h4><i class="fas fa-circle crop-icon"></i>টমেটো</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">৮৫-৯০%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">১২-১৫°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> কাঁচা অবস্থায় তুলে আস্তে আস্তে পাকান। পাকা টমেটো ফ্রিজে রাখুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ২-৪ সপ্তাহ</p>
                    </div>

                    <div class="crop-card">
                        <h4><i class="fas fa-seedling crop-icon"></i>ডাল</h4>
                        <div class="storage-conditions">
                            <div class="condition-box">
                                <div class="label">আর্দ্রতা</div>
                                <div class="value">১০-১২%</div>
                            </div>
                            <div class="condition-box">
                                <div class="label">তাপমাত্রা</div>
                                <div class="value">২৫-৩০°C</div>
                            </div>
                        </div>
                        <p><strong>প্রস্তুতি:</strong> ভাল করে শুকিয়ে নিম পাতা মিশিয়ে বায়ুরোধী পাত্রে সংরক্ষণ করুন।</p>
                        <p><strong>সংরক্ষণকাল:</strong> ১০-১২ মাস</p>
                    </div>
                </div>
            </section>

            <!-- Storage Loss Calculator -->
            <section class="section">
                <div class="calculator">
                    <h3><i class="fas fa-calculator"></i> সংরক্ষণ ক্ষতি হিসাবকারী</h3>
                    <div class="calc-grid">
                        <div class="input-group">
                            <label for="cropType">ফসলের ধরন</label>
                            <select id="cropType" onchange="calculateLoss()">
                                <option value="">ফসল নির্বাচন করুন</option>
                                <option value="rice">ধান</option>
                                <option value="wheat">গম</option>
                                <option value="potato">আলু</option>
                                <option value="onion">পেঁয়াজ</option>
                                <option value="tomato">টমেটো</option>
                                <option value="chili">মরিচ</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="initialQuantity">প্রাথমিক পরিমাণ (কেজি)</label>
                            <input type="number" id="initialQuantity" placeholder="পরিমাণ লিখুন" onchange="calculateLoss()">
                        </div>
                        <div class="input-group">
                            <label for="storageMethod">সংরক্ষণ পদ্ধতি</label>
                            <select id="storageMethod" onchange="calculateLoss()">
                                <option value="">পদ্ধতি নির্বাচন করুন</option>
                                <option value="traditional">ঐতিহ্যগত</option>
                                <option value="improved">উন্নত</option>
                                <option value="cold">কোল্ড স্টোরেজ</option>
                                <option value="warehouse">গুদাম</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="storagePeriod">সংরক্ষণকাল (মাস)</label>
                            <input type="number" id="storagePeriod" placeholder="মাস" onchange="calculateLoss()">
                        </div>
                    </div>
                    <button class="calc-button" onclick="calculateLoss()">ক্ষতির পরিমাণ হিসাব করুন</button>
                    <div id="lossResult" class="calc-result">
                        সব তথ্য পূরণ করে হিসাব করুন
                    </div>
                </div>
            </section>

            <!-- Common Problems -->
            <section class="section">
                <h2><i class="fas fa-exclamation-triangle"></i> সাধারণ সমস্যা ও সমাধান</h2>
                <div class="problem-solutions">
                    <div class="problem-card">
                        <div class="problem-header">
                            <h4><i class="fas fa-bug"></i>পোকামাকড়ের আক্রমণ</h4>
                        </div>
                        <div class="problem-body">
                            <div class="causes">
                                <h5><i class="fas fa-question-circle"></i>কারণ</h5>
                                <ul>
                                    <li>অতিরিক্ত আর্দ্রতা</li>
                                    <li>অপরিষ্কার সংরক্ষণ</li>
                                    <li>ফাটল বা ছিদ্র</li>
                                </ul>
                            </div>
                            <div class="solutions">
                                <h5><i class="fas fa-lightbulb"></i>সমাধান</h5>
                                <ul>
                                    <li>নিম পাতা/নিম তেল ব্যবহার</li>
                                    <li>ফসফিন ট্যাবলেট</li>
                                    <li>পরিষ্কার-পরিচ্ছন্নতা</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="problem-card">
                        <div class="problem-header">
                            <h4><i class="fas fa-tint"></i>আর্দ্রতা বৃদ্ধি</h4>
                        </div>
                        <div class="problem-body">
                            <div class="causes">
                                <h5><i class="fas fa-question-circle"></i>কারণ</h5>
                                <ul>
                                    <li>অপর্যাপ্ত শুকানো</li>
                                    <li>ভুল সংরক্ষণ স্থান</li>
                                    <li>বায়ু চলাচলের অভাব</li>
                                </ul>
                            </div>
                            <div class="solutions">
                                <h5><i class="fas fa-lightbulb"></i>সমাধান</h5>
                                <ul>
                                    <li>সিলিকা জেল ব্যবহার</li>
                                    <li>বায়ু চলাচল বৃদ্ধি</li>
                                    <li>পুনরায় শুকানো</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="problem-card">
                        <div class="problem-header">
                            <h4><i class="fas fa-bacteria"></i>ছত্রাক ও পচন</h4>
                        </div>
                        <div class="problem-body">
                            <div class="causes">
                                <h5><i class="fas fa-question-circle"></i>কারণ</h5>
                                <ul>
                                    <li>অতিরিক্ত আর্দ্রতা</li>
                                    <li>দূষিত সংরক্ষণ স্থান</li>
                                    <li>ক্ষতিগ্রস্ত ফসল</li>
                                </ul>
                            </div>
                            <div class="solutions">
                                <h5><i class="fas fa-lightbulb"></i>সমাধান</h5>
                                <ul>
                                    <li>ফরমালিন দিয়ে পরিষ্কার</li>
                                    <li>আর্দ্রতা নিয়ন্ত্রণ</li>
                                    <li>ক্ষতিগ্রস্ত অংশ সরানো</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="problem-card">
                        <div class="problem-header">
                            <h4><i class="fas fa-mouse"></i>ইঁদুরের আক্রমণ</h4>
                        </div>
                        <div class="problem-body">
                            <div class="causes">
                                <h5><i class="fas fa-question-circle"></i>কারণ</h5>
                                <ul>
                                    <li>অরক্ষিত সংরক্ষণ</li>
                                    <li>ফাঁক বা ছিদ্র</li>
                                    <li>খাবারের গন্ধ</li>
                                </ul>
                            </div>
                            <div class="solutions">
                                <h5><i class="fas fa-lightbulb"></i>সমাধান</h5>
                                <ul>
                                    <li>ইঁদুরের ফাঁদ</li>
                                    <li>জিং পাতার আবরণ</li>
                                    <li>বিড়াল পোষা</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Storage Tips -->
            <section class="section">
                <h2><i class="fas fa-lightbulb"></i> সংরক্ষণের কার্যকর টিপস</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <h4><i class="fas fa-sun tip-icon"></i>সঠিক শুকানো</h4>
                        <p>ফসল তোলার পর ভালভাবে রোদে শুকান। আর্দ্রতা ১২% এর নিচে নামিয়ে আনুন। একদিনে না শুকালে কয়েকদিন ধরে শুকান।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-broom tip-icon"></i>পরিষ্কার-পরিচ্ছন্নতা</h4>
                        <p>সংরক্ষণের আগে ফসল ভাল করে পরিষ্কার করুন। ভাঙা, পচা বা ক্ষতিগ্রস্ত অংশ আলাদা করুন। সংরক্ষণ স্থান জীবাণুমুক্ত করুন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-thermometer-half tip-icon"></i>তাপমাত্রা নিয়ন্ত্রণ</h4>
                        <p>প্রতিটি ফসলের জন্য নির্দিষ্ট তাপমাত্রা বজায় রাখুন। সবজির জন্য ঠান্ডা এবং শস্যের জন্য স্বাভাবিক তাপমাত্রা উপযুক্ত।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-wind tip-icon"></i>বায়ু চলাচল</h4>
                        <p>সংরক্ষণ স্থানে পর্যাপ্ত বায়ু চলাচলের ব্যবস্থা রাখুন। এতে আর্দ্রতা কমে এবং ছত্রাক জন্মায় না।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-eye tip-icon"></i>নিয়মিত পরিদর্শন</h4>
                        <p>সংরক্ষিত ফসল সপ্তাহে একবার পরীক্ষা করুন। পোকামাকড়, ছত্রাক বা পচনের চিহ্ন দেখলে সাথে সাথে ব্যবস্থা নিন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-shield-alt tip-icon"></i>প্রাকৃতিক সংরক্ষক</h4>
                        <p>নিম পাতা, হলুদ, শুকনো মরিচ ইত্যাদি প্রাকৃতিক সংরক্ষক হিসেবে ব্যবহার করুন। এগুলো পোকামাকড় তাড়ায় এবং নিরাপদ।</p>
                    </div>
                </div>
            </section>

            <!-- Warning -->
            <div class="warning-box">
                <div class="warning-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div>
                    <h4>গুরুত্বপূর্ণ সতর্কতা</h4>
                    <p><strong>রাসায়নিক সংরক্ষক ব্যবহারে সাবধানতা:</strong></p>
                    <p>• সবসময় প্রস্তুতকারকের নির্দেশনা মেনে চলুন</p>
                    <p>• নিরাপত্তা পোশাক ব্যবহার করুন</p>
                    <p>• খাবারের আগে ভাল করে পরিষ্কার করুন</p>
                    <p>• শিশুদের নাগালের বাইরে রাখুন</p>
                    <p>• মেয়াদ উত্তীর্ণ রাসায়নিক ব্যবহার করবেন না</p>
                </div>
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
                    ফসল সংরক্ষণ ও কার্যকর সংরক্ষণ পদ্ধতির বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/K3kLy8FfmSU" 
                        title="ফসল সংরক্ষণের কার্যকর পদ্ধতি"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    ফসল সংরক্ষণের সঠিক নিয়ম ও কৌশল সম্পর্কে বিস্তারিত জানুন। ক্ষতি কমিয়ে দীর্ঘ সময় ফসল সংরক্ষণের আধুনিক পদ্ধতি দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        function calculateLoss() {
            const cropType = document.getElementById('cropType').value;
            const initialQuantity = parseFloat(document.getElementById('initialQuantity').value);
            const storageMethod = document.getElementById('storageMethod').value;
            const storagePeriod = parseInt(document.getElementById('storagePeriod').value);
            const resultDiv = document.getElementById('lossResult');

            if (!cropType || !initialQuantity || !storageMethod || !storagePeriod) {
                resultDiv.innerHTML = 'সব তথ্য পূরণ করুন';
                return;
            }

            // Loss percentage per month for different crops and methods
            const lossRates = {
                rice: {
                    traditional: 2.5,
                    improved: 1.2,
                    cold: 0.3,
                    warehouse: 0.8
                },
                wheat: {
                    traditional: 2.0,
                    improved: 1.0,
                    cold: 0.2,
                    warehouse: 0.6
                },
                potato: {
                    traditional: 8.0,
                    improved: 4.0,
                    cold: 1.0,
                    warehouse: 5.0
                },
                onion: {
                    traditional: 6.0,
                    improved: 3.0,
                    cold: 0.8,
                    warehouse: 2.5
                },
                tomato: {
                    traditional: 15.0,
                    improved: 8.0,
                    cold: 2.0,
                    warehouse: 12.0
                },
                chili: {
                    traditional: 3.0,
                    improved: 1.5,
                    cold: 0.5,
                    warehouse: 1.0
                }
            };

            const monthlyLossRate = lossRates[cropType][storageMethod];
            const totalLossPercentage = monthlyLossRate * storagePeriod;
            const lossQuantity = (initialQuantity * totalLossPercentage / 100);
            const remainingQuantity = initialQuantity - lossQuantity;

            const cropNames = {
                rice: 'ধান',
                wheat: 'গম',
                potato: 'আলু',
                onion: 'পেঁয়াজ',
                tomato: 'টমেটো',
                chili: 'মরিচ'
            };

            const methodNames = {
                traditional: 'ঐতিহ্যগত',
                improved: 'উন্নত',
                cold: 'কোল্ড স্টোরেজ',
                warehouse: 'গুদাম'
            };

            resultDiv.innerHTML = `
                <div>
                    <h4>সংরক্ষণ ক্ষতির হিসাব - ${cropNames[cropType]}</h4>
                    <p><strong>প্রাথমিক পরিমাণ:</strong> ${initialQuantity} কেজি</p>
                    <p><strong>সংরক্ষণ পদ্ধতি:</strong> ${methodNames[storageMethod]}</p>
                    <p><strong>সংরক্ষণকাল:</strong> ${storagePeriod} মাস</p>
                    <p><strong>মাসিক ক্ষতির হার:</strong> ${monthlyLossRate}%</p>
                    <p><strong>মোট ক্ষতি:</strong> ${lossQuantity.toFixed(1)} কেজি (${totalLossPercentage.toFixed(1)}%)</p>
                    <p><strong>অবশিষ্ট পরিমাণ:</strong> ${remainingQuantity.toFixed(1)} কেজি</p>
                </div>
            `;
        }
    </script>
</body>
</html>
