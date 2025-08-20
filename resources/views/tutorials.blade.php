<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>টিউটোরিয়াল | কৃষক পোর্টাল</title>
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

        /* Tutorial Page Styles */

        /* Add below your existing styles or at the end of the <style> block */

      
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
    <h1 class="section-heading" style="text-align:center; margin-bottom:32px;">🌱 কৃষি টিউটোরিয়াল</h1>
    <div class="tutorials-grid">
        <a href="/tutorials/soil-testing" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-vial"></i></div>
            <div class="tutorial-title">মাটি পরীক্ষার কৌশল</div>
            <div class="tutorial-desc">ভাল ফসল উৎপাদনের জন্য মাটির গুণমান এবং পুষ্টি পরীক্ষা করার পদ্ধতি শিখুন।</div>
        </a>
        <a href="/tutorials/weather-forecasting" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-cloud-sun"></i></div>
            <div class="tutorial-title">কৃষকদের জন্য আবহাওয়ার পূর্বাভাস</div>
            <div class="tutorial-desc">কৃষি কাজের পরিকল্পনার জন্য আবহাওয়ার ধরণ এবং পূর্বাভাস বুঝুন।</div>
        </a>
        <a href="/tutorials/crop-selection" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-seedling"></i></div>
            <div class="tutorial-title">সঠিক ফসল নির্বাচনের উপায়</div>
            <div class="tutorial-desc">মাটি, জলবায়ু এবং বাজারের চাহিদার ভিত্তিতে ফসল নির্বাচনের পরামর্শ।</div>
        </a>
        <a href="/tutorials/irrigation-management" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-water"></i></div>
            <div class="tutorial-title">সেচ ব্যবস্থাপনা ও পরিচালনা</div>
            <div class="tutorial-desc">স্বাস্থ্যকর ফসলের জন্য দক্ষ সেচ পদ্ধতি এবং পরিচালনা।</div>
        </a>
        <a href="/tutorials/pest-control" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-bug"></i></div>
            <div class="tutorial-title">পোকামাকড় চিহ্নিতকরণ ও নিয়ন্ত্রণ</div>
            <div class="tutorial-desc">সাধারণ পোকামাকড় চিহ্নিত করুন এবং কার্যকর নিয়ন্ত্রণ কৌশল শিখুন।</div>
        </a>
        <a href="/tutorials/fertilizers" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-leaf"></i></div>
            <div class="tutorial-title">জৈব বনাম রাসায়নিক সার</div>
            <div class="tutorial-desc">টেকসই কৃষির জন্য জৈব এবং রাসায়নিক সারের তুলনা।</div>
        </a>
        <a href="/tutorials/post-harvest-storage" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-warehouse"></i></div>
            <div class="tutorial-title">ফসল সংরক্ষণের পরামর্শ</div>
            <div class="tutorial-desc">ফসল কাটার পর ক্ষতি কমানোর জন্য সংরক্ষণের সর্বোত্তম পদ্ধতি।</div>
        </a>
        <a href="/tutorials/government-subsidies" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-file-signature"></i></div>
            <div class="tutorial-title">সরকারি কৃষি ভর্তুকির আবেদন</div>
            <div class="tutorial-desc">সরকারি সহায়তা এবং ভর্তুকির জন্য আবেদনের ধাপে ধাপে গাইড।</div>
        </a>
        <a href="/tutorials/digital-tools" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-tablet-alt"></i></div>
            <div class="tutorial-title">খামার রেকর্ড রাখার ডিজিটাল টুলস</div>
            <div class="tutorial-desc">সহজে খামারের রেকর্ড পরিচালনা ও ট্র্যাক করার জন্য ডিজিটাল টুলস আবিষ্কার করুন।</div>
        </a>
        <a href="/tutorials/farm-laws" class="tutorial-card">
            <div class="tutorial-icon"><i class="fas fa-gavel"></i></div>
            <div class="tutorial-title">কৃষি আইন ও অধিকার বোঝা</div>
            <div class="tutorial-desc">বাংলাদেশে কৃষি সংক্রান্ত আপনার অধিকার এবং গুরুত্বপূর্ণ আইন জানুন।</div>
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