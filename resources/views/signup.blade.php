<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>সাইন আপ | কৃষক পোর্টাল</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --footer-bg: #eafce9;
      --footer-text: #1e3d2c;
      --primary-green: #0bd429;
      --green-soft-bg: #f1fff4;
      --text-dark: #1f2f1f;
    }

    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      font-family: 'Manrope', sans-serif;
      background: #f9fafb;
    }

    * {
      box-sizing: border-box;
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
      flex-direction: row-reverse;
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
      text-decoration: none;
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
      align-items: center; 
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

    /* Signup Card */
    .signup-container {
      max-width: 350px;
      margin: 40px auto 24px auto;
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 6px 32px rgba(0, 0, 0, 0.07);
      padding: 28px 40px 22px 24px;
    }

    .signup-logo {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 14px;
    }

    .signup-logo i {
      font-size: 40px;
      color: var(--primary-green);
      background: var(--footer-bg);
      border-radius: 50%;
      padding: 14px;
    }

    .signup-title {
      text-align: center;
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--primary-green);
      margin-bottom: 4px;
    }

    .signup-subtitle {
      text-align: center;
      color: #444;
      font-size: 1rem;
      margin-bottom: 6px;
    }

    form {
      margin-top: 14px;
    }

    label {
      font-weight: 600;
      color: #222;
      margin-bottom: 5px;
      display: block;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      border: 1.5px solid #e0e0e0;
      border-radius: 8px;
      margin-bottom: 14px;
      font-size: 1rem;
      background: #f8f8f8;
      transition: border 0.2s;
    }

    input:focus {
      border-color: var(--primary-green);
      outline: none;
    }

    .signup-btn {
      width: 100%;
      background: linear-gradient(90deg, #0bd429 60%, #12c027 100%);
      color: #fff;
      font-weight: 700;
      font-size: 1rem;
      border: none;
      border-radius: 22px;
      padding: 11px 0;
      margin-bottom: 12px;
      cursor: pointer;
      transition: background 0.2s;
    }

    .signup-btn:hover {
      background: linear-gradient(90deg, #0aa51c 60%, #0a9c1a 100%);
    }

    .or-divider {
      text-align: center;
      color: #aaa;
      margin: 14px 0 10px 0;
      font-size: 0.98rem;
    }

    .social-btn {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      border: none;
      border-radius: 22px;
      font-weight: 600;
      font-size: 0.98rem;
      padding: 10px 0;
      margin-bottom: 10px;
      cursor: pointer;
      transition: background 0.2s, color 0.2s;
    }

    .google-btn {
      background: #fff;
      color: #444;
      border: 1.5px solid #e0e0e0;
    }

    .google-btn:hover {
      background: #f1fff4;
    }

    .facebook-btn {
      background: #1877f2;
      color: #fff;
    }

    .facebook-btn:hover {
      background: #145dc1;
    }

    .github-btn {
      background: #222;
      color: #fff;
    }

    .github-btn:hover {
      background: #444;
    }

    .login-link {
      text-align: center;
      margin-top: 12px;
      color: var(--primary-green);
      font-size: 0.98rem;
    }

    .login-link a {
      color: var(--primary-green);
      text-decoration: underline;
      font-weight: 600;
    }

    .login-link a:hover {
      color: #0aa51c;
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

    .footer-column p,
    .footer-column a {
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
      text-decoration: none;
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

    @media (max-width: 500px) {
      .signup-container {
        max-width: 98vw;
        padding-left: 6vw;
        padding-right: 6vw;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header">
    <div class="container header-wrapper">
      <div class="logo">
        <a href="{{ url('/') }}" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">
          <i class="fas fa-seedling"></i> <span>কৃষক পোর্টাল</span>
        </a>
      </div>
      <div class="header-right">
        <div class="auth-links">
          <a href="{{ route('login') }}">লগইন</a>
          <a href="{{ route('signup') }}" class="signup-btn">সাইন আপ</a>
        </div>
        <div class="language-toggle">
          <button id="lang-en" class="lang-btn active">EN</button>
          <button id="lang-bn" class="lang-btn">বাংলা</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up Card -->
  <div class="signup-container">
    <div class="signup-logo">
      <i class="fas fa-seedling"></i>
    </div>
    <div class="signup-subtitle">আপনার বিনামূল্যে অ্যাকাউন্ট তৈরি করুন</div>
    <div class="signup-title">কৃষক পোর্টালে সাইন আপ করুন</div>
    
    @if ($errors->any())
      <div style="background: #fee; border: 1px solid #fcc; padding: 10px; border-radius: 8px; margin-bottom: 15px; color: #c33;">
        <ul style="margin: 0; padding-left: 20px;">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('signup.post') }}" method="POST">
      @csrf
      <label for="username">ইউজারনেম</label>
      <input type="text" id="username" name="username" placeholder="একটি ইউজারনেম বেছে নিন" value="{{ old('username') }}" required>
      
      <label for="full_name">পূর্ণ নাম</label>
      <input type="text" id="full_name" name="full_name" placeholder="আপনার পূর্ণ নাম" value="{{ old('full_name') }}" required>
      
      <label for="email">ইমেইল ঠিকানা</label>
      <input type="email" id="email" name="email" placeholder="আপনার@ইমেইল.কম" value="{{ old('email') }}" required>
      
      <label for="password">পাসওয়ার্ড</label>
      <input type="password" id="password" name="password" placeholder="একটি পাসওয়ার্ড তৈরি করুন (কমপক্ষে ৮ অক্ষর)" required>
      
      <label for="confirm_password">পাসওয়ার্ড নিশ্চিত করুন</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="আপনার পাসওয়ার্ড নিশ্চিত করুন" required>
      
      <button type="submit" class="signup-btn">সাইন আপ</button>
    </form>
    
    <div class="or-divider">অথবা</div>
    <a href="{{ route('login.google') }}" class="social-btn google-btn">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" style="width:22px;vertical-align:middle;margin-right:8px;">
      Google দিয়ে চালিয়ে যান
    </a>
    
    <div class="login-link">
      ইতিমধ্যে অ্যাকাউন্ট আছে? <a href="{{ route('login') }}">লগইন</a>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div class="footer-column">
        <h3>কৃষক পোর্টাল</h3>
        <p>প্রতিটি কৃষকের হাতে প্রযুক্তির সংযোগ স্থাপন। কৃষিকাজকে আরও স্মার্ট এবং সহজলভ্য করে তোলা।</p>
      </div>
      <div class="footer-column">
        <h4>সম্পদ</h4>
        <ul>
          <li><a href="#">ফসলের টিপস</a></li>
          <li><a href="#">বাজার পর্যবেক্ষণ</a></li>
          <li><a href="#">আবহাওয়া সতর্কতা</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>কমিউনিটি</h4>
        <ul>
          <li><a href="#">সফলতার গল্প</a></li>
          <li><a href="#">বিশেষজ্ঞদের জিজ্ঞাসা</a></li>
          <li><a href="#">ফোরাম</a></li>
        </ul>
      </div>
      <div class="footer-column">
        <h4>যুক্ত থাকুন</h4>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      © ২০২৫ কৃষক পোর্টাল। আমাদের কৃষকদের জন্য ❤️ দিয়ে ডিজাইন করা।
    </div>
  </footer>

  <script>
    // Toggle language buttons
    document.querySelectorAll('.lang-btn').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

</body>
</html>
