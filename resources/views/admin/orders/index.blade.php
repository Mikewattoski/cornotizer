@extends('admin.layouts.master')
@section('head')
<p>Products</p>
@endsection

@section('content')
   <div class="col-md-12">

                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                                <p class="category">List of all orders</p>
                            </div> @if (session()->has('msg'))
                                    <div class="alert alert-success">
                                    {{session()->get('msg')}}
                                    </div>
                                    @endif
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{($order->user)->name}}</td>
                                        <td>  @foreach ($order->products as $item)
                                    <table class="table">
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                        </tr>
                                    </table>
                                    @endforeach</td>
                                        <td> @foreach ($order->orderItems as $item)
                                        <table class="table">
                                            <tr>
                                                <td>{{ $item->quantity }}</td>
                                            </tr>
                                        </table>
                                    @endforeach</td>
                                        <td>{{$order->address}}</td>
                                        <td> @if ($order->status)
                                   <span class="label label-success">success</span>
                                   @else
                                   <span class="label label-warning">pending</span>
                                   @endif</td>
                                        <td>
                                         @if(!$order->status)
                                             {{  link_to_route('order.confirm','confirm',$order->id,['class'=>'btn btn-sm btn-success'] ) }}
                                             @else
                                             {{  link_to_route('order.pending','pending',$order->id,['class'=>'btn btn-sm btn-warning'] ) }}
                                             @endif
                                              {{  link_to_route('order.show','show',$order->id,['class'=>'btn btn-sm btn-success'] ) }}
                                          
                                        </td>
                                    </tr>
@endforeach
                                  

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
@endsection

