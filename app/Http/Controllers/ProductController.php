<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

     function addToCart(Request $req)
     {
        if($req->session()->has('user'))
        {

        $cart = new Cart;
        $cart->user_id=$req->session()->get('user')['id'];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/welcome');
        
        }
     else{
          return redirect('/login');
         }

        
    }

    static function cartItem()
    {
    $userId = Session::get('user')['id'];
    return Cart::where('user_id', $userId)->count();
    }
    

    //join products table to cart via the id

    function cartMenu()
    {
     $idUser = Session::get('user')['id'];
     $items= DB::table('cart')->join('products', 'cart.product_id', 'products.id')
     ->where('cart.user_id', $idUser)
     ->select('products.*', 'cart.id as cart_id')
     ->get();
     return view('cartmenu', ['products'=>$items]);
    }

    function cartRemove($id)
    {
      Cart::destroy($id);
      return redirect('cartmenu');
    }

    function orderPlaced()
    {
     $idUser = Session::get('user')['id'];
     $amount= $items= DB::table('cart')->join('products', 'cart.product_id', 'products.id')
     ->where('cart.user_id', $idUser)
     ->sum('products.price');
     return view('checkout', ['amount'=>$amount]);
    }

}

