<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
            justify-content: space-between;
            color: white;
        }
        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
        }

        .logo a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.3rem;
            font-weight: 800;
        }

        /* Navigation */
        #main-navbar {
            display: flex;
            gap: 32px;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
        }
        .nav-link:hover {
            border-bottom-color: white;
        }

        /* Auth Links */
        .auth-links {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .auth-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .signup-btn {
            background: rgba(255,255,255,0.2);
            padding: 8px 16px;
            border-radius: 6px;
            border: 1px solid rgba(255,255,255,0.3);
        }
        .signup-btn:hover {
            background: rgba(255,255,255,0.3);
        }

        /* User Profile */
        .user-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            color: white;
        }
        .profile-icon {
            background: rgba(255,255,255,0.2);
            padding: 8px;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .user-profile button {
            background: transparent;
            border: 1px solid white;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
        }
        .user-profile button:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Mobile Navigation */
        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
        }
        .mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 9999;
        }
        .mobile-navbar {
            position: absolute;
            top: 50px;
            right: 20px;
            background: white;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .mobile-navbar .nav-link {
            color: var(--text-color-dark);
            padding: 10px;
            border-radius: 8px;
            transition: background 0.2s;
        }
        .mobile-navbar .nav-link:hover {
            background: var(--light-green);
            border-bottom: none;
        }
        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 2rem;
            color: white;
            cursor: pointer;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            #main-navbar {
                display: none;
            }
            .auth-links {
                display: none;
            }
            .container {
                padding: 0 16px;
            }
            .header-wrapper {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="container header-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}">
                <i class="fas fa-seedling"></i> <span>কৃষক পোর্টাল</span>
            </a>
        </div>
        <div class="menu-toggle" id="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="main-navbar">
            <a href="{{ route('market-prices') }}" class="nav-link">বাজার দর</a>
            <a href="{{ route('weather') }}" class="nav-link">আবহাওয়া</a>
            <a href="{{ route('crop-doctor') }}" class="nav-link">ফসল ডাক্তার</a>
            <a href="{{ route('subsidies-news') }}" class="nav-link">ভর্তুকি/সংবাদ</a>
            <a href="{{ route('tutorials') }}" class="nav-link">টিউটোরিয়াল</a>
            <a href="{{ route('about-us') }}" class="nav-link">আমাদের সম্পর্কে</a>
            <a href="{{ route('contact') }}" class="nav-link">যোগাযোগ</a>
        </nav>
        
        @if(Session::get('logged_in'))
            <!-- Logged in user -->
            <div class="user-profile">
                <span>{{ Session::get('username') }}</span>
                <span class="profile-icon">
                    <i class="fas fa-user"></i>
                </span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">
                        লগআউট
                    </button>
                </form>
            </div>
        @else
            <!-- Not logged in -->
            <div class="header-right">
                <div class="auth-links">
                    <a href="{{ route('login') }}">লগইন</a>
                    <a href="{{ route('signup') }}" class="signup-btn">নিবন্ধন</a>
                </div>
            </div>
        @endif
    </div>
</div>

<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="close-btn" id="mobile-menu-close">&times;</div>
    <nav class="mobile-navbar">
        <a href="{{ route('market-prices') }}" class="nav-link">বাজার দর</a>
        <a href="{{ route('weather') }}" class="nav-link">আবহাওয়া</a>
        <a href="{{ route('crop-doctor') }}" class="nav-link">ফসল ডাক্তার</a>
        <a href="{{ route('subsidies-news') }}" class="nav-link">ভর্তুকি/সংবাদ</a>
        <a href="{{ route('tutorials') }}" class="nav-link">টিউটোরিয়াল</a>
        <a href="{{ route('about-us') }}" class="nav-link">আমাদের সম্পর্কে</a>
        <a href="{{ route('contact') }}" class="nav-link">যোগাযোগ</a>
        @if(Session::get('logged_in'))
            <form action="{{ route('logout') }}" method="POST" style="margin-top: 10px;">
                @csrf
                <button type="submit" style="background: var(--primary-green); color: white; border: none; padding: 10px 20px; border-radius: 6px; width: 100%; cursor: pointer;">
                    লগআউট
                </button>
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link">লগইন</a>
            <a href="{{ route('signup') }}" class="nav-link">নিবন্ধন</a>
        @endif
    </nav>
</div>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu-overlay').style.display = 'block';
    });

    document.getElementById('mobile-menu-close').addEventListener('click', function() {
        document.getElementById('mobile-menu-overlay').style.display = 'none';
    });

    document.getElementById('mobile-menu-overlay').addEventListener('click', function(e) {
        if (e.target === this) {
            this.style.display = 'none';
        }
    });
</script>
      