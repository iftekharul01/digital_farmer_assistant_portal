<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>ভর্তুকি ও সংবাদ | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        /* Subsidies News Page Styles */

        .news-main-bg {

      
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
        .news-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 12px;
            padding-top: 12px;
            border-top: 1px solid var(--border-light);
        }
        .save-btn {
            background: none;
            border: none;
            color: var(--primary-green);
            font-size: 1rem;
            cursor: pointer;
            padding: 6px;
            border-radius: 6px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .save-btn:hover {
            background: var(--light-green);
        }
        .save-btn.saved {
            color: #e74c3c;
        }
        .save-btn.saved:hover {
            background: #ffeaea;
        }
        .read-more {
            font-size: 0.9rem;
            color: var(--primary-green);
            font-weight: 600;
        }
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            transform: translateX(400px);
            transition: transform 0.3s;
        }
        .toast.show {
            transform: translateX(0);
        }
        .toast.success {
            background: #27ae60;
        }
        .toast.error {
            background: #e74c3c;
        }
        .loading-news {
            text-align: center;
            font-size: 1.1rem;
            color: var(--primary-green);
            padding: 30px 0;
            grid-column: 1/-1;
        }

        /* Filter Section Styles */
        .news-filters {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--shadow-card);
            margin-bottom: 32px;
            border: 1px solid var(--border-light);
        }
        .filters-title {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--dark-green);
            margin-bottom: 20px;
            text-align: center;
        }
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
            justify-content: center;
        }
        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            min-width: 150px;
        }
        .filter-label {
            font-weight: 600;
            color: var(--dark-green);
            font-size: 0.95rem;
        }
        .filter-select {
            padding: 8px 12px;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            background: white;
            color: var(--dark-green);
            font-size: 0.95rem;
            transition: border-color 0.2s;
        }
        .filter-select:focus {
            outline: none;
            border-color: var(--primary-green);
        }
        .apply-filters-btn {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }
        .apply-filters-btn:hover {
            background: #089c24;
        }
        .clear-filters-btn {
            background: #6c757d;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            margin-left: 10px;
            transition: background 0.2s;
        }
        .clear-filters-btn:hover {
            background: #5a6268;
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
            .filter-row {
                flex-direction: column;
                align-items: stretch;
            }
            .filter-group {
                min-width: unset;
            }
        }
    </style>
</head>
<body>

@include('partials.header')

<!-- Main Content  -->
<div class="section-wrapper news-main-bg">
    <div class="news-header">
        <h1 class="section-heading"><i class="fas fa-newspaper"></i> কৃষি ও কৃষক সংবাদ</h1>
        <div class="news-subheading">সর্বশেষ আপডেট, সম্পাদকের পছন্দ, ব্যবসা, খেলাধুলা, পরিবেশ এবং আরও অনেক কিছু</div>
    </div>
    
    <!-- News Filters -->
    <div class="news-filters">
        <div class="filters-title">🔍 সংবাদ ফিল্টার</div>
        <div class="filter-row">
            <div class="filter-group">
                <label class="filter-label">দেশ</label>
                <select id="country-filter" class="filter-select">
                    <option value="">সব দেশ</option>
                    <option value="bd">বাংলাদেশ</option>
                    <option value="in">ভারত</option>
                    <option value="us">যুক্তরাষ্ট্র</option>
                    <option value="gb">যুক্তরাজ্য</option>
                    <option value="au">অস্ট্রেলিয়া</option>
                    <option value="ca">কানাডা</option>
                </select>
            </div>
            <div class="filter-group">
                <label class="filter-label">বিষয়</label>
                <select id="category-filter" class="filter-select">
                    <option value="">সব বিষয়</option>
                    <option value="business">ব্যবসা</option>
                    <option value="environment">পরিবেশ</option>
                    <option value="politics">রাজনীতি</option>
                    <option value="technology">প্রযুক্তি</option>
                    <option value="science">বিজ্ঞান</option>
                    <option value="health">স্বাস্থ্য</option>
                </select>
            </div>
            <div class="filter-group">
                <label class="filter-label">ভাষা</label>
                <select id="language-filter" class="filter-select">
                    <option value="">সব ভাষা</option>
                    <option value="en">ইংরেজি</option>
                    <option value="bn">বাংলা</option>
                    <option value="hi">হিন্দি</option>
                    <option value="ur">উর্দু</option>
                </select>
            </div>
        </div>
        <div style="text-align: center; margin-top: 15px;">
            <button id="apply-filters" class="apply-filters-btn">ফিল্টার প্রয়োগ করুন</button>
            <button id="clear-filters" class="clear-filters-btn">সাফ করুন</button>
        </div>
    </div>
    
    <div id="news-grid" class="news-grid"></div>
</div>

<div id="toast" class="toast"></div>



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

// Function to convert English digits to Bangla digits
function toBanglaDigits(number) {
    const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return number.toString().replace(/\d/g, digit => banglaDigits[digit]);
}

