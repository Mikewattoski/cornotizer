@extends('front.layouts.master')

@section('content')
    <!-- Jumbotron Header -->
        <header class="jumbotron text-white jumbotron-image shadow my-4"  style="background-image: url(https://images.unsplash.com/photo-1552152974-19b9caf99137?fit=crop&w=1350&q=80);">
            <h5 class="display-3"><strong>Welcome,</strong></h5>
            <p class="display-4"><strong>SALE UPTO 50%</strong></p>
            <p class="display-4">&nbsp;</p>
            <a href="#" class="btn btn-warning btn-lg float-right">SHOP NOW!</a>
        </header>
    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif


    <div class="row text-center">


    @foreach ($shop as $shop)
        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="card">
                <div class="card-body">
                     <img class="card-img-top" src="{{ url('/shop') . '/' . $shop->image }}" alt="">
                    <h5 class="card-title">{{ $shop->name }}</h5>
                    <p class="card-text">
                       {{ $shop->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>{{ $shop->address }}</strong> &nbsp;
                    
                        
                </div>
                 {{  link_to_route('sh','Go to shop',$shop->id,['class'=>'btn btn-primary btn-outline-dark'] ) }}
                    
            </div>
        </div>

        @endforeach

    </div>
@endsection