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
    <link rel="icon" type="image/x-icon" href="images/13keys_-_black.png">

    <title>Contact Us</title>

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
        <a href="{{ url('welcome')}}"><img src="13keys-black.png" width="150" height="100" style="margin-left:25px; margin-top:15px;" class="logo" alt=""></a>
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

<p1>
    <div class="about-us">
        
        <h2><div class="about-us-header">About us</div></h2>
        <br>
        We are 13Keys the market leading e-commerce store for buying instruments.
        As a team we thrive to give our customers the best service we can by not only selling the highest quality equipment possible
        but also give our customers the best experience while purchasing their new equipment.
        <br>
        <br>
        <h2><div class="about-us-header">Why shop at 13Keys</div></h2>
        <br>
        We only sell the highest quality equipment so it'll last a lifetime.
        <br>
        We promise excellent customer service from beginning to end and even after.
        <br>
        All our purchases come with free premium shipping.
        <br>
        In case of accidents all purchases come with free 3 year warrenty for fixes or replacements.   
        <br>
        Our excellent stock and variety of instruments means your needs will be met.
        <br>
        If you decide it isn't what you want you can return it within 30 days, providing you contact us via email first.
        <br>
        <br>
        <h2><div class="about-us-header">News Letter</div></h2>
        <br>
        A news letter is currently in development and will be available in the future.
        <br>
        <br>
        <h2><div class="about-us-header">Vision</div></h2>
        <br>
        We strive to promote the music industry and provide all musicians of any level the means to pursure their passion.
        <br>
        We hope to grow as an independent musical retailer and aim to expand our online store onto the highstreets near you!
        <br>
        By 2024 we hope we hope to have achieved this and much more, we look forward to meeting you all.

</p1>

<footer>
    <div class="about-us-footer">
        <p>How to contact us:</p>
        <br>
        <p1>Phone Number: 01537 429863</p1> <p1>Address: 3 Marginal Avenue, D78 4TP</p1> Email: 13Keys@hotmail.co.uk
        <br>
</footer>

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