<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Home | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            position: relative; /* For responsiveness */
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
            margin-left: auto; /* Push to the right */
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

       
        /* --- Navbar Responsiveness & Mobile Menu --- */
      .menu-toggle {
            display: none; /* Hidden by default */
            font-size: 1.8rem;
            color: white;
            cursor: pointer;
            margin-left: auto; /* Push to the right on mobile */
            z-index: 1001; /* Above other content */
        }

      .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: -100%; /* Start off-screen */
            width: 250px; /* Width of the mobile menu */
            height: 100%;
            background: var(--primary-green);
            color: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.2);
            transition: left 0.3s ease-in-out;
            z-index: 2000; /* Ensure it's above everything */
            display: flex;
            flex-direction: column;
            padding-top: 60px; /* Space for close button */
        }

      .mobile-menu-overlay.active {
            left: 0; /* Slide in */
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

        /* Adjustments for smaller screens */
        @media (max-width: 900px) {
            #main-navbar {
                display: none; /* Hide desktop nav */
            }
            .user-profile {
                display: none; /* Hide profile on smaller screens or adjust its position */
            }
            .menu-toggle {
                display: block; /* Show hamburger */
            }
            .header-wrapper {
                justify-content: space-between; /* Space out logo and toggle */
                flex-direction: row; /* Keep them in a row */
                padding: 0 20px; /* Adjust padding */
            }
            .logo {
                margin-right: 0; /* Remove right margin */
            }
        }

    /* Footer */
        .footer {
            background: var(--light-green);
            padding: 30px 0 10px 0;
            margin-top: 40px;
            color: var(--dark-green);
        }
        .footer-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1100px;
            margin: auto;
            padding: 0 16px; /* Added padding for smaller screens */
        }
        .footer-column {
            flex: 1 1 220px;
            margin-bottom: 18px;
        }
        .footer-column h3 {
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 1.4rem;
        }
        .footer-column h4 {
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        .footer-column p {
            color: var(--dark-green);
            font-size: 0.95rem;
        }
        .footer-column ul {
            list-style: none;
            padding: 0;
            color: var(--dark-green);
        }
        .footer-column ul li a {
            color: var(--dark-green);
            text-decoration: none;
            padding: 3px 0;
            display: block;
            transition: color 0.2s ease;
        }
        .footer-column ul li a:hover {
            color: var(--primary-green);
        }
        .footer-bottom {
            text-align: center;
            color: #888;
            font-size: 13px;
            margin-top: 20px;
            padding-bottom: 10px;
        }


        /* Media Queries */
        @media (max-width: 900px) {
            .header-wrapper {
                height: auto; /* Allow header to expand */
                padding: 15px 20px;
                flex-direction: column; /* Stack logo and nav */
                gap: 15px;
            }
            .logo {
                margin-right: 0;
                margin-bottom: 10px; /* Space below logo */
            }
            nav#main-navbar {
                flex-wrap: wrap; /* Allow nav links to wrap */
                justify-content: center;
                gap: 10px;
            }
            .nav-link {
                padding: 5px 10px;
                font-size: 0.95rem;
            }
            .user-profile {
                margin-left: 0; /* Center user profile */
                margin-top: 15px;
            }
            .section-wrapper {
                padding: 30px 16px;
            }
            .hero-title { font-size: 2.2rem; }
            .hero-typed { font-size: 1.2rem; }
            .section-heading { font-size: 1.6rem; margin-bottom: 20px; }
            .section-heading i { font-size: 1.8rem; }
            .announcement-grid { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
            .weather-section-grid { grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); }
        }

        @media (max-width: 600px) {
            .hero-title { font-size: 1.8rem; letter-spacing: -1px; }
            .hero-typed { font-size: 1.05rem; min-height: 1.8em; }
            .hero-desc { font-size: 1rem; }
            .section-heading { font-size: 1.4rem; }
            .section-heading i { font-size: 1.6rem; }
            .section-wrapper { padding: 25px 10px; }
            .header-wrapper { padding: 10px; }
            .logo { font-size: 1.4rem; }
            .nav-link { font-size: 0.9rem; padding: 4px 8px; }
            .footer-column { flex: 1 1 100%; text-align: center; } /* Stack footer columns */
            .footer-column ul { padding-inline-start: 0; } /* Remove default ul padding */
        }


        /* --- Crop Doctor Page Specific Styles --- */
        .crop-doctor-section {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px var(--shadow-card);
            text-align: center;
        }

        .crop-doctor-section h2 {
            color: var(--primary-green);
            font-size: 2.5rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-weight: 800;
        }
        .crop-doctor-section h2 i {
            font-size: 2.8rem;
            color: var(--dark-green);
        }

        .step-section {
            margin-bottom: 40px;
            padding: 20px;
            border: 1px solid var(--border-light);
            border-radius: 8px;
            background-color: var(--light-green);
            text-align: left;
            transition: all 0.3s ease-in-out;
            opacity: 0; /* Hidden by default */
            transform: translateY(20px);
            animation-fill-mode: forwards;
            display: none; /* Hide all steps by default, JS will activate */
        }
        .step-section.active {
            opacity: 1;
            transform: translateY(0);
            animation: fadeInSlideUp 0.6s ease-out forwards;
            display: block; /* Show active step */
        }

        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .step-section h3 {
            color: var(--dark-green);
            font-size: 1.8rem;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--primary-green);
            padding-bottom: 10px;
        }

        .option-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .option-button {
            background-color: white;
            color: var(--dark-green);
            border: 2px solid var(--primary-green);
            padding: 15px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px var(--shadow-light);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .option-button:hover {
            background-color: var(--primary-green);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px var(--shadow-medium);
        }
        .option-button.selected {
            background-color: var(--primary-green);
            color: white;
            box-shadow: 0 5px 15px var(--shadow-medium);
            border-color: var(--dark-green);
        }
        .option-button i {
            font-size: 1.4rem;
        }

        /* Image Upload Section */
        .image-upload-area {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
            justify-content: center;
            padding: 30px;
            border: 3px dashed var(--border-light);
            border-radius: 10px;
            background-color: #fcfefe;
            margin-top: 30px;
            text-align: center;
        }
        .image-upload-area h4 {
            color: var(--dark-green);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        .upload-options {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .upload-option-btn {
            background-color: var(--primary-green);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.2s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .upload-option-btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-2px);
        }
        .upload-option-btn i {
            font-size: 1.1rem;
        }
        .image-preview-container {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            display: none; /* Hidden by default */
        }
        .image-preview-container img {
            max-width: 250px;
            max-height: 250px;
            border: 2px solid var(--primary-green);
            border-radius: 8px;
            box-shadow: 0 4px 10px var(--shadow-light);
        }
        .image-preview-container p {
            font-weight: 600;
            color: var(--dark-green);
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }
        .loading-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        .spinner {
            border: 8px solid #f3f3f3;
            border-top: 8px solid var(--primary-green);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1.5s linear infinite;
        }
        .loading-text {
            margin-top: 20px;
            font-size: 1.5rem;
            color: var(--primary-green);
            font-weight: 700;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Result Section */
        .result-section {
            margin-top: 50px;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 20px var(--shadow-card);
            text-align: left;
            display: none; /* Hidden by default */
            animation: fadeIn 0.8s ease-out forwards;
        }
        .result-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .result-section h3 {
            color: var(--primary-green);
            font-size: 2rem;
            margin-bottom: 20px;
            border-bottom: 2px solid var(--border-light);
            padding-bottom: 10px;
        }
        .result-section h4 {
            color: var(--dark-green);
            font-size: 1.5rem;
            margin-top: 25px;
            margin-bottom: 10px;
        }
        .result-section p, .result-section ul {
            color: var(--text-color-dark);
            font-size: 1.05rem;
            margin-bottom: 10px;
        }
        .result-section ul {
            list-style: disc;
            margin-left: 20px;
        }
        .result-section li {
            margin-bottom: 5px;
        }
        .result-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Responsive adjustments for Crop Doctor section */
        @media (max-width: 768px) {
            .crop-doctor-section {
                padding: 20px;
                margin: 20px auto;
            }
            .crop-doctor-section h2 {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }
            .crop-doctor-section h2 i {
                font-size: 2.2rem;
            }
            .step-section h3 {
                font-size: 1.5rem;
            }
            .option-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
                gap: 10px;
            }
            .option-button {
                padding: 12px 15px;
                font-size: 1rem;
            }
            .upload-options {
                flex-direction: column;
                gap: 15px;
            }
            .upload-option-btn {
                width: 100%;
                justify-content: center;
            }
            .image-preview-container img {
                max-width: 200px;
            }
            .result-section {
                padding: 20px;
            }
            .result-section h3 {
                font-size: 1.8rem;
            }
            .result-section h4 {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .crop-doctor-section h2 {
                font-size: 1.8rem;
            }
            .crop-doctor-section h2 i {
                font-size: 2rem;
            }
            .step-section h3 {
                font-size: 1.3rem;
            }
            .option-grid {
                grid-template-columns: 1fr; /* Stack options on very small screens */
            }
            .option-button {
                padding: 10px;
                font-size: 0.95rem;
            }
            .upload-option-btn {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
        }

    </style>
</head>
<body>
    <div class="header">
    <div class="header-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}">
                <i class="fas fa-seedling"></i> <span>Farmer Portal</span>
            </a>
        </div>
        <div class="menu-toggle" id="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="main-navbar">
            <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
            <a href="{{ route('weather') }}" class="nav-link">Weather</a>
            <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
            <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
            <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
            <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </nav>
        <div class="user-profile">
            <span>Shahriar</span>
            <span class="profile-icon">
                <i class="fas fa-user"></i>
            </span>
        </div>
    </div>
</div>

      <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="close-btn" id="mobile-menu-close">&times;</div>
            <nav class="mobile-navbar">
                <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
                <a href="{{ route('weather') }}" class="nav-link">Weather</a>
                <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
                <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
                <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
                <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </nav>
      </div>

<main class="main-content">
    <section class="crop-doctor-section animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-duration="1000">
        <h2><i class="fas fa-microscope"></i> Crop Doctor</h2>

        <div class="step-section active" id="step-1">
            <h3>Step 1: What are you observing?</h3>
            <div class="option-grid">
                <button class="option-button" data-category="crop"><i class="fas fa-wheat-awn"></i> Crop</button>
                <button class="option-button" data-category="fruit"><i class="fas fa-apple-alt"></i> Fruit</button>
                <button class="option-button" data-category="vegetable"><i class="fas fa-carrot"></i> Vegetable</button>
            </div>
        </div>

        <div class="step-section" id="step-2">
            <h3>Step 2: Choose specific item</h3>
            <div class="option-grid" id="specific-item-options">
                </div>
        </div>

        <div class="step-section" id="step-3">
            <h3>Step 3: Upload Image of the Plant/Crop</h3>
            <div class="image-upload-area">
                <h4>Choose an image source:</h4>
                <div class="upload-options">
                    <input type="file" id="file-upload-input" accept="image/*" style="display: none;">
                    <button class="upload-option-btn" id="upload-from-device"><i class="fas fa-upload"></i> From Device</button>
                    <button class="upload-option-btn" id="paste-image-btn"><i class="fas fa-paste"></i> Paste Image</button>
                    <button class="upload-option-btn" id="upload-from-drive"><i class="fab fa-google-drive"></i> From Drive</button>
                </div>
                <div class="image-preview-container" id="image-preview-container">
                    <img id="uploaded-image-preview" src="#" alt="Image Preview">
                    <p id="image-name"></p>
                </div>
                <button class="upload-option-btn" id="analyze-image-btn" style="display: none; margin-top: 20px;">
                    <i class="fas fa-cogs"></i> Analyze Image
                </button>
            </div>
        </div>

        <div class="loading-overlay" id="loading-overlay">
            <div class="spinner"></div>
            <p class="loading-text">Analyzing your image...</p>
        </div>

        <div class="result-section" id="step-4">
            <h3>Diagnosis Result</h3>
            <img src="" alt="Disease Image" class="result-image" id="result-disease-image">
            <h4 id="disease-name"></h4>
            <p id="disease-description"></p>

            <h4>Characteristics:</h4>
            <ul id="disease-characteristics"></ul>

            <h4>Symptoms:</h4>
            <ul id="disease-symptoms"></ul>

            <h4>Treatments & Advises:</h4>
            <ul id="disease-treatments"></ul>
        </div>

    </section>
</main>


<footer class="footer">
        <div class="container footer-grid">
            <div class="footer-column">
                <h3>Farmer Portal</h3>
                <p>Connecting technology to every farmer's hand. Agriculture made smarter and accessible.</p>
            </div>
            <div class="footer-column">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Crop Tips</a></li>
                    <li><a href="#">Market Watch</a></li>
                    <li><a href="#">Weather Alerts</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Community</h4>
                <ul>
                    <li><a href="#">Success Stories</a></li>
                    <li><a href="#">Ask Experts</a></li>
                    <li><a href="#">Forum</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} Farmer Portal. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Language toggle (kept as in original, adjust if needed)
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Navbar active effect (kept as in original, adjust if needed for actual page linking)
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                // Remove active from all nav links in main-navbar
                document.querySelectorAll('#main-navbar .nav-link').forEach(l => l.classList.remove('active'));
                // Remove active from all nav links in mobile-navbar
                document.querySelectorAll('.mobile-navbar .nav-link').forEach(l => l.classList.remove('active'));

                // Add active to the clicked link
                this.classList.add('active');
            });
        });

