@extends('layouts/gallerymain')
@section('subphotos')

<!-----------------------------------------SECTION-1------------------------------------------------------->



<!-----------------------------------------SECTION-1 Finished------------------------------------------------------->

 <!-----------------------------------------SECTION-2------------------------------------------------------->     
      <section class="section2"  style="background-color:white;">
        <div class="container">

          <div class="row">  
<!------------------------------------------->
@foreach($data as $item)
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


<!------------------------------------------->
     
<!------------------------------------------->
          </div>
        </div>
      </section>

<!----------------------------------------Section-2 Finished------------------------------------------>
@endsection