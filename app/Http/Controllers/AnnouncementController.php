<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Annuncments;
use App\Http\Requests\StoreAnnuncments;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function newAnnouncements()
    {
        $categories = Category::all();
        return view('annunci.newAnnouncements', compact('categories'));
    }


    public function categoryShow(Category $category){
        return view('annunci.categoryShow', compact('category'));
    }
    public function showAnnouncement(Announcement $announcement){
        return view('annunci.showAnnouncement', compact('announcement'));
    }
    public function indexAnnouncement(){
        $announcements = Announcement::paginate(5);
        return view('annunci.indexAnnouncement', compact('announcements'));
    }
}
