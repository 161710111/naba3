<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
use App\Umroh;
use App\Kategorie;
use App\Haji;
use App\Kategoria;
use App\Lokasi;
use App\Wisata;
use App\Kategoriw;
use App\Daftar;
use App\Youtube;
use App\Daftarhaji;
use App\Daftartabungan;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home',compact('homes'));
    }

    public function index1()
    {
        return view('frontend.profile',compact('profile'));
    }

    public function index2()
    {
        return view('frontend.umroh',compact('umroh'));
    }

    public function index4()
    {
        return view('frontend.wisata',compact('wisata'));
    }

    public function index5()
    {
        return view('frontend.testimoni',compact('testimoni'));
    }

    public function index6()
    {
        $yt = Youtube::all();
        return view('frontend.galeri',compact('galeri','yt'));
    }

    public function index7()
    {
        return view('frontend.daftar_umroh',compact('daftar_umroh'));
    }

    public function index8()
    {
        return view('frontend.berita',compact('berita'));
    }

    public function index9()
    {
        return view('frontend.faqs',compact('faqs'));
    }

    public function index10()
    {
        return view('frontend.kontak',compact('kontak'));
    }

    public function index11()
    {
        return view('frontend.haji',compact('haji'));
    }


    public function index14()
    {
        return view('frontend.jadwal_keberangkatan',compact('jadwal_keberangkatan'));
    }

    public function index15()
    {
        return view('frontend.promo',compact('promo'));
    }

    public function index16()
    {
        return view('frontend.tabungan',compact('tabungan'));
    }

    public function index17()
    {
        return view('frontend.jadwal_manasik',compact('jadwal_manasik'));
    }

    public function index19()
    {
        return view('frontend.menu_umroh',compact('menu_umroh'));
    }

    public function index20()
    {
        return view('frontend.menu_haji',compact('menu_haji'));
    }

    public function index21()
    {
        return view('frontend.menu_wisata',compact('menu_wisata'));
    }

    public function index22()
    {
        return view('frontend.sukses',compact('sukses'));
    }

    public function index23()
    {
        return view('frontend.daftar_haji',compact('daftar_haji'));
    }

    public function index24()
    {
        return view('frontend.daftar_tabungan',compact('daftar_tabungan'));
    }

    public function home()
    {
        $berita = Berita::all();
        return view('frontend.home',compact('berita'));
    }

    public function berita()
    {
        $berita = Berita::all();
        return view('frontend.berita',compact('berita'));
    }

    public function show(Berita $berita)
    {
        // $berita = Berita::findOrFail($id);
        return view('frontend.detail_berita',compact('berita'));
    }

    public function umrahkategori(Kategorie $kategori)
    {
        $umroh = $kategori->Umroh()->latest()->paginate(5);
        return view('frontend.umroh', compact('umroh'));
    }

    public function hajikategori(Kategoria $kategoria)
    {
        $haji = $kategoria->Haji()->latest()->paginate(5);
        return view('frontend.haji', compact('haji'));
    }

    public function wisatakategori(Kategoriw $kategoriw)
    {
        $wisata = $kategoriw->Wisata()->latest()->paginate(5);
        $lokasi = $kategoriw->Lokasi()->latest()->paginate(5);
        return view('frontend.wisata', compact('wisata','lokasi'));

    }

    public function nampil(Lokasi $lokasi)
    {
        // $berita = Berita::findOrFail($id);
        return view('frontend.detail_wisata',compact('lokasi'));
    }

    public function create()
    {
        return view('frontend.daftar_umroh', 'daftar_tabungan', 'daftar_haji');
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
        return redirect()->route('sukses.index');
    }

    public function storeHaji(Request $request)
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
        return redirect()->route('sukses.index');
    }

    public function storeTabungan(Request $request)
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
            'jumlahwaktu' => 'required|',
            'jumlahsetoran' => 'required|',
            'setoran' => 'required|'
            
              
        ]);
        $daftartabungans = new Daftartabungan;
        $daftartabungans->nama = $request->nama;
        $daftartabungans->tempatlahir = $request->tempatlahir;
        $daftartabungans->tgllahir = $request->tgllahir;
        $daftartabungans->jk = $request->jk;
        $daftartabungans->tanda = $request->tanda;
        $daftartabungans->notanda = $request->notanda;
        $daftartabungans->alamatsesuai = $request->alamatsesuai;
        $daftartabungans->alamatsurat = $request->alamatsurat;
        $daftartabungans->email = $request->email;
        $daftartabungans->rencana = $request->rencana;
        $daftartabungans->pendamping = $request->pendamping;
        $daftartabungans->paket = $request->paket;
        $daftartabungans->jumlahwaktu = $request->jumlahwaktu;
        $daftartabungans->jumlahsetoran = $request->jumlahsetoran;
        $daftartabungans->setoran = $request->setoran;
        

        $daftartabungans->save();
        return redirect()->route('sukses.index');
    }
}



