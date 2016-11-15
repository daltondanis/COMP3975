<?php

use Illuminate\Support\Facades\DB;

function getNotes()
{
    $notes = DB::table('notes')->get();
    return $notes;

    /* foreach($notes as $note){
      $user = DB::table('users')->where('id', $note->user_id)->first();
      $img = DB::table('photos')->where('note_id', $note->id)->first();
      /*do something with information;
        courseID: $note->courseName
        price: $note->price
        username: $user->username
        courseName doesn't appear to be stored in the DB yet in the fashion that you were asking for.
        image: $img->path // one thing i'm not sure of is how you're supposed to use this; as in,
                          // is it a link to the picture, or is it a relative path and we need to fetch the picture somehow?
      *
    } */
}

function getUsername($note){
    $user = DB::table('users')->where('id', $note->user_id)->first();
    return $user->username;
}

function getNoteImage($note){
    $img = DB::table('photos')->where('note_id', $note->id)->first();
    return $img->path;
}
