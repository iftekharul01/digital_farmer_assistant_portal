<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>ফসল নির্বাচন | কৃষক পোর্টাল</title>
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

        /* Header Styles - Same as previous */
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
            background: linear-gradient(135deg, var(--primary-green), #27ae60);
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

        .crops-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin: 25px 0;
        }

        .crop-card {
            background: var(--light-green);
            padding: 25px;
            border-radius: 15px;
            border: 2px solid var(--primary-green);
            text-align: center;
            transition: transform 0.2s;
        }

        .crop-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px var(--shadow-medium);
        }

        .crop-icon {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .rice-icon { color: #f39c12; }
        .wheat-icon { color: #e67e22; }
        .corn-icon { color: #f1c40f; }
        .vegetable-icon { color: #2ecc71; }

        .factors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .factor-card {
            background: #fff3e0;
            padding: 25px;
            border-radius: 12px;
            border-left: 5px solid #ff9800;
        }

        .season-crops {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 25px 0;
        }

        .season-card {
            padding: 25px;
            border-radius: 15px;
            color: white;
            text-align: center;
        }

        .rabi-season { background: linear-gradient(135deg, #3498db, #2980b9); }
        .kharif-season { background: linear-gradient(135deg, #27ae60, #229954); }
        .summer-season { background: linear-gradient(135deg, #e74c3c, #c0392b); }

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

        .calculator-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            margin: 25px 0;
            border: 2px dashed var(--primary-green);
        }

        .calc-input {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            margin: 8px 0;
            font-size: 1rem;
        }

        .calc-button {
            background: var(--primary-green);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .calc-button:hover {
            background: #089c24;
        }

        .result-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            border-left: 5px solid var(--primary-green);
        }

        @media (max-width: 768px) {
            .tutorial-hero h1 { font-size: 2rem; }
            .content-section { padding: 25px; }
            .crops-grid, .factors-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="tutorial-hero">
        <div class="tutorial-icon-large"><i class="fas fa-seedling"></i></div>
        <h1>সঠিক ফসল নির্বাচনের উপায়</h1>
        <p>মাটি, জলবায়ু এবং বাজারের চাহিদার ভিত্তিতে লাভজনক ফসল নির্বাচনের সম্পূর্ণ গাইড</p>
    </div>

    <div class="tutorial-content">
        <a href="/tutorials" class="back-btn">
            <i class="fas fa-arrow-left"></i> টিউটোরিয়াল তালিকায় ফিরুন
        </a>

        <!-- Tutorial Video Section -->
        <div class="content-section">
        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-info-circle"></i> ফসল নির্বাচনের গুরুত্ব
            </h2>
            <p>সঠিক ফসল নির্বাচন কৃষকের সাফল্যের চাবিকাঠি। এটি নিম্নোক্ত বিষয়গুলোর উপর প্রভাব ফেলে:</p>
            <ul>
                <li><strong>লাভজনকতা:</strong> সর্বোচ্চ আয় ও সর্বনিম্ন খরচ</li>
                <li><strong>মাটির স্বাস্থ্য:</strong> মাটির উর্বরতা বৃদ্ধি ও সংরক্ষণ</li>
                <li><strong>পানির ব্যবহার:</strong> পানির সাশ্রয়ী ব্যবহার</li>
                <li><strong>রোগ প্রতিরোধ:</strong> কীটপতঙ্গ ও রোগের প্রকোপ কমানো</li>
                <li><strong>বাজারের চাহিদা:</strong> উচ্চ দামে বিক্রয়ের সুযোগ</li>
            </ul>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-balance-scale"></i> ফসল নির্বাচনের মূল বিবেচ্য বিষয়
            </h2>
            <div class="factors-grid">
                <div class="factor-card">
                    <h4><i class="fas fa-globe"></i> জলবায়ু</h4>
                    <ul>
                        <li>তাপমাত্রা ও আর্দ্রতা</li>
                        <li>বৃষ্টিপাতের পরিমাণ</li>
                        <li>সূর্যের আলো</li>
                        <li>ঋতুর দৈর্ঘ্য</li>
                    </ul>
                </div>
                <div class="factor-card">
                    <h4><i class="fas fa-mountain"></i> মাটির ধরণ</h4>
                    <ul>
                        <li>মাটির pH মাত্রা</li>
                        <li>পুষ্টি উপাদান</li>
                        <li>জৈব পদার্থের পরিমাণ</li>
                        <li>পানি নিষ্কাশন</li>
                    </ul>
                </div>
                <div class="factor-card">
                    <h4><i class="fas fa-tint"></i> পানির প্রাপ্যতা</h4>
                    <ul>
                        <li>সেচের ব্যবস্থা</li>
                        <li>ভূগর্ভস্থ পানির স্তর</li>
                        <li>প্রাকৃতিক বৃষ্টিপাত</li>
                        <li>পানির গুণগত মান</li>
                    </ul>
                </div>
                <div class="factor-card">
                    <h4><i class="fas fa-chart-line"></i> বাজার বিশ্লেষণ</h4>
                    <ul>
                        <li>চাহিদা ও সরবরাহ</li>
                        <li>স্থানীয় বাজারের দাম</li>
                        <li>রপ্তানির সুযোগ</li>
                        <li>প্রক্রিয়াজাতকরণ</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-calendar-alt"></i> ঋতুভিত্তিক ফসল নির্বাচন
            </h2>
            <div class="season-crops">
                <div class="season-card rabi-season">
                    <h3><i class="fas fa-snowflake"></i> রবি মৌসুম (নভেম্বর-এপ্রিল)</h3>
                    <h4>উপযুক্ত ফসল:</h4>
                    <ul style="text-align: left;">
                        <li>গম, ভুট্টা, যব</li>
                        <li>সরিষা, তিল, তিসি</li>
                        <li>মসুর, ছোলা, মটর</li>
                        <li>আলু, টমেটো, পেঁয়াজ</li>
                    </ul>
                </div>
                <div class="season-card kharif-season">
                    <h3><i class="fas fa-cloud-rain"></i> খরিফ মৌসুম (জুন-অক্টোবর)</h3>
                    <h4>উপযুক্ত ফসল:</h4>
                    <ul style="text-align: left;">
                        <li>ধান (আমন), পাট</li>
                        <li>তুলা, আখ</li>
                        <li>শিম, বরবটি</li>
                        <li>লাউ, কুমড়া, করলা</li>
                    </ul>
                </div>
                <div class="season-card summer-season">
                    <h3><i class="fas fa-sun"></i> গ্রীষ্মকাল (মার্চ-জুন)</h3>
                    <h4>উপযুক্ত ফসল:</h4>
                    <ul style="text-align: left;">
                        <li>বোরো ধান</li>
                        <li>তরমুজ, খরমুজ</li>
                        <li>ঢেঁড়স, বেগুন</li>
                        <li>শসা, চিচিঙ্গা</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-seedling"></i> জনপ্রিয় ফসলের বিস্তারিত তথ্য
            </h2>
            <div class="crops-grid">
                <div class="crop-card">
                    <div class="crop-icon rice-icon"><i class="fas fa-wheat"></i></div>
                    <h4>ধান</h4>
                    <p><strong>উপযুক্ত মাটি:</strong> এঁটেল ও দোআঁশ</p>
                    <p><strong>pH:</strong> ৫.৫-৭.০</p>
                    <p><strong>সময়:</strong> বোরো ও আমন</p>
                    <p><strong>পানি:</strong> প্রচুর পানি প্রয়োজন</p>
                </div>
                <div class="crop-card">
                    <div class="crop-icon wheat-icon"><i class="fas fa-bread-slice"></i></div>
                    <h4>গম</h4>
                    <p><strong>উপযুক্ত মাটি:</strong> দোআঁশ ও বেলে দোআঁশ</p>
                    <p><strong>pH:</strong> ৬.০-৭.৫</p>
                    <p><strong>সময়:</strong> নভেম্বর-ডিসেম্বর</p>
                    <p><strong>পানি:</strong> কম পানি প্রয়োজন</p>
                </div>
                <div class="crop-card">
                    <div class="crop-icon corn-icon"><i class="fas fa-corn"></i></div>
                    <h4>ভুট্টা</h4>
                    <p><strong>উপযুক্ত মাটি:</strong> সব ধরনের মাটি</p>
                    <p><strong>pH:</strong> ৫.৮-৭.৮</p>
                    <p><strong>সময়:</strong> সারা বছর</p>
                    <p><strong>পানি:</strong> মাঝারি পানি</p>
                </div>
                <div class="crop-card">
                    <div class="crop-icon vegetable-icon"><i class="fas fa-carrot"></i></div>
                    <h4>শাকসবজি</h4>
                    <p><strong>উপযুক্ত মাটি:</strong> জৈব সমৃদ্ধ দোআঁশ</p>
                    <p><strong>pH:</strong> ৬.০-৭.০</p>
                    <p><strong>সময়:</strong> ঋতু অনুযায়ী</p>
                    <p><strong>পানি:</strong> নিয়মিত সেচ</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-calculator"></i> লাভজনকতা ক্যালকুলেটর
            </h2>
            <div class="calculator-section">
                <h4>আপনার ফসলের লাভজনকতা হিসাব করুন:</h4>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 15px;">
                    <div>
                        <label>জমির পরিমাণ (বিঘা):</label>
                        <input type="number" id="landSize" class="calc-input" placeholder="জমির পরিমাণ">
                    </div>
                    <div>
                        <label>বীজ খরচ (টাকা):</label>
                        <input type="number" id="seedCost" class="calc-input" placeholder="বীজের খরচ">
                    </div>
                    <div>
                        <label>সার খরচ (টাকা):</label>
                        <input type="number" id="fertilizerCost" class="calc-input" placeholder="সারের খরচ">
                    </div>
                    <div>
                        <label>শ্রমিক খরচ (টাকা):</label>
                        <input type="number" id="laborCost" class="calc-input" placeholder="শ্রমিকের খরচ">
                    </div>
                    <div>
                        <label>প্রত্যাশিত ফলন (মন):</label>
                        <input type="number" id="expectedYield" class="calc-input" placeholder="ফলন">
                    </div>
                    <div>
                        <label>বিক্রয় মূল্য (টাকা/মন):</label>
                        <input type="number" id="sellPrice" class="calc-input" placeholder="বিক্রয় মূল্য">
                    </div>
                </div>
                <button class="calc-button" onclick="calculateProfit()">লাভ হিসাব করুন</button>
                <div id="profitResult" class="result-box" style="display: none;">
                    <h4>হিসাবের ফলাফল:</h4>
                    <p id="resultText"></p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2 class="section-title">
                <i class="fas fa-lightbulb"></i> সফল ফসল নির্বাচনের টিপস
            </h2>
            <ul>
                <li><strong>স্থানীয় কৃষি কর্মকর্তার সাথে পরামর্শ:</strong> বিশেষজ্ঞ মতামত নিন</li>
                <li><strong>প্রতিবেশীদের অভিজ্ঞতা:</strong> স্থানীয় কৃষকদের সাথে কথা বলুন</li>
                <li><strong>বাজার গবেষণা:</strong> নিয়মিত বাজারের দাম পর্যবেক্ষণ করুন</li>
                <li><strong>ছোট পরিসরে পরীক্ষা:</strong> নতুন ফসল প্রথমে ছোট জমিতে চাষ করুন</li>
                <li><strong>বৈচিত্র্যকরণ:</strong> একাধিক ফসল চাষ করে ঝুঁকি কমান</li>
                <li><strong>জলবায়ু পরিবর্তন:</strong> ভবিষ্যত জলবায়ু পরিবর্তনের কথা বিবেচনা করুন</li>
            </ul>
        </div>
    </div>

    <script>
        function calculateProfit() {
            const landSize = parseFloat(document.getElementById('landSize').value) || 0;
            const seedCost = parseFloat(document.getElementById('seedCost').value) || 0;
            const fertilizerCost = parseFloat(document.getElementById('fertilizerCost').value) || 0;
            const laborCost = parseFloat(document.getElementById('laborCost').value) || 0;
            const expectedYield = parseFloat(document.getElementById('expectedYield').value) || 0;
            const sellPrice = parseFloat(document.getElementById('sellPrice').value) || 0;

            const totalCost = seedCost + fertilizerCost + laborCost;
            const totalIncome = expectedYield * sellPrice;
            const profit = totalIncome - totalCost;
            const profitPerBigha = landSize > 0 ? profit / landSize : 0;

            const resultDiv = document.getElementById('profitResult');
            const resultText = document.getElementById('resultText');

            resultDiv.style.display = 'block';
            resultText.innerHTML = `
                <strong>মোট খরচ:</strong> ${totalCost.toLocaleString()} টাকা<br>
                <strong>মোট আয়:</strong> ${totalIncome.toLocaleString()} টাকা<br>
                <strong>মোট লাভ:</strong> ${profit.toLocaleString()} টাকা<br>
                <strong>বিঘা প্রতি লাভ:</strong> ${profitPerBigha.toLocaleString()} টাকা<br>
                <strong>লাভের হার:</strong> ${totalCost > 0 ? ((profit/totalCost)*100).toFixed(2) : 0}%
            `;
        }
    </script>

    <!-- Tutorial Video Section -->
    <section class="tutorial-video-section">
        <div class="container">
            <div class="video-content">
                <h2 class="video-title">
                    <i class="fas fa-play-circle"></i>
                    টিউটোরিয়াল ভিডিও
                </h2>
                <p class="video-subtitle">
                    সঠিক ফসল নির্বাচনের কৌশল ও লাভজনক কৃষির বিস্তারিত ভিডিও টিউটোরিয়াল
                </p>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/boeI9UHFI1I" 
                        title="সঠিক ফসল নির্বাচনের উপায় - Crop Selection Guide"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="video-description">
                    এই ভিডিওতে মাটি, জলবায়ু এবং বাজারের চাহিদা বিবেচনা করে লাভজনক ফসল নির্বাচনের বিস্তারিত পদ্ধতি দেখানো হয়েছে।
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
</body>
</html>
