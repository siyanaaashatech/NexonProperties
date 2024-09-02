<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Metadata;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        // Fetch all services with their associated metadata
        $services = Service::with('metadata')->get();
        return view('admin.services.index', compact('services')); // Ensure this line passes the $services variable to the view
    }
    

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        // Fetch all metadata for the dropdown selection
        $metadata = Metadata::all();
        return view('admin.services.create', compact('metadata'));
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|array', // Validate multiple images as array
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Individual image validation
            'status' => 'required|boolean',
            'metadata_id' => 'required|exists:metadata,id',
        ]);

        // Handle image upload
        $images = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $name = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads/services'), $name);
                $images[] = $name;
            }
        }

        // Create new service record
        Service::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'image' => json_encode($images), // Store images as JSON
            'status' => $request->status,
            'metadata_id' => $request->metadata_id,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service) 
{
    // Fetch all metadata for the dropdown selection
    $metadata = Metadata::all();
    return view('admin.services.update', compact('service', 'metadata')); 
}


    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $services) 
{
    // Validate incoming request
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'sometimes|array', // Optional image array
        'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        'status' => 'required|boolean',
        'metadata_id' => 'required|exists:metadata,id',
    ]);

    // Handle image upload
    $images = json_decode($services->image, true); 
    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $file) {
            $name = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('uploads/services'), $name);
            $images[] = $name;
        }
    }

    // Update service record
    $services->update([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'description' => $request->description,
        'image' => json_encode($images), // Store images as JSON
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
        // Delete the associated images from storage
        $images = json_decode($service->image, true);
        if ($images) {
            foreach ($images as $image) {
                $filePath = public_path('uploads/services/' . $image);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Delete the service record
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
