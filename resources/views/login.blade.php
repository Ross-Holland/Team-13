<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link href="{{ url('css/loginpage.css') }}" rel="stylesheet">
  <link href="{{ url('/css/main.css') }}" rel="stylesheet">
  <title>Login Page</title> 
</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Page</title>
  <link rel="stylesheet" href="loginpage.css">
</head>
<body class="login-body">
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
     <li><a href="cartmenu"><i class="fa fa-shopping-cart" style="font-size:25px">({{ $total }})</i></a></li>
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
  <main class="login-main">
    <div class="login-box">
      <div class="login-inner-box">
        <div class="login-forms-wrap">
          
          <form action="login" method="POST" class="login">
            <div class="title-wrap">
            <h2 class="login-title">Login</h2>
            <p class="login-welcome-text">Welcome! Please sign in below.</p>
            </div>
            @csrf
            <input class="login-email" type="email" name="email" placeholder="Email"/>
            <input class="login-password" type="password" name="password" placeholder="Password"/>
            <button class="login-button">Login</button>
            <hr class="login-line-break">
            <div class="login-register-wrap">
            <p class="login-register">Don't have an account?</p>
            <button class="login-register-button" href="{{ url('registrationpage')}}">Register</button>
            </div>
          </form>
        </div>
        <div class="login-carousel">
          <img src="login_elec_guitar.png" class="login_img" alt="">

        </div>
      </div>
    </div>
  </main>
  <!-- JavaScript File-->
  <script src="login.js"></script>
</body>
<script src="login.js"></script>
<script>
  var moonicon = document.getElementById("moonicon");

  /* 
  Explaniation of the JavaScript is explained in the welcome.blade.
  */

  if(localStorage.getItem("theme") == null){
     localStorage.setItem("theme", "light-theme");
  }

  let localData = localStorage.getItem("theme");

  if(localData == "light-theme"){
     document.body.classList.remove("dark");

  } else if (localData == "dark-theme"){
     document.body.classList.add("dark");
  }
     
  moonicon.onclick = function(){
     document.body.classList.toggle("dark");

  if(document.body.classList.contains("dark")){
     localStorage.setItem("theme", "dark-theme");
  } else {
     localStorage.setItem("theme", "light-theme");
  }

  }
  
</script>
</html>
