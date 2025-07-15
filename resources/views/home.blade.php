<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home | Farmer Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    body {
      background: #f9fafb;
      font-family: 'Manrope', sans-serif;
      margin: 0;
      padding: 0;
    }
    .main-section {
      max-width: 900px;
      margin: 48px auto 0 auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 6px 32px rgba(0,0,0,0.07);
      padding: 40px 32px 32px 32px;
      text-align: center;
      position: relative;
    }
    .main-title {
      font-size: 2.3rem;
      font-weight: 800;
      color: #0bd429;
      margin-bottom: 10px;
      letter-spacing: -1px;
    }
    .main-subtitle {
      font-size: 1.25rem;
      color: #1e3d2c;
      font-weight: 600;
      margin-bottom: 16px;
    }
    .main-desc {
      color: #444;
      font-size: 1.08rem;
      margin-bottom: 30px;
      line-height: 1.6;
    }
    .notices-section {
      margin-top: 18px;
      text-align: left;
    }
    .notices-title {
      font-size: 1.15rem;
      font-weight: 700;
      color: #0bd429;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }
    .notice-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .notice-item {
      background: #eafce9;
      border-left: 5px solid #0bd429;
      border-radius: 8px;
      padding: 14px 18px;
      margin-bottom: 12px;
      color: #1e3d2c;
      font-size: 1.02rem;
      display: flex;
      align-items: flex-start;
      gap: 10px;
      box-shadow: 0 2px 8px rgba(11,212,41,0.04);
      transition: background 0.2s;
    }
    .notice-item i {
      color: #0bd429;
      font-size: 1.2em;
      margin-top: 2px;
    }
    .notice-date {
      font-size: 0.92em;
      color: #888;
      margin-left: auto;
      font-weight: 500;
    }
    @media (max-width: 600px) {
      .main-section {
        padding: 18px 4vw 18px 4vw;
      }
      .main-title {
        font-size: 1.3rem;
      }
      .main-subtitle {
        font-size: 1.05rem;
      }
    }
    /* Navbar hover and active effect */
    .nav-link:hover, .nav-link.active {
      background: white !important;
      color: #0bd429 !important;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header" style="background: #0bd429; padding: 0; margin: 0; border-radius: 0;">
    <div class="container header-wrapper" style="display: flex; justify-content: space-between; align-items: center; max-width: 1200px; margin: 0 auto; padding: 0 32px; height: 72px;">
      <div class="logo" style="flex-shrink: 0; position: relative; left: -70px;">
        <a href="{{ url('/') }}" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px; font-size: 1.6rem; font-weight: 900;">
          <i class="fas fa-seedling"></i> <span>Farmer Portal</span>
        </a>
      </div>
      <nav id="main-navbar" style="display: flex; align-items: center; gap: 16px; flex: 1; min-width: 0;">
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Market Prices</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Weather</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Crop Doctor</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Subsidies/News</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Tutorials</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">About Us</a>
        <a href="#" class="nav-link" style="color: white; text-decoration: none; font-weight: 600; padding: 6px 10px; border-radius: 5px; transition: background 0.2s, color 0.2s; white-space: nowrap;">Contact</a>
      </nav>
      <div class="user-profile" style="display: flex; align-items: center; gap: 10px; margin-left: 1000px; flex-shrink: 0;">
        <span style="color: white; font-weight: 700; font-size: 0.98rem;">Shahriar</span>
        <span style="display: flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: white; border-radius: 50%;">
          <i class="fas fa-user" style="color: #0bd429; font-size: 1.1rem;"></i>
        </span>
      </div>
    </div>
  </div>

  <!-- Main Section -->
  <div class="main-section">
    <div class="main-title">Welcome Back, Farmer!</div>
    <div class="main-subtitle">Empowering You to Grow More, Earn More, Live Better.</div>
    <div class="main-desc">
      Your one-stop digital hub for real-time market prices, weather updates, expert crop advice, government schemes, and more.<br>
      <b>Let’s cultivate success together!</b>
    </div>
    <div class="notices-section">
      <div class="notices-title"><i class="fas fa-bullhorn"></i> Important Notices & Announcements</div>
      <ul class="notice-list">
        <li class="notice-item">
          <i class="fas fa-cloud-sun-rain"></i>
          Heavy rainfall alert for northern districts. Please secure your crops and check drainage systems.
          <span class="notice-date">15 July 2025</span>
        </li>
        <li class="notice-item">
          <i class="fas fa-leaf"></i>
          New government subsidy announced for organic fertilizer. <a href="#" style="color:#0bd429;text-decoration:underline;">Learn more</a>
          <span class="notice-date">14 July 2025</span>
        </li>
        <li class="notice-item">
          <i class="fas fa-book"></i>
          Free online training: "Modern Irrigation Techniques" – Register by July 20th!
          <span class="notice-date">13 July 2025</span>
        </li>
      </ul>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer" style="background: #eafce9; padding: 30px 0 10px 0; margin-top: 40px;">
    <div class="container footer-grid" style="display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1100px; margin: auto;">
      <div class="footer-column" style="flex: 1 1 220px; margin-bottom: 18px;">
        <h3 style="color: #0bd429; margin-bottom: 8px;">Farmer Portal</h3>
        <p style="color: #1e3d2c;">Connecting technology to every farmer's hand. Agriculture made smarter and accessible.</p>
      </div>
      <div class="footer-column" style="flex: 1 1 160px; margin-bottom: 18px;">
        <h4 style="color: #0bd429; margin-bottom: 8px;">Resources</h4>
        <ul style="list-style: none; padding: 0; color: #1e3d2c;">
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Crop Tips</a></li>
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Market Watch</a></li>
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Weather Alerts</a></li>
        </ul>
      </div>
      <div class="footer-column" style="flex: 1 1 160px; margin-bottom: 18px;">
        <h4 style="color: #0bd429; margin-bottom: 8px;">Community</h4>
        <ul style="list-style: none; padding: 0; color: #1e3d2c;">
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Success Stories</a></li>
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Ask Experts</a></li>
          <li><a href="#" style="color: #1e3d2c; text-decoration: none;">Forum</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom" style="text-align: center; color: #888; font-size: 13px; margin-top: 20px;">
      &copy; {{ date('Y') }} Farmer Portal. All rights reserved.
    </div>
  </footer>
  <script>
    // Optional: Add 'active' class on click (for demo, not persistent)
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', function(e) {
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>