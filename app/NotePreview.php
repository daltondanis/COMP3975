<?php

namespace App;

use Illuminate\Support\Facades\DB;
use App\Listing;

class NotePreview
{
    public function getNotes()
    {
        $listings = array();
        $notes = DB::table('notes')->get();

        foreach ($notes as $note) {
            $img = $note->imagePath;
            $courseID = $note->courseName;
            $courseName = $note->title;
            $price = $note->price;
            $noteId = $note->id;
            $listing = new Listing($courseID, $price, $courseName, $img, $noteId);
            $listings[] = $listing;
        }
        return $listings;
    }

    public function getNotesByUser($user_id)
    {

        $listings = array();
        $notes = DB::table('notes')->get();

        foreach ($notes as $note) {
            if($note->user_id == $user_id) {
                $img = $note->imagePath;
                $courseID = $note->courseName;
                $courseName = $note->title;
                $price = $note->price;
                $noteId = $note->id;
                $listing = new Listing($courseID, $price, $courseName, $img, $noteId);
                $listings[] = $listing;
            }
        }
        return $listings;
    }

    public function getNotesBySearch($school, $course, $program, $minprice, $maxprice){

        $notes = DB::table('notes');

        if(!empty($school)){
            $schoolQuery = DB::table('schools')->where('id', '=', $school)->first();
            $notes = $notes->where('school_id', '=', $schoolQuery->id);
        }

        if(!empty($course)){
            $notes = $notes->where('courseName', 'LIKE', '%' . str_replace(' ', '', $course) . '%');
        }

        if(!empty($program)){
            $notes = $notes->where('program', 'LIKE', '%' . str_replace(' ', '', $program) . '%');
        }

        $minval = 0;
        if (!empty($minprice)) {
            $minval = $minprice;
        }

        if (!empty($maxprice)) {
            $notes = $notes->where('price', '>=', $minval)->where('price', '<=', $maxprice)->get();
        } else {
            $notes = $notes->where('price', '>=', $minval)->get();
        }

        $listings = array();
        foreach ($notes as $note)
        {
            $img = $note->imagePath;
            $courseID = $note->courseName;
            $courseName = $note->title;
            $price = $note->price;
            $noteId = $note->id;
            $listing = new Listing($courseID, $price, $courseName, $img, $noteId);
            $listings[] = $listing;
        }

        return $listings;

    }

}
