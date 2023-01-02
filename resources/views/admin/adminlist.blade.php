{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Admin List</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Condensed Full Width Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-sm">
            <thead>
              <tr>
                <th style="width: 10px">ID</th>
                <th>Name</th>
                <th>Password</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                  #
                </td>
                <td><button class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                  #
                </td>
                <td><button class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td>
                  #
                </td>
                <td><button class="btn btn-danger">Delete</button></td>
              </tr>
              <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td>
                  #
                </td>
                <td><button class="btn btn-danger">Delete</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    
  </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html> --}}


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

  {{-- body content --}}
<div class="content-wrapper">
  <section class="content">
  <div class="card-body p-0">
    <table class="table table-sm">
      <thead>
        <tr>
          <th style="width: 10px">ID</th>
          <th>Name</th>
          <th>Password</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Update software</td>
          <td>
            #
          </td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Clean database</td>
          <td>
            #
          </td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Cron job running</td>
          <td>
            #
          </td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Fix and squish bugs</td>
          <td>
            #
          </td>
          <td><button class="btn btn-danger">Delete</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</div>
  


  
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
