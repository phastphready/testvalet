<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
  {
		
	$people = ['Fred','Bill','Jim','Mark'];

    return view('welcome',compact('people'));



  }
}
