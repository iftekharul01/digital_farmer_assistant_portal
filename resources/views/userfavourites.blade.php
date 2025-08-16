@include('partials.header')

<style>
    .page-content {
        margin-top: 20px;
        min-height: calc(100vh - 100px);
    }

    .favourites-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .favourites-header {
        background: linear-gradient(135deg, var(--primary-green), #0a8220);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
        text-align: center;
    }

    .favourites-card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 20px;
    }

    .card-title {
        color: var(--primary-green);
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
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

    .empty-state {
        text-align: center;
        padding: 60px 20px;
        color: #666;
    }

    .empty-state i {
        font-size: 4rem;
        color: #ddd;
        margin-bottom: 20px;
    }

    .empty-state h3 {
        color: var(--text-color-dark);
        margin-bottom: 10px;
    }

    .empty-state p {
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .btn-primary {
        background: var(--primary-green);
        color: white;
        padding: 12px 30px;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-primary:hover {
        background: #0a8220;
        transform: translateY(-1px);
        color: white;
        text-decoration: none;
    }

    .favourites-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .favourite-item {
        background: white;
        border: 2px solid #f0f0f0;
        border-radius: 12px;
        padding: 20px;
        transition: all 0.2s;
        position: relative;
    }

    .favourite-item:hover {
        border-color: var(--primary-green);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(11,212,41,0.15);
    }

    .favourite-header {
        display: flex;
        justify-content: between;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .favourite-icon {
        background: var(--light-green);
        color: var(--primary-green);
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .favourite-content {
        flex: 1;
    }

    .favourite-title {
        font-weight: 700;
        color: var(--text-color-dark);
        margin-bottom: 5px;
        font-size: 1.1rem;
    }

    .favourite-description {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    .favourite-meta {
        font-size: 0.8rem;
        color: #999;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .remove-favourite {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #ff4757;
        color: white;
        border: none;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
        opacity: 0;
    }

    .favourite-item:hover .remove-favourite {
        opacity: 1;
    }

    .remove-favourite:hover {
        background: #ff3742;
        transform: scale(1.1);
    }

    .quick-access {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
    }

    .quick-access h3 {
        color: var(--primary-green);
        margin-bottom: 15px;
        font-size: 1.2rem;
    }

    .quick-links {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
    }

    .quick-link {
        background: white;
        padding: 15px;
        border-radius: 8px;
        text-decoration: none;
        color: var(--text-color-dark);
        transition: all 0.2s;
        border: 2px solid transparent;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .quick-link:hover {
        background: var(--light-green);
        border-color: var(--primary-green);
        color: var(--primary-green);
        text-decoration: none;
        transform: translateY(-1px);
    }

    @media (max-width: 768px) {
        .favourites-container {
            padding: 15px;
        }

        .favourites-card {
            padding: 20px;
        }

        .settings-navigation {
            flex-direction: column;
        }

        .favourites-grid {
            grid-template-columns: 1fr;
        }

        .quick-links {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="page-content">
    <div class="favourites-container">
        <div class="favourites-header">
            <h1><i class="fas fa-heart"></i> আমার পছন্দের তালিকা</h1>
            <p>আপনার সংরক্ষিত এবং পছন্দের আইটেমগুলি এখানে দেখুন</p>
        </div>

        <div class="settings-navigation">
            <a href="/user-profile" class="nav-item">
                <i class="fas fa-user"></i> প্রোফাইল
            </a>
            <a href="/user-settings" class="nav-item">
                <i class="fas fa-cog"></i> সেটিংস
            </a>
            <a href="/user-favourites" class="nav-item active">
                <i class="fas fa-heart"></i> পছন্দের তালিকা
            </a>
        </div>

        <!-- Quick Access -->
        <div class="quick-access">
            <h3><i class="fas fa-star"></i> দ্রুত অ্যাক্সেস</h3>
            <div class="quick-links">
                <a href="/market-prices" class="quick-link">
                    <i class="fas fa-chart-line"></i>
                    <span>বাজার দর</span>
                </a>
                <a href="/weather" class="quick-link">
                    <i class="fas fa-cloud-sun"></i>
                    <span>আবহাওয়া</span>
                </a>
                <a href="/crop-doctor" class="quick-link">
                    <i class="fas fa-leaf"></i>
                    <span>ফসল ডাক্তার</span>
                </a>
                <a href="/subsidies-news" class="quick-link">
                    <i class="fas fa-newspaper"></i>
                    <span>ভর্তুকি/সংবাদ</span>
                </a>
                <a href="/tutorials" class="quick-link">
                    <i class="fas fa-video"></i>
                    <span>টিউটোরিয়াল</span>
                </a>
            </div>
        </div>

        @if(empty($favourites))
            <!-- Empty State -->
            <div class="favourites-card">
                <div class="empty-state">
                    <i class="fas fa-heart"></i>
                    <h3>এখনও কোনো পছন্দের আইটেম নেই</h3>
                    <p>
                        আপনি এখনও কোনো আইটেম পছন্দের তালিকায় যোগ করেননি।<br>
                        বিভিন্ন পেজে গিয়ে আপনার পছন্দের তথ্য সংরক্ষণ করুন।
                    </p>
                    <a href="/market-prices" class="btn-primary">
                        <i class="fas fa-search"></i> বাজার দর দেখুন
                    </a>
                </div>
            </div>
        @else
            <!-- Favourites List -->
            <div class="favourites-card">
                <h2 class="card-title">
                    <i class="fas fa-bookmark"></i>
                    সংরক্ষিত আইটেম ({{ count($favourites) }})
                </h2>

                <div class="favourites-grid">
                    @foreach($favourites as $favourite)
                        <div class="favourite-item">
                            <button class="remove-favourite" onclick="removeFavourite({{ $favourite->id }})">
                                <i class="fas fa-times"></i>
                            </button>
                            
                            <div class="favourite-header">
                                <div class="favourite-icon">
                                    <i class="fas fa-{{ $favourite->icon ?? 'star' }}"></i>
                                </div>
                                <div class="favourite-content">
                                    <div class="favourite-title">{{ $favourite->title }}</div>
                                    <div class="favourite-description">{{ $favourite->description }}</div>
                                    <div class="favourite-meta">
                                        <span><i class="fas fa-calendar"></i> {{ $favourite->created_at->format('d M Y') }}</span>
                                        <span><i class="fas fa-tag"></i> {{ $favourite->category ?? 'সাধারণ' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- How to Add Favourites -->
        <div class="favourites-card">
            <h2 class="card-title">
                <i class="fas fa-question-circle"></i>
                কীভাবে পছন্দের তালিকায় যোগ করবেন?
            </h2>

            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary-green);">
                <h4 style="color: var(--primary-green); margin-bottom: 15px;">নির্দেশনা:</h4>
                <ul style="color: #666; line-height: 1.6;">
                    <li><strong>বাজার দর:</strong> যেকোনো পণ্যের পাশে ❤️ আইকনে ক্লিক করুন</li>
                    <li><strong>আবহাওয়া:</strong> আপনার এলাকার আবহাওয়া তথ্য সংরক্ষণ করুন</li>
                    <li><strong>ফসল ডাক্তার:</strong> গুরুত্বপূর্ণ সমাধান বুকমার্ক করুন</li>
                    <li><strong>টিউটোরিয়াল:</strong> উপকারী ভিডিও এবং গাইড সেভ করুন</li>
                    <li><strong>সংবাদ:</strong> গুরুত্বপূর্ণ খবর এবং ভর্তুকি তথ্য সংরক্ষণ করুন</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function removeFavourite(id) {
    if (confirm('আপনি কি এই আইটেমটি পছন্দের তালিকা থেকে সরাতে চান?')) {
        // Here you would normally send an AJAX request to remove the favourite
        // For now, we'll just remove the element from the DOM
        event.target.closest('.favourite-item').remove();
        
        // Show success message
        alert('আইটেমটি পছন্দের তালিকা থেকে সরানো হয়েছে।');
        
        // Check if no favourites left
        const grid = document.querySelector('.favourites-grid');
        if (grid && grid.children.length === 0) {
            location.reload(); // Reload to show empty state
        }
    }
}
</script>

@include('partials.footer')
