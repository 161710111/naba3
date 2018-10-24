<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                             

        <li class="nav-item">
          <a href="{{ route('testimoni.index') }}" class="nav-link">
              <i class="fa fa-child" style="font-size:25px;color:white"></i>
                   <p>
                      Testimoni
                        </p>
            </a>
        </li>   

        <li class="nav-item">
            <a href="{{ route('kategorig.index') }}" class="nav-link">
              <i class="fa fa-tasks" style="font-size:25px;color:white"></i>
              <p>
                Kategori Galeri
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('galeri.index') }}" class="nav-link">
              <i class="fa fa-image" style="font-size:25px;color:white"></i>
              <p>
                Galeri
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('promo.index') }}" class="nav-link">
              <i class="fa fa-podcast" style="font-size:25px;color:white"></i>
              <p>
                Promo
                </p>
            </a>
          </li>  
                       
                         <li class="nav-item">
                            <a href="{{ route('berita.index') }}" class="nav-link">
                                <i class="fa fa-commenting-o" style="font-size:25px;color:white"></i> Berita</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategori.index') }}" class="nav-link">
                                <i class="fa fa-tasks" style="font-size:25px;color:white"></i></i> Kategori Berita</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('faqs.index') }}" class="nav-link">
                                <i class="fa fa-asl-interpreting" style="font-size:25px;color:white"></i>  Faqs</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="{{ route('haji.index') }}" class="nav-link">
                                <i class="fa fa-group" style="font-size:25px;color:white"></i>  Haji</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('jadwalhaji.index') }}" class="nav-link">
                                <i class="fa fa-clipboard" style="font-size:25px;color:white"></i> Jadwal Haji</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategoria.index') }}" class="nav-link">
                                <i class="fa fa-tasks" style="font-size:25px;color:white"></i></i> Kategori Haji</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('daftarhaji.index') }}" class="nav-link">
                                <i class="fa fa-download" style="font-size:25px;color:white"></i> Daftar Haji</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('umroh.index') }}" class="nav-link">
                                <i class="fa fa-group" style="font-size:25px;color:white"></i> Umroh</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('jadwalumroh.index') }}" class="nav-link">
                                <i class="fa fa-clipboard" style="font-size:25px;color:white"></i> Jadwal Umroh</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategorie.index') }}" class="nav-link">
                                <i class="fa fa-tasks" style="font-size:25px;color:white"></i> Kategori Umroh</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('daftar.index') }}" class="nav-link">
                                <i class="fa fa-download" style="font-size:25px;color:white"></i> Daftar Umroh</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('wisata.index') }}" class="nav-link">
                                <i class="fa fa-group" style="font-size:25px;color:white"></i> Wisata</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('lokasi.index') }}" class="nav-link">
                               <i class="fa fa-map-marker" style="font-size:25px;color:white"></i> Lokasi Wisata</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('kategoriw.index') }}" class="nav-link">
                                <i class="fa fa-tasks" style="font-size:25px;color:white"></i> Kategori Wisata</a>
                        </li>                        
                        

                        <li class="nav-item">
                            <a href="{{ route('daftartabungan.index') }}" class="nav-link">
                                <i class="fa fa-download" style="font-size:25px;color:white"></i> Daftar Tabungan</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('tabungan.index') }}" class="nav-link">
                                <i class="fa fa-credit-card" style="font-size:25px;color:white"></i> Tabungan Umrah</a>
                        </li>
                        <li class=" nav-item">
                            <a href="{{ route('youtube.index') }}" class="nav-link">
                        <i class="fa fa-youtube-play" style="font-size:25px;color:white"></i> Youtube</a>
                        </li>
          
          
             
          </li> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>