// Mobile Menu Toggle
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
const mobileMenuClose = document.getElementById('mobile-menu-close');

mobileMenuToggle.addEventListener('click', () => {
    mobileMenuOverlay.classList.add('active');
});

mobileMenuClose.addEventListener('click', () => {
    mobileMenuOverlay.classList.remove('active');
});

// Close mobile menu when a link is clicked
mobileMenuOverlay.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenuOverlay.classList.remove('active');
    });
});

// Initialize AOS (Animate On Scroll)
AOS.init();


// --- Crop Doctor Page JavaScript Logic ---
const step1 = document.getElementById('step-1');
const step2 = document.getElementById('step-2');
const step3 = document.getElementById('step-3');
const step4 = document.getElementById('step-4');

const categoryButtons = step1.querySelectorAll('.option-button');
const specificItemOptions = document.getElementById('specific-item-options');

const fileUploadInput = document.getElementById('file-upload-input');
const uploadFromDeviceBtn = document.getElementById('upload-from-device');
const pasteImageBtn = document.getElementById('paste-image-btn');
const uploadFromDriveBtn = document.getElementById('upload-from-drive');
const imagePreviewContainer = document.getElementById('image-preview-container');
const uploadedImagePreview = document.getElementById('uploaded-image-preview');
const imageNameDisplay = document.getElementById('image-name');
const analyzeImageBtn = document.getElementById('analyze-image-btn');
const loadingOverlay = document.getElementById('loading-overlay');

