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

    .profile-form {
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .form-section {
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #eee;
    }

    .form-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
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

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        margin-bottom: 20px;
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

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e1e5e9;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.2s;
        font-family: 'Manrope', sans-serif;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: var(--primary-green);
    }

    .form-group textarea {
        resize: vertical;
        min-height: 100px;
    }

    .file-upload {
        border: 2px dashed #ddd;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        transition: border-color 0.2s;
        cursor: pointer;
    }

    .file-upload:hover {
        border-color: var(--primary-green);
    }

    .file-upload input {
        display: none;
    }

    .file-upload-text {
        color: #666;
        font-size: 0.9rem;
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

    @media (max-width: 768px) {
        .form-row {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .profile-container {
            padding: 15px;
        }

        .profile-form {
            padding: 20px;
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
                @if($userInfo && $userInfo->profile_image)
                    <img src="{{ asset('storage/' . $userInfo->profile_image) }}" alt="প্রোফাইল ছবি">
                @else
                    <i class="fas fa-user"></i>
                @endif
            </div>
            <h1>{{ $userInfo ? $userInfo->full_name : $user->username }}</h1>
            <p>{{ $userInfo ? $userInfo->profession : 'কৃষক সদস্য' }}</p>
        </div>

        <!-- Profile content starts here -->
        <form action="/user-profile/update" method="POST" enctype="multipart/form-data" class="profile-form">
            @csrf
            
            <!-- Personal Information -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-user"></i>
                    ব্যক্তিগত তথ্য
                </h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="full_name">পূর্ণ নাম *</label>
                        <input type="text" id="full_name" name="full_name" 
                               value="{{ old('full_name', $userInfo ? $userInfo->full_name : $user->username) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">ইমেইল *</label>
                        <input type="email" id="email" name="email" 
                               value="{{ old('email', $userInfo ? $userInfo->email : $user->email) }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">ফোন নম্বর *</label>
                        <input type="tel" id="phone" name="phone" 
                               value="{{ old('phone', $userInfo ? $userInfo->phone : '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="date_of_birth">জন্ম তারিখ</label>
                        <input type="date" id="date_of_birth" name="date_of_birth" 
                               value="{{ old('date_of_birth', $userInfo ? $userInfo->date_of_birth : '') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="gender">লিঙ্গ</label>
                        <select id="gender" name="gender">
                            <option value="">নির্বাচন করুন</option>
                            <option value="পুরুষ" {{ old('gender', $userInfo ? $userInfo->gender : '') == 'পুরুষ' ? 'selected' : '' }}>পুরুষ</option>
                            <option value="মহিলা" {{ old('gender', $userInfo ? $userInfo->gender : '') == 'মহিলা' ? 'selected' : '' }}>মহিলা</option>
                            <option value="অন্যান্য" {{ old('gender', $userInfo ? $userInfo->gender : '') == 'অন্যান্য' ? 'selected' : '' }}>অন্যান্য</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profession">পেশা</label>
                        <input type="text" id="profession" name="profession" 
                               value="{{ old('profession', $userInfo ? $userInfo->profession : '') }}" placeholder="যেমন: ধান চাষী, সবজি চাষী">
                    </div>
                </div>
            </div>

            <!-- Address Information -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-map-marker-alt"></i>
                    ঠিকানা
                </h2>

                <div class="form-group">
                    <label for="address">সম্পূর্ণ ঠিকানা</label>
                    <textarea id="address" name="address" placeholder="গ্রাম, ডাকঘর, থানা">{{ old('address', $userInfo ? $userInfo->address : '') }}</textarea>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="district">জেলা</label>
                        <input type="text" id="district" name="district" 
                               value="{{ old('district', $userInfo ? $userInfo->district : '') }}" placeholder="যেমন: ঢাকা">
                    </div>
                    <div class="form-group">
                        <label for="upazila">উপজেলা</label>
                        <input type="text" id="upazila" name="upazila" 
                               value="{{ old('upazila', $userInfo ? $userInfo->upazila : '') }}" placeholder="যেমন: সাভার">
                    </div>
                </div>
            </div>

            <!-- Farming Information -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-seedling"></i>
                    কৃষি তথ্য
                </h2>

                <div class="form-row">
                    <div class="form-group">
                        <label for="farm_size">জমির পরিমাণ</label>
                        <input type="text" id="farm_size" name="farm_size" 
                               value="{{ old('farm_size', $userInfo ? $userInfo->farm_size : '') }}" placeholder="যেমন: ২ বিঘা, ১ একর">
                    </div>
                    <div class="form-group">
                        <label for="main_crops">প্রধান ফসল</label>
                        <input type="text" id="main_crops" name="main_crops" 
                               value="{{ old('main_crops', $userInfo ? $userInfo->main_crops : '') }}" placeholder="যেমন: ধান, গম, সবজি">
                    </div>
                </div>

                <div class="form-group">
                    <label for="bio">সংক্ষিপ্ত পরিচয়</label>
                    <textarea id="bio" name="bio" placeholder="আপনার সম্পর্কে কিছু লিখুন">{{ old('bio', $userInfo ? $userInfo->bio : '') }}</textarea>
                </div>
            </div>

            <!-- Profile Picture -->
            <div class="form-section">
                <h2 class="section-title">
                    <i class="fas fa-camera"></i>
                    প্রোফাইল ছবি
                </h2>

                <div class="form-group">
                    <div class="file-upload" onclick="document.getElementById('profile_image').click()">
                        <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: var(--primary-green); margin-bottom: 10px;"></i>
                        <div class="file-upload-text">
                            <strong>ছবি আপলোড করতে ক্লিক করুন</strong><br>
                            অথবা এখানে ছবি টেনে আনুন<br>
                            <small>(JPG, PNG, GIF - সর্বোচ্চ ২MB)</small>
                        </div>
                        <input type="file" id="profile_image" name="profile_image" accept="image/*">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn-primary">
                <i class="fas fa-save"></i> প্রোফাইল সংরক্ষণ করুন
            </button>
        </form>
    </div>
</div>

@include('partials.footer')
