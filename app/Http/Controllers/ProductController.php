<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name', 'asc')->paginate(10);

        return view('admin.layouts.products.viewall')->with('products', $products);
    }

    public function viewAll(){

        $products = Product::orderBy('name', 'asc')->paginate(10);

        return view('admin.layouts.products.viewall')->with('products', $products);
    }


    public function create()
    {
        return view('admin.layouts.products.create');
    }

    //get and insert into product table
    public function store(Request $request){
        request()->validate([
            'name'   => 'required|min: 5',
            'price'  => 'required|numeric',
            'size'   => 'alpha',
        ]);

        Product::create($request->all());

        return redirect('admin')->with('success', 'Product Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return void \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    //find and display the event
    public function edit($id){
        $product = Product::find($id);

        return view('admin.layouts.products.edit', compact('product', 'id'));
    }

    //update the event
    public function update(Request $request, $id){

        request()->validate([
            'name'   => 'required|min: 5',
            'price'  => 'required|numeric',
            'size'   => 'alpha',
            ]);

        $product          = Product::find($id);
        $product->name   =$request->get('name');
        $product->size   =$request->get('size');
        $product->price  =$request->get('price');
        $product->save();
        return redirect('admin')->with('success', 'Product Updated');;
    }


    //delete the model
    public function destroy($id){

        Product::destroy($id);

        return redirect('admin')->with('success', 'Product Removed');;

    }

    //search for record
    public function search(Request $request){

        $name   = $request->get('name');
        $size   = $request->get('size');
        $price  = $request->get('price');
        if(empty($name)){
            $name = '';
        }
        if(empty($size)){
            $size = '';
        }
        if(empty($price)){
            $price = '';
        }

        $products = Product::where('name', 'like', $name)
            ->orwhere('size', 'like', $size)
            ->orwhere('price', 'like', $price)
            ->get();
        return view('admin.layouts.products.editSearch')->with('products', $products);
    }

    //dispaly page to search for an event
    public function lookupProducts(){

        return view('admin.layouts.products.lookupProducts');
    }

}