let selectedCategory = '';
let selectedItem = '';
let uploadedFile = null;

const categories = {
    crop: ['Rice', 'Corn', 'Wheat', 'Tea', 'Potato', 'Soybean', 'Cotton'],
    fruit: ['Mango', 'Litchi', 'Orange', 'Jackfruit', 'Banana', 'Apple', 'Guava'],
    vegetable: ['Tomato', 'Onion', 'Carrot', 'Potato', 'Cucumber', 'Eggplant', 'Spinach']
};

const dummyDiseaseData = {
    'Rice': {
        'Blast': {
            image: 'https://via.placeholder.com/300x200?text=Rice+Blast',
            description: 'Rice blast, caused by the fungus Magnaporthe oryzae, is one of the most destructive diseases of rice worldwide. It can infect all aerial parts of the rice plant.',
            characteristics: [
                'Fungus-driven disease.',
                'Thrives in high humidity and moderate temperatures.',
                'Can cause significant yield losses.'
            ],
            symptoms: [
                'Diamond-shaped lesions on leaves with gray centers and reddish-brown margins.',
                'Neck rot (lesions on the panicle neck leading to whiteheads).',
                'Node blast (dark lesions on stem nodes).'
            ],
            treatments: [
                'Use resistant rice varieties.',
                'Apply fungicides (e.g., tricyclazole, azoxystrobin) at early stages.',
                'Manage nitrogen fertilizer application to avoid excessive growth.',
                'Flood and drain fields to reduce disease severity.'
            ]
        },
        'Blight': {
            image: 'https://via.placeholder.com/300x200?text=Rice+Blight',
            description: 'Bacterial blight of rice is a significant disease caused by Xanthomonas oryzae pv. oryzae. It can lead to severe yield losses, especially in tropical and subtropical regions.',
            characteristics: [
                'Bacterial disease.',
                'Spreads rapidly under warm, humid conditions.',
                'Affects all growth stages of the plant.'
            ],
            symptoms: [
                'Water-soaked lesions on the margins of leaves that turn yellowish and then greyish-white.',
                '"Kresek" (wilting and death of seedlings).',
                'Yellowing and drying of leaves, resembling drought stress.'
            ],
            treatments: [
                'Plant resistant varieties.',
                'Practice proper sanitation (remove infected stubble).',
                'Avoid excessive nitrogen fertilization.',
                'Drain fields periodically to reduce bacterial spread.'
            ]
        }
    },
    'Mango': {
        'Anthracnose': {
            image: 'https://via.placeholder.com/300x200?text=Mango+Anthracnose',
            description: 'Anthracnose is a common and destructive fungal disease affecting mango trees, caused by Colletotrichum gloeosporioides. It can attack flowers, fruits, leaves, and twigs.',
            characteristics: [
                'Fungal disease, common in humid climates.',
                'Affects all parts of the plant.',
                'Causes significant post-harvest losses.'
            ],
            symptoms: [
                'Irregular black spots on leaves, flowers, and fruits.',
                'Blossom blight and fruit rot.',
                'Black sunken lesions on ripening fruit.'
            ],
            treatments: [
                'Prune infected branches to improve air circulation.',
                'Apply fungicides (e.g., copper-based fungicides, azoxystrobin) during flowering and fruit development.',
                'Sanitation: remove fallen leaves and fruit.',
                'Hot water treatment for harvested fruit.'
            ]
        },
        'Powdery Mildew': {
            image: 'https://via.placeholder.com/300x200?text=Mango+Powdery+Mildew',
            description: 'Powdery mildew, caused by Oidium mangiferae, is a serious disease of mango that primarily affects inflorescences and young fruits, leading to significant yield reduction.',
            characteristics: [
                'Fungal disease, thrives in dry, cool conditions.',
                'Common during flowering period.',
                'Reduces fruit set and quality.'
            ],
            symptoms: [
                'White, powdery fungal growth on leaves, flowers, and young fruits.',
                'Distortion and drying of affected parts.',
                'Failure of fruit to set or premature fruit drop.'
            ],
            treatments: [
                'Spray with sulfur-based fungicides or other recommended fungicides.',
                'Proper tree spacing and pruning for good air circulation.',
                'Avoid excessive nitrogen fertilization.'
            ]
        }
    },
    'Tomato': {
        'Early Blight': {
            image: 'https://via.placeholder.com/300x200?text=Tomato+Early+Blight',
            description: 'Early blight, caused by Alternaria solani, is a common fungal disease of tomato and potato. It can affect plants at any stage of development, especially after fruit set.',
            characteristics: [
                'Fungal disease.',
                'Favored by warm, humid conditions.',
                'Can lead to defoliation and reduced yield.'
            ],
            symptoms: [
                'Dark, concentric rings (bullseye pattern) on older leaves.',
                'Yellow halo around spots.',
                'Lesions on stems and fruit.'
            ],
            treatments: [
                'Rotate crops every 2-3 years.',
                'Ensure proper plant spacing for air circulation.',
                'Remove infected plant debris.',
                'Apply fungicides (e.g., chlorothalonil, mancozeb) preventatively.'
            ]
        },
        'Late Blight': {
            image: 'https://via.placeholder.com/300x200?text=Tomato+Late+Blight',
            description: 'Late blight, caused by Phytophthora infestans, is a highly destructive disease that affects tomato and potato. It can rapidly destroy entire crops under cool, moist conditions.',
            characteristics: [
                'Caused by an oomycete (water mold).',
                'Rapidly spreading and destructive.',
                'Favored by cool, wet weather.'
            ],
            symptoms: [
                'Irregular, water-soaked lesions that quickly expand on leaves, stems, and fruits.',
                'White, fuzzy fungal growth on the underside of leaves (especially in high humidity).',
                'Brown rot on fruits.'
            ],
            treatments: [
                'Plant resistant varieties where available.',
                'Ensure good air circulation and avoid overhead watering.',
                'Apply targeted fungicides (e.g., fluazinam, propamocarb) preventatively or at first sign.',
                'Remove and destroy infected plants promptly.'
            ]
        }
    }
    // Add more dummy data for other crops/fruits/vegetables and their diseases
};

