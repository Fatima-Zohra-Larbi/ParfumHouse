<!DOCTYPE html>
<style>
    #cart{
        border: none;
        outline: none;
        background-color: #467dc0;
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
           <div class="parent">
         <a href="{{ action('parfumController@showDetails', $parf->id)}}"> 
             <img  src='{{$parf->image}}' alt="parfum" width="200" height="200" style="background-color: rgb(233, 231, 231);" ></a>
             <img class="image2" src="img/promotion.png" />
             @if(Auth::user())

             <img class="image3" src="img/addcart.png" onclick="addPanier('{{$parf->name}}','{{Auth::user()->email}}','{{$parf->prix2}}','{{$parf->size}}','{{$parf->image}}')" />
@else
<a href="/login"><img class="image3" src="img/addcart.png" /></a>
@endif
            </div>
          
         
          <table style="width: 100%;">
            <tr><td> <h5 style="color: rgb(109, 109, 109);"><b>{{$parf->name}}</b> </h5></td>
             <td style="text-align:right;">
               @if(Auth::user())
              @foreach($fav as $f)
              @if($f->productId == $parf->id)    
                  
                 <i style="color:#467dc0" id="dlt" class="fa fa-heart" onclick="deletefav('{{$f->id}}')"  ></i>
                 @break
             @elseif($loop->last)
             <img src="img/favorite.png" width="14" height="14" id="add"  onclick="addToFavourites('{{$parf->name}}','{{Auth::user()->email}}','{{$parf->prix2}}','{{$parf->size}}','{{$parf->image}}','{{$parf->id}}')"  >
    
    @endif
    @endforeach
    @else
  <a href="/login">  <img src="img/favorite.png" width="14" height="14"></a>

    @endif
      </a>
            </td>
          
          </tr>
            <tr><td><h5 ><b>{{$parf->prix2}} DA</b> </h5></td></tr>
            </table>

         
   </div> &nbsp;&nbsp;&nbsp;
   @else
   <div   id="product">
     <div class="parent">
      <a href="{{ action('parfumController@showDetails', $parf->id) }}"  > 
          <img  src='{{$parf->image}}' alt="parfums" width="200" height="200" style="background-color:rgb(233, 231, 231);" > </a>
          @if(Auth::user())

          <img class="image3" src="img/addcart.png" onclick="addPanier('{{$parf->name}}','{{Auth::user()->email}}','{{$parf->prix}}','{{$parf->size}}','{{$parf->image}}')"/>
@else
<a href="/login"><img class="image3" src="img/addcart.png"></a>
@endif
        
        </div>
         <table style="width: 100%;">
            <tr><td> <h5 style="color: rgb(109, 109, 109);"><b>{{$parf->name}}</b> </h5></td>
             <td style="text-align:right;">
@if(Auth::user())

@foreach($fav as $f)
          @if($f->productId == $parf->id)    
              
             <i style="color:#467dc0" id="dlt" class="fa fa-heart" onclick="deletefav('{{$f->id}}')"  ></i>
             @break
         @elseif($loop->last)
             <img src="img/favorite.png" width="15" height="15" id="add"  onclick="addToFavourites('{{$parf->name}}','{{Auth::user()->email}}','{{$parf->prix}}','{{$parf->size}}','{{$parf->image}}','{{$parf->id}}')"  >

@endif
@endforeach
@else
<a href="/login"><img src="img/favorite.png" width="15" height="15"></a>
@endif
            </td></tr>
            <tr><td><h5 ><b> {{$parf->prix}} DA</b></h5></td></tr>
            </table>
      
</div>  &nbsp;&nbsp;&nbsp;
   @endif

@endforeach

<div style="margin-left:30% ;">{{$parfum->links('pagination')}}
</div>

</div>

<script type="text/javascript">
function deletefav(id) {

  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    $.ajax({
        type: 'post',
        url: '/deletefav',
        data: {
            'id': id,

        },
        success: function (response) {
         console.log(response);
           location.reload();
        },
        error: function (error) {
         console.log(error);


            // handle error
        }
    });

}

function addToFavourites(product,customer,price,size,image,id) {
    var product = product;
    var customer = customer;
    var price = price;
    var size = size;
    var image = image;
    var id = id;   

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        type: 'post',
        url: '/addfav',
        data: {
            'product': product,
            'customer': customer,
            'price': price,
            'size': size,
            'image': image,
            'id': id,

        },
        success: function (response) {
         console.log(response);

           location.reload();
           
        },
        error: function (error) {
         console.log(error);


        }
    });

  
}
    
function addPanier(product,customer,price,size,image) {
    var product = product;
    var customer = customer;
    var price = price;
    var size = size;
    var image = image;
  
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        type: 'post',
        url: '/addorder',
        data: {
            'product': product,
            'customer': customer,
            'price': price,
            'size': size,
            'image': image,

        },
        success: function (response) {
         console.log(response);

           location.reload();
           
        },
        error: function (error) {
         console.log(error);

         alert('data not saved');

        }
    });

  
}
    

 

                  </script>


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