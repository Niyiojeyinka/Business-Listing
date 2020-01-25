<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Business;
class BusinessController extends Controller
{
	

  public function showCreate()
  {


  	$data['categories'] = Category::all();
  	return view('admin.create_business')->with($data);
  }


   public function create(Request $request)
   {
     

     $errorMessages =[
     	"name.required"=>"Business Name is required",
     	"name.min"=>"Minimum Number of Character is 4",
     	"website.required"=>"Business website is required",
		"website.url"=>"Please Provide a valid URL",
		"feature_image.max"=>"Image must be less or equal to 2MB in size "
     ];
     $rules=[
      "name"=>"required|min:4",
      "website"=>"required|url",
      "description"=>"required",
      "phone"=>"required|numeric|min:10",
      "feature_image"=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      "address"=>"required",
      "categories"=>"required"
      ];
     $data= $request->validate($rules,$errorMessages);



  $imageName = time().'.'.request()->feature_image->getClientOriginalExtension();
   request()->feature_image->move(public_path('images'), $imageName);

//made a provision for multiple image by saving images as json
           Business::create([
            "name"=>$data['name'],
            "website"=>$data['website'],
            "description"=>$data['description'],
            "feature_image"=>json_encode([$data['feature_image']]),
            "status"=>1,
             "phone"=>$data['phone'],
            "address"=>$data['address'],
            "category_id"=>json_encode($data['categories'])
           ]);
  

        return back()->with('success','You have successfully upload image.')->with('image',$imageName);



   }
}
