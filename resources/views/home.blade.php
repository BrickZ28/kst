@extends('layouts.master')

@section('content')
    @include('layouts.jumbo')

    <div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="card text-center">
                    <div class="card-header">Prices</div>
                    <div class="card-body">
                        @foreach($products as $product)
                            <h5 class="card-title">{{$product->name.' - '.$product->size}}</h5>
                            <p class="card-text">${{$product->price}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card text-center">
                    <div class="card-header">Private Events</div>
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">For your own personal event or party</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-2">
                <div class="card text-center">
                    <div class="card-header">Fun For All</div>
                    <div class="card-body">
                        <h5 class="card-title">Your kids will love</h5>
                        <p class="card-text"><span style="font-family: 'Great Vibes', cursive">Knuths</span>
                            <span style="font-family: 'Love Ya Like A Sister', cursive">Sweet Treats</span><small>
                                and so will you</small></p>
                    </div>
                </div>
            </div>
            @include('includes.events')
        </div>
    </div>

    @include('layouts.customer')
@endsection