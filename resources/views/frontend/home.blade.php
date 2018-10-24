@extends('layouts.frontend')
@section('css')
<style type="text/css">
  * {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
    padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    display: none; /* Hide columns by default */
}

/* Clear floats after rows */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
    display: block;
}

/* Style the buttons */


/* Add a grey background color on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background color to the active button */
.btn.active {
  background-color: #666;
   color: white;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
   filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>
@endsection

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
            <a href="{{ route('menu_umroh') }}"><div class="ib-icon"><img src="{{asset('assets/user/images/kabah.png')}}" width="50%" alt="Paket-Umrah-nabatour" title="Paket-Umrah-nabatour">
            </div></a>
            <div class="ib-content">
              <a href="{{ route('menu_umroh') }}"><h4>Paket Umrah</h4></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="icon-box">
            <a href="{{ route('menu_haji') }}"><div class="ib-icon"><img src="{{asset('assets/user/images/madina.png')}}" width="50%" alt="Paket-Haji-nabatour" title="Paket-Haji-nabatour">
            </div></a>
            <div class="ib-content">
               <a href="{{ route('menu_haji') }}"><h4>KBIH</h4></a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="icon-box"> 
            <a href="{{ route('menu_wisata') }}"><div class="ib-icon"><i class="fa fa-map"></i>
            </div></a>
            <div class="ib-content">
              <a href="{{ route('menu_wisata') }}"><h4>Wisata Muslim</h4></a>
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
					<p><a href="{{ route('menu_umroh') }}"><i class="fa fa-cube"></i> Paket Umrah</a></p>
					<p><a href="{{ route('menu_haji') }}"><i class="fa fa-cube"></i> KBIH</a></p>
					
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
					<a class="small-link black-text" href="{{ route('profile') }}"><span>Selengkapnya</span><i class="hc-arrow-right"></i></a>
				  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	

    @php
$galeris = App\Galeri::all();
$kategorigs = App\Kategorig::all();
@endphp
<br>
<br>
     <div class="title center">
              <h2>GALERI</h2>
            </div>
            <br>
<div id="myBtnContainer">
  <button class="btn btn-primary active" onclick="filterSelection('all')"> Semua Foto</button>
  @foreach($kategorigs as $data)
  <button class="btn btn-primary" onclick="filterSelection('{{$data->id}}')"> {{$data->nama}}</button>
  @endforeach
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  @foreach($galeris as $data)
    <div class="column {{$data->Kategorig->id}}">
      <div class="content">
        <img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" alt="Mountains" style="width:100%; height:100%;">
      </div>
    </div>
  @endforeach
  
<!-- END GRID -->
</div> 

	
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
            <iframe src="https://snapwidget.com/embed/398168" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:300%; height:125px"></iframe>
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
            <div class="title center">
              <h2>Berita</h2>
            </div>
            @foreach($berita as $data)
                        <div class="col-md-4">
                          
              <article class="card-post">
                
                <div class="post-media masonry-media">
                  <img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="max-height:400px; max-width: 400px; margin-top: 6px;">
                </div>
                <div class="post-body">
                <p style="color:black;"><b>{{ $data->judul }}</b></p>
                  <p>
                    <p><p style="box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: rgb(122, 122, 122); font-size: 17px;">
                        {!! str_limit($data->isi,250) !!}</p>
                        
          </p>
                  <div class="post-info"><a class="small-link black-text" href="/detailberita/{{$data->slug}}"><span>Selengkapnya</span><i class="hc-arrow-right"></i></a>
                  </div>
                </div>
                
              </article>
              
            </div>
            @endforeach
                      </div>
        <p style="text-align:right;"></p>
        </div>
      </div>
    </section>
@endsection