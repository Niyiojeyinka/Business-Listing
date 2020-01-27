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
     public function view($id)
	{

		
 $data['business'] = Category::where('id',$id)->with("businesses")->get()->toArray()[0]['businesses'];
       $data['categories']=Category::all();

 //dd( $data['business']);
    	return view('public.category_view')->with($data);



	}
    public function manage()
   {
   	
    $data['categories'] =Category::all();
   	return view('admin.manage_category')->with($data);
   }

      public function delete($id)
   {
   	
  Category::find($id)->delete();
   	return back()->with("success","Category deleted Successfully");

   }
}
