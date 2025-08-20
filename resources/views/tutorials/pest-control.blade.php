<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণ | কৃষক পোর্টাল</title>
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
            --red-accent: #e74c3c;
            --orange-accent: #f39c12;
            --yellow-accent: #f1c40f;
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
            background: linear-gradient(135deg, var(--red-accent), #c0392b);
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

        /* Pest Identification Cards */
        .pest-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .pest-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pest-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.15);
            border-color: var(--primary-green);
        }

        .pest-header {
            background: var(--red-accent);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .pest-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .pest-header .pest-icon {
            font-size: 2rem;
        }

        .pest-body {
            padding: 25px;
        }

        .pest-info {
            margin-bottom: 20px;
        }

        .pest-info h4 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .pest-info ul {
            list-style: none;
            padding: 0;
        }

        .pest-info ul li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .pest-info ul li::before {
            content: "•";
            color: var(--red-accent);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .severity-level {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .severity-high {
            background: #ffebee;
            color: var(--red-accent);
            border: 2px solid var(--red-accent);
        }

        .severity-medium {
            background: #fff8e1;
            color: var(--orange-accent);
            border: 2px solid var(--orange-accent);
        }

        .severity-low {
            background: #f3e5f5;
            color: #9c27b0;
            border: 2px solid #9c27b0;
        }

        /* Control Methods */
        .control-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .control-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border-left: 5px solid var(--primary-green);
        }

        .control-card h4 {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .control-icon {
            color: var(--primary-green);
            font-size: 1.4rem;
        }

        /* IPM Strategy */
        .ipm-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .ipm-step {
            background: white;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px var(--shadow-card);
            text-align: center;
            position: relative;
            border: 2px solid var(--border-light);
        }

        .ipm-step::before {
            content: attr(data-step);
            position: absolute;
            top: -15px;
            left: 20px;
            background: var(--primary-green);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .ipm-step h4 {
            color: var(--dark-green);
            margin-bottom: 15px;
            font-weight: 700;
        }

        .ipm-step p {
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Natural Remedies */
        .remedy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .remedy-card {
            background: var(--light-green);
            padding: 25px;
            border-radius: 12px;
            border: 2px solid var(--border-light);
        }

        .remedy-card h4 {
            color: var(--dark-green);
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .remedy-icon {
            color: var(--primary-green);
            font-size: 1.3rem;
        }

        .ingredients {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }

        .ingredients h5 {
            color: var(--dark-green);
            font-weight: 600;
            margin-bottom: 8px;
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.2rem; }
            .hero p { font-size: 1.1rem; }
            .pest-grid { grid-template-columns: 1fr; }
            .control-methods { grid-template-columns: 1fr; }
            .ipm-steps { grid-template-columns: 1fr; }
            .remedy-grid { grid-template-columns: 1fr; }
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
                    <i class="fas fa-bug"></i>
                </div>
                <h1>পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণ</h1>
                <p>ক্ষতিকর পোকামাকড় সনাক্ত করুন এবং পরিবেশ বান্ধব উপায়ে নিয়ন্ত্রণ করে ফসল রক্ষা করুন</p>
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

            <!-- Common Pests -->
            <section class="section">
                <h2><i class="fas fa-search"></i> প্রধান ক্ষতিকর পোকামাকড় চেনার উপায়</h2>
                <div class="pest-grid">
                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-bug pest-icon"></i>মাজরা পোকা</h3>
                            <span class="severity-level severity-high">উচ্চ ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>ধানের কান্ডে সুড়ঙ্গ তৈরি করে</li>
                                    <li>পাতা হলুদ হয়ে শুকিয়ে যায়</li>
                                    <li>কান্ডে ছোট ছিদ্র দেখা যায়</li>
                                    <li>গাছ দুর্বল হয়ে পড়ে</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>ধান</li>
                                    <li>ভুট্টা</li>
                                    <li>গম</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-spider pest-icon"></i>জাব পোকা</h3>
                            <span class="severity-level severity-medium">মাঝারি ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>পাতার নিচে সবুজ/কালো ছোট পোকা</li>
                                    <li>পাতা কুঁকড়ে যায়</li>
                                    <li>মধুর মত আঠালো রস বের হয়</li>
                                    <li>ভাইরাস রোগ ছড়ায়</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>সবজি (টমেটো, বেগুন)</li>
                                    <li>ফলের গাছ</li>
                                    <li>ডাল জাতীয় ফসল</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-circle pest-icon"></i>বলল ওয়ার্ম</h3>
                            <span class="severity-level severity-high">উচ্চ ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>পাতায় গোল ছিদ্র</li>
                                    <li>ছোট সবুজ/বাদামি কীড়া</li>
                                    <li>পাতা খেয়ে ফেলে</li>
                                    <li>ফল ও কুঁড়িতে আক্রমণ</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>তুলা</li>
                                    <li>টমেটো</li>
                                    <li>বাঁধাকপি</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-leaf pest-icon"></i>পাতা মোড়ানো পোকা</h3>
                            <span class="severity-level severity-medium">মাঝারি ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>পাতা মুড়িয়ে নল আকার হয়</li>
                                    <li>পাতার ভিতরে সবুজ কীড়া</li>
                                    <li>পাতার কিনারা বাদামি</li>
                                    <li>ফটোসিনথেসিস কমে যায়</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>ধান</li>
                                    <li>গম</li>
                                    <li>ভুট্টা</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-fire pest-icon"></i>থ্রিপস</h3>
                            <span class="severity-level severity-low">কম ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>পাতায় রূপালি দাগ</li>
                                    <li>পাতা কুঁকড়ে যায়</li>
                                    <li>অতি ক্ষুদ্র পোকা</li>
                                    <li>পাতার রস চুষে খায়</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>পেঁয়াজ</li>
                                    <li>রসুন</li>
                                    <li>ফুলের গাছ</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pest-card">
                        <div class="pest-header">
                            <h3><i class="fas fa-dot-circle pest-icon"></i>কাট ওয়ার্ম</h3>
                            <span class="severity-level severity-high">উচ্চ ঝুঁকি</span>
                        </div>
                        <div class="pest-body">
                            <div class="pest-info">
                                <h4><i class="fas fa-eye"></i>চিহ্নিতকরণ</h4>
                                <ul>
                                    <li>গাছের গোড়া কেটে ফেলে</li>
                                    <li>রাতে সক্রিয় থাকে</li>
                                    <li>মোটা ধূসর/বাদামি কীড়া</li>
                                    <li>চারাগাছ মরে যায়</li>
                                </ul>
                            </div>
                            <div class="pest-info">
                                <h4><i class="fas fa-seedling"></i>আক্রান্ত ফসল</h4>
                                <ul>
                                    <li>সব ধরনের সবজি</li>
                                    <li>ভুট্টা</li>
                                    <li>তুলা</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- IPM Strategy -->
            <section class="section">
                <h2><i class="fas fa-shield-alt"></i> সমন্বিত বালাই ব্যবস্থাপনা (IPM)</h2>
                <div class="ipm-steps">
                    <div class="ipm-step" data-step="১">
                        <h4>প্রতিরোধ</h4>
                        <p>রোগ প্রতিরোধী বীজ ব্যবহার, পরিচ্ছন্নতা বজায় রাখা, এবং উপযুক্ত চাষাবাদ পদ্ধতি অনুসরণ।</p>
                    </div>
                    <div class="ipm-step" data-step="২">
                        <h4>পর্যবেক্ষণ</h4>
                        <p>নিয়মিত ক্ষেত পরিদর্শন, পোকামাকড়ের উপস্থিতি চেক করা এবং ক্ষতির মাত্রা নির্ণয়।</p>
                    </div>
                    <div class="ipm-step" data-step="৩">
                        <h4>জৈবিক নিয়ন্ত্রণ</h4>
                        <p>উপকারী পোকামাকড়, পরজীবী, এবং প্রাকৃতিক শত্রু ব্যবহার করে পোকা নিয়ন্ত্রণ।</p>
                    </div>
                    <div class="ipm-step" data-step="৪">
                        <h4>যান্ত্রিক নিয়ন্ত্রণ</h4>
                        <p>ফাঁদ ব্যবহার, হাতে ধরে মারা, আক্রান্ত অংশ কেটে ফেলা এবং বাধা সৃষ্টি।</p>
                    </div>
                    <div class="ipm-step" data-step="৫">
                        <h4>সাংস্কৃতিক নিয়ন্ত্রণ</h4>
                        <p>ফসলের আবর্তন, সঠিক সময়ে চাষ, পরিষ্কার-পরিচ্ছন্নতা এবং প্রতিবেশী ফসল।</p>
                    </div>
                    <div class="ipm-step" data-step="৬">
                        <h4>রাসায়নিক নিয়ন্ত্রণ</h4>
                        <p>শেষ উপায় হিসেবে নিরাপদ কীটনাশক ব্যবহার, সঠিক মাত্রা ও নির্দেশনা অনুসরণ।</p>
                    </div>
                </div>
            </section>

            <!-- Control Methods -->
            <section class="section">
                <h2><i class="fas fa-tools"></i> নিয়ন্ত্রণের পদ্ধতি</h2>
                <div class="control-methods">
                    <div class="control-card">
                        <h4><i class="fas fa-hand-paper control-icon"></i>হাতে ধরে নিয়ন্ত্রণ</h4>
                        <p>বড় আকারের পোকা ও কীড়া হাতে ধরে মেরে ফেলুন। সকালের দিকে এই কাজ করা বেশি কার্যকর। গ্লাভস পরে নিরাপত্তা নিশ্চিত করুন।</p>
                    </div>
                    <div class="control-card">
                        <h4><i class="fas fa-spider control-icon"></i>প্রাকৃতিক শত্রু</h4>
                        <p>লেডি বার্ড বিটল, মাকড়সা, ওয়াসপ ইত্যাদি উপকারী পোকা সংরক্ষণ করুন। এরা ক্ষতিকর পোকা খেয়ে নিয়ন্ত্রণ করে।</p>
                    </div>
                    <div class="control-card">
                        <h4><i class="fas fa-magnet control-icon"></i>ফাঁদ ব্যবহার</h4>
                        <p>হলুদ আঠালো ফাঁদ, ফেরোমন ট্র্যাপ, আলোর ফাঁদ ইত্যাদি ব্যবহার করে পোকা নিয়ন্ত্রণ করুন।</p>
                    </div>
                    <div class="control-card">
                        <h4><i class="fas fa-leaf control-icon"></i>প্রাকৃতিক কীটনাশক</h4>
                        <p>নিম তেল, সাবানের পানি, মরিচ-রসুনের নির্যাস ইত্যাদি ব্যবহার করুন। নিরাপদ ও পরিবেশ বান্ধব।</p>
                    </div>
                    <div class="control-card">
                        <h4><i class="fas fa-recycle control-icon"></i>ফসল আবর্তন</h4>
                        <p>একই জমিতে বিভিন্ন ফসল চাষ করুন। এতে পোকার জীবনচক্র ভেঙে যায় এবং আক্রমণ কমে।</p>
                    </div>
                    <div class="control-card">
                        <h4><i class="fas fa-seedling control-icon"></i>সঙ্গী ফসল</h4>
                        <p>তুলসী, গাঁদা, ধনেপাতা ইত্যাদি সঙ্গী ফসল হিসেবে চাষ করুন। এরা পোকামাকড় তাড়ায়।</p>
                    </div>
                </div>
            </section>

            <!-- Natural Remedies -->
            <section class="section">
                <h2><i class="fas fa-leaf"></i> প্রাকৃতিক প্রতিকার</h2>
                <div class="remedy-grid">
                    <div class="remedy-card">
                        <h4><i class="fas fa-tree remedy-icon"></i>নিম তেলের স্প্রে</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>নিম তেল - ২ চা চামচ</li>
                                <li>তরল সাবান - ১ চা চামচ</li>
                                <li>পানি - ১ লিটার</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> সব উপাদান মিশিয়ে সন্ধ্যায় স্প্রে করুন। জাব পোকা ও মাইট নিয়ন্ত্রণে কার্যকর।</p>
                    </div>

                    <div class="remedy-card">
                        <h4><i class="fas fa-pepper-hot remedy-icon"></i>মরিচ-রসুনের স্প্রে</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>কাঁচা মরিচ - ১০টি</li>
                                <li>রসুন - ৫ কোয়া</li>
                                <li>পানি - ১ লিটার</li>
                                <li>তরল সাবান - ১ চা চামচ</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> মরিচ-রসুন পিষে পানিতে মিশিয়ে ছেঁকে স্প্রে করুন। সব ধরনের পোকার বিরুদ্ধে কার্যকর।</p>
                    </div>

                    <div class="remedy-card">
                        <h4><i class="fas fa-flask remedy-icon"></i>সাবানের পানি</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>তরল সাবান - ২ চা চামচ</li>
                                <li>পানি - ১ লিটার</li>
                                <li>রান্নার তেল - ১ চা চামচ (ঐচ্ছিক)</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> জাব পোকা, মাইট ও নরম দেহের পোকা নিয়ন্ত্রণে খুবই কার্যকর। সপ্তাহে ২-৩ বার স্প্রে করুন।</p>
                    </div>

                    <div class="remedy-card">
                        <h4><i class="fas fa-coffee remedy-icon"></i>কফি স্প্রে</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>ব্যবহৃত কফি গুঁড়া - ২ কাপ</li>
                                <li>পানি - ১ লিটার</li>
                                <li>২৪ ঘণ্টা ভিজিয়ে রাখুন</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> শামুক, গন্ডার পোকা ও পিঁপড়া নিয়ন্ত্রণে কার্যকর। মাটিতে ছিটিয়ে দিন।</p>
                    </div>

                    <div class="remedy-card">
                        <h4><i class="fas fa-lemon remedy-icon"></i>লেবুর রসের স্প্রে</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>লেবুর রস - ৩ টেবিল চামচ</li>
                                <li>পানি - ১ লিটার</li>
                                <li>তরল সাবান - ১ চা চামচ</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> জাব পোকা ও মাকড়সার জন্য কার্যকর। সকালে বা সন্ধ্যায় স্প্রে করুন।</p>
                    </div>

                    <div class="remedy-card">
                        <h4><i class="fas fa-wine-bottle remedy-icon"></i>ভিনেগার স্প্রে</h4>
                        <div class="ingredients">
                            <h5>উপাদান:</h5>
                            <ul>
                                <li>সাদা ভিনেগার - ২ চা চামচ</li>
                                <li>পানি - ১ লিটার</li>
                                <li>চিনি - ১ চা চামচ</li>
                            </ul>
                        </div>
                        <p><strong>ব্যবহার:</strong> পিঁপড়া ও কিছু নরম পোকা নিয়ন্ত্রণে ব্যবহার করুন। সপ্তাহে একবার প্রয়োগ করুন।</p>
                    </div>
                </div>
            </section>

            <!-- Warning -->
            <div class="warning-box">
                <div class="warning-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div>
                    <h4>সতর্কতা</h4>
                    <p><strong>কীটনাশক ব্যবহারের সময় নিরাপত্তা নিশ্চিত করুন:</strong></p>
                    <p>• গ্লাভস, মাস্ক ও সুরক্ষা পোশাক পরিধান করুন</p>
                    <p>• প্রস্তুতকারকের নির্দেশনা অনুসরণ করুন</p>
                    <p>• শিশু ও গর্ভবতী মহিলাদের কাছ থেকে দূরে রাখুন</p>
                    <p>• ফসল সংগ্রহের নির্দিষ্ট দিন পর্যন্ত অপেক্ষা করুন</p>
                    <p>• পরিবেশ বান্ধব পদ্ধতি প্রাধান্য দিন</p>
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
                    পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণের বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/RhGBIwLKyJk" 
                        title="পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণ - Pest Control and Identification"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    এই ভিডিওতে কৃষি ক্ষেতের ক্ষতিকর পোকামাকড় চিনে নেওয়া, প্রাকৃতিক ও রাসায়নিক নিয়ন্ত্রণ পদ্ধতি সম্পর্কে বিস্তারিত দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
