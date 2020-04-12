<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    

    public function upload($request,$frontHtmlNameTag)
    {
        $imageName=NULL;

if ($request->hasfile('feature_image')) {
	
  $imageName = time().'.'.$request->feature_image->getClientOriginalExtension();
   $request->feature_image->move(public_path('images'), $imageName);
}
    return $imageName;
    }
}
