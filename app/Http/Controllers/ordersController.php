<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\User;
use Auth;



class ordersController extends Controller
{
    public function Panier($id) {

        $user=User::find($id);
if(Auth::user()->email == $user->email){
        $orders=orders:: where('customer', '=',$user->email)->paginate(9);

        return view('panier',['res' => $orders,]);

    }
    else{
        return redirect('welcome');

    }
    }
    public function items() {
        $items = orders:: where('customer', '=',Auth::user()->email)->count();
        return  view('layouts.layout',['item' => $items,]);

    }

    public function saveOrder() {
        $order= new orders();
        $order->customer = request('customer');
        $order->product = request('product');
        $order->price = request('price');
        $order->quantite = request('quant');
        $order->image = request('image');
        $order->size = request('size');
        $order->validate = ('false');

        $order->save();


        return redirect()->route('details', ['id'=> request('id')]);

    }

     public function addOrder(Request $request) {
        $order= new orders();
        $order->customer  = $request->customer; //This Code coming from ajax request
        $order->price  = $request->price; //This Chief coming from ajax request
        $order->size  = $request->size; 
        $order->image  = $request->image;
        $order->product  = $request->product;
        $order->quantite  = (1);
        $order->validate = ('false');


        $order->save();

    }
    
    public function DeleteOrder($id,$customer) {
        $order = orders::findOrFail($id);
        $order->delete();
        print('delete data');

        return redirect()->route('panier', ['id'=>$customer]);

    }
    //
}
