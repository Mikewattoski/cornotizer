<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\OrderItems;

class checkoutController extends Controller
{
    public function index(){
    	return view('Front.checkout.index');
    }

    public function store(Request $request){
    	
     $order = Order::create([
                'user_id' => auth()->user()->id,
                'date' => Carbon::now(),
                'address' => $request->address,
                'status' => 0
            ]);

            // Insert into order items table
            foreach (Cart::instance('default')->content() as $item) {

                OrderItems::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                    'price' => $item->price
                ]);

            }

            Cart::instance('default')->destroy();


            return redirect()->back()->with('msg','Success Thank you');
    }

    }
