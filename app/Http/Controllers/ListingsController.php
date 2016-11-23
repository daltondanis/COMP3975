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
    public function listings() {
        $preview  = new NotePreview();

        $listings = $preview->getNotes();

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        $searchData = [
            'school'   => 0,
            'course'   => '',
            'program'  => '',
            'minPrice' => '',
            'maxPrice' => ''
        ];

        return view('listings', compact('listings', 'schools', 'searchData'));
    }

    public function userListings() {
        $user_id  =  \Auth::user()->id;

        $preview  = new NotePreview();

        $listings = $preview->getNotesByUser($user_id);

        return view('myListings', compact('listings'));
    }

    public function search(Request $request) {
        $preview  = new NotePreview();

        $listings = $preview->getNotesBySearch($request->schools, $request->course, $request->program,
            $request->minPrice, $request->maxPrice);

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        $searchData = [
            'school'   => $request->schools,
            'course'   => $request->course,
            'program'  => $request->program,
            'minPrice' => $request->minPrice,
            'maxPrice' => $request->maxPrice
        ];

        return view('listings', compact('listings', 'schools', 'searchData'));
    }
}