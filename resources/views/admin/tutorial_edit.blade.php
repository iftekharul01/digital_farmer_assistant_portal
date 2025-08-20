<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>টিউটোরিয়াল সম্পাদনা | অ্যাডমিন প্যানেল</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="styl    </style>
<</head>
<body>
    @include('admin.admin_header')
    
    <div class="container">
        <div class="page-header" style="background: linear-gradient(135deg, var(--primary-green), #089c24); color: white; padding: 30px; border-radius: 15px; margin: 30px auto; text-align: center;">
            <h1 style="margin: 0; font-size: 2rem; font-weight: 800;">
                <i class="fas fa-edit"></i> টিউটোরিয়াল সম্পাদনা
            </h1>
            <a href="{{ route('admin.tutorials') }}" class="btn btn-secondary" style="background: white; color: var(--primary-green); margin-top: 15px; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; padding: 10px 20px; border-radius: 8px;">
                <i class="fas fa-arrow-left"></i> ফিরে যান
            </a>
        </div>

    <div class="main-container">k rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            --danger-red: #e74c3c;
            --warning-orange: #f39c12;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background: #f8f9fa;
            color: var(--text-color-dark);
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .page-header {
            margin-bottom: 30px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .btn-secondary {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 1px solid rgba(255,255,255,0.3);
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
        }

        .btn-primary:hover {
            background: #089c24;
            transform: translateY(-2px);
        }

        .btn-warning {
            background: var(--warning-orange);
            color: white;
        }

        .btn-warning:hover {
            background: #e67e22;
        }

        /* Form Container */
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 25px var(--shadow-card);
            border: 2px solid var(--border-light);
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 20px;
            text-align: center;
        }

        /* Form Fields */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: var(--dark-green);
            margin-bottom: 8px;
        }

        .required {
            color: var(--danger-red);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.1);
        }

        .form-control.is-invalid {
            border-color: var(--danger-red);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        textarea.form-control.large {
            min-height: 200px;
        }

        .form-text {
            font-size: 0.85rem;
            color: #666;
            margin-top: 5px;
        }

        /* Icon Selector */
        .icon-selector {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
            gap: 10px;
            margin-top: 10px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }

        .icon-option {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .icon-option:hover {
            background: white;
            border-color: var(--primary-green);
        }

        .icon-option.selected {
            background: var(--light-green);
            border-color: var(--primary-green);
        }

        .icon-option i {
            font-size: 1.5rem;
            color: var(--primary-green);
            margin-bottom: 5px;
        }

        .icon-option span {
            font-size: 0.7rem;
            text-align: center;
            color: var(--text-color-dark);
        }

        /* Checkbox */
        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
        }

        .form-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-green);
        }

        /* Error Messages */
        .invalid-feedback {
            display: block;
            color: var(--danger-red);
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .text-success {
            color: green;
        }
        .text-danger {
            color: red;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-danger {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        /* Tutorial Info */
        .tutorial-info {
            background: var(--light-green);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-green);
        }

        .tutorial-info h4 {
            color: var(--dark-green);
            margin-bottom: 8px;
        }

        .tutorial-info p {
            color: var(--text-color-dark);
            margin-bottom: 5px;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .form-container {
                padding: 20px;
            }

            .header-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .form-actions {
                flex-direction: column-reverse;
                gap: 15px;
            }

            .icon-selector {
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <div class="header-content">
                <h1 class="header-title">
                    <i class="fas fa-edit"></i>
                    টিউটোরিয়াল সম্পাদনা
                </h1>
                <a href="{{ route('admin.tutorials') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> ফিরে যান
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle"></i>
                <div>
                    <strong>দয়া করে নিম্নলিখিত ত্রুটিগুলি সংশোধন করুন:</strong>
                    <ul style="margin: 5px 0 0 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

                <span class="{{ $tutorial->is_active ? 'text-success' : 'text-danger' }}">
                    {{ $tutorial->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়' }}
                </span>
            <p><strong>তৈরির তারিখ:</strong> {{ $tutorial->created_at->format('d M Y, h:i A') }}</p>
            <p><strong>সর্বশেষ আপডেট:</strong> {{ $tutorial->updated_at->format('d M Y, h:i A') }}</p>
            <p><strong>স্লাগ:</strong> {{ $tutorial->slug }}</p>
            <p><strong>স্ট্যাটাস:</strong> 
                <span class="{{ $tutorial->is_active ? 'text-success' : 'text-danger' }}">
                    {{ $tutorial->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়' }}
                </span>
            </p>
        </div>

        <div class="form-container">
            <h2 class="form-title">টিউটোরিয়ালের তথ্য সম্পাদনা করুন</h2>

            <form action="{{ route('admin.tutorials.update', $tutorial->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="form-group">
                    <label for="title" class="form-label">
                        টিউটোরিয়ালের শিরোনাম <span class="required">*</span>
                    </label>
                    <input 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        id="title" 
                        name="title" 
                        value="{{ old('title', $tutorial->title) }}" 
                        placeholder="যেমন: মাটি পরীক্ষার কৌশল"
                        required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description" class="form-label">
                        সংক্ষিপ্ত বিবরণ <span class="required">*</span>
                    </label>
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description" 
                        name="description" 
                        placeholder="টিউটোরিয়ালের সংক্ষিপ্ত বিবরণ লিখুন (সর্বোচ্চ ৫০০ অক্ষর)"
                        required>{{ old('description', $tutorial->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">এই বিবরণটি টিউটোরিয়াল তালিকায় দেখানো হবে।</div>
                </div>

                <!-- Content -->
                <div class="form-group">
                    <label for="content" class="form-label">
                        বিস্তারিত বিষয়বস্তু <span class="required">*</span>
                    </label>
                    <textarea 
                        class="form-control large @error('content') is-invalid @enderror" 
                        id="content" 
                        name="content" 
                        placeholder="টিউটোরিয়ালের বিস্তারিত বিষয়বস্তু লিখুন। আপনি HTML ট্যাগ ব্যবহার করতে পারেন।"
                        required>{{ old('content', $tutorial->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">HTML ট্যাগ যেমন &lt;h3&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;li&gt; ব্যবহার করতে পারেন।</div>
                </div>

                <!-- Icon Selection -->
                <div class="form-group">
                    <label for="icon" class="form-label">
                        টিউটোরিয়ালের আইকন <span class="required">*</span>
                    </label>
                    <input type="hidden" name="icon" id="selected-icon" value="{{ old('icon', $tutorial->icon) }}">
                    
                    <div class="icon-selector">
                        <div class="icon-option" data-icon="fas fa-seedling">
                            <i class="fas fa-seedling"></i>
                            <span>বীজ</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-vial">
                            <i class="fas fa-vial"></i>
                            <span>পরীক্ষা</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-cloud-sun">
                            <i class="fas fa-cloud-sun"></i>
                            <span>আবহাওয়া</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-water">
                            <i class="fas fa-water"></i>
                            <span>পানি</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-bug">
                            <i class="fas fa-bug"></i>
                            <span>পোকা</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-leaf">
                            <i class="fas fa-leaf"></i>
                            <span>পাতা</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-warehouse">
                            <i class="fas fa-warehouse"></i>
                            <span>গুদাম</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-tractor">
                            <i class="fas fa-tractor"></i>
                            <span>ট্রাক্টর</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-hammer">
                            <i class="fas fa-hammer"></i>
                            <span>যন্ত্র</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-chart-line">
                            <i class="fas fa-chart-line"></i>
                            <span>গ্রাফ</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-file-signature">
                            <i class="fas fa-file-signature"></i>
                            <span>ডকুমেন্ট</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-tablet-alt">
                            <i class="fas fa-tablet-alt"></i>
                            <span>টেক</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-gavel">
                            <i class="fas fa-gavel"></i>
                            <span>আইন</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-coins">
                            <i class="fas fa-coins"></i>
                            <span>অর্থ</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-heart">
                            <i class="fas fa-heart"></i>
                            <span>স্বাস্থ্য</span>
                        </div>
                        <div class="icon-option" data-icon="fas fa-globe">
                            <i class="fas fa-globe"></i>
                            <span>পৃথিবী</span>
                        </div>
                    </div>
                    @error('icon')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Sort Order -->
                <div class="form-group">
                    <label for="sort_order" class="form-label">ক্রম নম্বর</label>
                    <input 
                        type="number" 
                        class="form-control @error('sort_order') is-invalid @enderror" 
                        id="sort_order" 
                        name="sort_order" 
                        value="{{ old('sort_order', $tutorial->sort_order) }}" 
                        min="0"
                        placeholder="0">
                    @error('sort_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">টিউটোরিয়াল তালিকায় কোন ক্রমে দেখানো হবে (০ = প্রথম)।</div>
                </div>

                <!-- Video Information -->
                <div class="form-group">
                    <label for="video_url" class="form-label">ভিডিও URL (ঐচ্ছিক)</label>
                    <input 
                        type="url" 
                        class="form-control @error('video_url') is-invalid @enderror" 
                        id="video_url" 
                        name="video_url" 
                        value="{{ old('video_url', $tutorial->video_url) }}" 
                        placeholder="https://www.youtube.com/embed/video-id">
                    @error('video_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">YouTube Embed URL ব্যবহার করুন।</div>
                </div>

                <div class="form-group">
                    <label for="video_title" class="form-label">ভিডিওর শিরোনাম (ঐচ্ছিক)</label>
                    <input 
                        type="text" 
                        class="form-control @error('video_title') is-invalid @enderror" 
                        id="video_title" 
                        name="video_title" 
                        value="{{ old('video_title', $tutorial->video_title) }}" 
                        placeholder="ভিডিওর শিরোনাম">
                    @error('video_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="video_description" class="form-label">ভিডিওর বিবরণ (ঐচ্ছিক)</label>
                    <textarea 
                        class="form-control @error('video_description') is-invalid @enderror" 
                        id="video_description" 
                        name="video_description" 
                        placeholder="ভিডিওর বিবরণ">{{ old('video_description', $tutorial->video_description) }}</textarea>
                    @error('video_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Status -->
                <div class="form-group">
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            id="is_active" 
                            name="is_active" 
                            value="1" 
                            {{ old('is_active', $tutorial->is_active) ? 'checked' : '' }}>
                        <label for="is_active" class="form-label">এই টিউটোরিয়ালটি সক্রিয় করুন</label>
                    </div>
                    <div class="form-text">সক্রিয় টিউটোরিয়াল ব্যবহারকারীদের কাছে দৃশ্যমান হবে।</div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="{{ route('admin.tutorials') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> বাতিল করুন
                    </a>
                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save"></i> পরিবর্তন সংরক্ষণ করুন
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Icon selection functionality
        document.addEventListener('DOMContentLoaded', function() {
            const iconOptions = document.querySelectorAll('.icon-option');
            const selectedIconInput = document.getElementById('selected-icon');

            // Set initial selection from current tutorial icon
            const currentIcon = selectedIconInput.value;
            iconOptions.forEach(option => {
                if (option.dataset.icon === currentIcon) {
                    option.classList.add('selected');
                } else {
                    option.classList.remove('selected');
                }
            });

            iconOptions.forEach(option => {
                option.addEventListener('click', function() {
                    // Remove selected class from all options
                    iconOptions.forEach(opt => opt.classList.remove('selected'));
                    
                    // Add selected class to clicked option
                    this.classList.add('selected');
                    
                    // Update hidden input
                    selectedIconInput.value = this.dataset.icon;
                });
            });
        });
    </script>
</body>
</html>
