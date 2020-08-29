<?php

namespace App\Http\Controllers\Front;
use App\User;
use App\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userprofileController extends Controller
{
    public function index(){
    	$id=auth()->user()->id;
		$user=User::where('id',$id)->first();
		return view ('Front.profile.index',compact('user'));
    }

    public function order($id){
    	$order=order::where('id',$id)->first();
    			return view ('Front.profile.details',compact('order'));


    }
}
