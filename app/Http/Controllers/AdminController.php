<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('guest:admin')->except(['login','index']);
    }

public function index()
    {
       
       return view('admin.login');
    }
public function login(Request $request)
{
	$this->validate($request,[
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);
	 if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->with("error","Wrong Credentials");
}
}
