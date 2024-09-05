<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $metadata = Metadata::all();
        return view('admin.property.create', compact('categories', 'subCategories', 'metadata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'street' => 'required|string|max:255',
            'suburb' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'post_code' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'price_type' => 'required|in:fixed,negotiable,on_request',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|integer',
            'status' => 'required|boolean',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability_status' => 'required|in:available,sold,rental',
            'rental_period' => 'nullable|string',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cropData' => 'required|string',
        ]);

        // Handle the main image upload
        $mainImagePath = $request->file('main_image')->store('uploads/images/property/main', 'local');

        // Handle other images upload
        $otherImages = [];
        if ($request->hasFile('other_images')) {
            foreach ($request->file('other_images') as $image) {
                $path = $image->store('uploads/images/property/others', 'local');
                $otherImages[] = $path;
            }
        }

        // Create a new metadata entry
        $metadata = Metadata::create([
            'meta_title' => $request->title,
            'meta_description' => $request->description,
            'meta_keywords' => $request->keywords,
            'slug' => Str::slug($request->title)
        ]);

        // Create new property record and associate with metadata
        Property::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'street' => $request->street,
            'suburb' => $request->suburb,
            'state' => $request->state,
            'post_code' => $request->post_code,
            'country' => $request->country,
            'price' => $request->price,
            'price_type' => $request->price_type,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'area' => $request->area,
            'status' => $request->status,
            'main_image' => $mainImagePath,
            'availability_status' => $request->availability_status,
            'rental_period' => $request->rental_period,
            'other_images' => json_encode($otherImages),
            'metadata_id' => $metadata->id, // Link newly created metadata
        ]);

        return redirect()->route('property.index')->with('success', 'Property created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property = Property::findOrFail($id);
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $metadata = Metadata::all();
        return view('admin.property.update', compact('property', 'categories', 'subCategories', 'metadata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $property = Property::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',
            'street' => 'required|string|max:255',
            'suburb' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'post_code' => 'required|string|max:20',
            'country' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'price_type' => 'required|in:fixed,negotiable,on_request',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'area' => 'required|integer',
            'status' => 'required|boolean',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'availability_status' => 'required|in:available,sold,rental',
            'rental_period' => 'nullable|string',
            'other_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cropData' => 'sometimes|string',
        ]);

        // Handle main image update
        if ($request->hasFile('main_image')) {
            // Delete old main image
            Storage::disk('local')->delete($property->main_image);
            $property->main_image = $request->file('main_image')->store('uploads/images/property/main', 'local');
        }

        // Handle other images update
        if ($request->hasFile('other_images')) {
            // Delete old other images
            foreach (json_decode($property->other_images, true) as $oldImage) {
                Storage::disk('local')->delete($oldImage);
            }
            $otherImages = [];
            foreach ($request->file('other_images') as $image) {
                $path = $image->store('uploads/images/property/others', 'local');
                $otherImages[] = $path;
            }
            $property->other_images = json_encode($otherImages);
        }

        // Update metadata record
        $property->metadata()->updateOrCreate([], [
            'meta_title' => $request->title,
            'meta_description' => $request->description,
            'meta_keywords' => $request->keywords,
            'slug' => Str::slug($request->title)
        ]);

        // Update property record
        $property->update($request->all());

        return redirect()->route('property.index')->with('success', 'Property updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $property = Property::findOrFail($id);
    
        // Delete the main image
        Storage::disk('local')->delete($property->main_image);
    
        // Check if other_images is already an array; if not, decode it
        $otherImages = is_array($property->other_images) ? $property->other_images : json_decode($property->other_images, true);
    
        // Ensure that $otherImages is an array before attempting to delete the images
        if (is_array($otherImages)) {
            foreach ($otherImages as $image) {
                Storage::disk('local')->delete($image);
            }
        }
    
        $property->delete();
    
        return redirect()->route('admin.property.index')->with('success', 'Property deleted successfully.');
    }
}
