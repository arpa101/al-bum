<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>

  {{-- css links --}}
  @include('frontEnd.csslinks')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('frontEnd.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{-- sidebar include here --}}

  @include('frontEnd.sidebar')
  

  @include('frontEnd.content')

  <!-- /.content-wrapper -->
  
  {{-- Footer will be here --}}
  @include('frontEnd.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

{{-- javaScript Plugins --}}
@include('frontEnd.jsplugins')

</body>
</html>
