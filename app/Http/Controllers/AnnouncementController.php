<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;

class AnnouncementController extends Controller
{
    public function newAnnouncements()
    {
        $categories = Category::all();


        return view('annunci.newAnnouncements', compact('categories'));
    }

    public function categoryShow(Category $category)
    {
        
        return view('annunci.categoryShow', compact('category'));
    }

    public function showAnnouncement(Announcement $announcement)

    {

        return view('annunci.showAnnouncement', compact('announcement'));
    }

    public function indexAnnouncement()
    {
        $categories = Category::all();

        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);

        return view('annunci.indexAnnouncement', compact('announcements'));
    }
}
