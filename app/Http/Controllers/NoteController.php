<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use \Auth;

class NoteController extends Controller
{
    //thi

    public function display($note)
    {
        //pull this from selected note
        //$noteID = ;

        //HARDCODED NOTE ID
        //hardcoded to grab note where id is 1

        $note = DB::table('notes')->where('id',$note)->first();

//        $note = DB::table('notes')->where('id',$note)->first();

        $title = $note->title;
        $course = $note->courseName;


        $schoolId = $note->school_id;
        $school = DB::table('schools')->where('id', $schoolId)->first();
        $schoolName = $school->name;


        $year = $note->yearTaken;
        $instructor = $note->teacher;
        $description = $note->description;
        $imagePath = $note->imagePath;
        $price = $note->price;


        $userId = $note->user_id;
        $user = DB::table('users')->where('id', $userId)->first();

        $email = $user->email;


        return view('note', compact('title', 'imagePath', 'course', 'schoolName', 'year', 'instructor', 'description', 'email', 'price'));
    }
    public function edit() {
        //will return the view of editNote blade page
        //this should grab values from the database and send it back to blade in a compact

        //pull this from selected note
        //$noteID = ;

        //HARDCODED NOTE ID
        //hardcoded to grab note where id is 1
        $note = DB::table('notes')->where('id', 5)->first();

        $title = $note->title;
        $course = $note->courseName;


        $schoolId = $note->school_id;
        $school = DB::table('schools')->where('id', $schoolId)->first();
        $schoolName = $school->name;



        $year = $note->yearTaken;
        $instructor = $note->teacher;
        $description = $note->description;
        $imagePath = $note->imagePath;
        $price = $note->price;


        $userId = $note->user_id;
        $user = DB::table('users')->where('id', $userId)->first();

        $email = $user->email;
        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');
        //return view('post', compact('schools'));

        return view('editNote', compact('title', 'imagePath', 'course', 'schools', 'schoolName', 'year', 'instructor', 'description', 'email', 'price'));
    }

    public function update() {
        //update values in the database with the input values




    }
}
