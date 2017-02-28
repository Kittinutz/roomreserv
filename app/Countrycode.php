<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countrycode extends Model
{
        protected $table = "countrycodes";
    public $timestamp = true;
    public $primarykey ="countrycode";

}
