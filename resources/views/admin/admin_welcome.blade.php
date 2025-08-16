<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>এডমিন - হোম পেজ ম্যানেজমেন্ট | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        :root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
            --success-green: #28a745;
            --warning-yellow: #ffc107;
            --danger-red: #dc3545;
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
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
            border-bottom: 3px solid var(--primary-green);
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
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
            transition: border-color 0.2s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        textarea {
            min-height: 100px;
            resize: vertical;
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
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background: #0aa51c;
        }

        .alert {
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .image-preview {
            max-width: 200px;
            max-height: 120px;
            border-radius: 8px;
            margin-top: 10px;
        }

        .current-image {
            margin-top: 10px;
        }

        .current-image img {
            max-width: 200px;
            max-height: 120px;
            border-radius: 8px;
            border: 2px solid #e0e0e0;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .content-container {
                padding: 0 15px;
            }
        }
    </style>
</head>
<body>
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <i class="fas fa-seedling"></i> এডমিন প্যানেল
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"></i> ড্যাশবোর্ড</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> লগআউট</a>
            </div>
        </nav>
    </header>

    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-home"></i> ওয়েলকাম পেজ ম্যানেজমেন্ট</h1>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.welcome.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Hero Section -->
            <div class="admin-section">
                <h2 class="section-title"><i class="fas fa-star"></i> হিরো সেকশন</h2>
                
                <div class="form-group">
                    <label for="hero_title">হিরো টাইটেল</label>
                    <input type="text" id="hero_title" name="hero_title" 
                           value="{{ old('hero_title', $content->hero_title ?? '') }}" 
                           placeholder="মূল শিরোনাম লিখুন" required>
                </div>

                <div class="form-group">
                    <label for="hero_subtitle">হিরো সাবটাইটেল</label>
                    <textarea id="hero_subtitle" name="hero_subtitle" 
                              placeholder="উপ-শিরোনাম লিখুন" required>{{ old('hero_subtitle', $content->hero_subtitle ?? '') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="hero_background_image">হিরো ব্যাকগ্রাউন্ড ছবি</label>
                    <input type="file" id="hero_background_image" name="hero_background_image" 
                           accept="image/*" onchange="previewImage(this, 'hero-preview')">
                    
                    @if($content && $content->hero_background_image)
                        <div class="current-image">
                            <p><strong>বর্তমান ছবি:</strong></p>
                            <img src="{{ asset('storage/assets/hero_sections/' . $content->hero_background_image) }}" 
                                 alt="Current Hero Image">
                        </div>
                    @endif
                    
                    <img id="hero-preview" class="image-preview" style="display: none;">
                </div>
            </div>

            <!-- Features Section -->
            <div class="admin-section">
                <h2 class="section-title"><i class="fas fa-star"></i> ফিচার সেকশন</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="feature_1_title">ফিচার ১ টাইটেল</label>
                        <input type="text" id="feature_1_title" name="feature_1_title" 
                               value="{{ old('feature_1_title', $content->feature_1_title ?? '') }}" 
                               placeholder="প্রথম ফিচারের শিরোনাম" required>
                    </div>
                    <div class="form-group">
                        <label for="feature_1_description">ফিচার ১ বর্ণনা</label>
                        <textarea id="feature_1_description" name="feature_1_description" 
                                  placeholder="প্রথম ফিচারের বর্ণনা" required>{{ old('feature_1_description', $content->feature_1_description ?? '') }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="feature_2_title">ফিচার ২ টাইটেল</label>
                        <input type="text" id="feature_2_title" name="feature_2_title" 
                               value="{{ old('feature_2_title', $content->feature_2_title ?? '') }}" 
                               placeholder="দ্বিতীয় ফিচারের শিরোনাম" required>
                    </div>
                    <div class="form-group">
                        <label for="feature_2_description">ফিচার ২ বর্ণনা</label>
                        <textarea id="feature_2_description" name="feature_2_description" 
                                  placeholder="দ্বিতীয় ফিচারের বর্ণনা" required>{{ old('feature_2_description', $content->feature_2_description ?? '') }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="feature_3_title">ফিচার ৩ টাইটেল</label>
                        <input type="text" id="feature_3_title" name="feature_3_title" 
                               value="{{ old('feature_3_title', $content->feature_3_title ?? '') }}" 
                               placeholder="তৃতীয় ফিচারের শিরোনাম" required>
                    </div>
                    <div class="form-group">
                        <label for="feature_3_description">ফিচার ৩ বর্ণনা</label>
                        <textarea id="feature_3_description" name="feature_3_description" 
                                  placeholder="তৃতীয় ফিচারের বর্ণনা" required>{{ old('feature_3_description', $content->feature_3_description ?? '') }}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="feature_4_title">ফিচার ৪ টাইটেল</label>
                        <input type="text" id="feature_4_title" name="feature_4_title" 
                               value="{{ old('feature_4_title', $content->feature_4_title ?? '') }}" 
                               placeholder="চতুর্থ ফিচারের শিরোনাম" required>
                    </div>
                    <div class="form-group">
                        <label for="feature_4_description">ফিচার ৪ বর্ণনা</label>
                        <textarea id="feature_4_description" name="feature_4_description" 
                                  placeholder="চতুর্থ ফিচারের বর্ণনা" required>{{ old('feature_4_description', $content->feature_4_description ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="admin-section">
                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i>
                    হোম পেজ আপডেট করুন
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>
</html>
