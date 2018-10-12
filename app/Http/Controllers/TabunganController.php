<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tabungan;
class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungans = tabungan::all();
        return view ('tabungan.index',compact('tabungans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabungan.create');
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
            'keterangan' => 'required|',
            'keunggulan' => 'required|',
            'syarat' => 'required|',
            'logo' => 'required|',
            'note' => 'required|'
        ]);
        $tabungans = new tabungan;
        $tabungans->judul = $request->judul;
        $tabungans->keterangan = $request->keterangan;
        $tabungans->keunggulan = $request->keunggulan;
        $tabungans->syarat = $request->syarat;
        $tabungans->logo = $request->logo;
        $tabungans->note = $request->note;

         //apload foto
        if ($request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $tabungans->logo= $filename;
        }

        $tabungans->save();
        return redirect()->route('tabungan.index');
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
        $tabungans = tabungan::findOrFail($id);
        return view('tabungan.edit',compact('tabungans'));
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
            'keterangan' => 'required|',
            'keunggulan' => 'required|',
            'syarat' => 'required|',
            'logo' => 'required|',
            'note' => 'required|'
        ]);
        $tabungans = tabungan::findOrFail($id);
        $tabungans->judul = $request->judul;
        $tabungans->keterangan = $request->keterangan;
        $tabungans->keunggulan = $request->keunggulan;
        $tabungans->syarat = $request->syarat;
        $tabungans->logo = $request->logo;
        $tabungans->note = $request->note;
        

        if ($request->hasFile('logo')) {
            $uploaded_logo = $request->file('logo');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $tabungans->logo=$filename;
    }
        $tabungans->save();
        return redirect()->route('tabungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungans = tabungan::findOrFail($id);
         $tabungans->delete();
        return redirect()->route('tabungan.index');
    }
}
