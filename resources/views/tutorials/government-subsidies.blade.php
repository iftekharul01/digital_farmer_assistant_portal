<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>সরকারি কৃষি ভর্তুকির আবেদন | কৃষক পোর্টাল</title>
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
            --government-blue: #2c3e50;
            --subsidy-orange: #f39c12;
            --success-green: #27ae60;
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
            background: linear-gradient(135deg, var(--government-blue), #34495e);
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

        /* Subsidy Types */
        .subsidy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .subsidy-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .subsidy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .subsidy-header {
            background: var(--subsidy-orange);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .subsidy-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .subsidy-icon {
            font-size: 2rem;
        }

        .subsidy-body {
            padding: 25px;
        }

        .subsidy-info h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .subsidy-info ul {
            list-style: none;
            padding: 0;
            margin-bottom: 15px;
        }

        .subsidy-info ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .subsidy-info ul li::before {
            content: "•";
            color: var(--subsidy-orange);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .subsidy-amount {
            background: var(--light-green);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            font-weight: 700;
            color: var(--dark-green);
            font-size: 1.1rem;
        }

        /* Application Process */
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .process-step {
            background: white;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            text-align: center;
            position: relative;
            border: 2px solid var(--border-light);
        }

        .process-step::before {
            content: attr(data-step);
            position: absolute;
            top: -15px;
            left: 20px;
            background: var(--government-blue);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
        }

        .process-step h4 {
            color: var(--dark-green);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .process-step p {
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Required Documents */
        .documents-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .document-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--success-green);
        }

        .document-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .document-icon {
            color: var(--success-green);
            font-size: 1.4rem;
        }

        .document-list {
            list-style: none;
            padding: 0;
        }

        .document-list li {
            padding: 5px 0;
            position: relative;
            padding-left: 25px;
            font-size: 0.95rem;
        }

        .document-list li::before {
            content: "📄";
            position: absolute;
            left: 0;
            top: 5px;
        }

        /* Contact Information */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .contact-card {
            background: var(--light-green);
            padding: 30px;
            border-radius: 12px;
            border: 2px solid var(--border-light);
            text-align: center;
        }

        .contact-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .contact-info {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .contact-info strong {
            color: var(--dark-green);
        }

        /* Eligibility Checker */
        .eligibility-checker {
            background: var(--light-green);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            margin-bottom: 50px;
        }

        .eligibility-checker h3 {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 30px;
        }

        .checker-grid {
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

        .check-button {
            background: var(--government-blue);
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

        .check-button:hover {
            background: #1a252f;
        }

        .eligibility-result {
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

        /* Info Box */
        .info-box {
            background: #d1ecf1;
            border: 2px solid #bee5eb;
            border-radius: 10px;
            padding: 20px;
            margin: 30px 0;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .info-box .info-icon {
            color: #0c5460;
            font-size: 1.5rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .info-box div {
            flex: 1;
        }

        .info-box h4 {
            color: #0c5460;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .info-box p {
            color: #0c5460;
            margin: 5px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .subsidy-grid { grid-template-columns: 1fr; }
            .documents-grid { grid-template-columns: 1fr; }
            .contact-grid { grid-template-columns: 1fr; }
            .process-steps { grid-template-columns: 1fr; }
            .checker-grid { grid-template-columns: 1fr; }
            .eligibility-checker { padding: 25px; }
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
                    <i class="fas fa-file-signature"></i>
                </div>
                <h1>সরকারি কৃষি ভর্তুকির আবেদন</h1>
                <p>বাংলাদেশ সরকারের বিভিন্ন কৃষি ভর্তুকি ও সহায়তার জন্য আবেদনের সম্পূর্ণ গাইড</p>
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

            <!-- Available Subsidies -->
            <section class="section">
                <h2><i class="fas fa-hand-holding-usd"></i> উপলব্ধ ভর্তুকি সমূহ</h2>
                <div class="subsidy-grid">
                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-tractor subsidy-icon"></i>কৃষি যন্ত্রপাতি ভর্তুকি</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>অন্তর্ভুক্ত যন্ত্রপাতি</h4>
                                <ul>
                                    <li>পাওয়ার টিলার</li>
                                    <li>ট্র্যাক্টর</li>
                                    <li>হার্ভেস্টার</li>
                                    <li>সিডার</li>
                                    <li>থ্রেসার</li>
                                    <li>রাইস ট্রান্সপ্লান্টার</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                ভর্তুকির হার: ২৫-৫০%
                            </div>
                        </div>
                    </div>

                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-seedling subsidy-icon"></i>বীজ ও চারা ভর্তুকি</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>অন্তর্ভুক্ত বিষয়</h4>
                                <ul>
                                    <li>উচ্চ ফলনশীল বীজ</li>
                                    <li>হাইব্রিড বীজ</li>
                                    <li>ফলের চারা</li>
                                    <li>সবজির চারা</li>
                                    <li>মসলার বীজ</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                ভর্তুকির হার: ২৫-৩০%
                            </div>
                        </div>
                    </div>

                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-leaf subsidy-icon"></i>সার ও কীটনাশক ভর্তুকি</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>অন্তর্ভুক্ত সার</h4>
                                <ul>
                                    <li>ইউরিয়া সার</li>
                                    <li>TSP সার</li>
                                    <li>MoP সার</li>
                                    <li>DAP সার</li>
                                    <li>জৈব সার</li>
                                    <li>অনুমোদিত কীটনাশক</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                ভর্তুকির হার: ১৫-২৫%
                            </div>
                        </div>
                    </div>

                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-water subsidy-icon"></i>সেচ সুবিধা ভর্তুকি</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>অন্তর্ভুক্ত সুবিধা</h4>
                                <ul>
                                    <li>নলকূপ স্থাপন</li>
                                    <li>সোলার পাম্প</li>
                                    <li>সেচ নালা খনন</li>
                                    <li>ড্রিপ সেচ সিস্টেম</li>
                                    <li>স্প্রিংকলার</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                ভর্তুকির হার: ৪০-৭০%
                            </div>
                        </div>
                    </div>

                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-coins subsidy-icon"></i>কৃষি ঋণ সহায়তা</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>ঋণের ধরন</h4>
                                <ul>
                                    <li>ফসল উৎপাদন ঋণ</li>
                                    <li>কৃষি যন্ত্রপাতি ঋণ</li>
                                    <li>প্রাণিসম্পদ ঋণ</li>
                                    <li>মৎস্য চাষ ঋণ</li>
                                    <li>কৃষি উন্নয়ন ঋণ</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                সুদের হার: ৪-৯%
                            </div>
                        </div>
                    </div>

                    <div class="subsidy-card">
                        <div class="subsidy-header">
                            <h3><i class="fas fa-graduation-cap subsidy-icon"></i>প্রশিক্ষণ ও পরামর্শ</h3>
                        </div>
                        <div class="subsidy-body">
                            <div class="subsidy-info">
                                <h4><i class="fas fa-list-ul"></i>অন্তর্ভুক্ত সেবা</h4>
                                <ul>
                                    <li>আধুনিক চাষাবাদ প্রশিক্ষণ</li>
                                    <li>কৃষি প্রযুক্তি প্রশিক্ষণ</li>
                                    <li>ব্যবসায়িক কৃষি প্রশিক্ষণ</li>
                                    <li>বিশেষজ্ঞ পরামর্শ</li>
                                    <li>মাঠ দিবস আয়োজন</li>
                                </ul>
                            </div>
                            <div class="subsidy-amount">
                                সম্পূর্ণ বিনামূল্যে
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Application Process -->
            <section class="section">
                <h2><i class="fas fa-clipboard-list"></i> আবেদন প্রক্রিয়া</h2>
                <div class="process-steps">
                    <div class="process-step" data-step="১">
                        <h4>তথ্য সংগ্রহ</h4>
                        <p>প্রয়োজনীয় ভর্তুকি সম্পর্কে বিস্তারিত জানুন এবং যোগ্যতার শর্ত পরীক্ষা করুন।</p>
                    </div>
                    <div class="process-step" data-step="২">
                        <h4>কাগজপত্র প্রস্তুত</h4>
                        <p>সকল প্রয়োজনীয় কাগজপত্র সংগ্রহ করুন এবং ফটোকপি করে রাখুন।</p>
                    </div>
                    <div class="process-step" data-step="৩">
                        <h4>আবেদনপত্র পূরণ</h4>
                        <p>নির্ধারিত ফরম সংগ্রহ করে সঠিকভাবে পূরণ করুন। অনলাইনেও আবেদন করা যায়।</p>
                    </div>
                    <div class="process-step" data-step="৪">
                        <h4>আবেদন জমা</h4>
                        <p>সংশ্লিষ্ট কার্যালয়ে আবেদনপত্র ও প্রয়োজনীয় কাগজপত্র জমা দিন।</p>
                    </div>
                    <div class="process-step" data-step="৫">
                        <h4>যাচাইকরণ</h4>
                        <p>কর্তৃপক্ষ আপনার আবেদন ও জমি পরিদর্শন করে যাচাই করবেন।</p>
                    </div>
                    <div class="process-step" data-step="৬">
                        <h4>অনুমোদন ও গ্রহণ</h4>
                        <p>অনুমোদনের পর নির্ধারিত স্থান থেকে ভর্তুকি সুবিধা গ্রহণ করুন।</p>
                    </div>
                </div>
            </section>

            <!-- Required Documents -->
            <section class="section">
                <h2><i class="fas fa-folder-open"></i> প্রয়োজনীয় কাগজপত্র</h2>
                <div class="documents-grid">
                    <div class="document-card">
                        <h4><i class="fas fa-id-card document-icon"></i>ব্যক্তিগত কাগজপত্র</h4>
                        <ul class="document-list">
                            <li>জাতীয় পরিচয়পত্রের ফটোকপি</li>
                            <li>জন্ম নিবন্ধন সনদ</li>
                            <li>পাসপোর্ট সাইজের ছবি</li>
                            <li>মোবাইল নম্বর</li>
                            <li>ব্যাংক অ্যাকাউন্ট তথ্য</li>
                        </ul>
                    </div>

                    <div class="document-card">
                        <h4><i class="fas fa-home document-icon"></i>জমি সংক্রান্ত</h4>
                        <ul class="document-list">
                            <li>জমির মালিকানা সনদ</li>
                            <li>খতিয়ান/পর্চার কপি</li>
                            <li>জমির নামজারি কাগজ</li>
                            <li>হোল্ডিং ট্যাক্স রসিদ</li>
                            <li>জমির পরিমাণের প্রমাণপত্র</li>
                        </ul>
                    </div>

                    <div class="document-card">
                        <h4><i class="fas fa-seedling document-icon"></i>কৃষি সংক্রান্ত</h4>
                        <ul class="document-list">
                            <li>কৃষক নিবন্ধন কার্ড</li>
                            <li>ফসল বীমা কাগজ (যদি থাকে)</li>
                            <li>কৃষি ঋণের কাগজ (যদি থাকে)</li>
                            <li>চাষাবাদের পরিকল্পনা</li>
                            <li>পূর্বের ভর্তুকির তথ্য (যদি থাকে)</li>
                        </ul>
                    </div>

                    <div class="document-card">
                        <h4><i class="fas fa-file-alt document-icon"></i>অতিরিক্ত কাগজপত্র</h4>
                        <ul class="document-list">
                            <li>ওয়ারিশসূত্র সনদ (প্রয়োজনে)</li>
                            <li>উত্তরাধিকার সনদ (প্রয়োজনে)</li>
                            <li>এলাকার চেয়ারম্যান/মেম্বারের সুপারিশ</li>
                            <li>কৃষি কর্মকর্তার প্রত্যয়নপত্র</li>
                            <li>গ্রুপ/সমিতির সদস্যপদ (প্রযোজ্য ক্ষেত্রে)</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Eligibility Checker -->
            <section class="section">
                <div class="eligibility-checker">
                    <h3><i class="fas fa-user-check"></i> যোগ্যতা নির্ণায়ক</h3>
                    <div class="checker-grid">
                        <div class="input-group">
                            <label for="farmerAge">বয়স</label>
                            <input type="number" id="farmerAge" placeholder="আপনার বয়স লিখুন" onchange="checkEligibility()">
                        </div>
                        <div class="input-group">
                            <label for="landAmount">জমির পরিমাণ (শতাংশ)</label>
                            <input type="number" id="landAmount" placeholder="জমির পরিমাণ" onchange="checkEligibility()">
                        </div>
                        <div class="input-group">
                            <label for="farmerType">কৃষকের ধরন</label>
                            <select id="farmerType" onchange="checkEligibility()">
                                <option value="">নির্বাচন করুন</option>
                                <option value="marginal">প্রান্তিক কৃষক (২৫ শতাংশের কম)</option>
                                <option value="small">ক্ষুদ্র কৃষক (২৫-২৫০ শতাংশ)</option>
                                <option value="medium">মাঝারি কৃষক (২৫০-৭৫০ শতাংশ)</option>
                                <option value="large">বড় কৃষক (৭৫০+ শতাংশ)</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="subsidyType">ভর্তুকির ধরন</label>
                            <select id="subsidyType" onchange="checkEligibility()">
                                <option value="">নির্বাচন করুন</option>
                                <option value="machinery">কৃষি যন্ত্রপাতি</option>
                                <option value="seed">বীজ ও চারা</option>
                                <option value="fertilizer">সার ও কীটনাশক</option>
                                <option value="irrigation">সেচ সুবিধা</option>
                                <option value="loan">কৃষি ঋণ</option>
                            </select>
                        </div>
                    </div>
                    <button class="check-button" onclick="checkEligibility()">যোগ্যতা যাচাই করুন</button>
                    <div id="eligibilityResult" class="eligibility-result">
                        সব তথ্য পূরণ করে যোগ্যতা যাচাই করুন
                    </div>
                </div>
            </section>

            <!-- Contact Information -->
            <section class="section">
                <h2><i class="fas fa-phone"></i> যোগাযোগের তথ্য</h2>
                <div class="contact-grid">
                    <div class="contact-card">
                        <h4><i class="fas fa-building"></i>কৃষি সম্প্রসারণ অধিদপ্তর</h4>
                        <div class="contact-info">
                            <strong>হটলাইন:</strong> ১৬১২৩
                        </div>
                        <div class="contact-info">
                            <strong>ওয়েবসাইট:</strong> www.dae.gov.bd
                        </div>
                        <div class="contact-info">
                            <strong>ইমেইল:</strong> info@dae.gov.bd
                        </div>
                    </div>

                    <div class="contact-card">
                        <h4><i class="fas fa-university"></i>কৃষি ব্যাংক</h4>
                        <div class="contact-info">
                            <strong>হটলাইন:</strong> ১৬২৩৬
                        </div>
                        <div class="contact-info">
                            <strong>ওয়েবসাইট:</strong> www.krishibank.org.bd
                        </div>
                        <div class="contact-info">
                            <strong>কৃষি ঋণের জন্য:</strong> নিকটস্থ শাখা
                        </div>
                    </div>

                    <div class="contact-card">
                        <h4><i class="fas fa-map-marker-alt"></i>উপজেলা কৃষি অফিস</h4>
                        <div class="contact-info">
                            <strong>সেবা:</strong> স্থানীয় কৃষি সহায়তা
                        </div>
                        <div class="contact-info">
                            <strong>কর্মদিবস:</strong> রোববার-বৃহস্পতিবার
                        </div>
                        <div class="contact-info">
                            <strong>সময়:</strong> সকাল ৯টা - বিকেল ৫টা
                        </div>
                    </div>
                </div>
            </section>

            <!-- Information Box -->
            <div class="info-box">
                <div class="info-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div>
                    <h4>গুরুত্বপূর্ণ তথ্য</h4>
                    <p><strong>আবেদনের সময়:</strong> সাধারণত বছরে নির্দিষ্ট সময়ে আবেদন গ্রহণ করা হয়</p>
                    <p><strong>প্রক্রিয়াকরণ সময়:</strong> আবেদনের ৩০-৬০ দিনের মধ্যে অনুমোদন হয়</p>
                    <p><strong>নবায়ন:</strong> কিছু ভর্তুকি বার্ষিক নবায়ন প্রয়োজন</p>
                    <p><strong>জালিয়াতি এড়ান:</strong> শুধুমাত্র সরকারি অফিস থেকে ভর্তুকি গ্রহণ করুন</p>
                    <p><strong>অভিযোগ:</strong> সমস্যার জন্য উপজেলা কৃষি অফিসে যোগাযোগ করুন</p>
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
                    সরকারি কৃষি ভর্তুকি ও সহায়তা পাওয়ার বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/M8KjvyWFnWg" 
                        title="সরকারি কৃষি ভর্তুকি আবেদনের নিয়ম"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    সরকারি কৃষি ভর্তুকি ও সহায়তা পাওয়ার নিয়ম সম্পর্কে জানুন। আবেদনের পদ্ধতি এবং প্রয়োজনীয় কাগজপত্রের বিস্তারিত তথ্য দেওয়া হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        function checkEligibility() {
            const age = parseInt(document.getElementById('farmerAge').value);
            const landAmount = parseFloat(document.getElementById('landAmount').value);
            const farmerType = document.getElementById('farmerType').value;
            const subsidyType = document.getElementById('subsidyType').value;
            const resultDiv = document.getElementById('eligibilityResult');

            if (!age || !landAmount || !farmerType || !subsidyType) {
                resultDiv.innerHTML = 'সব তথ্য পূরণ করুন';
                return;
            }

            let eligible = true;
            let messages = [];
            let subsidyRate = 0;

            // Age check
            if (age < 18 || age > 65) {
                eligible = false;
                messages.push('বয়স ১৮-৬৫ বছরের মধ্যে হতে হবে');
            }

            // Land and farmer type compatibility check
            const landTypes = {
                marginal: { min: 0, max: 25 },
                small: { min: 25, max: 250 },
                medium: { min: 250, max: 750 },
                large: { min: 750, max: 10000 }
            };

            if (landAmount < landTypes[farmerType].min || landAmount > landTypes[farmerType].max) {
                eligible = false;
                messages.push('জমির পরিমাণ কৃষকের ধরনের সাথে মিলছে না');
            }

            // Subsidy rate calculation
            const subsidyRates = {
                machinery: {
                    marginal: 50, small: 40, medium: 30, large: 25
                },
                seed: {
                    marginal: 30, small: 25, medium: 20, large: 15
                },
                fertilizer: {
                    marginal: 25, small: 20, medium: 15, large: 10
                },
                irrigation: {
                    marginal: 70, small: 60, medium: 50, large: 40
                },
                loan: {
                    marginal: 4, small: 5, medium: 6, large: 7
                }
            };

            subsidyRate = subsidyRates[subsidyType][farmerType];

            const farmerTypeNames = {
                marginal: 'প্রান্তিক কৃষক',
                small: 'ক্ষুদ্র কৃষক',
                medium: 'মাঝারি কৃষক',
                large: 'বড় কৃষক'
            };

            const subsidyTypeNames = {
                machinery: 'কৃষি যন্ত্রপাতি ভর্তুকি',
                seed: 'বীজ ও চারা ভর্তুকি',
                fertilizer: 'সার ও কীটনাশক ভর্তুকি',
                irrigation: 'সেচ সুবিধা ভর্তুকি',
                loan: 'কৃষি ঋণ'
            };

            if (eligible) {
                resultDiv.innerHTML = `
                    <div style="color: #27ae60;">
                        <h4>✅ আপনি যোগ্য!</h4>
                        <p><strong>কৃষকের ধরন:</strong> ${farmerTypeNames[farmerType]}</p>
                        <p><strong>ভর্তুকি:</strong> ${subsidyTypeNames[subsidyType]}</p>
                        <p><strong>ভর্তুকির হার:</strong> ${subsidyRate}${subsidyType === 'loan' ? '% সুদে' : '% ছাড়'}</p>
                        <p><strong>পরবর্তী পদক্ষেপ:</strong> উপজেলা কৃষি অফিসে যোগাযোগ করুন</p>
                    </div>
                `;
            } else {
                resultDiv.innerHTML = `
                    <div style="color: #e74c3c;">
                        <h4>❌ দুঃখিত, আপনি যোগ্য নন</h4>
                        <p><strong>কারণ:</strong></p>
                        <ul style="text-align: left; margin-top: 10px;">
                            ${messages.map(msg => `<li>${msg}</li>`).join('')}
                        </ul>
                        <p style="margin-top: 15px;"><strong>পরামর্শ:</strong> উপজেলা কৃষি অফিসে যোগাযোগ করুন</p>
                    </div>
                `;
            }
        }
    </script>
</body>
</html>
