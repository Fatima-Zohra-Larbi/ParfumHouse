<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<header></header>
<body>
<div>
    <table style="width:60%" class="table">
        <tbody>
            <thead>
                <tr>
                    <th>Product</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Delete </th>
                </tr>
            </thead>
    <tr>
<td><img src="https://storage-cube.quebecormedia.com/v1/cl_prod/canadian_living/70ad7d092c47f8fb2339845331b9caccaeb25169/G013138.png" alt="panier" width="80" height="80"/></td>
<td><p> Guerlain</p></td>
<td><p> 1500 DA</p></td>
<td><div class=" col-sm-4">
    <div class="input-group">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default btn-numberP"
             style=" height:34px ;border-top-left-radius: 20px;border-bottom-left-radius: 20px; border-right: 0;background-color: rgb(247, 243, 243);width: 30px;"
             disabled="disabled" data-type="minus" data-field="quant[1]">
                <span style="color:#0072bc;" class="glyphicon glyphicon-minus"></span>
            </button>
        </span>
        <input type="text" name="quant[5]" class="form-control input-number" value="1" min="1" max="10"  style="border-right: 0;border-left:0;background-color: rgb(247, 243, 243);width:55px">
        <span class="input-group-btn">
            <button type="button" class="btn btn-default btn-numberP" style=" height:34px ;border-top-right-radius: 20px;border-bottom-right-radius: 20px; border-left: 0; background-color: rgb(247, 243, 243);width: 30px;"
            data-type="plus" data-field="quant[1]">
                <span style="color:#0072bc;"class="glyphicon glyphicon-plus"></span>
            </button>
        </span>
    </div>
  </div></td>
<td>            <span class="glyphicon btn1-glyphicon glyphicon-trash img-circle text-warning"></span>
</td>


</tr>

<tr>
    <td><img src="https://storage-cube.quebecormedia.com/v1/cl_prod/canadian_living/70ad7d092c47f8fb2339845331b9caccaeb25169/G013138.png" alt="panier" width="80" height="80"/></td>
    <td><p> Guerlain</p></td>
    <td><p> 1500 DA</p></td>
    <td><p> 3</p></td>
    <td>            <span class="glyphicon btn1-glyphicon glyphicon-trash img-circle text-warning"></span>
        
    </td>
    </tr>
    <tr>
        <td><img src="https://storage-cube.quebecormedia.com/v1/cl_prod/canadian_living/70ad7d092c47f8fb2339845331b9caccaeb25169/G013138.png" alt="panier" width="80" height="80"/></td>
        <td><p> Guerlain</p></td>
        <td><p> 1500 DA</p></td>
        <td><p> 3</p></td>
        <td>            <span class="glyphicon btn1-glyphicon glyphicon-trash img-circle text-warning"></span>
            
        </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right;"><p> Total : 279000 DA </p>
            </td>
        </tr>
</tbody>
</table>
<div style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="width: 100px; background-color: royalblue; height: 30px;" > Order</button>
</div>
</div>

<script>
     
    $('.btn-numberP').click(function(e){
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
            $(".btn-numberP[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-numberP[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
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

</body>
