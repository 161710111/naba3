<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kategorig;
class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::all();
        return view ('galeri.index',compact('galeris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galeris = Galeri::all();
         $kategorigs = Kategorig::all();
         return view('galeri.create',compact('galeris','kategorigs'));
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
            'kategorig_id' => 'required|'
        ]);
        $galeris = new Galeri;
        $galeris->foto = $request->foto;
        $galeris->kategorig_id = $request->kategorig_id;

         //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $galeris->foto= $filename;
        }

        $galeris->save();
        return redirect()->route('galeri.index');
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
        $galeris = Galeri::findOrFail($id);
        $kategorigs = Kategorig::all();
        $ketegorigsselect = Galeri::findOrFail($id)->kategorigs_id;
        return view('galeri.edit',compact('galeris','kategorigs','kategorigsselect'));
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
            'kategorig_id' => 'required'
        ]);
        $galeris = Galeri::findOrFail($id);
        $galeris->foto = $request->foto;
        $umrohs->kategorig_id = $request->kategorig_id;
        

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $galeris->foto=$filename;
    }
        $galeris->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeris = Galeri::findOrFail($id);
         $galeris->delete();
        return redirect()->route('galeri.index');
    }
}
