@extends('layouts/gallerymain')
@section('photos')

<!--------------------------------------Section3---------------------------------->
<section class="section3 bg-light">
    <div class="container d-flex">
      <header class="FindHeader">
            <p class="Arrow">
              <span class="moved"><img src="/svgimg/arrow-bar-left.svg"></span>
            </p>
          </header>
          <Section class="slider d-flex ">
          <!----------------------------------->
          @foreach($dataa as $item)
            <div class="Categ text-center">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">{{$item['subfolderName']}}</button>
            </div>
            @endforeach
          <!----------------------------------------------->
         
      <!----------------------------------------------->
      </Section>
      <header class="FindHeader">
            <p class="Arrow">
              <span class="moved"><img src="/svgimg/arrow-bar-right.svg"></span>
            </p>
          </header>
    </div>
</section>
<!--------------------------------------Section3 Finished---------------------------------->

<!--------------------------------------Section4---------------------------------->
<section class="section4 bg-light">
    <div class="container">

        <div class="row">  
            <h3 class="text-center"></h3>
<!------------------------------------------->
        
<!------------------------------------------->

@foreach($data as $product)
@php $img = explode('|', $product->fileImage); @endphp
@foreach ($img as $imgg)
<div class="col-md-4">
  <div class="card">
 
 
    <img src="/images/{{$imgg}}" style="width:100%">
    <div class="card-img-overlay mt-4">

      <li class="nav-item dropdown">
            <a class="nav-link dropdown" href="#" id="navbarDropdown"  data-bs-toggle="dropdown" >
             <img src="/svgimg/three-dots-vertical.svg">
            </a>
           
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item"  data-bs-target="#exampleModal" href="{{ route('file.edit', $product->id)}}">Update</a></li>
             
              <li><a class="dropdown-item" class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('file.delete', $product->id)}}">Delete</a></li>
            </ul>

          </li>
         
    
          
          <!-- Modal -->
          
         <!-- Modal -->

 
             <!-----------------modal----------------->
   </div> 
</div>
</div>

@endforeach
@endforeach

{!! $data->links() !!}


</section>
<!--------------------------------------Section4 Finished---------------------------------->

<script src="/js/gmain.js"></script>

@endsection