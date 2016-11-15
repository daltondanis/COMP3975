<?php
/**
 * Created by PhpStorm.
 * User: jasonlee
 * Date: 2016-11-14
 * Time: 6:25 PM
 */

namespace App\Http\Controllers;


class ListingsController extends Controller
{
    /**
     * Show the listings.
     *
     * @return \Illuminate\Http\Response
     */
    public function listings()
    {
        return view('listings');
    }
}