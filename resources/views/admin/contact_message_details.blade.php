<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>বার্তার বিস্তারিত | কৃষক পোর্টাল অ্যাডমিন</title>
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
            max-width: 800px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 30px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
            transition: color 0.2s;
        }

        .back-link:hover {
            color: var(--text-dark);
        }

        .message-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .message-header {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .message-meta {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .meta-item {
            display: flex;
            flex-direction: column;
        }

        .meta-label {
            font-size: 0.9rem;
            color: #666;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .meta-value {
            font-weight: 700;
            color: var(--text-dark);
        }

        .status-badge {
            padding: 6px 12px;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 600;
            width: fit-content;
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

        .message-content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--primary-green);
            margin: 20px 0;
        }

        .message-content h3 {
            color: var(--text-dark);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .message-text {
            line-height: 1.6;
            color: var(--text-dark);
            white-space: pre-wrap;
        }

        .reply-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
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

        select, textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        select:focus, textarea:focus {
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

        .btn-danger {
            background: var(--danger-red);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-left: 10px;
        }

        .btn-danger:hover {
            background: #c82333;
        }

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

        .existing-reply {
            background: #e7f3ff;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid var(--info-blue);
            margin: 20px 0;
        }

        .existing-reply h4 {
            color: var(--info-blue);
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .message-meta {
                grid-template-columns: 1fr;
            }
            
            .content-container {
                padding: 0 15px;
            }
            
            .message-card,
            .reply-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    @include('admin.admin_header')

    <div class="content-container">
        <a href="{{ route('admin.contact') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> যোগাযোগ ব্যবস্থাপনায় ফিরে যান
        </a>

        <h1 class="page-title"><i class="fas fa-envelope-open"></i> বার্তার বিস্তারিত</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="message-card">
            <div class="message-header">
                <h2 style="color: var(--text-dark); margin-bottom: 15px;">{{ $message->subject }}</h2>
                
                <div class="message-meta">
                    <div class="meta-item">
                        <span class="meta-label">প্রেরকের নাম</span>
                        <span class="meta-value">{{ $message->name }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">ইমেইল</span>
                        <span class="meta-value">{{ $message->email }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">পাঠানো হয়েছে</span>
                        <span class="meta-value">{{ $message->created_at->format('d/m/Y H:i A') }}</span>
                    </div>
                    <div class="meta-item">
                        <span class="meta-label">স্ট্যাটাস</span>
                        <span class="status-badge status-{{ $message->status }}">
                            @if($message->status === 'new')
                                নতুন
                            @elseif($message->status === 'in_progress')
                                প্রক্রিয়াধীন
                            @else
                                উত্তর দেওয়া হয়েছে
                            @endif
                        </span>
                    </div>
                </div>

                @if($message->user)
                    <div class="meta-item">
                        <span class="meta-label">নিবন্ধিত ব্যবহারকারী</span>
                        <span class="meta-value">{{ $message->user->name }} ({{ $message->user->email }})</span>
                    </div>
                @else
                    <div class="meta-item">
                        <span class="meta-label">ব্যবহারকারীর ধরন</span>
                        <span class="meta-value">অতিথি ব্যবহারকারী</span>
                    </div>
                @endif
            </div>

            <div class="message-content">
                <h3><i class="fas fa-comment"></i> বার্তার বিষয়বস্তু</h3>
                <div class="message-text">{{ $message->message }}</div>
            </div>

            @if($message->admin_reply)
                <div class="existing-reply">
                    <h4><i class="fas fa-reply"></i> প্রশাসকের উত্তর</h4>
                    <div style="white-space: pre-wrap; line-height: 1.6;">{{ $message->admin_reply }}</div>
                    @if($message->replied_at)
                        <small style="color: #666; margin-top: 10px; display: block;">
                            উত্তর দেওয়া হয়েছে: {{ $message->replied_at->format('d/m/Y H:i A') }}
                        </small>
                    @endif
                </div>
            @endif

            @if($message->viewed_at && $message->status !== 'new')
                <div style="margin-top: 20px; padding: 10px; background: #f0f8ff; border-radius: 6px; font-size: 0.9rem; color: #666;">
                    <i class="fas fa-eye"></i> দেখা হয়েছে: {{ $message->viewed_at->format('d/m/Y H:i A') }}
                </div>
            @endif
        </div>

        <div class="reply-section">
            <h2 style="color: var(--text-dark); margin-bottom: 20px;">
                <i class="fas fa-reply"></i> স্ট্যাটাস আপডেট ও উত্তর
            </h2>

            <form action="{{ route('admin.contact.message.update', $message->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="status">স্ট্যাটাস *</label>
                    <select id="status" name="status" required>
                        <option value="new" {{ $message->status === 'new' ? 'selected' : '' }}>নতুন</option>
                        <option value="in_progress" {{ $message->status === 'in_progress' ? 'selected' : '' }}>প্রক্রিয়াধীন</option>
                        <option value="replied" {{ $message->status === 'replied' ? 'selected' : '' }}>উত্তর দেওয়া হয়েছে</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="admin_reply">প্রশাসকের উত্তর (ঐচ্ছিক)</label>
                    <textarea id="admin_reply" name="admin_reply" 
                              placeholder="এখানে আপনার উত্তর লিখুন... (স্ট্যাটাস 'উত্তর দেওয়া হয়েছে' সেট করলে এই ক্ষেত্রটি প্রয়োজনীয়)">{{ $message->admin_reply }}</textarea>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 10px;">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-save"></i> আপডেট করুন
                    </button>
                </div>
            </form>

            <!-- Separate delete form outside the update form -->
            <form action="{{ route('admin.contact.message.delete', $message->id) }}" method="POST" 
                  style="margin-top: 20px;" 
                  onsubmit="return confirm('আপনি কি নিশ্চিত যে এই বার্তাটি মুছে ফেলতে চান? এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-danger">
                    <i class="fas fa-trash"></i> বার্তা মুছে ফেলুন
                </button>
            </form>
        </div>
    </div>

    <script>
        // Auto-fill admin reply requirement based on status
        document.getElementById('status').addEventListener('change', function() {
            const replyTextarea = document.getElementById('admin_reply');
            const replyLabel = document.querySelector('label[for="admin_reply"]');
            
            if (this.value === 'replied') {
                replyLabel.innerHTML = 'প্রশাসকের উত্তর *';
                replyTextarea.required = true;
                replyTextarea.style.borderColor = '#ffc107';
            } else {
                replyLabel.innerHTML = 'প্রশাসকের উত্তর (ঐচ্ছিক)';
                replyTextarea.required = false;
                replyTextarea.style.borderColor = '#e0e0e0';
            }
        });

        // Trigger the change event on page load
        document.getElementById('status').dispatchEvent(new Event('change'));
    </script>
</body>
</html>
