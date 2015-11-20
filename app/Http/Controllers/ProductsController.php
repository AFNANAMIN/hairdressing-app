<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ProductsRequest;
use App\Http\Controllers\Controller;

use App\Product;

class ProductsController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product;
        return view('products.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        // Create and save a new product, mass assigning all of the input fields.
        $product = new Product($request->all());

        $product->save();

        if ($product->brand == 'one') {
            return redirect(route('panel') . '#brandone');
        } else if ($product->brand == 'two') {
            return redirect(route('panel') . '#brandtwo');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $product = Product::whereSlug($slug)->firstOrFail();
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->fill($request->all());
        $product->save();

        if ($product->brand == 'one') {
            return redirect(route('panel') . '#brandone');
        } else if ($product->brand == 'two') {
            return redirect(route('panel') . '#brandtwo');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('panel');
    }

    public function featured(Request $request)
    {
        $brand = $request->input('brand');
        $one =   $request->input('one');
        $two =   $request->input('two');
        $three = $request->input('three');
        Product::setFeatured($brand, $one, $two, $three);

        return redirect(route('products') . '#featured');
    }
}
