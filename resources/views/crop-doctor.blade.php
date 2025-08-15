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

    @include('partials.header')

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

    @include('partials.footer')

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
    crop: ['ধান', 'ভুট্টা', 'গম', 'চা', 'আলু', 'সয়াবিন', 'কাপাস'],
    fruit: ['আম', 'লিচু', 'কমলা', 'কাঁঠাল', 'কলা', 'আপেল', 'পেয়ারা'],
    vegetable: ['টমেটো', 'পিয়াজ', 'গাজর', 'আলু', 'শস্য', 'বেগুন', 'পালং শাক']
};

// Your Gemini API key (replace with your actual key from Google AI Studio)
const GEMINI_API_KEY = 'AIzaSyBkihp0AO--2AsSZf_luT4UUCZIFQS3k_Y'; // e.g., 'AIzaSyXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
// WARNING: For production, move this to a backend server!

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
        specificItemOptions.innerHTML = '<p>এই বিভাগের জন্য কোনো নির্দিষ্ট আইটেম পাওয়া যায়নি।</p>';
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
            alert("ক্লিপবোর্ড অ্যাক্সেসের অনুমতি প্রত্যাখ্যান করা হয়েছে। দয়া করে ব্রাউজার সেটিংসে অনুমতি প্রদান করুন।");
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
                        imageNameDisplay.textContent = "পেস্ট করা ছবি";
                        imagePreviewContainer.style.display = 'flex';
                        analyzeImageBtn.style.display = 'block';
                    };
                    reader.readAsDataURL(blob);
                    return; // Stop after finding the first image
                }
            }
        }
        alert("ক্লিপবোর্ডে কোনো ছবি পাওয়া যায়নি।");
    } catch (err) {
        console.error('ক্লিপবোর্ড কনটেন্ট পড়তে ব্যর্থ:', err);
        alert('ছবি পেস্ট করতে ব্যর্থ। দয়া করে নিশ্চিত করুন যে একটি ছবি কপি করা আছে এবং ক্লিপবোর্ড অ্যাক্সেসের জন্য অনুমতি দেওয়া আছে।');
    }
});

uploadFromDriveBtn.addEventListener('click', () => {
    alert('গুগল ড্রাইভ ইন্টিগ্রেশন এই ডেমোতে বাস্তবায়িত হয়নি। দয়া করে "ডিভাইস থেকে" বা "পেস্ট ছবি" ব্যবহার করুন।');
});

analyzeImageBtn.addEventListener('click', async () => {
    if (uploadedFile && selectedCategory && selectedItem) {
        // Show loading overlay
        loadingOverlay.classList.add('active');

        try {
            // Convert uploaded file to base64
            const base64Image = await fileToBase64(uploadedFile);

            // Build prompt for Gemini in Bangla
            const prompt = `
                এই ${selectedItem} ছবিটি বিশ্লেষণ করুন, যা একটি ${selectedCategory}। 
                কোনো উদ্ভিদ রোগ ধরা পড়লে তা নির্ণয় করুন। যদি কোনো রোগ না পাওয়া যায়, তা স্পষ্টভাবে বলুন।
                উত্তরটি নিম্নলিখিত সঠিক কাঠামোতে দিন (অতিরিক্ত টেক্সট ছাড়াই):
                রোগের নাম: [নাম বা "কোনো রোগ ধরা পড়েনি"]
                বর্ণনা: [১-২ প্যারাগ্রাফ বর্ণনা]
                বৈশিষ্ট্য: - [বুলেট পয়েন্ট ১]\n- [বুলেট পয়েন্ট ২]\n- ইত্যাদি।
                লক্ষণ: - [বুলেট পয়েন্ট ১]\n- [বুলেট পয়েন্ট ২]\n- ইত্যাদি।
                চিকিৎসা: - [বুলেট পয়েন্ট ১]\n- [বুলেট পয়েন্ট ২]\n- ইত্যাদি।
            `;

            // Call Gemini API
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
                                    mime_type: uploadedFile.type || 'image/jpeg', // Adjust based on file type
                                    data: base64Image
                                }
                            }
                        ]
                    }]
                })
            });

            if (!response.ok) {
                throw new Error('API রিকোয়েস্ট ব্যর্থ হয়েছে');
            }

            const data = await response.json();
            const generatedText = data.candidates[0].content.parts[0].text;

            // Parse the structured response
            const parsedResult = parseGeminiResponse(generatedText);

            // Hide loading and display result
            loadingOverlay.classList.remove('active');
            displayResult(parsedResult);
            showStep(step4);
        } catch (error) {
            console.error('ছবি বিশ্লেষণে ত্রুটি:', error);
            loadingOverlay.classList.remove('active');
            alert('ছবি বিশ্লেষণে ব্যর্থ। দয়া করে আবার চেষ্টা করুন বা API কী চেক করুন।');
        }
    } else {
        alert('দয়া করে একটি বিভাগ, আইটেম এবং ছবি আপলোড করুন আগে বিশ্লেষণের জন্য।');
    }
});

