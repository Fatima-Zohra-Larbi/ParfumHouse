
@extends('layouts.layout')
@section('content')


      
      

         @foreach($res as $r)
         <div   id="product" >
         <a href="{{ action('parfumController@showDetails', $r->id) }}" class="parent">  <img class="image1"  src='{{$r->image}}' alt="parfums" width="200" height="200">
            <img class="image2" src="img/promotion.png" />
        
        </a>

            <h4 style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> {{$r->name}}</h4>
            <h5 style="color: cornflowerblue;"> {{$r->type}}</h5>
            <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;text-decoration-line: line-through;text-decoration-color: red;"> {{$r->prix}} DA</h4>
            <h4 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> {{$r->prix2}} DA</h4>

         
   </div>  
@endforeach

@endsection
