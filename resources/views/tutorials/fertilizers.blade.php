<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>জৈব বনাম রাসায়নিক সার | কৃষক পোর্টাল</title>
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
            --organic-green: #27ae60;
            --chemical-blue: #3498db;
            --orange-accent: #f39c12;
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
            background: linear-gradient(135deg, var(--organic-green), var(--chemical-blue));
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

        /* Comparison Cards */
        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 50px;
        }

        .fertilizer-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            overflow: hidden;
            border: 2px solid var(--border-light);
        }

        .card-header {
            padding: 30px;
            text-align: center;
            color: white;
        }

        .organic-header {
            background: linear-gradient(135deg, var(--organic-green), #2ecc71);
        }

        .chemical-header {
            background: linear-gradient(135deg, var(--chemical-blue), #5dade2);
        }

        .card-header h3 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .card-header .icon {
            font-size: 2.5rem;
        }

        .card-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .card-body {
            padding: 30px;
        }

        .pros-cons-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 25px;
        }

        .pros, .cons {
            padding: 20px;
            border-radius: 10px;
        }

        .pros {
            background: #e8f5e8;
            border-left: 4px solid var(--organic-green);
        }

        .cons {
            background: #fdf2f2;
            border-left: 4px solid #e74c3c;
        }

        .pros h4, .cons h4 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .pros ul, .cons ul {
            list-style: none;
            padding: 0;
        }

        .pros ul li, .cons ul li {
            padding: 5px 0;
            font-size: 0.95rem;
            position: relative;
            padding-left: 20px;
        }

        .pros ul li::before {
            content: "✓";
            color: var(--organic-green);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .cons ul li::before {
            content: "✗";
            color: #e74c3c;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Fertilizer Types */
        .fertilizer-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .type-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--primary-green);
        }

        .type-card h4 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .type-icon {
            color: var(--primary-green);
            font-size: 1.5rem;
        }

        .nutrient-info {
            background: var(--light-green);
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }

        .nutrient-info h5 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* Application Guide */
        .application-guide {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .guide-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .guide-step {
            text-align: center;
            padding: 20px;
        }

        .guide-step .step-number {
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

        .guide-step h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 10px;
        }

        /* Dosage Calculator */
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

        /* Timing Chart */
        .timing-chart {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 40px;
        }

        .timing-chart table {
            width: 100%;
            border-collapse: collapse;
        }

        .timing-chart th {
            background: var(--primary-green);
            color: white;
            padding: 15px;
            font-weight: 600;
            text-align: left;
        }

        .timing-chart td {
            padding: 12px 15px;
            border-bottom: 1px solid #eee;
        }

        .timing-chart tr:nth-child(even) {
            background: #f8f9fa;
        }

        .timing-chart tr:hover {
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .comparison-grid { grid-template-columns: 1fr; }
            .fertilizer-types { grid-template-columns: 1fr; }
            .calc-grid { grid-template-columns: 1fr; }
            .calculator { padding: 25px; }
            .pros-cons-grid { grid-template-columns: 1fr; }
            .guide-grid { grid-template-columns: 1fr; }
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
                    <i class="fas fa-leaf"></i>
                </div>
                <h1>জৈব বনাম রাসায়নিক সার</h1>
                <p>টেকসই কৃষির জন্য সঠিক সার নির্বাচন এবং প্রয়োগের পদ্ধতি জানুন</p>
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

            <!-- Comparison Section -->
            <section class="section">
                <h2><i class="fas fa-balance-scale"></i> জৈব ও রাসায়নিক সারের তুলনা</h2>
                <div class="comparison-grid">
                    <div class="fertilizer-card">
                        <div class="card-header organic-header">
                            <h3><i class="fas fa-seedling icon"></i>জৈব সার</h3>
                            <p>প্রাকৃতিক উৎস থেকে তৈরি পরিবেশ বান্ধব সার</p>
                        </div>
                        <div class="card-body">
                            <div class="pros-cons-grid">
                                <div class="pros">
                                    <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                    <ul>
                                        <li>মাটির গঠন উন্নত করে</li>
                                        <li>দীর্ঘমেয়াদী উৎপাদনশীলতা</li>
                                        <li>পরিবেশ বান্ধব</li>
                                        <li>মাটির জীববৈচিত্র্য বৃদ্ধি</li>
                                        <li>পানি ধারণ ক্ষমতা বৃদ্ধি</li>
                                        <li>কম খরচ (নিজে তৈরি)</li>
                                    </ul>
                                </div>
                                <div class="cons">
                                    <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                    <ul>
                                        <li>ধীর কাজ করে</li>
                                        <li>বেশি পরিমাণ প্রয়োজন</li>
                                        <li>পুষ্টির মাত্রা কম</li>
                                        <li>তৈরিতে সময় লাগে</li>
                                        <li>পরিবহন কষ্টকর</li>
                                        <li>গুণমান পরিবর্তনশীল</li>
                                    </ul>
                                </div>
                            </div>
                            <p><strong>উদাহরণ:</strong> গোবর, কম্পোস্ট, কেঁচো সার, হাড় গুঁড়া, নিম খৈল</p>
                        </div>
                    </div>

                    <div class="fertilizer-card">
                        <div class="card-header chemical-header">
                            <h3><i class="fas fa-flask icon"></i>রাসায়নিক সার</h3>
                            <p>কারখানায় তৈরি দ্রুত কাজকারী সার</p>
                        </div>
                        <div class="card-body">
                            <div class="pros-cons-grid">
                                <div class="pros">
                                    <h4><i class="fas fa-thumbs-up"></i>সুবিধা</h4>
                                    <ul>
                                        <li>দ্রুত ফলাফল</li>
                                        <li>নির্দিষ্ট পুষ্টি উপাদান</li>
                                        <li>কম পরিমাণে কার্যকর</li>
                                        <li>সহজে পরিবহন</li>
                                        <li>দীর্ঘ সংরক্ষণ</li>
                                        <li>গুণমান নিয়ন্ত্রিত</li>
                                    </ul>
                                </div>
                                <div class="cons">
                                    <h4><i class="fas fa-thumbs-down"></i>অসুবিধা</h4>
                                    <ul>
                                        <li>মাটির ক্ষতি</li>
                                        <li>পরিবেশ দূষণ</li>
                                        <li>দামী</li>
                                        <li>মাটির অম্লতা বৃদ্ধি</li>
                                        <li>উপকারী জীবাণু কমে</li>
                                        <li>নির্ভরশীলতা বৃদ্ধি</li>
                                    </ul>
                                </div>
                            </div>
                            <p><strong>উদাহরণ:</strong> ইউরিয়া, TSP, MoP, DAP, NPK মিশ্রণ</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Organic Fertilizer Types -->
            <section class="section">
                <h2><i class="fas fa-leaf"></i> জৈব সারের প্রকারভেদ</h2>
                <div class="fertilizer-types">
                    <div class="type-card">
                        <h4><i class="fas fa-horse type-icon"></i>গোবর সার</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ০.৫-০.৬%, ফসফরাস: ০.২-০.৩%, পটাশিয়াম: ০.৫-০.৬%</p>
                        </div>
                        <p>গরু, মহিষ, ছাগলের গোবর পচিয়ে তৈরি। সবচেয়ে সাধারণ ও কার্যকর জৈব সার। মাটির গঠন উন্নতিতে অত্যন্ত কার্যকর।</p>
                        <p><strong>প্রয়োগ:</strong> প্রতি শতাংশে ৮-১০ কেজি</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-recycle type-icon"></i>কম্পোস্ট সার</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ১-২%, ফসফরাস: ০.৫-১%, পটাশিয়াম: ১-২%</p>
                        </div>
                        <p>রান্নাঘরের ছোবড়া, পাতা, ঘাস পচিয়ে তৈরি। ঘরেই তৈরি করা যায় এবং খুবই পুষ্টিকর। মাটির জৈব পদার্থ বৃদ্ধি করে।</p>
                        <p><strong>প্রয়োগ:</strong> প্রতি শতাংশে ৫-৮ কেজি</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-worm type-icon"></i>কেঁচো সার (ভার্মি কম্পোস্ট)</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ১.৫-২.৫%, ফসফরাস: ১-২%, পটাশিয়াম: ১.৫-২%</p>
                        </div>
                        <p>কেঁচো দিয়ে জৈব বর্জ্য পচিয়ে তৈরি সর্বোত্তম জৈব সার। সবচেয়ে পুষ্টিকর এবং গাছের বৃদ্ধিতে অত্যন্ত কার্যকর।</p>
                        <p><strong>প্রয়োগ:</strong> প্রতি শতাংশে ৩-৫ কেজি</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-fish type-icon"></i>হাড় গুঁড়া</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>ফসফরাস: ১২-১৫%, ক্যালসিয়াম: ২০-২৫%, নাইট্রোজেন: ৩-৫%</p>
                        </div>
                        <p>গরু বা মাছের হাড় পিষে তৈরি। ফসফরাসের অতুলনীয় উৎস। ফল ও ফুলের জন্য খুবই উপকারী।</p>
                        <p><strong>প্রয়োগ:</strong> প্রতি গাছে ৫০-১০০ গ্রাম</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-seedling type-icon"></i>নিম খৈল</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ৫-৬%, ফসফরাস: ১-২%, পটাশিয়াম: ১-২%</p>
                        </div>
                        <p>নিম বীজ থেকে তেল বের করার পর যা অবশিষ্ট থাকে। পুষ্টির পাশাপাশি পোকামাকড় তাড়ানোর কাজও করে।</p>
                        <p><strong>প্রয়োগ:</strong> প্রতি শতাংশে ২-৩ কেজি</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-leaf type-icon"></i>সবুজ সার</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ০.৪-০.৮%, জৈব পদার্থ: ৮০-৮৫%</p>
                        </div>
                        <p>শর্ষে, কলাই, সরিষা ইত্যাদি গাছ কাঁচা অবস্থায় মাটিতে পুঁতে দেওয়া। নাইট্রোজেন ও জৈব পদার্থের ভাল উৎস।</p>
                        <p><strong>প্রয়োগ:</strong> ফুল আসার আগেই মাটিতে মিশিয়ে দিন</p>
                    </div>
                </div>
            </section>

            <!-- Chemical Fertilizer Types -->
            <section class="section">
                <h2><i class="fas fa-flask"></i> রাসায়নিক সারের প্রকারভেদ</h2>
                <div class="fertilizer-types">
                    <div class="type-card">
                        <h4><i class="fas fa-circle type-icon"></i>ইউরিয়া</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ৪৬%</p>
                        </div>
                        <p>নাইট্রোজেনের প্রধান উৎস। পাতা ও কান্ডের বৃদ্ধির জন্য অপরিহার্য। গাছের সবুজ রং বৃদ্ধি করে।</p>
                        <p><strong>প্রয়োগ:</strong> চারা রোপণের ১৫ দিন পর থেকে</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-square type-icon"></i>TSP (Triple Super Phosphate)</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>ফসফরাস: ৪৬%</p>
                        </div>
                        <p>ফসফরাসের প্রধান উৎস। মূল ও ফলের বৃদ্ধিতে সহায়ক। ফুল ও ফল ধারণ বৃদ্ধি করে।</p>
                        <p><strong>প্রয়োগ:</strong> জমি তৈরির সময়</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-diamond type-icon"></i>MoP (Muriate of Potash)</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>পটাশিয়াম: ৬০%</p>
                        </div>
                        <p>পটাশিয়ামের প্রধান উৎস। রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে। ফলের গুণমান উন্নত করে।</p>
                        <p><strong>প্রয়োগ:</strong> ফুল আসার সময়</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-star type-icon"></i>DAP (Diammonium Phosphate)</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>নাইট্রোজেন: ১৮%, ফসফরাস: ৪৬%</p>
                        </div>
                        <p>নাইট্রোজেন ও ফসফরাসের সমন্বিত সার। চারা রোপণের সময় ব্যবহার করা হয়। দ্রুত কার্যকর।</p>
                        <p><strong>প্রয়োগ:</strong> বীজ বপনের সময়</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-cubes type-icon"></i>NPK মিশ্রণ</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>N:P:K = ২০:২০:২০ বা ১৬:২০:০ বা অন্য অনুপাত</p>
                        </div>
                        <p>তিনটি প্রধান পুষ্টি উপাদানের সমন্বয়। বিভিন্ন অনুপাতে পাওয়া যায়। ব্যবহার সহজ।</p>
                        <p><strong>প্রয়োগ:</strong> ফসলের চাহিদা অনুযায়ী</p>
                    </div>

                    <div class="type-card">
                        <h4><i class="fas fa-tint type-icon"></i>তরল সার</h4>
                        <div class="nutrient-info">
                            <h5>পুষ্টি উপাদান:</h5>
                            <p>বিভিন্ন অনুপাতে NPK + মাইক্রো নিউট্রিয়েন্ট</p>
                        </div>
                        <p>দ্রুত শোষণযোগ্য তরল সার। পাতায় স্প্রে করা যায়। তাৎক্ষণিক ফলাফল দেয়।</p>
                        <p><strong>প্রয়োগ:</strong> পাতায় স্প্রে বা মূলে প্রয়োগ</p>
                    </div>
                </div>
            </section>

            <!-- Fertilizer Calculator -->
            <section class="section">
                <div class="calculator">
                    <h3><i class="fas fa-calculator"></i> সারের মাত্রা নির্ণয়কারী</h3>
                    <div class="calc-grid">
                        <div class="input-group">
                            <label for="cropSelect">ফসলের ধরন</label>
                            <select id="cropSelect" onchange="calculateFertilizer()">
                                <option value="">ফসল নির্বাচন করুন</option>
                                <option value="rice">ধান</option>
                                <option value="wheat">গম</option>
                                <option value="maize">ভুট্টা</option>
                                <option value="potato">আলু</option>
                                <option value="tomato">টমেটো</option>
                                <option value="cabbage">বাঁধাকপি</option>
                                <option value="onion">পেঁয়াজ</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="landSize">জমির পরিমাণ (শতাংশ)</label>
                            <input type="number" id="landSize" placeholder="জমির পরিমাণ" onchange="calculateFertilizer()">
                        </div>
                        <div class="input-group">
                            <label for="fertilizerType">সারের ধরন</label>
                            <select id="fertilizerType" onchange="calculateFertilizer()">
                                <option value="">সার নির্বাচন করুন</option>
                                <option value="organic">জৈব সার</option>
                                <option value="chemical">রাসায়নিক সার</option>
                                <option value="mixed">মিশ্রিত</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="soilCondition">মাটির অবস্থা</label>
                            <select id="soilCondition" onchange="calculateFertilizer()">
                                <option value="">মাটির অবস্থা</option>
                                <option value="fertile">উর্বর</option>
                                <option value="medium">মাঝারি</option>
                                <option value="poor">দুর্বল</option>
                            </select>
                        </div>
                    </div>
                    <button class="calc-button" onclick="calculateFertilizer()">সারের মাত্রা হিসাব করুন</button>
                    <div id="fertilizerResult" class="calc-result">
                        সব তথ্য পূরণ করে হিসাব করুন
                    </div>
                </div>
            </section>

            <!-- Application Guide -->
            <section class="section">
                <h2><i class="fas fa-hand-holding-seedling"></i> সার প্রয়োগের পদ্ধতি</h2>
                <div class="application-guide">
                    <div class="guide-grid">
                        <div class="guide-step">
                            <div class="step-number">১</div>
                            <h4>মাটি পরীক্ষা</h4>
                            <p>প্রথমে মাটির pH, জৈব পদার্থ ও পুষ্টি উপাদানের পরিমাণ পরীক্ষা করুন</p>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">২</div>
                            <h4>সঠিক সময়</h4>
                            <p>জমি তৈরির সময় জৈব সার এবং বপনের ১৫-২০ দিন পর রাসায়নিক সার প্রয়োগ করুন</p>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">৩</div>
                            <h4>সঠিক মাত্রা</h4>
                            <p>ফসলের চাহিদা ও মাটির অবস্থা অনুযায়ী সঠিক মাত্রায় সার প্রয়োগ করুন</p>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">৪</div>
                            <h4>ভাল মিশ্রণ</h4>
                            <p>সার প্রয়োগের পর মাটিতে ভালভাবে মিশিয়ে দিন এবং পানি দিন</p>
                        </div>
                        <div class="guide-step">
                            <div class="step-number">৫</div>
                            <h4>নিয়মিত পর্যবেক্ষণ</h4>
                            <p>গাছের বৃদ্ধি ও স্বাস্থ্য নিয়মিত পর্যবেক্ষণ করুন এবং প্রয়োজনে সার দিন</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Application Timing -->
            <section class="section">
                <h2><i class="fas fa-calendar-alt"></i> সার প্রয়োগের সময়সূচী</h2>
                <div class="timing-chart">
                    <table>
                        <thead>
                            <tr>
                                <th>ফসল</th>
                                <th>জৈব সার</th>
                                <th>প্রথম কিস্তি</th>
                                <th>দ্বিতীয় কিস্তি</th>
                                <th>তৃতীয় কিস্তি</th>
                                <th>বিশেষ পরামর্শ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>ধান</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>চারা রোপণের ১৫ দিন পর</td>
                                <td>কুশি বের হওয়ার সময়</td>
                                <td>ফুল আসার আগে</td>
                                <td>ইউরিয়া কয়েক কিস্তিতে প্রয়োগ করুন</td>
                            </tr>
                            <tr>
                                <td><strong>গম</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>বপনের ২০-২৫ দিন পর</td>
                                <td>কুশি আসার সময়</td>
                                <td>ফুল আসার আগে</td>
                                <td>শুকনো মৌসুমে বেশি পানির সাথে দিন</td>
                            </tr>
                            <tr>
                                <td><strong>ভুট্টা</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>বপনের ২০ দিন পর</td>
                                <td>৪০-৪৫ দিন পর</td>
                                <td>মোচা আসার সময়</td>
                                <td>দ্রুত বৃদ্ধির জন্য নাইট্রোজেন বেশি প্রয়োজন</td>
                            </tr>
                            <tr>
                                <td><strong>আলু</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>রোপণের ২৫ দিন পর</td>
                                <td>৫০ দিন পর মাটি তুলে</td>
                                <td>-</td>
                                <td>কন্দ তৈরির সময় পটাশিয়াম বেশি দিন</td>
                            </tr>
                            <tr>
                                <td><strong>টমেটো</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>চারা রোপণের ১৫ দিন পর</td>
                                <td>ফুল আসার সময়</td>
                                <td>ফল ধরার সময়</td>
                                <td>তরল সার পাতায় স্প্রে করা যায়</td>
                            </tr>
                            <tr>
                                <td><strong>বাঁধাকপি</strong></td>
                                <td>জমি তৈরির সময়</td>
                                <td>রোপণের ২০ দিন পর</td>
                                <td>কপি বাঁধার শুরুতে</td>
                                <td>-</td>
                                <td>নাইট্রোজেন ও পটাশিয়াম সমান অনুপাতে</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>

    @include('partials.footer')

    <script>
        function calculateFertilizer() {
            const crop = document.getElementById('cropSelect').value;
            const landSize = parseFloat(document.getElementById('landSize').value);
            const fertilizerType = document.getElementById('fertilizerType').value;
            const soilCondition = document.getElementById('soilCondition').value;
            const resultDiv = document.getElementById('fertilizerResult');

            if (!crop || !landSize || !fertilizerType || !soilCondition) {
                resultDiv.innerHTML = 'সব তথ্য পূরণ করুন';
                return;
            }

            // Fertilizer requirements per decimal
            const cropRequirements = {
                rice: { urea: 8, tsp: 6, mop: 4, organic: 40 },
                wheat: { urea: 6, tsp: 5, mop: 3, organic: 35 },
                maize: { urea: 10, tsp: 7, mop: 5, organic: 45 },
                potato: { urea: 12, tsp: 8, mop: 8, organic: 50 },
                tomato: { urea: 15, tsp: 10, mop: 10, organic: 60 },
                cabbage: { urea: 10, tsp: 8, mop: 6, organic: 45 },
                onion: { urea: 8, tsp: 6, mop: 5, organic: 40 }
            };

            // Soil condition multiplier
            const soilMultiplier = {
                fertile: 0.8,
                medium: 1.0,
                poor: 1.3
            };

            const baseReq = cropRequirements[crop];
            const multiplier = soilMultiplier[soilCondition];

            // Convert decimal to shotangsho (1 shotangsho = 40.46 decimal)
            const landInDecimal = landSize * 40.46;

            let result = '';
            const cropNames = {
                rice: 'ধান',
                wheat: 'গম',
                maize: 'ভুট্টা',
                potato: 'আলু',
                tomato: 'টমেটো',
                cabbage: 'বাঁধাকপি',
                onion: 'পেঁয়াজ'
            };

            if (fertilizerType === 'organic') {
                const organicAmount = (baseReq.organic * multiplier * landInDecimal).toFixed(0);
                result = `
                    <h4>${cropNames[crop]} চাষের জন্য জৈব সার:</h4>
                    <p><strong>গোবর/কম্পোস্ট:</strong> ${organicAmount} কেজি</p>
                    <p><small>অথবা কেঁচো সার: ${(organicAmount * 0.6).toFixed(0)} কেজি</small></p>
                `;
            } else if (fertilizerType === 'chemical') {
                const urea = (baseReq.urea * multiplier * landInDecimal).toFixed(1);
                const tsp = (baseReq.tsp * multiplier * landInDecimal).toFixed(1);
                const mop = (baseReq.mop * multiplier * landInDecimal).toFixed(1);
                result = `
                    <h4>${cropNames[crop]} চাষের জন্য রাসায়নিক সার:</h4>
                    <p><strong>ইউরিয়া:</strong> ${urea} কেজি</p>
                    <p><strong>TSP:</strong> ${tsp} কেজি</p>
                    <p><strong>MoP:</strong> ${mop} কেজি</p>
                `;
            } else { // mixed
                const organicAmount = (baseReq.organic * 0.7 * multiplier * landInDecimal).toFixed(0);
                const urea = (baseReq.urea * 0.5 * multiplier * landInDecimal).toFixed(1);
                const tsp = (baseReq.tsp * 0.5 * multiplier * landInDecimal).toFixed(1);
                const mop = (baseReq.mop * 0.5 * multiplier * landInDecimal).toFixed(1);
                result = `
                    <h4>${cropNames[crop]} চাষের জন্য মিশ্রিত সার:</h4>
                    <p><strong>জৈব সার:</strong> ${organicAmount} কেজি</p>
                    <p><strong>ইউরিয়া:</strong> ${urea} কেজি</p>
                    <p><strong>TSP:</strong> ${tsp} কেজি</p>
                    <p><strong>MoP:</strong> ${mop} কেজি</p>
                `;
            }

            result += `<p><small>জমির পরিমাণ: ${landSize} শতাংশ</small></p>`;
            resultDiv.innerHTML = result;
        }
    </script>
</body>
</html>
