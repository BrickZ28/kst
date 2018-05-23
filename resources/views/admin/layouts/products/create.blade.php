@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="container  mt-4" style="margin-bottom: 13em">
        <div class="py-5 text-center">
            @include('admin.partials.messages')
            <h2>Create Product</h2>

            <p class="lead">Use the form below to create a new product</p>
        </div>

        <div class="form-group">
            <div class="col-12 ">
                <form method="post" action="{{url('products')}}" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4">
                            <label>Name *</label>
                            <input name="name"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ old('name', '') }}"
                                   required>
                            @if($errors->has('name'))
                                <p class="bg-danger text-white">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label>Size</label>
                            <input name="size"
                                   type="text"
                                   class="form-control"
                                   placeholder=""
                                   value="{{ old('size', '') }}">
                            @if($errors->has('size'))
                                <p class="bg-danger text-white">{{ $errors->first('size') }}</p>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <label>Price *</label>
                            <input name="price"
                                   type="text"
                                   class="form-control"
                                   id="text"
                                   placeholder="0.00"
                                   value="{{ old('price', '') }}"required>
                            @if($errors->has('price'))
                                <p class="bg-danger text-white">{{ $errors->first('price') }}</p>
                            @endif
                        </div>
                    </div>

                    <hr class="mb-4">
                    <div class="container" style="text-align: center">
                        <button type="submit"  class="btn btn-light">Create Product</button>
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