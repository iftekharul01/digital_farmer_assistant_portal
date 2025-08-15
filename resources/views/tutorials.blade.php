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

        /* Add below your existing styles or at the end of the <style> block */
.tutorials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 28px;
    max-width: 1200px;
    margin: 0 auto 40px auto;
    padding: 0 12px;
}
.tutorial-card {
    background: var(--light-green);
    border-radius: 16px;
    box-shadow: 0 4px 24px var(--shadow-card);
    padding: 32px 22px 28px 22px;
    text-align: center;
    text-decoration: none;
    color: var(--dark-green);
    transition: transform 0.18s cubic-bezier(.4,2,.3,1), box-shadow 0.18s;
    position: relative;
    overflow: hidden;
    border: 2px solid var(--border-light);
    cursor: pointer;
    min-height: 220px;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.tutorial-card:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 8px 32px rgba(11,212,41,0.15);
    border-color: var(--primary-green);
    background: #fff;
}
.tutorial-icon {
    font-size: 2.7rem;
    color: var(--primary-green);
    margin-bottom: 18px;
    transition: color 0.2s;
}
.tutorial-card:hover .tutorial-icon {
    color: #1e3d2c;
}
.tutorial-title {
    font-size: 1.25rem;
    font-weight: 800;
    margin-bottom: 10px;
    letter-spacing: 0.5px;
}
.tutorial-desc {
    font-size: 1.02rem;
    color: var(--text-color-dark);
    margin-bottom: 0;
    opacity: 0.92;
}
@media (max-width: 700px) {
    .tutorials-grid {
        grid-template-columns: 1fr;
        gap: 18px;
    }
    .tutorial-card {
        padding: 24px 12px 20px 12px;
        min-height: 180px;
    }
    .tutorial-icon {
        font-size: 2.2rem;
    }
    .tutorial-title {
        font-size: 1.15rem;
    }
    .tutorial-desc {
        font-size: 0.95rem;
    }
}
    </style>
</head>
<body>
    @include('partials.header')

<!-- Main Content  -->
<div class="section-wrapper" style="padding-top:40px;">
    <h1 class="section-heading" style="text-align:center; margin-bottom:32px;">🌱 Farmer Tutorials</h1>
    <div class="tutorials-grid">
        <a href="/tutorials/soil-testing" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-vial"></i></div>
            <div class="tutorial-title">Soil Testing Techniques</div>
            <div class="tutorial-desc">Learn how to test soil quality and nutrients for better crop yield.</div>
        </a>
        <a href="/tutorials/weather-forecasting" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-cloud-sun"></i></div>
            <div class="tutorial-title">Weather Forecasting for Farmers</div>
            <div class="tutorial-desc">Understand weather patterns and forecasts to plan your farming activities.</div>
        </a>
        <a href="/tutorials/crop-selection" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-seedling"></i></div>
            <div class="tutorial-title">How to Choose the Right Crop</div>
            <div class="tutorial-desc">Tips for selecting crops based on soil, climate, and market demand.</div>
        </a>
        <a href="/tutorials/irrigation-management" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-water"></i></div>
            <div class="tutorial-title">Irrigation Setup and Management</div>
            <div class="tutorial-desc">Efficient irrigation methods and management for healthy crops.</div>
        </a>
        <a href="/tutorials/pest-control" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-bug"></i></div>
            <div class="tutorial-title">Identifying and Controlling Pests</div>
            <div class="tutorial-desc">Identify common pests and learn effective control techniques.</div>
        </a>
        <a href="/tutorials/fertilizers" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-leaf"></i></div>
            <div class="tutorial-title">Organic vs Chemical Fertilizers</div>
            <div class="tutorial-desc">Compare organic and chemical fertilizers for sustainable farming.</div>
        </a>
        <a href="/tutorials/post-harvest-storage" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-warehouse"></i></div>
            <div class="tutorial-title">Post-Harvest Storage Tips</div>
            <div class="tutorial-desc">Best practices for storing crops after harvest to reduce losses.</div>
        </a>
        <a href="/tutorials/government-subsidies" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-file-signature"></i></div>
            <div class="tutorial-title">Applying for Government Farming Subsidies</div>
            <div class="tutorial-desc">Step-by-step guide to apply for government support and subsidies.</div>
        </a>
        <a href="/tutorials/digital-tools" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-tablet-alt"></i></div>
            <div class="tutorial-title">Digital Tools for Farm Record Keeping</div>
            <div class="tutorial-desc">Discover digital tools to manage and track your farm records easily.</div>
        </a>
        <a href="/tutorials/farm-laws" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-gavel"></i></div>
            <div class="tutorial-title">Understanding Farm Laws and Rights</div>
            <div class="tutorial-desc">Know your rights and important laws related to farming in Bangladesh.</div>
        </a>
    </div>
</div>



<!-- Footer Section -->
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
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
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
    </script>
</body>
</html>