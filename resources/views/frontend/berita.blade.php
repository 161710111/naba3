@extends('layouts.frontend')
@section('content')
<section class="page-title parallax-bg parallax-bg-text-dark">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/images/naba2.jpg')}}" alt="Berita Naba Tour" title="Berita Naba Tour">
          </div>
        </div>
        <div class="parallax-overlay light"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h2 style="color:white;">Berita</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="section-scrolling"><a id="scroll-section" href="#"><i class="hc-angle-down"></i></a>
      </div>
    </section>
    <section class="grey-bg">
      @php
      $beritas = App\berita::all();
      @endphp
      <div class="container">
        <div class="row">
          <div class="col-md-12">
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