<?php

  

namespace App\Http\Controllers;

  

use App\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
  

class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {
        
        
        $nomors = Product::latest()->paginate(1);
        $products = Product::latest()->paginate(6);
        return view('products.index',compact('products','nomors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

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

    public function store(Request $request)

    {

        $request->validate([

            'gambar' => 'required',

            'judul' => 'required',
            'penjelas' => 'required',

        ]);

  

        $nm = $request->gambar;
        $namagambar = $nm->getClientOriginalName();

        $Product = new Product;
        $Product->gambar = $request->gambar;
        $Product->judul = $request->judul;
        $Product->penjelas = $request->penjelas;
        $Product->gambar = $namagambar;

        $nm->move(public_path().'/data_foto', $namagambar);

        $Product->save();

   

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product)

    {

        return view('products.show',compact('product'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product)

    {

        return view('products.edit',compact('product'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Product $product)

    {
         

        $request->validate([

            'judul' => 'required',
            'penjelas' => 'required',

        ]);

        $product->update($request->all());


        



        


  

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product)

    {

        $product->delete();

  

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

}