  
@extends('layouts.layout')
@section('content')


      
      

         @foreach($search as $result)
         @if($result->promotion != 0)
         <div   id="product" >
           <div class="parent">
         <a href="{{ action('parfumController@showDetails', $result->id)}}"> 
             <img  src='{{$result->image}}' alt="parfum" width="200" height="200" style="background-color: rgb(233, 231, 231);" ></a>
             <img class="image2" src="img/promotion.png" />
             @if(Auth::user())

             <img class="image3" src="img/addcart.png" onclick="addPanier('{{$result->name}}','{{Auth::user()->email}}','{{$result->prix2}}','{{$result->size}}','{{$result->image}}')" />
             @else
<a href="/login"><img class="image3" src="img/addcart.png"></a>
@endif
            </div>
          
         
          <table style="width: 100%;">
            <tr><td> <h5 style="color: rgb(109, 109, 109);"><b>{{$result->name}}</b> </h5></td>
             <td style="text-align:right;">
             @if(Auth::user())

              @foreach($fav as $f)
              @if($f->productId == $result->id)    
                  
                 <i style="color:#467dc0" id="dlt" class="fa fa-heart" onclick="deletefav('{{$f->id}}')"  ></i>
                 @break
             @elseif($loop->last)
             <img src="img/favorite.png" width="14" height="14" id="add"  onclick="addToFavourites('{{$result->name}}','{{Auth::user()->email}}','{{$result->prix2}}','{{$result->size}}','{{$result->image}}','{{$result->id}}')"  >
    
    @endif
    @endforeach
    @else
<a href="/login"><img src="img/favorite.png" width="14" height="14"></a>
@endif
      </a>
            </td>
          
          </tr>
            <tr><td><h5 ><b>{{$result->prix2}} DA</b> </h5></td></tr>
            </table>

         
   </div> &nbsp;&nbsp;&nbsp;
   @else
   <div   id="product">
     <div class="parent">
      <a href="{{ action('parfumController@showDetails', $result->id) }}"  > 
          <img  src='{{$result->image}}' alt="parfums" width="200" height="200" style="background-color:rgb(233, 231, 231);" > </a>
         @if(Auth::user())
          <img class="image3" src="img/addcart.png" onclick="addPanier('{{$result->name}}','{{Auth::user()->email}}','{{$result->prix}}','{{$result->size}}','{{$result->image}}')"/>
          @else
<a href="/login"><img class="image3" src="img/addcart.png"></a>
@endif 
        </div>
         <table style="width: 100%;">
            <tr><td> <h5 style="color: rgb(109, 109, 109);"><b>{{$result->name}}</b> </h5></td>
             <td style="text-align:right;">
             @if(Auth::user())

          @foreach($fav as $f)
          @if($f->productId == $result->id)    
              
             <i style="color:#467dc0" id="dlt" class="fa fa-heart" onclick="deletefav('{{$f->id}}')"  ></i>
             @break
         @elseif($loop->last)
             <img src="img/favorite.png" width="15" height="15" id="add"  onclick="addToFavourites('{{$result->name}}','{{Auth::user()->email}}','{{$result->prix}}','{{$result->size}}','{{$result->image}}','{{$result->id}}')"  >

@endif
@endforeach
@else
<a href="/login"><img src="img/favorite.png" width="15" height="15"></a>
@endif
            </td></tr>
            <tr><td><h5 ><b> {{$result->prix}} DA</b></h5></td></tr>
            </table>
      
</div>  &nbsp;&nbsp;&nbsp;
   @endif

@endforeach

<div style="margin-left:30% ;">{{$search->links('pagination')}}
</div>

</div>
<script>
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
         alert('Product deleted successfully');
         location.reload();
      },
      error: function (error) {
       console.log(error);

       alert('product not deleted');

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

       alert('data not saved');

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