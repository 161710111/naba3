<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftartabungan;
class Daftartabungan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftartabungans = Daftartabungan::all();
        return view ('daftartabungan.index',compact('daftartabungans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftartabungan.create');
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
            
            'nama' => 'required|',
            'tempatlahir' => 'required|',
            'tgllahir' => 'required|',
            'jk' => 'required|',
            'tanda' => 'required|',
            'notanda' => 'required|',
            'alamatsesuai' => 'required|',
            'alamatsurat' => 'required|',
            'email' => 'required|',
            'rencana' => 'required|',
            'pendamping' => 'required|',
            'paket' => 'required|',
            'jumlahsetoran' => 'required|',
            'setoran' => 'required|'
            
              
        ]);
        $daftartabungans = new Daftartabungan;
        $daftartabungans->nama = $request->nama;
        $daftartabungans->tempatlahir = $request->tempatlahir;
        $daftartabungans->tgllahir = $request->tgllahir;
        $daftartabungans->jk = $request->jk;
        $daftartabungans->foto = $request->foto;
        $daftartabungans->tanda = $request->tanda;
        $daftartabungans->notanda = $request->notanda;
        $daftartabungans->alamatsesuai = $request->alamatsesuai;
        $daftartabungans->alamatsurat = $request->alamatsurat;
        $daftartabungans->email = $request->email;
        $daftartabungans->rencana = $request->rencana;
        $daftartabungans->pendamping = $request->pendamping;
        $daftartabungans->paket = $request->paket;
        $daftartabungans->jumlahsetoran = $request->jumlahsetoran;
        $daftartabungans->setoran = $request->setoran;
        

        $daftartabungans->save();
        return redirect()->route('frontend.sukses');
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
        $daftartabungans = Daftartabungan::findOrFail($id);
        return view('daftartabungan.edit',compact('daftartabungans'));
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
            
            'nama' => 'required|',
            'tempatlahir' => 'required|',
            'tgllahir' => 'required|',
            'jk' => 'required|',
            'tanda' => 'required|',
            'notanda' => 'required|',
            'alamatsesuai' => 'required|',
            'alamatsurat' => 'required|',
            'email' => 'required|',
            'rencana' => 'required|',
            'pendamping' => 'required|',
            'paket' => 'required|',
            'jumlahsetoran' => 'required|',
            'setoran' => 'required|',
            'keterangan' => 'required|'
            
        ]);
        $daftartabungans = Daftartabungan::findOrFail($id);
        $daftartabungans->nama = $request->nama;
        $daftartabungans->tempatlahir = $request->tempatlahir;
        $daftartabungans->tgllahir = $request->tgllahir;
        $daftartabungans->jk = $request->jk;
        $daftartabungans->foto = $request->foto;
        $daftartabungans->tanda = $request->tanda;
        $daftartabungans->notanda = $request->notanda;
        $daftartabungans->alamatsesuai = $request->alamatsesuai;
        $daftartabungans->alamatsurat = $request->alamatsurat;
        $daftartabungans->email = $request->email;
        $daftartabungans->rencana = $request->rencana;
        $daftartabungans->pendamping = $request->pendamping;
        $daftartabungans->paket = $request->paket;
        $daftartabungans->jumlahsetoran = $request->jumlahsetoran;
        $daftartabungans->setoran = $request->setoran;

        $daftartabungans->save();
        return redirect()->route('daftartabungan.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftartabungans = Daftartabungan::findOrFail($id);
         $daftartabungans->delete();
        return redirect()->route('daftartabungan.index');
    }
}
