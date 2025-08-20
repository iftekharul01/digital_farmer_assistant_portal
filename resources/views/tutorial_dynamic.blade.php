<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $tutorial->title }} | কৃষক পোর্টাল</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            line-height: 1.6;
            color: var(--text-color-dark);
            background: #f8f9fa;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: var(--primary-green);
            margin: 0;
            border-radius: 0;
            box-shadow: 0 2px 12px var(--shadow-light);
            z-index: 1000;
            position: relative;
        }

        .header-wrapper {
            display: flex;
            align-items: center;
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 32px;
            height: 74px;
            justify-content: space-between;
            color: white;
        }

        .logo a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.3rem;
            font-weight: 800;
        }

        #main-navbar {
            display: flex;
            gap: 32px;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            padding: 8px 0;
            border-bottom: 2px solid transparent;
        }

        .nav-link:hover {
            border-bottom-color: white;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 15px;
            color: white;
        }

        .user-profile button {
            background: transparent;
            border: 1px solid white;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.2s;
        }

        .user-profile button:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Tutorial Hero */
        .tutorial-hero {
            background: linear-gradient(135deg, var(--light-green) 0%, #f8fff8 100%);
            padding: 60px 0;
            text-align: center;
            border-bottom: 3px solid var(--primary-green);
        }

        .tutorial-icon-large {
            font-size: 4rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }

        .tutorial-hero h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-green);
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .tutorial-hero p {
            font-size: 1.2rem;
            color: var(--text-color-dark);
            max-width: 600px;
            margin: 0 auto 30px;
            line-height: 1.5;
        }

        /* Tutorial Content */
        .tutorial-content {
            background: white;
            margin: -30px auto 0;
            border-radius: 15px;
            box-shadow: 0 6px 25px var(--shadow-card);
            border: 2px solid var(--border-light);
            position: relative;
            z-index: 10;
            padding: 40px;
            max-width: 800px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 30px;
            padding: 10px 15px;
            border: 2px solid var(--primary-green);
            border-radius: 8px;
            transition: all 0.3s;
        }

        .back-btn:hover {
            background: var(--primary-green);
            color: white;
            text-decoration: none;
        }

        .tutorial-content-body {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .tutorial-content-body h1,
        .tutorial-content-body h2,
        .tutorial-content-body h3,
        .tutorial-content-body h4 {
            color: var(--dark-green);
            margin: 30px 0 15px 0;
            font-weight: 700;
        }

        .tutorial-content-body h1 {
            font-size: 2rem;
            border-bottom: 3px solid var(--primary-green);
            padding-bottom: 10px;
        }

        .tutorial-content-body h2 {
            font-size: 1.7rem;
            color: var(--primary-green);
        }

        .tutorial-content-body h3 {
            font-size: 1.4rem;
        }

        .tutorial-content-body h4 {
            font-size: 1.2rem;
        }

        .tutorial-content-body p {
            margin-bottom: 15px;
        }

        .tutorial-content-body ul,
        .tutorial-content-body ol {
            margin: 15px 0;
            padding-left: 30px;
        }

        .tutorial-content-body li {
            margin-bottom: 8px;
        }

        .tutorial-content-body ul li {
            list-style: none;
            position: relative;
        }

        .tutorial-content-body ul li::before {
            content: '✓';
            color: var(--primary-green);
            font-weight: bold;
            position: absolute;
            left: -25px;
        }

        .tutorial-content-body blockquote {
            background: var(--light-green);
            border-left: 4px solid var(--primary-green);
            padding: 15px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }

        .tutorial-content-body code {
            background: #f1f1f1;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Courier New', monospace;
        }

        .tutorial-content-body pre {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            margin: 15px 0;
            border: 1px solid #e1e5e9;
        }

        /* Video Section */
        .tutorial-video-section {
            background: linear-gradient(135deg, #f8fff8 0%, #e8f5e8 100%);
            padding: 60px 0;
            margin-top: 50px;
            border-top: 3px solid var(--primary-green);
            position: relative;
            overflow: hidden;
        }

        .tutorial-video-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"><polygon fill="rgba(11,212,41,0.05)" points="1000,0 1000,100 0,100"/></svg>');
            pointer-events: none;
        }

        .video-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .video-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-green);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .video-title i {
            color: var(--primary-green);
            font-size: 2.2rem;
        }

        .video-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            margin-bottom: 30px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-description {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px var(--shadow-card);
            border: 2px solid var(--border-light);
            position: relative;
        }

        .video-description::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 20px;
            height: 20px;
            background: white;
            border: 2px solid var(--border-light);
            border-bottom: none;
            border-right: none;
            transform: translateX(-50%) rotate(45deg);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .tutorial-hero {
                padding: 40px 0;
            }

            .tutorial-hero h1 {
                font-size: 2rem;
            }

            .tutorial-hero p {
                font-size: 1.1rem;
            }

            .tutorial-content {
                margin: -20px 15px 0;
                padding: 30px 20px;
            }

            .tutorial-content-body {
                font-size: 1rem;
            }

            .tutorial-content-body h1 {
                font-size: 1.7rem;
            }

            .tutorial-content-body h2 {
                font-size: 1.5rem;
            }

            .tutorial-content-body h3 {
                font-size: 1.3rem;
            }

            .video-title {
                font-size: 2rem;
                flex-direction: column;
                gap: 10px;
            }

            .video-subtitle {
                font-size: 1.1rem;
            }

            #main-navbar {
                display: none;
            }

            .header-wrapper {
                padding: 0 20px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="tutorial-hero">
        <div class="tutorial-icon-large"><i class="{{ $tutorial->icon }}"></i></div>
        <h1>{{ $tutorial->title }}</h1>
        <p>{{ $tutorial->description }}</p>
    </div>

    <div class="container">
        <div class="tutorial-content">
            <a href="{{ route('tutorials') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i> টিউটোরিয়াল তালিকায় ফিরুন
            </a>

            <div class="tutorial-content-body">
                {!! $tutorial->content !!}
            </div>
        </div>
    </div>

    @if($tutorial->video_url)
        <!-- Tutorial Video Section -->
        <section class="tutorial-video-section">
            <div class="container">
                <div class="video-content">
                    <h2 class="video-title">
                        <i class="fas fa-play-circle"></i>
                        {{ $tutorial->video_title ?? 'টিউটোরিয়াল ভিডিও' }}
                    </h2>
                    <p class="video-subtitle">
                        {{ $tutorial->video_description ?? 'এই ভিডিওতে বিস্তারিত দেখুন এবং হাতে-কলমে শিখুন' }}
                    </p>
                    
                    <div class="video-container">
                        <iframe src="{{ $tutorial->video_url }}" allowfullscreen></iframe>
                    </div>
                    
                    <div class="video-description">
                        <p>উপরের ভিডিওটি দেখে আপনি এই বিষয়ে আরো ভালভাবে বুঝতে পারবেন। কোন প্রশ্ন থাকলে কমেন্ট করুন।</p>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @include('partials.footer')
</body>
</html>
