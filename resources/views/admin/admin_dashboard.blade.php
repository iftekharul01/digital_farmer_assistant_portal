<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --green-soft-bg: #f1fff4;
            --text-dark: #1f2f1f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f9fa;
            font-family: 'Manrope', sans-serif;
        }

        .admin-header {
            background: var(--primary-green);
            color: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .admin-logo {
            font-size: 1.5rem;
            font-weight: 800;
        }

        .admin-user {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logout-btn {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .logout-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .dashboard-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .dashboard-subtitle {
            color: #666;
            margin-bottom: 40px;
            font-size: 1.1rem;
        }

        .admin-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .admin-card {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            color: inherit;
        }

        .admin-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(11,212,41,0.15);
        }

        .card-icon {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 15px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .card-description {
            color: #666;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .admin-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <i class="fas fa-seedling"></i> Farmer Portal Admin
            </div>
            <div class="admin-user">
                <span>Welcome, {{ Session::get('admin_username') }}!</span>
                <a href="{{ route('admin.logout') }}" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </nav>
    </header>

    <div class="dashboard-container">
        <h1 class="dashboard-title">Admin Dashboard</h1>
        <p class="dashboard-subtitle">Manage your Farmer Portal content and settings</p>

        <div class="admin-grid">
            <a href="{{ route('admin.home') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-home"></i></div>
                <h3 class="card-title">Home Page</h3>
                <p class="card-description">Manage home page content, hero sections, and featured content.</p>
            </a>

            <a href="{{ route('admin.about-us') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-info-circle"></i></div>
                <h3 class="card-title">About Us</h3>
                <p class="card-description">Edit about us page content, team information, and company details.</p>
            </a>

            <a href="{{ route('admin.contact') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-envelope"></i></div>
                <h3 class="card-title">Contact</h3>
                <p class="card-description">Manage contact information, forms, and customer inquiries.</p>
            </a>

            <a href="{{ route('admin.crop-doctor') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-leaf"></i></div>
                <h3 class="card-title">Crop Doctor</h3>
                <p class="card-description">Manage crop diseases, treatments, and diagnostic tools.</p>
            </a>

            <a href="{{ route('admin.market-prices') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <h3 class="card-title">Market Prices</h3>
                <p class="card-description">Update product prices, market trends, and commodity data.</p>
            </a>

            <a href="{{ route('admin.tutorials') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3 class="card-title">Tutorials</h3>
                <p class="card-description">Create and manage farming tutorials, guides, and educational content.</p>
            </a>

            <a href="{{ route('admin.subsidies-news') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-newspaper"></i></div>
                <h3 class="card-title">Subsidies & News</h3>
                <p class="card-description">Manage government subsidies, news articles, and announcements.</p>
            </a>

            <a href="{{ route('admin.weather') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-cloud-sun"></i></div>
                <h3 class="card-title">Weather</h3>
                <p class="card-description">Configure weather data sources and location settings.</p>
            </a>

            <a href="{{ route('admin.welcome') }}" class="admin-card">
                <div class="card-icon"><i class="fas fa-star"></i></div>
                <h3 class="card-title">Welcome Page</h3>
                <p class="card-description">Customize welcome page layout, banners, and promotional content.</p>
            </a>
        </div>
    </div>
</body>
</html>
