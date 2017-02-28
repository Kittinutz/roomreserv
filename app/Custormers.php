<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custormers extends Model
{
    protected $table = "custormers";
    public $timestamp = true;
    public $primarykey ="cusid";
}
