<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload($request, $frontHtmlNameTag)
    {
        $imageName = null;

        if ($request->hasfile($frontHtmlNameTag)) {
            $imageName =
                time() .
                '.' .
                $request->feature_image->getClientOriginalExtension();
            $request->feature_image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }
}