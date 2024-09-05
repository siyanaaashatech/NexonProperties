<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subCategories = SubCategory::with(['category', 'metadata'])->get();
        return view('admin.subcategories.index', compact('subCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Automatically set Meta Description, Meta Keywords, and Slug based on the Meta Title
        $metaTitle = $request->title;
        $metaDescription = $metaTitle;
        $metaKeywords = $metaTitle;
        $slug = Str::slug($metaTitle);

        // Create a new metadata entry
        $metadata = Metadata::create([
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'slug' => $slug,
        ]);

        // Create a new subcategory and associate with metadata
        SubCategory::create([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'metadata_id' => $metadata->id,
        ]);

        return redirect()->route('subcategories.index')->with('success', 'SubCategory created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subCategory = SubCategory::with('metadata')->findOrFail($id);
        $categories = Category::all();
        return view('admin.subcategories.edit', compact('subCategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Automatically set Meta Description, Meta Keywords, and Slug based on the Meta Title
        $metaTitle = $request->title;
        $metaDescription = $metaTitle;
        $metaKeywords = $metaTitle;
        $slug = Str::slug($metaTitle);

        // Update metadata record or create if not existing
        $subCategory->metadata()->updateOrCreate([], [
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'slug' => $slug,
        ]);

        // Update subcategory record
        $subCategory->update([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('subcategories.index')->with('success', 'SubCategory updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subCategory = SubCategory::findOrFail($id);
        $subCategory->delete();

        return redirect()->route('subcategories.index')->with('success', 'SubCategory deleted successfully.');
    }
}
