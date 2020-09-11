<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\parfm;
class parfumController extends Controller
{
    public function acceuil() {
        $parfum = parfm::paginate(9);
        return view('welcome',['parfum' => $parfum,]);

    }
    public function test() {
        return view('test');

    }
    public function showDetails($id) {
        $parfum = parfm::find($id);
        $mark=parfm:: where('marque', '=',$parfum->marque)->where('name', '!=',$parfum->name)->take(6)->get();
        $size=parfm:: where('name', '=',$parfum->name)->where('size', '!=',$parfum->size)->get();
        return view('details',['parfum' => $parfum,'marque'=>$mark,'size' => $size,]);

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
                $res=  parfm::where('name', 'like', '%'.$search.'%')->get();


                return view('search',['search' => $res,]);
        
            }

            public function getWomen() {
                $women = parfm::where('gender', '=','femme')->get();
                return view('womenParfum',['women' => $women,]);
        
            }
            public function getMen() {
                $men = parfm::where('gender', '=','homme')->get();
                return view('menParfum',['men' => $men,]);
        
            }
            public function getPromotion() {
                $resultat = parfm::where('promotion', '=',1)->get();
                return view('promotion',['res' => $resultat,]);
        
            }
    //
}
