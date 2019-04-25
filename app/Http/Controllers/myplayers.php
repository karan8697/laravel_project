<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\players;
class myplayers extends Controller
{
    public function data()
    {
    	$a=players::all();
    	return view('players',compact('a'));
    }
    public function formdata(Request $request)
    {
    	$a=new players();
       	$a->name=request('name');
    	$a->height=request('height');
    	$a->weight=request('weight');
    	$a->matches=request('matches');
    	$a->acheivements=request('acheivements');
    	$a->team=request('team');
    	$a->ranking=request('ranking');
    	$a->image->request('image');
    	$a->save();
    	return redirect('uploadplayers');
    }
}
