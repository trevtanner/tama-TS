<?php

namespace App\Http\Controllers;

use App\Product;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home')->with('tags', Tag::all())->with('products', Product::all());

    }

    public function imprint()
    {
        return view('imprint')->with('tags', Tag::all());
    }

    public function faq()
    {
        return view('faq')->with('tags', Tag::all());
    }

    public function contact()
    {
        return view('contact')->with('tags', Tag::all());
    }

    public function privacy()
    {
        return view('privacy')->with('tags', Tag::all());
    }

}
