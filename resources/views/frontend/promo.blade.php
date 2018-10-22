<!DOCTYPE html>
<html lang="en">
<head>
    <title>PROMO NABATOUR</title>
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
              <h1>Promo Nabatour</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
        <section>
          @php
          $promos = App\Promo::all();
          @endphp
  <div class="container">
    <div class="title center">
      <br />
      <h2 style="color:#702c8d;">
        Promo</h2>
    </div>
    
    <div class="row">
      @foreach($promos as $data)
      <div class="col-sm-4">
        
       <img src="{{ asset('assets/admin/images/icon/'.$data->foto )}}" style="height:230px; width: 550px; margin-top: 6px;">

     </div>
     @endforeach 
    </div> 
  </div>
</section>
    @endsection
