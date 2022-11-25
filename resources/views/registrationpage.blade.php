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
    <link href="/css/register.css" rel="stylesheet">
    

</head>

<body>
    
    <nav>

        <input type="checkbox" id="box">
        <label for="box" class="boxbtn">
            <i class="fa fa-bars"></i>
        </label>
        
        <a href="{{ url('welcome')}}"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
        <ul>
         <li><a  href="{{ url('welcome')}}">Home</a></li>
         <li><a href="/">Products</a></li>
         <li><a href="/">Contact Us</a></li>
         <li><a class="current2"href="{{ url('registrationpage')}}">Login</a></li>         
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>

    </nav>
    <div class = "main">
      <div class = "register">
          <h2>Register Here </h2>
          <form id="register" method = "post">
          <label>First Name:</label>
          <br>
          <input type = "text" name="fname"
          id="name" placeholder="Enter Your First Name">
          <br><br>
          <label>Last Name:</label>
          <br>
          <input type = "text" name="lname"
          id="name" placeholder="Enter Your Last Name">   
          <br><br>
          <label>Email :</label>
          <br>
          <input type ="email" name="email"id="name" placeholder="Enter a valid Email">
          <br><br>
          <label>Password: </label>
          <br>
          <input type ="password" id ="name" name ="pswrd" minlength="8" placeholder="Enter a new password">
          <br><br>
          <label>Confirm Password:</label>
          <br>
          <input type ="password" id ="name" name ="cpswrd" minlength="8" placeholder ="Re-enter Password">
          <br><br>
          <label>Address: </label>
          <br>
          <input type = "text" name="fname"
          id="name" placeholder="Enter Your Address">
          <br><br>
          <label for="phone">Enter a phone number:</label>
          <input type="tel" id="phone" name="phone" placeholder="123-4567-8901" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br>
          <input type = "submit" value= "Submit" name="submit" id="submit">
          </form>
       </div><!--end register-->
  </div><!--end main-->

   
</body>
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