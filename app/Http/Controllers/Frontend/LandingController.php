<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $categories = Category::query()->latest()->get();
        $careers = Career::query()->latest()->get();

        return view('pages.frontend.index', compact('categories', 'careers'));
    }
}
