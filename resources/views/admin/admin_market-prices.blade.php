<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Market Prices | Farmer Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

        .alert-info {
            background: #d1ecf1;
            border-color: #bee5eb;
            color: #0c5460;
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

        .rice-icon { background: #fff3cd; color: #856404; }
        .wheat-icon { background: #f8d7da; color: #721c24; }
        .corn-icon { background: #d4edda; color: #155724; }
        .potato-icon { background: #cce5ff; color: #004085; }

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
                <i class="fas fa-seedling"></i> Admin Panel
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-dashboard"></i> Dashboard</a>
                <a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </nav>
    </header>

    <div class="content-container">
        <div class="page-header">
            <h1 class="page-title"><i class="fas fa-chart-line"></i> Market Prices Management</h1>
            <button class="btn-primary" onclick="toggleAddForm()">
                <i class="fas fa-plus"></i> Add New Price
            </button>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">48</div>
                <div class="stat-label">Total Crops</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Markets</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">156</div>
                <div class="stat-label">Price Updates Today</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Data Accuracy</div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="admin-section">
            <h2 class="section-title">
                <i class="fas fa-bolt"></i> Quick Actions
            </h2>
            <div class="quick-actions">
                <button class="btn-primary">
                    <i class="fas fa-sync"></i> Bulk Update Prices
                </button>
                <button class="btn-primary">
                    <i class="fas fa-download"></i> Export Data
                </button>
                <button class="btn-primary">
                    <i class="fas fa-upload"></i> Import CSV
                </button>
                <button class="btn-primary">
                    <i class="fas fa-bell"></i> Price Alerts
                </button>
            </div>
        </div>

        <!-- Add/Edit Price Form -->
        <div class="admin-section" id="addPriceForm" style="display: none;">
            <h2 class="section-title">
                <i class="fas fa-plus-circle"></i> Add New Market Price
            </h2>
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="crop_name">Crop Name</label>
                        <select id="crop_name" name="crop_name" required>
                            <option value="">Select Crop</option>
                            <option value="rice">Rice</option>
                            <option value="wheat">Wheat</option>
                            <option value="corn">Corn</option>
                            <option value="potato">Potato</option>
                            <option value="onion">Onion</option>
                            <option value="garlic">Garlic</option>
                            <option value="tomato">Tomato</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="variety">Variety/Type</label>
                        <input type="text" id="variety" name="variety" placeholder="e.g., Basmati, BR28">
                    </div>
                </div>
                <div class="form-triple">
                    <div class="form-group">
                        <label for="current_price">Current Price (BDT/kg)</label>
                        <input type="number" id="current_price" name="current_price" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <label for="previous_price">Previous Price (BDT/kg)</label>
                        <input type="number" id="previous_price" name="previous_price" step="0.01">
                    </div>
                    <div class="form-group">
                        <label for="market_location">Market Location</label>
                        <select id="market_location" name="market_location" required>
                            <option value="">Select Market</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="sylhet">Sylhet</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="khulna">Khulna</option>
                            <option value="barisal">Barisal</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="unit">Unit</label>
                        <select id="unit" name="unit" required>
                            <option value="kg">Kilogram (kg)</option>
                            <option value="ton">Ton</option>
                            <option value="maund">Maund</option>
                            <option value="seer">Seer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quality">Quality Grade</label>
                        <select id="quality" name="quality">
                            <option value="premium">Premium</option>
                            <option value="standard">Standard</option>
                            <option value="low">Low Grade</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="remarks">Market Remarks</label>
                    <textarea id="remarks" name="remarks" placeholder="Additional notes about market conditions, demand, etc."></textarea>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn-primary">
                        <i class="fas fa-save"></i> Save Price Data
                    </button>
                    <button type="button" class="btn-secondary" onclick="toggleAddForm()">
                        <i class="fas fa-times"></i> Cancel
                    </button>
                </div>
            </form>
        </div>

        <!-- Search and Filter -->
        <div class="admin-section">
            <h2 class="section-title">
                <i class="fas fa-table"></i> Current Market Prices
            </h2>
            <div class="search-filter">
                <input type="text" placeholder="Search crop name..." id="searchCrop">
                <select id="filterMarket">
                    <option value="">All Markets</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="sylhet">Sylhet</option>
                    <option value="rajshahi">Rajshahi</option>
                </select>
                <select id="filterCategory">
                    <option value="">All Categories</option>
                    <option value="cereals">Cereals</option>
                    <option value="vegetables">Vegetables</option>
                    <option value="spices">Spices</option>
                </select>
                <button class="btn-primary">
                    <i class="fas fa-search"></i> Filter
                </button>
            </div>

            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i>
                <strong>Last Updated:</strong> January 15, 2024 at 2:30 PM | 
                <strong>Next Update:</strong> Every 6 hours | 
                <strong>Data Source:</strong> Live Market Feed
            </div>

            <table class="prices-table">
                <thead>
                    <tr>
                        <th>Crop</th>
                        <th>Variety</th>
                        <th>Market</th>
                        <th>Current Price</th>
                        <th>Previous Price</th>
                        <th>Change</th>
                        <th>Quality</th>
                        <th>Last Updated</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="crop-icon rice-icon">🌾</span>
                                Rice
                            </div>
                        </td>
                        <td>BR28</td>
                        <td>Dhaka</td>
                        <td><strong>৳48.50/kg</strong></td>
                        <td>৳47.20/kg</td>
                        <td class="price-increase">+2.75%</td>
                        <td>Premium</td>
                        <td>2 hours ago</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <button class="btn-secondary btn-edit">Edit</button>
                            <button class="btn-secondary btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="crop-icon wheat-icon">🌾</span>
                                Wheat
                            </div>
                        </td>
                        <td>Local</td>
                        <td>Chittagong</td>
                        <td><strong>৳42.00/kg</strong></td>
                        <td>৳43.50/kg</td>
                        <td class="price-decrease">-3.45%</td>
                        <td>Standard</td>
                        <td>1 hour ago</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <button class="btn-secondary btn-edit">Edit</button>
                            <button class="btn-secondary btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="crop-icon corn-icon">🌽</span>
                                Corn
                            </div>
                        </td>
                        <td>Sweet Corn</td>
                        <td>Sylhet</td>
                        <td><strong>৳35.75/kg</strong></td>
                        <td>৳35.75/kg</td>
                        <td class="price-stable">0.00%</td>
                        <td>Premium</td>
                        <td>3 hours ago</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <button class="btn-secondary btn-edit">Edit</button>
                            <button class="btn-secondary btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="crop-icon potato-icon">🥔</span>
                                Potato
                            </div>
                        </td>
                        <td>Diamant</td>
                        <td>Rajshahi</td>
                        <td><strong>৳28.20/kg</strong></td>
                        <td>৳26.80/kg</td>
                        <td class="price-increase">+5.22%</td>
                        <td>Standard</td>
                        <td>30 minutes ago</td>
                        <td><span class="status-badge status-active">Active</span></td>
                        <td>
                            <button class="btn-secondary btn-edit">Edit</button>
                            <button class="btn-secondary btn-delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="crop-icon">🧄</span>
                                Onion
                            </div>
                        </td>
                        <td>Local Red</td>
                        <td>Khulna</td>
                        <td><strong>৳55.00/kg</strong></td>
                        <td>৳58.25/kg</td>
                        <td class="price-decrease">-5.58%</td>
                        <td>Premium</td>
                        <td>4 hours ago</td>
                        <td><span class="status-badge status-inactive">Inactive</span></td>
                        <td>
                            <button class="btn-secondary btn-edit">Edit</button>
                            <button class="btn-secondary btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Market Trends Section -->
        <div class="admin-section">
            <h2 class="section-title">
                <i class="fas fa-chart-area"></i> Market Analysis & Trends
            </h2>
            <div class="form-row">
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px;">
                    <h4 style="color: var(--success-green); margin-bottom: 10px;">
                        <i class="fas fa-arrow-up"></i> Price Increases (Last 24h)
                    </h4>
                    <ul style="list-style: none; padding: 0;">
                        <li>• Rice (BR28): +2.75% - High demand</li>
                        <li>• Potato (Diamant): +5.22% - Supply shortage</li>
                        <li>• Garlic: +3.15% - Import delays</li>
                    </ul>
                </div>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px;">
                    <h4 style="color: var(--danger-red); margin-bottom: 10px;">
                        <i class="fas fa-arrow-down"></i> Price Decreases (Last 24h)
                    </h4>
                    <ul style="list-style: none; padding: 0;">
                        <li>• Wheat: -3.45% - Good harvest</li>
                        <li>• Onion: -5.58% - Seasonal peak</li>
                        <li>• Tomato: -2.20% - Local supply increase</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAddForm() {
            const form = document.getElementById('addPriceForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        }

        // Auto-refresh price data every 5 minutes
        setInterval(function() {
            console.log('Refreshing market data...');
            // Add actual refresh logic here
        }, 300000);
    </script>
</body>
</html>
