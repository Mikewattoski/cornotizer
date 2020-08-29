@extends('admin.layouts.master')
@section('head')
<p>shops</p>
@endsection
@section('content')
 <div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Shops</h4>
                                <p class="category">List of all registered Shops</p>
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
                                        <th>shop adress</th>
                                        <th>description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($shop as $shop)
                                    <tr>
                                        <td>{{$shop->id}}</td>
                                       
                                        <td>
                                        <td>{{$shop->name}}</td>
                                        <td>{{$shop->address}}</td>
                                        <td>{{$shop->description}}</td>
                                        <td><img src="{{ url('shop').'/'. $shop->image }}" alt="" class="img-thumbnail"
                                                 style="width: 80px"></td>
                                        <td>
                                             {{  Form::open(['route' => ['shop.destroy', $shop->id],
                                            'method'=>'DELETE'])  }}
                                            {{  Form::button('',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("Are You Sure you want to delete it")'] ) }}
                                             {{  link_to_route('shop.edit','',$shop->id,['class'=>'btn btn-sm btn-info ti-pencil'] ) }}
                                             
                                        	 {{  link_to_route('shop.show','details',$shop->id,['class'=>'btn btn-sm btn-success'] ) }}
                                             {{Form::close()}}

                                           
                                        </td>
                                    </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection
