<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;


class AdminController extends Controller
{

 public function loginForm()
 {
       return view('admin.login');
    }
    
public function login(Request $request)
{
	$this->validate($request,[
            'email'   => 'required|email',
            'password' => 'required|min:4'
        ]);
	 if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->intended('/admin/');
        }
        return back()->with("error","Wrong Credentials");
}

        public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with("error","You are signed out successfully");
    }
}
