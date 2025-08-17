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

        .news-main-bg {
            background: #f5f7fa;
            padding-top: 32px;
            padding-bottom: 32px;
        }
        .news-header {
            text-align: center;
            margin-bottom: 32px;
        }
        .section-heading {
            font-size: 2.1rem;
            font-weight: 900;
            color: var(--dark-green);
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        .news-subheading {
            color: #666;
            font-size: 1.15rem;
            margin-bottom: 18px;
            font-weight: 500;
        }
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 32px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 12px;
        }
        .news-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px var(--shadow-card);
            padding: 0;
            text-decoration: none;
            color: var(--dark-green);
            transition: transform 0.18s cubic-bezier(.4,2,.3,1), box-shadow 0.18s;
            position: relative;
            overflow: hidden;
            border: 2px solid var(--border-light);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            min-height: 340px;
        }
        .news-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 12px 40px rgba(11,212,41,0.18);
            border-color: var(--primary-green);
        }
        .news-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            background: #eafce9;
        }
        .news-content {
            padding: 22px 18px 16px 18px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .news-title {
            font-size: 1.18rem;
            font-weight: 800;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
            color: var(--dark-green);
            line-height: 1.3;
        }
        .news-desc {
            font-size: 1.02rem;
            color: var(--text-color-dark);
            margin-bottom: 12px;
            opacity: 0.92;
            line-height: 1.5;
        }
        .news-meta {
            font-size: 0.92rem;
            color: #888;
            margin-bottom: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .news-source {
            font-weight: 600;
            color: var(--primary-green);
        }
        .news-date {
            font-size: 0.95rem;
            color: #888;
            
        }
        .loading-news {
            text-align: center;
            font-size: 1.1rem;
            color: var(--primary-green);
            padding: 30px 0;
            grid-column: 1/-1;
        }
        @media (max-width: 900px) {
            .news-grid {
                grid-template-columns: 1fr;
                gap: 22px;
            }
            .news-card {
                min-height: 220px;
            }
            .news-img {
                height: 120px;
            }
        }
    </style>
</head>
<body>

@include('partials.header')

<!-- Main Content  -->
<div class="section-wrapper news-main-bg">
    <div class="news-header">
        <h1 class="section-heading"><i class="fas fa-newspaper"></i> Farmer & Agriculture News</h1>
        <div class="news-subheading">Latest updates, editor's picks, business, sports, environment & more</div>
    </div>
    <div id="news-grid" class="news-grid"></div>
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

// Replace with your own NewsData.io API key
const NEWS_API_KEY = 'pub_4fd10ade31234520bbd90d86e26f3de1';
const newsGrid = document.getElementById('news-grid');
newsGrid.innerHTML = '<div class="loading-news">Loading news...</div>';

fetch(`https://newsdata.io/api/1/news?apikey=${NEWS_API_KEY}&q=agriculture OR farming OR farmer`)
    .then(res => res.json())
    .then(data => {
        newsGrid.innerHTML = '';
        if (data.results && data.results.length > 0) {
            data.results.forEach(article => {
                const card = document.createElement('a');
                card.className = 'news-card';
                card.href = article.link;
                card.target = '_blank';
                card.rel = 'noopener noreferrer';
                card.innerHTML = `
                    ${article.image_url ? `<img src="${article.image_url}" class="news-img" alt="News Image">` : `<div class="news-img"></div>`}
                    <div class="news-content">
                        <div>
                            <div class="news-title">${article.title}</div>
                            <div class="news-desc">${article.description ? article.description : ''}</div>
                        </div>
                        <div class="news-meta">
                            <span class="news-source"><i class="fas fa-newspaper"></i> ${article.source_id ? article.source_id : 'Unknown'}</span>
                            <span class="news-date"><i class="far fa-clock"></i> ${article.pubDate ? new Date(article.pubDate).toLocaleDateString() : ''}</span>
                        </div>
                    </div>
                `;
                newsGrid.appendChild(card);
            });
        } else {
            newsGrid.innerHTML = '<div class="loading-news">No news found. Please check back later.</div>';
        }
    })
    .catch(err => {
        console.error('Error fetching news:', err);
        newsGrid.innerHTML = '<div class="loading-news">Error loading news. Please try again later.</div>';
    });
    </script>
</body>
</html>