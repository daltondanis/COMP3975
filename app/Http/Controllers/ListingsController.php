<?php

namespace App\Http\Controllers;

use App\Listing;
use App\NotePreview;

class ListingsController extends Controller
{
    /**
     * Show the listings.
     *
     * @return \Illuminate\Http\Response
     */
    public function listings()
    {
        /*
        // Grabs from database
        $preview  = new NotePreview();
        $listings = $preview->getNotes();
        */
        $listings = [
            new Listing("IMAGE1", "COMP1234", 40, "Java 1"),
            new Listing("IMAGE2", "COMP1111", 60, "Web Dev"),
            new Listing("IMAGE3", "COMP3131", 30, "Algorithms"),
            new Listing("IMAGE4", "COMP9876", 125, "Business Law")
        ];
        return view('listings', compact('listings'));
    }
}