// Function to format date in Bangla
function formatDateInBangla(dateString) {
    if (!dateString) return '';
    const date = new Date(dateString);
    const months = ['জান', 'ফেব', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগ', 'সেপ', 'অক্ট', 'নভে', 'ডিসে'];
    const day = toBanglaDigits(date.getDate());
    const month = months[date.getMonth()];
    const year = toBanglaDigits(date.getFullYear());
    return `${day} ${month}, ${year}`;
}

// Function to build API URL with filters
function buildApiUrl() {
    const country = document.getElementById('country-filter').value;
    const category = document.getElementById('category-filter').value;
    const language = document.getElementById('language-filter').value;
    const query = 'agriculture OR farming OR farmer'; // Fixed search query
    
    let url = `https://newsdata.io/api/1/news?apikey=${NEWS_API_KEY}&q=${encodeURIComponent(query)}`;
    
    if (country) url += `&country=${country}`;
    if (category) url += `&category=${category}`;
    if (language) url += `&language=${language}`;
    
    return url;
}

// Function to load news
function loadNews() {
    newsGrid.innerHTML = '<div class="loading-news">সংবাদ লোড হচ্ছে...</div>';
    
    const apiUrl = buildApiUrl();
    
    fetch(apiUrl)
        .then(res => res.json())
        .then(data => {
            newsGrid.innerHTML = '';
            if (data.results && data.results.length > 0) {
                data.results.forEach(article => {
                    const card = document.createElement('div');
                    card.className = 'news-card';
                    
                    // Safely escape strings for HTML attributes
                    const safeTitle = (article.title || '').replace(/'/g, "&apos;").replace(/"/g, "&quot;");
                    const safeDesc = (article.description || '').replace(/'/g, "&apos;").replace(/"/g, "&quot;");
                    const safeLink = article.link || '';
                    const safeImageUrl = article.image_url || '';
                    const safeSourceId = article.source_id || '';
                    const safePubDate = formatDateInBangla(article.pubDate);
                    
                    card.innerHTML = `
                        ${article.image_url ? `<img src="${safeImageUrl}" class="news-img" alt="সংবাদের ছবি">` : `<div class="news-img"><i class="fas fa-newspaper"></i></div>`}
                        <div class="news-content">
                            <div>
                                <div class="news-title">${safeTitle}</div>
                                <div class="news-desc">${safeDesc}</div>
                            </div>
                            <div class="news-meta">
                                <span class="news-source"><i class="fas fa-newspaper"></i> ${safeSourceId || 'অজানা'}</span>
                                <span class="news-date"><i class="far fa-clock"></i> ${safePubDate}</span>
                            </div>
                            <div class="news-actions">
                                <a href="${safeLink}" target="_blank" rel="noopener noreferrer" class="read-more">পড়ুন <i class="fas fa-external-link-alt"></i></a>
                                <button class="save-btn" data-title="${safeTitle}" data-link="${safeLink}" data-desc="${safeDesc}" data-image="${safeImageUrl}" data-source="${safeSourceId}" data-date="${safePubDate}">
                                    <i class="fas fa-bookmark"></i> সংরক্ষণ
                                </button>
                            </div>
                        </div>
                    `;
                    newsGrid.appendChild(card);
                });
                // Check saved status for all news
                checkAllSavedStatus();
            } else {
                newsGrid.innerHTML = '<div class="loading-news">কোনো সংবাদ পাওয়া যায়নি। অনুগ্রহ করে ফিল্টার পরিবর্তন করুন বা পরে আবার চেষ্টা করুন।</div>';
            }
        })
        .catch(err => {
            console.error('Error fetching news:', err);
            newsGrid.innerHTML = '<div class="loading-news">সংবাদ লোড করতে ত্রুটি। অনুগ্রহ করে পরে আবার চেষ্টা করুন।</div>';
        });
}

// Event listeners for filters
document.getElementById('apply-filters').addEventListener('click', loadNews);

document.getElementById('clear-filters').addEventListener('click', () => {
    document.getElementById('country-filter').value = '';
    document.getElementById('category-filter').value = '';
    document.getElementById('language-filter').value = '';
    loadNews();
});

// Load news on page load
loadNews();

// Save/Unsave news functionality with event delegation
document.addEventListener('click', function(e) {
    if (e.target.closest('.save-btn')) {
        e.preventDefault();
        const button = e.target.closest('.save-btn');
        const title = button.getAttribute('data-title');
        const link = button.getAttribute('data-link');
        const description = button.getAttribute('data-desc');
        const imageUrl = button.getAttribute('data-image');
        const sourceId = button.getAttribute('data-source');
        const pubDate = button.getAttribute('data-date');
        
        toggleSaveNews(button, title, link, description, imageUrl, sourceId, pubDate);
    }
});

function toggleSaveNews(button, title, link, description, imageUrl, sourceId, pubDate) {
    const isSaved = button.classList.contains('saved');
    
    if (isSaved) {
        // Unsave news - this would require finding the saved news ID
        showToast('সংবাদ আনসেভ করার জন্য সংরক্ষিত সংবাদ পেজে যান।', 'info');
        return;
    }
    
    // Save news
    const newsData = {
        title: title,
        link: link,
        description: description,
        image_url: imageUrl,
        source_id: sourceId,
        pub_date: pubDate,
        category: document.getElementById('category-filter').value,
        country: document.getElementById('country-filter').value,
        language: document.getElementById('language-filter').value
    };
    
    fetch('/saved-news', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(newsData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            button.classList.add('saved');
            button.innerHTML = '<i class="fas fa-bookmark"></i> সংরক্ষিত';
            showToast(data.message, 'success');
        } else {
            showToast(data.message, 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showToast('সংবাদ সংরক্ষণে ত্রুটি হয়েছে!', 'error');
    });
}

// Check if news are already saved
function checkAllSavedStatus() {
    const saveButtons = document.querySelectorAll('.save-btn');
    saveButtons.forEach(button => {
        const link = button.getAttribute('data-link');
        
        fetch('/saved-news/check', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ link: link })
        })
        .then(response => response.json())
        .then(data => {
            if (data.is_saved) {
                button.classList.add('saved');
                button.innerHTML = '<i class="fas fa-bookmark"></i> সংরক্ষিত';
            }
        })
        .catch(error => {
            console.error('Error checking saved status:', error);
        });
    });
}

// Toast notification function
function showToast(message, type) {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = `toast ${type}`;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}
    </script>
</body>
</html>