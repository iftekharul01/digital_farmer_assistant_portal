@include('partials.header')

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
        --off-white-bg: #fdfdfd;
        --soft-gray-border: #eee;
    }

    body {
        background: linear-gradient(135deg, #f8fffe 0%, #f0fff4 50%, #e8f5e8 100%);
        min-height: 100vh;
        margin: 0;
        font-family: 'Manrope', sans-serif;
        color: var(--text-color-dark);
    }

    .announcements-container {
        width: 100%;
        max-width: none;
        padding: 20px;
        margin: 0;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary-green), var(--dark-green));
        color: white;
        padding: 60px 40px;
        text-align: center;
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        opacity: 0.3;
        animation: float 20s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(2deg); }
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        opacity: 0.9;
        margin-bottom: 0;
        font-weight: 500;
    }

    .filters-area {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 25px;
        padding: 30px;
        margin-bottom: 40px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        border: 1px solid rgba(255,255,255,0.2);
    }

    .filters-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr auto;
        gap: 20px;
        align-items: end;
    }

    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .filter-label {
        font-weight: 700;
        color: var(--dark-green);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .filter-select,
    .filter-search {
        padding: 12px 16px;
        border: 2px solid var(--border-light);
        border-radius: 12px;
        font-family: 'Manrope', sans-serif;
        font-size: 1rem;
        background: white;
        transition: all 0.3s ease;
    }

    .filter-select:focus,
    .filter-search:focus {
        outline: none;
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.1);
    }

    .filter-btn {
        background: var(--primary-green);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
    }

    .filter-btn:hover {
        background: var(--dark-green);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px var(--shadow-medium);
    }

    .stats-ribbon {
        background: var(--light-green);
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 40px;
        display: flex;
        justify-content: space-around;
        text-align: center;
        border: 2px solid var(--border-light);
    }

    .stat-box {
        color: var(--text-color-dark);
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 900;
        color: var(--primary-green);
        margin-bottom: 5px;
        display: block;
    }

    .stat-label {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        opacity: 0.8;
    }

    .announcements-masonry {
        columns: 3;
        column-gap: 30px;
        margin-bottom: 40px;
    }

    .announcement-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        margin-bottom: 30px;
        break-inside: avoid;
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 2px solid transparent;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }

    .announcement-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        border-color: var(--primary-green);
    }

    .announcement-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--category-color, var(--primary-green)), var(--priority-color, var(--dark-green)));
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .category-tag {
        background: var(--category-color, var(--primary-green));
        color: white;
        padding: 8px 15px;
        border-radius: 25px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .priority-indicator {
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--priority-color, var(--dark-green));
        position: relative;
    }

    .priority-high {
        background: #ff4757 !important;
        animation: pulse-high 2s infinite;
    }

    .priority-medium {
        background: #ffa502 !important;
    }

    .priority-low {
        background: #2ed573 !important;
    }

    @keyframes pulse-high {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.3); opacity: 0.7; }
    }

    .announcement-title {
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--dark-green);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .announcement-subtitle {
        font-size: 1rem;
        font-weight: 600;
        color: var(--primary-green);
        margin-bottom: 15px;
        opacity: 0.9;
    }

    .announcement-description {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--text-color-dark);
        margin-bottom: 20px;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
        border-top: 2px solid #f8f9fa;
    }

    .announcement-date {
        font-size: 0.85rem;
        color: #7f8c8d;
        display: flex;
        align-items: center;
        gap: 5px;
        font-weight: 500;
    }

    .new-badge {
        background: linear-gradient(45deg, var(--primary-green), var(--dark-green));
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        animation: glow-green 2s ease-in-out infinite alternate;
    }

    @keyframes glow-green {
        from { box-shadow: 0 0 5px var(--primary-green); }
        to { box-shadow: 0 0 20px var(--primary-green), 0 0 30px var(--shadow-light); }
    }

    .pagination-area {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .pagination {
        background: var(--light-green);
        border-radius: 20px;
        padding: 15px 25px;
        border: 2px solid var(--border-light);
    }

    .pagination a,
    .pagination span {
        color: var(--text-color-dark) !important;
        padding: 10px 15px;
        margin: 0 3px;
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .pagination a:hover,
    .pagination .active span {
        background: var(--primary-green);
        color: white !important;
        transform: scale(1.1);
    }

    .empty-state {
        text-align: center;
        padding: 100px 20px;
        color: var(--text-color-dark);
    }

    .empty-state h3 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: var(--primary-green);
        font-weight: 800;
    }

    .empty-state p {
        font-size: 1.2rem;
        opacity: 0.7;
        color: var(--text-color-dark);
    }

    @media (max-width: 1200px) {
        .announcements-masonry {
            columns: 2;
        }
    }

    @media (max-width: 768px) {
        .announcements-container {
            padding: 10px;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
        }

        .filters-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .announcements-masonry {
            columns: 1;
        }

        .stats-ribbon {
            flex-direction: column;
            gap: 20px;
        }
    }
</style>

<div class="announcements-container">
    <div class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">ঘোষণা ও সংবাদ</h1>
            <p class="hero-subtitle">কৃষি উন্নয়নের সর্বশেষ ঘোষণা, প্রশিক্ষণ এবং গুরুত্বপূর্ণ তথ্য</p>
        </div>
    </div>

    <div class="filters-area">
        <form method="GET" action="{{ route('announcements') }}">
            <div class="filters-grid">
                <div class="filter-group">
                    <label class="filter-label">ক্যাটেগরি</label>
                    <select name="category" class="filter-select">
                        <option value="">সব ক্যাটেগরি</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                {{ ucfirst($category) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">অগ্রাধিকার</label>
                    <select name="priority" class="filter-select">
                        <option value="">সব অগ্রাধিকার</option>
                        @foreach($priorities as $priority)
                            <option value="{{ $priority }}" {{ request('priority') == $priority ? 'selected' : '' }}>
                                {{ $priority == 'high' ? 'উচ্চ' : ($priority == 'medium' ? 'মধ্যম' : 'নিম্ন') }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="filter-group">
                    <label class="filter-label">খুঁজুন</label>
                    <input type="text" name="search" class="filter-search" placeholder="শিরোনাম বা বিবরণে খুঁজুন..." value="{{ request('search') }}">
                </div>
                
                <button type="submit" class="filter-btn">ফিল্টার</button>
            </div>
        </form>
    </div>

    <div class="stats-ribbon">
        <div class="stat-box">
            <span class="stat-number">{{ $announcements->total() }}</span>
            <span class="stat-label">মোট ঘোষণা</span>
        </div>
        <div class="stat-box">
            <span class="stat-number">{{ $categories->count() }}</span>
            <span class="stat-label">ক্যাটেগরি</span>
        </div>
        <div class="stat-box">
            <span class="stat-number">{{ $announcements->where('priority', 'high')->count() }}</span>
            <span class="stat-label">জরুরি ঘোষণা</span>
        </div>
    </div>

    @if($announcements->count() > 0)
        <div class="announcements-masonry">
            @foreach($announcements as $announcement)
                <div class="announcement-card" 
                     style="--category-color: {{ $announcement->category_color }}; --priority-color: {{ $announcement->priority_color }}">
                    <div class="card-header">
                        <span class="category-tag" style="background: {{ $announcement->category_color }}">
                            {{ ucfirst($announcement->category) }}
                        </span>
                        <div class="priority-indicator priority-{{ $announcement->priority }}" 
                             style="background: {{ $announcement->priority_color }}"></div>
                    </div>
                    
                    <h3 class="announcement-title">{{ $announcement->title }}</h3>
                    
                    @if($announcement->subtitle)
                        <h4 class="announcement-subtitle">{{ $announcement->subtitle }}</h4>
                    @endif
                    
                    <div class="announcement-description">
                        {{ Str::limit($announcement->description, 150) }}
                    </div>
                    
                    <div class="card-footer">
                        <span class="announcement-date">
                            <i class="fas fa-calendar-alt"></i>
                            {{ $announcement->created_at->format('M d, Y') }}
                        </span>
                        @if($announcement->isNew())
                            <span class="new-badge">নতুন</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-area">
            {{ $announcements->links() }}
        </div>
    @else
        <div class="empty-state">
            <h3>কোনো ঘোষণা পাওয়া যায়নি</h3>
            <p>আপনার ফিল্টার অনুযায়ী কোনো ঘোষণা খুঁজে পাওয়া যায়নি। অনুগ্রহ করে অন্য ফিল্টার ব্যবহার করুন।</p>
        </div>
    @endif
</div>

@include('partials.footer')

<script>
    // Auto-refresh announcements every 5 minutes
    setInterval(function() {
        if (document.hidden === false) {
            // Only refresh if user is actively viewing the page
            window.location.reload();
        }
    }, 300000); // 5 minutes

    // Smooth scroll for pagination
    document.querySelectorAll('.pagination a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            setTimeout(() => {
                window.location.href = this.href;
            }, 300);
        });
    });

    // Filter form enhancements
    const filterForm = document.querySelector('form');
    const filterInputs = filterForm.querySelectorAll('select, input');
    
    filterInputs.forEach(input => {
        input.addEventListener('change', function() {
            if (this.type !== 'text') {
                filterForm.submit();
            }
        });
    });

    // Search input debounce
    const searchInput = document.querySelector('input[name="search"]');
    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            filterForm.submit();
        }, 1000);
    });
</script>
