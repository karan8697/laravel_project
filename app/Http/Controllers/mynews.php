<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
class mynews extends Controller
{
    
    public function data()
    {
    	$a=news::all();
    	return view('news',compact('a'));
    }
    public function formdata(Request $request)
    {
    	$a=new news();
       	$a->headline=request('headline');
    	$a->news=request('news');
    	$a->picture=request('picture');
    	$a->save();
    	return redirect('uploadnews');
    }

}
