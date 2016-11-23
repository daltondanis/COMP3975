<?php

namespace App\Http\Controllers;

use App\Listing;
use App\NotePreview;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        return view('listings', compact('listings', 'schools'));
    }

    public function userListings()
    {
        //get user id
        $user_id  =  \Auth::user()->id;

        // Grabs from database
        $preview  = new NotePreview();

        $listings = $preview->getNotesByUser($user_id);

        return view('myListings', compact('listings'));
    }

    public function search(Request $request)
    {
        $preview  = new NotePreview();

        $listings = $preview->getNotesBySearch($request->schools, $request->course, $request->program,
            $request->minPrice, $request->maxPrice);

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        return view('listings', compact('listings', 'schools'));
    }
}