<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use DB;

class SchoolController extends Controller
{
    public function create(Request $request) {
        DB::table('schools')->insert([
            ['name' => 'University of British Columbia'],
            ['name' => 'Langara College'],
            ['name' => 'Simon Fraser University'],
            ['name' => 'Vancouver Community College'],
            ['name' => 'Kwantlen Polytechnic University'],
            ['name' => 'The Art Institute of Vancouver'],
            ['name' => 'Emily Carr University of Art and Design'],
            ['name' => 'Capilano University'],
            ['name' => 'Douglas College'],
            ['name' => 'University of Victoria'],
            ['name' => 'Vancouver Island University'],
            ['name' => 'Camosun College']
        ]);
        echo "Schools successfully added to the database.";
    }
}
