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


/* CSS OF ADD QUANTITY INPUT */
.qte{
width: 150px;
  }

   .btn-number:focus{
outline: none; 
border: 0;
border-color: brown;
 }
</style>
@extends('layouts.layout')
@section('content')


        <div   class="col-sm-8" id="example1">
          @if($parfum->promotion !=0)
          <img class="image2" style="top: 0px;" src="https://mmfinaction.files.wordpress.com/2016/06/promo.png" />
          @endif

<br>
   <div  class="col-sm-5"  >
    <img  src='{{$parfum->image}}' alt="parfums" width="250" height="400">
    
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
      
        <td style="text-align: center; padding-left: 2%;"><a href="{{ action('parfumController@showDetails', $s->id) }}">
           <img  src='{{$s->image}}' alt="size" width="70px" height="50px">
          
          </a></td>
        <td style="text-align: center;  padding-left: 8%;padding-top: 20px;"><h4> {{$s->size}} ml</h4></td>
        @if($s->prix2 != 0)
        <td style="text-align: center;  padding-left: 7%;padding-top: 20px;"><h4 style="color: black;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;text-decoration-line: line-through;text-decoration-color: red;"> {{$s->prix}} DA</h4><h4>{{$s->prix2}} DA</h4></td>
        @else
        <td style="text-align: center;  padding-left: 7%;padding-top: 20px;"><h4 style="color: black;font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> {{$s->prix}} DA</h4></td>
        @endif
        <td style="text-align: center;  padding-left: 7%;padding-top: 20px; padding-right: 5px;"><a class="btn icon1-btn btn-info" href="#">
            <span class="glyphicon btn1-glyphicon glyphicon-shopping-cart img-circle text-warning"></span>
            </a>

        </td>

    </tr>
    
    @endforeach
</tbody>
</table>
       
<hr style="width:100%;text-align:left;margin-left:0 ;border-color:rgb(221, 217, 217)">

<div class="row ">
  @if($parfum->prix2 != 0)

    <div id="content" class="col-sm-4"> 
        <div class="box" style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"><p>{{$parfum->prix2}} DA</p>  </div>
      </div>
        @else
        <div id="content" class="col-sm-4"> 
          <div class="box" style="color: black; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">{{$parfum->prix}} DA </div>
        </div>
        @endif
        <div class="qte col-sm-4">
        <div class="input-group">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number"
                 style=" height:34px ;border-top-left-radius: 20px;border-bottom-left-radius: 20px; border-right: 0;background-color: rgb(247, 243, 243);width: 30px;"
                 disabled="disabled" data-type="minus" data-field="quant[1]">
                    <span style="color:#0072bc;" class="glyphicon glyphicon-minus"></span>
                </button>
            </span>
            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10"  style="border-right: 0;border-left:0;background-color: rgb(247, 243, 243);width:55px">
            <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number" style=" height:34px ;border-top-right-radius: 20px;border-bottom-right-radius: 20px; border-left: 0; background-color: rgb(247, 243, 243);width: 30px;"
                data-type="plus" data-field="quant[1]">
                    <span style="color:#0072bc;"class="glyphicon glyphicon-plus"></span>
                </button>
            </span>
        </div>
      </div>
        <a class="btn icon-btn btn-info " href="#">
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
<!-- SCRIPT FOR THE SLIDER "More...." -->
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
