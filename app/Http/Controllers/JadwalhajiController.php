<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwalhaji;
class JadwalhajiController extends Controller
{
       public function index()
    {
        $jadwalhajis = Jadwalhaji::all();
        // dd($kategori);
        return view('jadwalhaji.index', compact('jadwalhajis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwalhaji.create');
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
            'bulan' => 'required|',
            'keterangan' => 'required|'
        ]);
        $jadwalhajis = new Jadwalhaji;
        $jadwalhajis->bulan = $request->bulan;
        $jadwalhajis->keterangan = $request->keterangan;
        $jadwalhajis->save();
        return redirect()->route('jadwalhaji.index');
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
        $jadwalhajis = Jadwalhaji::findOrFail($id);
        return view('jadwalhaji.edit',compact('jadwalhajis'));
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
            'bulan' => 'required|',
            'keterangan' => 'required|'
        ]);
        $jadwalhajis = Jadwalhaji::findOrFail($id);
        $jadwalhajis->bulan = $request->bulan;
        $jadwalhajis->keterangan = $request->keterangan;
        $jadwalhajis->save();
        return redirect()->route('jadwalhaji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwalhajis = Jadwalhaji::findOrFail($id);
         $jadwalhajis->delete();
        return redirect()->route('jadwalhaji.index');
    }
}
