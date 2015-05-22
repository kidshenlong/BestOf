<?php namespace App;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 13:06
 */
use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at'];

    public function albums()
    {
        return $this->hasMany('App\Albums');
    }

}