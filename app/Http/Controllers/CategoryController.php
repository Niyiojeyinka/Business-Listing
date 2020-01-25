<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   

   public function create(Request $request)
   {
          $errorMessages =[
     	"name.required"=>"Category Name is required",
     	"name.unique"=>"Category must be unique"
     ];
     $rules=[
      "name"=>"required|unique:categories"
      ];
     $data= $request->validate($rules,$errorMessages);

   Category::create([
      "name"=>$data['name']
   ]);
    return back()->with("success","Category Created Successfully");
   }
}
