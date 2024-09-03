<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        $services = Service::with('metadata')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        $metadata = Metadata::all();
        return view('admin.services.create', compact('metadata'));
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|array',
            'image.*' => 'required|string', // Validate as string since it's base64
            'status' => 'required|boolean',
            'cropData' => 'required|string',
        ]);

        $cropData = json_decode($request->input('cropData'), true);
        $images = [];

        foreach ($request->input('image') as $base64Image) {
            $image = explode(',', $base64Image);
            $decodedImage = base64_decode($image[1]);
            $imageResource = imagecreatefromstring($decodedImage);

            if ($imageResource !== false) {
                $imageName = time() . '-' . Str::uuid() . '.webp';
                $destinationPath = storage_path('app/uploads/images/services');

                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true, true);
                }

                $savedPath = $destinationPath . '/' . $imageName;
                imagewebp($imageResource, $savedPath);
                imagedestroy($imageResource);
                $relativeImagePath = 'uploads/images/services/' . $imageName;
                $images[] = $relativeImagePath;
            }
        }

        // Create a new metadata entry
        $metadata = Metadata::create([
            'meta_title' => $request->title,
            'meta_description' => $request->description,
            'meta_keywords' => '', // Set default or modify as needed
            'slug' => Str::slug($request->title)
        ]);

        // Create new service record and associate with metadata
        Service::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => json_encode($images),
            'status' => $request->status,
            'metadata_id' => $metadata->id, // Link newly created metadata
        ]);

        session()->flash('success', 'Service created successfully.');

        return redirect()->route('services.index');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        $metadata = Metadata::all();
        return view('admin.services.update', compact('service', 'metadata'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'sometimes|array',
            'image.*' => 'required|string', // Validate as string since it's base64
            'status' => 'required|boolean',
            'cropData' => 'sometimes|string', // Optional crop data for images
        ]);

        $cropData = $request->input('cropData') ? json_decode($request->input('cropData'), true) : null;
        $images = json_decode($service->image, true);

        // Handle new images if provided
        if ($request->has('image')) {
            foreach ($request->input('image') as $base64Image) {
                $image = explode(',', $base64Image);
                $decodedImage = base64_decode($image[1]);
                $imageResource = imagecreatefromstring($decodedImage);

                if ($imageResource !== false) {
                    $imageName = time() . '-' . Str::uuid() . '.webp';
                    $destinationPath = storage_path('app/uploads/images/services');

                    if (!File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath, 0755, true, true);
                    }

                    $savedPath = $destinationPath . '/' . $imageName;
                    imagewebp($imageResource, $savedPath);
                    imagedestroy($imageResource);
                    $relativeImagePath = 'uploads/images/services/' . $imageName;
                    $images[] = $relativeImagePath;
                }
            }
        }

        // Update metadata record
        $service->metadata()->update([
            'meta_title' => $request->title,
            'meta_description' => $request->description,
            'meta_keywords' => '', // Adjust as necessary
            'slug' => Str::slug($request->title)
        ]);

        // Update service record
        $service->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => json_encode($images), // Store updated images as JSON
            'status' => $request->status,
        ]);

        session()->flash('success', 'Service updated successfully.');

        return redirect()->route('services.index');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        $images = json_decode($service->image, true);
        if ($images) {
            foreach ($images as $image) {
                $filePath = storage_path('app/' . $image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
