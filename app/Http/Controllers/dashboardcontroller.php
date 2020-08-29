<?php

namespace App\Http\Controllers;
use App\order;
use App\product;
use App\User;
use App\shop;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{

	public function __construct(){
		$this->middleware('auth:admin');
	}





    public function index(){
    	$order=new order;
    	$product=new product;
    	$user=new User;
    	$shop=new shop;

    	return view('admin.dashboard',compact('order','product','user','shop'));
    }}
