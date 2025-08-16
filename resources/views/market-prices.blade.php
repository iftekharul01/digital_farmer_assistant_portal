@include('partials.header')

<div class="container">
    <!-- Filter Bar -->
    <div class="filter-bar">
        <form method="GET" action="{{ route('market-prices') }}" class="filter-form">
            <div class="filter-group">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="পণ্য খুঁজুন" class="search-input">
                <select name="category" class="filter-select">
                    <option value="">সব ক্যাটেগরি</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
                <select name="location" class="filter-select">
                    <option value="">সব বাজার</option>
                    @foreach($locations as $location)
                        <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                            {{ $location }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i> খুঁজুন
                </button>
            </div>
        </form>
    </div>

    <!-- Product Cards Grid -->
    <div class="products-grid">
        @foreach($products as $product)
            <div class="product-card">
                @if($product->product_image && Storage::disk('public')->exists('assets/product_images/' . $product->product_image))
                    <img src="{{ asset('storage/assets/product_images/' . $product->product_image) }}" 
                         alt="{{ $product->crop_name }}" class="product-image">
                @else
                    <div class="product-image-placeholder">
                        <i class="fas fa-seedling"></i>
                    </div>
                @endif
                
                <div class="product-info">
                    <h3 class="product-name">{{ $product->crop_name }}</h3>
                    <p class="product-category">{{ $product->crop_category }}</p>
                    @if($product->variety_type)
                        <p class="product-variety">{{ $product->variety_type }}</p>
                    @endif
                    <div class="price-info">
                        <span class="current-price">৳{{ number_format($product->current_price, 2) }}</span>
                        @if($product->unit)
                            <span class="price-unit">প্রতি {{ $product->unit }}</span>
                        @endif
                    </div>
                    @if($product->previous_price && $product->previous_price != $product->current_price)
                        <div class="price-change">
                            আগের দাম: ৳{{ number_format($product->previous_price, 2) }}
                            @php
                                $change = $product->current_price - $product->previous_price;
                                $changePercent = $product->previous_price > 0 ? ($change / $product->previous_price) * 100 : 0;
                            @endphp
                            <span class="change-indicator {{ $change >= 0 ? 'increase' : 'decrease' }}">
                                {{ $change >= 0 ? '↑' : '↓' }} 
                                {{ abs($changePercent) > 0.01 ? number_format(abs($changePercent), 1) . '%' : '0%' }}
                            </span>
                        </div>
                    @endif
                    <div class="product-meta">
                        <div class="location">
                            <i class="fas fa-map-marker-alt"></i> 
                            {{ $product->market_location }}
                        </div>
                        @if($product->quality_grade)
                            <div class="quality">
                                <i class="fas fa-star"></i> 
                                {{ $product->quality_grade }}
                            </div>
                        @endif
                    </div>
                    @if($product->market_remarks)
                        <p class="remarks">{{ $product->market_remarks }}</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper">
        {{ $products->appends(request()->query())->links('custom.pagination') }}
    </div>
</div>

@include('partials.footer')

<style>
    /* Main Content Styles */
    .filter-bar {
        background: white;
        padding: 24px;
        border-radius: 12px;
        box-shadow: 0 2px 8px var(--shadow-medium);
        margin: 24px 0;
    }

    .filter-form {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .filter-group {
        display: flex;
        gap: 16px;
        align-items: center;
        flex-wrap: wrap;
    }

    .search-input, .filter-select {
        padding: 12px 16px;
        border: 1px solid var(--border-light);
        border-radius: 8px;
        font-size: 14px;
        min-width: 200px;
        background: white;
        transition: all 0.2s ease;
    }

    .search-input:focus, .filter-select:focus {
        outline: none;
        border-color: var(--primary-green);
        box-shadow: 0 0 0 3px var(--shadow-light);
    }

    .search-btn {
        background: var(--primary-green);
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
    }

    .search-btn:hover {
        background: var(--dark-green);
        transform: translateY(-1px);
    }

    /* Products Grid */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin: 24px 0;
    }

    .product-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px var(--shadow-card);
        transition: all 0.3s ease;
        border: 1px solid var(--soft-gray-border);
    }

    .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 24px var(--shadow-medium);
    }

    .product-image {
        width: 100%;
        height: 160px;
        object-fit: cover;
        background: var(--light-green);
    }

    .product-image-placeholder {
        width: 100%;
        height: 160px;
        background: var(--light-green);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-green);
        font-size: 2rem;
    }

    .product-info {
        padding: 16px;
    }

    .product-name {
        font-size: 1.1rem;
        font-weight: 700;
        margin: 0 0 8px 0;
        color: var(--dark-green);
    }

    .product-category {
        color: var(--text-color-dark);
        font-size: 0.85rem;
        margin: 0 0 4px 0;
        font-weight: 500;
    }

    .product-variety {
        color: var(--primary-green);
        font-size: 0.8rem;
        margin: 0 0 12px 0;
        font-weight: 600;
    }

    .price-info {
        margin: 12px 0;
    }

    .current-price {
        font-size: 1.3rem;
        font-weight: 800;
        color: var(--primary-green);
    }

    .price-unit {
        color: var(--text-color-dark);
        font-size: 0.85rem;
        margin-left: 8px;
    }

    .price-change {
        font-size: 0.8rem;
        margin: 8px 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .change-indicator {
        font-weight: 600;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 0.75rem;
    }

    .change-indicator.increase {
        background: #d4edda;
        color: #155724;
    }

    .change-indicator.decrease {
        background: #f8d7da;
        color: #721c24;
    }

    .product-meta {
        margin: 12px 0 8px 0;
        font-size: 0.8rem;
        color: var(--text-color-dark);
    }

    .location, .quality {
        display: flex;
        align-items: center;
        gap: 4px;
        margin: 4px 0;
    }

    .location i {
        color: #dc3545;
    }

    .quality i {
        color: #ffc107;
    }

    .remarks {
        font-size: 0.8rem;
        color: var(--text-color-dark);
        margin: 8px 0 0 0;
        font-style: italic;
        border-top: 1px solid var(--soft-gray-border);
        padding-top: 8px;
    }

    /* Pagination */
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin: 32px 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .filter-group {
            flex-direction: column;
            align-items: stretch;
        }

        .search-input, .filter-select {
            min-width: auto;
            width: 100%;
        }

        .products-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 16px;
        }

        .filter-bar {
            margin: 16px 0;
            padding: 20px;
        }
    }

    @media (max-width: 480px) {
        .products-grid {
            grid-template-columns: 1fr;
        }

        .product-card {
            max-width: none;
        }
    }
</style>
