<?php

namespace App\Http\Controllers;
use App\Jadwalumroh;
use Illuminate\Http\Request;

class JadwalumrohController extends Controller
{
    public function index()
    {
        $jadwalumroh = Jadwalumroh::all();
        // dd($kategori);
        return view('jadwalumroh.index', compact('jadwalumroh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwalumroh.create');
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
        $jadwalumrohs = new Jadwalumroh;
        $jadwalumrohs->bulan = $request->bulan;
        $jadwalumrohs->keterangan = $request->keterangan;
        $jadwalumrohs->save();
        return redirect()->route('jadwalumroh.index');
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
        $jadwalumrohs = Jadwalumroh::findOrFail($id);
        return view('jadwalumroh.edit',compact('jadwalumrohs'));
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
        $jadwalumrohs = Jadwalumroh::findOrFail($id);
        $jadwalumrohs->bulan = $request->bulan;
        $jadwalumrohs->keterangan = $request->keterangan;
        $jadwalumrohs->save();
        return redirect()->route('jadwalumroh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwalumrohs = Jadwalumroh::findOrFail($id);
         $jadwalumrohs->delete();
        return redirect()->route('jadwalumroh.index');
    }
}
