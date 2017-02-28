<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countrycode;

class CountryController extends Controller
{
    function index()
    {	$get = Countrycode::get();
    	return view('countrylist',['get'=>$get]);
    }

    function input(Request $request)
    {
    	$countryinput = new Countrycode();
    	$countryinput->countrycode = $request->countrycode;
    	$countryinput->countryname = $request->countryname;
    	$countryinput->save();
    	return back();
    }
    
    function delete(Request $requset)
    {
    	$get = $requset->countrycode;
    	Countrycode::where('countrycode',$get)->delete();
    	return back();
    }
}
