<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wisata;
use App\Kategoriw;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::all();
        return view ('wisata.index',compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisatas = Wisata::all();
         $kategoriws = Kategoriw::all();
         return view('wisata.create',compact('wisatas','kategoriws'));
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
            'kategoriw_id' => 'required|'   
        ]);
        $wisatas = new Wisata;
        $wisatas->judul = $request->judul;
        $wisatas->isi = $request->isi;
        $wisatas->kategoriw_id = $request->kategoriw_id;
        $wisatas->slug = str_slug($request->judul,'-');

        $wisatas->save();
        return redirect()->route('wisata.index');
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
        $wisatas = Wisata::findOrFail($id);
        $kategoriws = Kategoriw::all();
        $ketegoriwsselect = Wisata::findOrFail($id)->kategories_id;
        return view('Wisata.edit',compact('wisatas','kategoriws','kategoriwsselect'));
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
            'judul' => 'required|',
            'isi' => 'required|',
            'kategorie_id' => 'required'
        ]);
        $wisatas = Wisata::findOrFail($id);
        $wisatas->judul = $request->judul;
        $wisatas->isi = $request->isi;
        $wisatas->kategoriw_id = $request->kategoriw_id;
        $wisatas->slug = str_slug($request->judul,'-');

        $wisatas->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisatas = Wisata::findOrFail($id);
         $wisatas->delete();
        return redirect()->route('wisata.index');
    }
}
