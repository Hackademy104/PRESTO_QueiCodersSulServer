<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));

        return redirect()->back()->with('message', 'Complimenti hai richiesto di diventare un revisore');

    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ['email' => $user->email]);

        return redirect('/')->with('message', 'Complimenti sei diventato un revisore');
    }
}
