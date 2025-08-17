<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>মাটি পরীক্ষার কৌশল | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
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
            background: linear-gradient(135deg, var(--primary-green), #089c24);
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

        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .tool-card {
            background: var(--light-green);
            padding: 20px;
            border-radius: 12px;
            border: 2px solid var(--border-light);
            text-align: center;
            transition: transform 0.2s;
        }

        .tool-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px var(--shadow-medium);
        }

        .tool-icon {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 15px;
        }

        .steps-list {
            counter-reset: step-counter;
        }

        .step-item {
            counter-increment: step-counter;
            background: var(--light-green);
            margin: 15px 0;
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid var(--primary-green);
            position: relative;
        }

        .step-item::before {
            content: counter(step-counter);
            position: absolute;
            left: -15px;
            top: 15px;
            background: var(--primary-green);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .tip-card {
            background: #fff3cd;
            padding: 20px;
            border-radius: 12px;
            border-left: 5px solid #ffc107;
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

        @media (max-width: 768px) {
            .tutorial-hero h1 { font-size: 2rem; }
            .content-section { padding: 25px; }
            .tools-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="tutorial-hero">
        <div class="tutorial-icon-large"><i class="fas fa-vial"></i></div>
        <h1>মাটি পরীক্ষার কৌশল</h1>
        <p>ভাল ফসল উৎপাদনের জন্য মাটির গুণমান এবং পুষ্টি পরীক্ষা করার বিস্তারিত পদ্ধতি</p>
    </div>

    <div class="tutorial-content">
        <a href="/tutorials" class="back-btn">
            <i class="fas fa-arrow-left"></i> টিউটোরিয়াল তালিকায় ফিরুন
        </a>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i> মাটি পরীক্ষা কেন গুরুত্বপূর্ণ?
            </h2>
            <p>মাটি পরীক্ষা হল কৃষিকাজের ভিত্তি। এটি আপনাকে জানতে সাহায্য করে:</p>
            <ul>
                <li><strong>পুষ্টি উপাদানের পরিমাণ:</strong> নাইট্রোজেন, ফসফরাস, পটাশিয়াম</li>
                <li><strong>মাটির pH মাত্রা:</strong> অম্লত্ব বা ক্ষারত্বের পরিমাণ</li>
                <li><strong>জৈব পদার্থের পরিমাণ:</strong> মাটির উর্বরতা নির্ধারণ</li>
                <li><strong>মাটির গঠন:</strong> বালি, পলি, কাদার অনুপাত</li>
                <li><strong>লবণাক্ততার মাত্রা:</strong> ফসলের বৃদ্ধিতে প্রভাব</li>
            </ul>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-tools"></i> প্রয়োজনীয় সরঞ্জাম ও উপকরণ
            </h2>
            <div class="tools-grid">
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-shovel"></i></div>
                    <h4>খনন সরঞ্জাম</h4>
                    <p>কোদাল, বেলচা, মাটি নমুনা সংগ্রহের জন্য</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-vials"></i></div>
                    <h4>টেস্ট কিট</h4>
                    <p>pH টেস্ট কিট, NPK টেস্ট কিট</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-thermometer-half"></i></div>
                    <h4>pH মিটার</h4>
                    <p>ডিজিটাল pH মিটার বা লিটমাস পেপার</p>
                </div>
                <div class="tool-card">
                    <div class="tool-icon"><i class="fas fa-flask"></i></div>
                    <h4>নমুনা পাত্র</h4>
                    <p>প্লাস্টিক বা কাচের পাত্র</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-list-ol"></i> ধাপে ধাপে মাটি পরীক্ষার পদ্ধতি
            </h2>
            <div class="steps-list">
                <div class="step-item">
                    <h4>নমুনা সংগ্রহের স্থান নির্বাচন</h4>
                    <p>জমির বিভিন্ন স্থান থেকে ৫-১০টি নমুনা সংগ্রহ করুন। প্রতিটি নমুনা ৬-৮ ইঞ্চি গভীর থেকে নিন।</p>
                </div>
                <div class="step-item">
                    <h4>মাটির নমুনা প্রস্তুতি</h4>
                    <p>সংগ্রহ করা মাটি একসাথে মিশিয়ে ছায়ায় শুকান। বড় ঢিলা ভেঙে গুঁড়ো করুন।</p>
                </div>
                <div class="step-item">
                    <h4>pH পরীক্ষা</h4>
                    <p>১ অংশ মাটির সাথে ২ অংশ পরিষ্কার পানি মিশিয়ে ৩০ মিনিট রেখে দিন। pH মিটার বা লিটমাস পেপার দিয়ে পরীক্ষা করুন।</p>
                </div>
                <div class="step-item">
                    <h4>NPK পরীক্ষা</h4>
                    <p>টেস্ট কিট ব্যবহার করে নাইট্রোজেন, ফসফরাস ও পটাশিয়ামের মাত্রা পরীক্ষা করুন।</p>
                </div>
                <div class="step-item">
                    <h4>ফলাফল বিশ্লেষণ</h4>
                    <p>পাওয়া ফলাফল অনুযায়ী সার প্রয়োগের পরিকল্পনা তৈরি করুন।</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-lightbulb"></i> গুরুত্বপূর্ণ পরামর্শ
            </h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h4><i class="fas fa-calendar"></i> সময়ের গুরুত্ব</h4>
                    <p>বর্ষার আগে বা ফসল রোপণের ২-৩ মাস আগে মাটি পরীক্ষা করুন।</p>
                </div>
                <div class="tip-card">
                    <h4><i class="fas fa-map-marker-alt"></i> নমুনা সংগ্রহ</h4>
                    <p>জমির বিভিন্ন কোণ থেকে নমুনা নিন। একই স্থান থেকে নেবেন না।</p>
                </div>
                <div class="tip-card">
                    <h4><i class="fas fa-ban"></i> এড়িয়ে চলুন</h4>
                    <p>সার প্রয়োগের ২ সপ্তাহ পর মাটি পরীক্ষা করবেন না।</p>
                </div>
                <div class="tip-card">
                    <h4><i class="fas fa-sync"></i> নিয়মিততা</h4>
                    <p>প্রতি ২-৩ বছর পরপর মাটি পরীক্ষা করুন।</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-chart-bar"></i> ফলাফলের ব্যাখ্যা
            </h2>
            <h4>pH মাত্রা:</h4>
            <ul>
                <li><strong>৬.০-৭.৫:</strong> আদর্শ (বেশিরভাগ ফসলের জন্য)</li>
                <li><strong>৫.৫-৬.০:</strong> সামান্য অম্লীয় (চুন প্রয়োগ করুন)</li>
                <li><strong>৭.৫-৮.৫:</strong> সামান্য ক্ষারীয় (জৈব সার ব্যবহার করুন)</li>
            </ul>
            
            <h4>NPK মাত্রা:</h4>
            <ul>
                <li><strong>উচ্চ:</strong> অতিরিক্ত সার প্রয়োজন নেই</li>
                <li><strong>মাঝারি:</strong> সাধারণ মাত্রায় সার দিন</li>
                <li><strong>কম:</strong> বেশি পরিমাণে সার প্রয়োগ করুন</li>
            </ul>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
