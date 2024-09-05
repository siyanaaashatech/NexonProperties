<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('metadata')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Automatically set Meta Description, Meta Keywords, and Slug based on the Title
        $metaTitle = $request->title;
        $metaDescription = $metaTitle;
        $metaKeywords = $metaTitle;
        $slug = Str::slug($metaTitle);

        // Create metadata record
        $metadata = Metadata::create([
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'slug' => $slug,
        ]);

        // Create category and associate metadata
        Category::create([
            'title' => $request->title,
            'metadata_id' => $metadata->id,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::with('metadata')->findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Automatically set Meta Description, Meta Keywords, and Slug based on the Title
        $metaTitle = $request->title;
        $metaDescription = $metaTitle;
        $metaKeywords = $metaTitle;
        $slug = Str::slug($metaTitle);

        // Update metadata record or create if not existing
        $category->metadata()->updateOrCreate([], [
            'meta_title' => $metaTitle,
            'meta_description' => $metaDescription,
            'meta_keywords' => $metaKeywords,
            'slug' => $slug,
        ]);

        // Update category record
        $category->update([
            'title' => $request->title,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
