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

        $orders=orders:: where('customer', '=',$user->email)->get();

        return view('panier',['res' => $orders,]);

    }

    public function items() {
        $items = orders:: where('customer', '=','larbifatima@yahoo.com')->count();
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
    public function DeleteOrder($id,$customer) {
        $order = orders::findOrFail($id);
        $order->delete();
        print('delete data');

        return redirect()->route('panier', ['id'=>$customer]);

    }
    //
}
