@extends('front.layouts.master')

@section('content')
    <!-- Jumbotron Header -->
        @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif


    <div class="row text-center ">
 <div class="content table-responsive table-full-width">
                <table class="table table-dark ">
                    <thead>
                    <tr>
                        <th colspan="7">Shop Details</th>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><img src="{{ url('shop').'/'. $shop->image }}" alt="" class="img-thumbnail"
                                                 style="width: 180px"></td>
                        <td class="align-middle">{{ $shop->name }}</td>
                        <td class="align-middle">{{ $shop->address }}</td>
                        <td class="align-middle">{{ $shop->description }}
                           </td>

                    </tbody>
                </table>
            </div>

    @foreach ($products as $product)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="text-center">
                <img class="card-img-top" src="{{ url('/upload') . '/' . $product->image }}" alt=""class="rounded float-center"
                                                 style="width: 180px;height: 180px">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{route('cart')}}" method="post" >
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach

    </div>
@endsection