<?php

namespace App\Http\Controllers;


use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')->with('products', Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

        Product::create([
            'title' => $request->title,
            'image' => $request->image,
            'shortdescript' => $request->shortdescript,
            'longdescript' => $request->longdescript  ,
            'sizes' => $request->sizes,
            'colors' => $request->colors,
        ]);

        session()->flash('success', 'Product created successfully.');

        return redirect(route('products.index'));
        /*TODO: redirect to created product*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.create')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update([

            'name' => $request->name

        ]);

        $product->save();

        session()->flash('success', 'Product updated successfully.');

        return redirect(route('products.index'));
        /*TODO: redirect to updated product*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        /*        if ($product->products->count() > 0){
                    session()->flash('error', 'Product cannot be deleted because it has some posts.');

                    return redirect()->back();
                }*/

        $product->delete();

        session()->flash('success', 'Product deleted successfully');

        return redirect(route('products.index'));
    }
}
