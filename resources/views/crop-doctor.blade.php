<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Crop Doctor - AI Plant Disease Diagnosis | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #0bd429;
            --light-green: #eafce9;
            --dark-green: #1e3d2c;
            --shadow-light: rgba(11,212,41,0.07);
            --shadow-medium: rgba(11,212,41,0.15);
            --shadow-heavy: rgba(11,212,41,0.25);
            --text-color-light: #f2fff6;
            --text-color-dark: #555;
            --border-light: #b2eac1;
            --gradient-primary: linear-gradient(135deg, #0bd429 0%, #20c96a 100%);
            --gradient-light: linear-gradient(135deg, #eafce9 0%, #f0fff0 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f9fafb 0%, #f0fff0 100%);
            font-family: 'Manrope', sans-serif;
            line-height: 1.6;
            color: var(--text-color-dark);
        }

        /* Header Styles */
        .header {
            background: var(--primary-green);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 4px 20px var(--shadow-medium);
        }
        .header-wrapper {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
            height: 74px;
            position: relative;
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
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            white-space: nowrap;
        }
        .nav-link:hover, .nav-link.active {
            background: white !important;
            color: var(--primary-green) !important;
            text-decoration: none;
            transform: translateY(-2px);
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
            transition: transform 0.3s ease;
        }
        .user-profile .profile-icon:hover {
            transform: scale(1.1);
        }
        .user-profile .profile-icon i {
            color: var(--primary-green);
            font-size: 1.3rem;
        }

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            color: white;
            cursor: pointer;
            margin-left: auto;
            z-index: 1001;
        }

        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: -100%;
            width: 250px;
            height: 100%;
            background: var(--primary-green);
            color: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.2);
            transition: left 0.3s ease-in-out;
            z-index: 2000;
            display: flex;
            flex-direction: column;
            padding-top: 60px;
        }

        .mobile-menu-overlay.active {
            left: 0;
        }

        .mobile-menu-overlay .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2.5rem;
            cursor: pointer;
            color: white;
        }

        .mobile-navbar {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
        }

        .mobile-navbar .nav-link {
            font-size: 1.2rem;
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            transition: background 0.2s, color 0.2s;
            border-radius: 5px;
        }

        .mobile-navbar .nav-link:hover,
        .mobile-navbar .nav-link.active {
            background: white;
            color: var(--primary-green);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            padding: 100px 0 60px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="rgba(255,255,255,.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0)"/></radialGradient></defs><rect width="100" height="20" fill="url(%23a)"/></svg>') repeat;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.95;
        }

        .hero-features {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.1);
            padding: 12px 20px;
            border-radius: 25px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .hero-feature:hover {
            transform: translateY(-3px);
        }

        .hero-feature i {
            font-size: 1.5rem;
        }

        /* Main Content */
        .main-container {
            max-width: 1200px;
            margin: 40px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Upload Section */
        .upload-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px var(--shadow-medium);
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .upload-section:hover {
            transform: translateY(-2px);
            box-shadow: 0 25px 80px var(--shadow-heavy);
        }

        .upload-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .upload-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .upload-title i {
            color: var(--primary-green);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .upload-description {
            font-size: 1.2rem;
            color: var(--text-color-dark);
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .upload-area {
            border: 3px dashed var(--border-light);
            border-radius: 15px;
            padding: 60px 40px;
            background: var(--gradient-light);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .upload-area:hover {
            border-color: var(--primary-green);
            background: linear-gradient(135deg, #eafce9 0%, #e0f7e0 100%);
            transform: scale(1.02);
        }

        .upload-area.dragover {
            border-color: var(--primary-green);
            background: linear-gradient(135deg, #eafce9 0%, #d0f0d0 100%);
            box-shadow: inset 0 0 20px rgba(11, 212, 41, 0.2);
        }

        .upload-icon {
            font-size: 4rem;
            color: var(--primary-green);
            margin-bottom: 20px;
            display: block;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0px); }
            25% { transform: translateY(-10px); }
            75% { transform: translateY(5px); }
        }

        .upload-text {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--dark-green);
            margin-bottom: 15px;
        }

        .upload-subtext {
            font-size: 1rem;
            color: var(--text-color-dark);
            margin-bottom: 30px;
        }

        .upload-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .upload-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 5px 15px var(--shadow-light);
        }

        .upload-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px var(--shadow-medium);
        }

        .upload-btn:active {
            transform: translateY(-1px);
        }

        /* Image Preview */
        .image-preview {
            margin-top: 30px;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px var(--shadow-light);
            display: none;
            animation: slideInUp 0.5s ease-out;
        }

        .preview-image {
            max-width: 100%;
            max-height: 400px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            margin-bottom: 20px;
        }

        .preview-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .preview-filename {
            font-weight: 600;
            color: var(--dark-green);
        }

        .preview-size {
            color: var(--text-color-dark);
            font-size: 0.9rem;
        }

        .analyze-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 18px 40px;
            border-radius: 12px;
            font-size: 1.3rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 0 auto;
            box-shadow: 0 8px 25px var(--shadow-medium);
        }

        .analyze-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px var(--shadow-heavy);
        }

        .analyze-btn i {
            font-size: 1.5rem;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.95);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .loading-animation {
            width: 100px;
            height: 100px;
            border: 8px solid #f3f3f3;
            border-top: 8px solid var(--primary-green);
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
            margin-bottom: 30px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .loading-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-green);
            text-align: center;
            margin-bottom: 10px;
        }

        .loading-subtext {
            font-size: 1rem;
            color: var(--text-color-dark);
            text-align: center;
        }

        /* Results Section */
        .results-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px var(--shadow-medium);
            margin-bottom: 40px;
            display: none;
            position: relative;
            overflow: hidden;
        }

        .results-section.active {
            display: block;
            animation: slideInUp 0.8s ease-out;
        }

        .results-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-primary);
        }

        .results-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .results-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .results-title i {
            color: var(--primary-green);
            animation: pulse 2s ease-in-out infinite;
        }

        .results-subtitle {
            font-size: 1.2rem;
            color: var(--text-color-dark);
        }

        .results-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .result-image-section {
            text-align: center;
        }

        .result-image {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .result-image:hover {
            transform: scale(1.05);
        }

        .diagnosis-section {
            padding: 30px;
            background: var(--gradient-light);
            border-radius: 15px;
            border-left: 5px solid var(--primary-green);
        }

        .diagnosis-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .diagnosis-title i {
            color: var(--primary-green);
        }

        .diagnosis-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--text-color-dark);
        }

        .info-sections {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .info-section {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px var(--shadow-light);
            transition: all 0.3s ease;
            border-top: 4px solid var(--primary-green);
        }

        .info-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px var(--shadow-medium);
        }

        .info-section h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-section h3 i {
            color: var(--primary-green);
            font-size: 1.3rem;
        }

        .info-list {
            list-style: none;
            padding: 0;
        }

        .info-list li {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text-color-dark);
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        .info-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--primary-green);
            font-weight: bold;
        }

        /* Action Buttons */
        .action-buttons {
            text-align: center;
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eee;
        }

        .action-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0 10px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px var(--shadow-medium);
        }

        .action-btn.secondary {
            background: white;
            color: var(--primary-green);
            border: 2px solid var(--primary-green);
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            #main-navbar {
                display: none;
            }
            .user-profile {
                display: none;
            }
            .menu-toggle {
                display: block;
            }
            .hero-title {
                font-size: 2.5rem;
            }
            .hero-features {
                flex-direction: column;
                gap: 15px;
            }
            .upload-section {
                padding: 30px 20px;
            }
            .upload-area {
                padding: 40px 20px;
            }
            .upload-buttons {
                flex-direction: column;
                align-items: center;
            }
            .upload-btn {
                width: 100%;
                max-width: 250px;
            }
            .results-content {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .info-sections {
                grid-template-columns: 1fr;
            }
            .action-buttons {
                display: flex;
                flex-direction: column;
                gap: 15px;
                align-items: center;
            }
        }

        @media (max-width: 600px) {
            .hero-title {
                font-size: 2rem;
            }
            .upload-title {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            .results-title {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            .upload-section, .results-section {
                padding: 25px 15px;
            }
            .diagnosis-section {
                padding: 20px;
            }
        }

        /* Animation keyframes */
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
</head>
<body>

    @include('partials.header')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">
                <i class="fas fa-microscope"></i>
                এআই উদ্ভিদ ডাক্তার
            </h1>
            <p class="hero-subtitle">
                কৃত্রিম বুদ্ধিমত্তা দ্বারা চালিত উন্নত উদ্ভিদ রোগ নির্ণয়। শুধুমাত্র আপনার উদ্ভিদের একটি ছবি আপলোড করুন এবং তাৎক্ষণিক বিশেষজ্ঞ বিশ্লেষণ পান।
            </p>
            <div class="hero-features">
                <div class="hero-feature">
                    <i class="fas fa-camera"></i>
                    <span>ছবি আপলোড</span>
                </div>
                <div class="hero-feature">
                    <i class="fas fa-brain"></i>
                    <span>এআই বিশ্লেষণ</span>
                </div>
                <div class="hero-feature">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <span>চিকিৎসা গাইড</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-container">
        <!-- Upload Section -->
        <section class="upload-section" data-aos="fade-up" data-aos-duration="800">
            <h2 class="upload-title">
                <i class="fas fa-leaf"></i>
                উদ্ভিদ রোগ নির্ণয়
            </h2>
            <p class="upload-description">
                আপনার উদ্ভিদের দৃশ্যমান লক্ষণগুলি দেখানো একটি স্পষ্ট ছবি আপলোড করুন। আমাদের এআই ছবিটি বিশ্লেষণ করবে এবং চিকিৎসার সুপারিশ সহ বিস্তারিত নির্ণয় প্রদান করবে।
            </p>
            
            <div class="upload-area" id="upload-area">
                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                <h3 class="upload-text">আপনার ছবি নির্বাচন করুন</h3>
                <p class="upload-subtext">
                    এখানে একটি ছবি টেনে এনে রাখুন, অথবা আপনার ডিভাইস থেকে নির্বাচন করতে ক্লিক করুন
                </p>
                <div class="upload-buttons">
                    <input type="file" id="file-input" accept="image/*" style="display: none;">
                    <button class="upload-btn" id="file-btn">
                        <i class="fas fa-folder-open"></i>
                        ডিভাইস থেকে নির্বাচন
                    </button>
                    <button class="upload-btn" id="drive-btn">
                        <i class="fab fa-google-drive"></i>
                        গুগল ড্রাইভ থেকে
                    </button>
                    <button class="upload-btn" id="paste-btn">
                        <i class="fas fa-paste"></i>
                        ছবি পেস্ট করুন
                    </button>
                </div>
            </div>

            <!-- Image Preview -->
            <div class="image-preview" id="image-preview">
                <img class="preview-image" id="preview-img" alt="Preview">
                <div class="preview-info">
                    <span class="preview-filename" id="filename"></span>
                    <span class="preview-size" id="filesize"></span>
                </div>
                <button class="analyze-btn" id="analyze-btn">
                    <i class="fas fa-microscope"></i>
                    উদ্ভিদ বিশ্লেষণ করুন
                </button>
            </div>
        </section>

        <!-- Results Section -->
        <section class="results-section" id="results-section">
            <div class="results-header">
                <h2 class="results-title">
                    <i class="fas fa-search-plus"></i>
                    নির্ণয়ের ফলাফল
                </h2>
                <p class="results-subtitle">আপনার উদ্ভিদের অবস্থার এআই-চালিত বিশ্লেষণ</p>
            </div>

            <div class="results-content">
                <div class="result-image-section">
                    <img class="result-image" id="result-image" alt="বিশ্লেষিত উদ্ভিদ">
                </div>
                
                <div class="diagnosis-section">
                    <h3 class="diagnosis-title">
                        <i class="fas fa-stethoscope"></i>
                        প্রাথমিক নির্ণয়
                    </h3>
                    <h4 id="disease-name">রোগের নাম</h4>
                    <p class="diagnosis-text" id="disease-description">
                        নির্ণয়কৃত অবস্থার বিস্তারিত বর্ণনা...
                    </p>
                </div>
            </div>

            <div class="info-sections">
                <div class="info-section" data-aos="fade-up" data-aos-delay="100">
                    <h3>
                        <i class="fas fa-list-ul"></i>
                        বৈশিষ্ট্যসমূহ
                    </h3>
                    <ul class="info-list" id="characteristics-list">
                        <!-- Characteristics will be populated here -->
                    </ul>
                </div>

                <div class="info-section" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        <i class="fas fa-exclamation-triangle"></i>
                        লক্ষণসমূহ
                    </h3>
                    <ul class="info-list" id="symptoms-list">
                        <!-- Symptoms will be populated here -->
                    </ul>
                </div>

                <div class="info-section" data-aos="fade-up" data-aos-delay="300">
                    <h3>
                        <i class="fas fa-prescription-bottle-alt"></i>
                        চিকিৎসা ও প্রতিরোধ
                    </h3>
                    <ul class="info-list" id="treatments-list">
                        <!-- Treatments will be populated here -->
                    </ul>
                </div>
            </div>

            <div class="action-buttons">
                <button class="action-btn" id="new-analysis-btn">
                    <i class="fas fa-redo-alt"></i>
                    নতুন বিশ্লেষণ
                </button>
                <button class="action-btn secondary" id="download-report-btn">
                    <i class="fas fa-download"></i>
                    রিপোর্ট ডাউনলোড
                </button>
            </div>
        </section>
    </main>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loading-overlay">
        <div class="loading-animation"></div>
        <h3 class="loading-text">আপনার উদ্ভিদ বিশ্লেষণ করা হচ্ছে...</h3>
        <p class="loading-subtext">আমাদের এআই রোগ এবং অবস্থার জন্য ছবি পরীক্ষা করছে</p>
    </div>

    @include('partials.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-quart',
            once: true
        });

        // Global variables
        let uploadedFile = null;
        const GEMINI_API_KEY = 'MyAPIKey'; 

        // DOM elements
        const uploadArea = document.getElementById('upload-area');
        const fileInput = document.getElementById('file-input');
        const fileBtnEl = document.getElementById('file-btn');
        const driveBtnEl = document.getElementById('drive-btn');
        const pasteBtnEl = document.getElementById('paste-btn');
        const imagePreview = document.getElementById('image-preview');
        const previewImg = document.getElementById('preview-img');
        const filenameEl = document.getElementById('filename');
        const filesizeEl = document.getElementById('filesize');
        const analyzeBtnEl = document.getElementById('analyze-btn');
        const loadingOverlay = document.getElementById('loading-overlay');
        const resultsSection = document.getElementById('results-section');
        const newAnalysisBtnEl = document.getElementById('new-analysis-btn');

        // Mobile menu functionality
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenuOverlay.classList.add('active');
            });
        }

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', () => {
                mobileMenuOverlay.classList.remove('active');
            });
        }

        // Active navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                document.querySelectorAll('#main-navbar .nav-link').forEach(l => l.classList.remove('active'));
                document.querySelectorAll('.mobile-navbar .nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Close mobile menu when a link is clicked
        if (mobileMenuOverlay) {
            mobileMenuOverlay.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenuOverlay.classList.remove('active');
                });
            });
        }

        // Drag and drop functionality
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                handleFile(files[0]);
            }
        });

        // File input handlers
        fileBtnEl.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                handleFile(e.target.files[0]);
            }
        });

        // Camera functionality (for mobile devices)
        driveBtnEl.addEventListener('click', () => {
            alert('গুগল ড্রাইভ ইন্টিগ্রেশন শীঘ্রই আসছে। দয়া করে "ডিভাইস থেকে নির্বাচন" বা "ছবি পেস্ট করুন" ব্যবহার করুন।');
        });

        // Paste functionality
        pasteBtnEl.addEventListener('click', async () => {
            try {
                const clipboardItems = await navigator.clipboard.read();
                for (const clipboardItem of clipboardItems) {
                    for (const type of clipboardItem.types) {
                        if (type.startsWith('image/')) {
                            const blob = await clipboardItem.getType(type);
                            const file = new File([blob], 'pasted-image.png', { type: type });
                            handleFile(file);
                            return;
                        }
                    }
                }
                alert('ক্লিপবোর্ডে কোনো ছবি পাওয়া যায়নি। দয়া করে প্রথমে একটি ছবি কপি করুন।');
            } catch (err) {
                console.error('ক্লিপবোর্ড পড়তে ব্যর্থ:', err);
                alert('ছবি পেস্ট করতে ব্যর্থ। দয়া করে নিশ্চিত করুন যে আপনি একটি ছবি কপি করেছেন এবং ক্লিপবোর্ড অনুমতি দিয়েছেন।');
            }
        });

        // Handle file upload
        function handleFile(file) {
            if (!file.type.startsWith('image/')) {
                alert('দয়া করে একটি ছবি ফাইল নির্বাচন করুন।');
                return;
            }

            if (file.size > 10 * 1024 * 1024) { // 10MB limit
                alert('ফাইলের আকার খুব বড়। দয়া করে ১০ এমবি এর চেয়ে ছোট একটি ছবি নির্বাচন করুন।');
                return;
            }

            uploadedFile = file;
            
            // Display preview
            const reader = new FileReader();
            reader.onload = (e) => {
                previewImg.src = e.target.result;
                filenameEl.textContent = file.name;
                filesizeEl.textContent = formatFileSize(file.size);
                imagePreview.style.display = 'block';
                
                // Scroll to preview
                imagePreview.scrollIntoView({ behavior: 'smooth', block: 'center' });
            };
            reader.readAsDataURL(file);
        }

        // Format file size
        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
        }

        // Analyze button handler
        analyzeBtnEl.addEventListener('click', async () => {
            if (!uploadedFile) {
                alert('দয়া করে প্রথমে একটি ছবি আপলোড করুন।');
                return;
            }

            try {
                // Show loading
                loadingOverlay.classList.add('active');
                
                // Convert image to base64
                const base64Image = await fileToBase64(uploadedFile);
                
                // Call Gemini API
                const response = await analyzeWithGemini(base64Image);
                
                // Hide loading
                loadingOverlay.classList.remove('active');
                
                // Display results
                displayResults(response);
                
            } catch (error) {
                console.error('বিশ্লেষণ ব্যর্থ:', error);
                loadingOverlay.classList.remove('active');
                alert('বিশ্লেষণ ব্যর্থ। দয়া করে আবার চেষ্টা করুন বা আপনার ইন্টারনেট সংযোগ পরীক্ষা করুন।');
            }
        });

        // Convert file to base64
        function fileToBase64(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => resolve(reader.result.split(',')[1]);
                reader.onerror = error => reject(error);
            });
        }

        // Analyze with Gemini API
        async function analyzeWithGemini(base64Image) {
            const prompt = `
                You are an expert plant pathologist. Analyze this plant image and provide a diagnosis in Bengali language.

                IMPORTANT: You must follow this EXACT format. Do not add extra text or explanations outside this structure:

                Disease Name: [রোগের নাম অথবা "সুস্থ উদ্ভিদ"]
                Description: [২-৩ বাক্যে রোগের বিস্তারিত বর্ণনা]
                Characteristics:
                - [এই রোগের প্রথম বৈশিষ্ট্য]
                - [এই রোগের দ্বিতীয় বৈশিষ্ট্য]
                - [এই রোগের তৃতীয় বৈশিষ্ট্য]
                Symptoms:
                - [প্রথম লক্ষণ]
                - [দ্বিতীয় লক্ষণ] 
                - [তৃতীয় লক্ষণ]
                Treatment:
                - [প্রথম চিকিৎসা পদ্ধতি]
                - [দ্বিতীয় চিকিৎসা পদ্ধতি]
                - [তৃতীয় চিকিৎসা পদ্ধতি]

                Make sure to:
                1. Use the exact headers: "Disease Name:", "Description:", "Characteristics:", "Symptoms:", "Treatment:"
                2. Use bullet points (- ) for all list items
                3. Write all content in Bengali except the headers
                4. Provide exactly 3 points for each section
                5. Do not add any extra text before or after this format
            `;

            const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${GEMINI_API_KEY}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    contents: [{
                        parts: [
                            { text: prompt },
                            {
                                inline_data: {
                                    mime_type: uploadedFile.type,
                                    data: base64Image
                                }
                            }
                        ]
                    }]
                })
            });

            if (!response.ok) {
                const errorData = await response.text();
                console.error('API Error Response:', errorData);
                throw new Error(`API অনুরোধ ব্যর্থ হয়েছে: ${response.status} - ${response.statusText}`);
            }

            const data = await response.json();
            
            // Check if response has expected structure
            if (!data.candidates || !data.candidates[0] || !data.candidates[0].content || !data.candidates[0].content.parts) {
                console.error('Unexpected API response structure:', data);
                throw new Error('API থেকে অপ্রত্যাশিত উত্তর পাওয়া গেছে');
            }

            const responseText = data.candidates[0].content.parts[0].text;
            console.log('Gemini Response:', responseText); // For debugging
            
            return parseGeminiResponse(responseText);
        }

        // Parse Gemini response
        function parseGeminiResponse(text) {
            console.log('Original response:', text); // Debug log
            
            const lines = text.split('\n');
            const result = {
                diseaseName: '',
                description: '',
                characteristics: [],
                symptoms: [],
                treatments: []
            };

            let currentSection = '';

            lines.forEach(line => {
                line = line.trim();
                
                // Skip empty lines
                if (!line) return;
                
                // Handle both Bengali and English headers (case insensitive)
                if (line.toLowerCase().startsWith('disease name:') || line.startsWith('রোগের নাম:')) {
                    result.diseaseName = line.replace(/^(disease name:|রোগের নাম:)/i, '').trim();
                    currentSection = '';
                } else if (line.toLowerCase().startsWith('description:') || line.startsWith('বর্ণনা:')) {
                    result.description = line.replace(/^(description:|বর্ণনা:)/i, '').trim();
                    currentSection = 'description';
                } else if (line.toLowerCase().startsWith('characteristics:') || line.startsWith('বৈশিষ্ট্য:')) {
                    currentSection = 'characteristics';
                } else if (line.toLowerCase().startsWith('symptoms:') || line.startsWith('লক্ষণ:')) {
                    currentSection = 'symptoms';
                } else if (line.toLowerCase().startsWith('treatment:') || line.startsWith('চিকিৎসা:')) {
                    currentSection = 'treatments';
                } else if (line.startsWith('- ') || line.startsWith('•')) {
                    // Handle both dash and bullet points
                    const content = line.replace(/^(- |• )/, '').trim();
                    if (currentSection === 'characteristics') {
                        result.characteristics.push(content);
                    } else if (currentSection === 'symptoms') {
                        result.symptoms.push(content);
                    } else if (currentSection === 'treatments') {
                        result.treatments.push(content);
                    }
                } else if (currentSection === 'description' && line && !line.includes(':')) {
                    // Continue description on multiple lines
                    if (result.description) {
                        result.description += ' ' + line;
                    } else {
                        result.description = line;
                    }
                }
            });

            // Debug log the parsed result
            console.log('Parsed result:', result);

            // Enhanced fallback: if structured parsing didn't work well, try alternative parsing
            if (!result.diseaseName && !result.description && 
                result.characteristics.length === 0 && result.symptoms.length === 0 && result.treatments.length === 0) {
                
                // Try to extract some basic information
                const sentences = text.split(/[।.!?]/).filter(s => s.trim().length > 10);
                
                result.diseaseName = 'উদ্ভিদ বিশ্লেষণ';
                result.description = sentences.slice(0, 2).join('। ') + '।';
                
                // Try to find bullet points or numbered items
                const bulletPoints = text.match(/[-•]\s*([^।\n]+)/g);
                if (bulletPoints && bulletPoints.length > 0) {
                    const points = bulletPoints.map(point => point.replace(/^[-•]\s*/, '').trim());
                    result.characteristics = points.slice(0, Math.ceil(points.length / 3));
                    result.symptoms = points.slice(Math.ceil(points.length / 3), Math.ceil(2 * points.length / 3));
                    result.treatments = points.slice(Math.ceil(2 * points.length / 3));
                }
                
                // If no bullet points found, create generic ones
                if (result.characteristics.length === 0) {
                    result.characteristics = ['AI দ্বারা সনাক্তকৃত বৈশিষ্ট্য'];
                }
                if (result.symptoms.length === 0) {
                    result.symptoms = ['দৃশ্যমান লক্ষণসমূহ বিশ্লেষণ করা হয়েছে'];
                }
                if (result.treatments.length === 0) {
                    result.treatments = ['বিশেষজ্ঞের পরামর্শ নিন', 'যথাযথ পরিচর্যা করুন'];
                }
            }

            return result;
        }

        // Display results
        function displayResults(result) {
            // Set result image
            document.getElementById('result-image').src = previewImg.src;
            
            // Set disease name and description
            document.getElementById('disease-name').textContent = result.diseaseName || 'বিশ্লেষণ সম্পূর্ণ';
            document.getElementById('disease-description').textContent = result.description || 'কোনো বিস্তারিত বর্ণনা উপলব্ধ নেই।';
            
            // Populate lists
            populateList('characteristics-list', result.characteristics);
            populateList('symptoms-list', result.symptoms);
            populateList('treatments-list', result.treatments);
            
            // Show results section
            resultsSection.classList.add('active');
            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            
            // Re-initialize AOS for new elements
            AOS.refresh();
        }

        // Populate list with data
        function populateList(listId, items) {
            const listEl = document.getElementById(listId);
            listEl.innerHTML = '';
            
            if (items.length === 0) {
                const li = document.createElement('li');
                li.textContent = 'কোনো নির্দিষ্ট তথ্য উপলব্ধ নেই।';
                listEl.appendChild(li);
                return;
            }
            
            items.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                listEl.appendChild(li);
            });
        }

        // New analysis button
        newAnalysisBtnEl.addEventListener('click', () => {
            // Reset everything
            uploadedFile = null;
            imagePreview.style.display = 'none';
            resultsSection.classList.remove('active');
            fileInput.value = '';
            
            // Scroll to top
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Download report functionality
        document.getElementById('download-report-btn').addEventListener('click', () => {
            // This would typically generate a PDF or document
            alert('ডাউনলোড কার্যকারিতা এখানে প্রয়োগ করা হবে। এটি নির্ণয়ের একটি পিডিএফ রিপোর্ট তৈরি করতে পারে।');
        });
    </script>
</body>
</html>