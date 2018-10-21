<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimoni;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = testimoni::all();
        return view ('testimoni.index',compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
            'logo' => 'required|',
            'keterangan' => 'required|',
            'nama' => 'required|'
        ]);
        $testimonis = new testimoni;
        $testimonis->logo = $request->logo;
        $testimonis->keterangan = $request->keterangan;
        $testimonis->nama = $request->nama;

         //apload foto
        if ($request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $testimonis->logo= $filename;
        }

        $testimonis->save();
        return redirect()->route('testimoni.index');
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
        $testimonis = testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimonis'));
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
            'keterangan' => 'required|',
            'nama' => 'required|'
        ]);
        $testimonis = testimoni::findOrFail($id);
        $testimonis->keterangan = $request->keterangan;
        $testimonis->nama = $request->nama;
        

        if ($request->hasFile('logo')) {
            $uploaded_logo = $request->file('logo');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $testimonis->logo=$filename;
    }
        $testimonis->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonis = testimoni::findOrFail($id);
         $testimonis->delete();
        return redirect()->route('testimoni.index');
    }
}
