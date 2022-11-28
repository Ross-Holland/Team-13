<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Registation Page</title>
   <!-- Fonts -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <!-- Styles -->
   <link href="/css/main.css" rel="stylesheet">


</head>

<body>

   <nav>

      <input type="checkbox" id="box">
      <label for="box" class="boxbtn">
         <i class="fa fa-bars"></i>
      </label>
      @if(Session::has('user'))
      <a href="{{ url('welcome')}}"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
      <ul>
         <li><a href="{{ url('welcome')}}">Home</a></li>
         <li><a href="{{ url('productspage')}}">Products</a></li>
         <li><a href="{{ url('aboutus') }}">Contact Us</a></li>
         <li><a href="{{ url('logout')}}">Logout</a></li>
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
      </ul>
      @else
      <img src="images/13keys_-_black.png" width="125" height="85" alt="">
      <ul>
         <li><a href="{{ url('productspage')}}">Products</a></li>
         <li><a href="{{ url('login')}}">Login</a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
      </ul>
      @endif



   </nav>

   <div class="registration-box">
      <div class="register">
         <h2 class="registration-title">Registration form, please complete
            <br> to register with us!
         </h2>
         <br>
         <form id="register" method="post">
            {{ csrf_field() }}
            <div class="registration-text">First Name:</div>
            <input type="text" name="Fname" class="name-input name-shadow" id="Fname" placeholder="Enter Your First Name">
            <br>
            <br>
            <div class="registration-text">Last Name:</div>
            <input type="text" name="Lname" class="name-input name-shadow" id="Lname" placeholder="Enter Your Last Name">
            <br>
            <br>
            <div class="registration-text">Email Address:</div>
            <input type="email" name="EmailAddress" class="name-input name-shadow" id="EmailAddress" placeholder="Enter a valid Email">
            <br>
            <br>
            <div class="registration-text">Password:</div>
            <input type="Password" id="Password" name="Password" class="name-input name-shadow" minlength="8" placeholder="Enter a new password">
            <br>
            <br>
            <div class="registration-text">Confirm Password:</div>
            <input type="password" id="confirmPassword" name="confirmPassword" class="name-input name-shadow" minlength="8" placeholder="Re-enter Password">
            <br>
            <br>
            <div class="registration-text">Address:</div>
            <input type="text" name="fname" class="name-input name-shadow" id="name" placeholder="Enter Your Address">
            <br>
            <br>
            <div class="registration-text" for="phone">Enter a phone number:</div>
            <input type="tel" id="phone" name="phone" class="name-input name-shadow" placeholder="01234567890" pattern="[0-9]{11}" required><br>
            <br>
            <input type="submit" value="Submit" name="submit" class="submit-button" id="submit">
         </form>
      </div>
      <!--end register-->
   </div>
   <!--end main-->


</body>
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


   //Creating the Confirm Password script to make sure that the passwords entered are the same.

   var mainPassword = document.getElementById("Password"),
      confirmPassword = document.getElementById("confirmPassword");

   function validatePassword() {
      if (mainPassword.value != confirmPassword.value) {
         confirmPassword.setCustomValidity("Passwords Don't Match");
      } else {
         confirmPassword.setCustomValidity('');
      }
   }

   mainPassword.onchange = validatePassword;
   confirmPassword.onkeyup = validatePassword;
</script>

</html>