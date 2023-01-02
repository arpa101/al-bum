@extends('layouts/albummainblade')
@section('albums')
<!----------------------------------Section1-------------------------------------------->
<section class="section1">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/home1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="animated bounceInRight" style="animation-delay:1s">PHOTOALBUM</h1>
          <p class="animated bounceInLeft " style="animation-delay:1s">Take photos and keep all the memories by creating you own a album</p>
          <form class="d-flex " action="{{ route('search') }}" method="get">
            <input class="search form-control me-2 animated bounceInRight" style="animation-delay:1s" type="search" placeholder="Search" aria-label="Search" id="search" name="search" >
            <button class="btn btn-primary animated bounceInRight" style="animation-delay:1s" type="submit"><img src="/svgimg/search.svg"></button>
          </form>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h1 class="animated bounceInRight" style="animation-delay:1s">PHOTO ALBUM</h1>
          <p class="animated bounceInLeft " style="animation-delay:1s">Take photos and keep all the memories by creating you own a album</p>
          <form class="d-flex " action="{{ route('search') }}" method="get">
            <input class="search form-control me-2 animated bounceInRight" style="animation-delay:1s" type="search" placeholder="Search" aria-label="Search" id="search" name="search" >
            <button class="btn btn-primary animated bounceInRight" style="animation-delay:1s" type="submit"><img src="/svgimg/search.svg"></button>
          </form>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
            <h1 class="animated bounceInRight" style="animation-delay:1s">PHOTO ALBUM</h1>
                <p class="animated bounceInLeft " style="animation-delay:1s">Take photos and keep all the memories by creating you own a album</p>
                <form class="d-flex " action="{{ route('search') }}" method="get">
                  <input class="search form-control me-2 animated bounceInRight" style="animation-delay:1s" type="search" placeholder="Search" aria-label="Search" id="search" name="search" >
                  <button class="btn btn-primary animated bounceInRight" style="animation-delay:1s" type="submit"><img src="/svgimg/search.svg"></button>
                </form>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </section>

<!----------------------------------Section1 Finished-------------------------------------------->

<!----------------------------------Section2-------------------------------------------->
<section class="section2">
  <h2>CATEGORY</h2>
  <div class="container d-flex">
    <header class="FindHeader ">
      <p class="Arrow">
        <span class="move"><img src="/svgimg/arrow-bar-left.svg"></span>
      </p>
    
    </header>
    <Section class="slider d-flex ">
    <!----------------------------------->
    @foreach($data as $item)
    <div class="Cate text-center">
         <div class="card border-0">
         <a class="item" href="{{route('subgallery.show',$item->id)}}">
         <img src="/images/{{$item['foldImage']}}" class="iimg">
         <h4>{{$item['folderName']}}</h4>
         </a>
         </div>
        </div>
        @endforeach
     
    <!----------------------------------------------->
    
<!----------------------------------------------->
</Section>
<header class="FindHeader ">
  <p class="Arrow">
    <span class="move"><img src="/svgimg/arrow-bar-right.svg"></span>
  </p>

</header>
  </div>
</section>

<!----------------------------------Section2 Finished-------------------------------------------->



<!---------------------------------------------------------------SECTION-3---------------------------->
  <section class="section3">
    <div class="container">
      <div class="row">
        <h3 style="margin-top:8%;">LATEST PHOTOS</h3>
<!------------------------------------------->
@foreach($posts as $item)
        <div class="col-md-4">
         <div class="card">
         
         <img src="/images/{{$item['fileImage']}}" class="iimg">
         </div>
        </div>
        @endforeach
<!------------------------------------------->
      
<!------------------------------------------->
      </div>
    </div>
  </section>

<!---------------------------------------------------------------SECTION-3 Finished---------------------------->
  <script src="/js/main.js"></script>
@endsection