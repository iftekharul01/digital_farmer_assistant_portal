<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>অ্যাডমিন - হোম পেজ | কৃষক পোর্টাল</title>
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
            direction: ltr; /* সঠিক লেআউটের জন্য */
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
            font-size: 1rem;
            transition: border-color 0.2s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.1);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background: #0aa51c;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(11, 212, 41, 0.3);
        }

        @media (max-width: 768px) {
            .content-container {
                padding: 0 15px;
                margin: 15px auto;
            }
            
            .admin-section {
                padding: 20px;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    @include('admin.admin_header')

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
                           placeholder="উদাহরণ: farm_landscape.jpg">
                    <small style="color: #666; font-size: 0.875rem; display: block; margin-top: 5px;">
                        ছবিটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন এবং শুধু ফাইলের নাম লিখুন (যেমন: farm_landscape.jpg)
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
                             alt="হিরো ব্যাকগ্রাউন্ড" 
                             style="max-width: 300px; height: 150px; object-fit: cover; border-radius: 8px; margin-top: 5px;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div style="display: none; padding: 10px; background: #f8d7da; color: #721c24; border-radius: 4px; margin-top: 5px;">
                            ছবি খুঁজে পাওয়া যায়নি। অনুগ্রহ করে সঠিক ফাইলের নাম প্রদান করুন।
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>