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
@extends('layouts.layout')
@section('content')


      
      

         @foreach($search as $result)
         <div   id="product" >
         <a href="{{ action('parfumController@showDetails', $result->id) }}" >  <img  src='{{$result->image}}' alt="parfums" width="200" height="200"></a>
         
            <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{$result->name}}</h4>
            <h5 style="color: cornflowerblue;"> {{$result->type}}</h5>
            <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> {{$result->prix}} DA</h4>
         
   </div>  
@endforeach

@endsection
