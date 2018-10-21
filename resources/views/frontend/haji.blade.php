@extends('layouts.frontend')
@section('content')
	<!--POPUP-->
	<section id="home">
      <div class="flexslider" id="home-slider">
        <ul class="slides">
				 <li>
			<img src="{{asset('assets/user/dataimage/slide_haji/61.jpg')}}" alt="Haji Nabatour" title="Haji Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Haji Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_haji/7.JPG')}}" alt="Haji Nabatour" title="Haji Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Haji Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_haji/8.JPG')}}" alt="Haji Nabatour" title="Haji Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Haji Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		  		 <li>
			<img src="{{asset('assets/user/dataimage/slide_haji/paralax_haji.jpg')}}" alt="Haji Nabatour" title="Haji Nabatour">
            <div class="slide-wrap">
              <div class="slide-content">
                <div class="container">
                  <h1>Haji Nabatour</h1>
                </div>
              </div>
            </div>
          </li> 
		          </ul>
      </div>
    </section>
    
				<section style="background-color:#702c8d;">
					@foreach($haji as $data)
	<div class="container" style="color:#fff;">
		<div class="title center">
			<br />
			<h2 style="color:#fff;">
				{{ $data->judul }}</h2>
		</div>
		<div class="container">
			{!!$data->isi!!} 
		</div>
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->harga!!} </p>
			</div>				
		</div>
		
		<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->fasilitas!!} </p>
			</div>				
		</div>
		<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->batal!!} </p>
			</div>				
		</div>
		<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->biayamasuk!!} </p>
			</div>				
		</div>


<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->biayatidak!!} </p>
			</div>				
		</div>

<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->syarat!!} </p>
			</div>				
		</div>

<br />
		<br />
		<div class="col-md-12">
			<div class="title">
				<br />
				<h3 style="color:#fff;">
					</h3>
					<p>{!!$data->daftar!!} </p>
			</div>				
		</div>
	</div>
	@endforeach
</section>
	  		
@endsection