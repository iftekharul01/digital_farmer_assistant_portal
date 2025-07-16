<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Market Prices | Farmer Portal</title>
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
            --off-white-bg: #fdfdfd; /* Added for general content sections */
            --soft-gray-border: #eee; /* Added for borders */
        }

        body {
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: var(--text-color-dark);
            overflow-x: hidden; /* Prevent horizontal scroll from AOS */
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


        /* Media Queries */
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
            .section-wrapper {
                padding: 30px 16px;
            }
            .hero-title { font-size: 2.2rem; }
            .hero-typed { font-size: 1.2rem; }
            .section-heading { font-size: 1.6rem; margin-bottom: 20px; }
            .section-heading i { font-size: 1.8rem; }
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
            .footer-column { flex: 1 1 100%; text-align: center; }
            .footer-column ul { padding-inline-start: 0; }
        }

        /* --- Market Price Page Specific Styles --- */
        .market-prices-main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* New Hero Section for Market Prices */
        .market-hero {
            background-image: url('https://c4.wallpaperflare.com/wallpaper/491/30/324/nature-landscape-green-plants-wallpaper-preview.jpg'); /* Placeholder image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 70vh; /* Minimum height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white; /* Text color for readability */
            padding: 20px;
            margin-bottom: 40px; /* Space below the hero */
            position: relative;
            z-index: 1; /* Ensure it's above other content if needed */
        }
        /* Overlay for better text readability (optional but recommended) */
        .market-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4); /* Dark overlay */
            z-index: -1; /* Behind content */
        }

        .market-hero h1 {
            font-size: 3.5rem; /* Larger font size for hero title */
            margin-bottom: 15px;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Text shadow for contrast */
        }

        .market-hero p {
            font-size: 1.3rem; /* Larger font size for hero subline */
            max-width: 800px;
            margin: 0 auto;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.4); /* Text shadow for contrast */
        }


        /* Search and Filter Section */
        .filter-section {
            background-color: var(--off-white-bg);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
            border: 1px solid var(--soft-gray-border);
        }

        .search-bar {
            position: relative;
            margin-bottom: 25px;
        }

        .search-bar input {
            width: 100%;
            padding: 15px 20px 15px 50px; /* Left padding for icon */
            border: 1px solid var(--soft-gray-border);
            border-radius: 8px;
            font-size: 1.1rem;
            color: var(--text-color-dark);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .search-bar input:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.2);
            outline: none;
        }

        .search-bar .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 1.2rem;
        }

        .filters-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px; /* Spacing between filter elements */
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-dropdown {
            flex: 1; /* Allow dropdowns to grow */
            min-width: 180px; /* Minimum width for dropdowns */
            position: relative;
        }

        .filter-dropdown select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--soft-gray-border);
            border-radius: 8px;
            background-color: white;
            -webkit-appearance: none; /* Remove default arrow on Chrome/Safari */
            -moz-appearance: none; /* Remove default arrow on Firefox */
            appearance: none; /* Remove default arrow */
            background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%20viewBox%3D%220%200%20292.4%20292.4%22%3E%3Cpath%20fill%3D%22%23555%22%20d%3D%22M287%20197.8L154.7%2065.5c-3.1-3.1-8.2-3.1-11.3%200L5.4%20197.8c-3.1%203.1-3.1%208.2%200%2011.3l11.3%2011.3c3.1%203.1%208.2%203.1%2011.3%200L149%2099.9l121%20121.2c3.1%203.1%208.2%203.1%2011.3%200l11.3-11.3c3.2-3.1%203.2-8.2%200-11.4z%22%2F%3E%3C%2Fsvg%3E');
            background-repeat: no-repeat;
            background-position: right 15px top 50%;
            background-size: 12px auto;
            cursor: pointer;
            font-size: 1rem;
            color: var(--text-color-dark);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .filter-dropdown select:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.2);
            outline: none;
        }

        .clear-filters-btn {
            background-color: #6c757d; /* Darker gray */
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .clear-filters-btn:hover {
            background-color: #5a6268;
            transform: translateY(-2px);
        }

        /* Results and View Toggle */
        .results-summary {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding: 0 5px; /* Slight padding for alignment */
            flex-wrap: wrap; /* Allow wrapping on small screens */
            gap: 15px; /* Gap for wrapping items */
        }

        .results-summary span {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-color-dark);
        }

        .view-toggle {
            display: flex;
            gap: 8px;
        }

        .view-toggle button {
            background-color: white;
            border: 1px solid var(--soft-gray-border);
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--text-color-dark);
            transition: background-color 0.3s, border-color 0.3s, color 0.3s;
        }

        .view-toggle button.active,
        .view-toggle button:hover {
            background-color: var(--primary-green);
            border-color: var(--primary-green);
            color: white;
        }

        /* Product Cards */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); /* Smaller min-width */
            gap: 20px; /* Slightly smaller gap */
        }

        .product-card {
            background-color: white;
            border-radius: 10px; /* Slightly smaller radius */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05); /* Lighter initial shadow */
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease; /* Faster transition for hover */
            display: flex;
            flex-direction: column;
            border: 1px solid var(--soft-gray-border);
        }

        .product-card:hover {
            transform: translateY(-5px); /* Smaller lift on hover */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* More pronounced shadow on hover */
        }

        .product-image-container {
            width: 100%;
            height: 160px; /* Smaller fixed height for consistency */
            overflow: hidden;
            border-bottom: 1px solid var(--soft-gray-border);
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.2s ease; /* Faster transition for hover */
        }

        .product-card:hover .product-image {
            transform: scale(1.03); /* Smaller zoom on hover */
        }

        .product-info {
            padding: 15px; /* Reduced padding */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 1.3rem; /* Slightly smaller font */
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 5px; /* Reduced margin */
            line-height: 1.3;
        }

        .product-region { /* New style for region */
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .product-region i {
            font-size: 0.8rem;
            color: var(--primary-green);
        }

        .product-details {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-top: auto;
            padding-top: 10px; /* Reduced padding */
            border-top: 1px solid var(--soft-gray-border);
        }

        .current-price {
            font-size: 1.6rem; /* Slightly smaller font */
            font-weight: 800;
            color: var(--primary-green);
        }

        .previous-price {
            font-size: 1rem; /* Slightly smaller font */
            color: #999;
            text-decoration: line-through;
            margin-left: 8px; /* Reduced margin */
        }

        .price-unit {
            font-size: 1rem; /* Slightly smaller font */
            color: var(--text-color-dark);
            margin-left: 3px; /* Reduced margin */
            font-weight: 600;
        }

        /* Empty state or no results message */
        .no-results {
            text-align: center;
            padding: 50px 20px;
            background-color: var(--off-white-bg);
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            color: #777;
            font-size: 1.2rem;
            grid-column: 1 / -1; /* Make it span all columns in the grid */
        }
        .no-results i {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }


        /* Responsive adjustments for market price page */
        @media (max-width: 768px) {
            .market-prices-main {
                margin: 30px auto;
                padding: 0 15px;
            }
            .market-hero h1 {
                font-size: 2.8rem;
            }
            .market-hero p {
                font-size: 1.1rem;
            }
            .filter-section {
                padding: 20px;
            }
            .filters-container {
                flex-direction: column; /* Stack filters vertically */
                align-items: stretch;
                gap: 10px;
            }
            .filter-dropdown {
                min-width: unset; /* Remove min-width to allow full width */
                width: 100%;
            }
            .clear-filters-btn {
                width: 100%;
                justify-content: center;
            }
            .results-summary {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            .view-toggle {
                width: 100%;
                justify-content: space-around;
            }
            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Adjust min-width for smaller screens */
            }
            .product-image-container {
                height: 150px; /* Adjust image height */
            }
            .product-name {
                font-size: 1.2rem;
            }
            .current-price {
                font-size: 1.5rem;
            }
            .previous-price {
                font-size: 0.9rem;
            }
            .price-unit {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .market-hero h1 {
                font-size: 2rem;
            }
            .market-hero p {
                font-size: 1rem;
            }
            .search-bar input {
                padding: 12px 15px 12px 45px;
                font-size: 1rem;
            }
            .search-bar .search-icon {
                left: 15px;
                font-size: 1.1rem;
            }
            .product-grid {
                grid-template-columns: 1fr; /* Single column on very small screens */
            }
            .product-image-container {
                height: 180px; /* Make images a bit larger when stacked */
            }
            .product-info {
                padding: 12px;
            }
            .product-name {
                font-size: 1.1rem;
            }
            .current-price {
                font-size: 1.4rem;
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
            <a href="{{ route('market-prices') }}" class="nav-link active">Market Prices</a>
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
                <a href="{{ route('market-prices') }}" class="nav-link active">Market Prices</a>
                <a href="{{ route('weather') }}" class="nav-link">Weather</a>
                <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
                <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
                <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
                <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </nav>
      </div>

<section class="market-hero">
    <h1>Market Price Overview</h1>
    <p>Stay informed with the latest market prices for various agricultural products, directly from local markets. Make smarter selling and buying decisions.</p>
</section>

<main class="market-prices-main">
    <section class="filter-section">
        <div class="search-bar">
            <i class="fas fa-search search-icon"></i>
            <input type="text" placeholder="Search by product name, category, or region..." />
        </div>

        <div class="filters-container">
            <div class="filter-dropdown">
                <label for="category-filter" class="sr-only">Category</label>
                <select id="category-filter">
                    <option value="all">All Categories</option>
                    <option value="crops">Crops</option>
                    <option value="fruits">Fruits</option>
                    <option value="vegetables">Vegetables</option>
                </select>
            </div>

            <div class="filter-dropdown" id="product-type-filter-container">
                <label for="product-type-filter" class="sr-only">Product Type</label>
                <select id="product-type-filter">
                    <option value="all-products">All Products</option>
                    </select>
            </div>

            <div class="filter-dropdown">
                <label for="region-filter" class="sr-only">Region</label>
                <select id="region-filter">
                    <option value="all">All Regions</option>
                    <option value="dhaka">Dhaka Division</option>
                    <option value="chittagong">Chittagong Division</option>
                    <option value="rajshahi">Rajshahi Division</option>
                    <option value="khulna">Khulna Division</option>
                    <option value="barisal">Barisal Division</option>
                    <option value="sylhet">Sylhet Division</option>
                    <option value="rangpur">Rangpur Division</option>
                    <option value="mymensingh">Mymensingh Division</option>
                </select>
            </div>

            <button class="clear-filters-btn"><i class="fas fa-times-circle"></i> Clear Filters</button>
        </div>

        <div class="results-summary">
            <span>Showing <span id="displayed-count">10</span> of <span id="total-count">50</span> products</span>
            <div class="view-toggle">
                <button class="active" aria-label="Grid View"><i class="fas fa-th-large"></i></button>
                <button aria-label="List View"><i class="fas fa-list"></i></button>
            </div>
        </div>
    </section>

    <section class="product-grid" id="product-list">
        <div class="no-results" id="no-products-message" style="display: none;">
            <i class="fas fa-box-open"></i>
            <p>No products found matching your criteria. Try adjusting your filters.</p>
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

// --- Market Price Page Specific JavaScript ---

const categoryFilter = document.getElementById('category-filter');
const productTypeFilter = document.getElementById('product-type-filter');
const regionFilter = document.getElementById('region-filter');
const clearFiltersBtn = document.querySelector('.clear-filters-btn');
const productGrid = document.getElementById('product-list'); // Changed to get by ID
const displayedCountSpan = document.getElementById('displayed-count');
const totalCountSpan = document.getElementById('total-count');
const noProductsMessage = document.getElementById('no-products-message');
const searchInput = document.querySelector('.search-bar input');

// Sample Product Data (expanded)
const allProducts = [
    // Crops
    { id: 1, name: 'Basmati Rice (New Crop)', category: 'crops', type: 'rice', region: 'Dhaka', currentPrice: 65, previousPrice: 70, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Basmati+Rice' },
    { id: 2, name: 'Miniket Rice', category: 'crops', type: 'rice', region: 'Rajshahi', currentPrice: 58, previousPrice: 60, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Miniket+Rice' },
    { id: 3, name: 'IRRI Rice', category: 'crops', type: 'rice', region: 'Khulna', currentPrice: 52, previousPrice: 55, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=IRRI+Rice' },
    { id: 4, name: 'Local Wheat', category: 'crops', type: 'wheat', region: 'Rangpur', currentPrice: 32, previousPrice: 30, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Local+Wheat' },
    { id: 5, name: 'Hybrid Corn', category: 'crops', type: 'corn', region: 'Sylhet', currentPrice: 28, previousPrice: 26, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Hybrid+Corn' },
    { id: 6, name: 'Mustard Seeds', category: 'crops', type: 'oilseed', region: 'Mymensingh', currentPrice: 85, previousPrice: 80, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Mustard+Seeds' },
    { id: 7, name: 'Lentil (Masoor Dal)', category: 'crops', type: 'pulse', region: 'Barisal', currentPrice: 105, previousPrice: 110, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Lentil' },
    { id: 8, name: 'Tea Leaves (Green)', category: 'crops', type: 'tea', region: 'Sylhet', currentPrice: 180, previousPrice: 175, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Green+Tea' },
    { id: 9, name: 'Sugarcane', category: 'crops', type: 'sugarcane', region: 'Rajshahi', currentPrice: 25, previousPrice: 28, unit: '৳/piece', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Sugarcane' },
    { id: 10, name: 'Jute', category: 'crops', type: 'fiber', region: 'Khulna', currentPrice: 70, previousPrice: 75, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Jute' },

    // Fruits
    { id: 11, name: 'Amrapali Mango', category: 'fruits', type: 'mango', region: 'Rajshahi', currentPrice: 90, previousPrice: 85, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Amrapali+Mango' },
    { id: 12, name: 'Himsagar Mango', category: 'fruits', type: 'mango', region: 'Dhaka', currentPrice: 110, previousPrice: 100, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Himsagar+Mango' },
    { id: 13, name: 'Bombai Litchi', category: 'fruits', type: 'litchi', region: 'Dhaka', currentPrice: 250, previousPrice: 280, unit: '৳/100 pcs', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Bombai+Litchi' },
    { id: 14, name: 'China-3 Litchi', category: 'fruits', type: 'litchi', region: 'Dinajpur', currentPrice: 300, previousPrice: 320, unit: '৳/100 pcs', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=China-3+Litchi' },
    { id: 15, name: 'Local Orange', category: 'fruits', type: 'orange', region: 'Sylhet', currentPrice: 150, previousPrice: 160, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Local+Orange' },
    { id: 16, name: 'Jackfruit (Kanthal)', category: 'fruits', type: 'jackfruit', region: 'Mymensingh', currentPrice: 80, previousPrice: 95, unit: '৳/piece', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Jackfruit' },
    { id: 17, name: 'Banana (Sagor)', category: 'fruits', type: 'banana', region: 'Barisal', currentPrice: 12, previousPrice: 10, unit: '৳/piece', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Banana' },
    { id: 18, name: 'Guava (Perfection)', category: 'fruits', type: 'guava', region: 'Chittagong', currentPrice: 70, previousPrice: 75, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Guava' },
    { id: 19, name: 'Green Papaya', category: 'fruits', type: 'papaya', region: 'Rangpur', currentPrice: 55, previousPrice: 60, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Green+Papaya' },
    { id: 20, name: 'Watermelon (Local)', category: 'fruits', type: 'watermelon', region: 'Khulna', currentPrice: 40, previousPrice: 45, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Watermelon' },

    // Vegetables
    { id: 21, name: 'Local Tomato', category: 'vegetables', type: 'tomato', region: 'Chittagong', currentPrice: 45, previousPrice: 50, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Local+Tomato' },
    { id: 22, name: 'Hybrid Tomato', category: 'vegetables', type: 'tomato', region: 'Dhaka', currentPrice: 50, previousPrice: 55, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Hybrid+Tomato' },
    { id: 23, name: 'Red Onion', category: 'vegetables', type: 'onion', region: 'Rajshahi', currentPrice: 70, previousPrice: 65, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Red+Onion' },
    { id: 24, name: 'White Onion', category: 'vegetables', type: 'onion', region: 'Khulna', currentPrice: 65, previousPrice: 60, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=White+Onion' },
    { id: 25, name: 'Local Carrot', category: 'vegetables', type: 'carrot', region: 'Rangpur', currentPrice: 40, previousPrice: 42, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Local+Carrot' },
    { id: 26, name: 'Red Potato', category: 'vegetables', type: 'potato', region: 'Rangpur', currentPrice: 22, previousPrice: 25, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Red+Potato' },
    { id: 27, name: 'White Potato', category: 'vegetables', type: 'potato', region: 'Dhaka', currentPrice: 20, previousPrice: 23, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=White+Potato' },
    { id: 28, name: 'Farm Fresh Cucumber', category: 'vegetables', type: 'cucumber', region: 'Chittagong', currentPrice: 30, previousPrice: 35, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Cucumber' },
    { id: 29, name: 'Fresh Okra', category: 'vegetables', type: 'okra', region: 'Mymensingh', currentPrice: 38, previousPrice: 40, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Okra' },
    { id: 30, name: 'Brinjal (Eggplant)', category: 'vegetables', type: 'brinjal', region: 'Barisal', currentPrice: 48, previousPrice: 52, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Brinjal' },
    { id: 31, name: 'Cabbage', category: 'vegetables', type: 'cabbage', region: 'Sylhet', currentPrice: 35, previousPrice: 38, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Cabbage' },
    { id: 32, name: 'Cauliflower', category: 'vegetables', type: 'cauliflower', region: 'Dhaka', currentPrice: 42, previousPrice: 45, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Cauliflower' },
    { id: 33, name: 'Spinach (Palong Shak)', category: 'vegetables', type: 'spinach', region: 'Rajshahi', currentPrice: 25, previousPrice: 28, unit: '৳/bunch', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Spinach' },
    { id: 34, name: 'Green Chili', category: 'vegetables', type: 'chili', region: 'Khulna', currentPrice: 60, previousPrice: 65, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Green+Chili' },
    { id: 35, name: 'Pumpkin', category: 'vegetables', type: 'pumpkin', region: 'Barisal', currentPrice: 30, previousPrice: 32, unit: '৳/kg', image: 'https://via.placeholder.com/400x200/eafce9/1e3d2c?text=Pumpkin' },
];

const productTypes = {
    'all': [{ value: 'all-products', text: 'All Products' }],
    'crops': [
        { value: 'all-crops', text: 'All Crops' },
        { value: 'rice', text: 'Rice' },
        { value: 'wheat', text: 'Wheat' },
        { value: 'corn', text: 'Corn' },
        { value: 'oilseed', text: 'Oilseed' },
        { value: 'pulse', text: 'Pulse' },
        { value: 'tea', text: 'Tea' },
        { value: 'sugarcane', text: 'Sugarcane' },
        { value: 'fiber', text: 'Fiber' }
    ],
    'fruits': [
        { value: 'all-fruits', text: 'All Fruits' },
        { value: 'mango', text: 'Mango' },
        { value: 'litchi', text: 'Litchi' },
        { value: 'orange', text: 'Orange' },
        { value: 'jackfruit', text: 'Jackfruit' },
        { value: 'banana', text: 'Banana' },
        { value: 'guava', text: 'Guava' },
        { value: 'papaya', text: 'Papaya' },
        { value: 'watermelon', text: 'Watermelon' }
    ],
    'vegetables': [
        { value: 'all-vegetables', text: 'All Vegetables' },
        { value: 'tomato', text: 'Tomato' },
        { value: 'onion', text: 'Onion' },
        { value: 'carrot', text: 'Carrot' },
        { value: 'potato', text: 'Potato' },
        { value: 'cucumber', text: 'Cucumber' },
        { value: 'okra', text: 'Okra' },
        { value: 'brinjal', text: 'Brinjal' },
        { value: 'cabbage', text: 'Cabbage' },
        { value: 'cauliflower', text: 'Cauliflower' },
        { value: 'spinach', text: 'Spinach' },
        { value: 'chili', text: 'Chili' },
        { value: 'pumpkin', text: 'Pumpkin' }
    ]
};

function populateProductTypes(category) {
    productTypeFilter.innerHTML = ''; // Clear existing options
    const typesToDisplay = productTypes[category] || [];

    typesToDisplay.forEach(typeOption => {
        const option = document.createElement('option');
        option.value = typeOption.value;
        option.textContent = typeOption.text;
        productTypeFilter.appendChild(option);
    });

    // Ensure "All Products" or "All Category" is selected by default after population
    if (category === 'all') {
        productTypeFilter.value = 'all-products';
    } else {
        productTypeFilter.value = `all-${category}`;
    }
}


function displayProducts(products) {
    productGrid.innerHTML = ''; // Clear existing products
    
    if (products.length === 0) {
        noProductsMessage.style.display = 'block';
        displayedCountSpan.textContent = 0;
        return;
    } else {
        noProductsMessage.style.display = 'none';
    }

    products.forEach(product => {
        const card = document.createElement('div');
        card.className = 'product-card';
        // Removed data-aos attributes for initial appearance animation

        card.innerHTML = `
            <div class="product-image-container">
                <img src="${product.image}" alt="${product.name}" class="product-image">
            </div>
            <div class="product-info">
                <div class="product-name">${product.name}</div>
                <div class="product-region"><i class="fas fa-map-marker-alt"></i> ${product.region}</div>
                <div class="product-details">
                    <div>
                        <span class="current-price">${product.currentPrice}</span><span class="price-unit">${product.unit}</span>
                    </div>
                    <span class="previous-price">Prev: ${product.previousPrice} ${product.unit}</span>
                </div>
            </div>
        `;
        productGrid.appendChild(card);
    });
    displayedCountSpan.textContent = products.length;
    // AOS.refresh(); // Removed as initial appearance animation is no longer needed
}

function applyFilters() {
    const searchTerm = searchInput.value.toLowerCase().trim();
    const selectedCategory = categoryFilter.value;
    const selectedProductType = productTypeFilter.value;
    const selectedRegion = regionFilter.value.toLowerCase(); // Ensure region is lowercase for comparison

    const filteredProducts = allProducts.filter(product => {
        const matchesSearch = searchTerm === '' ||
                              product.name.toLowerCase().includes(searchTerm) ||
                              product.category.toLowerCase().includes(searchTerm) ||
                              product.type.toLowerCase().includes(searchTerm) ||
                              product.region.toLowerCase().includes(searchTerm); // Search by region

        const matchesCategory = selectedCategory === 'all' || product.category === selectedCategory;

        const matchesProductType = selectedProductType === 'all-products' ||
                                   (selectedProductType === `all-${selectedCategory}` && selectedCategory !== 'all') ||
                                   product.type === selectedProductType;
        
        const matchesRegion = selectedRegion === 'all' || product.region.toLowerCase() === selectedRegion; // Filter by region

        return matchesSearch && matchesCategory && matchesProductType && matchesRegion;
    });

    displayProducts(filteredProducts);
}

// Event Listeners
categoryFilter.addEventListener('change', () => {
    populateProductTypes(categoryFilter.value);
    applyFilters(); // Re-apply filters after type options are updated
});

productTypeFilter.addEventListener('change', applyFilters);
regionFilter.addEventListener('change', applyFilters);
searchInput.addEventListener('input', applyFilters);

clearFiltersBtn.addEventListener('click', () => {
    searchInput.value = '';
    categoryFilter.value = 'all';
    populateProductTypes('all'); // Reset product types to 'All Products'
    regionFilter.value = 'all';
    applyFilters();
});

// Initial load
document.addEventListener('DOMContentLoaded', () => {
    populateProductTypes('all'); // Populate initial product types
    applyFilters(); // Display all products initially
    totalCountSpan.textContent = allProducts.length; // Set total count
    document.querySelector('.nav-link[href="{{ route('market-prices') }}"]').classList.add('active');
});

    </script>
</body>
</html>