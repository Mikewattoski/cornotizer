@extends('admin.layouts.master')
@section('head')
<p>Products</p>
@endsection

@section('content')
 <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Products</h4>
                                
                            </div>
                             @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                    {{session()->get('msg')}}
                                    </div>
                                    @endif
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>shop id</th>
                                        <th>Price</th>
                                        <th>Desc</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->shop_id}}</td>
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