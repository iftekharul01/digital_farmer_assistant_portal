<div class="header">
    <div class="container header-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" style="color: white; text-decoration: none; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-seedling"></i> <span>Farmer Portal</span>
            </a>
        </div>
        <div class="menu-toggle" id="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="main-navbar">
            <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
            <a href="{{ route('weather') }}" class="nav-link">Weather</a>
            <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
            <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
            <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
            <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </nav>
        
        @if(Session::get('logged_in'))
            <!-- Logged in user -->
            <div class="user-profile">
                <span>{{ Session::get('username') }}</span>
                <span class="profile-icon">
                    <i class="fas fa-user"></i>
                </span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline; margin-left: 10px;">
                    @csrf
                    <button type="submit" style="background: transparent; border: 1px solid white; color: white; padding: 6px 12px; border-radius: 6px; cursor: pointer; font-weight: 600; transition: all 0.2s;">
                        Logout
                    </button>
                </form>
            </div>
        @else
            <!-- Not logged in -->
            <div class="header-right">
                <div class="auth-links">
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('signup') }}" class="signup-btn">Signup</a>
                </div>
            </div>
        @endif
    </div>
</div>

      <div class="mobile-menu-overlay" id="mobile-menu-overlay">
          <div class="close-btn" id="mobile-menu-close">&times;</div>
          <nav class="mobile-navbar">
              <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
              <a href="{{ route('weather') }}" class="nav-link">Weather</a>
              <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
              <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
              <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
              <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
              <a href="{{ route('contact') }}" class="nav-link">Contact</a>
          </nav>
      </div>
      