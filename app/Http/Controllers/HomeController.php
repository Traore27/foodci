<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('active', true)->get();
        $restaurants = Restaurant::where('actif', true)->get();

        return view('home', compact('categories', 'restaurants'));
    }
}