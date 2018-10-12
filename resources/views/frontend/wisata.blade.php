@extends('layouts.frontend')
@section('content')

	<!--POPUP-->
	<section id="home">
      <div class="flexslider" id="home-slider">
        <ul class="slides">
					  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/banjarmasin.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/cina.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/malaysia.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/grandepiramidedegize.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/bali.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/thailand1.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/turki.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/walisongo.png')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		          </ul>
      </div>
    </section>
    
    <section class="white-bg">
      @foreach($wisata as $data)
      <div class="container">
        <div class="row">
          <div class="blog-grid-wrapper">
             
		  <div class="col-md-12">
        
				<div class="title center">
					<h2 style="color:#702c8d;">
					<span style="font-size:32px;">{{$data->judul}}</span></h2>
				</div>
				<p>{{ $data->isi}}</p>
        
		  </div>  
				


            <div class="grid-post">
              
              <article>
                
                <a href="/detailwisata/{{$data->slug}}">
                  <div class="post-featured-image">
                    <img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:900px; max-width: 400px; margin-top: 2px;">
                  </div>
                  <div class="grid-post-content">
                    <div class="centrize">
                      <div class="v-center">
                        <h4>{{ $data->lokasi }}</h4>
            <h4>{{ $data->harga }}</h4>
            <p class="grid-post-info"><span class="grid-post-author"><b>{{ $data->hotel }}</b></span>
                        </p>
                      </div>
                    </div>
                  </div>
                </a>
                
              </article>
              
            </div>
			
          </div>
        </div>
      </div>
      @endforeach
    </section>
    @endsection