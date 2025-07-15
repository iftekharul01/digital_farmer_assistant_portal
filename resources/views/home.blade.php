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

        /* Hero Section */
        .hero-section {
            width: 100%;
            min-height: 90vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: url('https://static.vecteezy.com/system/resources/thumbnails/031/111/833/original/landscape-of-green-crops-and-field-4k-clip-of-farming-and-agriculturist-with-seeding-of-rice-young-plant-and-field-rice-field-and-farmland-thailand-agriculture-and-farm-in-asia-video.jpg') center center/cover no-repeat;
            border-radius: 0 0 32px 32px;
            box-shadow: 0 8px 32px var(--shadow-medium);
            margin-bottom: 0;
            overflow: hidden;
        }
        .hero-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(11, 212, 41, 0.18);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 48px 16px 38px 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .hero-title {
            font-size: 2.8rem;
            font-weight: 900;
            letter-spacing: -2px;
            margin-bottom: 18px;
            text-shadow: 0 2px 16px rgba(0,0,0,0.13);
        }
        .hero-typed {
            font-size: 1.45rem;
            font-weight: 700;
            margin-bottom: 18px;
            min-height: 2.2em;
            color: #fff;
            text-shadow: 0 2px 12px rgba(0,0,0,0.13);
            display: inline-block;
            height: 2.2em;
        }
        .hero-desc {
            font-size: 1.13rem;
            font-weight: 500;
            color: var(--text-color-light);
            margin-bottom: 0;
            text-shadow: 0 2px 12px rgba(0,0,0,0.13);
        }
        .divider {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 36px auto;
            border: none;
            border-top: 2px solid var(--border-light);
            border-radius: 0;
            box-shadow: none;
        }

        /* Alternating Sections */
        .section-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 16px; /* Increased padding for more breathing room */
            position: relative; /* For section decoration */
            overflow: hidden; /* Ensures pseudo-element doesn't bleed */
        }
        .section-wrapper:nth-of-type(odd) {
            background: #ffffff; /* White background for odd sections */
        }
        .section-wrapper:nth-of-type(even) {
            background: #f4fdf6; /* Light green for even sections */
        }

        /* Section Top Decoration */
        .section-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 40px; /* Height of the curve */
            background: inherit; /* Inherit background to make it blend */
            z-index: 0;
            transform: translateY(-50%) rotateX(180deg); /* Flip and move up */
            border-radius: 0 0 50% 50% / 0 0 100% 100%; /* Creates a subtle top curve */
            opacity: 0.7; /* Make it subtle */
            box-shadow: inset 0 5px 15px rgba(0,0,0,0.05); /* Subtle inner shadow */
            filter: blur(1px); /* Slightly blur for a softer look */
            /* You can adjust transform, border-radius, and opacity for different effects */
        }
        /* Specific override for the first section after hero so it doesn't overlap the divider */
        .section-wrapper:first-of-type::before {
            display: none; /* Hide the top decoration for the very first section */
        }

        .section-heading {
            font-size: 1.8rem; /* Slightly larger heading */
            font-weight: 800;
            color: var(--primary-green);
            margin-bottom: 28px; /* More space below heading */
            display: flex;
            align-items: center;
            gap: 12px; /* Space between icon and text */
        }
        .section-heading i {
            font-size: 2rem; /* Larger icon */
            color: var(--dark-green); /* Darker icon for contrast */
        }

        /* Section CTA Button */
        .section-cta {
            text-align: center;
            margin-top: 40px; /* Space above the button */
        }
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--primary-green);
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.05rem;
            transition: background 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 12px rgba(11, 212, 41, 0.2);
        }
        .cta-button:hover {
            background: var(--dark-green); /* Darker green on hover */
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(11, 212, 41, 0.3);
        }

        /* === NOTIFICATIONS TIMELINE === */
        .timeline {
            border-left: 4px solid var(--primary-green);
            padding-left: 20px;
            margin-bottom: 0px; /* Removed margin-bottom here as CTA will follow */
            position: relative;
        }
        .timeline::before {
            content: ''; /* This pseudo-element is actually redundant now that border-left is used */
            display: none; /* Hide the redundant pseudo-element */
        }
        .timeline-item {
            margin-bottom: 24px;
            position: relative;
            padding-left: 10px; /* Added for better alignment with circle */
        }
        .timeline-item::before {
            content: "\f111"; /* Font Awesome circle icon */
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: var(--primary-green);
            position: absolute;
            left: -33px; /* Adjust to align with the border */
            top: 5px;
            font-size: 10px;
            background: #ffffff; /* Match section background */
            border-radius: 50%;
            padding: 2px;
            z-index: 1; /* Bring in front of the line */
        }
        .timeline-item:last-child {
            margin-bottom: 0; /* No margin on last item */
        }
        .timeline-item h4 {
            margin: 0;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--dark-green);
        }
        .timeline-item p {
            margin: 4px 0 0;
            color: var(--text-color-dark);
            font-size: 0.95rem;
        }

        /* === ANNOUNCEMENTS CAROUSEL === */
        .announcement-filters {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 25px;
            justify-content: center;
        }
        .filter-button {
            background: #e9ecef;
            color: #495057;
            border: 1px solid #ced4da;
            padding: 8px 18px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        .filter-button:hover {
            background: #dee2e6;
            border-color: #adb5bd;
        }
        .filter-button.active {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
            box-shadow: 0 2px 8px rgba(11, 212, 41, 0.2);
        }

        .announcement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        .announcement-card {
            background: #f9fafb;
            border-left: 5px solid var(--primary-green);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px var(--shadow-card);
            transition: transform 0.2s, box-shadow 0.2s;
            display: none; /* Hidden by default for filtering */
        }
        .announcement-card.show {
            display: block; /* Shown when filtered */
        }
        .announcement-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 16px rgba(11, 212, 41, 0.12);
        }
        .announcement-card h4 {
            margin: 0 0 10px;
            font-size: 1.15rem;
            color: var(--primary-green);
            font-weight: 800;
        }
        .announcement-card p {
            margin: 0;
            color: var(--dark-green);
            font-size: 0.98rem;
        }

        /* === WEATHER GRID === */
        .weather-section-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
            gap: 18px;
        }
        .weather-box {
            background: linear-gradient(135deg, var(--light-green), #ffffff);
            padding: 18px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 2px 10px var(--shadow-card);
            transition: transform 0.2s;
        }
        .weather-box:hover {
            transform: scale(1.03);
        }
        .weather-box i {
            font-size: 2rem;
            color: var(--primary-green);
            margin-bottom: 10px;
        }
        .weather-box h4 {
            font-size: 1.1rem;
            color: var(--primary-green);
            margin-bottom: 4px;
        }
        .weather-box p {
            font-size: 0.95rem;
            color: var(--dark-green);
            margin: 0;
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

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-title animate__animated animate__fadeInDown">Welcome to Farmer Portal</div>
            <div class="hero-typed">
                <span id="typed"></span>
            </div>
            <div class="hero-desc animate__animated animate__fadeInUp">
                Your digital companion for smarter, more profitable, and sustainable farming in Bangladesh.
            </div>
        </div>
    </section>

    <hr class="divider" />

    <section class="section-wrapper" data-aos="fade-up">
        <h2 class="section-heading"><i class="fas fa-bell"></i> Notifications</h2>
        <div class="timeline">
            <div class="timeline-item" data-aos="fade-left" data-aos-delay="100">
                <h4>Power Outage – Rangpur</h4>
                <p>Scheduled maintenance on July 18, 10am–2pm</p>
            </div>
            <div class="timeline-item" data-aos="fade-left" data-aos-delay="200">
                <h4>Pest Alert – Barisal</h4>
                <p>Brown planthopper detected. Inspect paddy fields.</p>
            </div>
            <div class="timeline-item" data-aos="fade-left" data-aos-delay="300">
                <h4>Seed Distribution – Rajshahi</h4>
                <p>BADC starts Aman seed distribution</p>
            </div>
            <div class="timeline-item" data-aos="fade-left" data-aos-delay="400">
                <h4>Flood Warning – Sirajganj</h4>
                <p>Jamuna river level rising. Move equipment.</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="#" class="cta-button">
                View All Notifications <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <section class="section-wrapper" data-aos="fade-up">
        <h2 class="section-heading"><i class="fas fa-bullhorn"></i> Announcements</h2>
        <div class="announcement-filters">
            <button class="filter-button active" data-filter="all">All</button>
            <button class="filter-button" data-filter="event">Events</button>
            <button class="filter-button" data-filter="subsidy">Subsidies</button>
            <button class="filter-button" data-filter="alert">Alerts</button>
        </div>
        <div class="announcement-grid">
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="50" data-category="event">
                <h4>Organic Week</h4>
                <p>Join the national campaign for organic farming, July 20–26.</p>
            </div>
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="100" data-category="subsidy">
                <h4>Solar Pump Subsidy</h4>
                <p>Apply for 30% subsidy on solar pumps in Khulna.</p>
            </div>
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="150" data-category="event">
                <h4>Free Rice Workshop</h4>
                <p>Chattogram, July 22. Register online now.</p>
            </div>
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="200" data-category="alert">
                <h4>Storm Recovery Grants</h4>
                <p>Available for cyclone-affected farmers in coastal areas.</p>
            </div>
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="250" data-category="subsidy">
                <h4>Crop Insurance</h4>
                <p>Enroll before July 31st for Boro season.</p>
            </div>
            <div class="announcement-card show" data-aos="fade-up" data-aos-delay="300" data-category="subsidy">
                <h4>Startup Grants</h4>
                <p>Apply for agri innovation grants by August 5th.</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="#" class="cta-button">
                Explore All Announcements <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <section class="section-wrapper" data-aos="fade-up">
        <h2 class="section-heading"><i class="fas fa-cloud-sun-rain"></i> Weather Report</h2>
        <div class="weather-section-grid">
            <div class="weather-box" data-aos="fade-right" data-aos-delay="100">
                <i class="fas fa-cloud-showers-heavy"></i>
                <h4>Dhaka</h4>
                <p>Heavy rain, July 16–18</p>
            </div>
            <div class="weather-box" data-aos="fade-right" data-aos-delay="200">
                <i class="fas fa-temperature-high"></i>
                <h4>Rajshahi</h4>
                <p>Heatwave alert: 38°C</p>
            </div>
            <div class="weather-box" data-aos="fade-right" data-aos-delay="300">
                <i class="fas fa-wind"></i>
                <h4>Khulna</h4>
                <p>Strong winds – Secure equipment</p>
            </div>
            <div class="weather-box" data-aos="fade-right" data-aos-delay="400">
                <i class="fas fa-cloud"></i>
                <h4>Barisal</h4>
                <p>Cloudy – Good for jute retting</p>
            </div>
            <div class="weather-box" data-aos="fade-right" data-aos-delay="500">
                <i class="fas fa-water"></i>
                <h4>Chattogram</h4>
                <p>Storm risk – Monitor fish ponds</p>
            </div>
        </div>
        <div class="section-cta">
            <a href="#" class="cta-button">
                Full Weather Forecast <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

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
        // Initialize AOS
        AOS.init({
            duration: 800, // animation duration
            once: true,    // whether animation should happen only once - default
        });

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
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Typed.js animation for hero
        var typed = new Typed('#typed', {
            strings: [
                "Real-time Market Prices for Every Crop.",
                "Weather Alerts Tailored for Your Region.",
                "Expert Advice, Whenever You Need It.",
                "Government Schemes & Subsidies Updates.",
                "Grow More. Earn More. Live Better."
            ],
            typeSpeed: 38,
            backSpeed: 24,
            backDelay: 1800,
            startDelay: 400,
            loop: true,
            showCursor: false
        });

        // Announcement Filtering Logic
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('.filter-button');
            const announcementCards = document.querySelectorAll('.announcement-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filter = button.dataset.filter;

                    // Remove active class from all buttons and add to clicked one
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    announcementCards.forEach(card => {
                        const category = card.dataset.category;
                        if (filter === 'all' || category === filter) {
                            card.classList.add('show');
                        } else {
                            card.classList.remove('show');
                        }
                    });

                    // Re-initialize AOS to play animations on newly shown cards
                    AOS.refresh();
                });
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
    </script>
</body>
</html>