
<!DOCTYPE html>
<head>
   <link rel="stylesheet" href="sass/main.css">

</head>

<style>
  div h4{
     color: black;
align-self: center;
   }
   div#product {
    display: inline-block;
    text-align: center;
}
div#product img
{
   border-radius: 5%;
}


.mySlides {
   display: none;
   border-radius: 5px;

  }

</style>        
   @extends('layouts.layout')
@section('content')


      
      <div  class="col-sm-8" style="max-width:800px;">
         <div>
         <img class="mySlides" src="https://cache.desktopnexus.com/thumbseg/40/40165-bigthumbnail.jpg" style="width:100%" height="200px">
         <img class="mySlides" src="https://cdn.wallpaper.com/main/styles/fp_1540x944/s3/2016/08/f_prada.jpg" style="width:100%" height="200px">
         <img class="mySlides" src="https://image.freepik.com/vecteurs-libre/affiche-realiste-vecteur-3d-banniere-bouteille-parfum_33099-1160.jpg" style="width:100%" height="200px">
       </div> <br>

         @foreach($parfum as $parf)
         @if($parf->promotion != 0)
         <div   id="product" >
         <a href="{{ action('parfumController@showDetails', $parf->id) }}" class="parent" > 
             <img  src='{{$parf->image}}' alt="parfums" width="200" height="200">
             <img class="image2" src="img/promotion.png" />

            </a>
         
            <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{$parf->name}}</h4>
            <h5 style="color: cornflowerblue;"> {{$parf->type}}</h5>
            <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> {{$parf->prix}} DA</h4>
         
   </div> 
   @else
   <div   id="product" >
      <a href="{{ action('parfumController@showDetails', $parf->id) }}"  > 
          <img  src='{{$parf->image}}' alt="parfums" width="200" height="200">

         </a>
      
         <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{$parf->name}}</h4>
         <h5 style="color: cornflowerblue;"> {{$parf->type}}</h5>
         <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> {{$parf->prix}} DA</h4>
      
</div>  
   @endif
@endforeach
<div style="text-align: center;">{{$parfum->links()}}
</div>

</div>


<!-- SCRIPT FOR THE SLIDER -->
<script>
   var myIndex = 0;
   carousel();
   
   function carousel() {
     var i;
     var x = document.getElementsByClassName("mySlides");
     for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
     }
     myIndex++;
     if (myIndex > x.length) {myIndex = 1}    
     x[myIndex-1].style.display = "block";  
     setTimeout(carousel, 3000); // Change image every 3 seconds
   }
   </script>
@endsection