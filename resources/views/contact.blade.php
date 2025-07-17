<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us | Farmer Portal</title>
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
            --off-white-bg: #fdfdfd;
            --soft-gray-border: #eee;
        }

        body {
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-color-dark);
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: var(--primary-green);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 2px 12px var(--shadow-light);
            z-index: 1000;
            position: relative;
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

       
        /* --- Navbar Responsiveness & Mobile Menu --- */
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

        /* Adjustments for smaller screens */
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
            .header-wrapper {
                justify-content: space-between;
                flex-direction: row;
                padding: 0 20px;
            }
            .logo {
                margin-right: 0;
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
            padding: 0 16px;
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


        /* Media Queries - General */
        @media (max-width: 900px) {
            .header-wrapper {
                height: auto;
                padding: 15px 20px;
                flex-direction: column;
                gap: 15px;
            }
            .logo {
                margin-right: 0;
                margin-bottom: 10px;
            }
            nav#main-navbar {
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
            }
            .nav-link {
                padding: 5px 10px;
                font-size: 0.95rem;
            }
            .user-profile {
                margin-left: 0;
                margin-top: 15px;
            }
        }

        @media (max-width: 600px) {
            .header-wrapper { padding: 10px; }
            .logo { font-size: 1.4rem; }
            .nav-link { font-size: 0.9rem; padding: 4px 8px; }
            .footer-column { flex: 1 1 100%; text-align: center; }
            .footer-column ul { padding-inline-start: 0; }
        }

        /* --- CONTACT PAGE SPECIFIC STYLES --- */

        /* Common Styles for content sections */
        .section-heading {
            font-size: 1.8rem; /* Smaller heading */
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 25px; /* Slightly reduced margin */
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Reduced gap */
        }

        .section-heading i {
            font-size: 2.2rem; /* Smaller icon */
            color: var(--primary-green);
        }

        .contact-content-wrapper {
            max-width: 1100px; /* Slightly narrower wrapper */
            margin: 30px auto; /* Reduced margin */
            padding: 0 15px; /* Reduced padding */
            display: flex;
            flex-direction: column;
            gap: 30px; /* Reduced space between sections */
        }

        /* Contact Hero Section */
        .contact-hero {
            background-color: var(--primary-green);
            color: white;
            padding: 50px 20px; /* Reduced padding */
            text-align: center;
            min-height: 35vh; /* Slightly smaller hero */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px; /* Reduced space below hero */
        }

        .contact-hero h1 {
            font-size: 2.8rem; /* Smaller heading */
            margin-bottom: 12px; /* Reduced margin */
            font-weight: 800;
        }

        .contact-hero p {
            font-size: 1.1rem; /* Smaller paragraph */
            max-width: 650px; /* Slightly narrower */
            margin: 0 auto;
        }

        /* Contact Info Section */
        .contact-info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Slightly smaller min-width */
            gap: 20px; /* Reduced gap */
            margin-bottom: 30px;
        }

        .info-card {
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px; /* Slightly smaller border-radius */
            padding: 25px; /* Reduced padding */
            text-align: center;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.03); /* Lighter shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px); /* Less lift effect */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        .info-card .icon-circle {
            background-color: var(--light-green);
            color: var(--primary-green);
            width: 60px; /* Smaller icon circle */
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.0rem; /* Smaller icon font size */
            margin: 0 auto 15px; /* Reduced margin */
        }

        .info-card h3 {
            font-size: 1.6rem; /* Smaller heading */
            color: var(--dark-green);
            margin-bottom: 8px; /* Reduced margin */
            font-weight: 700;
        }

        .info-card p {
            font-size: 1rem; /* Smaller paragraph */
            color: var(--text-color-dark);
            margin: 4px 0; /* Reduced margin */
        }

        /* New section for side-by-side content */
        .form-and-faq-section {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            gap: 30px; /* Gap between form and FAQ */
            margin-bottom: 30px;
        }

        .contact-form-container,
        .quick-contact-options {
            flex: 1; /* Allow items to grow */
            min-width: 300px; /* Minimum width before wrapping */
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px;
            padding: 30px; /* Reduced padding */
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
        }

        /* Contact Form Section */
        .contact-form .form-group {
            margin-bottom: 15px; /* Significantly reduced gap */
        }

        .contact-form label {
            display: block;
            margin-bottom: 6px; /* Reduced margin */
            font-weight: 600;
            color: var(--dark-green);
            font-size: 1rem; /* Smaller label font */
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px 14px; /* Reduced padding */
            border: 1px solid var(--soft-gray-border);
            border-radius: 6px; /* Slightly smaller border-radius */
            font-family: 'Manrope', sans-serif;
            font-size: 0.95rem; /* Smaller font size */
            color: var(--text-color-dark);
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 2px rgba(11, 212, 41, 0.2); /* Smaller focus ring */
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 100px; /* Slightly smaller min-height */
        }

        .contact-form .submit-btn {
            background-color: var(--primary-green);
            color: white;
            border: none;
            padding: 12px 25px; /* Reduced padding */
            border-radius: 6px; /* Slightly smaller border-radius */
            font-size: 1.05rem; /* Smaller font size */
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
            gap: 8px; /* Reduced gap */
            justify-content: center;
            width: fit-content;
            margin-top: 15px; /* Reduced margin */
        }

        .contact-form .submit-btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-1px); /* Less lift effect */
        }

        /* Quick Contact Options (FAQ & Social) */
        .quick-contact-options h4 {
            color: var(--primary-green);
            font-size: 1.15rem; /* Heading for FAQ/Social sections */
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: 700;
            border-bottom: 1px solid var(--soft-gray-border);
            padding-bottom: 5px;
        }

        .quick-contact-options h4:first-of-type {
            margin-top: 0; /* No top margin for the first h4 */
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item h4 {
            color: var(--dark-green);
            font-size: 1rem; /* FAQ question font size */
            margin-bottom: 5px;
            font-weight: 700;
            border-bottom: none; /* Override previous border */
            padding-bottom: 0;
            cursor: pointer; /* Indicate it's clickable (for future accordion if desired) */
        }

        .faq-item p {
            font-size: 0.9rem; /* FAQ answer font size */
            color: var(--text-color-dark);
            line-height: 1.5;
        }

        .social-links {
            display: flex;
            gap: 15px; /* Space between social icons */
            margin-top: 20px;
            justify-content: center; /* Center icons */
        }

        .social-links a {
            color: var(--primary-green);
            font-size: 1.8rem; /* Size of social icons */
            transition: color 0.3s, transform 0.2s;
        }

        .social-links a:hover {
            color: var(--dark-green);
            transform: translateY(-2px);
        }


        /* Map Section */
        .map-section {
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px;
            padding: 25px; /* Reduced padding */
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
            text-align: center;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            margin-top: 25px; /* Reduced margin */
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Responsive adjustments for Contact Page */
        @media (max-width: 900px) {
            .contact-hero h1 {
                font-size: 2.2rem;
            }
            .contact-hero p {
                font-size: 1rem;
            }
            .contact-content-wrapper {
                margin: 25px auto;
                padding: 0 10px;
                gap: 25px;
            }
            .contact-info-section {
                grid-template-columns: 1fr; /* Stack cards vertically */
                gap: 15px;
            }
            .info-card {
                padding: 20px;
            }
            .info-card h3 {
                font-size: 1.4rem;
            }
            .info-card .icon-circle {
                width: 50px;
                height: 50px;
                font-size: 1.8rem;
                margin-bottom: 12px;
            }
            .section-heading {
                font-size: 1.6rem;
                flex-direction: column; /* Stack icon and text */
                gap: 6px;
            }
            .section-heading i {
                font-size: 1.8rem;
            }
            /* Stack form and FAQ on smaller screens */
            .form-and-faq-section {
                flex-direction: column;
                gap: 25px;
            }
            .contact-form-container,
            .quick-contact-options {
                padding: 25px;
                min-width: unset; /* Remove min-width when stacking */
            }
            .contact-form .submit-btn {
                width: 100%; /* Full width button on smaller screens */
            }
            .quick-contact-options .social-links {
                justify-content: flex-start; /* Align social links to start */
            }
        }

        @media (max-width: 480px) {
            .contact-hero h1 {
                font-size: 1.8rem;
            }
            .contact-hero p {
                font-size: 0.9rem;
            }
            .contact-form-container,
            .quick-contact-options,
            .map-section {
                padding: 20px;
            }
            .contact-form label,
            .faq-item h4 {
                font-size: 0.95rem;
            }
            .contact-form input,
            .contact-form textarea,
            .faq-item p {
                padding: 8px 10px;
                font-size: 0.85rem;
            }
            .contact-form .submit-btn {
                font-size: 0.95rem;
                padding: 10px 18px;
            }
            .section-heading {
                font-size: 1.4rem;
            }
            .section-heading i {
                font-size: 1.6rem;
            }
            .social-links a {
                font-size: 1.5rem;
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
            <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
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
            <div class="close-btn" id="mobile-menu-close">×</div>
            <nav class="mobile-navbar">
                <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
                <a href="{{ route('weather') }}" class="nav-link">Weather</a>
                <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
                <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
                <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
                <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
            </nav>
      </div>

<main>
    <section class="contact-hero">
        <h1>Contact Us</h1>
        <p>We're here to help! Reach out to us for any inquiries, support, or feedback.</p>
    </section>

    <div class="contact-content-wrapper">
        <section class="contact-info-section">
            <div class="info-card" data-aos="fade-up">
                <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                <h3>Our Office</h3>
                <p>123 Agri-Tech Road, Farmville</p>
                <p>Ashulia, Dhaka 1341, Bangladesh</p>
            </div>
            <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
                <h3>Call Us</h3>
                <p>+880 123 456 7890</p>
                <p>Mon - Fri: 9:00 AM - 5:00 PM</p>
            </div>
            <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                <h3>Email Us</h3>
                <p>support@farmerportal.com</p>
                <p>info@farmerportal.com</p>
            </div>
        </section>

        <section class="form-and-faq-section">
            <div class="contact-form-container" data-aos="fade-right">
                <h2 class="section-heading"><i class="fas fa-comments"></i> Send Us a Message</h2>
                <form class="contact-form" action="#" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                </form>
            </div>

            <div class="quick-contact-options" data-aos="fade-left">
                <h2 class="section-heading"><i class="fas fa-question-circle"></i> Quick Answers & More</h2>
                
                <h4>Frequently Asked Questions</h4>
                <div class="faq-item">
                    <h4>How can I reset my password?</h4>
                    <p>You can reset your password from the login page by clicking the "Forgot Password" link.</p>
                </div>
                <div class="faq-item">
                    <h4>Where can I find current market prices?</h4>
                    <p>Live market prices for various crops are available on the "Market Prices" page.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you offer direct farming advice?</h4>
                    <p>Our "Crop Doctor" feature provides AI-powered advice, and you can also consult experts via our community forum.</p>
                </div>
                
                <h4 style="margin-top: 30px;">Connect With Us</h4>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>

        <section class="map-section" data-aos="fade-up">
            <h2 class="section-heading"><i class="fas fa-map-marked-alt"></i> Find Us on the Map</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116776.62171120288!2d90.25265634594248!3d23.900984042880946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b92b6a033f%3A0xc3f6d7732a933221!2sAshulia!5e0!3m2!1sen!2sbd!4v1701388888888!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
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
                    <li><a href="#">Success Stories</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Community</h4>
                <ul>
                    <li><a href="#">Ask Experts</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Webinars</a></li>
                    <li><a href="#">Local Events</a></li>
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
AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-in-out',
});

// Set active class for Contact page on load
document.addEventListener('DOMContentLoaded', () => {
    // Correctly activate the contact link in both menus on page load
    document.querySelectorAll('.nav-link').forEach(link => {
        // Use window.location.pathname for more robust check or a specific attribute
        if (link.getAttribute('href') && link.getAttribute('href').includes('contact')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
    </script>
</body>
</html>