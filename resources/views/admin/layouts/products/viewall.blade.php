@extends('admin.adminmaster')

@section('content')
    @include('admin.partials.messages')
    <div class="row mt-3">
        <div class="col-sm-12 mb-12" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Product name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit Product</th>
                    <th scope="col">Delete Product</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name . ' - ' . $product->size}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="/products/{{$product->id}}/edit" class="btn
                        btn-warning">Edit</a></td>
                        <td>
                            <form action="/products/{{$product->id}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger"  onclick="return confirm('Are you sure you want to ' +
                                 'remove this product?')"
                                        type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>


    </div>
    <!-- Area Chart Example-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

@endsection