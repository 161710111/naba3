<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galmanhaji;
class GalmanhajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galmanhajis = galmanhaji::all();
        return view ('galmanhaji.index',compact('galmanhajis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galmanhaji.create');
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
        $galmanhajis = new galmanhaji;
        $galmanhajis->logo = $request->logo;

         //apload foto
        if ($request->hasFile('logo')){
            $file=$request->file('logo');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $galmanhajis->logo= $filename;
        }

        $galmanhajis->save();
        return redirect()->route('galmanhaji.index');
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
        $galmanhajis = galmanhaji::findOrFail($id);
        return view('galmanhaji.edit',compact('galmanhajis'));
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
        $galmanhajis = galmanhaji::findOrFail($id);
        $galmanhajis->logo = $request->logo;
        

        if ($request->hasFile('logo')) {
            $uploaded_logo = $request->file('logo');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $galmanhajis->logo=$filename;
    }
        $galmanhajis->save();
        return redirect()->route('galmanhaji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galmanhajis = galmanhaji::findOrFail($id);
         $galmanhajis->delete();
        return redirect()->route('galmanhaji.index');
    }
}
