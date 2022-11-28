<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
$listAmount = ProductController::wishListItem();
}
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ url('css/main.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <nav>

        <input type="checkbox" id="box">
        <label for="box" class="boxbtn">
            <i class="fa fa-bars"></i>
        </label>
        <a href="{{ url('welcome')}}"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
        @if(Session::has('user'))
        <ul>
            <li><a href="{{ url('myorders') }}">My Orders</a></li>     
            <li><a href="{{ url('welcome')}}">Home</a></li>
            <li><a href="{{ url('productspage')}}">Products</a></li>
            <li><a href="{{ url('aboutus') }}">Contact Us</a></li>  
            <li><a href="{{ url('logout')}}">Logout</a></li>
            <li><a href="wishlist"><i class="fa fa-star-o" style="font-size:25px">({{ $listAmount }})</i></a></li>
            <li><a href="cartmenu"><i class="fa fa-shopping-cart" style="font-size:25px">({{ $total }})</i></a></li>
            <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
         @else
         
         @endif
        </ul>
  
  
    </nav>

</body>



      
            <div class="cart-header">
                <h2>YOUR BASKET ITEMS</h2>
            </div>
            <div class = "orderLink">
                <a href="order" >PROCEED TO CHECKOUT</a>
            </div>
                
         @foreach ($products as $item)
             <div class="cart-container">
                
                <div class="cart-image">
                    <a href="productspage/{{ $item->id }}" class="">
                <img src="{{ $item->Image }}" alt="" class="trending-image" width= 250px height= 350px>
                <div class="">

                </div>
                </a>
                </div>

                
                <div class="cart-info">
                <div class="">
                 <div class = "name"><h2>{{ $item->Name }}</h2></div>
                 <div class = "desc"><h3>{{ $item->Description }}</h3></div>
                 <div class = "price"><h3>£{{ $item->Price }}</h3></div>

                </div>
                </a>
                </div>

                <div class="cart-remove">
                    <a href="/remove/{{ $item->cart_id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
        
                <div class="">
                 
                </div>
                </a>
                </div>
             </div>
         @endforeach

       
         <div class = "orderLink">
                <a href="order" >PROCEED TO CHECKOUT</a>
        </div>

    <script>
        var moonicon = document.getElementById("moonicon");
    /* 
    Explaniation of the JavaScript is explained in the welcome.blade.
    */
    
        if (localStorage.getItem("theme") == null) {
            localStorage.setItem("theme", "light-theme");
        }
    
        let localData = localStorage.getItem("theme");
    
        if (localData == "light-theme") {
            document.body.classList.remove("dark");
    
        } else if (localData == "dark-theme") {
            document.body.classList.add("dark");
        }
    
        moonicon.onclick = function() {
            document.body.classList.toggle("dark");
    
            if (document.body.classList.contains("dark")) {
                localStorage.setItem("theme", "dark-theme");
            } else {
                localStorage.setItem("theme", "light-theme");
            }
    
        }

    </script>
    
    </html>