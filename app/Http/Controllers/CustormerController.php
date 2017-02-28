<?php

namespace App\Http\Controllers;
use App\Custormers;
use App\Countrycode;
use Illuminate\Http\Request;



class CustormerController extends Controller
{
	public function index()
	{
		return view('home');
	}
    public function input(Request $requset)
    {
    $custormerinput = new Custormers;
    $custormerinput->name = $requset->name;
    $custormerinput->surname = $requset->surname;
    $custormerinput->countrycode = $requset->countrycode;
    $custormerinput->brithday = $requset->brithday;
    $custormerinput->email = $requset->email;
    $custormerinput->passportno = $requset->passport;

    $custormerinput->note = $requset->note;
    $custormerinput->save();
    return back();
	}
	public function home()

	{
		$get = Countrycode::get();
		$list = Custormers::get();
		return view('custormerlist',['get'=>$get],['list'=>$list]);
	}

	public function delete(Request $request)
	{
		$get = $request->cusid;
		Custormers::where('cusid',$get)->delete();
		return back();
	}
}
