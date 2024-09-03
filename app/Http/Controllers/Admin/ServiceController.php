<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Storage;

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
            'metadata_id' => 'required|exists:metadata,id',
            'cropData' => 'required|string',
        ]);

        $cropData = json_decode($request->input('cropData'), true);
        $images = [];

        foreach ($request->input('image') as $base64Image) {
            // Decode base64 image data
            $image = explode(',', $base64Image);
            $decodedImage = base64_decode($image[1]);

            // Create an image resource from the decoded image
            $imageResource = imagecreatefromstring($decodedImage);

            // Check if the image resource was created successfully
            if ($imageResource !== false) {
                // Generate a unique file name with .webp extension
                $imageName = time() . '-' . Str::uuid() . '.webp';
                $destinationPath = storage_path('app/uploads/images/services');

                // Ensure the directory exists
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true, true);
                }

                // Save the image as .webp format
                $savedPath = $destinationPath . '/' . $imageName;
                imagewebp($imageResource, $savedPath); // Save as WebP format

                // Free up memory
                imagedestroy($imageResource);

                // Store the relative path to be saved in the database
                $relativeImagePath = 'uploads/images/services/' . $imageName;
                $images[] = $relativeImagePath;
            }
        }

        // Create new service record
        Service::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => json_encode($images),
            'status' => $request->status,
            'metadata_id' => $request->metadata_id,
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
            'metadata_id' => 'required|exists:metadata,id',
            'cropData' => 'sometimes|string', // Optional crop data for images
        ]);

        $cropData = $request->input('cropData') ? json_decode($request->input('cropData'), true) : null;
        $images = json_decode($service->image, true);

        // Handle new images if provided
        if ($request->has('image')) {
            foreach ($request->input('image') as $base64Image) {
                // Decode base64 image data
                $image = explode(',', $base64Image);
                $decodedImage = base64_decode($image[1]);

                // Create an image resource from the decoded image
                $imageResource = imagecreatefromstring($decodedImage);

                // Check if the image resource was created successfully
                if ($imageResource !== false) {
                    // Generate a unique file name with .webp extension
                    $imageName = time() . '-' . Str::uuid() . '.webp';
                    $destinationPath = storage_path('app/uploads/images/services');

                    // Ensure the directory exists
                    if (!File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath, 0755, true, true);
                    }

                    // Save the image as .webp format
                    $savedPath = $destinationPath . '/' . $imageName;
                    imagewebp($imageResource, $savedPath); // Save as WebP format

                    // Free up memory
                    imagedestroy($imageResource);

                    // Store the relative path to be saved in the database
                    $relativeImagePath = 'uploads/images/services/' . $imageName;
                    $images[] = $relativeImagePath;
                }
            }
        }

        // Update the service record
        $service->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => json_encode($images), // Store updated images as JSON
            'status' => $request->status,
            'metadata_id' => $request->metadata_id,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
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