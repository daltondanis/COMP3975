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
        $notes = $preview->getNotes();
        
        $listings = array();

        foreach ($notes as $note) 
        {

            $valid = false;

            if (!empty($request->course) &&
                strlen(stristr($note->courseId, str_replace(' ', '', $request->course))) > 0)
            {
                $valid = true;
            }
            else if (!empty($request->program) &&
                strlen(stristr($note->courseName, str_replace(' ', '', $request->program))) > 0)
            {
                $valid = true;
            }

            if (!empty($request->minPrice))
            {
                if ($note->price > $request->minPrice)
                {
                    $valid = true;
                }
                else
                {
                    $valid = false;
                }
            }
            if (!empty($request->maxPrice))
            {
                if ($note->price < $request->maxPrice)
                {
                    $valid = true;
                }
                else
                {
                    $valid = false;
                }
            }

            if ($valid)
            {
                $listings[] = $note;
            }
        }

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        return view('listings', compact('listings', 'schools'));
    }
}