<?php

namespace App\Http\Controllers;
use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index(){
    		
    		$orders=order::all();
    		return view('admin.orders.index',compact('orders'));
    	}

    		public function confirm($id){
    			$or=order::find($id);
    			$or->update(['status'=>1]);
    			session()->flash('msg','order confirmed');
    			return redirect('/admin/order'); 


    		}

public function pending($id){
    			$or=order::find($id);
    			$or->update(['status'=>0]);
    			session()->flash('msg','order is pending');
    			return redirect('/admin/order'); 


    		}
    		 public function show($id){
    	$order=order::find($id);
    	
    	return view ('admin.orders.details',compact('order'));
}




    }
