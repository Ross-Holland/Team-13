<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Wish;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     //add to cart

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
      echo ("<script>
      window.alert('Please login to access this feature!');
      window.location.href='/login';
      </script>");
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

       //Order


    //this allows the total amount information to be displayed on the order page, it gathers the id and the product ids that are linked to that user_id and total things up by joining tables like before

    function orderPlaced()
    {
     $idUser = Session::get('user')['id'];
     $amount = DB::table('cart')->join('products', 'cart.product_id', 'products.id')
     ->where('cart.user_id', $idUser)
     ->sum('products.price');
     return view('checkout', ['amount'=>$amount]);
    }
     
     //add's product id and user id to the orders table (this is how the data gets moved  to orders table)

    function paymentDone(Request $req)
    {
      $idUser = Session::get('user')['id'];
      $cartInfo = Cart::where('user_id', $idUser)->get();
      foreach($cartInfo as $cart)
      {
          $orderItems = new Order;
          $orderItems->product_id=$cart['product_id'];
          $orderItems->user_id=$cart['user_id'];
          $orderItems->status=$cart='Dispatched';
          $orderItems->payment_method=$req->payment;
          $orderItems->payment_status='Done';
          $orderItems->address=$req->address;
          $orderItems->save();
          Cart::where('user_id', $idUser)->delete();

      }
      $req->input();
      return redirect('/welcome');
    }

    //a function that joins order and products table, reason for this is that the order table's 'product_id' can be linked to the product's id in the products table 
    // which will allow it to display information which is linked to that product id (the orders in the orders table)
    
    function orderList()
    {

     $idUser = Session::get('user')['id'];
     $list = DB::table('orders')->join('products', 'orders.product_id', 'products.id')
     ->where('orders.user_id', $idUser)
     ->get();

      return view('myorders', ['list'=>$list]);

    }


    //Wishlist functions

    function addToWish(Request $req)
     {
        if($req->session()->has('user'))
        {

        $wish = new Wish;
        $wish->user_id=$req->session()->get('user')['id'];
        $wish->product_id=$req->product_id;
        $wish->save();
        return redirect('/welcome');
        
        }
     else{
      echo ("<script>
      window.alert('Please login to access this feature!');
      window.location.href='/login';
      </script>");
         }

}

   static function wishListItem()
    {
   $userId = Session::get('user')['id'];
   return Wish::where('user_id', $userId)->count();
   }

   function wishListMenu()
   {
    $idUser = Session::get('user')['id'];
    $items= DB::table('wishlist')->join('products', 'wishlist.product_id', 'products.id')
    ->where('wishlist.user_id', $idUser)
    ->select('products.*', 'wishlist.id as wishlist_id')
    ->get();
    return view('wishlist', ['wishItems'=>$items]);
   }

   function wishRemove($id)
   {
     Wish::destroy($id);
     return redirect('wishlist');
   }



}