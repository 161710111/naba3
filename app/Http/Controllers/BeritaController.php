<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        return view ('berita.index',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $beritas = Berita::all();
         $kategoris = Kategori::all();
         return view('berita.create',compact('beritas','kategoris'));
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
            'isi' => 'required|',
            'kategori_id' => 'required|'   
        ]);
        $beritas = new Berita;
         //apload foto
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $destinationPath=public_path().'/assets/admin/images/icon/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces= $file->move($destinationPath,$filename);
            $beritas->foto= $filename;
        }
        $beritas->judul = $request->judul;
        $beritas->isi = $request->isi;
        $beritas->kategori_id = $request->kategori_id;
        $beritas->slug = str_slug($request->judul,'-');
        $beritas->save();
        return redirect()->route('berita.index');
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
        $beritas = Berita::findOrFail($id);
        $kategoris = Kategori::all();
        $selectedkategoris = Berita::findOrFail($id)->kategoris_id;
        return view('berita.edit',compact('beritas','kategoris','selectedkategoris'));
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
            'judul' => 'required|',
            'isi' => 'required|',
            'kategori_id' => 'required'
        ]);
        $beritas = Berita::findOrFail($id);
        $beritas->foto = $request->foto;
        $beritas->judul = $request->judul;
        $beritas->isi = $request->isi;
        $beritas->kategori_id = $request->kategori_id;
        $beritas->slug = str_slug($request->judul,'-');
        

        if ($request->hasFile('foto')) {
            $uploaded_logo = $request->file('foto');
            $extension = $uploaded_logo->getClientOriginalExtension();
            $filename = md5(time()) . '.' . $extension;
            $destinationPath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/images/icon/';
            $uploaded_logo->move($destinationPath, $filename);
    
     $beritas->foto=$filename;
    }
        $beritas->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = Berita::findOrFail($id);
         $beritas->delete();
        return redirect()->route('berita.index');
    }
}
