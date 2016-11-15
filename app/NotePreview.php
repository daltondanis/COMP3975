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
            $img = DB::table('photos')->where('note_id', $note->id)->first();
            $courseID = $note->courseName;
            $price = $note->price;
            //$username = $user->username;
            $image = $img->path;
            $listing = new Listing($image, $courseID, $price, "COMP####");
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
