<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Haji;
use App\Kategoria;
class HajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hajis = Haji::all();
        return view ('haji.index',compact('hajis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hajis = Haji::all();
         $kategorias = Kategoria::all();
         return view('haji.create',compact('hajis','kategorias'));
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
            'harga' => 'required|',
            'fasilitas' => 'required|',
            'batal' => 'required|',
            'biayamasuk' => 'required|',
            'biayatidak' => 'required|',
            'syarat' => 'required|',
            'daftar' => 'required|',
            'kategoria_id' => 'required|'   
        ]);
        $hajis = new Haji;
        $hajis->judul = $request->judul;
        $hajis->isi = $request->isi;
        $hajis->harga = $request->harga;
        $hajis->fasilitas = $request->fasilitas;
        $hajis->batal = $request->batal;
        $hajis->biayamasuk = $request->biayamasuk;
        $hajis->biayatidak = $request->biayatidak;
        $hajis->syarat = $request->syarat;
        $hajis->daftar = $request->daftar;
        $hajis->kategoria_id = $request->kategoria_id;
        $hajis->slug = str_slug($request->judul,'-');
        $hajis->save();
        return redirect()->route('haji.index');
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
        $hajis = Haji::findOrFail($id);
        $kategorias = Kategoria::all();
        $ketegoriasselect = Haji::findOrFail($id)->kategorias_id;
        return view('haji.edit',compact('hajis','kategorias','kategoriasselect'));
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
            'harga' => 'required|',
            'fasilitas' => 'required|',
            'batal' => 'required|', 
            'biayamasuk' => 'required|',
            'biayatidak' => 'required|',
            'syarat' => 'required|',
            'daftar' => 'required|',           
            'kategorie_id' => 'required'
        ]);
        $hajis = Haji::findOrFail($id);
        $hajis->judul = $request->judul;
        $hajis->isi = $request->isi;
        $hajis->harga = $request->harga;
        $hajis->fasilitas = $request->fasilitas;
        $hajis->batal = $request->batal;
        $hajis->biayamasuk = $request->biayamasuk;
        $hajis->biayatidak = $request->biayatidak;
        $hajis->syarat = $request->syarat;
        $hajis->daftar = $request->daftar;
        $hajis->kategoria_id = $request->kategoria_id;
        $hajis->slug = str_slug($request->judul,'-');
        $hajis->save();
        return redirect()->route('haji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hajis = Haji::findOrFail($id);
         $hajis->delete();
        return redirect()->route('haji.index');
    }
}