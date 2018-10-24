<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftarhaji;
class DaftarhajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarhajis = Daftarhaji::all();
        return view ('daftarhaji.index',compact('daftarhajis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarhaji.create');
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
        $daftarhajis = new Daftarhaji;
        $daftarhajis->foto = $request->foto;
        $daftarhajis->paket = $request->paket;
        $daftarhajis->paspor = $request->paspor;
        $daftarhajis->nama = $request->nama;
        $daftarhajis->tempatlahir = $request->tempatlahir;
        $daftarhajis->tgllahir = $request->tgllahir;
        $daftarhajis->jk = $request->jk;
        $daftarhajis->alamat = $request->alamat;
        $daftarhajis->notelp = $request->notelp;
        $daftarhajis->status = $request->status;
        $daftarhajis->pekerjaan = $request->pekerjaan;
        $daftarhajis->jabatan = $request->jabatan;
        $daftarhajis->almkantor = $request->almkantor;
        $daftarhajis->notelpkantor = $request->notelpkantor;
        $daftarhajis->email = $request->email;
        $daftarhajis->keterangan = $request->keterangan;

        //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $daftarhajis->foto= $filename;
        }

        $daftarhajis->save();
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
        $daftarhajis = Daftarhaji::findOrFail($id);
        return view('daftarhaji.edit',compact('daftarhajis'));
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
        $daftarhajis = Daftarhaji::findOrFail($id);
        $daftarhajis->foto = $request->foto;
        $daftarhajis->paket = $request->paket;
        $daftarhajis->paspor = $request->paspor;
        $daftarhajis->nama = $request->nama;
        $daftarhajis->tempatlahir = $request->tempatlahir;
        $daftarhajis->tgllahir = $request->tgllahir;
        $daftarhajis->jk = $request->jk;
        $daftarhajis->alamat = $request->alamat;
        $daftarhajis->notelp = $request->notelp;
        $daftarhajis->status = $request->status;
        $daftarhajis->pekerjaan = $request->pekerjaan;
        $daftarhajis->jabatan = $request->jabatan;
        $daftarhajis->almkantor = $request->almkantor;
        $daftarhajis->notelpkantor = $request->notelpkantor;
        $daftarhajis->email = $request->email;
        $daftarhajis->keterangan = $request->keterangan;

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $daftarhajis->foto=$filename;
    }

        $daftarhajis->save();
        return redirect()->route('daftarhaji.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarhajis = Daftarhaji::findOrFail($id);
         $daftarhajis->delete();
        return redirect()->route('daftarhaji.index');
    }
}
