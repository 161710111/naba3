<?php

namespace App\Http\Controllers;

use App\Umroh;
use App\Kategorie;
use Illuminate\Http\Request;

class UmrohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umrohs = Umroh::all();
        return view ('umroh.index',compact('umrohs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $umrohs = Umroh::all();
         $kategories = Kategorie::all();
         return view('umroh.create',compact('umrohs','kategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|',
            'isi' => 'required|',
            'kategorie_id' => 'required|'   
        ]);
        $umrohs = new Umroh;
        $umrohs->judul = $request->judul;
        $umrohs->isi = $request->isi;
        $umrohs->kategorie_id = $request->kategorie_id;
        $umrohs->slug = str_slug($request->judul,'-');
        $umrohs->save();
        return redirect()->route('umroh.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Umroh  $umroh
     * @return \Illuminate\Http\Response
     */
    public function show(Umroh $umroh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Umroh  $umroh
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $umrohs = Umroh::findOrFail($id);
        $kategories = Kategorie::all();
        $ketegoriesselect = Umroh::findOrFail($id)->kategories_id;
        return view('umroh.edit',compact('umrohs','kategories','kategoriesselect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Umroh  $umroh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required|',
            'isi' => 'required|',
            'kategorie_id' => 'required'
        ]);
        $umrohs = Umroh::findOrFail($id);
        $umrohs->judul = $request->judul;
        $umrohs->isi = $request->isi;
        $umrohs->kategorie_id = $request->kategorie_id;
        $umrohs->slug = str_slug($request->judul,'-');
        $umrohs->save();
        return redirect()->route('umroh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Umroh  $umroh
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $umrohs = Umroh::findOrFail($id);
         $umrohs->delete();
        return redirect()->route('umroh.index');
    }
}
