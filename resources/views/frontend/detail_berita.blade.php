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
          
        </div>
        <br>
        <br>
        <br>
        <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://umrohku.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
      </div>
	  
	  
    </section>
    @endsection