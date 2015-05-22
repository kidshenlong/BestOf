<?php namespace App\Console\Commands;
/**
 * Created by PhpStorm.
 * User: pattem92
 * Date: 22/05/2015
 * Time: 11:59
 */

use Illuminate\Console\Command;
use Dandelionmood\LastFm\LastFm;

use App\Artist;

class Artists extends Command {

    protected $name = 'artists:fetch';

    protected $description = 'Fetch Artist Data';


    public function handle()
    {
        //$this->comment('yo');
        //$lastfm = new LastFm( $lastfm_api_key, $lastfm_api_secret );

        Artist::create(['name' => 'John']);
        //$this->comment('yo');
        //return Artist::all();
    }


}