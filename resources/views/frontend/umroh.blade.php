<!DOCTYPE html>
<html lang="en">
<head>
	    <title>Umrah</title>
	    
@extends('layouts.frontend')
@section('content')
    <!-- End Navigation Bar-->
 <!--POPUP-->
	
	<!--POPUP-->
	<section id="home">
      <div class="flexslider" id="home-slider">
        <ul class="slides">
				  
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
         @foreach($umroh as $data)
  <div class="title center">
    <h2 style="color:#702c8d;">
      <span style="font-size:32px;">{{$data->judul}}</span></h2>
  </div>
  <div class="container">
    <p style="margin-left:21.3pt;">
      {!! $data->isi !!}</p>
  </div>
  @endforeach
</section>
    
<section>
	<div class="container">
		<div class="title center">
			<br />
			<h2 style="color:#702c8d;">
				Pricelist</h2>
		</div>
		<div class="row">
			<div class="col-sm-4">
		<img data-u="image" src="{{asset('assets/user/dataimage/slide/Paket Umroh-01.jpg')}}" title="Paket Gold Nabatour" width="100%" /></a></div>
			<div class="col-sm-4">
			<img data-u="image" src="{{asset('assets/user/dataimage/slide/Paket Umroh-02.jpg')}}" title="Paket Silver Nabatour" width="100%" /></a></div>
			<div class="col-sm-4">
			<img data-u="image" src="{{asset('assets/user/dataimage/slide/Paket Umroh-03.jpg')}}" title="Paket Bronze Nabatour" width="100%" /></a></div>
		</div>
	</div>
</section>
@endsection