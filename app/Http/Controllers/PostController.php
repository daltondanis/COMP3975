<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use \Auth;

class PostController extends Controller
{
    public function create()
    {
        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');
        return view('post', compact('schools'));
    }

    public function store() {
        if(($_FILES['myImage']['error'] == 1 || $_FILES['myImage']['error'] == 2)) {
            return 'File too large. File must be less than 2 megabytes.';
        }
        
        $user_id  = Input::get('user');

        $title    = Input::get('title');
        $school_id   = Input::get('schools');
        $program   = Input::get('program');
        $course   = Input::get('course');
        $yearTaken   = Input::get('yearTaken');
        $instructor   = Input::get('instructor');
        $description   = Input::get('description');
        $price   = Input::get('price');
        $image = Input::file('myImage');


        $destinationPath = public_path(). '/images/';
        $filename = $image->getClientOriginalName();
        $filename = $this->makeUniqueName($destinationPath . $filename);
        $filepath = '/images/'.$filename;

        $image->move($destinationPath, $filename);

        DB::table('notes')->insert(
            ['user_id' => $user_id,
             'title'   => $title,
             'school_id' => $school_id,
             'program' =>    $program,
             'courseName' => $course,
             'yearTaken' => $yearTaken,
             'teacher' => $instructor,
             'description' => $description,
             'imagePath' => $filepath,
             'price' => $price,
             'created_at'=>new \DateTime(),
             'updated_at'=>new \DateTime()]);

        return redirect()->action('ListingsController@listings');
    }

    function makeUniqueName($full_path) {
        $file_name = basename($full_path);
        $directory = dirname($full_path).DIRECTORY_SEPARATOR;

        $i = 2;
        while (file_exists($directory.$file_name)) {
            $parts = explode('.', $file_name);
            // Remove any numbers in brackets in the file name
            $parts[0] = preg_replace('/\(([0-9]*)\)$/', '', $parts[0]);
            $parts[0] .= '('.$i.')';

            $new_file_name = implode('.', $parts);
            if (!file_exists($new_file_name)) {
                $file_name = $new_file_name;
            }
            $i++;
        }
        return $file_name;
    }
}
