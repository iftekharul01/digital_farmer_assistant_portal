<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPrice;

class MarketPriceController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductPrice::where('status', true);

        // Apply filters
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('crop_name', 'like', '%' . $request->search . '%')
                  ->orWhere('variety_type', 'like', '%' . $request->search . '%')
                  ->orWhere('crop_category', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('category') && $request->category != 'সব') {
            $query->where('crop_category', $request->category);
        }

        if ($request->filled('location') && $request->location != 'সব') {
            $query->where('market_location', $request->location);
        }

        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_low':
                    $query->orderBy('current_price', 'asc');
                    break;
                case 'price_high':
                    $query->orderBy('current_price', 'desc');
                    break;
                case 'newest':
                    $query->orderBy('updated_at', 'desc');
                    break;
                default:
                    $query->orderBy('crop_name', 'asc');
            }
        } else {
            $query->orderBy('crop_name', 'asc');
        }

        $products = $query->paginate(12);
        
        // Get unique categories and locations for filters
        $categories = ProductPrice::where('status', true)
            ->distinct()
            ->pluck('crop_category')
            ->sort();
            
        $locations = ProductPrice::where('status', true)
            ->distinct()
            ->pluck('market_location')
            ->sort();

        return view('market-prices', compact('products', 'categories', 'locations'));
    }

    public function show($id)
    {
        $product = ProductPrice::findOrFail($id);
        return view('market-prices.show', compact('product'));
    }
}
