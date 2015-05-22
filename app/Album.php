<?php namespace App;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 13:06
 */
use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    protected $fillable = ['title'];
    protected $hidden = ['artist_id', 'genre_id', 'created_at', 'updated_at'];

    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }

}