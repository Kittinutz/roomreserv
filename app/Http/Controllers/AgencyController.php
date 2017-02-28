<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agencys;
class AgencyController extends Controller
{
    public function index(){
    	$agencys =  Agencys::get();

    	return view('agencys',['agencys'=>$agencys]);
    }
    public function input(Request $Request)
    {
    	$agencys = new Agencys;
    	$agencys->nameagency = $Request->agencyname;
    	$agencys->save();
    	return back();
    }
}
