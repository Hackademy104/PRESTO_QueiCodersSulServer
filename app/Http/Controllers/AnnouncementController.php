<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Annuncments;
use App\Http\Requests\StoreAnnuncments;

class AnnouncementController extends Controller
{
    public function newAnnouncements()
    {
        $categories = Category::all();
        return view('annunci.newAnnouncements', compact('categories'));
    }

    public function create_annuncment (StoreAnnuncments $request) {
        dd($request->category);
        $annuncment = Annuncments::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'description' => $request->description
        ]);

        $annuncment->save();
        return redirect('/');
    }
}
