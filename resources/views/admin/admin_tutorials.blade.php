<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>টিউটোরিয়াল ম্যানেজমেন্ট | অ্যাডমিন প্যানেল</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
            --warning-orange: #f39c12;
            --info-blue: #3498db;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background: #f8f9fa;
            color: var(--text-color-dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .admin-header {
            background: linear-gradient(135deg, var(--primary-green), #089c24);
            color: white;
            padding: 20px 0;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px var(--shadow-medium);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-title {
            font-size: 2rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary-green);
        }

        .btn-primary:hover {
            background: #f0f0f0;
            transform: translateY(-2px);
        }

        .btn-success {
            background: var(--primary-green);
            color: white;
        }

        .btn-success:hover {
            background: #089c24;
        }

        .btn-warning {
            background: var(--warning-orange);
            color: white;
        }

        .btn-warning:hover {
            background: #e67e22;
        }

        .btn-danger {
            background: var(--danger-red);
            color: white;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .btn-sm {
            padding: 6px 12px;
            font-size: 0.8rem;
        }

        /* Alert Messages */
        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .alert-error {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        /* Stats Cards */
        .stats-grid {
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
            border: 2px solid var(--border-light);
            text-align: center;
        }

        .stats-icon {
            font-size: 2.5rem;
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

        /* Table */
        .table-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px var(--shadow-card);
            border: 2px solid var(--border-light);
        }

        .table-header {
            background: var(--light-green);
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark-green);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: var(--dark-green);
        }

        tr:hover {
            background: #f8f9fa;
        }

        .tutorial-title {
            font-weight: 600;
            color: var(--dark-green);
        }

        .tutorial-description {
            color: var(--text-color-dark);
            font-size: 0.9rem;
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .actions {
            display: flex;
            gap: 5px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 5px;
            margin-top: 20px;
        }

        .pagination a,
        .pagination span {
            padding: 8px 12px;
            background: white;
            border: 2px solid var(--border-light);
            border-radius: 6px;
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

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--text-color-dark);
        }

        .empty-icon {
            font-size: 4rem;
            color: var(--primary-green);
            margin-bottom: 20px;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .empty-desc {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .header-actions {
                flex-wrap: wrap;
                justify-content: center;
            }

            .table-container {
                overflow-x: auto;
            }

            table {
                min-width: 800px;
            }

            .container {
                padding: 0 15px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <div class="container">
            <div class="header-content">
                <h1 class="header-title">
                    <i class="fas fa-graduation-cap"></i>
                    টিউটোরিয়াল ম্যানেজমেন্ট
                </h1>
                <div class="header-actions">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">
                        <i class="fas fa-dashboard"></i> ড্যাশবোর্ড
                    </a>
                    <a href="{{ route('admin.tutorials.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> নতুন টিউটোরিয়াল
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i>
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                <i class="fas fa-exclamation-triangle"></i>
                {{ session('error') }}
            </div>
        @endif

        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stats-card">
                <div class="stats-icon" style="color: var(--primary-green);">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="stats-number">{{ $tutorials->total() }}</div>
                <div class="stats-label">মোট টিউটোরিয়াল</div>
            </div>
            <div class="stats-card">
                <div class="stats-icon" style="color: var(--primary-green);">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="stats-number">{{ $tutorials->where('is_active', true)->count() }}</div>
                <div class="stats-label">সক্রিয় টিউটোরিয়াল</div>
            </div>
            <div class="stats-card">
                <div class="stats-icon" style="color: var(--warning-orange);">
                    <i class="fas fa-eye-slash"></i>
                </div>
                <div class="stats-number">{{ $tutorials->where('is_active', false)->count() }}</div>
                <div class="stats-label">নিষ্ক্রিয় টিউটোরিয়াল</div>
            </div>
        </div>

        <!-- Tutorials Table -->
        <div class="table-container">
            <div class="table-header">
                <h2 class="table-title">সকল টিউটোরিয়াল</h2>
                <a href="{{ route('admin.tutorials.create') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-plus"></i> নতুন যোগ করুন
                </a>
            </div>

            @if($tutorials->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>ক্রম</th>
                            <th>টাইটেল</th>
                            <th>বিবরণ</th>
                            <th>আইকন</th>
                            <th>ক্রম নং</th>
                            <th>স্ট্যাটাস</th>
                            <th>তৈরির তারিখ</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tutorials as $tutorial)
                            <tr>
                                <td>{{ $tutorial->sort_order }}</td>
                                <td>
                                    <div class="tutorial-title">{{ $tutorial->title }}</div>
                                    <small style="color: #888;">{{ $tutorial->slug }}</small>
                                </td>
                                <td>
                                    <div class="tutorial-description">{{ $tutorial->description }}</div>
                                </td>
                                <td>
                                    <i class="{{ $tutorial->icon }}" style="font-size: 1.5rem; color: var(--primary-green);"></i>
                                </td>
                                <td>{{ $tutorial->sort_order }}</td>
                                <td>
                                    <span class="status-badge {{ $tutorial->is_active ? 'status-active' : 'status-inactive' }}">
                                        {{ $tutorial->is_active ? 'সক্রিয়' : 'নিষ্ক্রিয়' }}
                                    </span>
                                </td>
                                <td>{{ $tutorial->created_at->format('d M Y') }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('admin.tutorials.edit', $tutorial->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.tutorials.toggle', $tutorial->id) }}" class="btn btn-sm {{ $tutorial->is_active ? 'btn-warning' : 'btn-success' }}">
                                            <i class="fas fa-{{ $tutorial->is_active ? 'eye-slash' : 'eye' }}"></i>
                                        </a>
                                        <form action="{{ route('admin.tutorials.destroy', $tutorial->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('আপনি কি এই টিউটোরিয়ালটি মুছে ফেলতে চান?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div style="padding: 20px;">
                    {{ $tutorials->links() }}
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="empty-title">কোন টিউটোরিয়াল নেই</h3>
                    <p class="empty-desc">এখনো কোন টিউটোরিয়াল যোগ করা হয়নি। নতুন টিউটোরিয়াল যোগ করুন।</p>
                    <a href="{{ route('admin.tutorials.create') }}" class="btn btn-success">
                        <i class="fas fa-plus"></i> প্রথম টিউটোরিয়াল যোগ করুন
                    </a>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
