<!DOCTYPE html>      

<style>
   
    #promotion h5{
        text-decoration-line: line-through;
        text-decoration-color: black;
    }
</style>
@extends('layouts.layout')
@section('content')


<!-- The page Starting the part comes after header -->
<form  action='/details/id={{$parfum->id}}' method="POST">
    @csrf


        <div   class="col-sm-8" id="example1">
          @if($parfum->promotion != 0)
          <img class="image2" style="top: 0px;" src="https://mmfinaction.files.wordpress.com/2016/06/promo.png" />
          @endif

<br>
   <div  class="col-sm-5"  >
    <img  src='{{$parfum->image}}' alt="parfums" width="250" height="400">
    
</div>

   <div  class="col-sm-7"  >
    <h4 style="color: black ; font-family: Georgia, 'Times New Roman', Times, serif">
         {{$parfum->name}} from  {{$parfum->marque}} - {{$parfum->type}} {{$parfum->size}} ml 
       
        </h4>
    <div class="row">

    <i class="fa fa-star" style="color: #467dc0"></i>
    <i class="fa fa-star" style="color: #467dc0" ></i>
    <i class="fa fa-star" style="color: #467dc0"></i>
    <i class="fa fa-star" style="color: #467dc0;"></i>
    <i class="fa fa-star" style="color: gray";></i> 
    <span>(14 opinions)</span>
    @if($parfum->prix2 != 0)

   <div class="row" >
       <h3  class="col-sm-2"><b id="price2">{{$parfum->prix2}}</b><b>DA</b></h3>
   </div> 
   <div class="row" > 
      <div id="promotion"> <h5 class="col-sm-2" ><span id="price1">{{$parfum->prix}}</span><span>DA</span></h5></div>
       <div class="col-sm-1" id="percentage" style="border: 2px solid; border-radius: 10px; border-color: #0072bc; width:45px;height:23px;padding-left:5px;margin-top: 5px;"> </div>

    </div>
    
    @else
    <h3><b>{{$parfum->prix}} DA</b></h3>
    
    @endif

    <hr style="width:90%;text-align:left;margin-left:0;border: solid 1px;border-color: rgb(226, 225, 225);">


</div>
<p> Or choose other size:</p>
<!-- Parfum bottle Sizes -->
<table class="col-sm-10 table">
    <tbody>

    @foreach($size as $s)
   


    <tr>
      <td style="text-align: center;padding-top: 30px;">
      </td>
        <td style="text-align: center; padding-left: 2%;"><a href="{{ action('parfumController@showDetails', $s->id) }}">
           <img  src='{{$s->image}}' alt="size" width="70px" height="50px">
          
          </a></td>
        <td style="text-align: center;padding-top: 20px;"><h4> {{$s->size}} ml</h4></td>
        @if($s->prix2 != 0)
        <td style="text-align: center;padding-top: 20px;"><h4 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">{{$s->prix2}} DA</h4>
        <h4 style="color: black;text-decoration-line: line-through;text-decoration-color: red;"> {{$s->prix}} DA</h4></td>
       
        @else
        <td style="text-align: center;padding-top: 20px;"><h4 style="color: black;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> {{$s->prix}} DA</h4></td>
        
        @endif
        
        

    </tr>
    
    
    @endforeach
</tbody>
</table>



<hr style="width:100%;text-align:left;margin-left:0 ;border-color:rgb(221, 217, 217)">

<div class="row " style="text-align: center;">
   

        <div class="qte col-sm-2">
        <div class="input-group" style="border: 2px solid;border-radius: 5px; border-color: #0072bc;">
            <span class="input-group-btn">
                <button type="button" id='cart' class="btn btn-default btn-number"
                 style=" height:34px ;background-color: rgb(247, 243, 243);"
                 disabled="disabled" data-type="minus" data-field="quant">
                    <span class="glyphicon glyphicon-minus"></span>
                </button>
            </span>
            <input type="text" name="quant" class="form-control input-number" value="1" min="1" max="10"  style="border:none;background-color: rgb(247, 243, 243);width: 40px;">
            <span class="input-group-btn">
                <button type="button"  id='cart' class="btn btn-default btn-number" style=" height:34px ; background-color: rgb(247, 243, 243);"
                data-type="plus" data-field="quant">
                    <span style="font-size:13px;"class="glyphicon glyphicon-plus"></span>
                </button>
            </span>
        </div>
      </div>
     
      <input type="hidden" name="customer" value="{{Auth::user()->email}}"/>
      <input type="hidden" name="size" value="{{$parfum->size}}"/>
      <input type="hidden" name="product" value="{{$parfum->name}}"/>
      <input type="hidden" name="image" value="{{$parfum->image}}"/>
      <input type="hidden" name="id" value="{{$parfum->id}}"/>
      @if($parfum->prix2 != 0)
      <input type="hidden" name="price" value="{{$parfum->prix2}}"/>

@else
<input type="hidden" name="price" value="{{$parfum->prix}}"/>

@endif

     
            <button id='cart' class="btn icon-btn" style="  background-color: #467dc0;" type="submit">   
                <span class="glyphicon btn-glyphicon glyphicon-shopping-cart img-circle text-warning"></span>Add to cart
            </button>
    
            </form>
</div>
<br><br>

</div>


<h4  class="col-sm-10" style="text-align: center;">
    More of this Marque
    <br><br>

</h4>
</br>
<div id="wrapper"  class="col-sm-4">
    <div class="carousel owl-carousel">
      
        @foreach($marque as $mrq)
      <div class="card">
    <a href="{{ action('parfumController@showDetails', $mrq->id) }}">    <img  src='{{$mrq->image}}' alt="marque" height="100%"></a>
    </div>
    @endforeach


</div>

</div>
        

</div>
<!-- CALCULATE THE PERCENTAGE OF THE PROMOTION -->
<script>
    var price1 = document.getElementById('price1');
    var price2 = document.getElementById('price2');
var percentage =parseInt((price2.innerHTML /price1.innerHTML -1)* 100);
document.getElementById('percentage').innerHTML =  '<h5 style="margin-top:3px; font-weight:bold">'+ percentage+'%'+'</h5>' ;


</script>
<!-- //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/ -->
    <script>
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    </script>
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
