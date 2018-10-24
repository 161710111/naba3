<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

<!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}                             
           </form>
          <i class="nav-icon fa fa-sign-out text-danger"> Logout</i>

            </a>
          </ul>

    
  </nav>