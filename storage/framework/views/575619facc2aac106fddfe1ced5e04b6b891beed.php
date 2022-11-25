<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

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
        
        <a href="<?php echo e(url('welcome')); ?>"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
        <ul>
         <li><a  href="<?php echo e(url('welcome')); ?>">Home</a></li>
         <li><a href="/">Products</a></li>
         <li><a href="/">Contact Us</a></li>
         <li><a class="current2"href="<?php echo e(url('registrationpage')); ?>">Login</a></li>         
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>

        

    </nav>
    

   
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
</html><?php /**PATH C:\Users\ndham\OneDrive\Documents\GitHub\Team-13\resources\views/registrationpage.blade.php ENDPATH**/ ?>