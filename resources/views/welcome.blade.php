
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

  }

</style>        
   @extends('layout.layout')
@section('content')


      
      <div  class="col-sm-8" style="max-width:800px;">
         <div>
         <img class="mySlides" src="img/pub1.png" style="width:100%" height="200px">
         <img class="mySlides" src="img/pub2.png" style="width:100%" height="200px">
         <img class="mySlides" src="img/pub3.png" style="width:100%" height="200px">
       </div> <br>

         @foreach($parfum as $parf)
         <div   id="product" >
         <a href="{{ action('parfumController@showDetails', $parf->id) }}" >  <img  src='{{$parf->image}}' alt="parfums" width="200" height="200"></a>
         
            <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{$parf->name}}</h4>
            <h5 style="color: cornflowerblue;"> {{$parf->type}}</h5>
            <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> {{$parf->prix}} DA</h4>
         
   </div>  
@endforeach
</div>

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
     setTimeout(carousel, 2000); // Change image every 2 seconds
   }
   </script>
@endsection