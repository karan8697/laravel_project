<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class myusers extends Controller
{
    public function formdata()
    {
    	
    	$a=new users();
    	$a->name=request('name');
    	$a->email=request('email');
    	$a->password=request('password');
    	$a->save();
    	return redirect('news');
    }
}
