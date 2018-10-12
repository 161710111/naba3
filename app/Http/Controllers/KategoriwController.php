<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategoriw;
class KategoriwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriws = Kategoriw::all();
        // dd($kategori);
        return view('kategoriw.index', compact('kategoriws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoriw.create');
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
        $kategoriws = new Kategoriw;
        $kategoriws->nama_kategori = $request->nama_kategori;
        $kategoriws->slug = str_slug($request->nama_kategori, '-');
        $kategoriws->save();
        return redirect()->route('kategoriw.index');
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
        $kategoriwsa = Kategoriw::findOrFail($id);
        return view('kategoriw.edit',compact('kategoriwsa'));
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
        $kategoriws = Kategoriw::findOrFail($id);
        $kategoriws->nama_kategori = $request->nama_kategori;
        $kategoriws->save();
        return redirect()->route('kategoriw.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategoriws = Kategoriw::findOrFail($id);
         $kategoriws->delete();
        return redirect()->route('kategoriw.index');
    }
}
