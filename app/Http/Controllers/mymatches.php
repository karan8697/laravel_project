<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\matches;
class mymatches extends Controller
{
    public function data()
    {
    	// $a=matches::all();
    	$a = DB::table('matches')->where('sport','football')->get();
    	$b = DB::table('matches')->where('sport','cricket')->get();
    	$c = DB::table('matches')->where('sport','basketball')->get();
    	return view('matches',compact('a','b','c'));



    }
    public function formdata(Request $request)
    {
    	$a=new matches();
       	$a->league=request('league');
    	$a->sport=request('sport');
    	$a->team_1=request('team_1');
    	$a->team_2=request('team_2');     	
    	$a->image_1->request('image_1');
    	$a->image_2->request('image_2');
    	$a->dat=request('dat');
      	$a->save();
    	return redirect('uploadmatches');
    }
}
