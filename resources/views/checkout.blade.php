<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
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
         <li><a href="{{ url('welcome')}}">Home</a></li>
         <li><a href="{{ url('productspage')}}">Products</a></li>
         <li><a href="{{ url('aboutus') }}">Contact Us</a></li>  
         <li><a href="{{ url('logout')}}">Logout</a></li>
         <li><a href="/cartmenu"><i class="fa fa-shopping-cart" style="font-size:25px">({{ $total }})</i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
         @else
         <ul>
           <li><a href="{{ url('welcome')}}">Home</a></li>
           <li><a href="{{ url('productspage')}}">Products</a></li>
           <li><a href="{{ url('aboutus') }}">Contact Us</a></li>  
           <li><a href="{{ url('login')}}">Login</a></li>
           <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
           <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
         @endif
        </ul>
  
  
    </nav>

</body>

      
<table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>£ {{ $amount }}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>£ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>£ 5</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>£ {{ $amount + 5 }}</td>
      </tr>
    </tbody>
  </table>

  <button type="submit" class="">Order Now</button>
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