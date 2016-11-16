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
            //$username = $user->username;
            $listing = new Listing($courseID, $price, $courseName, $img);
            $listings[] = $listing;
        }
        return $listings;
    }

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
}
