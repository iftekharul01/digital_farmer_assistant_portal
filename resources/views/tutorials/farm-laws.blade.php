<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>কৃষি আইন ও নীতি | কৃষক পোর্টাল</title>
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
            --law-blue: #2c3e50;
            --justice-gold: #f39c12;
            --rights-red: #e74c3c;
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
            background: linear-gradient(135deg, var(--law-blue), var(--justice-gold));
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

        /* Laws Grid */
        .laws-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .law-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .law-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .law-header {
            background: var(--law-blue);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .law-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .law-icon {
            font-size: 2rem;
        }

        .law-body {
            padding: 25px;
        }

        .law-details {
            margin-bottom: 20px;
        }

        .law-details h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .law-details ul {
            list-style: none;
            padding: 0;
        }

        .law-details ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .law-details ul li::before {
            content: "⚖️";
            position: absolute;
            left: 0;
            top: 2px;
        }

        .law-status {
            background: var(--light-green);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
            color: var(--dark-green);
        }

        /* Rights Section */
        .rights-section {
            background: var(--light-green);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .rights-section h3 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 30px;
        }

        .rights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .rights-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid var(--border-light);
            text-align: center;
        }

        .rights-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .rights-icon {
            color: var(--rights-red);
            font-size: 1.8rem;
        }

        .rights-items {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .rights-items li {
            padding: 3px 0;
            font-size: 0.9rem;
            color: var(--text-color-dark);
        }

        /* Procedures Section */
        .procedures {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .procedures-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .procedure-card {
            border-left: 5px solid var(--justice-gold);
            padding: 20px;
            background: #f8f9fa;
            border-radius: 0 10px 10px 0;
        }

        .procedure-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .procedure-icon {
            color: var(--justice-gold);
            font-size: 1.4rem;
        }

        .procedure-steps {
            list-style: none;
            padding: 0;
            counter-reset: step-counter;
        }

        .procedure-steps li {
            counter-increment: step-counter;
            padding: 8px 0;
            position: relative;
            padding-left: 30px;
        }

        .procedure-steps li::before {
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 8px;
            background: var(--justice-gold);
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Important Contacts */
        .contacts {
            background: #fff5f5;
            border: 2px solid var(--rights-red);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 50px;
        }

        .contacts h3 {
            color: var(--rights-red);
            font-weight: 700;
            text-align: center;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .contact-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .contact-card h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-info {
            font-size: 0.9rem;
            line-height: 1.8;
        }

        .contact-info strong {
            color: var(--rights-red);
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

        /* Important Notice */
        .notice-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
            margin: 30px 0;
        }

        .notice-box h4 {
            color: #856404;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .notice-box ul {
            list-style: none;
            padding: 0;
        }

        .notice-box ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 25px;
        }

        .notice-box ul li::before {
            content: "⚠️";
            position: absolute;
            left: 0;
            top: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .laws-grid { grid-template-columns: 1fr; }
            .rights-grid { grid-template-columns: 1fr; }
            .procedures-grid { grid-template-columns: 1fr; }
            .contacts-grid { grid-template-columns: 1fr; }
            .rights-section { padding: 25px; }
            .procedures { padding: 25px; }
            .contacts { padding: 20px; }
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
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h1>কৃষি আইন ও নীতি</h1>
                <p>কৃষকদের অধিকার, সরকারি নীতি এবং কৃষি সংক্রান্ত আইনী বিষয়ে সম্পূর্ণ গাইড</p>
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

            <!-- Major Agricultural Laws -->
            <section class="section">
                <h2><i class="fas fa-gavel"></i> প্রধান কৃষি আইন</h2>
                <div class="laws-grid">
                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-leaf law-icon"></i>জাতীয় কৃষিনীতি ২০১৮</h3>
                            <p>বাংলাদেশের সামগ্রিক কৃষি উন্নয়ন নীতি</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>খাদ্য নিরাপত্তা নিশ্চিতকরণ</li>
                                    <li>কৃষি উৎপাদন বৃদ্ধি</li>
                                    <li>কৃষকের আয় বৃদ্ধি</li>
                                    <li>টেকসই কৃষি উন্নয়ন</li>
                                    <li>কৃষি প্রযুক্তির ব্যবহার</li>
                                    <li>কৃষি রপ্তানি বৃদ্ধি</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>

                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-tractor law-icon"></i>কৃষি ঋণ আইন ২০০৯</h3>
                            <p>কৃষি ঋণ প্রদান ও আদায় সংক্রান্ত আইন</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>সহজ শর্তে ঋণ প্রাপ্তি</li>
                                    <li>কম সুদে ঋণের ব্যবস্থা</li>
                                    <li>ঋণ মওকুফের নীতিমালা</li>
                                    <li>ঋণ আদায়ে সুবিধা</li>
                                    <li>জামানত ছাড় সুবিধা</li>
                                    <li>প্রাকৃতিক দুর্যোগে ছাড়</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>

                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-home law-icon"></i>ভূমি মালিকানা আইন</h3>
                            <p>কৃষি জমির মালিকানা ও হস্তান্তর আইন</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>জমির মালিকানা স্বত্ব</li>
                                    <li>জমি বিক্রয় ও ক্রয়</li>
                                    <li>উত্তরাধিকার আইন</li>
                                    <li>বন্দোবস্ত ও সেটেলমেন্ট</li>
                                    <li>খাজনা প্রদান নিয়ম</li>
                                    <li>জমির দলিল সংরক্ষণ</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>

                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-hand-holding-water law-icon"></i>সেচ আইন ২০১৩</h3>
                            <p>সেচ ব্যবস্থাপনা ও পানি অধিকার আইন</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>পানির ন্যায্য বণ্টন</li>
                                    <li>ভূগর্ভস্থ পানি ব্যবহার</li>
                                    <li>সেচ ফি নির্ধারণ</li>
                                    <li>পানি সাশ্রয়ী প্রযুক্তি</li>
                                    <li>সেচ সমিতি গঠন</li>
                                    <li>পানি দূষণ রোধ</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>

                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-shield-alt law-icon"></i>বীজ আইন ২০১৮</h3>
                            <p>মানসম্মত বীজ উৎপাদন ও বিতরণ আইন</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>বীজের মান নিয়ন্ত্রণ</li>
                                    <li>বীজ উৎপাদন লাইসেন্স</li>
                                    <li>বীজ পরীক্ষা ও সার্টিফিকেশন</li>
                                    <li>হাইব্রিড বীজের নিয়মাবলী</li>
                                    <li>দেশীয় জাতের সংরক্ষণ</li>
                                    <li>ভেজাল বীজের শাস্তি</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>

                    <div class="law-card">
                        <div class="law-header">
                            <h3><i class="fas fa-vial law-icon"></i>সার ব্যবস্থাপনা আইন</h3>
                            <p>সার উৎপাদন, আমদানি ও বিতরণ আইন</p>
                        </div>
                        <div class="law-body">
                            <div class="law-details">
                                <h4><i class="fas fa-list"></i>মূল বিষয়সমূহ</h4>
                                <ul>
                                    <li>সারের মান নিয়ন্ত্রণ</li>
                                    <li>সার বিতরণ ব্যবস্থা</li>
                                    <li>ভর্তুকি প্রাপ্তির নিয়ম</li>
                                    <li>জৈব সার উৎপাদন</li>
                                    <li>সার ডিলার লাইসেন্স</li>
                                    <li>ভেজাল সারের বিরুদ্ধে ব্যবস্থা</li>
                                </ul>
                            </div>
                            <div class="law-status">
                                বর্তমানে কার্যকর
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Farmers Rights -->
            <section class="section">
                <div class="rights-section">
                    <h3><i class="fas fa-fist-raised"></i> কৃষকের মৌলিক অধিকার</h3>
                    <div class="rights-grid">
                        <div class="rights-card">
                            <h4><i class="fas fa-balance-scale rights-icon"></i>মালিকানার অধিকার</h4>
                            <ul class="rights-items">
                                <li>জমির পূর্ণ মালিকানা</li>
                                <li>ফসল উৎপাদনের অধিকার</li>
                                <li>জমি বিক্রয়ের স্বাধীনতা</li>
                                <li>উত্তরাধিকার সূত্রে প্রাপ্তি</li>
                                <li>দখল রক্ষার অধিকার</li>
                            </ul>
                        </div>

                        <div class="rights-card">
                            <h4><i class="fas fa-hand-holding-usd rights-icon"></i>ন্যায্য দামের অধিকার</h4>
                            <ul class="rights-items">
                                <li>ফসলের সঠিক মূল্য পাওয়া</li>
                                <li>মধ্যস্বত্বভোগী ছাড়া বিক্রয়</li>
                                <li>সরকারি ক্রয়ে অগ্রাধিকার</li>
                                <li>মূল্য নির্ধারণে অংশগ্রহণ</li>
                                <li>বাজার তথ্য প্রাপ্তির অধিকার</li>
                            </ul>
                        </div>

                        <div class="rights-card">
                            <h4><i class="fas fa-university rights-icon"></i>ঋণ ও আর্থিক সেবা</h4>
                            <ul class="rights-items">
                                <li>সহজ শর্তে কৃষি ঋণ</li>
                                <li>বিনা জামানতে ছোট ঋণ</li>
                                <li>প্রাকৃতিক দুর্যোগে ঋণ মওকুফ</li>
                                <li>বীমা সেবা প্রাপ্তির অধিকার</li>
                                <li>সাশ্রয়ী সুদের হার</li>
                            </ul>
                        </div>

                        <div class="rights-card">
                            <h4><i class="fas fa-graduation-cap rights-icon"></i>শিক্ষা ও প্রশিক্ষণ</h4>
                            <ul class="rights-items">
                                <li>আধুনিক কৃষি প্রশিক্ষণ</li>
                                <li>বিনামূল্যে কৃষি পরামর্শ</li>
                                <li>প্রযুক্তি ব্যবহারের শিক্ষা</li>
                                <li>গবেষণা ফলাফল জানার অধিকার</li>
                                <li>কৃষি তথ্য প্রাপ্তির অধিকার</li>
                            </ul>
                        </div>

                        <div class="rights-card">
                            <h4><i class="fas fa-shield-alt rights-icon"></i>সামাজিক নিরাপত্তা</h4>
                            <ul class="rights-items">
                                <li>বয়স্কভাতা প্রাপ্তির অধিকার</li>
                                <li>বিধবাভাতা সুবিধা</li>
                                <li>প্রতিবন্ধী ভাতার সুবিধা</li>
                                <li>মাতৃত্বকালীন ভাতা</li>
                                <li>দুর্যোগকালীন সহায়তা</li>
                            </ul>
                        </div>

                        <div class="rights-card">
                            <h4><i class="fas fa-medkit rights-icon"></i>স্বাস্থ্যসেবা</h4>
                            <ul class="rights-items">
                                <li>বিনামূল্যে স্বাস্থ্যসেবা</li>
                                <li>কমিউনিটি ক্লিনিকের সুবিধা</li>
                                <li>মাতৃ ও শিশু স্বাস্থ্যসেবা</li>
                                <li>পুষ্টি কর্মসূচির অধিকার</li>
                                <li>টিকাদান সুবিধা</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Legal Procedures -->
            <section class="section">
                <h2><i class="fas fa-file-alt"></i> গুরুত্বপূর্ণ আইনি প্রক্রিয়া</h2>
                <div class="procedures">
                    <div class="procedures-grid">
                        <div class="procedure-card">
                            <h4><i class="fas fa-file-contract procedure-icon"></i>জমির দলিল তৈরি</h4>
                            <ol class="procedure-steps">
                                <li>বিক্রেতার সাথে দর-দাম নির্ধারণ</li>
                                <li>জমির কাগজপত্র যাচাই</li>
                                <li>রেজিস্ট্রি অফিসে আবেদন</li>
                                <li>প্রয়োজনীয় ফি জমা দেওয়া</li>
                                <li>দলিল সম্পাদন ও নিবন্ধন</li>
                                <li>খতিয়ান ও নামজারি করা</li>
                            </ol>
                        </div>

                        <div class="procedure-card">
                            <h4><i class="fas fa-coins procedure-icon"></i>কৃষি ঋণের আবেদন</h4>
                            <ol class="procedure-steps">
                                <li>ব্যাংকে ঋণের আবেদনপত্র সংগ্রহ</li>
                                <li>প্রয়োজনীয় কাগজপত্র প্রস্তুত</li>
                                <li>জমির মালিকানা দলিল জমা</li>
                                <li>প্রকল্পের বিস্তারিত পরিকল্পনা</li>
                                <li>ব্যাংক কর্তৃক যাচাই-বাছাই</li>
                                <li>ঋণ অনুমোদন ও বিতরণ</li>
                            </ol>
                        </div>

                        <div class="procedure-card">
                            <h4><i class="fas fa-seedling procedure-icon"></i>বীজ ডিলার লাইসেন্স</h4>
                            <ol class="procedure-steps">
                                <li>কৃষি সম্প্রসারণ অফিসে আবেদন</li>
                                <li>উপযুক্ত দোকান ও গুদামের প্রমাণ</li>
                                <li>প্রয়োজনীয় যোগ্যতার সনদ</li>
                                <li>নির্ধারিত ফি জমা প্রদান</li>
                                <li>কর্তৃপক্ষের পরিদর্শন</li>
                                <li>লাইসেন্স প্রদান</li>
                            </ol>
                        </div>

                        <div class="procedure-card">
                            <h4><i class="fas fa-shield-alt procedure-icon"></i>ফসল বীমার আবেদন</h4>
                            <ol class="procedure-steps">
                                <li>বীমা কোম্পানিতে যোগাযোগ</li>
                                <li>ফসলের ধরন ও পরিমাণ নির্ধারণ</li>
                                <li>বীমা প্রিমিয়াম পরিশোধ</li>
                                <li>পলিসি দলিল সংগ্রহ</li>
                                <li>ফসল বপন থেকে কাটা পর্যন্ত</li>
                                <li>ক্ষতির ক্ষেত্রে দাবি দাখিল</li>
                            </ol>
                        </div>

                        <div class="procedure-card">
                            <h4><i class="fas fa-gavel procedure-icon"></i>ভূমি বিরোধ সমাধান</h4>
                            <ol class="procedure-steps">
                                <li>স্থানীয় মধ্যস্থতার চেষ্টা</li>
                                <li>এসি ল্যান্ড অফিসে অভিযোগ</li>
                                <li>প্রয়োজনীয় কাগজপত্র জমা</li>
                                <li>উভয়পক্ষের শুনানি</li>
                                <li>জরিপ ও তদন্ত প্রক্রিয়া</li>
                                <li>চূড়ান্ত রায় ও বাস্তবায়ন</li>
                            </ol>
                        </div>

                        <div class="procedure-card">
                            <h4><i class="fas fa-hand-holding-heart procedure-icon"></i>সামাজিক ভাতার আবেদন</h4>
                            <ol class="procedure-steps">
                                <li>ইউনিয়ন পরিষদে আবেদন</li>
                                <li>পরিচয়পত্র ও বয়সের প্রমাণ</li>
                                <li>আয়ের সনদপত্র</li>
                                <li>চেয়ারম্যানের সুপারিশ</li>
                                <li>উপজেলায় যাচাই-বাছাই</li>
                                <li>চূড়ান্ত তালিকায় অন্তর্ভুক্তি</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Important Contacts -->
            <section class="section">
                <div class="contacts">
                    <h3><i class="fas fa-phone-alt"></i> জরুরি যোগাযোগ</h3>
                    <div class="contacts-grid">
                        <div class="contact-card">
                            <h4>কৃষি তথ্য সেবা</h4>
                            <div class="contact-info">
                                <strong>হটলাইন:</strong> ১৬১২৩<br>
                                <strong>সময়:</strong> ২৪ ঘন্টা<br>
                                <strong>সেবা:</strong> কৃষি পরামর্শ ও তথ্য
                            </div>
                        </div>

                        <div class="contact-card">
                            <h4>কৃষি ঋণ তথ্য</h4>
                            <div class="contact-info">
                                <strong>ফোন:</strong> ০২-৯৫১৪৪৪৫<br>
                                <strong>সময়:</strong> সকাল ৯টা - বিকাল ৫টা<br>
                                <strong>সেবা:</strong> ঋণ সংক্রান্ত তথ্য
                            </div>
                        </div>

                        <div class="contact-card">
                            <h4>ভূমি মন্ত্রণালয়</h4>
                            <div class="contact-info">
                                <strong>ফোন:</strong> ০২-৭১৬৮৪৯০<br>
                                <strong>সময়:</strong> সকাল ৯টা - বিকাল ৫টা<br>
                                <strong>সেবা:</strong> ভূমি সংক্রান্ত তথ্য
                            </div>
                        </div>

                        <div class="contact-card">
                            <h4>আইনি সহায়তা</h4>
                            <div class="contact-info">
                                <strong>ফোন:</strong> ১৬৪৩০<br>
                                <strong>সময়:</strong> ২৪ ঘন্টা<br>
                                <strong>সেবা:</strong> বিনামূল্যে আইনি পরামর্শ
                            </div>
                        </div>

                        <div class="contact-card">
                            <h4>জাতীয় কৃষি গবেষণা</h4>
                            <div class="contact-info">
                                <strong>ফোন:</strong> ০২-৯১৩৫৩৩৩<br>
                                <strong>সময়:</strong> সকাল ৯টা - বিকাল ৫টা<br>
                                <strong>সেবা:</strong> গবেষণা ও উন্নয়ন
                            </div>
                        </div>

                        <div class="contact-card">
                            <h4>দুর্যোগ ব্যবস্থাপনা</h4>
                            <div class="contact-info">
                                <strong>ফোন:</strong> ১০৯০<br>
                                <strong>সময়:</strong> ২৪ ঘন্টা<br>
                                <strong>সেবা:</strong> দুর্যোগকালীন সহায়তা
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Important Notice -->
            <div class="notice-box">
                <h4><i class="fas fa-exclamation-triangle"></i>গুরুত্বপূর্ণ নোটিশ</h4>
                <ul>
                    <li>সব ধরনের আইনি সমস্যায় প্রথমে স্থানীয় কৃষি অফিসে পরামর্শ নিন</li>
                    <li>জমি কেনা-বেচার সময় অবশ্যই রেজিস্টার্ড আইনজীবীর সাহায্য নিন</li>
                    <li>যেকোনো চুক্তি বা দলিল সাক্ষর করার আগে ভালোভাবে পড়ে বুঝে নিন</li>
                    <li>সরকারি প্রকল্প বা সুবিধার জন্য মধ্যস্বত্বভোগীদের কোনো টাকা দেবেন না</li>
                    <li>আইনি সহায়তার জন্য জেলা আইনজীবী পরিষদে যোগাযোগ করতে পারেন</li>
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
                    কৃষি আইন ও কৃষকের অধিকার সম্পর্কে বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/9vJLtKbgH0Y" 
                        title="কৃষি আইন ও কৃষকের অধিকার"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    কৃষি আইন, নীতি এবং কৃষকদের অধিকার সম্পর্কে বিস্তারিত জানুন। আইনি সহায়তা এবং কৃষকদের সুরক্ষার জন্য প্রয়োজনীয় তথ্য দেওয়া হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
