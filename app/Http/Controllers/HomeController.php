<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Picture;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pictures = Picture::latest()->paginate(4);
        $nomors = Product::latest()->paginate(1);
        $products = Product::latest()->paginate(6);
        return view('home',compact('products','nomors','pictures'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        
}
