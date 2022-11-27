<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

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


}

