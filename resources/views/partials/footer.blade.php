<style>
        :root {
            --primary-green: #0bd429;
            --light-green: #eafce9;
            --dark-green: #1e3d2c;
            --shadow-light: rgba(11,212,41,0.07);
            --shadow-medium: rgba(11,212,41,0.15);
            --text-color-light: #f2fff6;
            --text-color-dark: #555;
            --border-light: #b2eac1;
            --off-white-bg: #fdfdfd;
        }

        /* Modern Footer Design */
        .footer {
            background: linear-gradient(135deg, var(--dark-green) 0%, #2d5a3d 100%);
            color: var(--text-color-light);
            padding: 60px 0 20px 0;
            margin-top: 60px;
            box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), #17d431, var(--primary-green));
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            color: var(--primary-green);
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-column h4 {
            color: var(--primary-green);
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 16px;
            padding-bottom: 8px;
            border-bottom: 2px solid var(--primary-green);
            display: inline-block;
        }

        .footer-description {
            font-size: 1rem;
            line-height: 1.6;
            color: #c8e6d0;
            margin-bottom: 20px;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: #b8d4c2;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 4px 0;
        }

        .footer-column ul li a:hover {
            color: var(--primary-green);
            padding-left: 10px;
            transform: translateX(5px);
        }

        .footer-column ul li a i {
            font-size: 0.9rem;
            width: 16px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(11, 212, 41, 0.1);
            border: 2px solid var(--primary-green);
            border-radius: 50%;
            color: var(--primary-green);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-green);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(11, 212, 41, 0.3);
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            color: #c8e6d0;
            font-size: 0.95rem;
        }

        .contact-item i {
            color: var(--primary-green);
            font-size: 1.1rem;
            width: 20px;
        }

        .footer-divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary-green), transparent);
            margin: 30px 0;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-top: 1px solid rgba(11, 212, 41, 0.2);
            font-size: 0.9rem;
            color: #b8d4c2;
        }

        .footer-bottom-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .footer-bottom-right {
            display: flex;
            gap: 20px;
        }

        .footer-bottom a {
            color: #b8d4c2;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: var(--primary-green);
        }

        /* Newsletter Signup */
        .newsletter-form {
            margin-top: 20px;
        }

        .newsletter-input {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .newsletter-input input {
            flex: 1;
            padding: 12px;
            border: 1px solid rgba(11, 212, 41, 0.3);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.9rem;
        }

        .newsletter-input input::placeholder {
            color: #b8d4c2;
        }

        .newsletter-input button {
            padding: 12px 20px;
            background: var(--primary-green);
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-input button:hover {
            background: #0aa123;
            transform: translateY(-2px);
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .footer {
                padding: 40px 0 20px 0;
                margin-top: 40px;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            
            .footer-column h3 {
                font-size: 1.4rem;
            }
            
            .social-links {
                justify-content: center;
            }
            
            .newsletter-input {
                flex-direction: column;
            }
        }
</style>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-column">
                <h3><i class="fas fa-seedling"></i> ডিজিটাল কৃষক পোর্টাল</h3>
                <p class="footer-description">
                    আধুনিক প্রযুক্তির সাহায্যে কৃষিকে আরও সহজ ও লাভজনক করার লক্ষ্যে আমাদের প্ল্যাটফর্ম। প্রতিটি কৃষকের সাফল্যই আমাদের অগ্রাধিকার।
                </p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>ঢাকা, বাংলাদেশ</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+৮৮০ ১৭১১ ১২৩৪৫৆</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@digitalfarmer.bd</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Services Column -->
            <div class="footer-column">
                <h4>সেবাসমূহ</h4>
                <ul>
                    <li><a href="/crop-doctor"><i class="fas fa-stethoscope"></i> ফসলের ডাক্তার</a></li>
                    <li><a href="/weather"><i class="fas fa-cloud-sun"></i> আবহাওয়া পূর্বাভাস</a></li>
                    <li><a href="/market-prices"><i class="fas fa-chart-line"></i> বাজার দর</a></li>
                    <li><a href="/tutorials"><i class="fas fa-graduation-cap"></i> কৃষি শিক্ষা</a></li>
                    <li><a href="/subsidies-news"><i class="fas fa-newspaper"></i> সরকারি সুবিধা</a></li>
                </ul>
            </div>

            <!-- Community Column -->
            <div class="footer-column">
                <h4>কমিউনিটি</h4>
                <ul>
                    <li><a href="/announcements"><i class="fas fa-bullhorn"></i> ঘোষণা</a></li>
                    <li><a href="/notifications"><i class="fas fa-bell"></i> বিজ্ঞপ্তি</a></li>
                    <li><a href="#"><i class="fas fa-users"></i> কৃষক ফোরাম</a></li>
                    <li><a href="#"><i class="fas fa-trophy"></i> সফলতার গল্প</a></li>
                    <li><a href="/contact"><i class="fas fa-phone-alt"></i> যোগাযোগ</a></li>
                </ul>
            </div>

            <!-- Newsletter Column -->
            <div class="footer-column">
                <h4>নিউজলেটার</h4>
                <p class="footer-description">
                    নতুন আপডেট ও কৃষি সংবাদ পেতে আমাদের নিউজলেটার সাবস্ক্রাইব করুন।
                </p>
                <div class="newsletter-form">
                    <div class="newsletter-input">
                        <input type="email" placeholder="আপনার ইমেইল ঠিকানা" />
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
                <ul style="margin-top: 20px;">
                    <li><a href="/about-us"><i class="fas fa-info-circle"></i> আমাদের সম্পর্কে</a></li>
                    <li><a href="#"><i class="fas fa-shield-alt"></i> গোপনীয়তা নীতি</a></li>
                    <li><a href="#"><i class="fas fa-file-contract"></i> ব্যবহারের শর্তাবলী</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <span>&copy; {{ date('Y') }} ডিজিটাল কৃষক পোর্টাল। সকল অধিকার সংরক্ষিত।</span>
            </div>
            <div class="footer-bottom-right">
                <a href="#"><i class="fas fa-heart"></i> Made with Love for Farmers</a>
            </div>
        </div>
    </div>
</footer>