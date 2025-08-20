<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <title>সংরক্ষিত সংবাদ | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
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
        }

        body {
            background: #f9fafb;
            font-family: 'Manrope', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-header {
            background: linear-gradient(135deg, var(--primary-green), #089c24);
            color: white;
            padding: 40px 20px;
            text-align: center;
            border-radius: 15px;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .page-header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stats-card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px var(--shadow-card);
            text-align: center;
            border: 2px solid var(--border-light);
        }

        .stats-icon {
            font-size: 2rem;
            color: var(--primary-green);
            margin-bottom: 10px;
        }

        .stats-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark-green);
        }

        .stats-label {
            color: var(--text-color-dark);
            font-weight: 600;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .news-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 25px var(--shadow-card);
            border: 2px solid var(--border-light);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 35px var(--shadow-medium);
        }

        .news-img {
            width: 100%;
            height: 200px;
            background: #e8f5e8;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-green);
            font-size: 3rem;
        }

        .news-content {
            padding: 20px;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 10px;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-desc {
            color: var(--text-color-dark);
            font-size: 0.95rem;
            margin-bottom: 15px;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #777;
            margin-bottom: 15px;
        }

        .news-source {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .news-date {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .news-actions {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s;
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
        }

        .btn-primary:hover {
            background: #089c24;
            color: white;
            text-decoration: none;
        }

        .btn-danger {
            background: var(--danger-red);
            color: white;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .pagination a,
        .pagination span {
            padding: 10px 15px;
            background: white;
            border: 2px solid var(--border-light);
            border-radius: 8px;
            text-decoration: none;
            color: var(--dark-green);
            font-weight: 600;
            transition: all 0.3s;
        }

        .pagination a:hover {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        .pagination .active {
            background: var(--primary-green);
            color: white;
            border-color: var(--primary-green);
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 6px 25px var(--shadow-card);
            border: 2px solid var(--border-light);
        }

        .empty-icon {
            font-size: 5rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark-green);
            margin-bottom: 10px;
        }

        .empty-desc {
            color: var(--text-color-dark);
            font-size: 1.1rem;
            margin-bottom: 20px;
        }

        .back-btn {
            background: var(--primary-green);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background 0.3s;
            margin-bottom: 30px;
        }

        .back-btn:hover {
            background: #089c24;
            color: white;
            text-decoration: none;
        }

        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 20px;
            border-radius: 8px;
            color: white;
            font-weight: 600;
            z-index: 1000;
            transform: translateX(400px);
            transition: transform 0.3s;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.success {
            background: #27ae60;
        }

        .toast.error {
            background: #e74c3c;
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2rem;
            }
            
            .news-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-container {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <div class="main-content">
        <a href="{{ route('subsidies-news') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> সংবাদ পেজে ফিরুন
        </a>

        <div class="page-header">
            <div class="stats-icon"><i class="fas fa-bookmark"></i></div>
            <h1>সংরক্ষিত সংবাদ</h1>
            <p>আপনার পছন্দের সংবাদগুলো এখানে সংরক্ষিত থাকবে</p>
        </div>

        <div class="stats-container">
            <div class="stats-card">
                <div class="stats-icon"><i class="fas fa-bookmark"></i></div>
                <div class="stats-number">{{ $savedNews->total() }}</div>
                <div class="stats-label">মোট সংরক্ষিত সংবাদ</div>
            </div>
            <div class="stats-card">
                <div class="stats-icon"><i class="fas fa-calendar"></i></div>
                <div class="stats-number">{{ $savedNews->count() }}</div>
                <div class="stats-label">এই পেজে</div>
            </div>
        </div>

        @if($savedNews->count() > 0)
            <div class="news-grid" id="newsGrid">
                @foreach($savedNews as $news)
                    <div class="news-card" data-id="{{ $news->id }}">
                        @if($news->image_url)
                            <img src="{{ $news->image_url }}" class="news-img" alt="সংবাদের ছবি">
                        @else
                            <div class="news-img">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        @endif
                        <div class="news-content">
                            <div class="news-title">{{ $news->title }}</div>
                            @if($news->description)
                                <div class="news-desc">{{ $news->description }}</div>
                            @endif
                            <div class="news-meta">
                                <span class="news-source">
                                    <i class="fas fa-newspaper"></i> 
                                    {{ $news->source_id ?? 'অজানা' }}
                                </span>
                                <span class="news-date">
                                    <i class="far fa-clock"></i> 
                                    {{ $news->pub_date ?? 'অজানা' }}
                                </span>
                            </div>
                            <div class="news-actions">
                                <a href="{{ $news->link }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt"></i> পড়ুন
                                </a>
                                <button class="btn btn-danger delete-btn" data-id="{{ $news->id }}">
                                    <i class="fas fa-trash"></i> মুছুন
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $savedNews->links('pagination.simple-default') }}
        @else
            <div class="empty-state">
                <div class="empty-icon"><i class="fas fa-bookmark"></i></div>
                <h2 class="empty-title">কোনো সংরক্ষিত সংবাদ নেই</h2>
                <p class="empty-desc">আপনি এখনো কোনো সংবাদ সংরক্ষণ করেননি। সংবাদ পেজ থেকে পছন্দের সংবাদ সংরক্ষণ করুন।</p>
                <a href="{{ route('subsidies-news') }}" class="btn btn-primary">
                    <i class="fas fa-newspaper"></i> সংবাদ দেখুন
                </a>
            </div>
        @endif
    </div>

    <div id="toast" class="toast"></div>

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log('Document ready, setting up delete functionality');
            
            // Toast notification function
            function showToast(message, type) {
                const toast = document.getElementById('toast');
                toast.textContent = message;
                toast.className = `toast ${type}`;
                toast.classList.add('show');
                
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
            }

            // Delete saved news - using event delegation
            $(document).on('click', '.delete-btn', function(e) {
                e.preventDefault();
                console.log('Delete button clicked');
                
                const button = $(this);
                const newsId = button.data('id');
                const newsCard = button.closest('.news-card');
                
                console.log('News ID:', newsId);
                
                if (!newsId) {
                    showToast('সংবাদ ID পাওয়া যায়নি!', 'error');
                    return;
                }
                
                if (confirm('আপনি কি এই সংবাদটি মুছে ফেলতে চান?')) {
                    console.log('User confirmed deletion');
                    
                    // Show loading state
                    button.prop('disabled', true);
                    button.html('<i class="fas fa-spinner fa-spin"></i> মুছছে...');
                    
                    $.ajax({
                        url: `/saved-news/${newsId}`,
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            'Content-Type': 'application/json',
                        },
                        success: function(data) {
                            console.log('Delete response:', data);
                            
                            if (data.success) {
                                // Remove the news card with animation
                                newsCard.css({
                                    'transform': 'scale(0)',
                                    'opacity': '0',
                                    'transition': 'all 0.3s ease'
                                });
                                
                                setTimeout(() => {
                                    newsCard.remove();
                                    // Check if no more news cards
                                    if ($('.news-card').length === 0) {
                                        location.reload(); // Reload to show empty state
                                    }
                                }, 300);
                                
                                showToast(data.message || 'সংবাদ সফলভাবে মুছে ফেলা হয়েছে!', 'success');
                            } else {
                                showToast(data.message || 'সংবাদ মুছতে ত্রুটি হয়েছে!', 'error');
                                // Reset button
                                button.prop('disabled', false);
                                button.html('<i class="fas fa-trash"></i> মুছুন');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error:', xhr, status, error);
                            console.error('Response text:', xhr.responseText);
                            
                            let errorMessage = 'সংবাদ মুছতে ত্রুটি হয়েছে!';
                            
                            try {
                                const response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMessage = response.message;
                                }
                            } catch (e) {
                                console.error('Could not parse error response');
                            }
                            
                            showToast(errorMessage, 'error');
                            
                            // Reset button
                            button.prop('disabled', false);
                            button.html('<i class="fas fa-trash"></i> মুছুন');
                        }
                    });
                } else {
                    console.log('User cancelled deletion');
                }
            });
        });
    </script>
</body>
</html>
