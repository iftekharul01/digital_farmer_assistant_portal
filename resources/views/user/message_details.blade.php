@include('partials.header')

<style>
    .page-content {
        margin-top: 20px;
        min-height: calc(100vh - 100px);
    }

    .profile-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .profile-header {
        background: linear-gradient(135deg, var(--primary-green), #0a8220);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
        text-align: center;
    }

    .profile-avatar {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2.5rem;
        border: 4px solid rgba(255,255,255,0.3);
    }

    .settings-navigation {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .nav-item {
        background: #f8f9fa;
        color: #666;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.2s;
        border: 2px solid transparent;
    }

    .nav-item.active {
        background: var(--light-green);
        color: var(--primary-green);
        border-color: var(--primary-green);
    }

    .nav-item:hover {
        background: var(--light-green);
        color: var(--primary-green);
        text-decoration: none;
    }

    .message-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--primary-green);
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 25px;
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.2s;
    }

    .back-link:hover {
        background: var(--light-green);
        text-decoration: none;
        color: var(--primary-green);
    }

    .message-header {
        border-bottom: 2px solid #f1f3f4;
        padding-bottom: 20px;
        margin-bottom: 25px;
    }

    .message-subject {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--text-color-dark);
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .message-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .meta-info {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        align-items: center;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
        font-size: 0.9rem;
    }

    .meta-item i {
        color: var(--primary-green);
    }

    .status-badge {
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .status-new {
        background: #fff3cd;
        color: #856404;
        border: 1px solid #ffeaa7;
    }

    .status-in_progress {
        background: #cce5ff;
        color: #0056b3;
        border: 1px solid #74b9ff;
    }

    .status-replied {
        background: #d1f2eb;
        color: #00695c;
        border: 1px solid #00b894;
    }

    .message-content {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 8px;
        border-left: 4px solid var(--primary-green);
        margin-bottom: 30px;
    }

    .content-label {
        font-weight: 700;
        color: var(--primary-green);
        margin-bottom: 10px;
        font-size: 1rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .content-text {
        color: var(--text-color-dark);
        line-height: 1.8;
        font-size: 1rem;
        white-space: pre-wrap;
    }

    .admin-reply {
        background: var(--light-green);
        padding: 25px;
        border-radius: 8px;
        border-left: 4px solid var(--primary-green);
        margin-top: 30px;
    }

    .reply-header {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    .reply-icon {
        width: 40px;
        height: 40px;
        background: var(--primary-green);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
    }

    .reply-info h4 {
        color: var(--primary-green);
        font-size: 1.1rem;
        font-weight: 700;
        margin: 0;
    }

    .reply-date {
        color: #666;
        font-size: 0.85rem;
        margin: 0;
    }

    .reply-text {
        color: var(--text-color-dark);
        line-height: 1.8;
        font-size: 1rem;
        white-space: pre-wrap;
        margin-top: 15px;
    }

    .no-reply {
        text-align: center;
        padding: 40px 20px;
        color: #666;
        background: #f8f9fa;
        border-radius: 8px;
        border: 2px dashed #dee2e6;
        margin-top: 30px;
    }

    .no-reply i {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #ccc;
    }

    .no-reply h4 {
        color: var(--text-color-dark);
        margin-bottom: 8px;
        font-size: 1.2rem;
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

    .action-buttons {
        text-align: center;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #e9ecef;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: var(--primary-green);
        color: white;
    }

    .btn-primary:hover {
        background: var(--dark-green);
        color: white;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .profile-container {
            padding: 15px;
        }

        .message-container {
            padding: 20px;
        }

        .settings-navigation {
            flex-direction: column;
        }

        .message-meta {
            flex-direction: column;
            align-items: flex-start;
        }

        .meta-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .message-content, .admin-reply {
            padding: 20px;
        }

        .message-subject {
            font-size: 1.3rem;
        }
</style>

<div class="page-content">
    <div class="profile-container">
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i>
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="profile-header">
            <div class="profile-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h1>{{ Session::get('full_name') ?: Session::get('username') }}</h1>
            <p>কৃষক সদস্য</p>
        </div>

        <div class="settings-navigation">
            <a href="{{ route('user.profile') }}" class="nav-item">
                <i class="fas fa-user"></i> প্রোফাইল
            </a>
            <a href="{{ route('user.settings') }}" class="nav-item">
                <i class="fas fa-cog"></i> সেটিংস
            </a>
            <a href="{{ route('user.favourites') }}" class="nav-item">
                <i class="fas fa-heart"></i> পছন্দের তালিকা
            </a>
            <a href="{{ route('user.messages') }}" class="nav-item active">
                <i class="fas fa-envelope"></i> আমার বার্তাসমূহ
            </a>
        </div>

        <div class="message-container">
            <a href="{{ route('user.messages') }}" class="back-link">
                <i class="fas fa-arrow-left"></i> বার্তা তালিকায় ফিরে যান
            </a>

            <div class="message-header">
                <h1 class="message-subject">{{ $message->subject }}</h1>
                
                <div class="message-meta">
                    <div class="meta-info">
                        <div class="meta-item">
                            <i class="fas fa-calendar-alt"></i>
                            <span>{{ $message->created_at->format('d/m/Y') }}</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>{{ $message->created_at->format('H:i') }}</span>
                        </div>
                    </div>
                    
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

            <div class="message-content">
                <div class="content-label">
                    <i class="fas fa-comment-dots"></i>
                    আপনার বার্তা:
                </div>
                <div class="content-text">{{ $message->message }}</div>
            </div>

            @if($message->admin_reply)
                <div class="admin-reply">
                    <div class="reply-header">
                        <div class="reply-icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <div class="reply-info">
                            <h4>প্রশাসকের উত্তর</h4>
                            <p class="reply-date">{{ $message->updated_at->format('d/m/Y H:i') }}</p>
                        </div>
                    </div>
                    <div class="reply-text">{{ $message->admin_reply }}</div>
                </div>
            @else
                <div class="no-reply">
                    <i class="fas fa-hourglass-half"></i>
                    <h4>উত্তরের অপেক্ষায়</h4>
                    <p>প্রশাসক শীঘ্রই আপনার বার্তার উত্তর দেবেন।</p>
                </div>
            @endif

            <div class="action-buttons">
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> নতুন বার্তা পাঠান
                </a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')