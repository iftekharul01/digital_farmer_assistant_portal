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

    .profile-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
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

    .messages-container {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .section-title {
        color: var(--primary-green);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .message-card {
        background: #f8f9fa;
        border: 1px solid #e1e5e9;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .message-card:hover {
        background: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border-color: var(--primary-green);
    }

    .message-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
        flex-wrap: wrap;
        gap: 10px;
    }

    .message-subject {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--text-color-dark);
        flex: 1;
        min-width: 200px;
    }

    .message-date {
        color: #666;
        font-size: 0.9rem;
        white-space: nowrap;
    }

    .message-content {
        color: var(--text-color-dark);
        margin-bottom: 15px;
        line-height: 1.6;
        font-size: 0.95rem;
    }

    .message-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .status-badge {
        padding: 5px 12px;
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

    .view-btn {
        background: var(--primary-green);
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9rem;
        transition: background 0.2s;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .view-btn:hover {
        background: var(--dark-green);
        text-decoration: none;
        color: white;
    }

    .reply-indicator {
        background: var(--light-green);
        padding: 8px 12px;
        border-radius: 6px;
        border-left: 4px solid var(--primary-green);
        margin-top: 10px;
        font-size: 0.85rem;
        color: var(--dark-green);
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .no-messages {
        text-align: center;
        padding: 60px 20px;
        color: #666;
    }

    .no-messages i {
        font-size: 4rem;
        margin-bottom: 20px;
        color: #ddd;
    }

    .no-messages h3 {
        color: var(--text-color-dark);
        margin-bottom: 10px;
        font-size: 1.5rem;
    }

    .no-messages p {
        margin-bottom: 20px;
        font-size: 1rem;
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

    .pagination-wrapper {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .profile-container {
            padding: 15px;
        }

        .messages-container {
            padding: 20px;
        }

        .settings-navigation {
            flex-direction: column;
        }

        .message-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .message-meta {
            flex-direction: column;
            align-items: flex-start;
        }

        .view-btn {
            width: 100%;
            justify-content: center;
        }
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

        <div class="messages-container">
            <h2 class="section-title">
                <i class="fas fa-inbox"></i>
                আমার বার্তাসমূহ
            </h2>

            @if($messages->count() > 0)
                @foreach($messages as $message)
                    <div class="message-card">
                        <div class="message-header">
                            <h3 class="message-subject">{{ $message->subject }}</h3>
                            <span class="message-date">{{ $message->created_at->format('d/m/Y H:i') }}</span>
                        </div>

                        <div class="message-content">
                            {{ Str::limit($message->message, 150) }}
                        </div>

                        @if($message->admin_reply)
                            <div class="reply-indicator">
                                <i class="fas fa-reply"></i> প্রশাসক উত্তর দিয়েছেন
                            </div>
                        @endif

                        <div class="message-meta">
                            <span class="status-badge status-{{ $message->status }}">
                                @if($message->status === 'new')
                                    নতুন
                                @elseif($message->status === 'in_progress')
                                    প্রক্রিয়াধীন
                                @else
                                    উত্তর দেওয়া হয়েছে
                                @endif
                            </span>

                            <a href="{{ route('user.message.view', $message->id) }}" class="view-btn">
                                <i class="fas fa-eye"></i> বিস্তারিত দেখুন
                            </a>
                        </div>
                    </div>
                @endforeach

                <div class="pagination-wrapper">
                    {{ $messages->links() }}
                </div>
            @else
                <div class="no-messages">
                    <i class="fas fa-inbox"></i>
                    <h3>কোন বার্তা পাওয়া যায়নি</h3>
                    <p>আপনি এখনো কোন বার্তা পাঠাননি।</p>
                    <a href="{{ route('contact') }}" class="view-btn">
                        <i class="fas fa-plus"></i> নতুন বার্তা পাঠান
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@include('partials.footer')
