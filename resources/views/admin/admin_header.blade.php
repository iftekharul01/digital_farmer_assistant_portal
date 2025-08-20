<!-- Admin Dashboard Header (Bangla) -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<header class="admin-header">
    <div class="admin-nav">
        <div class="admin-logo">
            <i class="fas fa-seedling"></i> কৃষক পোর্টাল অ্যাডমিন
        </div>
        <div class="admin-user">
            <span><i class="fas fa-user-shield"></i> অ্যাডমিন</span>
            <form method="POST" action="{{ route('admin.logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i> লগআউট
                </button>
            </form>
        </div>
    </div>
</header>

<style>
    .admin-header {
        background: #0bd429;
        color: white;
        padding: 20px 0;
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

    .admin-logo {
        font-size: 1.5rem;
        font-weight: 800;
        font-family: 'Manrope', sans-serif;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .admin-logo i {
        font-size: 1.8rem;
        color: #ffffff;
    }

    .admin-user {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .admin-user span {
        font-weight: 600;
    }

    .logout-btn {
        background: rgba(255,255,255,0.2);
        border: 1px solid rgba(255,255,255,0.3);
        color: white;
        padding: 8px 16px;
        border-radius: 6px;
        text-decoration: none;
        transition: background 0.2s;
        font-family: 'Manrope', sans-serif;
        cursor: pointer;
        font-size: 14px;
    }

    .logout-btn:hover {
        background: rgba(255,255,255,0.3);
        color: white;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .admin-nav {
            padding: 0 15px;
        }
        
        .admin-logo {
            font-size: 1.2rem;
        }
        
        .admin-user span {
            display: none;
        }
    }
</style>

<script>
    // Prevent back button access after admin logout
    window.addEventListener('pageshow', function(event) {
        if (event.persisted || window.performance && window.performance.navigation.type === 2) {
            // Check if admin is logged in
            @if(!Session::get('admin_logged_in'))
                window.location.href = '{{ route('admin.login') }}';
            @endif
        }
    });

    // Disable cache for admin pages
    window.addEventListener('beforeunload', function() {
        // Clear any cached data
        if (window.history && window.history.pushState) {
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.location.href = '{{ route('admin.login') }}';
            };
        }
    });
</script>

<!-- End Admin Header -->
