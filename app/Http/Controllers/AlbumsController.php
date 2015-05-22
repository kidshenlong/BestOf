<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 11:09
 */

use App\Album;

class AlbumsController extends ApiController
{

    public function index()
    {
        return Album::all();
        //return Artist::with('album')->get();
    }

    public function show($id)
    {
        return Album::find($id)->albums;//->with('album')->get();
    }
}