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
            'foto' => 'required|',
            'lokasi' => 'required|',
            'harga' => 'required|',
            'hotel' => 'required|',
            'keterangan' => 'required|',
            'kategoriw_id' => 'required|'   
        ]);
        $wisatas = new Wisata;
        $wisatas->judul = $request->judul;
        $wisatas->isi = $request->isi;
        $wisatas->foto = $request->foto;
        $wisatas->lokasi = $request->lokasi;
        $wisatas->harga = $request->harga;
        $wisatas->hotel = $request->hotel;
        $wisatas->keterangan = $request->keterangan;
        $wisatas->kategoriw_id = $request->kategoriw_id;
        $wisatas->slug = str_slug($request->judul,'-');

        //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $wisatas->foto= $filename;
        }

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
            'foto' => 'required|',
            'lokasi' => 'required|',
            'hotel' => 'required|',
            'harga' => 'required|',
            'keterangan' => 'required|',
            'kategorie_id' => 'required'
        ]);
        $wisatas = Wisata::findOrFail($id);
        $wisatas->judul = $request->judul;
        $wisatas->isi = $request->isi;
        $wisatas->foto = $request->foto;
        $wisatas->lokasi = $request->lokasi;
        $wisatas->harga = $request->harga;
        $wisatas->hotel = $request->hotel;
        $wisatas->keterangan = $request->keterangan;
        $wisatas->kategoriw_id = $request->kategoriw_id;
        $wisatas->slug = str_slug($request->judul,'-');

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $wisatas->foto=$filename;
    }

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
