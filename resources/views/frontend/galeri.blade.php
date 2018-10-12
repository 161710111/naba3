@extends('layouts.frontend')
@section('content')
	<!--POPUP-->
	    <iframe width="100%" height="600" src="https://youtube.com/embed/yAoLSRbwxL8" frameborder="0" allowfullscreen></iframe>
	
	<section class="white-bg">
    @php
    $galmanumrohs = App\galmanumroh::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Manasik Umrah</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galmanumrohs as $data)
						<div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:300px; max-width: 300px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
			          </div>
        </div>
        
		<br>
			<a class="small-link black-text" href="galeri_manasik_umrah.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>

    <section class="white-bg">
    @php
    $galmanhajis = App\galmanhaji::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Manasik Haji</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galmanhajis as $data)
            <div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:300px; max-width: 300px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
                </div>
        </div>
        
    <br>
      <a class="small-link black-text" href="galeri_manasik_umrah.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>
	

<section class="white-bg">
    @php
    $galumregulers = App\galumreguler::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Umrah Reguler</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galumregulers as $data)
            <div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:180px; max-width: 90px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
                </div>
        </div>
        
    <br>
      <a class="small-link black-text" href="galeri_manasik_umrah.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>    

	<section class="white-bg">
      <div class="container">
        <div class="title center">
          <h2>Galeri Umrah Plus</h2>
          <br>
        </div>
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
						<div class="card-post">
              <div>
                  <img src="{{asset('assets/user/dataimage/gallery/61.jpg')}}" alt="Galeri Umrah Plus Nabatour" title="Galeri Umrah Plus Nabatour">
              </div>
            </div>
			          </div>
        </div>
		<br>
			<a class="small-link black-text" href="galeri_umrah_plus.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>
	
	<section class="white-bg">
    @php
    $galerihajis = App\galerihaji::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Haji</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galerihajis as $data)
            <div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:300px; max-width: 300px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
                </div>
        </div>
        
    <br>
      <a class="small-link black-text" href="galeri_manasik_umrah.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>
	
	<section class="white-bg">
    @php
    $galeriwisatas = App\galeriwisata::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Wisata</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galeriwisatas as $data)
            <div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:500px; max-width: 500px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
                </div>
        </div>
        
    <br>
      <a class="small-link black-text" href="galeri_manasik_umrah.html"><p style="text-align:center;">Lihat Semua Foto <i class="hc-arrow-right"></i></p></a>
      </div>
    </section>
    @endsection