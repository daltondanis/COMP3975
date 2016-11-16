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
            new Listing("COMP1234", 40, "Java 1", "/images/image1.png"),
            new Listing("COMP1111", 60, "Web Dev", "/images/image2.png"),
            new Listing("COMP3131", 30, "Algorithms", "/images/image3.png"),
            new Listing("COMP9876", 125, "Business Law", "/images/image4.png")
        ];
        return view('listings', compact('listings'));
    }
}