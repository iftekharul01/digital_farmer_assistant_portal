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
            <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
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
              <a href="{{ route('market-prices') }}" class="nav-link">Market Prices</a>
              <a href="{{ route('weather') }}" class="nav-link">Weather</a>
              <a href="{{ route('crop-doctor') }}" class="nav-link">Crop Doctor</a>
              <a href="{{ route('subsidies-news') }}" class="nav-link">Subsidies/News</a>
              <a href="{{ route('tutorials') }}" class="nav-link">Tutorials</a>
              <a href="{{ route('about-us') }}" class="nav-link">About Us</a>
              <a href="{{ route('contact') }}" class="nav-link">Contact</a>
          </nav>
      </div>