@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Search Products</h2>

            <p class="lead">Use the form below to search for a product - only one field is required</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="get" action="{{action('ProductController@search')}}" >
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Product Name</label>
                            <input name="name"
                                   type="text"
                                   class="form-control"
                            >
                        </div>


                        <div class="col-md-4 mb-3">
                            <label>Size</label>
                            <input name="size"
                                   type="text"
                                   class="form-control"
                            >
                        </div><div class="col-md-4 mb-3">
                            <label>Price</label>
                            <input name="price"
                                   type="text"
                                   class="form-control"
                            >
                        </div>
                        <hr class="mb-4">
                        <div class="container" style="text-align: center">
                            <button type="submit"  class="btn btn-light">Search Products</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Area Chart Example-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

@endsection