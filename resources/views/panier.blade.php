<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<style>
    th{
        color: darkgray;
        font-weight: 400;

    }
</style>
<header></header>
<body>
<div>
    <h2>Shopping Cart</h2>
    <table style="width:60%" class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th> Name </th>
                    <th> Price </th>
                    <th> Quantity </th>
                    <th> Delete </th>
                </tr>
            </thead>
            <tbody>

    <tr>
<td><img src="https://storage-cube.quebecormedia.com/v1/cl_prod/canadian_living/70ad7d092c47f8fb2339845331b9caccaeb25169/G013138.png" alt="panier" width="80" height="80"/></td>
<td rowspan="2"><p> Guerlain</p>
    <p>200 ml</p>
</td>
<td><p> 1500 DA</p></td>

<td>5</td>
<td>            <span class="glyphicon btn1-glyphicon glyphicon-trash img-circle text-warning"></span>
</td>


</tr>


    

        <tr>
            <td colspan="4" style="text-align: right;"><h4> Total : 279000 DA </h4>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right;"><button style="width: 100px; background-color: darkgray; height: 30px; border: 0;border-radius: 10px;" > Print</button>
            </td>
            <td colspan="4" style="text-align: right;"><button style="width: 100px; background-color: #467dc0; height: 30px; border: 0;border-radius: 10px;" > Order</button>
            </td>
        </tr>
</tbody>
</table>
</div>



</body>
