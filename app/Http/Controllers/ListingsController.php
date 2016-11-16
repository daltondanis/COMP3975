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

        // Grabs from database
        $preview  = new NotePreview();

        $listings = $preview->getNotes();

        return view('listings', compact('listings'));
    }
}