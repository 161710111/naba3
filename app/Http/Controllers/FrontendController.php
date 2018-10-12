<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Kategori;
use App\Umroh;
use App\Kategorie;
use App\Haji;
use App\Kategoria;
use App\Wisata;
use App\Kategoriw;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.home',compact('home'));
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
        return view('frontend.galeri',compact('galeri'));
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
        return view('frontend.wisata', compact('wisata'));
    }

    public function nampil(Wisata $wisata)
    {
        // $berita = Berita::findOrFail($id);
        return view('frontend.detail_wisata',compact('wisata'));
    }

    
}
