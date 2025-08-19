@include('partials.header')

<style>
    .page-content {
        margin-top: 20px;
        min-height: calc(100vh - 100px);
    }

    .settings-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .settings-header {
        background: linear-gradient(135deg, var(--primary-green), #0a8220);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
        text-align: center;
    }

    .settings-card {
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

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--text-color-dark);
    }

    .form-group input {
        width: 100%;
        padding: 12px;
        border: 2px solid #e1e5e9;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.2s;
        font-family: 'Manrope', sans-serif;
    }

    .form-group input:focus {
        outline: none;
        border-color: var(--primary-green);
    }

    .password-requirements {
        background: #f8f9fa;
        border-left: 4px solid var(--primary-green);
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 8px 8px 0;
    }

    .password-requirements h4 {
        color: var(--primary-green);
        margin: 0 0 10px;
        font-size: 1rem;
    }

    .password-requirements ul {
        margin: 0;
        padding-left: 20px;
        color: #666;
    }

    .password-requirements li {
        margin-bottom: 5px;
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
    }

    .btn-primary:hover {
        background: #0a8220;
        transform: translateY(-1px);
    }

    .btn-secondary {
        background: #6c757d;
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

    .btn-secondary:hover {
        background: #5a6268;
        color: white;
        text-decoration: none;
    }

    .alert {
        padding: 15px;
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

    .user-info {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .user-info h4 {
        color: var(--primary-green);
        margin: 0 0 10px;
    }

    .user-info p {
        margin: 5px 0;
        color: #666;
    }

    @media (max-width: 768px) {
        .settings-container {
            padding: 15px;
        }

        .settings-card {
            padding: 20px;
        }
    }
</style>

<div class="page-content">
    <div class="settings-container">
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
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

        <div class="settings-header">
            <h1><i class="fas fa-cog"></i> অ্যাকাউন্ট সেটিংস</h1>
            <p>আপনার অ্যাকাউন্ট নিরাপত্তা এবং তথ্য পরিচালনা করুন</p>
        </div>

        <!-- Settings content starts here -->

        <!-- Current User Info -->
        <div class="settings-card">
            <h2 class="card-title">
                <i class="fas fa-info-circle"></i>
                বর্তমান তথ্য
            </h2>
            <div class="user-info">
                <h4>{{ $user->username }}</h4>
                <p><strong>ইমেইল:</strong> {{ $user->email }}</p>
                <p><strong>নিবন্ধন তারিখ:</strong> {{ $user->created_at->format('d M Y') }}</p>
                <p><strong>সর্বশেষ আপডেট:</strong> {{ $user->updated_at->format('d M Y') }}</p>
            </div>
        </div>

        <!-- Password Change -->
        <div class="settings-card">
            <h2 class="card-title">
                <i class="fas fa-key"></i>
                পাসওয়ার্ড পরিবর্তন
            </h2>

            <div class="password-requirements">
                <h4>পাসওয়ার্ড প্রয়োজনীয়তা:</h4>
                <ul>
                    <li>কমপক্ষে ৬ অক্ষর হতে হবে</li>
                    <li>নতুন পাসওয়ার্ড নিশ্চিতকরণ পাসওয়ার্ডের সাথে মিলতে হবে</li>
                    <li>বর্তমান পাসওয়ার্ড সঠিক হতে হবে</li>
                </ul>
            </div>

            <form action="/user-settings/update-password" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="current_password">বর্তমান পাসওয়ার্ড *</label>
                    <input type="password" id="current_password" name="current_password" required 
                           placeholder="আপনার বর্তমান পাসওয়ার্ড লিখুন">
                </div>

                <div class="form-group">
                    <label for="new_password">নতুন পাসওয়ার্ড *</label>
                    <input type="password" id="new_password" name="new_password" required 
                           placeholder="নতুন পাসওয়ার্ড লিখুন (কমপক্ষে ৬ অক্ষর)">
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">নতুন পাসওয়ার্ড নিশ্চিত করুন *</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" required 
                           placeholder="নতুন পাসওয়ার্ড পুনরায় লিখুন">
                </div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i> পাসওয়ার্ড পরিবর্তন করুন
                </button>
            </form>
        </div>

        <!-- Account Management -->
        <div class="settings-card">
            <h2 class="card-title">
                <i class="fas fa-user-cog"></i>
                অ্যাকাউন্ট পরিচালনা
            </h2>

            <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                <a href="/user-profile" class="btn-secondary">
                    <i class="fas fa-edit"></i> প্রোফাইল সম্পাদনা
                </a>
                <a href="/user-favourites" class="btn-secondary">
                    <i class="fas fa-heart"></i> পছন্দের তালিকা
                </a>
                <a href="/market-prices" class="btn-secondary">
                    <i class="fas fa-chart-line"></i> বাজার দর দেখুন
                </a>
            </div>
        </div>

        <!-- Security Tips -->
        <div class="settings-card">
            <h2 class="card-title">
                <i class="fas fa-shield-alt"></i>
                নিরাপত্তা টিপস
            </h2>

            <div class="password-requirements">
                <h4>আপনার অ্যাকাউন্ট নিরাপদ রাখার জন্য:</h4>
                <ul>
                    <li>শক্তিশালী এবং অনন্য পাসওয়ার্ড ব্যবহার করুন</li>
                    <li>নিয়মিত পাসওয়ার্ড পরিবর্তন করুন</li>
                    <li>কারো সাথে আপনার লগইন তথ্য শেয়ার করবেন না</li>
                    <li>সন্দেহজনক কার্যকলাপ দেখলে অবিলম্বে পাসওয়ার্ড পরিবর্তন করুন</li>
                    <li>পাবলিক কম্পিউটারে লগইন করার পর অবশ্যই লগআউট করুন</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
