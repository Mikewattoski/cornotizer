@extends('admin.layouts.master')
@section('head')
<p>shop details</p>
@endsection

                  
        @section('content')
  <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">shop details</h4>
                             @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                    {{session()->get('msg')}}
                                    </div>
                                    @endif  <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                       
                                        <th>description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <tr>
                                        <td>{{$shop->id}}</td>
                                        <td>{{$shop->name}}</td>
                                        <td>{{$shop->address}}</td>
                                        <td>{{$shop->description}}</td>
                                       
                                        </tr>

                                    

                                    </tbody>
                                </table>  
                            </div>
                           
                    </div>
                </div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Products</h4>
                                
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        
                                        <th>Price</th>
                                        <th>Desc</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($shop->products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td><img src="{{ url('upload').'/'. $product->image }}" alt="" class="img-thumbnail"
                                                 style="width: 80px"></td>
                                        <td>
                                           
                                                     {{  Form::open(['route' => ['product.destroy', $product->id],
                                            'method'=>'DELETE'])  }}
                                            {{  Form::button('',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("Are You Sure you want to delete it")'] ) }}
                                             {{  link_to_route('product.edit','',$product->id,['class'=>'btn btn-sm btn-info ti-pencil'] ) }}
                                             {{  link_to_route('product.show','',$product->id,['class'=>'btn btn-sm btn-primary ti-list'] ) }}

                                            {{Form::close()}}
                                        </td>
                                        @endforeach
                                    </tr>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection