<?php

namespace App\Http\Controllers;


use App\Color;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Product;
use App\Size;
use App\Supplier;
use App\Tag;
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
        return view('products.index')->with('products', Product::all())->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('sizes', Size::all())->with('colors', Color::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('sizes', Size::all())->with('colors', Color::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $image = $request->image->store('public/products');

       $product = Product::create([
            'title' => $request->title,
            'image' => $image,
            'shortdescript' => $request->shortdescript,
            'longdescript' => $request->longdescript,
            'supplier_id' => $request->supplier,

        ]);
        if($request->tags){
            $product->tags()->attach($request->tags);
        }
        if($request->colors){
            $product->colors()->attach($request->colors);
        }
        if($request->sizes){
            $product->sizes()->attach($request->sizes);
        }

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
        return view('products.show', ['product' => Product::find($id)])->with('suppliers', Supplier::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.create')->with('product', $product)->with('suppliers', Supplier::all())->with('sizes', Size::all())->with('colors', Color::all())->with('tags', Tag::all());
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

        $data = $request->only(['title', 'description', 'published_at', 'content']);

        if ($request->hasFile('image')){

            $image = $request->image->store('products');

            $product->deleteImage();

            $data['image'] = $image;
        }

        if ($request->tags){
            $product->tags()->sync($request->tags);
        }

        if ($request->colors){
            $product->colors()->sync($request->colors);
        }

        if ($request->sizes){
            $product->sizes()->sync($request->sizes);
        }

        $product->update($data);

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
