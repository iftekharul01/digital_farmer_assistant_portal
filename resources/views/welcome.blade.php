<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Farmer Portal</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
</head>

<style>
    :root {
  --primary-green: #0bd429;
  --green-soft-bg: #f1fff4;
  --text-dark: #1f2f1f;
  --card-bg: #ffffff;
  --footer-bg: #eafce9;
  --footer-text: #1e3d2c;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Manrope', sans-serif;
  background: var(--green-soft-bg);
  color: var(--text-dark);
}

a {
  text-decoration: none;
  color: var(--primary-green);
  transition: 0.2s;
}

a:hover {
  color: #088f1f;
}

.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}

/* Header */
.header {
  background: var(--primary-green);
  padding: 16px 0;
}

.header-wrapper {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}

.logo {
  font-size: 22px;
  font-weight: 700;
  color: white;
  display: flex;
  align-items: center;
  gap: 8px;
}

.header-right {
  display: flex;
  align-items: center;
  gap: 20px;
}

.auth-links {
  display: flex;
  gap: 15px;
}

.auth-links a,
.auth-links a.signup-btn {
  font-weight: 600;
  color: white;
  padding: 6px 14px;
  border-radius: 6px;
  transition: background 0.2s, color 0.2s;
  background: transparent;
}

.auth-links a:hover,
.auth-links a.signup-btn:hover,
.lang-btn:hover {
  background: white;
  color: var(--primary-green);
}

.language-toggle {
  display: flex;
  gap: 10px;
  margin-left: 20px;
}

.lang-btn {
  border: none;
  background: transparent;
  font-weight: 600;
  padding: 6px 10px;
  border-radius: 4px;
  color: white;
  cursor: pointer;
  transition: background 0.2s, color 0.2s;
}

.lang-btn.active {
  background: white;
  color: var(--primary-green);
}

/* Move language toggle to the right of auth-links */
.header-right {
  flex-direction: row-reverse;
  gap: 20px;
}

/* Hero Section */
.hero {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 80vh;
  text-align: center;
  padding: 40px 30px 60px 30px;
  background: linear-gradient(to bottom, rgba(246,255,246,0.6), rgba(217,255,214,0.3)),
    url('/assets/images/agri2.jpg') center/cover no-repeat;
  background-blend-mode: lighten;
}

.hero h1 {
  font-size: 42px;
  font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 16px;
}

.hero p {
  font-size: 18px;
  max-width: 800px;
  margin: 0 auto 24px;
}

.cta-btn {
  padding: 12px 28px;
  background: var(--primary-green);
  color: white;
  font-weight: 700;
  border-radius: 6px;
  transition: background 0.3s;
}

.cta-btn:hover {
  background: #0aa51c;
}

/* Features */
.features {
  padding: 60px 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
}

.feature-card {
  background: var(--card-bg);
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 6px 12px rgba(0,0,0,0.07);
  transition: transform 0.3s cubic-bezier(.4,2,.6,1), box-shadow 0.3s;
  border-left: 6px solid var(--primary-green);
  position: relative;
  overflow: hidden;
}

.feature-card:hover {
  transform: translateY(-10px) scale(1.03) rotate(-1deg);
  box-shadow: 0 12px 24px rgba(11, 212, 41, 0.13);
}

.feature-card::after {
  content: '';
  position: absolute;
  left: -40px;
  top: -40px;
  width: 80px;
  height: 80px;
  background: rgba(11, 212, 41, 0.07);
  border-radius: 50%;
  z-index: 0;
  transition: opacity 0.3s;
  opacity: 0;
}

.feature-card:hover::after {
  opacity: 1;
}

.feature-card i {
  font-size: 28px;
  color: var(--primary-green);
  margin-bottom: 10px;
}

.feature-card h3 {
  font-size: 20px;
  margin-bottom: 10px;
}

.feature-card p {
  font-size: 15px;
  color: #444;
}

/* Footer */
.footer {
  background: var(--footer-bg);
  padding: 60px 20px 20px;
  color: var(--footer-text);
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 30px;
}

.footer-column h4,
.footer-column h3 {
  font-size: 18px;
  margin-bottom: 12px;
}

.footer-column p {
  font-size: 14px;
  line-height: 1.6;
}

.footer-column ul {
  list-style: none;
}

.footer-column li {
  margin-bottom: 6px;
}

.footer-column a {
  color: var(--footer-text);
  font-size: 14px;
}

.footer-column a:hover {
  color: var(--primary-green);
}

.social-icons a {
  margin-right: 12px;
  font-size: 18px;
}

.footer-bottom {
  text-align: center;
  margin-top: 40px;
  font-size: 13px;
  color: #888;
}

</style>
<body>

  <!-- 🔝 Header -->
  <div class="header">
    <div class="container header-wrapper">
      <div class="logo">
        <i class="fas fa-seedling"></i> <span>Farmer Portal</span>
      </div>
      <div class="header-right">
        <div class="auth-links">
          <a href="login.html">Login</a>
          <a href="signup.html" class="signup-btn">Signup</a>
        </div>
        <div class="language-toggle">
          <button id="lang-en" class="lang-btn active">EN</button>
          <button id="lang-bn" class="lang-btn">বাংলা</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 🌿 Hero Section -->
  <div class="main-section">
    <section class="hero">
      <h1>Empowering Farmers With Smart Technology</h1>
      <p>Your one-stop solution for crop health, market insights, weather updates, and government support. All in one place, just for you.</p>
      <a href="signup.html" class="cta-btn">Get Started Now</a>
    </section>

    <section class="features">
      <div class="feature-card">
        <i class="fas fa-leaf"></i>
        <h3>Smarter Farming</h3>
        <p>Detect diseases instantly with AI and take actionable steps to protect your crops effectively.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-cloud-sun-rain"></i>
        <h3>Live Weather Tracking</h3>
        <p>Check localized forecasts to better plan seeding, harvesting, and irrigation schedules.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>Govt Subsidies</h3>
        <p>Never miss an opportunity — view, track, and apply for available government support.</p>
      </div>
      <div class="feature-card">
        <i class="fas fa-book-reader"></i>
        <h3>Learn Modern Farming</h3>
        <p>Access expert tutorials, guides, and videos for improved agricultural practices.</p>
      </div>
    </section>
  </div>

  <!-- 🧑‍🌾 Footer -->
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
      <div class="footer-column">
        <h4>Stay Connected</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      © 2025 Farmer Portal. Designed with ❤️ for our farmers.
    </div>
  </footer>

  <script>
    const langBtns = document.querySelectorAll('.lang-btn');
    langBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        langBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
      });
    });
  </script>

</body>
</html>
