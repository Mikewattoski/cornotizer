<?php

namespace App\Http\Controllers;
use App\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    	$products=Product::all();
    		return view('admin.products.index',compact('products'));
    	}





    	//edit page
    	 public function edit($id){
    	 	$pro=Product::find($id);
    	 	return view('admin.products.edit',compact('pro'));
    	 		 }
    	 		 //edit updation funtion

 public function update(Request $request, $id){
 	//find the product
 	$pro=Product::find($id);
 	//validate the firm
 	$request->validate([
	'name'=>'required',
	'price'=>'required',
	'description'=>'required',
    'shop_id'=>'required'
	
]);
 	//check if image
 	if($request->hasfile('image')){
 		if(file_exists(public_path('upload').$pro->image)){
 			unlink((public_path('upload').$pro->image));
 		}
 		$image=$request->image;
$image->move('upload',$image->getClientOriginalName());
$pro->image=$request->image->getClientOriginalName();
 	}
 	
 	//update the product
$pro->update([
'name'=>$request->name,
'price'=>$request->price,
'description'=>$request->description,
'image'=>$pro->image,
'shop_id'=>$pro->shop_id
]);
 	
 	//message
$request->session()->flash('msg','your product has been updated');
 	//redirect
return redirect('/admin/product');
 }

 //rfjusdrydtydtdtfirtfirtfrtfrtftfutyutyutygutygtygygfutftffyhgyfygygojuguhoi

    	 //show page
    	 public function show($id){
    	$pro=Product::find($id);
    	
    	return view ('admin.products.details',compact('pro'));
}
    

public function create(){
	$pro=new Product;
	return view ('admin.products.create',compact('pro'));
}
public function destroy($id){
	Product::destroy($id);
session()->flash('msg','product destroyed');
	return redirect('/admin/product');
}
public function store(Request $request){
//validate form
$request->validate([
	'name'=>'required',
	'price'=>'required',
	'description'=>'required',
	'image'=>'image|required',
    'shop_id'=>'required'

]);
//image upload
if($request->hasfile('image')){
$image=$request->image;
$image->move('upload',$image->getClientOriginalName());
}

Product::create([
'name'=>$request->name,
'price'=>$request->price,
'description'=>$request->description,
'shop_id'=>$request->shop_id,
'image'=>$request->image->getClientOriginalName()
]);

$request->session()->flash('msg','your product has been added');


return redirect('/admin/product/create');
}
}



		//product show

