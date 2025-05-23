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
            // Add validation for other fields as needed
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
