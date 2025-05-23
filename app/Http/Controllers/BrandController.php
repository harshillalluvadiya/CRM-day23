<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index', compact('brands'));
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|unique:brands,slug',
            'description' => 'nullable|string',
            'legal_name' => 'required|string|unique:brands,legal_name',
            'business_logo' => 'nullable|file|image|max:2048',
            'business_email' => 'nullable|email',
            'business_phone' => 'nullable|string',
            'branded_domain' => 'nullable|string',
            'business_website' => 'nullable|string',
            'business_niche' => 'nullable|string',
            'business_type' => 'nullable|string',
            'business_industry' => 'nullable|string',
            'registration_id_type' => 'nullable|string',
            'registration_number' => 'nullable|string',
            'regions_of_operations' => 'nullable|string',
            'street_address' => 'nullable|string',
            'city' => 'nullable|string',
            'postal_code' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'time_zone' => 'nullable|string',
            'platform_language' => 'nullable|string',
            'rep_first_name' => 'nullable|string',
            'rep_last_name' => 'nullable|string',
            'rep_email' => 'nullable|email',
            'rep_job_position' => 'nullable|string',
            'rep_phone' => 'nullable|string',
        ]);

        // Generate slug if not provided
        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['name']);

        // Handle file upload if present
        if ($request->hasFile('business_logo')) {
            $validated['business_logo'] = $request->file('business_logo')->store('logos', 'public');
        }

        Brand::create($validated);

        return redirect()->route('brand.index')->with('success', 'Brand created successfully!');
    }

    // Add show, edit, update, destroy methods as needed
}
