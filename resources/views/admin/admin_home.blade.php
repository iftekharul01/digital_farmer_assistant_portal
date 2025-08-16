<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Home Page | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f9fa;
            font-family: 'Manrope', sans-serif;
        }

        .admin-header {
            background: var(--primary-green);
            color: white;
            padding: 15px 0;
        }

        .admin-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .admin-logo {
            font-size: 1.3rem;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .nav-links a:hover {
            background: rgba(255,255,255,0.1);
        }

        .content-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 30px;
        }

        .admin-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: #0aa51c;
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <i class="fas fa-seedling"></i> Admin Panel
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </nav>
    </header>

    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-home"></i> হোম পেজ ম্যানেজমেন্ট</h1>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif

        <div class="admin-section">
            <h2 class="section-title">হিরো সেকশন</h2>
            <form action="{{ route('admin.home.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="hero_title">হিরো টাইটেল</label>
                    <input type="text" id="hero_title" name="hero_title" 
                           value="{{ old('hero_title', $heroContent->hero_title) }}" required>
                    @error('hero_title')
                        <span style="color: #dc3545; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="hero_subtitle1">হিরো সাবটাইটেল ১</label>
                    <input type="text" id="hero_subtitle1" name="hero_subtitle1" 
                           value="{{ old('hero_subtitle1', $heroContent->hero_subtitle1) }}" required>
                    @error('hero_subtitle1')
                        <span style="color: #dc3545; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="hero_subtitle2">হিরো সাবটাইটেল ২</label>
                    <input type="text" id="hero_subtitle2" name="hero_subtitle2" 
                           value="{{ old('hero_subtitle2', $heroContent->hero_subtitle2) }}">
                    @error('hero_subtitle2')
                        <span style="color: #dc3545; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="hero_background_image">ব্যাকগ্রাউন্ড ইমেজ (ফাইলের নাম)</label>
                    <input type="text" id="hero_background_image" name="hero_background_image" 
                           value="{{ old('hero_background_image', $heroContent->hero_background_image) }}" 
                           placeholder="যেমন: farm_landscape.jpg">
                    <small style="color: #666; font-size: 0.875rem; display: block; margin-top: 5px;">
                        ছবিটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন এবং শুধু ফাইলের নাম লিখুন
                    </small>
                    @error('hero_background_image')
                        <span style="color: #dc3545; font-size: 0.875rem;">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i> হিরো সেকশন আপডেট করুন
                </button>
            </form>
        </div>

        <div class="admin-section">
            <h2 class="section-title">বর্তমান হিরো সেকশন প্রিভিউ</h2>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border: 1px solid #e0e0e0;">
                <h3 style="color: var(--primary-green); font-size: 1.8rem; margin-bottom: 10px;">
                    {{ $heroContent->hero_title }}
                </h3>
                <p style="font-size: 1.1rem; color: #666; margin-bottom: 5px;">
                    {{ $heroContent->hero_subtitle1 }}
                </p>
                @if($heroContent->hero_subtitle2)
                    <p style="font-size: 1.1rem; color: #666; margin-bottom: 10px;">
                        {{ $heroContent->hero_subtitle2 }}
                    </p>
                @endif
                @if($heroContent->hero_background_image)
                    <div style="margin-top: 15px;">
                        <strong>ব্যাকগ্রাউন্ড ইমেজ:</strong><br>
                        <img src="{{ '/storage/assets/hero_sections/' . $heroContent->hero_background_image }}" 
                             alt="Hero Background" 
                             style="max-width: 300px; height: 150px; object-fit: cover; border-radius: 8px; margin-top: 5px;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div style="display: none; padding: 10px; background: #f8d7da; color: #721c24; border-radius: 4px; margin-top: 5px;">
                            ছবি পাওয়া যায়নি। অনুগ্রহ করে সঠিক ফাইলের নাম দিন।
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>