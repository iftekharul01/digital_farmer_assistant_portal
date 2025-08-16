<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductPrice;
use Illuminate\Support\Facades\Session;

class AdminPriceController extends Controller
{
    public function __construct()
    {
        // Check admin authentication
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login as admin to access this page.');
        }
    }

    public function index(Request $request)
    {
        $query = ProductPrice::query();

        // Apply search filter
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('crop_name', 'like', '%' . $request->search . '%')
                  ->orWhere('variety_type', 'like', '%' . $request->search . '%')
                  ->orWhere('crop_category', 'like', '%' . $request->search . '%')
                  ->orWhere('market_location', 'like', '%' . $request->search . '%');
            });
        }

        // Apply category filter
        if ($request->filled('category') && $request->category != '') {
            $query->where('crop_category', $request->category);
        }

        // Apply location filter
        if ($request->filled('location') && $request->location != '') {
            $query->where('market_location', $request->location);
        }

        $products = $query->orderBy('updated_at', 'desc')->paginate(10);
        
        // Get statistics
        $totalCrops = ProductPrice::count();
        $totalMarkets = ProductPrice::distinct('market_location')->count();
        $todayUpdates = ProductPrice::whereDate('updated_at', today())->count();
        
        // Get unique categories and locations for filters
        $categories = ProductPrice::distinct()->pluck('crop_category')->sort();
        $locations = ProductPrice::distinct()->pluck('market_location')->sort();

        return view('admin.admin_market-prices', compact(
            'products', 
            'totalCrops', 
            'totalMarkets', 
            'todayUpdates', 
            'categories', 
            'locations'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'crop_category' => 'required|string|max:255',
            'crop_name' => 'required|string|max:255',
            'variety_type' => 'nullable|string|max:255',
            'current_price' => 'required|numeric|min:0',
            'previous_price' => 'nullable|numeric|min:0',
            'market_location' => 'required|string|max:255',
            'quality_grade' => 'required|string|max:255',
            'market_remarks' => 'nullable|string',
            'unit' => 'required|string|max:50',
            'product_image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i']
        ], [
            'product_image.regex' => 'অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন (jpg, jpeg, png, gif, webp)'
        ]);

        $productData = $request->only([
            'crop_category', 'crop_name', 'variety_type', 'current_price', 
            'previous_price', 'market_location', 'quality_grade', 
            'market_remarks', 'unit', 'product_image'
        ]);

        ProductPrice::create($productData);

        return redirect()->route('admin.market-prices')
                        ->with('success', 'পণ্যের দাম সফলভাবে যোগ করা হয়েছে!');
    }

    public function edit($id)
    {
        $product = ProductPrice::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = ProductPrice::findOrFail($id);

        $request->validate([
            'crop_category' => 'required|string|max:255',
            'crop_name' => 'required|string|max:255',
            'variety_type' => 'nullable|string|max:255',
            'current_price' => 'required|numeric|min:0',
            'previous_price' => 'nullable|numeric|min:0',
            'market_location' => 'required|string|max:255',
            'quality_grade' => 'required|string|max:255',
            'market_remarks' => 'nullable|string',
            'unit' => 'required|string|max:50',
            'product_image' => ['nullable', 'string', 'max:255', 'regex:/^[a-zA-Z0-9_\-\.]+\.(jpg|jpeg|png|gif|webp)$/i']
        ], [
            'product_image.regex' => 'অনুগ্রহ করে একটি বৈধ ইমেজ ফাইলের নাম দিন (jpg, jpeg, png, gif, webp)'
        ]);

        $productData = $request->only([
            'crop_category', 'crop_name', 'variety_type', 'current_price', 
            'previous_price', 'market_location', 'quality_grade', 
            'market_remarks', 'unit', 'product_image'
        ]);

        $product->update($productData);

        return redirect()->route('admin.market-prices')
                        ->with('success', 'পণ্যের তথ্য সফলভাবে আপডেট করা হয়েছে!');
    }

    public function destroy($id)
    {
        $product = ProductPrice::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.market-prices')
                        ->with('success', 'পণ্য সফলভাবে মুছে ফেলা হয়েছে!');
    }

    public function bulkUpdate(Request $request)
    {
        $request->validate([
            'price_increase_percentage' => 'required|numeric|min:0|max:100',
            'selected_category' => 'nullable|string',
            'selected_location' => 'nullable|string'
        ]);

        $query = ProductPrice::query();

        if ($request->filled('selected_category')) {
            $query->where('crop_category', $request->selected_category);
        }

        if ($request->filled('selected_location')) {
            $query->where('market_location', $request->selected_location);
        }

        $products = $query->get();
        $percentage = $request->price_increase_percentage / 100;

        foreach ($products as $product) {
            $newPrice = $product->current_price * (1 + $percentage);
            $product->update([
                'previous_price' => $product->current_price,
                'current_price' => $newPrice
            ]);
        }

        return redirect()->route('admin.market-prices')
                        ->with('success', 'বাল্ক প্রাইস আপডেট সফলভাবে সম্পন্ন হয়েছে!');
    }
}
