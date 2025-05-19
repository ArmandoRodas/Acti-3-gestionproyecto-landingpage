<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Plan;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $features     = Feature::all();
        $plans        = Plan::all();
        $testimonials = Testimonial::all();
        return view('home', compact('features','plans','testimonials'));
    }
}
