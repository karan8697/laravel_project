<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\players;
class myupvotes extends Controller
{
    public function data(Request $request)
    {
    	$someVariable = $request->someVariable;
    	return view('results',compact('a'));
    }
}
