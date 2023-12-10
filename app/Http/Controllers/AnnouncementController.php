<?php

namespace App\Http\Controllers;

use App\Models\Category;

class AnnouncementController extends Controller
{
    public function newAnnouncements()
    {
        $categories = Category::all();
        return view('annunci.newAnnouncements', compact('categories'));
    }
}
