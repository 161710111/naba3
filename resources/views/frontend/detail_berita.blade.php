@extends('layouts.frontend')
@section('content')  
    <section class="page-title parallax-bg">
      <div class="row-parallax-bg">
        <div class="parallax-wrapper">
          <div class="parallax-bg-element">
            <img src="{{asset('assets/user/dataimage/news/3.jpg')}}" alt="Jemaah Umrah Diperkirakan Akan Membludak Di 10 Hari Terakhir Ramadan" title="Jemaah Umrah Diperkirakan Akan Membludak Di 10 Hari Terakhir Ramadan">
          </div>
        </div>
        <div class="parallax-overlay"></div>
      </div>
      <div class="centrize">
        <div class="v-center">
          <div class="container">
            <div class="title center">
              <h3>{{$berita->judul}}</h3>
              <h5 class="single-post-info"><span class="post-date">{{$berita->created_at}}</span><span class="dot"></span></h5>
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
				<p style="box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.6; font-family: NexaLight; color: rgb(122, 122, 122); font-size: 17px;">{!!$berita->isi!!}</p>
			</div>
          </article>
          <div class="post-share">
            <h5><a href="../news.html">Berita Lain</a></h5>
          </div>
        </div>
      </div>
	  
	  <div class="container">
		   <!-- begin wwww.htmlcommentbox.com -->
			 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">HTML Comment Box</a> is loading comments...</div>
			 <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
			 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24yh8LESlrvtMhEM3mxmr6d0"+"&opts=16862&num=10&ts=1493348017831");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
			<!-- end www.htmlcommentbox.com -->
	  </div>
    </section>
    @endsection