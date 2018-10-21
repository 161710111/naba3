@extends('layouts.frontend')
@section('content')
	<!--POPUP-->
	    <iframe width="100%" height="600" src="https://youtube.com/embed/yAoLSRbwxL8" frameborder="0" allowfullscreen></iframe>
		<section id="testimonials" style="background-color:white; color:white; margin-top:-2%;">
	  <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/images/naba2.jpg')}}" alt="Testimonial Nabatour" title="Testimonial Nabatour">
          </div>
        </div>
        <div class="parallax-overlay extra-dark"></div>
      </div>
      @php
		$testimonis = App\testimoni::all();
		@endphp
      <div class="container" style="color:white;">
        <div class="title center">
          <h2 style="color:white;">Testimonial</h2>
		  <br>
        </div>
        <div class="nav-outside" id="testimonials-slider">
							  <div class="col-md-12" style="margin-bottom:5%;">
							  	@foreach($testimonis as $data)
              <blockquote>
			  <div class="col-md-2">
                <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:90px; max-width: 90px; margin-top: 6px;">
               </div>
				<div class="col-md-10">
				<p style="font-size:15px;">{!!$data->keterangan!!}</p>
                <footer style="font-size:15px; color:white;">{{$data->nama}}</footer>
				</div>
			  </blockquote>
        @endforeach
          </div>
         	
					   <div class="col-md-12" style="margin-bottom:5%;">
              
          </div>
        </div>
      </div>
	   
    </section>
@endsection