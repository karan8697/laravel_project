<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profilematches;
use App\profileplayers;
class myprofile extends Controller
{
    public function data()
    {
    	$a=profileplayers::all();
    	$b=profilematches::all();
    	return view('profile',compact('a','b'));
    }
}
