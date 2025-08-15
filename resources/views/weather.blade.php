<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Home | Farmer Portal</title>
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
        }

        body {
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Header */
        .header {
            background: var(--primary-green);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 2px 12px var(--shadow-light);
        }
        .header-wrapper {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
            height: 74px;
            position: relative; /* For responsiveness */
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
            margin-left: auto; /* Push to the right */
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

        /* --- Weather Section --- */
        .weather-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 40px auto;
            background-color: #f9fafb; /* Light background for the section */
        }

        .weather-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 30px;
            flex-wrap: wrap;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px var(--shadow-medium);
            border: 1px solid var(--border-light);
        }

        .weather-box {
            flex: 1 1 350px;
            text-align: center;
            padding: 25px;
            background: var(--light-green);
            border-radius: 10px;
            box-shadow: 0 4px 15px var(--shadow-card);
            border: 1px solid var(--primary-green);
            color: var(--dark-green);
        }

        .weather-box h2 {
            color: var(--primary-green);
            font-size: 2rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .weather-box p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .weather-box strong {
            color: var(--primary-green);
        }

        .current-weather-image-container {
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
            background: rgba(255,255,255,0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        #weather-image {
            width: 90%;
            height: 90%;
            object-fit: contain;
        }

        .forecast-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px dashed var(--primary-green);
        }

        .forecast-day {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px var(--shadow-light);
            text-align: center;
            flex: 1 1 120px; /* Adjust width of forecast cards */
            min-width: 100px;
            max-width: 150px;
            border: 1px solid var(--border-light);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .forecast-day:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-medium);
        }

        .forecast-day img {
            width: 50px;
            height: 50px;
            margin: 5px 0;
        }

        .forecast-day div {
            font-size: 0.95rem;
            color: var(--dark-green);
        }
        .forecast-day div:first-child {
            font-weight: bold;
            color: var(--primary-green);
            margin-bottom: 5px;
        }


        /* --- Navbar Responsiveness & Mobile Menu --- */
      .menu-toggle {
          display: none; /* Hidden by default */
          font-size: 1.8rem;
          color: white;
          cursor: pointer;
          margin-left: auto; /* Push to the right on mobile */
          z-index: 1001; /* Above other content */
      }

      .mobile-menu-overlay {
          position: fixed;
          top: 0;
          left: -100%; /* Start off-screen */
          width: 250px; /* Width of the mobile menu */
          height: 100%;
          background: var(--primary-green);
          color: white;
          box-shadow: 2px 0 10px rgba(0,0,0,0.2);
          transition: left 0.3s ease-in-out;
          z-index: 2000; /* Ensure it's above everything */
          display: flex;
          flex-direction: column;
          padding-top: 60px; /* Space for close button */
      }

      .mobile-menu-overlay.active {
          left: 0; /* Slide in */
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
              display: none; /* Hide desktop nav */
          }
          .user-profile {
              display: none; /* Hide profile on smaller screens or adjust its position */
          }
          .menu-toggle {
              display: block; /* Show hamburger */
          }
          .header-wrapper {
              justify-content: space-between; /* Space out logo and toggle */
              flex-direction: row; /* Keep them in a row */
              padding: 0 20px; /* Adjust padding */
          }
          .logo {
              margin-right: 0; /* Remove right margin */
          }
      }


        /* Media Queries */
        @media (max-width: 900px) {
            .header-wrapper {
                height: auto; /* Allow header to expand */
                padding: 15px 20px;
                flex-direction: column; /* Stack logo and nav */
                gap: 15px;
            }
            .logo {
                margin-right: 0;
                margin-bottom: 10px; /* Space below logo */
            }
            nav#main-navbar {
                flex-wrap: wrap; /* Allow nav links to wrap */
                justify-content: center;
                gap: 10px;
            }
            .nav-link {
                padding: 5px 10px;
                font-size: 0.95rem;
            }
            .user-profile {
                margin-left: 0; /* Center user profile */
                margin-top: 15px;
            }
            .section-wrapper {
                padding: 30px 16px;
            }
            .hero-title { font-size: 2.2rem; }
            .hero-typed { font-size: 1.2rem; }
            .section-heading { font-size: 1.6rem; margin-bottom: 20px; }
            .section-heading i { font-size: 1.8rem; }
            .announcement-grid { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }
            .weather-section-grid { grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); }

            .weather-wrapper {
                padding: 20px;
            }
            .forecast-day {
                flex: 1 1 100%; /* Stack forecast days on very small screens */
                max-width: none;
            }
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
            .footer-column { flex: 1 1 100%; text-align: center; } /* Stack footer columns */
            .footer-column ul { padding-inline-start: 0; } /* Remove default ul padding */
        }
    </style>
