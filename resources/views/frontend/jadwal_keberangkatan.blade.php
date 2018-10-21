<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jadwal Keberangkatan</title>
    @extends('layouts.frontend')
    @section('content')
    <!--POPUP-->
   
	<!--POPUP-->
	<section class="page-title parallax-bg">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/images/naba2.jpg')}}" alt="Tour Nabatour" title="Tour Nabatour">
          </div>
        </div>
        <div class="parallax-overlay"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center"> 
              <h1>Jadwal Umroh Nabatour</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
        <section class="grey-bg">
      <div class="container">
              @php
      $jadwalumrohs = App\Jadwalumroh::all();
      @endphp
        <div class="row">
          
            <div class="title center">
              <h2>JADWAL KEBERANGKATAN</h2>
            </div>
            <br>
            <br>

             @foreach($jadwalumrohs as $data)
                  <div class="col-md-4">
             
              <article class="card-post">
                <div class="post-media masonry-media">
                </div>
                <div class="post-body">
                  <div class="col-md-12">
                 <div class="title center">
              <h2>{{ $data->bulan }}</h2>
            </div>
            </div>
                  <p>
                    <p><p style="box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: rgb(122, 122, 122); font-size: 17px;">{!!$data->keterangan!!}</p>
          </p>
                  
                </div>
              </article>
             
            </div>
             @endforeach
                  
                      
        <p style="text-align:right;"></p>
        </div>
      </div>
    </section>
		  </div>
    </section>
    
    @endsection
