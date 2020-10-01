<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\parfm;
use App\orders;
use Auth;
class parfumController extends Controller
{
    public function acceuil() {
        $parfum = parfm::paginate(9);
        $items = orders:: where('customer', '=',Auth::user()->email)->count();

        return view('welcome',['parfum' => $parfum,'item'=> $items]);

    }

  

   
    
    public function showDetails($id) {
        $parfum = parfm::find($id);
        $items = orders:: where('customer', '=',Auth::user()->email)->count();

        $mark=parfm::where('marque', '=',$parfum->marque)->where('name', '!=',$parfum->name)->distinct()->take(6)->get();
        $size=parfm:: where('name', '=',$parfum->name)->where('size', '!=',$parfum->size)->get();
        return view('details',['parfum' => $parfum,'marque'=>$mark,'size' => $size,'item'=> $items]);

    }
    public function addData() {

        return view('data');

    }
    public function saveData() {
                $parfum= new parfm();
                $parfum->name = request('name');
                $parfum->prix = request('price');
                $parfum->marque = request('marque');
                $parfum->type = request('type');
                $parfum->image = request('url');
                $parfum->gender = request('gender');
                $parfum->quantite = request('quantite');
                $parfum->size = request('size');


                $parfum->save();


                return redirect('welcome');
        
            }
           
            public function search(Request $request) {
                $search = $request->input('search');
                $items = orders:: where('customer', '=',Auth::user()->email)->count();

                $res=  parfm::where('name', 'like', '%'.$search.'%')->get();


                return view('search',['search' => $res,'item'=> $items]);
        
            }

            public function getWomen() {
                $women = parfm::where('gender', '=','femme')->get();
                $items = orders:: where('customer', '=',Auth::user()->email)->count();

                return view('womenParfum',['women' => $women,'item'=> $items]);
        
            }
            public function getMen() {
                $men = parfm::where('gender', '=','homme')->get();
                $items = orders:: where('customer', '=',Auth::user()->email)->count();

                return view('menParfum',['men' => $men,'item'=> $items]);
        
            }
            public function getPromotion() {
                $resultat = parfm::where('promotion', '=',1)->get();
                $items = orders:: where('customer', '=',Auth::user()->email)->count();

                return view('promotion',['res' => $resultat,'item'=> $items]);
        
            }
    //
}
