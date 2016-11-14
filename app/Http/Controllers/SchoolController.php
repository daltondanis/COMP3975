<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use DB;

class SchoolController extends Controller
{
    public function create(Request $request) {
        DB::table('schools')->insert(
            ['name' => 'University of British Columbia'],
            ['name' => 'Langara College'],
            ['name' => 'Simon Fraser University'],
            ['name' => 'Vancouver community college'],
            ['name' => 'Kwantlen Polytechnic University'],
            ['name' => 'The art institute of vancouver'],
            ['name' => 'Emily Carr University of Art and Design'],
            ['name' => 'Capilano University'],
            ['name' => 'Douglas College'],
            ['name' => 'University of Victoria'],
            ['name' => 'Vancouver island university'],
            ['name' => 'Camosun College']
        );
        echo "succeed";
    }
}
