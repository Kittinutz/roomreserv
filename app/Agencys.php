<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agencys extends Model
{
     protected $table ="agencys";
    public $timestamp = true;
    public $primarykey="agencyid";
}
