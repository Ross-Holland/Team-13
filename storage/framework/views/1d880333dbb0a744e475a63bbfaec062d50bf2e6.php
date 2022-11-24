<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(url('css/main.css')); ?>" rel="stylesheet">

</head>

<body class="antialiased">
    <nav>

        <input type="checkbox" id="box">
        <label for="box" class="boxbtn">
            <i class="fa fa-bars"></i>
        </label>
        <a href="<?php echo e(url('welcome')); ?>"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
        <ul>
            
            <li><a class="current1" href="<?php echo e(url('welcome')); ?>">Home</a></li>
            <li><a href="/">Products</a></li>
            <li><a href="/">Contact Us</a></li>
            <li><a href="<?php echo e(url('loginin')); ?>">Login</a></li>
            <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
            <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>


    </nav>

    <div class="welcome-page-header">

    </div>
    <p1>
        <div class="welcome-text">
            Welcome to 13Keys!
            <br>
            <br>
            We are the market leading e-commerce store for buying musical instruments.
            We are proud to promote our market leading, high quality products to you.
            <br>
            <br>
            To protect our high quality, professional products from our competitors we ask that
            you login or create an account to gain full access to our website and products.
            <br>
            <br>
            To login click the Login button in the navigation bar above.
    </p1>
    <p2>
        <br>
        <br>
        Don't have an account with us?
        <br>
        <br>
        <a href="<?php echo e(url('/registrationpage')); ?>"> <button type="button" class="???"> Register Here! </button></a>
    </p2>
    <br>
    <br>
    Trending Now!
    <div class="carousel-container">
        <div class="carousel-images">
            <img class="carousel-img" src="elec_guitar.png">
        </div>

        <div class="carousel-images">
            <img class="carousel-img" src="images/eguitar.png">
        </div>

       
    </div>





</body>

<script>
    var moonicon = document.getElementById("moonicon");

    /* Explaniation of the JavaScript to help with understanding.

    Local storage saves user's preference. On refresh nothing will be changed and coming back to the website, nothing will be changed.
    Line 99 - null means if the theme is set to nothing, then the default theme will be light
    Line 103 - collects the local data and retrieves the theme picked. The if statements state that if it is light, then it will remove the dark theme. 
    I.e., if the icon is clicked while it is dark then it will remove the dark and put the light. Vice versa for the else if statement, this time it will add dark if it is light.
    Line 112 - this is the part which allows a click to swap between the themes. 'Dark' refers to the css in main.css, it will call on that css if the moon-icon is clicked.
    Line 115 - this is telling the storage to store 'dark' under the variable 'dark-theme', or if 'dark' css is not activated (else) store the current theme under 'light-theme' variable.

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

    let carouselIndex = 0;
    showCarouselImages();

    function showCarouselImages(){
        let x;
        let carouselImage = document.getElementsByClassName("carousel-images");
        for(i = 0; i < carouselImage.length; i++){
            carouselImage[i].style.display = "none";
        }
        carouselIndex++;
        if(carouselIndex > carouselImage.length){
            carouselIndex = 1
        }
        carouselImage[carouselIndex-1].style.display = "block";
        setTimeout(showCarouselImages,2000);
    }


</script>

</html><?php /**PATH C:\Users\ndham\OneDrive\Documents\GitHub\Team-13\resources\views/welcome.blade.php ENDPATH**/ ?>