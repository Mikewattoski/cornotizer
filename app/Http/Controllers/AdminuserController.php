<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminuserController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin')->except('logout');
	}
    public function index(){
    	return view ('admin.login');
}
    
    public function store(Request $request){

				$request->validate([
				'email'=>'email|required',
				'password'=>'required']);

//login admin
				
			$cred=$request->only('email','password');
			if(! Auth::guard('admin')->attempt($cred)){
				return back()->withErrors([
					'msg'=>'wrong credencials please try again']);
			}
			//login message
		session()->flash('msg','you have logged in!!');
   			//redirect
		return redirect('/admin');
    }
    public function logout(){
    	auth()->guard('admin')->logout();
    	 session()->flash('msg','You have been logged out');

        return redirect('/admin/login');
    }
}