// Function to reset all steps
function resetSteps() {
    // Hide all step sections
    document.querySelectorAll('.step-section').forEach(step => step.classList.remove('active'));
    
    // Reset specific elements
    imagePreviewContainer.style.display = 'none';
    uploadedImagePreview.src = '#';
    imageNameDisplay.textContent = '';
    analyzeImageBtn.style.display = 'none';
    specificItemOptions.innerHTML = ''; // Clear specific item options
    
    // Clear selections
    selectedCategory = '';
    selectedItem = '';
    uploadedFile = null;

    // Reset active class on category buttons
    categoryButtons.forEach(btn => btn.classList.remove('selected'));
    
    // Hide result section
    step4.classList.remove('active');
}

// Show specific step
function showStep(stepElement) {
    document.querySelectorAll('.step-section').forEach(step => step.classList.remove('active')); // Hide all
    stepElement.classList.add('active'); // Show target
}

// Step 1: Category selection
categoryButtons.forEach(button => {
    button.addEventListener('click', () => {
        categoryButtons.forEach(btn => btn.classList.remove('selected'));
        button.classList.add('selected');
        selectedCategory = button.dataset.category;
        
        // Reset specific item options and image upload when a new category is chosen
        specificItemOptions.innerHTML = ''; 
        imagePreviewContainer.style.display = 'none';
        uploadedImagePreview.src = '#';
        imageNameDisplay.textContent = '';
        analyzeImageBtn.style.display = 'none';
        uploadedFile = null;
        selectedItem = ''; // Clear selected item

        populateSpecificItems(selectedCategory);
        showStep(step2); // Move to Step 2
    });
});

