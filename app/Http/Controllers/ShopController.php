<?php

namespace App\Http\Controllers;
use App\product;
use App\shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
     public function index(){
    		
    		$shop=shop::all();
    		return view('admin.shop.index',compact('shop'));
    	}

public function destroy($id){
    shop::destroy($id);
session()->flash('msg','shop destroyed');
    return redirect('/admin/shop');
}

public function show($id){
	$shop=shop::find($id);
	$products=product::where('shop_id',$id)->get();
	return view('admin.shop.details',compact('shop','products'));
}
 public function edit($id){
            $pro=shop::find($id);
            return view('admin.shop.edit',compact('pro'));
                 }
                 //edit updation funtion

 public function update(Request $request, $id){
    //find the product
    $pro=shop::find($id);
    //validate the firm
    $request->validate([
    'name'=>'required',
    'address'=>'required',
    'description'=>'required',
    
]);if($request->hasfile('image')){
        if(file_exists(public_path('shop').$pro->image)){
            unlink((public_path('shop').$pro->image));
        }
        $image=$request->image;
$image->move('shop',$image->getClientOriginalName());
$pro->image=$request->image->getClientOriginalName();
    }
    
    $pro->update([
'name'=>$request->name,
'address'=>$request->address,
'description'=>$request->description,
'image'=>$pro->image,
]);
    
    //message
$request->session()->flash('msg','your shop has been updated');
    //redirect
return redirect('/admin/shop');
    }

    public function create(){
    $pro=new shop;
    return view ('admin.shop.create',compact('pro'));
}


public function store(Request $request){
//validate form
$request->validate([
    'name'=>'required',
    'description'=>'required',
    'address'=>'required',
        'image'=>'image|required',


]);
//image upload
if($request->hasfile('image')){
$image=$request->image;
$image->move('shop',$image->getClientOriginalName());
}
shop::create([
'name'=>$request->name,
'description'=>$request->description,
'address'=>$request->address,
'image'=>$request->image->getClientOriginalName()

]);

$request->session()->flash('msg','your Shop has been added');


return redirect('/admin/shop/create');}


}
