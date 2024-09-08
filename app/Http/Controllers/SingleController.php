<?php
<<<<<<< HEAD
namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
class SingleController extends Controller
{
    public function render_service()
    {
        $services = Service::latest()->get();
        return view('frontend.properties', compact( 'services'));
    }

    public function render_about()
    {
        $services = Service::latest()->get();
        return view('frontend.about', compact( 'services'));
    }
    public function render_blog()
    {
        $services = Service::latest()->get();
        return view('frontend.blog', compact( 'services'));
    }


    public function render_singleblogpost()
    {
        $services = Service::latest()->get();
        return view('frontend.singleblogpost', compact('services'));
    }
=======

namespace App\Http\Controllers;


use App\Models\Service;

use Illuminate\Http\Request;


class SingleController extends Controller
{

    public function render_service()
    {
        
        $services = Service::latest()->get();
        
        return view('frontend.services', compact( 'services'));
    }

>>>>>>> 94f27eb57ea6c5ee246d6f9b224541aa4554c74d
}