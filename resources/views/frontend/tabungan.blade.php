<!DOCTYPE html>
<html lang="en">
<head>
	    <title>Tabungan Umroh</title>
	    
@extends('layouts.frontend')
@section('content')
    <!-- End Navigation Bar-->
 <!--POPUP-->
	
	<!--POPUP-->
	<section id="home">
      <div class="flexslider" id="home-slider">
        <ul class="slides">
				 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/paralax_umrah.jpg')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Umrah Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/2.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Umrah Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/3.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Umrah Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/4.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Umrah Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/h.png.jpeg')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Umrah Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		          </ul>
      </div>
    </section>
		 <section>
      @php
      $tabungans = App\tabungan::all();
      @endphp
  <div class="title center">
    <h2 style="color:#702c8d;">
      Tabungan Umrah</h2>
  </div>
  @foreach($tabungans as $data)
   <div class="container">
    <p>
      <i>{{ $data->keterangan }}&quot;</i></p>
    <br />
    <p>
      <b>keunggulannya Tabungan Umrah</b></p>
    <p>
      {{ $data->keunggulan }}</p>
    <br />
    <p>
      <b>Persyaratan</b></p>
    <ul>
      <li>
        {{ $data->syarat }}</li>
    </ul>
    <p>
      Ilustrasi tabungan*</p>
    <p>
      <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:60px; max-width: 60px; margin-top: 6px;"></p>
    <p style="font-size:10pt;">
      <i><b>*{{ $data->note }}</b></i></p>
  </div>
  @endforeach
</section> 
@endsection