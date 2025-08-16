<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel | Digital Farmer Assistant</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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

        /* Admin Header */
        .admin-header {
            background: linear-gradient(135deg, var(--primary-green), #0a8220);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 2px 12px var(--shadow-light);
            z-index: 1000;
            position: relative;
        }
        
        .admin-header-wrapper {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
            height: 74px;
            justify-content: space-between;
            color: white;
        }

        .admin-logo-section {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .admin-logo-section i {
            font-size: 2rem;
            color: white;
        }

        .admin-brand-text h1 {
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0;
            color: white;
        }

        .admin-brand-text p {
            font-size: 0.8rem;
            margin: 0;
            opacity: 0.9;
            color: white;
        }

        .admin-nav {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .admin-nav-link {
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .admin-nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-1px);
        }

        .admin-logout-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .admin-logout-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-1px);
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .admin-header-wrapper {
                padding: 0 16px;
                height: 60px;
            }
            
            .admin-nav {
                gap: 15px;
            }
            
            .admin-nav-link {
                font-size: 0.85rem;
                padding: 6px 12px;
            }
            
            .admin-brand-text h1 {
                font-size: 1.2rem;
            }
            
            .admin-brand-text p {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <div class="admin-header-wrapper">
            <div class="admin-logo-section">
                <i class="fas fa-user-shield"></i>
                <div class="admin-brand-text">
                    <h1>Admin Panel</h1>
                    <p>Digital Farmer Assistant</p>
                </div>
            </div>
            
            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="admin-nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="{{ route('admin.notifications') }}" class="admin-nav-link">
                    <i class="fas fa-bell"></i>
                    Notifications
                </a>
                <a href="{{ route('admin.market-prices') }}" class="admin-nav-link">
                    <i class="fas fa-chart-line"></i>
                    Market Prices
                </a>
                <a href="{{ route('home') }}" class="admin-nav-link">
                    <i class="fas fa-home"></i>
                    View Site
                </a>
                <button class="admin-logout-btn" onclick="window.location.href='{{ route('admin.login') }}'">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
            </nav>
        </div>
    </header>
