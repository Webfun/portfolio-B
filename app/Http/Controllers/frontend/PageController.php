<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Project;
use Illuminate\Support\Facades\File;


class PageController extends Controller
{

    public function home()
    {
        $projects = Project::all();
        $testimonials = Testimonial::all();
        return view('frontend.home', compact('testimonials','projects'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function services()
    {
        return view('frontend.services');
    }
    public function project()
    {
        return view('frontend.project');
    }
}
