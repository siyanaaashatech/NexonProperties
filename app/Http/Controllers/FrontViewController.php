<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class FrontViewController extends Controller
{
    public function index()
    {
        $bannerproject = Service::latest()->get()->take(4);
        $services = Service::latest()->get()->take(4);
        $blog=blog::latest()->get();
        $testimonial=testimonial::latest()->get();
        $advantage=advantage::latest()->get();
        $about=about::latesh()->get()->take(1);




        return view('frontend.welcome',  compact([
            'services','blog','testimonial','advantage','about'
        ]));
    }
    // public function singlePost($slug)
    // {
    //     $post = Post::where('slug', $slug)->firstOrFail();
    //     $relatedPosts = Post::where('id', '!=', $post->id)->get();

    //     return view('frontend.posts', compact('post', 'relatedPosts'));
    // }
}


