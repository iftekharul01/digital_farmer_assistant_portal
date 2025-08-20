<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>আবহাওয়া | কৃষক পোর্টাল</title>
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
            flex-wrap: nowrap;
            justify-content: space-between;
            gap: 12px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px dashed var(--primary-green);
            overflow-x: auto;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-green) var(--light-green);
        }

        .forecast-container::-webkit-scrollbar {
            height: 6px;
        }

        .forecast-container::-webkit-scrollbar-track {
            background: var(--light-green);
            border-radius: 3px;
        }

        .forecast-container::-webkit-scrollbar-thumb {
            background: var(--primary-green);
            border-radius: 3px;
        }

        .forecast-day {
            background: white;
            padding: 15px 10px;
            border-radius: 8px;
            box-shadow: 0 2px 10px var(--shadow-light);
            text-align: center;
            flex: 0 0 auto;
            min-width: 110px;
            width: 110px;
            border: 1px solid var(--border-light);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .forecast-day:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px var(--shadow-medium);
        }

        .forecast-day img {
            width: 45px;
            height: 45px;
            margin: 8px 0 5px 0;
        }

        .forecast-day div {
            font-size: 0.9rem;
            color: var(--dark-green);
            margin: 2px 0;
        }
        .forecast-day div:first-child {
            font-weight: bold;
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 0.85rem;
        }

        .forecast-day div:nth-child(3) {
            font-weight: 700;
            color: var(--dark-green);
            font-size: 1rem;
        }

        .forecast-day div:last-child {
            font-size: 0.8rem;
            opacity: 0.8;
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
        /* Media Queries - Weather Page Specific */
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

        /* Keep forecast items side by side on all screen sizes */
        @media (max-width: 768px) {
            .forecast-container {
                gap: 8px;
                padding-bottom: 10px;
            }
            
            .forecast-day {
                min-width: 95px;
                width: 95px;
                padding: 12px 8px;
            }
            
            .forecast-day img {
                width: 40px;
                height: 40px;
            }
            
            .forecast-day div:first-child {
                font-size: 0.8rem;
            }
            
            .forecast-day div:nth-child(3) {
                font-size: 0.9rem;
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
        }
    </style>
</head>
<body>

    @include('partials.header')


      
<section class="weather-section">
        <div class="weather-wrapper">
            <div class="weather-box">
                <h2>🌦️ আবহাওয়ার পূর্বাভাস</h2>
                <p><strong>অবস্থান:</strong> <span id="location">শনাক্ত করা হচ্ছে...</span></p>
                <div class="current-weather-image-container">                
                    <img id="weather-image" src="assets/images/default.png" alt="আবহাওয়ার ছবি">
                </div>
                <p><strong>তাপমাত্রা:</strong> <span id="temperature">--</span> | 
                    <strong>অবস্থা:</strong> <span id="condition">--</span></p>
                <p><strong>আর্দ্রতা:</strong> <span id="humidity">--</span>% | 
                    <strong>বায়ুর বেগ:</strong> <span id="wind">--</span> কি.মি./ঘন্টা</p>

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

// Function to translate weather conditions to Bangla
function getWeatherConditionInBangla(condition) {
    const translations = {
        'Clear': 'পরিষ্কার',
        'Clouds': 'মেঘলা',
        'Rain': 'বৃষ্টি',
        'Drizzle': 'গুঁড়ি গুঁড়ি বৃষ্টি',
        'Thunderstorm': 'বজ্রপাত',
        'Snow': 'তুষারপাত',
        'Mist': 'কুয়াশা',
        'Smoke': 'ধোঁয়া',
        'Haze': 'কুয়াশাচ্ছন্ন',
        'Dust': 'ধুলিঝড়',
        'Fog': 'ঘন কুয়াশা',
        'Sand': 'বালিঝড়',
        'Ash': 'ছাই',
        'Squall': 'দমকা হাওয়া',
        'Tornado': 'টর্নেডো'
    };
    return translations[condition] || condition;
}

// Function to convert English digits to Bangla digits
function toBanglaDigits(number) {
    const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return number.toString().replace(/\d/g, digit => banglaDigits[digit]);
}

// Function to get day names in Bangla
function getDayInBangla(date) {
    const days = ['রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র', 'শনি'];
    const months = ['জান', 'ফেব', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগ', 'সেপ', 'অক্ট', 'নভে', 'ডিসে'];
    
    const dayName = days[date.getDay()];
    const monthName = months[date.getMonth()];
    const dayNumber = toBanglaDigits(date.getDate());
    
    return `${dayName}, ${monthName} ${dayNumber}`;
}

// Get user's location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(getWeather, showGeoError);
} else {
    alert("এই ব্রাউজার ভৌগোলিক অবস্থান সমর্থন করে না।");
}

function showGeoError() {
    document.getElementById('location').innerText = 'অবস্থান শনাক্ত করতে অক্ষম';
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
            document.getElementById('location').innerText = 'আবহাওয়ার তথ্য আনতে ত্রুটি';
            console.error('Error fetching weather data:', error);
        });
}

function displayCurrentWeather(data) {
    document.getElementById('location').innerText = data.name || 'অজানা';
    document.getElementById('temperature').innerText = `${toBanglaDigits(Math.round(data.main.temp))}°সে`;
    document.getElementById('condition').innerText = getWeatherConditionInBangla(data.weather[0].main);
    document.getElementById('humidity').innerText = toBanglaDigits(data.main.humidity);
    document.getElementById('wind').innerText = toBanglaDigits(Math.round(data.wind.speed));

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

    // Get one forecast per day (at 12:00 or closest available time)
    const daily = {};
    data.list.forEach(item => {
        const date = new Date(item.dt * 1000);
        const dateKey = date.toDateString();
        
        // Prefer 12:00 PM data, but take any if not available
        if (!daily[dateKey] || date.getHours() === 12) {
            daily[dateKey] = {
                data: item,
                dayName: getDayInBangla(date)
            };
        }
    });

    // Take first 6 days of forecast (including today)
    Object.values(daily).slice(0, 6).forEach(dayData => {
        const item = dayData.data;
        const day = dayData.dayName;
        const icon = item.weather[0].icon;
        const temp = toBanglaDigits(Math.round(item.main.temp));
        const desc = getWeatherConditionInBangla(item.weather[0].main);

        const dayDiv = document.createElement('div');
        dayDiv.className = 'forecast-day';
        dayDiv.innerHTML = `
            <div>${day}</div>
            <img src="https://openweathermap.org/img/wn/${icon}.png" alt="${desc}">
            <div>${temp}°সে</div>
            <div>${desc}</div>
        `;
        forecastDiv.appendChild(dayDiv);
    });
}
    </script>
</body>
</html>