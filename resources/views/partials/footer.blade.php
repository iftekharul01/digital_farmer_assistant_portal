<style>

/* Footer */
        .footer {
            background: var(--light-green);
            padding: 30px 0 10px 0;
            margin-top: 40px;
            color: var(--dark-green);
        }
        .footer-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1100px;
            margin: auto;
            padding: 0 16px; /* Added padding for smaller screens */
        }
        .footer-column {
            flex: 1 1 220px;
            margin-bottom: 18px;
        }
        .footer-column h3 {
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 1.4rem;
        }
        .footer-column h4 {
            color: var(--primary-green);
            margin-bottom: 8px;
            font-size: 1.1rem;
        }
        .footer-column p {
            color: var(--dark-green);
            font-size: 0.95rem;
        }
        .footer-column ul {
            list-style: none;
            padding: 0;
            color: var(--dark-green);
        }
        .footer-column ul li a {
            color: var(--dark-green);
            text-decoration: none;
            padding: 3px 0;
            display: block;
            transition: color 0.2s ease;
        }
        .footer-column ul li a:hover {
            color: var(--primary-green);
        }
        .footer-bottom {
            text-align: center;
            color: #888;
            font-size: 13px;
            margin-top: 20px;
            padding-bottom: 10px;
        }
</style>




<footer class="footer">
        <div class="container footer-grid">
            <div class="footer-column">
                <h3>কৃষক পোর্টাল</h3>
                <p>প্রতিটি কৃষকের হাতে প্রযুক্তির সংযোগ। কৃষিকে আরও স্মার্ট এবং সহজলভ্য করা।</p>
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
        </div>
        <div class="footer-bottom">
            &copy; {{ date('Y') }} কৃষক পোর্টাল। সকল অধিকার সংরক্ষিত।
        </div>
    </footer>