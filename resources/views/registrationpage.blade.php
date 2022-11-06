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
        
          <label class="logo" href="">13Keys</label>
        <ul>
         <li><a href="{{ url('welcome')}}">Home</a></li>
         <li><a href="/">Products</a></li>
         <li><a href="/">Contact Us</a></li>
         <li><a href="{{ url('registrationpage')}}">Login</a></li>         
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:30px"></i></a></li>
        </ul>

        

    </nav>
    

   
</body>

</html>