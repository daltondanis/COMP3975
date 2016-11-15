<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');
        return view('post', compact('schools'));
    }

    public function store()
    {
        //$user_id  = Auth::user()->user_id;
        $user_id = 1;
        $title    = Input::get('title');
//        grabs school id - not school name
        $school   = Input::get('school');
        $program   = Input::get('program');
        $course   = Input::get('course');
        $yearTaken   = Input::get('yearTaken');
        $instructor   = Input::get('instructor');
        $comments   = Input::get('comments');
        $price   = Input::get('price');






        DB::table('notes')->insert(
            ['user_id' => $user_id,
             'title'   => $title,
             'school_id' => $school,
             'program' =>    $program,
             'courseName' => $course,
             'yearTaken' => $yearTaken,
             'teacher' => $instructor,
             'comments' => $comments,
             'price' => $price,
                'created_at'=>new \DateTime(),
                'updated_at'=>new \DateTime()]);


        //handle form here
        //validation
        //store in database
    }
}
