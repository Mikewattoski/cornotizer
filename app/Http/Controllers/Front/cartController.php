<?php

namespace App\Http\Controllers\Front;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;



class cartController extends Controller
{
	public function __construct(){
		$this->middleware('auth:web');
	}
    public function index(){
    	return view('Front.cart.index');  
    	  }
    	  public function store(Request $request){

			Cart::add(['id'=>$request->id,'name'=>$request->name,'price'=>$request->price,'qty'=>1])->associate('App\Product');
			return redirect()->back()->with('msg','item has been added to cart');
    	  }


						public function destroy($id){
							Cart::remove($id);
							return redirect()->back()->with('msg','item delete from cart');
						}






						public function savefor($id){
							$item=Cart::get($id);
						Cart::remove($id);
						cart::instance('save')->add(['id'=>$item->id,'name'=>$item->name,'price'=>$item->price,'qty'=>1])->associate('App\Product');
									return redirect()->back()->with('msg','item has been added for later');

						}





						
							public function sdestroy($id){
								Cart::instance('save')->remove($id);
								return redirect()->back()->with('msg','item delete from savelater');
							}

								public function mocart($id){
									$item=Cart::instance('save')->get($id);
								Cart::instance('save')->remove($id);
								cart::instance('default')->add(['id'=>$item->id,'name'=>$item->name,'price'=>$item->price,'qty'=>1])->associate('App\Product');
											return redirect()->back()->with('msg','item has been added to cart');

								}

    }
