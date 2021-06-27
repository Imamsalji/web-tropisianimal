<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Gambar;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::latest()->paginate(1);
        return view('profiles.index',compact('profiles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()

    {

        return view('profiles.create');

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

            'nip' => 'required',

            'gambar' => 'required',

        ]);

        $nm = $request->gambar;
        $namagambar = $nm->getClientOriginalName();

        $Gambar = new Gambar;
        $Gambar->nip = $request->nip;
        $Gambar->gambar = $namagambar;


        $Gambar->save();

        $nm->move(public_path().'/data_foto', $namagambar);
   

        return redirect()->route('home')

                        ->with('success','Gambar Berhasil di Ubah.');

    }

    public function cari(Request $request){
        $nip = $request->name;

        $profiles = Profile::where('nip','like',"%".$nip."%")->paginate(5);
        return view('profiles.index',compact('profiles','nip'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    } 
        
    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
      @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('profiles.show',compact('profile'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profiles.edit',compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'nama_belakang' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
        ]);
        $profile->update($request->all());
        return redirect()->route('home')
                        ->with('success','Profile updated successfully');
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')
                        ->with('success','Profile deleted successfully');
    }
}
