<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সেচ ব্যবস্থাপনা ও পরিচালনা | কৃষক পোর্টাল</title>
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
            --blue-accent: #3498db;
            --orange-accent: #f39c12;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
            background: linear-gradient(135deg, var(--blue-accent), #2980b9);
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

        /* Irrigation Systems Grid */
        .systems-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .system-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .system-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .system-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .system-card .icon {
            font-size: 1.8rem;
            color: var(--blue-accent);
        }

        .system-card p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .pros-cons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }

        .pros, .cons {
            padding: 15px;
            border-radius: 8px;
        }

        .pros {
            background: #e8f5e8;
            border-left: 4px solid #27ae60;
        }

        .cons {
            background: #fdf2f2;
            border-left: 4px solid #e74c3c;
        }

        .pros h4, .cons h4 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .pros ul, .cons ul {
            list-style: none;
            padding: 0;
        }

        .pros ul li, .cons ul li {
            padding: 3px 0;
            font-size: 0.9rem;
        }

        .pros ul li::before {
            content: "✓";
            color: #27ae60;
            font-weight: bold;
            margin-right: 8px;
        }

        .cons ul li::before {
            content: "✗";
            color: #e74c3c;
            font-weight: bold;
            margin-right: 8px;
        }

        /* Water Calculation Tool */
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
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            font-weight: 600;
            border: 2px solid var(--border-light);
        }

        /* Management Tips */
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
            border-left: 5px solid var(--primary-green);
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

        .tip-card .tip-icon {
            color: var(--primary-green);
            font-size: 1.4rem;
        }

        /* Scheduling Table */
        .schedule-table {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 40px;
        }

        .schedule-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .schedule-table th {
            background: var(--primary-green);
            color: white;
            padding: 15px;
            font-weight: 600;
            text-align: left;
        }

        .schedule-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        .schedule-table tr:nth-child(even) {
            background: #f8f9fa;
        }

        .schedule-table tr:hover {
            background: var(--light-green);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .systems-grid { grid-template-columns: 1fr; }
            .calc-grid { grid-template-columns: 1fr; }
            .calculator { padding: 25px; }
            .pros-cons { grid-template-columns: 1fr; }
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
                    <i class="fas fa-water"></i>
                </div>
                <h1>সেচ ব্যবস্থাপনা ও পরিচালনা</h1>
                <p>কার্যকর সেচ ব্যবস্থাপনার মাধ্যমে পানির সর্বোচ্চ ব্যবহার নিশ্চিত করুন এবং ফসলের উৎপাদনশীলতা বৃদ্ধি করুন</p>
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

            <!-- Irrigation Content continues here -->
            <!-- Irrigation Systems -->
            <section class="section">
                <h2><i class="fas fa-tint"></i> সেচ ব্যবস্থার প্রকারভেদ</h2>
                <div class="systems-grid">
                    <div class="system-card">
                        <h3><i class="fas fa-shower icon"></i>ফোয়ারা সেচ (Sprinkler)</h3>
                        <p>পানিকে ছোট ছোট ফোঁটার আকারে উদ্ভিদের উপর ছড়িয়ে দেওয়ার পদ্ধতি। এটি বৃষ্টির মত কাজ করে।</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                <ul>
                                    <li>পানি সাশ্রয়ী</li>
                                    <li>সার সহজে দেওয়া যায়</li>
                                    <li>সব ধরনের মাটিতে ব্যবহার</li>
                                    <li>শ্রমিকের প্রয়োজন কম</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                <ul>
                                    <li>প্রাথমিক খরচ বেশি</li>
                                    <li>বিদ্যুতের প্রয়োজন</li>
                                    <li>রক্ষণাবেক্ষণ খরচ</li>
                                    <li>বাতাসে প্রভাবিত</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="system-card">
                        <h3><i class="fas fa-eye-dropper icon"></i>ড্রিপ সেচ</h3>
                        <p>গাছের গোড়ায় ধীরে ধীরে ফোঁটা ফোঁটা পানি সরবরাহ করার পদ্ধতি। অত্যন্ত কার্যকর ও পানি সাশ্রয়ী।</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                <ul>
                                    <li>সর্বোচ্চ পানি সাশ্রয়</li>
                                    <li>সারের কার্যকারিতা বেশি</li>
                                    <li>আগাছা কম</li>
                                    <li>রোগবালাই কম</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                <ul>
                                    <li>স্থাপনা খরচ বেশি</li>
                                    <li>নিয়মিত রক্ষণাবেক্ষণ</li>
                                    <li>পানি ফিল্টার প্রয়োজন</li>
                                    <li>প্রযুক্তিগত জ্ঞান দরকার</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="system-card">
                        <h3><i class="fas fa-water icon"></i>বন্যা সেচ</h3>
                        <p>পুরো জমিতে পানি ভরে দেওয়ার পুরাতন পদ্ধতি। ধান চাষে বেশি ব্যবহৃত হয়।</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                <ul>
                                    <li>সহজ প্রয়োগ</li>
                                    <li>কম খরচ</li>
                                    <li>বড় এলাকায় উপযুক্ত</li>
                                    <li>প্রযুক্তি সহজ</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                <ul>
                                    <li>পানির অপচয় বেশি</li>
                                    <li>মাটির লবণাক্ততা</li>
                                    <li>পুষ্টি ধুয়ে যায়</li>
                                    <li>রোগবালাই বেশি</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="system-card">
                        <h3><i class="fas fa-stream icon"></i>নালী সেচ</h3>
                        <p>সারি সারি নালী তৈরি করে পানি সরবরাহ করার পদ্ধতি। সবজি চাষে বেশি ব্যবহৃত হয়।</p>
                        <div class="pros-cons">
                            <div class="pros">
                                <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                <ul>
                                    <li>পানি নিয়ন্ত্রণ সহজ</li>
                                    <li>মাঝারি খরচ</li>
                                    <li>সার প্রয়োগ সহজ</li>
                                    <li>আগাছা নিয়ন্ত্রণ</li>
                                </ul>
                            </div>
                            <div class="cons">
                                <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                <ul>
                                    <li>মাটির ভাঙন</li>
                                    <li>শ্রমিক বেশি প্রয়োজন</li>
                                    <li>সমতল জমি দরকার</li>
                                    <li>পানির কিছু অপচয়</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Water Requirement Calculator -->
            <section class="section">
                <div class="calculator">
                    <h3><i class="fas fa-calculator"></i> পানির প্রয়োজনীয়তা ক্যালকুলেটর</h3>
                    <div class="calc-grid">
                        <div class="input-group">
                            <label for="cropType">ফসলের ধরন</label>
                            <select id="cropType" onchange="calculateWater()">
                                <option value="">ফসল নির্বাচন করুন</option>
                                <option value="rice">ধান</option>
                                <option value="wheat">গম</option>
                                <option value="maize">ভুট্টা</option>
                                <option value="potato">আলু</option>
                                <option value="tomato">টমেটো</option>
                                <option value="onion">পেঁয়াজ</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="landArea">জমির পরিমাণ (শতাংশ)</label>
                            <input type="number" id="landArea" placeholder="জমির পরিমাণ লিখুন" onchange="calculateWater()">
                        </div>
                        <div class="input-group">
                            <label for="season">মৌসুম</label>
                            <select id="season" onchange="calculateWater()">
                                <option value="">মৌসুম নির্বাচন করুন</option>
                                <option value="winter">শীত</option>
                                <option value="summer">গ্রীষ্ম</option>
                                <option value="monsoon">বর্ষা</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="soilType">মাটির ধরন</label>
                            <select id="soilType" onchange="calculateWater()">
                                <option value="">মাটি নির্বাচন করুন</option>
                                <option value="clay">এঁটেল মাটি</option>
                                <option value="loam">দোআঁশ মাটি</option>
                                <option value="sandy">বেলে মাটি</option>
                            </select>
                        </div>
                    </div>
                    <button class="calc-button" onclick="calculateWater()">পানির চাহিদা হিসাব করুন</button>
                    <div id="waterResult" class="calc-result">
                        সব তথ্য পূরণ করে হিসাব করুন
                    </div>
                </div>
            </section>

            <!-- Irrigation Schedule -->
            <section class="section">
                <h2><i class="fas fa-calendar-alt"></i> সেচের সময়সূচী</h2>
                <div class="schedule-table">
                    <table>
                        <thead>
                            <tr>
                                <th>ফসল</th>
                                <th>রোপণের পর</th>
                                <th>সেচের ফ্রিকোয়েন্সি</th>
                                <th>সেচের পরিমাণ</th>
                                <th>বিশেষ সময়</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>ধান</strong></td>
                                <td>১৫-২০ দিন</td>
                                <td>৭-১০ দিন পর পর</td>
                                <td>৫-৭ সেমি</td>
                                <td>ফুল আসার সময় বেশি</td>
                            </tr>
                            <tr>
                                <td><strong>গম</strong></td>
                                <td>২০-২৫ দিন</td>
                                <td>১৫-২০ দিন পর পর</td>
                                <td>৪-৫ সেমি</td>
                                <td>দানা ভর্তির সময়</td>
                            </tr>
                            <tr>
                                <td><strong>ভুট্টা</strong></td>
                                <td>১৫-২০ দিন</td>
                                <td>১০-১৫ দিন পর পর</td>
                                <td>৪-৬ সেমি</td>
                                <td>মোচা আসার সময়</td>
                            </tr>
                            <tr>
                                <td><strong>আলু</strong></td>
                                <td>২০-২৫ দিন</td>
                                <td>১০-১২ দিন পর পর</td>
                                <td>৩-৪ সেমি</td>
                                <td>কন্দ বড় হওয়ার সময়</td>
                            </tr>
                            <tr>
                                <td><strong>টমেটো</strong></td>
                                <td>১০-১৫ দিন</td>
                                <td>৫-৭ দিন পর পর</td>
                                <td>২-৩ সেমি</td>
                                <td>ফল ধরার সময় নিয়মিত</td>
                            </tr>
                            <tr>
                                <td><strong>পেঁয়াজ</strong></td>
                                <td>১৫-২০ দিন</td>
                                <td>৮-১০ দিন পর পর</td>
                                <td>২-৩ সেমি</td>
                                <td>কন্দ তৈরির সময়</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Management Tips -->
            <section class="section">
                <h2><i class="fas fa-lightbulb"></i> সেচ ব্যবস্থাপনার টিপস</h2>
                <div class="tips-grid">
                    <div class="tip-card">
                        <h4><i class="fas fa-clock tip-icon"></i>সঠিক সময়</h4>
                        <p>সকাল বেলা (৬-৮টা) বা সন্ধ্যায় (৪-৬টা) সেচ দিন। দুপুরে সেচ দেবেন না কারণ পানি দ্রুত বাষ্পীভূত হয়ে যায়।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-thermometer-half tip-icon"></i>মাটির আর্দ্রতা পরীক্ষা</h4>
                        <p>সেচ দেওয়ার আগে মাটিতে আঙুল ঢুকিয়ে দেখুন। ২-৩ ইঞ্চি গভীরে মাটি শুকনো থাকলে সেচের প্রয়োজন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-tint tip-icon"></i>পানির গুণমান</h4>
                        <p>পরিচ্ছন্ন পানি ব্যবহার করুন। লবণাক্ত বা দূষিত পানি ফসলের ক্ষতি করতে পারে। EC মাত্রা ২ এর নিচে রাখুন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-save tip-icon"></i>পানি সাশ্রয়</h4>
                        <p>মালচিং ব্যবহার করে মাটির আর্দ্রতা ধরে রাখুন। খড়, পলিথিন বা শুকনো পাতা ব্যবহার করতে পারেন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-tools tip-icon"></i>যন্ত্রপাতি রক্ষণাবেক্ষণ</h4>
                        <p>নিয়মিত স্প্রিংকলার, পাইপ ও পাম্প পরিষ্কার করুন। ফিল্টার পরিবর্তন করুন এবং ছিদ্র মেরামত করুন।</p>
                    </div>
                    <div class="tip-card">
                        <h4><i class="fas fa-chart-line tip-icon"></i>রেকর্ড রাখা</h4>
                        <p>কত পানি, কখন দিয়েছেন তার রেকর্ড রাখুন। এতে পরবর্তী মৌসুমে পরিকল্পনা করতে সুবিধা হবে।</p>
                    </div>
                </div>
            </section>
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
                    সেচ ব্যবস্থাপনা ও পানির সাশ্রয়ী ব্যবহারের বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/5b0PTU3mWQw" 
                        title="সেচ ব্যবস্থাপনা ও পরিচালনা - Irrigation Management"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    এই ভিডিওতে বিভিন্ন সেচ পদ্ধতি, পানির সাশ্রয়ী ব্যবহার এবং আধুনিক সেচ প্রযুক্তির ব্যবহার সম্পর্কে বিস্তারিত দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        function calculateWater() {
            const cropType = document.getElementById('cropType').value;
            const landArea = parseFloat(document.getElementById('landArea').value);
            const season = document.getElementById('season').value;
            const soilType = document.getElementById('soilType').value;
            const resultDiv = document.getElementById('waterResult');

            if (!cropType || !landArea || !season || !soilType) {
                resultDiv.innerHTML = 'সব তথ্য পূরণ করুন';
                return;
            }

            // Water requirement in liters per decimal per day
            const cropWaterNeeds = {
                rice: { winter: 25, summer: 35, monsoon: 15 },
                wheat: { winter: 15, summer: 25, monsoon: 10 },
                maize: { winter: 20, summer: 30, monsoon: 12 },
                potato: { winter: 18, summer: 28, monsoon: 10 },
                tomato: { winter: 22, summer: 32, monsoon: 15 },
                onion: { winter: 16, summer: 26, monsoon: 12 }
            };

            // Soil type multiplier
            const soilMultiplier = {
                clay: 0.8,    // Clay retains water better
                loam: 1.0,    // Standard
                sandy: 1.3    // Sandy soil needs more water
            };

            const baseWater = cropWaterNeeds[cropType][season];
            const adjustedWater = baseWater * soilMultiplier[soilType];
            
            // Convert decimal to shotangsho (1 shotangsho = 40.46 decimal)
            const waterPerDay = (adjustedWater * landArea * 40.46).toFixed(0);
            const waterPerWeek = (waterPerDay * 7).toFixed(0);

            const cropNames = {
                rice: 'ধান',
                wheat: 'গম', 
                maize: 'ভুট্টা',
                potato: 'আলু',
                tomato: 'টমেটো',
                onion: 'পেঁয়াজ'
            };

            const seasonNames = {
                winter: 'শীত',
                summer: 'গ্রীষ্ম',
                monsoon: 'বর্ষা'
            };

            const soilNames = {
                clay: 'এঁটেল',
                loam: 'দোআঁশ',
                sandy: 'বেলে'
            };

            resultDiv.innerHTML = `
                <div>
                    <h4>${cropNames[cropType]} চাষের জন্য পানির চাহিদা:</h4>
                    <p><strong>প্রতিদিন:</strong> ${waterPerDay} লিটার</p>
                    <p><strong>সপ্তাহে:</strong> ${waterPerWeek} লিটার</p>
                    <p><small>জমির পরিমাণ: ${landArea} শতাংশ | মৌসুম: ${seasonNames[season]} | মাটি: ${soilNames[soilType]}</small></p>
                </div>
            `;
        }
    </script>
</body>
</html>
