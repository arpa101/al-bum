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
        <h3 class="card-title">Add Admin</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form>
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
        </div>
        <!-- /.card-body -->
  
        <div class="card-footer">
          <button type="submit" class="btn btn-primary text-light">Submit</button>
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
 
