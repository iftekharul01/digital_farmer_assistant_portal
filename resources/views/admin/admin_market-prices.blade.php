<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <title>এডমিন - বাজার দর | কৃষক পোর্টাল</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        :root {
            --primary-green: #0bd429;
            --text-dark: #1f2f1f;
            --success-green: #28a745;
            --warning-yellow: #ffc107;
            --danger-red: #dc3545;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f8f9fa;
            font-family: 'Manrope', sans-serif;
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

        .content-container {
            max-width: 1400px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-dark);
        }

        .admin-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: var(--primary-green);
        }

        .btn-primary {
            background: var(--primary-green);
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background: #0aa51c;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            font-size: 0.9rem;
        }

        .btn-edit {
            background: var(--warning-yellow);
            color: #333;
        }

        .btn-delete {
            background: var(--danger-red);
            color: white;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-triple {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
        }

        .prices-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .prices-table th,
        .prices-table td {
            padding: 15px 12px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .prices-table th {
            background: #f8f9fa;
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .prices-table tr:hover {
            background: #f8f9fa;
        }

        .price-increase {
            color: var(--success-green);
            font-weight: 600;
        }

        .price-decrease {
            color: var(--danger-red);
            font-weight: 600;
        }

        .price-stable {
            color: #6c757d;
            font-weight: 600;
        }

        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
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

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border-left: 4px solid var(--primary-green);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-green);
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6c757d;
            font-weight: 600;
        }

        .search-filter {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .search-filter input,
        .search-filter select {
            min-width: 200px;
        }

        .quick-actions {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .alert {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid;
        }

        .alert-success {
            background: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-error {
            background: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }

        .crop-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: none;
            border-radius: 12px;
            width: 80%;
            max-width: 500px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
        }

        .image-upload {
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s;
        }

        .image-upload:hover {
            border-color: var(--primary-green);
        }

        /* Pagination Styles - Hide Previous/Next text, keep arrows small */
        .pagination .page-link {
            padding: 8px 12px;
            font-size: 0.9rem;
        }
        
        .pagination .page-link[rel="prev"]::before {
            content: "‹";
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .pagination .page-link[rel="next"]::before {
            content: "›";
            font-size: 1.2rem;
            font-weight: bold;
        }
        
        .pagination .page-link[rel="prev"],
        .pagination .page-link[rel="next"] {
            font-size: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .form-row, .form-triple {
                grid-template-columns: 1fr;
            }
            
            .search-filter {
                flex-direction: column;
            }
            
            .prices-table {
                font-size: 0.9rem;
            }
            
            .prices-table th,
            .prices-table td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>
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

    <div class="content-container">
        <div class="page-header">
            <h1 class="page-title"><i class="fas fa-chart-line"></i> বাজার দর ব্যবস্থাপনা</h1>
            <button class="btn-primary" onclick="toggleAddForm()">
                <i class="fas fa-plus"></i> নতুন দাম যোগ করুন
            </button>
        </div>

        <!-- Success/Error Messages -->
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

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">{{ $totalCrops }}</div>
                <div class="stat-label">মোট ফসল</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $totalMarkets }}</div>
                <div class="stat-label">বাজার</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $todayUpdates }}</div>
                <div class="stat-label">আজকের আপডেট</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">৯৮%</div>
                <div class="stat-label">ডেটা নির্ভুলতা</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="admin-section">
            <h2 class="section-title">
                <i class="fas fa-bolt"></i> দ্রুত অ্যাকশন
            </h2>
            <div class="quick-actions">
                <button class="btn-primary" onclick="openBulkUpdateModal()">
                    <i class="fas fa-sync"></i> বাল্ক প্রাইস আপডেট
                </button>
                <button class="btn-primary" onclick="exportData()">
                    <i class="fas fa-download"></i> ডেটা এক্সপোর্ট
                </button>
                <button class="btn-primary">
                    <i class="fas fa-upload"></i> CSV ইমপোর্ট
                </button>
            </div>
        </div>

        <!-- Add/Edit Price Form -->
        <div class="admin-section" id="addPriceForm" style="display: none;">
            <h2 class="section-title">
                <i class="fas fa-plus-circle"></i> নতুন বাজার দর যোগ করুন
            </h2>
            <form action="{{ route('admin.market-prices.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="crop_category">ফসলের ক্যাটেগরি</label>
                        <select id="crop_category" name="crop_category" required>
                            <option value="">ক্যাটেগরি নির্বাচন করুন</option>
                            <option value="ধান">ধান</option>
                            <option value="গম">গম</option>
                            <option value="ভুট্টা">ভুট্টা</option>
                            <option value="সবজি">সবজি</option>
                            <option value="ডাল">ডাল</option>
                            <option value="তেল">তেল</option>
                            <option value="মসলা">মসলা</option>
                            <option value="ফল">ফল</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="crop_name">ফসলের নাম</label>
                        <input type="text" id="crop_name" name="crop_name" placeholder="যেমন: চাল, আলু" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="variety_type">জাত/ধরন</label>
                        <input type="text" id="variety_type" name="variety_type" placeholder="যেমন: বাসমতি, BR28">
                    </div>
                    <div class="form-group">
                        <label for="market_location">বাজারের অবস্থান</label>
                        <select id="market_location" name="market_location" required>
                            <option value="">বাজার নির্বাচন করুন</option>
                            <option value="ঢাকা">ঢাকা</option>
                            <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                            <option value="সিলেট">সিলেট</option>
                            <option value="রাজশাহী">রাজশাহী</option>
                            <option value="খুলনা">খুলনা</option>
                            <option value="বরিশাল">বরিশাল</option>
                            <option value="রংপুর">রংপুর</option>
                            <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                        </select>
                    </div>
                </div>
                <div class="form-triple">
                    <div class="form-group">
                        <label for="current_price">বর্তমান দাম (টাকা)</label>
                        <input type="number" id="current_price" name="current_price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="previous_price">পূর্বের দাম (টাকা)</label>
                        <input type="number" id="previous_price" name="previous_price" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="unit">একক</label>
                        <select id="unit" name="unit" required>
                            <option value="কেজি">কেজি</option>
                            <option value="টন">টন</option>
                            <option value="মণ">মণ</option>
                            <option value="সের">সের</option>
                            <option value="লিটার">লিটার</option>
                            <option value="ডজন">ডজন</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="quality_grade">মানের গ্রেড</label>
                        <select id="quality_grade" name="quality_grade" required>
                            <option value="প্রিমিয়াম">প্রিমিয়াম</option>
                            <option value="স্ট্যান্ডার্ড">স্ট্যান্ডার্ড</option>
                            <option value="নিম্ন">নিম্ন গ্রেড</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_image">পণ্যের ছবি (ফাইলের নাম)</label>
                        <input type="text" id="product_image" name="product_image" 
                               placeholder="যেমন: rice_br28.png" class="form-input">
                        <small style="color: #666; font-size: 0.875rem; display: block; margin-top: 5px;">
                            ছবিটি storage/app/public/assets/product_images/ ফোল্ডারে রাখুন এবং শুধু ফাইলের নাম লিখুন
                        </small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="market_remarks">বাজার মন্তব্য</label>
                    <textarea id="market_remarks" name="market_remarks" placeholder="বাজারের অবস্থা, চাহিদা ইত্যাদি সম্পর্কে অতিরিক্ত তথ্য"></textarea>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-save"></i> দাম সংরক্ষণ করুন
                    </button>
                    <button type="button" class="btn-secondary" onclick="toggleAddForm()">
                        <i class="fas fa-times"></i> বাতিল করুন
                    </button>
                </div>
            </form>
        </div>

        <!-- Search and Filter -->
        <div class="admin-section">
            <h2 class="section-title">
                <i class="fas fa-table"></i> বর্তমান বাজার দর
            </h2>
            <form method="GET" action="{{ route('admin.market-prices') }}">
                <div class="search-filter">
                    <input type="text" name="search" placeholder="ফসলের নাম অনুসন্ধান..." value="{{ request('search') }}">
                    <select name="category">
                        <option value="">সব ক্যাটেগরি</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                {{ $category }}
                            </option>
                        @endforeach
                    </select>
                    <select name="location">
                        <option value="">সব বাজার</option>
                        @foreach($locations as $location)
                            <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                                {{ $location }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-search"></i> ফিল্টার
                    </button>
                </div>
            </form>

            <table class="prices-table">
                <thead>
                    <tr>
                        <th>ছবি</th>
                        <th>ফসল</th>
                        <th>জাত</th>
                        <th>বাজার</th>
                        <th>বর্তমান দাম</th>
                        <th>পূর্বের দাম</th>
                        <th>পরিবর্তন</th>
                        <th>মান</th>
                        <th>সর্বশেষ আপডেট</th>
                        <th>অ্যাকশন</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>
                                @if($product->product_image)
                                    <img src="{{ '/storage/assets/product_images/' . $product->product_image }}" 
                                         alt="{{ $product->crop_name }}" 
                                         style="width: 50px; height: 50px; border-radius: 8px; object-fit: cover;"
                                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                    <div style="display: none; width: 50px; height: 50px; background: #f0f0f0; border-radius: 8px; align-items: center; justify-content: center; color: #999;">
                                        <i class="fas fa-image"></i>
                                    </div>
                                @else
                                    <div style="width: 50px; height: 50px; background: #f0f0f0; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #999;">
                                        <i class="fas fa-image"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <span class="crop-icon" style="background: #f0f8ff; color: var(--primary-green);">
                                        <i class="fas fa-seedling"></i>
                                    </span>
                                    <div>
                                        <strong>{{ $product->crop_name }}</strong>
                                        <br><small style="color: #666;">{{ $product->crop_category }}</small>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $product->variety_type ?: 'N/A' }}</td>
                            <td>{{ $product->market_location }}</td>
                            <td><strong>৳{{ number_format($product->current_price, 2) }}/{{ $product->unit }}</strong></td>
                            <td>৳{{ number_format($product->previous_price ?: 0, 2) }}/{{ $product->unit }}</td>
                            <td>
                                @if($product->previous_price && $product->previous_price > 0)
                                    @php
                                        $change = (($product->current_price - $product->previous_price) / $product->previous_price) * 100;
                                        $changeClass = $change > 0 ? 'price-increase' : ($change < 0 ? 'price-decrease' : 'price-stable');
                                        $changeIcon = $change > 0 ? 'fa-arrow-up' : ($change < 0 ? 'fa-arrow-down' : 'fa-minus');
                                    @endphp
                                    <span class="{{ $changeClass }}">
                                        <i class="fas {{ $changeIcon }}"></i>
                                        {{ number_format(abs($change), 1) }}%
                                    </span>
                                @else
                                    <span class="price-stable">নতুন</span>
                                @endif
                            </td>
                            <td>{{ $product->quality_grade }}</td>
                            <td>{{ $product->updated_at->diffForHumans() }}</td>
                            <td>
                                <button class="btn-secondary btn-edit" onclick="editProduct('{{ (int) $product->id }}')">
                                    <i class="fas fa-edit"></i> এডিট
                                </button>
                                <form method="POST" action="{{ route('admin.market-prices.destroy', $product->id) }}" style="display: inline;" onsubmit="return confirm('আপনি কি নিশ্চিত যে এই পণ্যটি মুছে ফেলতে চান?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-secondary btn-delete">
                                        <i class="fas fa-trash"></i> মুছুন
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" style="text-align: center; padding: 40px; color: #666;">
                                <i class="fas fa-search" style="font-size: 2rem; margin-bottom: 10px;"></i>
                                <br>কোনো পণ্য পাওয়া যায়নি
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            @if($products->hasPages())
                <div style="margin-top: 20px; display: flex; justify-content: center;">
                    {{ $products->appends(request()->query())->links('custom.pagination') }}
                </div>
            @endif
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2 style="margin-bottom: 20px;">পণ্য সম্পাদনা করুন</h2>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div id="editFormContent">
                    <!-- Form content will be loaded here -->
                </div>
            </form>
        </div>
    </div>

    <!-- Bulk Update Modal -->
    <div id="bulkUpdateModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeBulkUpdateModal()">&times;</span>
            <h2 style="margin-bottom: 20px;">বাল্ক প্রাইস আপডেট</h2>
            <form action="{{ route('admin.market-prices.bulk-update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="price_increase_percentage">দাম বৃদ্ধির শতাংশ</label>
                    <input type="number" id="price_increase_percentage" name="price_increase_percentage" step="0.1" min="0" max="100" required>
                </div>
                <div class="form-group">
                    <label for="selected_category">নির্দিষ্ট ক্যাটেগরি (ঐচ্ছিক)</label>
                    <select id="selected_category" name="selected_category">
                        <option value="">সব ক্যাটেগরি</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="selected_location">নির্দিষ্ট বাজার (ঐচ্ছিক)</label>
                    <select id="selected_location" name="selected_location">
                        <option value="">সব বাজার</option>
                        @foreach($locations as $location)
                            <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-sync"></i> আপডেট করুন
                    </button>
                    <button type="button" class="btn-secondary" onclick="closeBulkUpdateModal()">
                        <i class="fas fa-times"></i> বাতিল
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleAddForm() {
            const form = document.getElementById('addPriceForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        function editProduct(id) {
            fetch(`/admin/market-prices/${id}/edit`)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('editForm').action = `/admin/market-prices/${id}`;
                    document.getElementById('editFormContent').innerHTML = `
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_crop_category">ফসলের ক্যাটেগরি</label>
                                <select id="edit_crop_category" name="crop_category" required>
                                    <option value="ধান" ${data.crop_category === 'ধান' ? 'selected' : ''}>ধান</option>
                                    <option value="গম" ${data.crop_category === 'গম' ? 'selected' : ''}>গম</option>
                                    <option value="ভুট্টা" ${data.crop_category === 'ভুট্টা' ? 'selected' : ''}>ভুট্টা</option>
                                    <option value="সবজি" ${data.crop_category === 'সবজি' ? 'selected' : ''}>সবজি</option>
                                    <option value="ডাল" ${data.crop_category === 'ডাল' ? 'selected' : ''}>ডাল</option>
                                    <option value="তেল" ${data.crop_category === 'তেল' ? 'selected' : ''}>তেল</option>
                                    <option value="মসলা" ${data.crop_category === 'মসলা' ? 'selected' : ''}>মসলা</option>
                                    <option value="ফল" ${data.crop_category === 'ফল' ? 'selected' : ''}>ফল</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_crop_name">ফসলের নাম</label>
                                <input type="text" id="edit_crop_name" name="crop_name" value="${data.crop_name}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_variety_type">জাত/ধরন</label>
                                <input type="text" id="edit_variety_type" name="variety_type" value="${data.variety_type || ''}">
                            </div>
                            <div class="form-group">
                                <label for="edit_market_location">বাজারের অবস্থান</label>
                                <select id="edit_market_location" name="market_location" required>
                                    <option value="ঢাকা" ${data.market_location === 'ঢাকা' ? 'selected' : ''}>ঢাকা</option>
                                    <option value="চট্টগ্রাম" ${data.market_location === 'চট্টগ্রাম' ? 'selected' : ''}>চট্টগ্রাম</option>
                                    <option value="সিলেট" ${data.market_location === 'সিলেট' ? 'selected' : ''}>সিলেট</option>
                                    <option value="রাজশাহী" ${data.market_location === 'রাজশাহী' ? 'selected' : ''}>রাজশাহী</option>
                                    <option value="খুলনা" ${data.market_location === 'খুলনা' ? 'selected' : ''}>খুলনা</option>
                                    <option value="বরিশাল" ${data.market_location === 'বরিশাল' ? 'selected' : ''}>বরিশাল</option>
                                    <option value="রংপুর" ${data.market_location === 'রংপুর' ? 'selected' : ''}>রংপুর</option>
                                    <option value="ময়মনসিংহ" ${data.market_location === 'ময়মনসিংহ' ? 'selected' : ''}>ময়মনসিংহ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-triple">
                            <div class="form-group">
                                <label for="edit_current_price">বর্তমান দাম</label>
                                <input type="number" id="edit_current_price" name="current_price" value="${data.current_price}" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_previous_price">পূর্বের দাম</label>
                                <input type="number" id="edit_previous_price" name="previous_price" value="${data.previous_price || ''}" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="edit_unit">একক</label>
                                <select id="edit_unit" name="unit" required>
                                    <option value="কেজি" ${data.unit === 'কেজি' ? 'selected' : ''}>কেজি</option>
                                    <option value="টন" ${data.unit === 'টন' ? 'selected' : ''}>টন</option>
                                    <option value="মণ" ${data.unit === 'মণ' ? 'selected' : ''}>মণ</option>
                                    <option value="সের" ${data.unit === 'সের' ? 'selected' : ''}>সের</option>
                                    <option value="লিটার" ${data.unit === 'লিটার' ? 'selected' : ''}>লিটার</option>
                                    <option value="ডজন" ${data.unit === 'ডজন' ? 'selected' : ''}>ডজন</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="edit_quality_grade">মানের গ্রেড</label>
                                <select id="edit_quality_grade" name="quality_grade" required>
                                    <option value="প্রিমিয়াম" ${data.quality_grade === 'প্রিমিয়াম' ? 'selected' : ''}>প্রিমিয়াম</option>
                                    <option value="স্ট্যান্ডার্ড" ${data.quality_grade === 'স্ট্যান্ডার্ড' ? 'selected' : ''}>স্ট্যান্ডার্ড</option>
                                    <option value="নিম্ন" ${data.quality_grade === 'নিম্ন' ? 'selected' : ''}>নিম্ন গ্রেড</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="edit_product_image">পণ্যের ছবি (ফাইলের নাম)</label>
                                <input type="text" id="edit_product_image" name="product_image" 
                                       value="${data.product_image || ''}" 
                                       placeholder="যেমন: rice_br28.png" class="form-input">
                                <small style="color: #666; font-size: 0.875rem; display: block; margin-top: 5px;">
                                    ছবিটি storage/app/public/assets/product_images/ ফোল্ডারে রাখুন এবং শুধু ফাইলের নাম লিখুন
                                </small>
                                ${data.product_image ? `
                                    <div style="margin-top: 10px;">
                                        <p><strong>বর্তমান ছবি:</strong></p>
                                        <img src="/storage/assets/product_images/${data.product_image}" 
                                             alt="${data.crop_name}" 
                                             style="max-width: 100px; max-height: 100px; border-radius: 8px; object-fit: cover;"
                                             onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                                        <div style="display: none; padding: 10px; background: #f8d7da; color: #721c24; border-radius: 4px; margin-top: 5px;">
                                            ছবি পাওয়া যায়নি।
                                        </div>
                                    </div>
                                ` : ''}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="edit_market_remarks">বাজার মন্তব্য</label>
                            <textarea id="edit_market_remarks" name="market_remarks">${data.market_remarks || ''}</textarea>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-save"></i> আপডেট করুন
                            </button>
                            <button type="button" class="btn-secondary" onclick="closeEditModal()">
                                <i class="fas fa-times"></i> বাতিল
                            </button>
                        </div>
                    `;
                    document.getElementById('editModal').style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('পণ্যের তথ্য লোড করতে সমস্যা হয়েছে।');
                });
        }

        function closeEditModal() {
            document.getElementById('editModal').style.display = 'none';
        }

        function openBulkUpdateModal() {
            document.getElementById('bulkUpdateModal').style.display = 'block';
        }

        function closeBulkUpdateModal() {
            document.getElementById('bulkUpdateModal').style.display = 'none';
        }

        function exportData() {
            window.location.href = '/admin/market-prices/export';
        }

        // Close modals when clicking outside
        window.onclick = function(event) {
            const editModal = document.getElementById('editModal');
            const bulkModal = document.getElementById('bulkUpdateModal');
            if (event.target === editModal) {
                editModal.style.display = 'none';
            }
            if (event.target === bulkModal) {
                bulkModal.style.display = 'none';
            }
        }

        // No longer needed - using filename input instead of file upload
    </script>
</body>
</html>

