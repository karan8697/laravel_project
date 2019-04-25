<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\results;
class myresults extends Controller
{
    public function data()
    {
    	$a=results::all();
    	return view('results',compact('a'));
    }

    public function formdata()
    {
    	// return request()->all();
    	$a=new results();
    	// $a->id=request('id');
    	$a->league=request('league');
    	$a->team_1=request('team_1');
    	$a->team_2=request('team_2');
    	$a->winner=request('winner');
    	$a->result=request('result');
    	$a->save();
    	return redirect('uploadresults');
    }
}