<!-- <aside class="menu-sidebar d-none d-lg-block">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/admin/images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        
                       <li>
                            <a href="{{ route('galmanumroh.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Manasik Umrah</a>
                        </li> 

                        <li>
                            <a href="{{ route('galerihome.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Home</a>
                        </li> 

                        <li>
                            <a href="{{ route('galerihaji.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Haji</a>
                        </li> 

                        <li>
                            <a href="{{ route('galeriwisata.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri wisata</a>
                        </li>

                        <li>
                            <a href="{{ route('galmanhaji.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Manasik Haji</a>
                        </li>  

                        <li>
                            <a href="{{ route('galumplus.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Umrah Plus</a>
                        </li> 

                        <li>
                            <a href="{{ route('galumreguler.index') }}">
                                <i class="fa fa-image" style="font-size:25px;color:purple"></i>Galeri Umroh Reguler</a>
                        </li> 
                        

                        <li>
                            <a href="{{ route('testimoni.index') }}">
                                <i class="fa fa-child" style="font-size:25px;color:purple"></i>Testimoni</a>
                        </li>


                        

                        <li>
                            <a href="{{ route('promo.index') }}">
                                <i class="fa fa-podcast" style="font-size:25px;color:purple"></i></i>Promo</a>
                        </li>

                        <li>
                            <a href="{{ route('berita.index') }}">
                                <i class="fa fa-commenting-o" style="font-size:25px;color:purple"></i>Berita</a>
                        </li>

                        <li>
                            <a href="{{ route('kategori.index') }}">
                                <i class="fa fa-tasks" style="font-size:25px;color:purple"></i></i>Kategori Berita</a>
                        </li>

                        <li>
                            <a href="{{ route('faqs.index') }}">
                                <i class="fa fa-asl-interpreting" style="font-size:25px;color:purple"></i>Faqs</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('haji.index') }}">
                                <i class="fa fa-group" style="font-size:25px;color:purple"></i>Haji</a>
                        </li>

                        <li>
                            <a href="{{ route('jadwalhaji.index') }}">
                                <i class="fa fa-clipboard" style="font-size:25px;color:purple"></i>Jadwal Haji</a>
                        </li>

                        <li>
                            <a href="{{ route('kategoria.index') }}">
                                <i class="fa fa-tasks" style="font-size:25px;color:purple"></i></i>Kategori Haji</a>
                        </li>

                        <li>
                            <a href="{{ route('daftarhaji.index') }}">
                                <i class="fa fa-download" style="font-size:25px;color:purple"></i>Daftar Haji</a>
                        </li>

                        <li>
                            <a href="{{ route('umroh.index') }}">
                                <i class="fa fa-group" style="font-size:25px;color:purple"></i>Umroh</a>
                        </li>

                        <li>
                            <a href="{{ route('jadwalumroh.index') }}">
                                <i class="fa fa-clipboard" style="font-size:25px;color:purple"></i>Jadwal Umroh</a>
                        </li>

                        <li>
                            <a href="{{ route('kategorie.index') }}">
                                <i class="fa fa-tasks" style="font-size:25px;color:purple"></i>Kategori Umroh</a>
                        </li>

                        <li>
                            <a href="{{ route('daftar.index') }}">
                                <i class="fa fa-download" style="font-size:25px;color:purple"></i>Daftar Umroh</a>
                        </li>

                        <li>
                            <a href="{{ route('wisata.index') }}">
                                <i class="fa fa-group" style="font-size:25px;color:purple"></i>Wisata</a>
                        </li>

                        <li>
                            <a href="{{ route('lokasi.index') }}">
                               <i class="fa fa-map-marker" style="font-size:25px;color:purple"></i>Lokasi Wisata</a>
                        </li>

                        <li>
                            <a href="{{ route('kategoriw.index') }}">
                                <i class="fa fa-tasks" style="font-size:25px;color:purple"></i>Kategori Wisata</a>
                        </li>                        
                        

                        <li>
                            <a href="{{ route('daftartabungan.index') }}">
                                <i class="fa fa-download" style="font-size:25px;color:purple"></i>Daftar Tabungan</a>
                        </li>


                        <li>
                            <a href="{{ route('tabungan.index') }}">
                                <i class="fa fa-credit-card" style="font-size:25px;color:purple"></i>Tabungan Umrah</a>
                        </li>
                        <li>
                            <a href="{{ route('youtube.index') }}">
                        <i class="fa fa-youtube-play" style="font-size:25px;color:purple"></i>Youtube</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside> -->