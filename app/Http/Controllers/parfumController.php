<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\parfm;
use App\orders;
use App\favorite;

use Auth;
class parfumController extends Controller
{
    public function acceuil() {
        $parfum = parfm::paginate(9);
        if(Auth::user()){
            $items = orders:: where('customer', '=',Auth::user()->email)->count();
            $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
            $fav = favorite:: where('customer', '=',Auth::user()->email)->get();
            return view('welcome',['parfum' => $parfum,'item'=> $items,'itemf'=> $itemf,'fav'=> $fav]);
        }
else
{
    return view('welcome',['parfum' => $parfum,]);

}
    

        }
       

    

  

   

    
    public function showDetails($id) {
        $parfum = parfm::find($id);
        if(Auth::user()){
        $items = orders:: where('customer', '=',Auth::user()->email)->count();
        $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
       
        $mark=parfm::where('marque', '=',$parfum->marque)->where('name', '!=',$parfum->name)->distinct()->take(6)->get();
        $size=parfm:: where('name', '=',$parfum->name)->where('size', '!=',$parfum->size)->get();
        return view('details',['parfum' => $parfum,'marque'=>$mark,'size' => $size,'item'=> $items,'itemf'=> $itemf,]);

    }
    else
    {
        $mark=parfm::where('marque', '=',$parfum->marque)->where('name', '!=',$parfum->name)->distinct()->take(6)->get();
        $size=parfm:: where('name', '=',$parfum->name)->where('size', '!=',$parfum->size)->get();
        return view('details',['parfum' => $parfum,'marque'=>$mark,'size' => $size,]);

    }
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
                $parfum->prix2 = request('price2');
                if(request('price2') == 0)
                {$parfum->promotion = 0;}
          else
          {         $parfum->promotion = 1;
          }

                $parfum->save();


                return redirect('welcome');
        
            }
           
            public function search(Request $request) {
                $search = $request->input('search');
                if(Auth::user()){
                    $items = orders:: where('customer', '=',Auth::user()->email)->count();
                    $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
                    $fav = favorite:: where('customer', '=',Auth::user()->email)->get();
                    $res=  parfm::where('name', 'like', '%'.$search.'%')->paginate(6);
    
    
                    return view('search',['search' => $res,'item'=> $items,'itemf'=> $itemf,'fav'=>$fav]);
    
                   
                }
                else{
                    $res=  parfm::where('name', 'like', '%'.$search.'%')->paginate(6);
    
    
                    return view('search',['search' => $res,]);
            
                }
               
            }

            public function advancedSearch(Request $request) {
                $marque =  $request->input('marque');
                $price = $request->input('price');
                $type = $request->input('type');
                $gender = $request->input('gender');
                if(Auth::user()){

                $items = orders:: where('customer', '=',Auth::user()->email)->count();
                $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
                $fav = favorite:: where('customer', '=',Auth::user()->email)->get();

                $res=  parfm::where('marque', '=', $marque)->where('prix', '<=', $price)->where('gender', '=', $gender)->where('type', '=', $type)->paginate(9);


                return view('advancedSearch',['search' => $res,'item'=> $items,'itemf'=> $itemf,'fav'=>$fav]);

        
            }
            else{
                $res=  parfm::where('marque', '=', $marque)->where('prix', '<=', $price)->where('gender', '=', $gender)->where('type', '=', $type)->paginate(9);


                return view('advancedSearch',['search' => $res,]);

        
        
            }
        }

            public function getWomen() {
                if(Auth::user()){
                $women = parfm::where('gender', '=','femme')->paginate(6);
                $items = orders:: where('customer', '=',Auth::user()->email)->count();
                $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
                $fav = favorite:: where('customer', '=',Auth::user()->email)->get();

                return view('womenParfum',['women' => $women,'item'=> $items,'itemf'=> $itemf,'fav'=>$fav]);
            }
            else{
                $women = parfm::where('gender', '=','femme')->paginate(6);
                return view('womenParfum',['women' => $women,]);


            }
            
            }
            public function getMen() {
                if(Auth::user()){
                $men = parfm::where('gender', '=','homme')->paginate(6);
                $items = orders:: where('customer', '=',Auth::user()->email)->count();
                $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
                $fav = favorite:: where('customer', '=',Auth::user()->email)->get();

                return view('menParfum',['men' => $men,'item'=> $items,'itemf'=> $itemf,'fav'=>$fav]);
                }
                else{
                    $men = parfm::where('gender', '=','homme')->paginate(6);
                    return view('menParfum',['men' => $men,]);
    
    
                }
            }
            public function getPromotion() {
                if(Auth::user()){
                $resultat = parfm::where('promotion', '=',1)->paginate(6);
                $items = orders:: where('customer', '=',Auth::user()->email)->count();
                $itemf = favorite:: where('customer', '=',Auth::user()->email)->count();
                $fav = favorite:: where('customer', '=',Auth::user()->email)->get();

                return view('promotion',['res' => $resultat,'item'=> $items,'itemf'=> $itemf,'fav'=>$fav]);
                }else{
                    $resultat = parfm::where('promotion', '=',1)->paginate(6);

                    return view('promotion',['res' => $resultat,]);

                }
            }
    //
}
