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

    public function display($note) {
        $note = DB::table('notes')->where('id',$note)->first();

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

    public function edit($note) {
        $note = DB::table('notes')->where('id',$note)->first();

        $noteId = $note->id;

        $user_id = \Auth::user()->id;

        //do not allow a user to edit notes if they do not own them
        if ($note->user_id != $user_id) {
            return back();
        }

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
        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name', 'id');

        return view('editNote', compact('title', 'course', 'schools', 'noteId', 'imagePath', 'schoolName', 'year', 'instructor', 'description', 'email', 'price'));
    }

    public function update($note) {
        $note = DB::table('notes')->where('id',$note)->first();

        $title = Input::get('title');
        $school_id = Input::get('schools');
        $course = Input::get('course');
        $yearTaken = Input::get('yearTaken');
        $instructor = Input::get('instructor');
        $description = Input::get('description');
        $price = Input::get('price');


        if (Input::hasFile('myImage')) {
            $imagePath = Input::get('originalImage');
            $originalFilename = substr($imagePath, 8);
            \File::delete(public_path() .'/images/' . $originalFilename);

            $image = Input::file('myImage');
            $destinationPath = public_path() . '/images/';
            $filename = $image->getClientOriginalName();
            $filename = $this->makeUniqueName($destinationPath . $filename);
            $filepath = '/images/' . $filename;
            $image->move($destinationPath, $filename);


            DB::table('notes')->where('id', $note->id)->limit(1)->update(
                [
                    'title' => $title,
                    'school_id' => $school_id,
                    'courseName' => $course,
                    'yearTaken' => $yearTaken,
                    'teacher' => $instructor,
                    'description' => $description,
                    'imagePath' => $filepath,
                    'price' => $price,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime()]);


            return redirect()->action('ListingsController@listings');
        } else {
            DB::table('notes')->where('id',$note->id)->limit(1)->update(
                [
                    'title' => $title,
                    'school_id' => $school_id,
                    'courseName' => $course,
                    'yearTaken' => $yearTaken,
                    'teacher' => $instructor,
                    'description' => $description,
                    'price' => $price,
                    'created_at' => new \DateTime(),
                    'updated_at' => new \DateTime()]);

            return redirect()->action('ListingsController@listings');
        }

    }

    function makeUniqueName($full_path) {
        $file_name = basename($full_path);
        $directory = dirname($full_path) . DIRECTORY_SEPARATOR;

        $i = 2;
        while (file_exists($directory . $file_name)) {
            $parts = explode('.', $file_name);
            // Remove any numbers in brackets in the file name
            $parts[0] = preg_replace('/\(([0-9]*)\)$/', '', $parts[0]);
            $parts[0] .= '(' . $i . ')';

            $new_file_name = implode('.', $parts);
            if (!file_exists($new_file_name)) {
                $file_name = $new_file_name;
            }
            $i++;
        }
        return $file_name;
    }

    function delete($note) {
        $note = DB::table('notes')->where('id',$note)->first();

        $imagePath = $note->imagePath;
        $originalFilename = substr($imagePath, 8);
        \File::delete(public_path() . '/images/' . $originalFilename);

        DB::table('notes')->where('id', $note->id)->limit(1)->delete();

        return redirect()->action('ListingsController@userListings');
    }

}
