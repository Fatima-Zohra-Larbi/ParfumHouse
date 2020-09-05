<style>
    /***************** Css of add to cart***************/
    .btn-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.btn.icon-btn {
    padding: 1px 15px 3px 2px;
    border-radius:50px;
}
    #example1 {
overflow: hidden;
padding: 20px;

box-shadow: 0px 0px 10px #cac9e7;
}
    #content .box
{
    position: relative;
    border: 1px solid #262626;
    min-height: 35px;
    width: 90px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
    color: #262626;
    text-transform: uppercase;
    font-size: 18px;
    transition: 0.5s;
    background-color: white;
}
#content .box:before
{
    content: '';
    position: absolute;
    width: 10px;
    height: 10px;
    background: white;
    border: 1px solid #262626;
    box-sizing: border-box;
    border-left-color: transparent;
    border-top-color: transparent;
    transition: 0.5s;
}
#content .box:nth-child(1):before
{
    right: -5px;
    transform: rotate(315deg);
}

/******************** CSS OF the slider carousel************/

 
#wrapper{
  width: 100%;
  border-radius: 2px;
}
.carousel{
  max-width: 500px;
  margin: auto;
  padding: 0 30px;
}
.carousel .card{
    height: 20%;
  border-radius: 10px;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
}

.owl-dots{
  text-align: center;
  margin-top: 40px;
}
.owl-dot{
  height: 15px;
  width: 45px;
  margin: 0 5px;
  outline: none;
  border-radius: 14px;
  border: 2px solid #0072bc!important;
  box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.owl-dot.active,
.owl-dot:hover{
  background: #0072bc!important;
}
/********************** Css OF Parfum Sizes  ***********/
 #bottles{
     border: 1px solid;

 }
 /********************* CSS of Button sizes*****************/
 .btn1-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.btn.icon1-btn {
    padding: 1px 15px 3px 2px;
    border-radius:50px;
    width: 36px;
}
</style>
@extends('layout.layout')
@section('content')

        <div   class="col-sm-8" id="example1">
<div  class="col-sm-5"  >
           <img  src='{{$parfum->image}}' alt="parfums" width="350" height="400">
   </div>  
   <div  class="col-sm-7"  >
    <h2><span style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> {{$parfum->name}}</span> from <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span style="color: black; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif"> {{$parfum->marque}} </span></h2>
    <div class="row">

    <i class="fa fa-star" style="color: goldenrod;"></i>
    <i class="fa fa-star" style="color: goldenrod;" ></i>
    <i class="fa fa-star" style="color: goldenrod;"></i>
    <i class="fa fa-star" style="color: goldenrod;"></i>
    <i class="fa fa-star"></i>
    <hr style="width:70%;text-align:left;margin-left:0;border: solid 1px;border-color: black;">


</div>
<p>{{$parfum->type}}</p><br>
<p>Bottle Size :{{$parfum->size}} ml</p><br>
<p>Quantity available :{{$parfum->quantite}} boites</p><br>
<p>Bottle sizes:</p>
<!-- Parfum bottle Sizes -->
<table class="col-sm-10 table">
    <tbody>

    @foreach($size as $s)

    <tr>
        <td style="text-align: center; padding-left: 2%;"> <img  src='{{$s->image}}' alt="size" width="70px" height="50px"></td>
        <td style="text-align: center;  padding-left: 8%;padding-top: 20px;"><h4> {{$s->size}} ml</h4></td>
        <td style="text-align: center;  padding-left: 7%;padding-top: 20px;"><h4 style="color: black;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> {{$s->prix}} DA</h4></td>
        <td style="text-align: center;  padding-left: 7%;padding-top: 20px; padding-right: 5px;"><a class="btn icon1-btn btn-info" href="#">
            <span class="glyphicon btn1-glyphicon glyphicon-shopping-cart img-circle text-warning"></span>
            Add to cart
            </a>

        </td>

    </tr>
    
    @endforeach
</tbody>
</table>
       
<hr style="width:100%;text-align:left;margin-left:0 ;border-color:rgb(221, 217, 217)">

<div class="row">
    <div id="content" class="col-sm-4"> 

        <div class="box" style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">{{$parfum->prix}} DA </div>
        

        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn icon-btn btn-info" href="#">
            <span class="glyphicon btn-glyphicon glyphicon-shopping-cart img-circle text-warning"></span>
            Add to cart
            </a>
</div>
<br><br>

</div>


<h4  class="col-sm-10" style="text-align: center;">
    More of this Marque
    <br><br>

</h4>
</br>
<div id="wrapper"  class="col-sm-6">
    <div class="carousel owl-carousel">
      
        @foreach($marque as $mrq)
      <div class="card">
        <img  src='{{$mrq->image}}' alt="marque" height="100%">
    </div>
    @endforeach


</div>

</div>
        

</div>
 
    

 <script>
      $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0:{
            items:1,
            nav: false
          },
          600:{
            items:2,
            nav: false
          },
          1000:{
            items:3,
            nav: false
          }
        }
      });
    </script> 

  

@endsection