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
        <h3 class="card-title">New Sub Category Info</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
     
      <form action="{{route("subfolder.create")}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card-body">
          <div class="form-group">
            
              <label>Select Category</label>
              <select class="form-control select2" style="width: 100%;" name="select">
                
                @foreach($data as $item)
               <option>{{$item['folderName']}}</option>
               @endforeach
              </select>
             
            </div>
       
            <label for="exampleInputTitle">Sub Title</label>
            <input type="text" placeholder="" class="form-control" name="name" id="">
          </div>
  
          <div class="form-group" style="margin-left:2%;">
            <label> Cover Image</label>
            <input type="file"  class="form-control" name="fileName" id="">
              
  
          </div>
        </div>
        
        <!-- /.card-body -->
  
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
   
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
