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
	<!--POPUP-->
	    <iframe width="100%" height="600" src="https://youtube.com/embed/yAoLSRbwxL8" frameborder="0" allowfullscreen></iframe>
	
	@php
$galeris = App\Galeri::all();
$kategorigs = App\Kategorig::all();
@endphp
<br>
<br>
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

<br>
<br>
<br>

<section class="white-bg">
      <div class="container">

        <div class="title center">
          <h2>Galeri Video</h2>
          <br>
        </div>

          <div class="row">
          <div class="owl-carousel" data-options="{&quot;items&quot;: 3, &quot;margin&quot;: 50, &quot;autoplay&quot;: true, &quot;dots&quot;: true}"> 
                    @foreach($yt as $data)
                <div class="card-post">
                      <div>
                <div class="fbq-item js-item-html fbq-html">
                  <div class="srizon-yt-container" id="srizonytscroller1">
                      <div class="yt-fp-outer outerwidthlarge4 outerwidthsmall2 rounding7">
                        <div class="yt-fp-padding padding5">
                          <div class="imgbox fpthumb shadownone" >
                        <a class="magpopif" href="https://www.youtube.com/watch?v={{$data->url}}">
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$data->url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </a>
                            <center>
                            <div>{{$data->title}}</div>
                            </center>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                       @endforeach  
                      </div>
                    </div>
                    <div style="clear:both;"></div>
                  </div>
                </div>
              </div>
            </section>

    @endsection