// Populate specific items based on selected category
function populateSpecificItems(category) {
    specificItemOptions.innerHTML = ''; // Clear previous options
    const items = categories[category];
    if (items && items.length > 0) {
        items.forEach(item => {
            const button = document.createElement('button');
            button.classList.add('option-button');
            button.textContent = item;
            button.dataset.item = item;
            button.addEventListener('click', () => {
                // Remove selected from other buttons in specific-item-options
                specificItemOptions.querySelectorAll('.option-button').forEach(btn => btn.classList.remove('selected'));
                button.classList.add('selected');
                selectedItem = item;
                // Reset image upload when a new specific item is chosen
                imagePreviewContainer.style.display = 'none';
                uploadedImagePreview.src = '#';
                imageNameDisplay.textContent = '';
                analyzeImageBtn.style.display = 'none';
                uploadedFile = null;

                showStep(step3); // Move to Step 3
            });
            specificItemOptions.appendChild(button);
        });
    } else {
        specificItemOptions.innerHTML = '<p>No specific items available for this category yet.</p>';
    }
}

// Step 3: Image Upload Logic
uploadFromDeviceBtn.addEventListener('click', () => {
    fileUploadInput.click(); // Trigger the hidden file input
});

fileUploadInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        uploadedFile = file;
        const reader = new FileReader();
        reader.onload = (e) => {
            uploadedImagePreview.src = e.target.result;
            imageNameDisplay.textContent = file.name;
            imagePreviewContainer.style.display = 'flex';
            analyzeImageBtn.style.display = 'block'; // Show analyze button
        };
        reader.readAsDataURL(file);
    }
});

