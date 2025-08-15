<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>

        :root{
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
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.container {
  width: 90%;
  max-width: 1200px;
  margin: auto;
}


        .header {
  background: var(--primary-green);
  padding: 16px 0;
  margin: 0;
  border-radius: 0;
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

        body {
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
        }
        .login-container {
            max-width: 350px;
            margin: 40px auto 24px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 32px rgba(0,0,0,0.07);
            padding: 28px 40px 22px 24px; /* Increased left/right padding */
        }
        .login-logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 14px;
        }
        .login-logo i {
            font-size: 40px;
            color: #0bd429;
            background: #eafce9;
            border-radius: 50%;
            padding: 14px;
        }
        .login-title {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 800;
            color: #0bd429;
            margin-bottom: 4px;
        }
        .login-subtitle {
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
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 14px;
            font-size: 1rem;
            background: #f8f8f8;
            transition: border 0.2s;
        }
        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            border: 1.5px solid #0bd429;
            outline: none;
        }
        .login-btn {
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
            transition: background 0.2s, color 0.2s;
        }
        .login-btn:hover {
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
            gap: 10px;
            border: none;
            border-radius: 22px;
            font-weight: 600;
            font-size: 0.98rem;
            padding: 10px 0;
            margin-bottom: 10px;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
            justify-content: center;
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
        .signup-link {
            text-align: center;
            margin-top: 12px;
            color: #0bd429;
            font-size: 0.98rem;
        }
        .signup-link a {
            color: #0bd429;
            text-decoration: underline;
            font-weight: 600;
        }
        .signup-link a:hover {
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

        
        @media (max-width: 500px) {
            .login-container {
                max-width: 98vw;
                padding-left: 6vw;
                padding-right: 6vw;
            }
        }
    </style>
</head>
<body>

    
    <!-- 🔝 Header -->
  <div class="header">
    <div class="container header-wrapper">
      <div class="logo">
        <a href="{{ url('/') }}" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">
          <i class="fas fa-seedling"></i> <span>Farmer Portal</span>
        </a>
      </div>
      <div class="header-right">
        <div class="auth-links">
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('signup') }}" class="signup-btn">Signup</a>
        </div>
        <div class="language-toggle">
          <button id="lang-en" class="lang-btn active">EN</button>
          <button id="lang-bn" class="lang-btn">বাংলা</button>
        </div>
      </div>
    </div>
  </div>

    <div class="login-container">
        <div class="login-logo">
            <i class="fas fa-seedling"></i>
        </div>
        <div class="login-subtitle">Welcome back! Please login to your account.</div>
        <div class="login-title">Login to Farmer Portal</div>
        

        @if ($errors->any())
            <div style="background: #fee; border: 1px solid #fcc; padding: 10px; border-radius: 8px; margin-bottom: 15px; color: #c33;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <label for="login">Username or Email</label>
            <input type="text" id="login" name="login" placeholder="Username or Email" value="{{ old('login') }}" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Your password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
        
        <div class="or-divider">or</div>
        <a href="{{ route('login.google') }}" class="social-btn google-btn">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google" style="width:22px;vertical-align:middle;margin-right:8px;">
            Continue with Google
        </a>
        
        <div class="signup-link">
            Don't have an account? <a href="{{ route('signup') }}">Sign Up</a>
        </div>
    </div>

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
  document.querySelectorAll('.lang-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      document.querySelectorAll('.lang-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
    });
  });
</script>
</body>
</html>