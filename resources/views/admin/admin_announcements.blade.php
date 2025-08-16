<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Announcements | Digital Farmer Assistant</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

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
        --success-green: #28a745;
        --warning-yellow: #ffc107;
        --danger-red: #dc3545;
    }

    body {
        background: #f9fafb;
        font-family: 'Manrope', sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        color: var(--text-color-dark);
    }

    .admin-container {
        max-width: 1400px;
        margin: 20px auto;
        padding: 0 20px;
    }

    .page-header {
        background: linear-gradient(135deg, var(--primary-green), #0a8220);
        color: white;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 30px 30px;
        animation: float 15s ease-in-out infinite;
    }

    .page-header h1 {
        margin: 0;
        font-size: 2.5rem;
        font-weight: 800;
        position: relative;
        z-index: 2;
    }

    .admin-grid {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 30px;
        margin-bottom: 30px;
    }

    .admin-card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 8px 25px var(--shadow-card);
        overflow: hidden;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .admin-card:hover {
        border-color: var(--primary-green);
        transform: translateY(-5px);
    }

    .card-header {
        background: linear-gradient(135deg, var(--light-green), #f0fff4);
        padding: 25px;
        border-bottom: 2px solid var(--border-light);
    }

    .card-header h3 {
        margin: 0;
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--dark-green);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-content {
        padding: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        font-weight: 700;
        color: var(--dark-green);
        margin-bottom: 8px;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .form-input,
    .form-select,
    .form-textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid var(--border-light);
        border-radius: 10px;
        font-family: 'Manrope', sans-serif;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: white;
    }

    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        outline: none;
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px rgba(11, 212, 41, 0.1);
    }

    .form-textarea {
        min-height: 120px;
        resize: vertical;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }

    .checkbox-input {
        width: 18px;
        height: 18px;
        accent-color: var(--primary-green);
    }

    .btn {
        padding: 12px 25px;
        border: none;
        border-radius: 10px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-primary {
        background: var(--primary-green);
        color: white;
    }

    .btn-primary:hover {
        background: var(--dark-green);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px var(--shadow-medium);
    }

    .btn-warning {
        background: var(--warning-yellow);
        color: #333;
    }

    .btn-warning:hover {
        background: #e0a800;
        transform: translateY(-2px);
    }

    .btn-danger {
        background: var(--danger-red);
        color: white;
    }

    .btn-danger:hover {
        background: #c82333;
        transform: translateY(-2px);
    }

    .announcements-list {
        max-height: 600px;
        overflow-y: auto;
    }

    .announcement-item {
        background: #f8f9fa;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        position: relative;
    }

    .announcement-item:hover {
        border-color: var(--primary-green);
        transform: translateX(5px);
    }

    .announcement-item.editing {
        border-color: var(--warning-yellow);
        background: #fff9e6;
    }

    .item-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .item-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--dark-green);
        margin: 0;
    }

    .item-subtitle {
        font-size: 0.9rem;
        color: var(--primary-green);
        margin: 5px 0;
        font-weight: 600;
    }

    .item-category {
        background: var(--primary-green);
        color: white;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .item-description {
        color: var(--text-color-dark);
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .item-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.8rem;
        color: #6c757d;
    }

    .item-actions {
        display: flex;
        gap: 8px;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 0.8rem;
    }

    .priority-indicator {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        margin-right: 5px;
    }

    .priority-high { background: #ff4757; }
    .priority-medium { background: #ffa502; }
    .priority-low { background: #2ed573; }

    .status-badge {
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 0.7rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .status-active {
        background: #d4edda;
        color: #155724;
    }

    .status-inactive {
        background: #f8d7da;
        color: #721c24;
    }

    .alert {
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border: 2px solid #c3e6cb;
    }

    .edit-form {
        display: none;
        background: white;
        border: 2px solid var(--warning-yellow);
        border-radius: 12px;
        padding: 20px;
        margin-top: 15px;
    }

    .edit-form.active {
        display: block;
    }

    @media (max-width: 1200px) {
        .admin-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .admin-container {
            padding: 10px;
        }

        .page-header {
            padding: 30px 20px;
        }

        .page-header h1 {
            font-size: 2rem;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .item-header {
            flex-direction: column;
            gap: 10px;
        }

        .item-actions {
            width: 100%;
            justify-content: space-between;
        }
    }
</style>

<div class="admin-container">
    <div class="page-header">
        <h1><i class="fas fa-bullhorn"></i> ঘোষণা ব্যবস্থাপনা</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <div class="admin-grid">
        <!-- Create New Announcement Form -->
        <div class="admin-card">
            <div class="card-header">
                <h3><i class="fas fa-plus-circle"></i> নতুন ঘোষণা যোগ করুন</h3>
            </div>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.announcements.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">ক্যাটেগরি</label>
                        <select name="category" class="form-select" required>
                            <option value="">ক্যাটেগরি নির্বাচন করুন</option>
                            <option value="event">ইভেন্ট</option>
                            <option value="subsidy">ভর্তুকি</option>
                            <option value="alert">সতর্কতা</option>
                            <option value="training">প্রশিক্ষণ</option>
                            <option value="general">সাধারণ</option>
                            <option value="emergency">জরুরী</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">শিরোনাম</label>
                        <input type="text" name="title" class="form-input" placeholder="ঘোষণার শিরোনাম লিখুন" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">উপ-শিরোনাম (ঐচ্ছিক)</label>
                        <input type="text" name="subtitle" class="form-input" placeholder="উপ-শিরোনাম লিখুন">
                    </div>

                    <div class="form-group">
                        <label class="form-label">বিবরণ</label>
                        <textarea name="description" class="form-textarea" placeholder="ঘোষণার বিস্তারিত বিবরণ লিখুন" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">অগ্রাধিকার</label>
                            <select name="priority" class="form-select" required>
                                <option value="medium">মধ্যম</option>
                                <option value="high">উচ্চ</option>
                                <option value="low">নিম্ন</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">স্ট্যাটাস</label>
                            <div class="checkbox-group">
                                <input type="hidden" name="is_active" value="0">
                                <input type="checkbox" name="is_active" class="checkbox-input" value="1" checked>
                                <label>সক্রিয়</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> ঘোষণা সংরক্ষণ করুন
                    </button>
                </form>
            </div>
        </div>

        <!-- Announcements List -->
        <div class="admin-card">
            <div class="card-header">
                <h3><i class="fas fa-list"></i> বিদ্যমান ঘোষণা ({{ $announcements->count() }}টি)</h3>
            </div>
            <div class="card-content">
                <div class="announcements-list">
                    @forelse($announcements as $announcement)
                        <div class="announcement-item" id="announcement-{{ $announcement->id }}">
                            <div class="item-header">
                                <div>
                                    <h4 class="item-title">{{ $announcement->title }}</h4>
                                    @if($announcement->subtitle)
                                        <p class="item-subtitle">{{ $announcement->subtitle }}</p>
                                    @endif
                                    <span class="item-category">{{ ucfirst($announcement->category) }}</span>
                                </div>
                                <div class="item-actions">
                                    <button class="btn btn-warning btn-sm" onclick="toggleEditForm({{ $announcement->id }})">
                                        <i class="fas fa-edit"></i> সম্পাদনা
                                    </button>
                                    <form method="POST" action="{{ route('admin.announcements.destroy', $announcement->id) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('আপনি কি নিশ্চিত?')">
                                            <i class="fas fa-trash"></i> মুছুন
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="item-description">
                                {{ Str::limit($announcement->description, 150) }}
                            </div>

                            <div class="item-meta">
                                <span>
                                    <span class="priority-indicator priority-{{ $announcement->priority }}"></span>
                                    {{ $announcement->priority == 'high' ? 'উচ্চ' : ($announcement->priority == 'medium' ? 'মধ্যম' : 'নিম্ন') }} অগ্রাধিকার
                                </span>
                                <span class="status-badge {{ $announcement->is_active ? 'status-active' : 'status-inactive' }}">
                                    {{ $announcement->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়' }}
                                </span>
                                <span>{{ $announcement->created_at->format('M d, Y') }}</span>
                            </div>

                            <!-- Edit Form -->
                            <div class="edit-form" id="edit-form-{{ $announcement->id }}">
                                <form method="POST" action="{{ route('admin.announcements.update', $announcement->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="form-label">ক্যাটেগরি</label>
                                            <select name="category" class="form-select" required>
                                                <option value="event" {{ $announcement->category == 'event' ? 'selected' : '' }}>ইভেন্ট</option>
                                                <option value="subsidy" {{ $announcement->category == 'subsidy' ? 'selected' : '' }}>ভর্তুকি</option>
                                                <option value="alert" {{ $announcement->category == 'alert' ? 'selected' : '' }}>সতর্কতা</option>
                                                <option value="training" {{ $announcement->category == 'training' ? 'selected' : '' }}>প্রশিক্ষণ</option>
                                                <option value="general" {{ $announcement->category == 'general' ? 'selected' : '' }}>সাধারণ</option>
                                                <option value="emergency" {{ $announcement->category == 'emergency' ? 'selected' : '' }}>জরুরী</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">অগ্রাধিকার</label>
                                            <select name="priority" class="form-select" required>
                                                <option value="low" {{ $announcement->priority == 'low' ? 'selected' : '' }}>নিম্ন</option>
                                                <option value="medium" {{ $announcement->priority == 'medium' ? 'selected' : '' }}>মধ্যম</option>
                                                <option value="high" {{ $announcement->priority == 'high' ? 'selected' : '' }}>উচ্চ</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">শিরোনাম</label>
                                        <input type="text" name="title" class="form-input" value="{{ $announcement->title }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">উপ-শিরোনাম</label>
                                        <input type="text" name="subtitle" class="form-input" value="{{ $announcement->subtitle }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">বিবরণ</label>
                                        <textarea name="description" class="form-textarea" required>{{ $announcement->description }}</textarea>
                                    </div>

                                    <div class="checkbox-group">
                                        <input type="hidden" name="is_active" value="0">
                                        <input type="checkbox" name="is_active" class="checkbox-input" value="1" {{ $announcement->is_active ? 'checked' : '' }}>
                                        <label>সক্রিয়</label>
                                    </div>

                                    <div style="margin-top: 15px; display: flex; gap: 10px;">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fas fa-save"></i> আপডেট করুন
                                        </button>
                                        <button type="button" class="btn btn-warning btn-sm" onclick="toggleEditForm({{ $announcement->id }})">
                                            <i class="fas fa-times"></i> বাতিল
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @empty
                        <div class="empty-state" style="text-align: center; padding: 40px;">
                            <h3 style="color: var(--text-color-dark);">কোনো ঘোষণা পাওয়া যায়নি</h3>
                            <p>এখনও কোনো ঘোষণা তৈরি করা হয়নি। উপরের ফর্ম ব্যবহার করে নতুন ঘোষণা যোগ করুন।</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleEditForm(announcementId) {
        const item = document.getElementById(`announcement-${announcementId}`);
        const editForm = document.getElementById(`edit-form-${announcementId}`);
        
        // Close all other edit forms
        document.querySelectorAll('.edit-form.active').forEach(form => {
            form.classList.remove('active');
        });
        document.querySelectorAll('.announcement-item.editing').forEach(item => {
            item.classList.remove('editing');
        });
        
        // Toggle current form
        editForm.classList.toggle('active');
        item.classList.toggle('editing');
    }

    // Auto-hide success messages
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert-success');
        alerts.forEach(alert => {
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-20px)';
            setTimeout(() => alert.remove(), 300);
        });
    }, 5000);

    // Form validation enhancements
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.style.borderColor = 'var(--danger-red)';
                    isValid = false;
                } else {
                    field.style.borderColor = 'var(--border-light)';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('অনুগ্রহ করে সকল প্রয়োজনীয় ক্ষেত্র পূরণ করুন।');
            }
        });
    });
</script>

</body>
</html>
