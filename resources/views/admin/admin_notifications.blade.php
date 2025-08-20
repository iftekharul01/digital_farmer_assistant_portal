<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Notifications | Digital Farmer Assistant</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body>

<style>

:root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
            --success-green: #28a745;
            --warning-yellow: #ffc107;
            --danger-red: #dc3545;
        }

    .admin-container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 0 20px;
    }

    .admin-header {
            background: var(--primary-green);
            color: white;
            padding: 15px 0;
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
            font-size: 1.3rem;
            font-weight: 800;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 6px;
            transition: background 0.2s;
        }

        .nav-links a:hover {
            background: rgba(255,255,255,0.1);
        }

    .page-header {
        background: linear-gradient(135deg, var(--primary-green), #0a8220);
        color: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 30px;
        text-align: center;
    }

    .page-header h1 {
        margin: 0;
        font-size: 2rem;
        font-weight: 700;
    }

    .admin-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        overflow: hidden;
    }

    .card-header {
        background: #f8f9fa;
        padding: 20px;
        border-bottom: 1px solid #dee2e6;
    }

    .card-header h2 {
        margin: 0;
        color: var(--primary-green);
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-body {
        padding: 30px;
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
        color: #495057;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #e9ecef;
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
        min-height: 120px;
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-top: 10px;
    }

    .checkbox-group input[type="checkbox"] {
        width: auto;
        margin: 0;
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
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        text-decoration: none;
    }

    .btn-secondary:hover {
        background: #5a6268;
        color: white;
        text-decoration: none;
    }

    .btn-danger {
        background: #dc3545;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-danger:hover {
        background: #c82333;
    }

    .notifications-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .notifications-table th,
    .notifications-table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }

    .notifications-table th {
        background: #f8f9fa;
        font-weight: 600;
        color: #495057;
    }

    .priority-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .priority-high {
        background: #ffebee;
        color: #c62828;
    }

    .priority-medium {
        background: #fff8e1;
        color: #f57f17;
    }

    .priority-low {
        background: #e8f5e8;
        color: #2e7d32;
    }

    .category-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        background: var(--primary-green);
        color: white;
    }

    .status-badge {
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-active {
        background: #e8f5e8;
        color: #2e7d32;
    }

    .status-inactive {
        background: #ffebee;
        color: #c62828;
    }

    .action-buttons {
        display: flex;
        gap: 8px;
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

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .edit-form {
        display: none;
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin-top: 10px;
    }

    @media (max-width: 768px) {
        .admin-container {
            padding: 0 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-row {
            grid-template-columns: 1fr;
        }

        .notifications-table {
            font-size: 0.9rem;
        }

        .action-buttons {
            flex-direction: column;
        }
    }
</style>

<header class="admin-header">
        <nav class="admin-nav">
            <div class="admin-logo">
                <i class="fas fa-seedling"></i> এডমিন প্যানেল
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"></i> ড্যাশবোর্ড</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> লগআউট</a>
            </div>
        </nav>
    </header>

<div class="admin-container">
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

    <div class="page-header">
        <h1><i class="fas fa-bell"></i> নোটিফিকেশন ম্যানেজমেন্ট</h1>
        <p>নোটিফিকেশন তৈরি, সম্পাদনা এবং পরিচালনা করুন</p>
    </div>

    <!-- Add New Notification -->
    <div class="admin-card">
        <div class="card-header">
            <h2><i class="fas fa-plus-circle"></i> নতুন নোটিফিকেশন যোগ করুন</h2>
        </div>
        <div class="card-body">
            <form action="/admin/notifications" method="POST">
                @csrf
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="category">ক্যাটেগরি *</label>
                        <select id="category" name="category" required>
                            <option value="">ক্যাটেগরি নির্বাচন করুন</option>
                            <option value="আবহাওয়া">আবহাওয়া</option>
                            <option value="বাজার">বাজার</option>
                            <option value="ভর্তুকি">ভর্তুকি</option>
                            <option value="সাধারণ">সাধারণ</option>
                            <option value="জরুরি">জরুরি</option>
                            <option value="প্রযুক্তি">প্রযুক্তি</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priority">অগ্রাধিকার *</label>
                        <select id="priority" name="priority" required>
                            <option value="medium">মাঝারি</option>
                            <option value="low">নিম্ন</option>
                            <option value="high">উচ্চ</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">শিরোনাম *</label>
                    <input type="text" id="title" name="title" required 
                           placeholder="নোটিফিকেশনের শিরোনাম লিখুন" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="subtitle">উপশিরোনাম</label>
                    <input type="text" id="subtitle" name="subtitle" 
                           placeholder="ঐচ্ছিক উপশিরোনাম" value="{{ old('subtitle') }}">
                </div>

                <div class="form-group">
                    <label for="description">বিবরণ *</label>
                    <textarea id="description" name="description" required 
                              placeholder="নোটিফিকেশনের বিস্তারিত বিবরণ লিখুন">{{ old('description') }}</textarea>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="is_active" name="is_active" checked>
                    <label for="is_active">সক্রিয় রাখুন</label>
                </div>

                <button type="submit" class="btn-primary">
                    <i class="fas fa-save"></i> নোটিফিকেশন সংরক্ষণ করুন
                </button>
            </form>
        </div>
    </div>

    <!-- Notifications List -->
    <div class="admin-card">
        <div class="card-header">
            <h2><i class="fas fa-list"></i> সকল নোটিফিকেশন ({{ $notifications->total() }})</h2>
        </div>
        <div class="card-body">
            @if($notifications->count() > 0)
                <div style="overflow-x: auto;">
                    <table class="notifications-table">
                        <thead>
                            <tr>
                                <th>শিরোনাম</th>
                                <th>ক্যাটেগরি</th>
                                <th>অগ্রাধিকার</th>
                                <th>স্ট্যাটাস</th>
                                <th>তারিখ</th>
                                <th>অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($notifications as $notification)
                                <tr>
                                    <td>
                                        <strong>{{ $notification->title }}</strong>
                                        @if($notification->subtitle)
                                            <br><small style="color: #6c757d;">{{ $notification->subtitle }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="category-badge">{{ $notification->category }}</span>
                                    </td>
                                    <td>
                                        <span class="priority-badge priority-{{ $notification->priority }}">
                                            {{ $notification->priority == 'high' ? 'উচ্চ' : ($notification->priority == 'medium' ? 'মাঝারি' : 'নিম্ন') }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="status-badge {{ $notification->is_active ? 'status-active' : 'status-inactive' }}">
                                            {{ $notification->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়' }}
                                        </span>
                                    </td>
                                    <td>{{ $notification->created_at->format('d M Y') }}</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button onclick="toggleEditForm('{{ $notification->id }}')" class="btn-secondary">
                                                <i class="fas fa-edit"></i> সম্পাদনা
                                            </button>
                                            <form action="/admin/notifications/{{ $notification->id }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-danger" 
                                                        onclick="return confirm('আপনি কি এই নোটিফিকেশনটি ডিলিট করতে চান?')">
                                                    <i class="fas fa-trash"></i> ডিলিট
                                                </button>
                                            </form>
                                        </div>

                                        <!-- Edit Form -->
                                        <div id="edit-form-{{ $notification->id }}" class="edit-form">
                                            <form action="/admin/notifications/{{ $notification->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                
                                                <div class="form-row">
                                                    <div class="form-group">
                                                        <label>ক্যাটেগরি</label>
                                                        <select name="category" required>
                                                            <option value="আবহাওয়া" {{ $notification->category == 'আবহাওয়া' ? 'selected' : '' }}>আবহাওয়া</option>
                                                            <option value="বাজার" {{ $notification->category == 'বাজার' ? 'selected' : '' }}>বাজার</option>
                                                            <option value="ভর্তুকি" {{ $notification->category == 'ভর্তুকি' ? 'selected' : '' }}>ভর্তুকি</option>
                                                            <option value="সাধারণ" {{ $notification->category == 'সাধারণ' ? 'selected' : '' }}>সাধারণ</option>
                                                            <option value="জরুরি" {{ $notification->category == 'জরুরি' ? 'selected' : '' }}>জরুরি</option>
                                                            <option value="প্রযুক্তি" {{ $notification->category == 'প্রযুক্তি' ? 'selected' : '' }}>প্রযুক্তি</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>অগ্রাধিকার</label>
                                                        <select name="priority" required>
                                                            <option value="low" {{ $notification->priority == 'low' ? 'selected' : '' }}>নিম্ন</option>
                                                            <option value="medium" {{ $notification->priority == 'medium' ? 'selected' : '' }}>মাঝারি</option>
                                                            <option value="high" {{ $notification->priority == 'high' ? 'selected' : '' }}>উচ্চ</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>শিরোনাম</label>
                                                    <input type="text" name="title" value="{{ $notification->title }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>উপশিরোনাম</label>
                                                    <input type="text" name="subtitle" value="{{ $notification->subtitle }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>বিবরণ</label>
                                                    <textarea name="description" required>{{ $notification->description }}</textarea>
                                                </div>

                                                <div class="checkbox-group">
                                                    <input type="checkbox" name="is_active" {{ $notification->is_active ? 'checked' : '' }}>
                                                    <label>সক্রিয় রাখুন</label>
                                                </div>

                                                <div style="margin-top: 15px;">
                                                    <button type="submit" class="btn-primary">আপডেট করুন</button>
                                                    <button type="button" onclick="toggleEditForm('{{ $notification->id }}')" class="btn-secondary">বাতিল</button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="pagination-wrapper">
                    {{ $notifications->links() }}
                </div>
            @else
                <div style="text-align: center; padding: 60px 20px; color: #6c757d;">
                    <i class="fas fa-bell-slash" style="font-size: 3rem; margin-bottom: 20px; opacity: 0.5;"></i>
                    <h3>কোনো নোটিফিকেশন নেই</h3>
                    <p>এখনও কোনো নোটিফিকেশন তৈরি করা হয়নি। উপরের ফর্ম ব্যবহার করে নতুন নোটিফিকেশন যোগ করুন।</p>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
function toggleEditForm(id) {
    const form = document.getElementById('edit-form-' + id);
    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
    } else {
        form.style.display = 'none';
    }
}
</script>

</body>
</html>
