<!DOCTYPE html>
<html lang="en">
<head>
		
    <title>Wisata Muslim Mesir Nabatour</title>
      @extends('layouts.frontend')
      @section('content')
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
					<p><a href="../../daftar_umrah_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Umrah</a></p>
					<p><a href="../../daftar_haji_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Haji</a></p>
					<p><a href="../../daftar_tabungan_nabatour.html" target="_BLANK"><i class="fa fa-file"></i> Form Pendaftaran Tabungan Umrah</a></p>
				</div>
			</div>
		</div>
	</div>
	<!--POPUP-->
		
    <section class="page-title parallax-bg">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/dataimage/tours/mesir.jpg')}}" alt="Tour Jawa Barat" title="Tour Jawa Barat">
          </div>
        </div>
        <div class="parallax-overlay"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h1>Wisata Muslim Mesir</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-md-8 col-md-offset-2">
		
          <article class="post-single b-0">
            <div class="post-body">
				<h2 style="margin: 0px 0px 10px; padding: 0px; font-weight: 400; line-height: 24px; font-family: Nexalight; font-size: 24px; color: rgb(0, 0, 0);">{{ $wisata->lokasi}}</h2>
<p font-size:="" open="" style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: NexaLight;">
	<strong style="margin: 0px; padding: 0px;">{{ $wisata->keterangan}}</p></strong>
			</div>
          </article>
		  
          <div class="post-share">
            <h5><a href="../tours.html">Wisata Lain</a></h5>
          </div>
        </div>
      </div>
    </section>
     @endsection
	 