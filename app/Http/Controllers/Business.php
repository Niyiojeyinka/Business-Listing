<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Business extends Controller
{
	$this->middleware('guest:admin')->except(['index','show']);

   public function create(Request $request)
   {
     
   }
}
