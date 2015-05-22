<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 11:09
 */


use App\Genre;

class GenreController extends ApiController
{

    public function index()
    {
        return Genre::with('albums')->get();
    }

    public function show($id)
    {
        return Genre::find($id)->with('albums')->get();
    }
}