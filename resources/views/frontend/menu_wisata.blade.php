<!DOCTYPE html>
<html lang="en">
<head>
    <title>PAKET WISATA NABA TOUR</title>
     @extends('layouts.frontend')
    @section('content')
  <!--POPUP-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="description" content="Nur Assalaam Buana (Naba) Tour & Travel adalah Biro Perjalanan Haji & Umrah dengan fasilitas one stop service. Naba Tour & Travel menyediakan bimbingan pra haji dan umrah, mendampingi Anda saat melakukan proses ibadah dan menjalin silaturahmi dalam ikatan keluarga besar Assalaam dalam berkegiatan sosial dan keagamaan." />
	
	<meta name="author" content="www.nabatour.com" />
	
	<meta name="keyword" content="Nur Assalaam Buana,Naba Tour & travel, travel bandung, travel haji & umrah, haji bandung, umrah bandung, tabungan umrah bandung" />
		
	<meta name="robots" content="all,index,follow">		
	
	<meta http-equiv="Reply-to" content="assalaamnabatour@gmail.com">
	
	<meta name="abstract" content="Kami adalah Biro Perjalanan Haji & Umrah dengan fasilitas one stop service.">	
	
	<meta name="mytopic" content="Tour & Travel bandung,travel haji, tour haji" />	
	
	<meta name="keyphrases" content="tour, travel, bandung" />	
	
	<meta name="revisit-after" content="3 days" />	
	
	<meta name="distribution" content="global"/>
	
	<meta name="classification" content="Bisnis, jasa, usaha, layanan,  bandung, tour, travel, haji, umrah, services">

    <link rel="shortcut icon" href="{{asset('assets/user/images/icon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/hody-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}">
	<link rel="stylesheet" href="fonts/font-awesome/{{asset('assets/user/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    
    <!-- Navigation Bar-->
    
    <!-- End Navigation Bar-->
    <!--POPUP-->
	<div id="myModal" class="modal fade" role="dialog" style="margin-top:15%;">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content" style="text-align:center;">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pilih Form</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><a href="daftar_umrah_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Umrah</a></p>
					<p><a href="daftar_haji_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Haji</a></p>
					<p><a href="daftar_tabungan_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Tabungan Umrah</a></p>
				</div>
			</div>
		</div>
	</div>
	<!--POPUP-->
	<section id="home">
      <div class="flexslider" id="home-slider">
        <ul class="slides">
					  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/banjarmasin.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/cina.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/malaysia.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/grandepiramidedegize.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/bali.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/thailand1.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/turki.jpg')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		  		  <li>
			<img src="{{asset('assets/user/dataimage/slide_tours/walisongo.png')}}" alt="Tours Nabatour" title="Tours Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Wisata Muslim </h1>
                </div>
              </div>
            </div>
          </li> 
		          </ul>
      </div>
    </section>
    
    <section class="white-bg">
      
      <div class="container">
        <div class="row">
          <div class="blog-grid-wrapper">
             
      <div class="col-md-12">
        <div class="title center">
          <h2 style="color:#702c8d;">
          <span style="font-size:32px;"></span></h2>
        </div>
        <p></p>
      </div>  
        


            <div class="grid-post">
              
              <article>
                
                <a href="index/tours_detail/1.html">
                  <div class="post-featured-image">
                    
                  <div class="grid-post-content">
                    <div class="centrize">
                      <div class="v-center">
                        <h4></h4>
            <h4></h4>
            <p class="grid-post-info"><span class="grid-post-author"><b></b></span>
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
						
		
      
          </div>
        </div>
      </div>
    </section>
     @endsection
