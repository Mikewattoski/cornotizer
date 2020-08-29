  
@extends('admin.layouts.master')
@section('head')
<p>Product details</p>
@endsection

@section('content')
  <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Product Detail</h4>
                                <p class="category">List of all stock</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <tbody>

                                        <tr>
                                            <th>ID</th>
                                            <td>{{$pro->id}}</td>
                                        </tr>

                                        <tr>
                                            <th>Name</th>
                                            <td>{{$pro->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>shop id</th>
                                            <td>{{$pro->shop_id}}</td>
                                        </tr>

                                        <tr>
                                            <th>Description</th>
                                            <td>{{$pro->description}}</td>
                                        </tr>

                                        <tr>
                                            <th>Price</th>
                                            <td>{{$pro->price}}</td>
                                        </tr>

                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $pro->created_at ? $pro->created_at->diffForHumans: '-'}}</td>
                                        </tr>

                                        <tr>
                                            <th>Updated At</th>
                                            <td>{{ $pro->updated_at ? $pro->updated_at->diffForHumans: '-'}}</td>
                                        </tr>

                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{url('upload'.'/'.$pro->image)}}" alt="" class="img-thumbnail" style="width: 150px;"></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                         <a href="/admin/product">
                        <i class="btn btn-info btn-fill "><p>Back</p></i>
                        
                    </a>
                    </div>
                </div>
            </div>
        </div>
@endsection

 