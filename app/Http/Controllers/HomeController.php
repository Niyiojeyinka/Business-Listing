<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Business;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('homepage');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function homepage()
    {
      $data['title']='A Classic Business Directory Service';
      $data['businesses']=Business::where('status',1)->get()->toArray();
      $data['categories']=Category::all();

//dd($data['businesses']);
         return view('public.front')->with($data);
    }
    
}
