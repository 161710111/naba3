<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorig;
class KategorigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorigs = Kategorig::all();
        // dd($kategori);
        return view('kategorig.index', compact('kategorigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorig.create');
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
            'nama' => 'required|'
        ]);
        $kategorigs = new Kategorig;
        $kategorigs->nama = $request->nama;
        $kategorigs->save();
        return redirect()->route('kategorig.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorig $kategorig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorig $kategorig)
    {
        $kategorigs = Kategorig::findOrFail($id);
        return view('kategorig.edit',compact('kategorigs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorig $kategorig)
    {
        $this->validate($request,[
            'nama' => 'required|'

        ]);
        $kategorigs = Kategorig::findOrFail($id);
        $kategorigs->nama = $request->nama;
        $kategorigs->save();
        return redirect()->route('kategorig.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorie  $kategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorig $kategorig)
    {
        $kategorigs = Kategorig::findOrFail($id);
         $kategorigs->delete();
        return redirect()->route('kategorig.index');
    }
}