</head>
<body>

    @include('partials.header')


      
<section class="weather-section">
        <div class="weather-wrapper">
            <div class="weather-box">
                <h2>🌦️ Weather Forecast</h2>
                <p><strong>Location:</strong> <span id="location">Detecting...</span></p>
                <div class="current-weather-image-container">                
                    <img id="weather-image" src="assets/images/default.png" alt="Weather image">
                </div>
                <p><strong>Temp:</strong> <span id="temperature">--</span> | 
                    <strong>Cond:</strong> <span id="condition">--</span></p>
                <p><strong>Humidity:</strong> <span id="humidity">--</span>% | 
                    <strong>Wind:</strong> <span id="wind">--</span> km/h</p>

                <div class="forecast-container" id="forecast-container"></div>
            </div>
        </div>
    </section>


@include('partials.footer')

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
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
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

// Weather API Integration
const apiKey = 'b10e1647e62b7085c879761cb8f9925e'; // Replace with your OpenWeatherMap API key

// Get user's location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(getWeather, showGeoError);
} else {
    alert("Geolocation is not supported by this browser.");
}

function showGeoError() {
    document.getElementById('location').innerText = 'Unable to detect location';
}

// Fetch current weather and forecast
function getWeather(position) {
    const lat = position.coords.latitude;
    const lon = position.coords.longitude;
    const apiURL = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&units=metric&appid=${apiKey}`;

    fetch(apiURL)
        .then(response => response.json())
        .then(data => {
            displayCurrentWeather(data);
            getForecast(lat, lon);
        })
        .catch(error => {
            document.getElementById('location').innerText = 'Error fetching weather';
            console.error('Error fetching weather data:', error);
        });
}

function displayCurrentWeather(data) {
    document.getElementById('location').innerText = data.name || 'Unknown';
    document.getElementById('temperature').innerText = `${Math.round(data.main.temp)}°C`;
    document.getElementById('condition').innerText = data.weather[0].main;
    document.getElementById('humidity').innerText = data.main.humidity;
    document.getElementById('wind').innerText = Math.round(data.wind.speed);

    // Set weather image
    const icon = data.weather[0].icon;
    document.getElementById('weather-image').src = `https://openweathermap.org/img/wn/${icon}@2x.png`;
    document.getElementById('weather-image').alt = data.weather[0].description;
}

function getForecast(lat, lon) {
    const forecastURL = `https://api.openweathermap.org/data/2.5/forecast?lat=${lat}&lon=${lon}&units=metric&appid=${apiKey}`;

    fetch(forecastURL)
        .then(response => response.json())
        .then(data => {
            displayForecast(data);
        })
        .catch(error => console.error('Error fetching forecast data:', error));
}

function displayForecast(data) {
    const forecastDiv = document.getElementById('forecast-container');
    forecastDiv.innerHTML = '';

    // Get one forecast per day (at 12:00)
    const daily = {};
    data.list.forEach(item => {
        const date = new Date(item.dt * 1000);
        const day = date.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: 'numeric' });
        if (date.getHours() === 12 && !daily[day]) {
            daily[day] = item;
        }
    });

    Object.keys(daily).slice(0, 5).forEach(day => {
        const item = daily[day];
        const icon = item.weather[0].icon;
        const temp = Math.round(item.main.temp);
        const desc = item.weather[0].main;

        const dayDiv = document.createElement('div');
        dayDiv.className = 'forecast-day';
        dayDiv.innerHTML = `
            <div>${day}</div>
            <img src="https://openweathermap.org/img/wn/${icon}.png" alt="${desc}">
            <div>${temp}°C</div>
            <div>${desc}</div>
        `;
        forecastDiv.appendChild(dayDiv);
    });
}
    </script>
</body>
</html>