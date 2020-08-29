<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shop;
use App\product;

class HomeController extends Controller
{
	
    
    public function index(){
    	$shop=shop::all();
    	
    	return view('Front.main',compact('shop'));
    }

    public function shop($id){
    	$products=product::where('shop_id',$id)->get();
    	$shop=shop::find($id);
    	return view('Front.index',compact('products','shop'));
    }
}
