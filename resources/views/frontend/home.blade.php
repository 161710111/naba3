@extends('layouts.frontend')
@section('content')
 <!-- End Navigation Bar-->
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:700px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('slide/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:700px;overflow:hidden;"> 
						<div>
                <a href="#" data-toggle="modal" data-target="#slider1"><img data-u="image" src="{{asset('assets/user/dataimage/slide/Banner 1-01.jpg')}}" alt="Umrah Reguler" title="Umrah Reguler"/></a>
                <!--<div data-u="caption" data-t="1" style="position:absolute;top:153px;left:163px;width:500px;height:100px;z-index:20;"><h2 style="color:white">Menyempurnakan Ibadah</h2></div>-->
            </div>
           			<div>
                <a href="#" data-toggle="modal" data-target="#slider1"><img data-u="image" src="{{asset('assets/user/dataimage/slide/Banner 1-02.jpg')}}" alt="Umrah Plus Turki & Dubai" title="Umrah Plus Turki & Dubai"/></a>
                <!--<div data-u="caption" data-t="1" style="position:absolute;top:153px;left:163px;width:500px;height:100px;z-index:20;"><h2 style="color:white">Menyempurnakan Ibadah</h2></div>-->
            </div>
           			<div>
                <a href="#" data-toggle="modal" data-target="#slider1"><img data-u="image" src="{{asset('assets/user/dataimage/slide/Banner 1-03.jpg')}}" alt="Tabungan Umrah" title="Tabungan Umrah"/></a>
                <!--<div data-u="caption" data-t="1" style="position:absolute;top:153px;left:163px;width:500px;height:100px;z-index:20;"><h2 style="color:white">Menyempurnakan Ibadah</h2></div>-->
            </div>
           			<div>
                <a href="#" data-toggle="modal" data-target="#slider1"><img data-u="image" src="{{asset('assets/user/dataimage/slide/Banner 1-04.jpg')}}" alt="Ibadah Haji" title="Ibadah Haji"/></a>
                <!--<div data-u="caption" data-t="1" style="position:absolute;top:153px;left:163px;width:500px;height:100px;z-index:20;"><h2 style="color:white">Menyempurnakan Ibadah</h2></div>-->
            </div>
                   </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <section>
      <div class="container">
        <div class="col-sm-4">
          <div class="icon-box">
            <a href="menu_umrah.html"><div class="ib-icon"><img src="{{asset('assets/user/images/kabah.png')}}" width="50%" alt="Paket-Umrah-nabatour" title="Paket-Umrah-nabatour">
            </div></a>
            <div class="ib-content">
              <a href="menu_umrah.html"><h4>Paket Umrah</h4></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="icon-box">
            <a href="menu_haji.html"><div class="ib-icon"><img src="{{asset('assets/user/images/madina.png')}}" width="50%" alt="Paket-Haji-nabatour" title="Paket-Haji-nabatour">
            </div></a>
            <div class="ib-content">
               <a href="menu_haji.html"><h4>KBIH</h4></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="icon-box"> 
            <a href="wisata_nabatour.html"><div class="ib-icon"><i class="fa fa-map"></i>
            </div></a>
            <div class="ib-content">
              <a href="wisata_nabatour.html" data-toggle="modal" data-target="#myModal"><h4>Wisata Muslim</h4></a>
            </div>
          </div>
        </div>
      </div>
    </section>
	<!--POPUP SLIDER-->
	<div id="slider1" class="modal fade" role="dialog" style="margin-top:15%;">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content" style="text-align:center;">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><a href="menu_umrah.html"><i class="fa fa-cube"></i> Paket Umrah</a></p>
					<p><a href="menu_haji.html"><i class="fa fa-cube"></i> KBIH</a></p>
					<p><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-file"></i> Form Pendaftaran</a></p>
				</div>
			</div>
		</div>
	</div>
	<!--POPUP SLIDER-->
	
	<!--POPUP-->

	<!--POPUP-->
	<section class="grey-bg">
      <div class="container">
        <div class="col-sm-12">
          <div class="row">
            <div class="title center">
              <h2>Tentang Kami</h2>
            </div> 
            <div class="dylan-tabs mt-50 mb-50">
              <div class="tab-content text-center">
                  <div class="wpb_wrapper">
				  					<p>                                                                          NABATOUR adalah biro perjalanan Haji dan Umroh yang memfokuskan diri sebagai biro perjalanan yang bisa menjadi sahabat perjalanan ibadah anda.
<br>
Selain menyediakan paket umroh dan tour muslim sebagai bentuk layanan yang tersedia, NABATOUR juga  menghadirkan pembimbing-pembimbing ibadah bekerjasama dengan KBIH Assalaam, yang ahli dan mendalami bidang Fiqih Islam, terutama untuk masalah ibadah umroh dan haji. Kami berusaha memberikan bimbingan sejak sebelum berangkat, pada saat pelaksanan dan pasca ibadah haji dan umroh, sebagai bentuk tanggung jawab moral kami, bahwa ibadah yang Anda jalani telah sesuai dengan petunjuk Allah  dan Sunah Nabi Muhammad SAW.                                                                                             </p></p>
										<br>
					<a class="small-link black-text" href="tentangkami.html"><span>Selengkapnya</span><i class="hc-arrow-right"></i></a>
				  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section class="white-bg">
    @php
    $galerihomes = App\galerihome::all();
    @endphp
      <div class="container">
        <div class="title center">
          <h2>Galeri</h2>
          <br>
        </div>
        
        <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
            @foreach($galerihomes as $data)
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

    <section class="grey-bg">
      <div class="container">
        <div class="col-sm-12">
          <div class="row">
            <div class="title center">
              <h2>Instagram Feed</h2>
            </div> 
            <div class="dylan-tabs mt-50 mb-50">
              <div class="tab-content text-center">
                  <div class="wpb_wrapper">
            <iframe src="https://snapwidget.com/embed/398168" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:125px"></iframe>
          </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
	 <section class="parallax-bg">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/images/naba2.jpg')}}" alt="Nabatour" title="Nabatour">
          </div>
        </div>
        <div class="parallax-overlay extra-dark"></div>
      </div>
      @php
    $testimonis = App\testimoni::all();
    @endphp
      <div class="container">
        <div class="col-sm-12 col-md-offset-2 col-md-8">
          <div class="title center">
            <h2>Testimonial</h2>
          </div>
          <div class="flexslider nav-outside" id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true}">
            
            <ul class="slides">
              @foreach($testimonis as $data)
			              <li>
                <blockquote>
				  <img src="{{ asset('assets/admin/images/icon/'.$data->logo )}}" style="max-height:90px; max-width: 90px; margin-top: 6px;">
                  <p class="serif" style="font-size:15px;">{!!$data->keterangan!!}</p>
                  <footer>{{$data->nama}}</footer>
                </blockquote>
              </li>
			               @endforeach
			             </ul>
                   
          </div>
        </div>
      </div>
    </section>

    <section class="grey-bg">
      @php
      $beritas = App\berita::all();
      @endphp
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                        <div class="col-md-4">
              <article class="card-post">
                @foreach($berita as $data)
                <div class="post-media masonry-media">
                  <img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:400px; max-width: 400px; margin-top: 6px;">
                </div>
                <div class="post-body">
                <p style="color:black;"><b>{{ $data->judul }}</b></p>
                  <p>
                    <p><p style="box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: rgb(122, 122, 122); font-size: 17px;">
                        {!!$data->isi!!}</p>
          </p>
                  <div class="post-info"><a class="small-link black-text" href="/detailberita/{{$data->slug}}"><span>Selengkapnya</span><i class="hc-arrow-right"></i></a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
                      </div>
        <p style="text-align:right;"></p>
        </div>
      </div>
    </section>
@endsection