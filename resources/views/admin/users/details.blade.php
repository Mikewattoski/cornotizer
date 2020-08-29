@extends('admin.layouts.master')
@section('head')
<p>user order details</p>
@endsection
@section('content')
<div class="row">


                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">orders</h4>
                                <p class="category">List of all user orders</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>order ID</th>
                                        <th>Product name</th>
                                       
                                        <th>Quantity</th> 
                                        <th>price</th>
                                        
                                        <th>Address</th>
                                       
                                        <th>order at</th>
                                        <th>status</th>
                                         <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($order as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                         <td>  @foreach ($order->products as $item)
                                    <table class="table">
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                        </tr>
                                    </table>
                                    @endforeach</td>
                                        
                                        <td> @foreach ($order->orderitems as $item)
                                        <table class="table">
                                            <tr>
                                                <td>{{ $item->quantity }}</td>
                                            </tr>
                                        </table>
                                    @endforeach
                                </td> 
                                  <td> @foreach ($order->orderitems as $item)
                                        <table class="table">
                                            <tr>
                                                <td>{{ $item->price }}</td>
                                            </tr>
                                        </table>
                                    @endforeach</td> 
                                          <td>{{$order->address}}</td>
                                        <td>{{  $order->created_at ? $order->created_at->diffForHumans(): '-'}}</td>
                                  <td> @if ($order->status)
                                   <span class="label label-success">success</span>
                                   @else
                                   <span class="label label-warning">pending</span>
                                   @endif</td>
                                       
                                        <td>
                                            <button class="btn btn-sm btn-success ti-close" title="Block User"></button>

                                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                                    title="Details"></button>
                                        </td>
                                    </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                                    <a href="{{ url('/admin/users') }}" class="btn btn-info btn-fill btn-wd">back</a>

                    </div>
                </div>
@endsection