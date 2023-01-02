@extends('layouts/gallerymain')
@section('subphotos')

<!-----------------------------------------SECTION-1------------------------------------------------------->



<!-----------------------------------------SECTION-1 Finished------------------------------------------------------->

 <!-----------------------------------------SECTION-2------------------------------------------------------->     
      <section class="section2"  style="background-color:white;">
        <div class="container">

          <div class="row">  
<!------------------------------------------->


@if($posts->isNotEmpty())
    @foreach ($posts as $item)
    <div class="col-md-3">
      <div class="card ">
       <a class="item" href="{{route('showimages',$item->id)}}">
         
      <img src="/images/{{$item['fileImage']}}" class="iimg"  >
      <div class="card-img-overlay text-center mt-4">
       <div class="card-body text-light">
       <h1 class="text-center mt-4">{{$item['subfolderName']}}</h1>
       </div>
      </div>
     </a>
      </div>
     </div>
    @endforeach
@else 
<div class="row">  
    
        <h2 style="font-size:18px;color:grey;">No subcategory found</h2>
        <h2 style="font-size:22px;margin-top:6%;">Other subcategories</h2>
        @foreach ($post as $items)
        <div class="col-md-3"  style="margin-top:3%;">
          <div class="card ">
           <a class="item" href="{{route('showimages',$items->id)}}">
             
          <img src="/images/{{$items['fileImage']}}" class="iimg"  >
          <div class="card-img-overlay text-center mt-4">
           <div class="card-body text-light">
           <h1 class="text-center mt-4">{{$items['subfolderName']}}</h1>
           </div>
          </div>
         </a>
          </div>
         </div>
        @endforeach
    
</div>
@endif

<!------------------------------------------->
     
<!------------------------------------------->
          </div>
        </div>
      </section>

<!----------------------------------------Section-2 Finished------------------------------------------>
@endsection