pasteImageBtn.addEventListener('click', async () => {
    try {
        const permission = await navigator.permissions.query({ name: "clipboard-read" });
        if (permission.state === "denied") {
            alert("Permission to access clipboard denied. Please grant clipboard read permission in your browser settings.");
            return;
        }

        const clipboardItems = await navigator.clipboard.read();
        for (const clipboardItem of clipboardItems) {
            for (const type of clipboardItem.types) {
                if (type.startsWith("image/")) {
                    const blob = await clipboardItem.getType(type);
                    uploadedFile = new File([blob], "pasted-image.png", { type: type });
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        uploadedImagePreview.src = e.target.result;
                        imageNameDisplay.textContent = "Pasted Image";
                        imagePreviewContainer.style.display = 'flex';
                        analyzeImageBtn.style.display = 'block';
                    };
                    reader.readAsDataURL(blob);
                    return; // Stop after finding the first image
                }
            }
        }
        alert("No image found in clipboard.");
    } catch (err) {
        console.error('Failed to read clipboard contents: ', err);
        alert('Failed to paste image. Please ensure you have an image copied and allow clipboard access if prompted.');
    }
});

uploadFromDriveBtn.addEventListener('click', () => {
    alert('Google Drive integration is not implemented in this demo. Please use "From Device" or "Paste Image".');
});


