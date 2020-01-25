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
		"email.required"=>"Business Email is required",
		"email.email"=>"Please Provide a valid Email",
		"feature_image.max"=>"Image must be less or equal to 2MB in size "
     ];
     $rules=[
      "name"=>"required|min:4",
      "website"=>"required|url",
       "email"=>"required|email",
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
            "feature_image"=>json_encode([$imageName]),
            "status"=>1,
            "email"=>$data['email'],
             "phone"=>$data['phone'],
            "address"=>$data['address'],
            "category_id"=>json_encode($data['categories'])
           ]);
  

        return back()->with('success','Business Created Successfully.')->with('image',$imageName);



   }


   public function manage()
   {
   	
    $data['businesses'] =Business::all();

   	return view('admin.manage_business')->with($data);
   }

      public function delete($id)
   {
   	
   Business::find($id)->delete();
   	return back()->with("success","Business deleted Successfully");

   }


   public function status($action,$id)
   {
     
    $status= $action=="activate"?1:0;
    Business::find($id)->update(['status'=>$status]);

        return back()->with('success','Business '.ucfirst($action).'d Successfully.');

   }
}
