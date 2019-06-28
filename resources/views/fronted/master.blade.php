<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="icon" href="{{ asset('data/logo.png') }}" type="image/png" >
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/AdminLTE.min.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
 <!-- jvectormap -->
 <link rel="stylesheet" href="{{ asset('dashboard/bower_components/jvectormap/jquery-jvectormap.css')}}">
   <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <script src="{{ asset("parsleyjs/js/parsley.min.js") }}" ></script>
   <script src="{{ asset("js/bootbox.min.js") }}" ></script>
   <script src="{{ asset("js/jquery.dataTables.min.js") }}" ></script>
   <script src="{{ asset("js/dataTables.bootstrap.min.js") }}" ></script>
  <link rel="stylesheet" href="{{ asset('dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">



<!-- javaScript -->
<!-- ========================================================================================================================================= -->
<!-- jQuery 3 -->
<script src="{{ asset('dashboard/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('dashboard/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- datepicker -->
<script src="{{ asset('dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{ asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset("js/bootbox.min.js") }}" ></script>
<script src="{{ asset("parsleyjs/js/parsley.min.js") }}" ></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--header-->
@include('fronted.header')
    <!-- Left side column. contains the logo and sidebar -->
@include('fronted.siderbar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    @include('fronted.flash_message')
      @yield('content')
    </div>
    <!-- /.content-wrapper -->

<!--    footer-->
  @include('fronted.footer')


</div>

</body>
</html>
