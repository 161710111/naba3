<?php

namespace App\Http\Controllers;

use App\Kategorie;
use Illuminate\Http\Request;

class KategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategories = Kategorie::all();
        // dd($kategori);
        return view('kategorie.index', compact('kategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorie.create');
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
            'nama_kategori' => 'required|',
            'keterangan' => 'required|'
        ]);
        $kategories = new Kategorie;
        $kategories->nama_kategori = $request->nama_kategori;
        $kategories->keterangan = $request->keterangan;
        $kategories->slug = str_slug($request->nama_kategori, '-');
        $kategories->save();
        return redirect()->route('kategorie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorie $kategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorie $kategorie)
    {
        $kategories = Kategorie::findOrFail($id);
        return view('kategorie.edit',compact('kategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorie $kategorie)
    {
        $this->validate($request,[
            'nama_kategori' => 'required|',
            'keterangan' => 'required|'

        ]);
        $kategories = Kategorie::findOrFail($id);
        $kategories->nama_kategori = $request->nama_kategori;
        $kategories->keterangan = $request->keterangan;
        $kategories->save();
        return redirect()->route('kategorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorie $kategorie)
    {
        $kategories = Kategorie::findOrFail($id);
         $kategories->delete();
        return redirect()->route('kategorie.index');
    }
}