// Helper: Convert file to base64
function fileToBase64(file) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => resolve(reader.result.split(',')[1]); // Get base64 without prefix
        reader.onerror = error => reject(error);
    });
}

// Helper: Parse Gemini's text response into object
function parseGeminiResponse(text) {
    const lines = text.split('\n');
    let currentSection = '';
    const result = {
        diseaseName: '',
        description: '',
        characteristics: [],
        symptoms: [],
        treatments: []
    };

    lines.forEach(line => {
        if (line.startsWith('রোগের নাম:')) {
            result.diseaseName = line.replace('রোগের নাম:', '').trim();
        } else if (line.startsWith('বর্ণনা:')) {
            currentSection = 'description';
            result.description = line.replace('বর্ণনা:', '').trim();
        } else if (line.startsWith('বৈশিষ্ট্য:')) {
            currentSection = 'characteristics';
        } else if (line.startsWith('লক্ষণ:')) {
            currentSection = 'symptoms';
        } else if (line.startsWith('চিকিৎসা:')) {
            currentSection = 'treatments';
        } else if (line.startsWith('- ') && currentSection) {
            result[currentSection].push(line.replace('- ', '').trim());
        } else if (currentSection === 'description') {
            result.description += ' ' + line.trim(); // Append multi-line description
        }
    });

    return result;
}

// Step 4: Display Result
function displayResult(result) {
    // For image: Reuse uploaded image or generate one if needed (Gemini doesn't return images, so keep placeholder or uploaded preview)
    document.getElementById('result-disease-image').src = uploadedImagePreview.src || 'https://via.placeholder.com/300x200?text=বিশ্লেষিত ছবি';

    document.getElementById('disease-name').textContent = result.diseaseName || 'কোনো রোগ ধরা পড়েনি';
    document.getElementById('disease-description').textContent = result.description || 'কোনো বর্ণনা উপলব্ধ নেই।';

    const characteristicsList = document.getElementById('disease-characteristics');
    characteristicsList.innerHTML = '';
    (result.characteristics.length > 0 ? result.characteristics : ['N/A']).forEach(char => {
        const li = document.createElement('li');
        li.textContent = char;
        characteristicsList.appendChild(li);
    });

    const symptomsList = document.getElementById('disease-symptoms');
    symptomsList.innerHTML = '';
    (result.symptoms.length > 0 ? result.symptoms : ['N/A']).forEach(symptom => {
        const li = document.createElement('li');
        li.textContent = symptom;
        symptomsList.appendChild(li);
    });

    const treatmentsList = document.getElementById('disease-treatments');
    treatmentsList.innerHTML = '';
    (result.treatments.length > 0 ? result.treatments : ['স্থানীয় বিশেষজ্ঞের সাথে পরামর্শ করুন।']).forEach(treatment => {
        const li = document.createElement('li');
        li.textContent = treatment;
        treatmentsList.appendChild(li);
    });
}

// Initialize by showing step 1
showStep(step1);
</script>

</body>
</html>