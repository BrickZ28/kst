@extends('layouts.master')

@section('content')
    @include('layouts.jumbo')

    <div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-sm-3 mb-2">
                <div class="card text-center">
                    <div class="card-header">Pices</div>
                    <div class="card-body">
                        <h5 class="card-title">Sno-Kones</h5>
                        <p class="card-text">Small - $1.00</p>
                        <p class="card-text">Large - $2.00</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
                <div class="card text-center">
                    <div class="card-header">Private Events</div>
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">For your own personal event or party</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-2">
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
            <div class="col-sm-3">
                <aside>
                    <div class="blog-sidebar rounded">
                        <h4 class="font-italic">Upcoming Events</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">Event One</a></li>
                            <li><a href="#">Event Two</a></li>
                            <li><a href="#">Event Three</a></li>
                        </ol>
                    </div>


                </aside>
            </div>




        </div>
    </div>

    @include('layouts.customer')
@endsection