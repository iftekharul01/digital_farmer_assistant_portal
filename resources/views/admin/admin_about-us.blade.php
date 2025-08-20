<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>অ্যাডমিন - About Us পেজ ম্যানেজমেন্ট | কৃষক পোর্টাল</title>
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

        .admin-nav h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: opacity 0.2s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .main-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .content-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-green);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .form-input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s;
            font-family: 'Manrope', sans-serif;
        }

        .form-input:focus {
            border-color: var(--primary-green);
            outline: none;
        }

        .form-textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-textarea.large {
            min-height: 180px;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
        }

        .btn-primary:hover {
            background: #0a8220;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-secondary:hover {
            background: #5a6268;
        }

        .btn-danger {
            background: var(--danger-red);
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        .alert {
            padding: 15px 20px;
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

        .team-section {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .team-member {
            border: 1px solid #e9ecef;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 15px;
            background: #f8f9fa;
        }

        .team-member-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .team-member-title {
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .form-row-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
        }

        .help-text {
            font-size: 0.9rem;
            color: #666;
            margin-top: 5px;
        }

        .add-team-member {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .add-team-member:hover {
            background: #0a8220;
        }

        .remove-member {
            background: var(--danger-red);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .remove-member:hover {
            background: #c82333;
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 0 15px;
            }
            
            .content-section {
                padding: 20px;
            }
            
            .form-row, .form-row-3 {
                grid-template-columns: 1fr;
            }
            
            .admin-nav {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    @include('admin.admin_header')

    <div class="main-container">
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
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

        <form action="{{ route('admin.about-us.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Hero Section -->
            <div class="content-section">
                <h2 class="section-title">
                    <i class="fas fa-star"></i> হিরো সেকশন
                </h2>
                
                <div class="form-group">
                    <label class="form-label">হিরো শিরোনাম *</label>
                    <input type="text" name="hero_title" class="form-input" 
                           value="{{ old('hero_title', $content->hero_title ?? 'Our Story: Cultivating Progress') }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label">হিরো সাবটাইটেল *</label>
                    <textarea name="hero_subtitle" class="form-input form-textarea" required>{{ old('hero_subtitle', $content->hero_subtitle ?? 'Empowering farmers through technology and knowledge, we\'re dedicated to fostering a resilient and prosperous agricultural community. Discover our journey, values, and the team making it happen.') }}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">ব্যাকগ্রাউন্ড ইমেজ ফাইলের নাম</label>
                    <input type="text" name="hero_background_image" class="form-input" 
                           value="{{ old('hero_background_image', $content->hero_background_image ?? '') }}" 
                           placeholder="example.jpg">
                    <div class="help-text">
                        <i class="fas fa-info-circle"></i> ইমেজ ফাইলটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন এবং শুধু ফাইলের নাম লিখুন (যেমন: about-hero.jpg)
                    </div>
                </div>
            </div>

            <!-- Our Motivation -->
            <div class="content-section">
                <h2 class="section-title">
                    <i class="fas fa-hand-holding-heart"></i> আমাদের অনুপ্রেরণা
                </h2>
                
                <div class="form-group">
                    <label class="form-label">অনুপ্রেরণার বিবরণ *</label>
                    <textarea name="our_motivation" class="form-input form-textarea large" required>{{ old('our_motivation', $content->our_motivation ?? 'At Farmer Portal, we\'re driven by a deep understanding of the challenges farmers face daily. From unpredictable weather to volatile markets and stubborn crop diseases, modern agriculture demands resilience and quick adaptation. Our motivation stems from a fundamental belief: technology can be a powerful ally for every farmer, no matter their scale or location.') }}</textarea>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="content-section">
                <h2 class="section-title">
                    <i class="fas fa-lightbulb"></i> মিশন ও ভিশন
                </h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">আমাদের মিশন *</label>
                        <textarea name="our_mission" class="form-input form-textarea" required>{{ old('our_mission', $content->our_mission ?? 'To provide cutting-edge digital tools and comprehensive knowledge resources that empower farmers to make informed decisions, optimize yields, and achieve economic sustainability in an ever-evolving agricultural landscape.') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">আমাদের ভিশন *</label>
                        <textarea name="our_vision" class="form-input form-textarea" required>{{ old('our_vision', $content->our_vision ?? 'To cultivate a globally connected and resilient farming community, where every farmer has equitable access to technology, expertise, and market opportunities, ensuring a prosperous and sustainable future for agriculture worldwide.') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- What We Value -->
            <div class="content-section">
                <h2 class="section-title">
                    <i class="fas fa-leaf"></i> আমরা কী মূল্য দেই
                </h2>
                
                <div class="form-group">
                    <label class="form-label">মূল্যবোধের বিবরণ *</label>
                    <textarea name="what_we_value" class="form-input form-textarea large" required>{{ old('what_we_value', $content->what_we_value ?? 'Community: Fostering a supportive network where farmers share, learn, and grow together.\nInnovation: Constantly developing smart solutions to tackle agricultural challenges.\nSustainability: Promoting practices that protect the planet for future generations.\nEducation: Providing accessible knowledge to enhance farming skills and decision-making.') }}</textarea>
                    <div class="help-text">
                        <i class="fas fa-info-circle"></i> প্রতিটি মূল্যবোধ আলাদা লাইনে লিখুন। ফরম্যাট: "শিরোনাম: বিবরণ"
                    </div>
                </div>
            </div>

            <!-- Team Members -->
            <div class="content-section">
                <h2 class="section-title">
                    <i class="fas fa-users-gear"></i> আমাদের টিম
                </h2>
                
                <button type="button" class="add-team-member" onclick="addTeamMember()">
                    <i class="fas fa-plus"></i> নতুন সদস্য যোগ করুন
                </button>

                <div id="team-members-container">
                    @if($content && $content->team_members)
                        @foreach($content->team_members as $index => $member)
                            <div class="team-member" id="member-{{ $index }}">
                                <div class="team-member-header">
                                    <span class="team-member-title">সদস্য #{{ $index + 1 }}</span>
                                    <button type="button" class="remove-member" onclick="removeMember('{{ $index }}')">
                                        <i class="fas fa-trash"></i> মুছুন
                                    </button>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">নাম *</label>
                                        <input type="text" name="team_members[{{ $index }}][name]" class="form-input" 
                                               value="{{ old('team_members.' . $index . '.name', $member['name'] ?? '') }}" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">পদবী *</label>
                                        <input type="text" name="team_members[{{ $index }}][title]" class="form-input" 
                                               value="{{ old('team_members.' . $index . '.title', $member['title'] ?? '') }}" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">সাবটাইটেল</label>
                                    <input type="text" name="team_members[{{ $index }}][subtitle]" class="form-input" 
                                           value="{{ old('team_members.' . $index . '.subtitle', $member['subtitle'] ?? '') }}">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">ইমেজ ফাইলের নাম</label>
                                    <input type="text" name="team_members[{{ $index }}][image]" class="form-input" 
                                           value="{{ old('team_members.' . $index . '.image', $member['image'] ?? '') }}" 
                                           placeholder="member1.jpg">
                                    <div class="help-text">
                                        <i class="fas fa-info-circle"></i> ইমেজ ফাইলটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন
                                    </div>
                                </div>
                                
                                <div class="form-row-3">
                                    <div class="form-group">
                                        <label class="form-label">LinkedIn URL</label>
                                        <input type="url" name="team_members[{{ $index }}][linkedin]" class="form-input" 
                                               value="{{ old('team_members.' . $index . '.linkedin', $member['linkedin'] ?? '') }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Twitter URL</label>
                                        <input type="url" name="team_members[{{ $index }}][twitter]" class="form-input" 
                                               value="{{ old('team_members.' . $index . '.twitter', $member['twitter'] ?? '') }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">GitHub URL</label>
                                        <input type="url" name="team_members[{{ $index }}][github]" class="form-input" 
                                               value="{{ old('team_members.' . $index . '.github', $member['github'] ?? '') }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Default team member if no data exists -->
                        <div class="team-member" id="member-0">
                            <div class="team-member-header">
                                <span class="team-member-title">সদস্য #1</span>
                                <button type="button" class="remove-member" onclick="removeMember(0)">
                                    <i class="fas fa-trash"></i> মুছুন
                                </button>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">নাম *</label>
                                    <input type="text" name="team_members[0][name]" class="form-input" 
                                           value="{{ old('team_members.0.name', 'Md Asif Shahriar Arpon') }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">পদবী *</label>
                                    <input type="text" name="team_members[0][title]" class="form-input" 
                                           value="{{ old('team_members.0.title', 'Founder & Lead Developer') }}" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">সাবটাইটেল</label>
                                <input type="text" name="team_members[0][subtitle]" class="form-input" 
                                       value="{{ old('team_members.0.subtitle', 'Visionary behind Farmer Portal\'s technology.') }}">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">ইমেজ ফাইলের নাম</label>
                                <input type="text" name="team_members[0][image]" class="form-input" 
                                       value="{{ old('team_members.0.image', '') }}" placeholder="member1.jpg">
                                <div class="help-text">
                                    <i class="fas fa-info-circle"></i> ইমেজ ফাইলটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন
                                </div>
                            </div>
                            
                            <div class="form-row-3">
                                <div class="form-group">
                                    <label class="form-label">LinkedIn URL</label>
                                    <input type="url" name="team_members[0][linkedin]" class="form-input" 
                                           value="{{ old('team_members.0.linkedin', '') }}">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Twitter URL</label>
                                    <input type="url" name="team_members[0][twitter]" class="form-input" 
                                           value="{{ old('team_members.0.twitter', '') }}">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">GitHub URL</label>
                                    <input type="url" name="team_members[0][github]" class="form-input" 
                                           value="{{ old('team_members.0.github', '') }}">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="content-section">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> আপডেট করুন
                </button>
                <a href="{{ route('about-us') }}" target="_blank" class="btn btn-secondary">
                    <i class="fas fa-eye"></i> পেজ দেখুন
                </a>
            </div>
        </form>
    </div>

    <script>
        let memberCount = {!! $content && $content->team_members ? count($content->team_members) : 1 !!};

        function addTeamMember() {
            const container = document.getElementById('team-members-container');
            const memberHtml = `
                <div class="team-member" id="member-${memberCount}">
                    <div class="team-member-header">
                        <span class="team-member-title">সদস্য #${memberCount + 1}</span>
                        <button type="button" class="remove-member" onclick="removeMember(${memberCount})">
                            <i class="fas fa-trash"></i> মুছুন
                        </button>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">নাম *</label>
                            <input type="text" name="team_members[${memberCount}][name]" class="form-input" required>
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">পদবী *</label>
                            <input type="text" name="team_members[${memberCount}][title]" class="form-input" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">সাবটাইটেল</label>
                        <input type="text" name="team_members[${memberCount}][subtitle]" class="form-input">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">ইমেজ ফাইলের নাম</label>
                        <input type="text" name="team_members[${memberCount}][image]" class="form-input" placeholder="member${memberCount + 1}.jpg">
                        <div class="help-text">
                            <i class="fas fa-info-circle"></i> ইমেজ ফাইলটি storage/app/public/assets/hero_sections/ ফোল্ডারে রাখুন
                        </div>
                    </div>
                    
                    <div class="form-row-3">
                        <div class="form-group">
                            <label class="form-label">LinkedIn URL</label>
                            <input type="url" name="team_members[${memberCount}][linkedin]" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Twitter URL</label>
                            <input type="url" name="team_members[${memberCount}][twitter]" class="form-input">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">GitHub URL</label>
                            <input type="url" name="team_members[${memberCount}][github]" class="form-input">
                        </div>
                    </div>
                </div>
            `;
            
            container.insertAdjacentHTML('beforeend', memberHtml);
            memberCount++;
        }

        function removeMember(index) {
            const member = document.getElementById('member-' + index);
            if (member) {
                member.remove();
            }
        }
    </script>
</body>
</html>
