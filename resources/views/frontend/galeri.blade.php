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

    </section>
	
<section class="white-bg">
      <div class="container">

        <div class="title center">
          <h2>Galeri Video</h2>
          <br>
        </div>

          <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
                    @foreach($yt as $data)
                <div class="card-post">
                      <div>
                <div class="fbq-item js-item-html fbq-html">
                  <div class="srizon-yt-container" id="srizonytscroller1">
                      <div class="yt-fp-outer outerwidthlarge4 outerwidthsmall2 rounding7">
                        <div class="yt-fp-padding padding5">
                          <div class="imgbox fpthumb shadownone" >
                        <a class="magpopif" href="https://www.youtube.com/watch?v={{$data->url}}">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$data->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </a>
                            <center>
                            <div>{{$data->title}}</div>
                            </center>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       @endforeach  
                      </div>
                    </div>
                    <div style="clear:both;"></div>
                  </div>
                </div>
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
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:300px; max-width: 300px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
                </div>
        </div>
        
    <br>

    </section>    

	<section class="white-bg">
    @php
    $galumplus = App\galumplus::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri Umrah Plus</h2>
          <br>
        </div>
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galumplus as $data)
						<div class="card-post">
              <div>
                  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:300px; max-width: 300px; margin-top: 6px;">
              </div>
            </div>
            @endforeach
			          </div>
        </div>
		<br>

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

    </section>
    @endsection