<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\favorite;
use Auth;

class favoriteController extends Controller
{
    public function Fav() {

        if(Auth::user()){

        $fav=favorite:: where('customer', '=',Auth::user()->email)->get();

        return view('favorite',['fav' => $fav,]);

    }
    else{
      return  redirect('welcome');
    }
}
    public function DeleteFavorite($id) {
        $fav = favorite::findOrFail($id);
        $fav->delete();

        return redirect()->route('favorite',);

    }
    public function DeleteFav(Request $request) {
        $fav = favorite::findOrFail($request->id);
        $fav->delete();

        return redirect('welcome');
    }
    

    public function store(Request $request)
    {
        $fav= new favorite();

       
        $fav->customer  = $request->customer; //This Code coming from ajax request
        $fav->price  = $request->price; //This Chief coming from ajax request
        $fav->size  = $request->size; 
        $fav->image  = $request->image;
        $fav->product  = $request->product;
        $fav->productId=$request->id;
        $fav->quantite  = (10);

    
        $fav->save();

       
    
    }

    public function items() {
        $items = favorite:: where('customer', '=',Auth::user()->email)->count();
        return  view('layouts.layout',['itemf' => $items,]);

    }
    //
}
