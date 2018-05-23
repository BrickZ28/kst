@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Edit Product</h2>

            <p class="lead">Use the form below to edit a product</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="post" action="{{action('ProductController@update', $id)}}" >
                    {{ csrf_field() }}
                    <input type="hidden"
                           name="_method"
                           value="PATCH"
                    >
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label>Product name *</label>
                            <input name="name"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ $product->name }}"
                                   required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label>Size</label>
                            <input name="size"
                                   type="size"
                                   class="form-control"
                                   id="size"
                                   placeholder=""
                                   value="{{ $product->size}}"
                                   required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Price *</label>
                            <input name="price"
                                   type="text"
                                   class="form-control"
                                   id="price"
                                   value="{{ $product->price }}"
                                   required>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="container" style="text-align: center">
                        <button type="submit"  class="btn btn-light">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Area Chart Example-->

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->

@endsection