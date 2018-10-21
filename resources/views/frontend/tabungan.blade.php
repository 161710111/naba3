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
                  <h1>Tabungan Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/2.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Tabungan Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/3.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Tabungan Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/4.JPG')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Tabungan Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_umrah/h.png.jpeg')}}" alt="Umrah Nabatour" title="Umrah Nabatour">
            
          </li> 
		          </ul>
      </div>
    </section>
    @php
      $tabungans = App\tabungan::all();
      @endphp
		 <section>
      @foreach($tabungans as $data)
      <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>{{ $data->judul }}</h1>
                </div>
              </div>
            </div>
  <div class="title center">
    <h2 style="color:#702c8d;">
      Tabungan Umrah</h2>
  </div>
  
   <div class="container">
    <p>
      <i>{!!$data->keterangan!!}&quot;</i></p>
    <br />
    <p>
      {!!$data->keunggulan!!}</p>
    <br />
    <p>
      {!!$data->syarat!!}</p>
      <br />
    <p>
      <b>Ilustrasi tabungan*</b></p>
    <p>
      <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:500px; max-width: 500px; margin-top: 6px;"></p>
    <p style="font-size:10pt;">
      *{!!$data->note!!}</p>
  </div>
  @endforeach
</section> 
@endsection