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
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Category List</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
  
      <div class="card">
          <div class="card-header">
            <h3 class="card-title">Categories</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-sm">
              <thead>
                <thead>
                  <tr>
                    <th style="width: 10px">ID</th>
                    <th>Title</th>
                    <th>Cover Picture</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th style="width: 40px; text-align: center;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
              <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['folderName']}}</td>
                <td>
                  <img src="images/{{$item['foldImage']}}" style="width:150px;">
                </td>
                <td>{{$item['created_at']}}</td>
                <td>{{$item['updated_at']}}</td>
                <td><div style="width: 175px;">
                
                    <button type="button" class="btn btn-sm btn-warning">Update</button>
                    <button type="button" class="btn btn-sm btn-danger">Delete</button>
                  </div></td>
              </tr>
              </tbody>
              @endforeach
            </table>
          
          </div>
        
          <!-- /.card-body -->
        </div>
      
    </div>
  
  </div>
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
