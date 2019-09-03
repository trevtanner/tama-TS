<?php

namespace App\Http\Controllers;

use App\Http\Requests\Suppliers\CreateSupplierRequest;
use App\Http\Requests\Suppliers\UpdateSupplierRequest;
use App\Supplier;
use App\Tag;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('suppliers.index')->with('suppliers', Supplier::all())->with('tags', Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create')->with('suppliers', Supplier::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSupplierRequest $request)
    {

        Supplier::create([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Supplier created successfully.');

        return redirect(route('suppliers.create'));
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
    public function edit(Supplier $supplier)
    {
        return view('suppliers.create')->with('supplier', $supplier)->with('suppliers', Supplier::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update([

            'name' => $request->name

        ]);

        $supplier->save();

        session()->flash('success', 'Supplier updated successfully.');

        return redirect(route('suppliers.create'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {

/*        if ($supplier->products->count() > 0){
            session()->flash('error', 'Supplier cannot be deleted because it has some posts.');

            return redirect()->back();
        }*/

        $supplier->delete();

        session()->flash('success', 'Supplier deleted successfully');

        return redirect(route('suppliers.create'));
    }
}
