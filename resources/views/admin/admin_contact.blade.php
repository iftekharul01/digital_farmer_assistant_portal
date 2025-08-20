<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>অ্যাডমিন - যোগাযোগ ব্যবস্থাপনা | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
            --success-green: #28a745;
            --warning-yellow: #ffc107;
            --danger-red: #dc3545;
            --info-blue: #17a2b8;
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

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
        }

        textarea {
            min-height: 120px;
        }

        input:focus, textarea:focus, select:focus {
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

        .btn-sm {
            padding: 6px 12px;
            font-size: 0.9rem;
        }

        .btn-info {
            background: var(--info-blue);
        }

        .btn-success {
            background: var(--success-green);
        }

        .btn-danger {
            background: var(--danger-red);
        }

        .messages-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .messages-table th,
        .messages-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .messages-table th {
            background: #f8f9fa;
            font-weight: 600;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-new {
            background: #ffeaa7;
            color: #d63031;
        }

        .status-in_progress {
            background: #74b9ff;
            color: white;
        }

        .status-replied {
            background: #00b894;
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
        }

        .stat-card h3 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #666;
            font-weight: 600;
        }

        .stat-new h3 { color: var(--warning-yellow); }
        .stat-progress h3 { color: var(--info-blue); }
        .stat-replied h3 { color: var(--success-green); }
        .stat-total h3 { color: var(--primary-green); }

        .alert {
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
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

        .no-messages {
            text-align: center;
            padding: 40px;
            color: #666;
        }

        .btn-group {
            display: flex;
            gap: 5px;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .messages-table {
                font-size: 0.9rem;
            }
            
            .messages-table th,
            .messages-table td {
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    @include('admin.admin_header')

    <div class="content-container">
        <h1 class="page-title"><i class="fas fa-envelope"></i> যোগাযোগ ব্যবস্থাপনা</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Message Statistics -->
        <div class="stats-grid">
            <div class="stat-card stat-new">
                <h3>{{ $messageStats['new'] }}</h3>
                <p>নতুন বার্তা</p>
            </div>
            <div class="stat-card stat-progress">
                <h3>{{ $messageStats['in_progress'] }}</h3>
                <p>প্রক্রিয়াধীন</p>
            </div>
            <div class="stat-card stat-replied">
                <h3>{{ $messageStats['replied'] }}</h3>
                <p>উত্তর দেওয়া</p>
            </div>
            <div class="stat-card stat-total">
                <h3>{{ $messageStats['total'] }}</h3>
                <p>মোট বার্তা</p>
            </div>
        </div>

        <!-- Contact Settings Form -->
        <div class="admin-section">
            <h2 class="section-title"><i class="fas fa-cog"></i> যোগাযোগের তথ্য সেটিংস</h2>
            <form action="{{ route('admin.contact.settings') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="page_title">পেজ শিরোনাম *</label>
                        <input type="text" id="page_title" name="page_title" 
                               value="{{ $contactSettings->page_title ?? 'আমাদের সাথে যোগাযোগ করুন' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="page_subtitle">পেজ সাবটাইটেল *</label>
                        <input type="text" id="page_subtitle" name="page_subtitle" 
                               value="{{ $contactSettings->page_subtitle ?? 'আপনার কোন প্রশ্ন বা মতামত থাকলে আমাদের সাথে যোগাযোগ করুন' }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="office_address">অফিস ঠিকানা *</label>
                    <textarea id="office_address" name="office_address" required>{{ $contactSettings->office_address ?? 'ঢাকা, বাংলাদেশ' }}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="primary_phone">প্রাথমিক ফোন *</label>
                        <input type="text" id="primary_phone" name="primary_phone" 
                               value="{{ $contactSettings->primary_phone ?? '+৮৮০ ১৭১১ ১২৩৪৫৬' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="secondary_phone">দ্বিতীয় ফোন</label>
                        <label for="page_subtitle">পেজ সাবটাইটেল *</label>
                        <input type="text" id="page_subtitle" name="page_subtitle" 
                               value="{{ $contactSettings->page_subtitle ?? 'আপনার কোন প্রশ্ন বা মতামত থাকলে আমাদের সাথে যোগাযোগ করুন' }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="office_address">অফিস ঠিকানা *</label>
                    <textarea id="office_address" name="office_address" required>{{ $contactSettings->office_address ?? 'ঢাকা, বাংলাদেশ' }}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="primary_phone">প্রাথমিক ফোন *</label>
                        <input type="text" id="primary_phone" name="primary_phone" 
                               value="{{ $contactSettings->primary_phone ?? '+৮৮০ ১৭১১ ১২৩৪৫৬' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="secondary_phone">দ্বিতীয় ফোন</label>
                        <input type="text" id="secondary_phone" name="secondary_phone" 
                               value="{{ $contactSettings->secondary_phone ?? '' }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="primary_email">প্রাথমিক ইমেইল *</label>
                        <input type="email" id="primary_email" name="primary_email" 
                               value="{{ $contactSettings->primary_email ?? 'info@digitalfarmer.com' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="support_email">সাপোর্ট ইমেইল</label>
                        <input type="email" id="support_email" name="support_email" 
                               value="{{ $contactSettings->support_email ?? '' }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="working_hours">কর্মঘন্টা *</label>
                    <input type="text" id="working_hours" name="working_hours" 
                           value="{{ $contactSettings->working_hours ?? 'রবিবার - বৃহস্পতিবার: সকাল ৯টা - বিকাল ৬টা' }}" required>
                </div>

                <h3 style="margin: 30px 0 20px 0; color: var(--text-dark);">সোশ্যাল মিডিয়া লিংক</h3>

                <div class="form-row">
                    <div class="form-group">
                        <label for="facebook_url">ফেসবুক URL</label>
                        <input type="url" id="facebook_url" name="facebook_url" 
                               value="{{ $contactSettings->facebook_url ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="twitter_url">টুইটার URL</label>
                        <input type="url" id="twitter_url" name="twitter_url" 
                               value="{{ $contactSettings->twitter_url ?? '' }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="instagram_url">ইন্সটাগ্রাম URL</label>
                        <input type="url" id="instagram_url" name="instagram_url" 
                               value="{{ $contactSettings->instagram_url ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="linkedin_url">লিংকডইন URL</label>
                        <input type="url" id="linkedin_url" name="linkedin_url" 
                               value="{{ $contactSettings->linkedin_url ?? '' }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="youtube_url">ইউটিউব URL</label>
                    <input type="url" id="youtube_url" name="youtube_url" 
                           value="{{ $contactSettings->youtube_url ?? '' }}">
                </div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i> যোগাযোগের তথ্য আপডেট করুন
                </button>
            </form>
        </div>

        <!-- Contact Messages -->
        <div class="admin-section">
            <h2 class="section-title"><i class="fas fa-inbox"></i> যোগাযোগ ফর্মের বার্তাসমূহ</h2>
            
            @if($messages->count() > 0)
                <div style="overflow-x: auto;">
                    <table class="messages-table">
                        <thead>
                            <tr>
                                <th>তারিখ</th>
                                <th>নাম</th>
                                <th>ইমেইল</th>
                                <th>বিষয়</th>
                                <th>স্ট্যাটাস</th>
                                <th>ব্যবহারকারী</th>
                                <th>কার্যক্রম</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                                <tr>
                                    <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ Str::limit($message->subject, 30) }}</td>
                                    <td>
                                        <span class="status-badge status-{{ $message->status }}">
                                            @if($message->status === 'new')
                                                নতুন
                                            @elseif($message->status === 'in_progress')
                                                প্রক্রিয়াধীন
                                            @else
                                                উত্তর দেওয়া
                                            @endif
                                        </span>
                                    </td>
                                    <td>
                                        @if($message->user)
                                            {{ $message->user->name }}
                                        @else
                                            অতিথি
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.contact.message', $message->id) }}" class="btn-primary btn-sm">
                                                <i class="fas fa-eye"></i> দেখুন
                                            </a>
                                            <form action="{{ route('admin.contact.message.delete', $message->id) }}" method="POST" style="display: inline;" 
                                                  onsubmit="return confirm('আপনি কি নিশ্চিত যে এই বার্তাটি মুছে ফেলতে চান?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> মুছুন
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div style="margin-top: 20px;">
                    {{ $messages->links() }}
                </div>
            @else
                <div class="no-messages">
                    <i class="fas fa-inbox" style="font-size: 3rem; color: #ccc; margin-bottom: 15px;"></i>
                    <p>এখনো কোন বার্তা পাওয়া যায়নি।</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
