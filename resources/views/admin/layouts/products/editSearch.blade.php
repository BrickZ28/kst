@extends('admin.adminmaster')

@section('content')
    <!-- Icon Cards-->
    <div class="row mt-3">
        <div class="col-sm-12 mb-12">
            <table class="table table-striped table-bordered table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                    <th scope="col">Edit Event</th>
                    <th scope="col">Cancel Event</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->size}}</td>
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

        </div>


    </div>
    <!-- Area Chart Example-->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->

@endsection