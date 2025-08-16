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
        background: #f9fafb;
        min-height: 100vh;
        margin: 0;
        font-family: 'Manrope', sans-serif;
        color: var(--text-color-dark);
    }

    .notifications-wrapper {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        margin: 20px;
        padding: 30px;
        box-shadow: 0 8px 32px var(--shadow-card);
        border: 1px solid var(--border-light);
    }

    .page-header {
        text-align: center;
        margin-bottom: 40px;
        color: var(--primary-green);
    }

    .page-header h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 10px;
        text-shadow: 2px 2px 4px var(--shadow-light);
        color: var(--primary-green);
    }

    .page-header p {
        font-size: 1.2rem;
        opacity: 0.8;
        color: var(--text-color-dark);
        text-shadow: 1px 1px 2px var(--shadow-light);
    }

    .filters-section {
        background: var(--light-green);
        backdrop-filter: blur(15px);
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 30px;
        border: 1px solid var(--border-light);
    }

    .filters-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr auto;
        gap: 20px;
        align-items: end;
    }

    .filter-group {
        display: flex;
        flex-direction: column;
    }

    .filter-group label {
        color: white;
        font-weight: 600;
        margin-bottom: 8px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .filter-group select,
    .filter-group input {
        padding: 12px;
        border: none;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .filter-group select:focus,
    .filter-group input:focus {
        outline: none;
        background: white;
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    .filter-btn {
        background: var(--primary-green);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .filter-btn:hover {
        transform: translateY(-2px);
        background: var(--dark-green);
        box-shadow: 0 8px 25px var(--shadow-medium);
    }

    .notifications-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        gap: 25px;
        margin-bottom: 40px;
    }

    .notification-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 25px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        border: 1px solid var(--border-light);
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 15px var(--shadow-card);
    }

    .notification-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px var(--shadow-medium);
    }

    .notification-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(45deg, var(--category-color, var(--primary-green)), var(--priority-color, var(--dark-green)));
    }

    .notification-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .notification-category {
        background: var(--category-color, var(--primary-green));
        color: white;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .notification-priority {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: var(--priority-color, var(--dark-green));
        position: relative;
    }

    .priority-high {
        background: #ff4757 !important;
        animation: pulse 2s infinite;
    }

    .priority-medium {
        background: #ffa502 !important;
    }

    .priority-low {
        background: #2ed573 !important;
    }

    @keyframes pulse {
        0% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.2); opacity: 0.7; }
        100% { transform: scale(1); opacity: 1; }
    }

    .notification-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .notification-subtitle {
        font-size: 1rem;
        color: #7f8c8d;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .notification-description {
        color: #34495e;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .notification-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid #ecf0f1;
    }

    .notification-date {
        font-size: 0.9rem;
        color: #95a5a6;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .new-badge {
        background: linear-gradient(45deg, var(--primary-green), var(--dark-green));
        color: white;
        padding: 4px 10px;
        border-radius: 15px;
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        animation: glow 2s ease-in-out infinite alternate;
    }

    @keyframes glow {
        from { box-shadow: 0 0 5px var(--primary-green); }
        to { box-shadow: 0 0 20px var(--primary-green), 0 0 30px var(--shadow-light); }
    }

    .empty-state {
        text-align: center;
        padding: 80px 20px;
        color: var(--text-color-dark);
    }

    .empty-state h3 {
        font-size: 2rem;
        margin-bottom: 15px;
        opacity: 0.8;
        color: var(--primary-green);
    }

    .empty-state p {
        font-size: 1.1rem;
        opacity: 0.7;
        color: var(--text-color-dark);
    }

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .pagination {
        background: var(--light-green);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 10px 20px;
        border: 1px solid var(--border-light);
    }

    .pagination a,
    .pagination span {
        color: var(--text-color-dark) !important;
        padding: 8px 12px;
        margin: 0 2px;
        border-radius: 8px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .pagination a:hover,
    .pagination .active span {
        background: var(--primary-green);
        color: white !important;
        transform: scale(1.1);
    }

    .stats-bar {
        background: var(--light-green);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 30px;
        display: flex;
        justify-content: space-around;
        text-align: center;
        border: 1px solid var(--border-light);
    }

    .stat-item {
        color: var(--text-color-dark);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 800;
        color: var(--primary-green);
        text-shadow: 2px 2px 4px var(--shadow-light);
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.8;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--text-color-dark);
    }

    @media (max-width: 768px) {
        .notifications-wrapper {
            margin: 10px;
            padding: 20px;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .filters-row {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .notifications-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .stats-bar {
            flex-direction: column;
            gap: 15px;
        }
    }
</style>


<div class="notifications-wrapper">
    <div class="page-header">
        <h1>📢 নোটিফিকেশন সেন্টার</h1>
        <p>সর্বশেষ আপডেট এবং গুরুত্বপূর্ণ তথ্য পান</p>
    </div>

    <div class="stats-bar">
        <div class="stat-item">
            <div class="stat-number">{{ $notifications->total() }}</div>
            <div class="stat-label">মোট নোটিফিকেশন</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">{{ $categories->count() }}</div>
            <div class="stat-label">ক্যাটেগরি</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">{{ $notifications->where('created_at', '>=', now()->subDays(7))->count() }}</div>
            <div class="stat-label">এই সপ্তাহের</div>
        </div>
    </div>

    <form method="GET" class="filters-section">
        <div class="filters-row">
            <div class="filter-group">
                <label for="category">ক্যাটেগরি</label>
                <select name="category" id="category">
                    <option value="">সব ক্যাটেগরি</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="filter-group">
                <label for="priority">অগ্রাধিকার</label>
                <select name="priority" id="priority">
                    <option value="">সব অগ্রাধিকার</option>
                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>উচ্চ</option>
                    <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>মাঝারি</option>
                    <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>নিম্ন</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="search">খুঁজুন</label>
                <input type="text" name="search" id="search" placeholder="শিরোনাম বা বিবরণে খুঁজুন" value="{{ request('search') }}">
            </div>
            <div class="filter-group">
                <button type="submit" class="filter-btn">ফিল্টার</button>
            </div>
        </div>
    </form>

    @if($notifications->count() > 0)
        <div class="notifications-grid">
            @foreach($notifications as $notification)
                <div class="notification-card" 
                     style="--category-color: {{ $notification->category_color }}; --priority-color: {{ $notification->priority_color }}">
                    
                    <div class="notification-header">
                        <span class="notification-category" style="background: {{ $notification->category_color }}">
                            {{ $notification->category }}
                        </span>
                        <div class="notification-priority priority-{{ $notification->priority }}" 
                             title="অগ্রাধিকার: {{ $notification->priority == 'high' ? 'উচ্চ' : ($notification->priority == 'medium' ? 'মাঝারি' : 'নিম্ন') }}">
                        </div>
                    </div>

                    <h3 class="notification-title">{{ $notification->title }}</h3>
                    
                    @if($notification->subtitle)
                        <p class="notification-subtitle">{{ $notification->subtitle }}</p>
                    @endif

                    <div class="notification-description">
                        {{ Str::limit($notification->description, 150) }}
                        @if(strlen($notification->description) > 150)
                            <a href="#" onclick="toggleDescription({{ $notification->id }})" style="color: #3498db; text-decoration: none;">
                                আরো পড়ুন...
                            </a>
                            <div id="full-desc-{{ $notification->id }}" style="display: none; margin-top: 10px;">
                                {{ $notification->description }}
                                <a href="#" onclick="toggleDescription({{ $notification->id }})" style="color: #3498db; text-decoration: none;">
                                    কম দেখুন
                                </a>
                            </div>
                        @endif
                    </div>

                    <div class="notification-footer">
                        <span class="notification-date">
                            <i class="fas fa-clock"></i>
                            {{ $notification->created_at->diffForHumans() }}
                        </span>
                        @if($notification->isNew())
                            <span class="new-badge">নতুন</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-wrapper">
            {{ $notifications->withQueryString()->links() }}
        </div>
    @else
        <div class="empty-state">
            <h3>🔍 কোনো নোটিফিকেশন পাওয়া যায়নি</h3>
            <p>আপনার ফিল্টার অনুযায়ী কোনো নোটিফিকেশন খুঁজে পাওয়া যায়নি।</p>
        </div>
    @endif
</div>

<script>
function toggleDescription(id) {
    const fullDesc = document.getElementById('full-desc-' + id);
    const card = fullDesc.closest('.notification-card');
    const shortDesc = card.querySelector('.notification-description');
    
    if (fullDesc.style.display === 'none') {
        fullDesc.style.display = 'block';
        shortDesc.querySelector('a').style.display = 'none';
    } else {
        fullDesc.style.display = 'none';
        shortDesc.querySelector('a').style.display = 'inline';
    }
}

// Auto-submit form on filter change
document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('#category, #priority');
    filters.forEach(filter => {
        filter.addEventListener('change', function() {
            this.form.submit();
        });
    });
});
</script>

@include('partials.footer')
