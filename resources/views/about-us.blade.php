@include('partials.header')

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

        }

        /* --- About Us Page Specific Styles --- */

       
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


        /* --- About Us Page Specific Styles --- */
        .about-page-wrapper {
            max-width: 1300px; /* Wider wrapper for content */
            margin: 0 auto;
            padding: 0 20px; /* Padding for overall content */
        }

        .about-hero-section {
            display: flex;
            background: linear-gradient(to bottom, rgba(246,255,246,0.6), rgba(217,255,214,0.3)),
    url('{{ $content && $content->hero_background_image ? asset("storage/assets/hero_sections/" . $content->hero_background_image) : "https://images.pexels.com/photos/539282/pexels-photo-539282.jpeg" }}') center/cover no-repeat;
            min-height: 60vh;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 40px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 15px 40px rgba(11, 212, 41, 0.2);
            position: relative;
            overflow: hidden;
        }

        .about-hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(11, 212, 41, 0.1) 0%, rgba(11, 212, 41, 0.05) 100%);
            animation: backgroundShift 8s ease-in-out infinite;
        }

        @keyframes backgroundShift {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        .about-hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 15px;
            font-weight: 900;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
            position: relative;
            display: inline-block;
            z-index: 1;
            animation: slideInDown 1s ease-out;
        }
        .about-hero-section h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, white, rgba(255,255,255,0.7), white);
            border-radius: 2px;
            animation: expandWidth 1.5s ease-out 0.5s both;
        }

        @keyframes slideInDown {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes expandWidth {
            from { width: 0; }
            to { width: 80px; }
        }

        .about-hero-section p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
            opacity: 0.9;
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 0.9; }
        }

        /* General Section Styling */
        .section-container {
            background: #fff;
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(11, 212, 41, 0.15);
            margin-bottom: 40px;
            text-align: center;
            transition: all 0.4s ease;
            transform: translateY(0);
        }

        .section-container:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(11, 212, 41, 0.25);
        }

        .section-heading {
            color: var(--dark-green);
            font-size: 2.5rem;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-weight: 800;
            text-transform: uppercase;
            position: relative;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), #20c96a, var(--primary-green));
            border-radius: 2px;
            animation: shimmer 2s ease-in-out infinite;
        }

        @keyframes shimmer {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .section-heading i {
            font-size: 2.8rem;
            color: var(--primary-green);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .mission-vision-card i {
            font-size: 3.5rem;
            color: var(--primary-green);
            margin-bottom: 20px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .impact-item i {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 15px;
            animation: bounce 2s ease-in-out infinite;
            position: relative;
            z-index: 1;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0px); }
            25% { transform: translateY(-5px); }
            75% { transform: translateY(5px); }
        }
        .section-content {
            text-align: left;
            max-width: 900px;
            margin: 0 auto;
        }
        .section-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-color-dark);
            margin-bottom: 20px;
        }
        .section-content ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 20px;
        }
        .section-content ul li {
            font-size: 1.1rem;
            color: var(--text-color-dark);
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        .section-content ul li i {
            color: var(--primary-green);
            font-size: 1.3rem;
            flex-shrink: 0;
            margin-top: 3px;
        }

        /* Mission & Vision Section (Two Column Layout) */
        .mission-vision-section {
            background: linear-gradient(135deg, var(--light-green) 0%, rgba(234, 252, 233, 0.7) 100%);
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(11, 212, 41, 0.12);
            margin-bottom: 40px;
            transition: all 0.4s ease;
        }

        .mission-vision-section:hover {
            box-shadow: 0 12px 40px rgba(11, 212, 41, 0.2);
        }
        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }
        .mission-vision-card {
            background: linear-gradient(145deg, white 0%, #f8fff9 100%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(11, 212, 41, 0.1);
            text-align: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(11, 212, 41, 0.1);
            position: relative;
            overflow: hidden;
        }

        .mission-vision-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(11, 212, 41, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .mission-vision-card:hover::before {
            left: 100%;
        }

        .mission-vision-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 15px 40px rgba(11, 212, 41, 0.2);
            border-color: rgba(11, 212, 41, 0.3);
        }
        .mission-vision-card i {
            font-size: 3.5rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }
        .mission-vision-card h4 {
            font-size: 1.8rem;
            color: var(--dark-green);
            margin-bottom: 15px;
            font-weight: 700;
        }
        .mission-vision-card p {
            font-size: 1.05rem;
            color: var(--text-color-dark);
            line-height: 1.7;
        }

        /* Impact/Values Section (Icons with Text) */
        .impact-section {
            background: linear-gradient(135deg, #fff 0%, #f9fff9 100%);
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(11, 212, 41, 0.15);
            margin-bottom: 40px;
            transition: all 0.4s ease;
        }

        .impact-section:hover {
            box-shadow: 0 12px 40px rgba(11, 212, 41, 0.25);
        }
        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            max-width: 900px;
            margin: 0 auto;
        }
        .impact-item {
            text-align: center;
            padding: 25px 20px;
            border-radius: 12px;
            background: linear-gradient(145deg, var(--light-green) 0%, rgba(234, 252, 233, 0.6) 100%);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 1px solid rgba(11, 212, 41, 0.2);
            position: relative;
            overflow: hidden;
        }

        .impact-item::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(11, 212, 41, 0.1) 0%, transparent 70%);
            transition: all 0.5s ease;
            transform: translate(-50%, -50%);
            border-radius: 50%;
        }

        .impact-item:hover::before {
            width: 200px;
            height: 200px;
        }

        .impact-item:hover {
            background: linear-gradient(145deg, rgba(11, 212, 41, 0.15) 0%, rgba(234, 252, 233, 0.8) 100%);
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 10px 30px rgba(11, 212, 41, 0.2);
            border-color: rgba(11, 212, 41, 0.4);
        }
        .impact-item i {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 15px;
        }
        .impact-item h5 {
            font-size: 1.3rem;
            color: var(--dark-green);
            margin-bottom: 10px;
            font-weight: 700;
        }
        .impact-item p {
            font-size: 0.95rem;
            color: var(--text-color-dark);
        }


        /* Team Section */
        .team-section {
            background: linear-gradient(135deg, var(--light-green) 0%, rgba(234, 252, 233, 0.7) 100%);
            padding: 50px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(11, 212, 41, 0.12);
            margin-bottom: 40px;
            transition: all 0.4s ease;
        }

        .team-section:hover {
            box-shadow: 0 12px 40px rgba(11, 212, 41, 0.2);
        }
        .team-section .section-heading {
             margin-bottom: 40px; /* More space below heading */
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px; /* Constrain grid width */
            margin: 0 auto;
        }

        .team-member-card {
            background: linear-gradient(145deg, white 0%, #f8fff9 100%);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(11, 212, 41, 0.15);
            padding: 30px 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            border: 2px solid rgba(11, 212, 41, 0.1);
            position: relative;
            overflow: hidden;
        }

        .team-member-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), #20c96a, var(--primary-green));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .team-member-card:hover::before {
            transform: scaleX(1);
        }

        .team-member-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 20px 50px rgba(11, 212, 41, 0.25);
            border-color: rgba(11, 212, 41, 0.3);
        }

        .member-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--primary-green);
            margin-bottom: 20px;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(11, 212, 41, 0.3);
        }

        .team-member-card:hover .member-image {
            border-color: var(--dark-green);
            transform: scale(1.1);
            box-shadow: 0 12px 35px rgba(11, 212, 41, 0.4);
        }

        .member-name {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 5px;
        }
        .member-title {
            font-size: 1.1rem;
            color: var(--primary-green);
            margin-bottom: 8px;
            font-weight: 600;
        }
        .member-subtitle {
            font-size: 0.95rem;
            color: #777;
            margin-bottom: 15px;
        }
        .member-socials {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        .member-socials a {
            color: var(--dark-green);
            font-size: 1.5rem;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            padding: 8px;
            border-radius: 50%;
            background: rgba(11, 212, 41, 0.1);
        }
        .member-socials a:hover {
            color: white;
            background: var(--primary-green);
            transform: translateY(-3px) scale(1.2);
            box-shadow: 0 8px 20px rgba(11, 212, 41, 0.4);
        }

        /* Responsive adjustments for About Us sections */
        @media (max-width: 992px) {
            .about-hero-section {
                padding: 60px 20px;
            }
            .about-hero-section h1 {
                font-size: 3rem;
            }
            .about-hero-section p {
                font-size: 1.1rem;
            }
            .section-container, .mission-vision-section, .impact-section, .team-section {
                padding: 40px 20px;
            }
            .section-heading {
                font-size: 2.2rem;
                flex-direction: column;
                gap: 10px;
            }
            .section-heading i {
                font-size: 2.5rem;
            }
            .mission-vision-grid, .team-grid, .impact-grid {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .about-hero-section {
                padding: 50px 15px;
            }
            .about-hero-section h1 {
                font-size: 2.5rem;
            }
            .about-hero-section p {
                font-size: 1rem;
            }
            .section-container, .mission-vision-section, .impact-section, .team-section {
                padding: 30px 15px;
            }
            .section-heading {
                font-size: 2rem;
            }
            .section-heading i {
                font-size: 2.2rem;
            }
            .section-content p, .section-content ul li, .mission-vision-card p, .impact-item p {
                font-size: 0.95rem;
            }
            .mission-vision-grid, .team-grid, .impact-grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                gap: 20px;
            }
            .mission-vision-card i {
                font-size: 3rem;
            }
            .mission-vision-card h4 {
                font-size: 1.6rem;
            }
            .impact-item i {
                font-size: 2.5rem;
            }
            .impact-item h5 {
                font-size: 1.2rem;
            }
            .member-image {
                width: 120px;
                height: 120px;
            }
            .member-name {
                font-size: 1.4rem;
            }
            .member-title {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .about-hero-section {
                padding: 40px 10px;
            }
            .about-hero-section h1 {
                font-size: 2rem;
            }
            .about-hero-section h1::after {
                width: 60px;
                bottom: -8px;
            }
            .about-hero-section p {
                font-size: 0.9rem;
            }
            .section-container, .mission-vision-section, .impact-section, .team-section {
                padding: 20px 10px;
            }
            .section-heading {
                font-size: 1.8rem;
            }
            .section-heading i {
                font-size: 2rem;
            }
            .mission-vision-grid, .team-grid, .impact-grid {
                grid-template-columns: 1fr; /* Stack elements on very small screens */
            }
            .mission-vision-card h4 {
                font-size: 1.4rem;
            }
            .impact-item h5 {
                font-size: 1.1rem;
            }
            .member-image {
                width: 100px;
                height: 100px;
            }
            .member-name {
                font-size: 1.3rem;
            }
            .member-title {
                font-size: 0.9rem;
            }
            .member-socials a {
                font-size: 1.3rem;
            }
        }

    </style>

<main class="main-content">
    <section class="about-hero-section animate__animated animate__fadeIn" data-aos="fade-down" data-aos-duration="1000">
        <div class="about-page-wrapper">
            <h1>{{ $content && $content->hero_title ? $content->hero_title : 'Our Story: Cultivating Progress' }}</h1>
            <p>
                {{ $content && $content->hero_subtitle ? $content->hero_subtitle : 'Empowering farmers through technology and knowledge, we\'re dedicated to fostering a resilient and prosperous agricultural community. Discover our journey, values, and the team making it happen.' }}
            </p>
        </div>
    </section>

    <div class="about-page-wrapper">         <section class="section-container animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-heading"><i class="fas fa-hand-holding-heart"></i> Our Motivation</h2>
            <div class="section-content">
                <p>
                    {{ $content && $content->our_motivation ? $content->our_motivation : 'At Farmer Portal, we\'re driven by a deep understanding of the challenges farmers face daily. From unpredictable weather to volatile markets and stubborn crop diseases, modern agriculture demands resilience and quick adaptation. Our motivation stems from a fundamental belief: technology can be a powerful ally for every farmer, no matter their scale or location.' }}
                </p>
            </div>
        </section>

        <section class="mission-vision-section animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="300">
            <h2 class="section-heading"><i class="fas fa-lightbulb"></i> Our Mission & Vision</h2>
            <div class="mission-vision-grid">
                <div class="mission-vision-card" data-aos="zoom-in-up" data-aos-delay="400">
                    <i class="fas fa-chart-line"></i>
                    <h4>Our Mission</h4>
                    <p>{{ $content && $content->our_mission ? $content->our_mission : 'To provide cutting-edge digital tools and comprehensive knowledge resources that empower farmers to make informed decisions, optimize yields, and achieve economic sustainability in an ever-evolving agricultural landscape.' }}</p>
                </div>
                <div class="mission-vision-card" data-aos="zoom-in-up" data-aos-delay="500">
                    <i class="fas fa-globe-asia"></i>
                    <h4>Our Vision</h4>
                    <p>{{ $content && $content->our_vision ? $content->our_vision : 'To cultivate a globally connected and resilient farming community, where every farmer has equitable access to technology, expertise, and market opportunities, ensuring a prosperous and sustainable future for agriculture worldwide.' }}</p>
                </div>
            </div>
        </section>

        <section class="impact-section animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="600">
            <h2 class="section-heading"><i class="fas fa-leaf"></i> What We Value</h2>
            <div class="impact-grid">
                @if($content && $content->what_we_value)
                    @php
                        $values = explode("\n", $content->what_we_value);
                        $icons = ['fas fa-handshake', 'fas fa-laptop-code', 'fas fa-heart', 'fas fa-lightbulb'];
                        $delay = 700;
                    @endphp
                    @foreach($values as $index => $value)
                        @if(trim($value))
                            @php
                                $parts = explode(':', trim($value), 2);
                                $title = trim($parts[0] ?? '');
                                $description = trim($parts[1] ?? '');
                                $icon = $icons[$index % count($icons)];
                            @endphp
                            <div class="impact-item" data-aos="fade-right" data-aos-delay="{{ $delay }}">
                                <i class="{{ $icon }}"></i>
                                <h5>{{ $title }}</h5>
                                <p>{{ $description }}</p>
                            </div>
                            @php $delay += 100; @endphp
                        @endif
                    @endforeach
                @else
                    <div class="impact-item" data-aos="fade-right" data-aos-delay="700">
                        <i class="fas fa-handshake"></i>
                        <h5>Community</h5>
                        <p>Fostering a supportive network where farmers share, learn, and grow together.</p>
                    </div>
                    <div class="impact-item" data-aos="fade-right" data-aos-delay="800">
                        <i class="fas fa-laptop-code"></i>
                        <h5>Innovation</h5>
                        <p>Constantly developing smart solutions to tackle agricultural challenges.</p>
                    </div>
                    <div class="impact-item" data-aos="fade-right" data-aos-delay="900">
                        <i class="fas fa-heart"></i>
                        <h5>Sustainability</h5>
                        <p>Promoting practices that protect the planet for future generations.</p>
                    </div>
                    <div class="impact-item" data-aos="fade-right" data-aos-delay="1000">
                        <i class="fas fa-lightbulb"></i>
                        <h5>Education</h5>
                        <p>Providing accessible knowledge to enhance farming skills and decision-making.</p>
                    </div>
                @endif
            </div>
        </section>

        <section class="team-section animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="1100">
            <h2 class="section-heading"><i class="fas fa-users-gear"></i> Meet Our Team</h2>
            <div class="team-grid">
                @if($content && $content->team_members && count($content->team_members) > 0)
                    @foreach($content->team_members as $index => $member)
                        <div class="team-member-card" data-aos="zoom-in" data-aos-delay="{{ 1200 + ($index * 100) }}">
                            @if($member['image'] ?? null)
                                <img src="{{ asset('storage/assets/hero_sections/' . $member['image']) }}" alt="{{ $member['name'] ?? 'Team Member' }}" class="member-image">
                            @else
                                <img src="https://via.placeholder.com/150/0bd429/ffffff?text={{ urlencode(substr($member['name'] ?? 'TM', 0, 1)) }}" alt="{{ $member['name'] ?? 'Team Member' }}" class="member-image">
                            @endif
                            <div class="member-name">{{ $member['name'] ?? 'Team Member' }}</div>
                            <div class="member-title">{{ $member['title'] ?? 'Team Member' }}</div>
                            @if($member['subtitle'] ?? null)
                                <div class="member-subtitle">{{ $member['subtitle'] }}</div>
                            @endif
                            <div class="member-socials">
                                @if($member['linkedin'] ?? null)
                                    <a href="{{ $member['linkedin'] }}" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                @endif
                                @if($member['twitter'] ?? null)
                                    <a href="{{ $member['twitter'] }}" target="_blank" aria-label="Twitter"><i class="fab fa-twitter-square"></i></a>
                                @endif
                                @if($member['github'] ?? null)
                                    <a href="{{ $member['github'] }}" target="_blank" aria-label="GitHub"><i class="fab fa-github-square"></i></a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Default team members when no data exists -->
                    <div class="team-member-card" data-aos="zoom-in" data-aos-delay="1200">
                        <img src="https://via.placeholder.com/150/0bd429/ffffff?text=Shahriar" alt="Md Asif Shahriar Arpon" class="member-image">
                        <div class="member-name">Md Asif Shahriar Arpon</div>
                        <div class="member-title">Founder & Lead Developer</div>
                        <div class="member-subtitle">Visionary behind Farmer Portal's technology.</div>
                        <div class="member-socials">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter-square"></i></a>
                            <a href="#" aria-label="GitHub"><i class="fab fa-github-square"></i></a>
                        </div>
                    </div>

                    <div class="team-member-card" data-aos="zoom-in" data-aos-delay="1300">
                        <img src="https://via.placeholder.com/150/0bd429/ffffff?text=Sadia" alt="Iftekharul Islam" class="member-image">
                        <div class="member-name">Iftekharul Islam</div>
                        <div class="member-title">Head of Agricultural Content</div>
                        <div class="member-subtitle">Expert in crop science and sustainable farming.</div>
                        <div class="member-socials">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="ResearchGate"><i class="fas fa-flask"></i></a>
                        </div>
                    </div>

                    <div class="team-member-card" data-aos="zoom-in" data-aos-delay="1400">
                        <img src="https://via.placeholder.com/150/0bd429/ffffff?text=Imran" alt="Foujia Afrose Tanha" class="member-image">
                        <div class="member-name">Foujia Afrose Tanha</div>
                        <div class="member-title">Community Manager</div>
                        <div class="member-subtitle">Facilitates farmer discussions and support.</div>
                        <div class="member-socials">
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a>
                        </div>
                    </div>
                @endif
            </div>
        </section>

    </div> </main>


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
AOS.init({
    duration: 1000,
    once: true, // Whether animation should happen only once - default
});

    </script>
</body>
</html>
