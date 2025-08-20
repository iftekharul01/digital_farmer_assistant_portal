<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>আবহাওয়ার পূর্বাভাস | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link hr        .back-btn:hover {
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

        .seasonal-tips {ps://fonts.googleap    <div class="tutorial-content">
        <a href="/tutorials" class="back-btn">
            <i class="fas fa-arrow-left"></i> টিউটোরিয়াল পেজে ফিরে যান
        </a>
        <!-- Tutorial Video Section -->
        <div class="content-section">/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
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

        /* Tutorial Page Styles */
        .tutorial-hero {
            background: linear-gradient(135deg, #2193b0, #6dd5ed);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }
        .tutorial-hero h1 {
            font-size: 2.5rem;
            font-weight: 900;
            margin-bottom: 15px;
        }
        .tutorial-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        .tutorial-icon-large {
            font-size: 4rem;
            margin-bottom: 20px;
        }

        .tutorial-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        .content-section {
            background: white;
            border-radius: 16px;
            box-shadow: 0 6px 30px var(--shadow-card);
            padding: 40px;
            margin-bottom: 30px;
            border: 2px solid var(--border-light);
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-green);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .weather-tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .weather-tool-card {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #2196f3;
            text-align: center;
            transition: transform 0.2s;
        }

        .weather-tool-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(33, 150, 243, 0.3);
        }

        .weather-icon {
            font-size: 2.5rem;
            color: #1976d2;
            margin-bottom: 15px;
        }

        .weather-signs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .sign-card {
            background: #fff8e1;
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid #ff9800;
        }

        .apps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .app-card {
            background: var(--light-green);
            padding: 20px;
            border-radius: 12px;
            border: 2px solid var(--primary-green);
            text-align: center;
        }

        .back-btn {
            background: var(--primary-green);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s;
            margin-bottom: 30px;
        }

        .back-btn:hover {
            background: #089c24;
            color: white;
            text-decoration: none;
        }

        .seasonal-tips {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .season-card {
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            color: white;
            font-weight: 600;
        }

        .season-spring { background: linear-gradient(135deg, #a8e6cf, #88d8a3); }
        .season-summer { background: linear-gradient(135deg, #ffd93d, #ff6b6b); }
        .season-monsoon { background: linear-gradient(135deg, #4ecdc4, #44a08d); }
        .season-winter { background: linear-gradient(135deg, #74b9ff, #0984e3); }

        @media (max-width: 768px) {
            .tutorial-hero h1 { font-size: 2rem; }
            .content-section { padding: 25px; }
            .weather-tools-grid, .apps-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="tutorial-hero">
        <div class="tutorial-icon-large"><i class="fas fa-cloud-sun"></i></div>
        <h1>কৃষকদের জন্য আবহাওয়ার পূর্বাভাস</h1>
        <p>কৃষি কাজের পরিকল্পনার জন্য আবহাওয়ার ধরণ এবং পূর্বাভাস বোঝার সম্পূর্ণ গাইড</p>
    </div>

    <div class="tutorial-content">
        <a href="/tutorials" class="back-btn">
            <i class="fas fa-arrow-left"></i> টিউটোরিয়াল তালিকায় ফিরুন
        </a>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i> আবহাওয়া পূর্বাভাসের গুরুত্ব
            </h2>
            <p>আবহাওয়ার পূর্বাভাস কৃষকদের জন্য অত্যন্ত গুরুত্বপূর্ণ কারণ:</p>
            <ul>
                <li><strong>বীজ বপন:</strong> সঠিক সময়ে বীজ রোপণের পরিকল্পনা</li>
                <li><strong>সেচ ব্যবস্থাপনা:</strong> পানির অপচয় রোধ ও সঠিক সেচ</li>
                <li><strong>ফসল সংগ্রহ:</strong> উপযুক্ত সময়ে ফসল কাটা</li>
                <li><strong>রোগ নিয়ন্ত্রণ:</strong> আর্দ্রতা জনিত রোগ প্রতিরোধ</li>
                <li><strong>ক্ষতি প্রতিরোধ:</strong> প্রাকৃতিক দুর্যোগ থেকে রক্ষা</li>
            </ul>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-tools"></i> আবহাওয়া পর্যবেক্ষণের সরঞ্জাম
            </h2>
            <div class="weather-tools-grid">
                <div class="weather-tool-card">
                    <div class="weather-icon"><i class="fas fa-thermometer-half"></i></div>
                    <h4>থার্মোমিটার</h4>
                    <p>তাপমাত্রা পরিমাপের জন্য</p>
                </div>
                <div class="weather-tool-card">
                    <div class="weather-icon"><i class="fas fa-tint"></i></div>
                    <h4>বৃষ্টিমাপক</h4>
                    <p>বৃষ্টির পরিমাণ মাপার জন্য</p>
                </div>
                <div class="weather-tool-card">
                    <div class="weather-icon"><i class="fas fa-wind"></i></div>
                    <h4>বাতাসের গতিমাপক</h4>
                    <p>বাতাসের গতি ও দিক নির্ণয়</p>
                </div>
                <div class="weather-tool-card">
                    <div class="weather-icon"><i class="fas fa-eye"></i></div>
                    <h4>ব্যারোমিটার</h4>
                    <p>বায়ুচাপ পরিমাপ</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-mobile-alt"></i> দরকারী মোবাইল অ্যাপ
            </h2>
            <div class="apps-grid">
                <div class="app-card">
                    <h4><i class="fas fa-cloud-rain"></i> BMD Weather</h4>
                    <p>বাংলাদেশ আবহাওয়া অধিদপ্তরের অফিসিয়াল অ্যাপ</p>
                </div>
                <div class="app-card">
                    <h4><i class="fas fa-seedling"></i> Krishi Tathya</h4>
                    <p>কৃষি তথ্য ও আবহাওয়া পূর্বাভাস</p>
                </div>
                <div class="app-card">
                    <h4><i class="fas fa-satellite"></i> Weather Underground</h4>
                    <p>স্থানীয় আবহাওয়ার বিস্তারিত তথ্য</p>
                </div>
                <div class="app-card">
                    <h4><i class="fas fa-chart-line"></i> AccuWeather</h4>
                    <p>দীর্ঘমেয়াদী আবহাওয়ার পূর্বাভাস</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-eye"></i> প্রাকৃতিক আবহাওয়ার লক্ষণ
            </h2>
            <div class="weather-signs-grid">
                <div class="sign-card">
                    <h4><i class="fas fa-cloud"></i> বৃষ্টির পূর্বলক্ষণ</h4>
                    <ul>
                        <li>কালো মেঘ জমা হওয়া</li>
                        <li>বাতাসের গতি বৃদ্ধি</li>
                        <li>পিপঁড়ার সারিবদ্ধ চলাচল</li>
                        <li>ব্যাঙের ডাকাডাকি</li>
                    </ul>
                </div>
                <div class="sign-card">
                    <h4><i class="fas fa-sun"></i> রৌদ্রোজ্জ্বল দিনের লক্ষণ</h4>
                    <ul>
                        <li>পরিষ্কার আকাশ</li>
                        <li>হালকা বাতাস</li>
                        <li>শিশিরের অনুপস্থিতি</li>
                        <li>পাখির স্বাভাবিক আচরণ</li>
                    </ul>
                </div>
                <div class="sign-card">
                    <h4><i class="fas fa-snowflake"></i> শীতের লক্ষণ</h4>
                    <ul>
                        <li>সকালে ঘন কুয়াশা</li>
                        <li>শিশির পড়া</li>
                        <li>বাতাসের দিক পরিবর্তন</li>
                        <li>পশুপাখির আচরণে পরিবর্তন</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-calendar-alt"></i> ঋতুভিত্তিক কৃষি পরিকল্পনা
            </h2>
            <div class="seasonal-tips">
                <div class="season-card season-spring">
                    <h4><i class="fas fa-leaf"></i> বসন্তকাল</h4>
                    <p>বীজতলা প্রস্তুতি ও বোরো ধানের যত্ন নিন</p>
                </div>
                <div class="season-card season-summer">
                    <h4><i class="fas fa-sun"></i> গ্রীষ্মকাল</h4>
                    <p>পানির সংরক্ষণ ও গ্রীষ্মকালীন ফসলের চাষ</p>
                </div>
                <div class="season-card season-monsoon">
                    <h4><i class="fas fa-cloud-rain"></i> বর্ষাকাল</h4>
                    <p>আমন ধান রোপণ ও জলাবদ্ধতা রোধ</p>
                </div>
                <div class="season-card season-winter">
                    <h4><i class="fas fa-snowflake"></i> শীতকাল</h4>
                    <p>রবি ফসল চাষ ও ঠাণ্ডা থেকে সুরক্ষা</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-exclamation-triangle"></i> সতর্কতা ও প্রতিরোধ
            </h2>
            <h4>প্রাকৃতিক দুর্যোগের প্রস্তুতি:</h4>
            <ul>
                <li><strong>ঝড়-বৃষ্টি:</strong> ফসলের উপর ছাউনি দিন</li>
                <li><strong>খরা:</strong> পানি সংরক্ষণ ব্যবস্থা তৈরি করুন</li>
                <li><strong>বন্যা:</strong> উঁচু জমিতে ফসল সংরক্ষণ করুন</li>
                <li><strong>শিলাবৃষ্টি:</strong> নেট বা ছাউনি ব্যবহার করুন</li>
            </ul>
            
            <h4>আবহাওয়া সংকেত:</h4>
            <ul>
                <li><strong>১ নং সংকেত:</strong> দূরবর্তী সতর্কতা</li>
                <li><strong>৩ নং সংকেত:</strong> স্থানীয় সতর্কতা</li>
                <li><strong>৭ নং সংকেত:</strong> বিপদ সংকেত</li>
                <li><strong>১০ নং সংকেত:</strong> মহাবিপদ সংকেত</li>
            </ul>
        </div>
    </div>

    <!-- Tutorial Video Section -->
    <section class="tutorial-video-section">
        <div class="container">
            <div class="video-content">
                <h2 class="video-title">
                    <i class="fas fa-play-circle"></i>
                    টিউটোরিয়াল ভিডিও
                </h2>
                <p class="video-subtitle">
                    আবহাওয়ার পূর্বাভাস ও প্রাকৃতিক সংকেত বোঝার বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/ewJ6TI8ccAw" 
                        title="কৃষকদের জন্য আবহাওয়ার পূর্বাভাস - Weather Forecasting for Farmers"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    এই ভিডিওতে কৃষি কাজের জন্য আবহাওয়ার পূর্বাভাস কীভাবে ব্যবহার করবেন এবং প্রাকৃতিক সংকেত চিনে নেওয়ার উপায় বিস্তারিতভাবে দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
