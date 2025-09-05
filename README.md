# Digital Farmer Assistant Portal

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## 🌾 Project Overview

The **Digital Farmer Assistant Portal** is a comprehensive web application designed to empower farmers with essential tools and information. It provides real-time weather updates, agricultural news, tutorials, and market prices, while enabling admins to manage content like announcements, notifications, and tutorials dynamically. The platform is fully localized in Bangla, ensuring accessibility and relevance for Bangladeshi farmers.

---

## 🚀 Features

### For Farmers:
- **Weather Updates**: Real-time weather data and 6-day forecasts tailored to regions in Bangladesh.
- **Agricultural News**: Latest updates on subsidies, policies, and farming techniques.
- **Tutorials**: Static and dynamic tutorials covering crop selection, irrigation, pest control, and more.
- **Market Prices**: Real-time crop price updates for informed decision-making.
- **Saved News**: Bookmark important articles for later reference.

### For Admins:
- **Content Management**: Add/edit tutorials, announcements, and notifications dynamically.
- **User Communication**: Send notifications and announcements to users.
- **Data Management**: Update market prices and homepage content.

---

## 🛠️ Tools & Technologies

1. **Laravel Framework**: Backend development, routing, controllers, and database management.
2. **Blade Templates**: Dynamic and reusable views for the frontend.
3. **Font Awesome**: Icon library for visual elements like buttons and headers.
4. **Google Fonts**: Professional typography (e.g., Manrope).
5. **OpenWeatherMap API**: Real-time weather data integration.

---

## 📂 Project Structure

```
resources/views/
├── admin/ (Admin dashboard)
├── tutorials/ (Static tutorial pages)
├── partials/ (Reusable components)
├── notifications.blade.php
├── subsidies-news.blade.php
├── weather.blade.php
└── saved-news.blade.php
```

---

## 📸 Screenshots

### Homepage
![Homepage](https://drive.google.com/uc?id=1ZcJ9sSDYSi3TjTYodbnfhT-36lgT0F42)

### Admin Dashboard
![Admin Dashboard](https://drive.google.com/uc?id=1ZcJ9sSDYSi3TjTYodbnfhT-36lgT0F42)

### Weather Updates
![Weather Updates](https://drive.google.com/uc?id=1ZcJ9sSDYSi3TjTYodbnfhT-36lgT0F42)

---

## 🎥 Demo Video

Watch the full demo of the project [here](https://drive.google.com/file/d/1aN2UgaocRFS2fH5qhr5mTLziIZjhOM6L/view?usp=sharing).

---

## 📖 How to Run the Project

### Prerequisites:
- PHP 8.0+
- Composer
- MySQL
- Node.js & npm

### Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/digital-farmer-assistant-portal.git
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Configure `.env` file:
   - Set database credentials.
   - Add OpenWeatherMap API key.
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Start the development server:
   ```bash
   php artisan serve
   ```

---

## 📜 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 🤝 Contributing

We welcome contributions to improve the project. Please follow the [contribution guide](https://laravel.com/docs/contributions).

---

## 🌟 Acknowledgments

Special thanks to the Laravel community and all contributors for their support in building this project.