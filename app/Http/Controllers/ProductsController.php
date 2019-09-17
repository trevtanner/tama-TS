<?php

namespace App\Http\Controllers;


use App\Color;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Product;
use App\Size;
use App\Subcategory;
use App\Supplier;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index')
            ->with('products', Product::simplePaginate(6))
            ->with('suppliers', Supplier::all())
            ->with('tags', Tag::all())
            ->with('subcategories', Subcategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create')->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('subcategories', Subcategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

        $indeximagePath = $request->index_image->store('products', 'public');

        $index_image = \Intervention\Image\Facades\Image::make("storage/{$indeximagePath}")->resize(1920, 1080);
        $index_image->save();

        $imagePath = $request->image->store('products', 'public');

        $image = \Intervention\Image\Facades\Image::make("storage/{$imagePath}")->resize(1920, 1080);
        $image->save();

        $product = Product::create([
            'title' => $request->title,
            'index_image' => $indeximagePath,
            'image' => $imagePath,
            'shortdescript' => $request->shortdescript,
            'longdescript' => $request->longdescript,
            'supplier_id' => $request->supplier,
            'tag_id' => $request->tag,
            'subcategory_id' => $request->subcategory,
            'productnumber' => $request->productnumber,

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
    public function show(Product $product)
    {
        return view('products.show')->with('product', $product)->with('tags', Tag::all())->with('subcategories', Subcategory::all())->with('supplier', Supplier::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.create')->with('product', $product)->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('subcategories', Subcategory::all());
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

        $data = $request->only(['title', 'shortdescript', 'longdescript', 'supplier', 'productnumber']);

        if ($request->hasFile('image')){

            $image = $request->image->store('products');

            $product->deleteImage();

            $data['image'] = $image;
        }

        if ($request->tags){
            $product->tags()->sync($request->tags);
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


    public function tag(Tag $tag)
    {
        return view('products.tag')->with('tag', $tag)->with('products', $tag->products()->simplePaginate(9))->with('tags', Tag::all())->with('subcategories', Subcategory::all());
    }

    public function supplier(Supplier $supplier)
    {
        return view('products.supplier')->with('supplier', $supplier)->with('products', $supplier->products()->simplePaginate(9))->with('tags', Tag::all())->with('subcategories', Subcategory::all());
    }

    public function subcategory(Subcategory $subcategory)
    {
        return view('products.subcategory')->with('subcategory', $subcategory)->with('products', $subcategory->products()->simplePaginate(9))->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('subcategories', Subcategory::all());
    }

    public function search()
    {
        $search = request()->query('search');
        if ($search) {
            $products = Product::where('title', 'like', '%' .$search. '%')->simplePaginate(9);
        }
        else {
            $products = Product::simplePaginate(9);
        }

        return view('products.search')->with('products', $products)->with('suppliers', Supplier::all())->with('tags', Tag::all())->with('subcategories', Subcategory::all());
    }
}
