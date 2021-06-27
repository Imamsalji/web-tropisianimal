<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::latest()->paginate(8);
        return view('pictures.index',compact('pictures'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create');
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

            'tema' => 'required',

        ]);

  

        $nm = $request->gambar;
        $namagambar = $nm->getClientOriginalName();

        $Picture = new Picture;
        $Picture->gambar = $namagambar;
        $Picture->tema = $request->tema;
       
        $nm->move(public_path().'/data_foto', $namagambar);

        $Picture->save();

   

        return redirect()->route('pictures.index')

                        ->with('success','Picture created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();

  

        return redirect()->route('pictures.index')

                        ->with('success','Picture deleted successfully');
    }
}
