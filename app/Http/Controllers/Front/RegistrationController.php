<?php

namespace App\Http\Controllers\Front;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
    	return view('Front.registration.index');
    }
    public function store(Request $request){

//validate
 $request->validate([
           'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'address' => 'required'
        ]);
    	//save data
 $user=User::create([
 	'name'=> $request->name,
'email'=> $request->email,
'password'=> bcrypt($request->password),
'address'=> $request->address
 	]);    //login

 auth()->login($user);

    	//redirect to

 return redirect('/');
}
    }
