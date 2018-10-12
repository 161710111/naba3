<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoria;

class KategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorias = Kategoria::all();
        // dd($kategori);
        return view('kategoria.index', compact('kategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoria.create');
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
        ]);
        $kategorias = new Kategoria;
        $kategorias->nama_kategori = $request->nama_kategori;
        $kategorias->slug = str_slug($request->nama_kategori, '-');
        $kategorias->save();
        return redirect()->route('kategoria.index');
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
    public function edit($id)
    {
        $kategorias = Kategoria::findOrFail($id);
        return view('kategoria.edit',compact('kategorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama_kategori' => 'required|',
        ]);
        $kategorias = Kategoria::findOrFail($id);
        $kategorias->nama_kategori = $request->nama_kategori;
        $kategorias->save();
        return redirect()->route('kategoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorias = Kategoria::findOrFail($id);
         $kategorias->delete();
        return redirect()->route('kategoria.index');
    }
}
