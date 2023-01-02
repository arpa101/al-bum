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
            <div class="Categ text-center">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Travell</button>
            </div>
          <!----------------------------------------------->
          <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Birds</button>
          </div>
        <!----------------------------------------------->
        <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">University</button>
        </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Birds</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Beach</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center ">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Office</button>
      </div>
      <!----------------------------------------------->
      
      <!----------------------------------->
      <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Travell</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
       <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Birds</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
       <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">University</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
       <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Birds</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
       <button class="btn btn-outline-primary my-2 my-sm-0 select" type="submit">Beach</button>
      </div>
      <!----------------------------------------------->
      <div class="Categ text-center">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">office</button>
      </div>
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


          
          <!-- Modal -->
          
         <!-- Modal -->

 <div  id="exampleModal" tabindex="-1" style="margin-left:30%;" >

  <div >

   <div >

  <div >

  <h5 style="margin-top:-2%;" >Update</h5>

 

  </div>
  
 
  
  <div class="modal-body">
    @foreach($file as $pro)
    <form method="POST" action="{{route('edit', $pro->id)}}">
    
      @csrf
      <label> Category</label>
      <select class="form-select" aria-label="Default select example" style="width:30%;" name="select">
        @foreach($item as $prod)
        <option selected>{{$prod['folderName']}}</option>
        @endforeach
        @foreach($data as $it)
        <option >{{$it['folderName']}}</option>
        @endforeach
      </select>
      <br>
      <label> Sub-Category</label>
      <select class="form-select" aria-label="Default select example"style="width:30%;" name="selectt">
        @foreach($itemm as $prod)
        <option selected>{{$prod['subfolderName']}}</option>
        @endforeach
        @foreach($data1 as $it1)
        <option >{{$it1['subfolderName']}}</option>
        @endforeach
      </select>
     @endforeach
  </div>
  
 
  
  <div >
    <button type="submit" class="btn btn-primary" style="margin-top:2%;">Save changes</button>
   </div>
  </form>
    </div>
  </div>
 </div>
             <!-----------------modal----------------->
   </div> 
</div>
</div>




</section>
<!--------------------------------------Section4 Finished---------------------------------->

<script src="/js/gmain.js"></script>

@endsection