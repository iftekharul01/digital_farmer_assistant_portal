<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us | Farmer Portal</title>
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

        /* Contact Page Styles */

        /* --- CONTACT PAGE SPECIFIC STYLES --- */

        /* Common Styles for content sections */
        .section-heading {
            font-size: 1.8rem; /* Smaller heading */
            color: var(--dark-green);
            text-align: center;
            margin-bottom: 25px; /* Slightly reduced margin */
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Reduced gap */
        }

        .section-heading i {
            font-size: 2.2rem; /* Smaller icon */
            color: var(--primary-green);
        }

        .contact-content-wrapper {
            max-width: 1100px; /* Slightly narrower wrapper */
            margin: 30px auto; /* Reduced margin */
            padding: 0 15px; /* Reduced padding */
            display: flex;
            flex-direction: column;
            gap: 30px; /* Reduced space between sections */
        }

        /* Contact Hero Section */
        .contact-hero {
            background-color: var(--primary-green);
            color: white;
            padding: 50px 20px; /* Reduced padding */
            text-align: center;
            min-height: 35vh; /* Slightly smaller hero */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px; /* Reduced space below hero */
        }

        .contact-hero h1 {
            font-size: 2.8rem; /* Smaller heading */
            margin-bottom: 12px; /* Reduced margin */
            font-weight: 800;
        }

        .contact-hero p {
            font-size: 1.1rem; /* Smaller paragraph */
            max-width: 650px; /* Slightly narrower */
            margin: 0 auto;
        }

        /* Contact Info Section */
        .contact-info-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Slightly smaller min-width */
            gap: 20px; /* Reduced gap */
            margin-bottom: 30px;
        }

        .info-card {
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px; /* Slightly smaller border-radius */
            padding: 25px; /* Reduced padding */
            text-align: center;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.03); /* Lighter shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px); /* Less lift effect */
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        .info-card .icon-circle {
            background-color: var(--light-green);
            color: var(--primary-green);
            width: 60px; /* Smaller icon circle */
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2.0rem; /* Smaller icon font size */
            margin: 0 auto 15px; /* Reduced margin */
        }

        .info-card h3 {
            font-size: 1.6rem; /* Smaller heading */
            color: var(--dark-green);
            margin-bottom: 8px; /* Reduced margin */
            font-weight: 700;
        }

        .info-card p {
            font-size: 1rem; /* Smaller paragraph */
            color: var(--text-color-dark);
            margin: 4px 0; /* Reduced margin */
        }

        /* New section for side-by-side content */
        .form-and-faq-section {
            display: flex;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            gap: 30px; /* Gap between form and FAQ */
            margin-bottom: 30px;
        }

        .contact-form-container,
        .quick-contact-options {
            flex: 1; /* Allow items to grow */
            min-width: 300px; /* Minimum width before wrapping */
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px;
            padding: 30px; /* Reduced padding */
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
        }

        /* Contact Form Section */
        .contact-form .form-group {
            margin-bottom: 15px; /* Significantly reduced gap */
        }

        .contact-form label {
            display: block;
            margin-bottom: 6px; /* Reduced margin */
            font-weight: 600;
            color: var(--dark-green);
            font-size: 1rem; /* Smaller label font */
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px 14px; /* Reduced padding */
            border: 1px solid var(--soft-gray-border);
            border-radius: 6px; /* Slightly smaller border-radius */
            font-family: 'Manrope', sans-serif;
            font-size: 0.95rem; /* Smaller font size */
            color: var(--text-color-dark);
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: var(--primary-green);
            box-shadow: 0 0 0 2px rgba(11, 212, 41, 0.2); /* Smaller focus ring */
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 100px; /* Slightly smaller min-height */
        }

        .contact-form .submit-btn {
            background-color: var(--primary-green);
            color: white;
            border: none;
            padding: 12px 25px; /* Reduced padding */
            border-radius: 6px; /* Slightly smaller border-radius */
            font-size: 1.05rem; /* Smaller font size */
            font-weight: 700;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            display: flex;
            align-items: center;
            gap: 8px; /* Reduced gap */
            justify-content: center;
            width: fit-content;
            margin-top: 15px; /* Reduced margin */
        }

        .contact-form .submit-btn:hover {
            background-color: var(--dark-green);
            transform: translateY(-1px); /* Less lift effect */
        }

        /* Quick Contact Options (FAQ & Social) */
        .quick-contact-options h4 {
            color: var(--primary-green);
            font-size: 1.15rem; /* Heading for FAQ/Social sections */
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: 700;
            border-bottom: 1px solid var(--soft-gray-border);
            padding-bottom: 5px;
        }

        .quick-contact-options h4:first-of-type {
            margin-top: 0; /* No top margin for the first h4 */
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item h4 {
            color: var(--dark-green);
            font-size: 1rem; /* FAQ question font size */
            margin-bottom: 5px;
            font-weight: 700;
            border-bottom: none; /* Override previous border */
            padding-bottom: 0;
            cursor: pointer; /* Indicate it's clickable (for future accordion if desired) */
        }

        .faq-item p {
            font-size: 0.9rem; /* FAQ answer font size */
            color: var(--text-color-dark);
            line-height: 1.5;
        }

        .social-links {
            display: flex;
            gap: 15px; /* Space between social icons */
            margin-top: 20px;
            justify-content: center; /* Center icons */
        }

        .social-links a {
            color: var(--primary-green);
            font-size: 1.8rem; /* Size of social icons */
            transition: color 0.3s, transform 0.2s;
        }

        .social-links a:hover {
            color: var(--dark-green);
            transform: translateY(-2px);
        }


        /* Map Section */
        .map-section {
            background-color: var(--off-white-bg);
            border: 1px solid var(--soft-gray-border);
            border-radius: 10px;
            padding: 25px; /* Reduced padding */
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.04);
            text-align: center;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            margin-top: 25px; /* Reduced margin */
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Responsive adjustments for Contact Page */
        @media (max-width: 900px) {
            .contact-hero h1 {
                font-size: 2.2rem;
            }
            .contact-hero p {
                font-size: 1rem;
            }
            .contact-content-wrapper {
                margin: 25px auto;
                padding: 0 10px;
                gap: 25px;
            }
            .contact-info-section {
                grid-template-columns: 1fr; /* Stack cards vertically */
                gap: 15px;
            }
            .info-card {
                padding: 20px;
            }
            .info-card h3 {
                font-size: 1.4rem;
            }
            .info-card .icon-circle {
                width: 50px;
                height: 50px;
                font-size: 1.8rem;
                margin-bottom: 12px;
            }
            .section-heading {
                font-size: 1.6rem;
                flex-direction: column; /* Stack icon and text */
                gap: 6px;
            }
            .section-heading i {
                font-size: 1.8rem;
            }
            /* Stack form and FAQ on smaller screens */
            .form-and-faq-section {
                flex-direction: column;
                gap: 25px;
            }
            .contact-form-container,
            .quick-contact-options {
                padding: 25px;
                min-width: unset; /* Remove min-width when stacking */
            }
            .contact-form .submit-btn {
                width: 100%; /* Full width button on smaller screens */
            }
            .quick-contact-options .social-links {
                justify-content: flex-start; /* Align social links to start */
            }
        }

        @media (max-width: 480px) {
            .contact-hero h1 {
                font-size: 1.8rem;
            }
            .contact-hero p {
                font-size: 0.9rem;
            }
            .contact-form-container,
            .quick-contact-options,
            .map-section {
                padding: 20px;
            }
            .contact-form label,
            .faq-item h4 {
                font-size: 0.95rem;
            }
            .contact-form input,
            .contact-form textarea,
            .faq-item p {
                padding: 8px 10px;
                font-size: 0.85rem;
            }
            .contact-form .submit-btn {
                font-size: 0.95rem;
                padding: 10px 18px;
            }
            .section-heading {
                font-size: 1.4rem;
            }
            .section-heading i {
                font-size: 1.6rem;
            }
            .social-links a {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

<main>
    <section class="contact-hero">
        <h1>{{ $contactSettings->page_title ?? 'আমাদের সাথে যোগাযোগ করুন' }}</h1>
        <p>{{ $contactSettings->page_subtitle ?? 'আপনার কোন প্রশ্ন বা মতামত থাকলে আমাদের সাথে যোগাযোগ করুন। আমরা আপনাকে সাহায্য করতে এখানে আছি।' }}</p>
    </section>

    <div class="contact-content-wrapper">
        <section class="contact-info-section">
            <div class="info-card" data-aos="fade-up">
                <div class="icon-circle"><i class="fas fa-map-marker-alt"></i></div>
                <h3>আমাদের অফিস</h3>
                <p>{{ $contactSettings->office_address ?? 'ঢাকা, বাংলাদেশ' }}</p>
            </div>
            <div class="info-card" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-circle"><i class="fas fa-phone-alt"></i></div>
                <h3>আমাদের কল করুন</h3>
                <p>{{ $contactSettings->primary_phone ?? '+৮৮০ ১৭১১ ১২৩৪৫৬' }}</p>
                @if($contactSettings->secondary_phone ?? null)
                    <p>{{ $contactSettings->secondary_phone }}</p>
                @endif
                <p>{{ $contactSettings->working_hours ?? 'রবিবার - বৃহস্পতিবার: সকাল ৯টা - বিকাল ৬টা' }}</p>
            </div>
            <div class="info-card" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-circle"><i class="fas fa-envelope"></i></div>
                <h3>আমাদের ইমেইল করুন</h3>
                <p>{{ $contactSettings->primary_email ?? 'info@digitalfarmer.com' }}</p>
                @if($contactSettings->support_email ?? null)
                    <p>{{ $contactSettings->support_email }}</p>
                @endif
            </div>
        </section>

        <section class="form-and-faq-section">
            <div class="contact-form-container" data-aos="fade-right">
                <h2 class="section-heading"><i class="fas fa-comments"></i> আমাদের একটি বার্তা পাঠান</h2>
                
                @if(session('success'))
                    <div style="background: #d4edda; color: #155724; padding: 12px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #f5c6cb;">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">আপনার নাম *</label>
                        <input type="text" id="name" name="name" 
                               value="{{ old('name', $userInfo->name ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">আপনার ইমেইল *</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $userInfo->email ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">বিষয় *</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="message">আপনার বার্তা *</label>
                        <textarea id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                    </div>
                    <button type="submit" class="submit-btn"><i class="fas fa-paper-plane"></i> বার্তা পাঠান</button>
                </form>
            </div>

            <div class="quick-contact-options" data-aos="fade-left">
                <h2 class="section-heading"><i class="fas fa-question-circle"></i> দ্রুত উত্তর ও আরও</h2>
                
                <h4>প্রায়শই জিজ্ঞাসিত প্রশ্ন</h4>
                <div class="faq-item">
                    <h4>আমি কিভাবে আমার পাসওয়ার্ড রিসেট করতে পারি?</h4>
                    <p>লগইন পেজ থেকে "পাসওয়ার্ড ভুলে গেছেন?" লিংকে ক্লিক করে আপনি আপনার পাসওয়ার্ড রিসেট করতে পারেন।</p>
                </div>
                <div class="faq-item">
                    <h4>বর্তমান বাজার দর কোথায় পাব?</h4>
                    <p>বিভিন্ন ফসলের লাইভ বাজার দর "বাজার দর" পেজে পাওয়া যায়।</p>
                </div>
                <div class="faq-item">
                    <h4>আপনারা কি সরাসরি কৃষি পরামর্শ প্রদান করেন?</h4>
                    <p>আমাদের "ক্রপ ডক্টর" ফিচার AI-চালিত পরামর্শ প্রদান করে, এবং আপনি আমাদের কমিউনিটি ফোরামের মাধ্যমে বিশেষজ্ঞদের সাথে পরামর্শ করতে পারেন।</p>
                </div>
                
                <h4 style="margin-top: 30px;">আমাদের সাথে যুক্ত হন</h4>
                <div class="social-links">
                    @if($contactSettings->facebook_url ?? null)
                        <a href="{{ $contactSettings->facebook_url }}" aria-label="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($contactSettings->twitter_url ?? null)
                        <a href="{{ $contactSettings->twitter_url }}" aria-label="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if($contactSettings->linkedin_url ?? null)
                        <a href="{{ $contactSettings->linkedin_url }}" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    @endif
                    @if($contactSettings->instagram_url ?? null)
                        <a href="{{ $contactSettings->instagram_url }}" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($contactSettings->youtube_url ?? null)
                        <a href="{{ $contactSettings->youtube_url }}" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
                    @endif
                </div>
            </div>
        </section>

        <section class="map-section" data-aos="fade-up">
            <h2 class="section-heading"><i class="fas fa-map-marked-alt"></i> মানচিত্রে আমাদের খুঁজুন</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116776.62171120288!2d90.25265634594248!3d23.900984042880946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b92b6a033f%3A0xc3f6d7732a933221!2sAshulia!5e0!3m2!1sen!2sbd!4v1701388888888!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
</main>


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
                // Remove active from all nav links in main-navbar
                document.querySelectorAll('#main-navbar .nav-link').forEach(l => l.classList.remove('active'));
                // Remove active from all nav links in mobile-navbar
                document.querySelectorAll('.mobile-navbar .nav-link').forEach(l => l.classList.remove('active'));

                // Add active to the clicked link
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

// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-in-out',
});

// Set active class for Contact page on load
document.addEventListener('DOMContentLoaded', () => {
    // Correctly activate the contact link in both menus on page load
    document.querySelectorAll('.nav-link').forEach(link => {
        // Use window.location.pathname for more robust check or a specific attribute
        if (link.getAttribute('href') && link.getAttribute('href').includes('contact')) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
});
    </script>
</body>
</html>