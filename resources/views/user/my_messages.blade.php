@include('partials.header')

<style>
    .page-content {
        margin-top: 20px;
        min-height: calc(100vh - 100px);
    }

    .content-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 800;
        color: var(--text-color-dark);
        margin-bottom: 30px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
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
        .content-container {
            padding: 15px;
        }

        .messages-container {
            padding: 20px;
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
    <div class="content-container">
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

        <h1 class="page-title">
            <i class="fas fa-inbox"></i>
            আমার বার্তাসমূহ
        </h1>

        <div class="messages-container">

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
