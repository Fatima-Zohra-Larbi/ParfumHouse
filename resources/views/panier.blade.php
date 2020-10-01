<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">

</head>
<style>
   
   
    td{
        top: 50%;   
transform: translateY(20%);
text-align: center;

    }
    #custom{
        background-color: rgb(243, 241, 241);
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        
    }
    #custom th{
        color: black;
        font-weight: bold;
        text-align: center;
    }
    #demo{
        font-size: 17px;
        text-align: left;
        font-family: fantasy;
    }
</style>

<br>
<body style=" margin-left: 350px;">
    <div   class="col-sm-8" id="example1" style="background-color: rgb(243, 241, 241);">
        <h2 style="font-family:serif ; font-weight: bold;margin-top: 0;">Shopping Cart</h2><br>
    <table style="width:100%" class="table" id="countit">
            <thead>
                <tr id="custom">
                    <th>Product</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Total</th>
                    <th> Delete </th>
                </tr>
            </thead>
            <tbody>
            @foreach($res as $s)

    <tr id="custom">
<td style="top: 0; transform: translateY(0);
"><img src="{{$s->image}}" alt="panier" width="80" height="80" /></td>
<td style="top: 10%;   
transform: translateY(10%); font-weight: bold;font-size: 16px;font-family:serif ;">
 {{$s->product}}
   <p style="color: grey; font-weight: normal;font-size: 14px;">{{$s->size}} ml</p> 
</td>
<td class="count-me"> {{$s->price}} </td>

<td>{{$s->quantite}}</td>
<td id="somme"></td>

<td><a href=" {{route('delete',[$s->id, Auth::user()->id])}} "> <span class="glyphicon  glyphicon-remove " style="color: grey;"></span>
</td></a>     


</tr>
<tr><td colspan="6"></td></tr>

@endforeach
    

        <tr>
         <td colspan="5" style="text-align: right; font-size: 16px;font-weight: bold;">Total :</td> 
           <td colspan="6"  id="demo">  
            </td>
        </tr>
        <tr>
            <td colspan="4" style="text-align: right;"><button style="width: 100px; background-color: darkgray; height: 30px; border: 0;border-radius: 10px;" > Print</button>
            </td>
            <td colspan="4" style="text-align: right;"><button style="width: 100px; background-color: #467dc0; height: 30px; border: 0;border-radius: 10px;" > Order</button>
            </td>
        </tr>
</tbody>
</table>
<div>
 <a href="/welcome"> <span class="glyphicon  glyphicon-arrow-left " style="color: black;"> Back to shop</span></a>   
</div>
</div>

<script language="javascript" type="text/javascript">
    var tds = document.getElementById('countit').getElementsByTagName('td');
    var sum = 0;
    for(var i = 0; i < tds.length; i ++) {
        if(tds[i].className == 'count-me') {
            sum += isNaN((tds[i].innerHTML)*(tds[i+1].innerHTML)) ? 0 : parseInt(tds[i].innerHTML*tds[i+1].innerHTML);
        }
    }
    document.getElementById('demo').innerHTML =   sum+' DA' ;
</script>
<script language="javascript" type="text/javascript">
    var tdx = document.getElementById('countit').getElementsByTagName('td');
    var prix = 0;
    for(var i = 0; i < tdx.length; i ++) {
        if(tdx[i].className == 'count-me') {
            prix += isNaN((tdx[i].innerHTML)*(tdx[i+1].innerHTML)) ? 0 : parseInt(tdx[i].innerHTML*tdx[i+1].innerHTML);
            document.getElementById('countit').getElementsByTagName('td')[i+2].innerHTML =   prix+' DA' ;
prix=0;
        }

    }
</script>
</body>
