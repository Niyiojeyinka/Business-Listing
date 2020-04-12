<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Business;
use App\Http\Controllers\ImageController;

class BusinessController extends Controller
{
  public $errorHandling;

  public function __construct(){
   $this->errorHandling=[
      "errorMessages"=>[
         "name.required"=>"Business Name is required",
         "name.min"=>"Minimum Number of Character is 4",
         "website.required"=>"Business website is required",
       "website.url"=>"Please Provide a valid URL",
       "email.required"=>"Business Email is required",
       "email.email"=>"Please Provide a valid Email",
       "feature_image.max"=>"Image must be less or equal to 2MB in size "
      ],
      "rules"=>[
         "name"=>"required|min:4",
         "website"=>"required|url",
          "email"=>"required|email",
         "description"=>"required",
         "phone"=>"required|numeric|min:10",
         "feature_image"=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         "address"=>"required",
         "categories"=>"required"
         ]
   ];
  }	

  public function showCreate()
  {


  	$data['categories'] = Category::all();
  	return view('admin.create_business')->with($data);
  }


   public function create(Request $request)
   {
     

     $data= $request->validate($this->errorHandling['rules'],$this->errorHandling['errorMessages']);


     $image = new ImageController();
     $imageName = $image->upload(request(),"feature_image");
   
//made a provision for multiple image by saving images as json

   $business = new Business();
   $business->name = $data['name'];
   $business->website = $data['website'];
   $business->description= $data['description'];
   $business->feature_image=json_encode([$imageName]);
   $business->status=1;
   $business->email=$data['email'];
   $business->phone=$data['phone'];
   $business->address=$data['address'];
   $business->save();

   $category = Category::find($data['categories']);
   //dd($category);
   $business->categories()->attach($category);


        return back()->with('success','Business Created Successfully.')->with('image',$imageName);



   }


  public function showEdit($id)
  {

    $data['business'] = Business::where('id',$id)->with("categories")->get()->toArray()[0];   
    $data['id']=$id;
  	$data['categories'] = Category::all();
//dd( $data['business'][0]);

  	return view('admin.edit_business')->with($data);
  }

   public function update(Request $request,$id)
   {
     
$business = Business::where('id',$id)->get()->toArray()[0];
     $data= $request->validate($this->errorHandling['rules'],$this->errorHandling['errorMessages']);

  $image = new ImageController();
  $imageName = $image->upload(request(),"feature_image");
  $imagesArray = json_decode($business['feature_image']);

if (!empty($imageName && (!in_array($imageName, $imagesArray)))) {
	array_push($imagesArray, $imageName);
	}
//made a provision for multiple image by saving images as json
         
   $business = Business::find($id);
   $business->name = $data['name'];
   $business->website = $data['website'];
   $business->description= $data['description'];
   $business->feature_image=json_encode($imagesArray);
   $business->status=1;
   $business->email=$data['email'];
   $business->phone=$data['phone'];
   $business->address=$data['address'];
   $business->save();

   $category = Category::find($data['categories']);
   $business->categories()->sync($category);


        return back()->with('success','Business Updated Successfully.');



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

	public function view($id)
	{

		
 $data['business'] = Business::where('id',$id)->with("categories")->get()->toArray()[0];
 //$categories_id =  $
    	return view('public.business_view')->with($data);



	}
   public function status($action,$id)
   {
     
    $status= $action=="activate"?1:0;
    Business::find($id)->update(['status'=>$status]);

        return back()->with('success','Business '.ucfirst($action).'d Successfully.');

   }
}
