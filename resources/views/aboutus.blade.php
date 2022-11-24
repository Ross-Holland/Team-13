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
        <ul>
            
            <li><a class="current1" href="{{ url('welcome')}}">Home</a></li>
            <li><a href="/">Products</a></li>
            <li><a href="/">Contact Us</a></li>
            <li><a href="{{ url('loginin')}}">Login</a></li>
            <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
            <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>


    </nav>
</body>

<p1>
    <div class="about-us">
        About us
        <br>
        <br>
        We are 13Keys the market leading e-commerce store forbuying instruments.
        As a team we thrive to give our customers the best service we can by not only selling the highest quality equipment possible
        but also give our customers the best experience while purchasing their new equipment>
        <br>
        <br>
        <br>
        Why shop at 13Keys
        <br>
        <br>
        We only sell the highest quality equipment so it'll last a lifetime.
        <br>
        We promise excellent customer service from beginning to end and even after.   
</p1>

<footer>
    <div class="about-us-footer">
        Where to contact us
        <br>
        Twitter: <a id="nothing" href="#">13Keys</a> LinkedIn: <a id="nothing" href="#">13Keys</a> Email: <a id="nothing" href="#">13Keys</a>
</footer>





















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
    
    </html>