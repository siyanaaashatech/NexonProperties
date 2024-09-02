<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Show all blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    // Show form to create a new blog
    public function create()
    {
        return view('admin.blogs.create');
    }

    // Store new blog in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string', // Summernote content
            'author' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        // Handle the file upload
        $imagePath = $request->file('image')->store('blog_images', 'public');

        // Store the blog in the database
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description'); // Summernote content
        $blog->author = $request->input('author');
        $blog->image = $imagePath;
        $blog->status = $request->input('status');
        $blog->save();

        // Redirect to a desired page with a success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog created successfully!');
    }

    

    // Show form to edit the blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.update', compact('blog'));
    }

    // Update blog in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->status = $request->status;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/blogs'), $imageName);
            $blog->image = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Delete a blog from the database
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('public/uploads');
            $url = asset('storage/uploads/' . basename($path));

            return response()->json(['url' => $url]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}
