<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sessionController extends Controller
{
	public function __construct(){
		$this->middleware('guest')->except('logout');
	}
    public function index(){
return view('Front.session.index');
    }

public function store(Request $request){
	$rules=[
		'email'=>'required|email',
		'password'=>'required'];
		$request->validate($rules);
		//check if exist
		$date=request(['email','password']);
		if(!auth()->attempt($date)){
			return back()->withErrors([
				'message'=>'wrong credentials'
			]);
			}
return redirect('/');
		
}

public function logout(){
    	auth()->logout();
    	 session()->flash('msg','You have been logged out');

        return redirect('/user/login');
    }}
