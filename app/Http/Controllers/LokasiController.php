<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;
use App\Kategoriw;
class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasis = Lokasi::all();
        return view ('lokasi.index',compact('lokasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasis = Lokasi::all();
         $kategoriws = Kategoriw::all();
         return view('lokasi.create',compact('lokasis','kategoriws'));
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
            'foto' => 'required|',
            'nama' => 'required|',
            'harga' => 'required|',
            'hotel' => 'required|',
            'keterangan' => 'required|',
            'kategoriw_id' => 'required|'   
        ]);
        $lokasis = new Lokasi;
        $lokasis->foto = $request->foto;
        $lokasis->nama = $request->nama;
        $lokasis->harga = $request->harga;
        $lokasis->hotel = $request->hotel;
        $lokasis->keterangan = $request->keterangan;
        $lokasis->kategoriw_id = $request->kategoriw_id;
        $lokasis->slug = str_slug($request->nama,'-');

        //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $lokasis->foto= $filename;
        }

        $lokasis->save();
        return redirect()->route('lokasi.index');
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
        $lokasis = Lokasi::findOrFail($id);
        $kategoriws = Kategoriw::all();
        $ketegoriwsselect = Lokasi::findOrFail($id)->kategoriws_id;
        return view('lokasi.edit',compact('lokasis','kategoriws','kategoriwsselect'));
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
            'foto' => 'required|',
            'nama' => 'required|',
            'hotel' => 'required|',
            'harga' => 'required|',
            'keterangan' => 'required|',
            'kategorie_id' => 'required'
        ]);
        $lokasis = Lokasi::findOrFail($id);
        $lokasis->foto = $request->foto;
        $lokasis->nama = $request->nama;
        $lokasis->harga = $request->harga;
        $lokasis->hotel = $request->hotel;
        $lokasis->keterangan = $request->keterangan;
        $lokasis->kategoriw_id = $request->kategoriw_id;
        $lokasis->slug = str_slug($request->nama,'-');

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $lokasis->foto=$filename;
    }

        $lokasis->save();
        return redirect()->route('lokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasis = Lokasi::findOrFail($id);
         $lokasis->delete();
        return redirect()->route('lokasi.index');
    }
}
