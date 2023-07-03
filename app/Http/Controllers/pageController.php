<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;

class pageController extends Controller
{
    public function index(){
        $products = products::all();
        return view('home',compact('products'));

    }

    public function add(Request $request,$id){
        $items = [];
        if($request->session()->has('items')){
            $items = $request->session()->get('items');
            if(!in_array($id,$items)){
                array_push($items,$id);
            }
        }else{
            array_push($items,$id);
        };
        $request->session()->put('items',$items);
        $products = products::all();
        // $request->session()->flush();
        return view('home',compact('products'));

    }

    public function cart(Request $request){
        $carts = $request->session()->get('items');
        if ($carts === null || !is_array($carts)) {
            $products = products::all();
            return view('home',compact('products'));
        }
        $products = array();
        for($i =0 ; $i < count ($carts) ; $i++){
            $product = products::find($carts[$i]);
            array_push($products,$product);
        }
        return view('products.cart',compact('products'));
    }


}
