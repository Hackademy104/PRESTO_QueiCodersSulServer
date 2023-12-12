<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class RevisorController extends Controller
{
    public function revisorIndex()
    {
        $announcement_to_check = Announcement::where('is_accepted', null)->first();

        return view('revisor.revisorIndex', compact('announcement_to_check'));

    }

    public function acceptAnnouncement(Announcement $announcement)
    {

        $announcement->setAccepted(true);

        return redirect()->back()->with('message', 'Complimenti hai accetta l annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {

        $announcement->setAccepted(false);

        return redirect()->back()->with('message', 'Complimenti hai rifiutato l annuncio');
    }
}