analyzeImageBtn.addEventListener('click', () => {
    if (uploadedFile && selectedCategory && selectedItem) {
        // Show loading overlay
        loadingOverlay.classList.add('active');

        // Simulate API call delay
        setTimeout(() => {
            loadingOverlay.classList.remove('active');
            displayResult(selectedItem); // Pass the selected specific item to get disease data
            showStep(step4); // Show the result
        }, 3000); // 3 seconds loading time
    } else {
        alert('Please select a category, an item, and upload an image before analyzing.');
    }
});

// Step 4: Display Result
function displayResult(item) {
    const itemDiseases = dummyDiseaseData[item];

    if (itemDiseases && Object.keys(itemDiseases).length > 0) {
        // Get a random disease for the selected item
        const diseases = Object.keys(itemDiseases);
        const randomDiseaseKey = diseases[Math.floor(Math.random() * diseases.length)];
        const diseaseInfo = itemDiseases[randomDiseaseKey];

        document.getElementById('result-disease-image').src = diseaseInfo.image;
        document.getElementById('disease-name').textContent = randomDiseaseKey;
        document.getElementById('disease-description').textContent = diseaseInfo.description;

        const characteristicsList = document.getElementById('disease-characteristics');
        characteristicsList.innerHTML = '';
        diseaseInfo.characteristics.forEach(char => {
            const li = document.createElement('li');
            li.textContent = char;
            characteristicsList.appendChild(li);
        });

        const symptomsList = document.getElementById('disease-symptoms');
        symptomsList.innerHTML = '';
        diseaseInfo.symptoms.forEach(symptom => {
            const li = document.createElement('li');
            li.textContent = symptom;
            symptomsList.appendChild(li);
        });

        const treatmentsList = document.getElementById('disease-treatments');
        treatmentsList.innerHTML = '';
        diseaseInfo.treatments.forEach(treatment => {
            const li = document.createElement('li');
            li.textContent = treatment;
            treatmentsList.appendChild(li);
        });
    } else {
        // Fallback if no specific data for the selected item
        document.getElementById('result-disease-image').src = 'https://via.placeholder.com/300x200?text=No+Diagnosis';
        document.getElementById('disease-name').textContent = 'No Specific Disease Found';
        document.getElementById('disease-description').textContent = 'We could not find specific disease information for the selected item and uploaded image. This is dummy data. In a real application, an AI model would process the image.';
        document.getElementById('disease-characteristics').innerHTML = '<li>N/A</li>';
        document.getElementById('disease-symptoms').innerHTML = '<li>N/A</li>';
        document.getElementById('disease-treatments').innerHTML = '<li>Consider consulting a local agricultural expert.</li>';
    }
}

// Initialize by showing step 1
showStep(step1);

    </script>
</body>
</html>