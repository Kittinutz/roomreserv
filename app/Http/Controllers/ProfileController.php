<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function getYear()
    {
    	$y =1994;

    	return $y+543;
    }

    function getName($id)
    {
    	$customers=
    	[
    		["Name" =>'KITTINUT','Surname'=>'Pramhan'],
    		["Name"=>"JUTHAKARN","Surname"=>'Saelim']
    	];

    	return $customers[$id-1]['Name'];
    }
}
