<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftars = Daftar::all();
        return view ('daftar.index',compact('daftars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.create');
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
            
            'paket' => 'required|',
            'paspor' => 'required|',
            'nama' => 'required|',
            'tempatlahir' => 'required|',
            'tgllahir' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'notelp' => 'required|',
            'status' => 'required|',
            'pekerjaan' => 'required|',
            'jabatan' => 'required|',
            'almkantor' => 'required|',
            'notelpkantor' => 'required|',
            'email' => 'required|',
            'keterangan' => 'required|'
              
        ]);
        $daftars = new Daftar;
        $daftars->foto = $request->foto;
        $daftars->paket = $request->paket;
        $daftars->paspor = $request->paspor;
        $daftars->nama = $request->nama;
        $daftars->tempatlahir = $request->tempatlahir;
        $daftars->tgllahir = $request->tgllahir;
        $daftars->jk = $request->jk;
        $daftars->alamat = $request->alamat;
        $daftars->notelp = $request->notelp;
        $daftars->status = $request->status;
        $daftars->pekerjaan = $request->pekerjaan;
        $daftars->jabatan = $request->jabatan;
        $daftars->almkantor = $request->almkantor;
        $daftars->notelpkantor = $request->notelpkantor;
        $daftars->email = $request->email;
        $daftars->keterangan = $request->keterangan;

        //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $daftars->foto= $filename;
        }

        $daftars->save();
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
        $daftars = Daftar::findOrFail($id);
        return view('daftar.edit',compact('daftars'));
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
            
            'paket' => 'required|',
            'paspor' => 'required|',
            'nama' => 'required|',
            'tempatlahir' => 'required|',
            'tgllahir' => 'required|',
            'jk' => 'required|',
            'alamat' => 'required|',
            'notelp' => 'required|',
            'status' => 'required|',
            'pekerjaan' => 'required|',
            'jabatan' => 'required|',
            'almkantor' => 'required|',
            'notelpkantor' => 'required|',
            'email' => 'required|',
            'keterangan' => 'required|'
            
        ]);
        $daftars = Daftar::findOrFail($id);
        $daftars->foto = $request->foto;
        $daftars->paket = $request->paket;
        $daftars->paspor = $request->paspor;
        $daftars->nama = $request->nama;
        $daftars->tempatlahir = $request->tempatlahir;
        $daftars->tgllahir = $request->tgllahir;
        $daftars->jk = $request->jk;
        $daftars->alamat = $request->alamat;
        $daftars->notelp = $request->notelp;
        $daftars->status = $request->status;
        $daftars->pekerjaan = $request->pekerjaan;
        $daftars->jabatan = $request->jabatan;
        $daftars->almkantor = $request->almkantor;
        $daftars->notelpkantor = $request->notelpkantor;
        $daftars->email = $request->email;
        $daftars->keterangan = $request->keterangan;

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $daftars->foto=$filename;
    }

        $daftars->save();
        return redirect()->route('daftar.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftars = Daftar::findOrFail($id);
         $daftars->delete();
        return redirect()->route('daftar.index');
    }
}
