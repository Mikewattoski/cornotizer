<?php

namespace App\Http\Controllers;
use App\User;
use App\order;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(){
    		
    		$users=User::all();
    		return view('admin.users.index',compact('users'));
    	}

public function show($id){
	$order=order::where('user_id',$id)->get();

	return view('admin.users.details',compact('order'));
}
    }
