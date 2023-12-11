<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class PublicController extends Controller
{
    public function welcome()
    {
        $announcements = Announcement::orderBy('created_at')->take(6)->get();

        return view('welcome', compact('announcements'));
    }
}
