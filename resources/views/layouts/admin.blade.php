<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NABATOUR</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
>

<div class="wrapper">

  <!-- Navbar -->
  @include('patrials.nav');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="image">
          <img src="{{ asset('assets/admin/images/icon/logo.png')}}"  style="width: 240px; height: 70px;">
        </div>

    <!-- Sidebar -->
    @include('patrials.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('patrials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js')}} charts -->
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- jvectormap -->
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs')}}.cloudflare.com/ajax/libs/moment.js')}}/2.10.2/moment.min.js"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script>

<script src="{{ asset('assets/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>

@yield('sj')

</body>
</html>