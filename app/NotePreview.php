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

        foreach ($notes as $note)
        {
            //$user = DB::table('users')->where('id', $note->user_id)->first();
            $img = $note->imagePath;
            $courseID = $note->courseName;
            $courseName = $note->title;
            $price = $note->price;
            $noteId = $note->id;
            //$username = $user->username;
            $listing = new Listing($courseID, $price, $courseName, $img, $noteId);
            $listings[] = $listing;
        }
        return $listings;
    }

    public function getNotesByUser($user_id)
    {

        $listings = array();
        $notes = DB::table('notes')->get();

        foreach ($notes as $note)
        {
            if($note->user_id == $user_id) {
                $img = $note->imagePath;
                $courseID = $note->courseName;
                $courseName = $note->title;
                $price = $note->price;
                $noteId = $note->id;
                //$username = $user->username;
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
            $notes = $notes->where('courseName', 'LIKE', '%' . $course . '%');
        }

        if(!empty($program)){
            $notes = $notes->where('program', 'LIKE', '%' . $program . '%');
        }

        $minval = 0;
        if (!empty($minprice))
        {
            $minval = $minprice;
        }

        if (!empty($maxprice))
        {
            $notes = $notes->where('price', '>=', $minval)->where('price', '<=', $maxprice)->get();
        }
        else
        {
            $notes = $notes->where('price', '>=', $minval)->get();
        }

        $listings = array();
        foreach ($notes as $note)
        {
            //$user = DB::table('users')->where('id', $note->user_id)->first();
            $img = $note->imagePath;
            $courseID = $note->courseName;
            $courseName = $note->title;
            $price = $note->price;
            $noteId = $note->id;
            //$username = $user->username;
            $listing = new Listing($courseID, $price, $courseName, $img, $noteId);
            $listings[] = $listing;
        }

        return $listings;

    }

    public function getNotesBySchool($schoolName)
    {
        $school = DB::table('schools')->where('name', $schoolName)->first();
        $notes = DB::table('notes')->where('school_id', $school->id)->get();
        return $notes;
    }

    function getNotesByCourse($courseID)
    {
        $notes = DB::table('notes')->where('LOWER(courseName)', 'LIKE', '%' . strtolower($courseID) . '%')->get();
        return $notes;
    }

    function getNotesByProgram($program)
    {
        $notes = DB::table('notes')->where('LOWER(program)', 'LIKE', '%' . strtolower($program) . '%')->get();
        return $notes;
    }

    function getNotesByPriceRange($min, $max)
    { //give -1 as arguments if you don't want to specify a min or max specifically
        $minval = 0;
        $notes;
        if ($min != -1)
        {
            $minval = $min;
        }

        if ($max != -1)
        {
            $notes = DB::table('notes')->where('price', '>=', $minval)->where('price', '<=', $max)->get();
        } 
        else
        {
            $notes = DB::table('notes')->where('price', '>=', $minval)->get();
        }

        return $notes;
    }
    /*
    public function getUsername($note)
    {
        $user = DB::table('users')->where('id', $note->user_id)->first();
        return $user->username;
    }

    public function getNoteImage($note)
    {
        $img = DB::table('photos')->where('note_id', $note->id)->first();
        return $img->path;
    }
    */
}
