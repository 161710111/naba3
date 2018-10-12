<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galmanumroh;
class GalmanumrohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galmanumrohs = galmanumroh::all();
        return view ('galmanumroh.index',compact('galmanumrohs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galmanumroh.create');
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
            'logo' => 'required|'
        ]);
        $galmanumrohs = new galmanumroh;
        $galmanumrohs->logo = $request->logo;

         //apload foto
        if ($request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $galmanumrohs->logo= $filename;
        }

        $galmanumrohs->save();
        return redirect()->route('galmanumroh.index');
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
        $galmanumrohs = galmanumroh::findOrFail($id);
        return view('galmanumroh.edit',compact('galmanumrohs'));
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
            'logo' => 'required|'
        ]);
        $galmanumrohs = galmanumroh::findOrFail($id);
        $galmanumrohs->logo = $request->logo;
        

        if ($request->hasFile('logo')) {
            $uploaded_logo = $request->file('logo');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $galmanumrohs->logo=$filename;
    }
        $galmanumrohs->save();
        return redirect()->route('galmanumroh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galmanumrohs = galmanumroh::findOrFail($id);
         $galmanumrohs->delete();
        return redirect()->route('galmanumroh.index');
    }
}
