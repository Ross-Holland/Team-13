<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devce-width, initial-scale=1">

    <title>About us Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>

<body>
    <nav>
        <input type="checkbox" id="box">
        <label for="box" class="boxbtn">
            <i class="fa fa-bars"></i>
        </label>
        <label class="logo" href="{{ url('welcome') }}">13Keys</label>
        <ul>
            <li><a href="{{ url('welcome') }}">Home</a></li>
            <li><a href="/">Products</a></li>
            <li><a href="/">Contact Us</a></li>
            <li><a class="current2"href="{{ url('registrationpage') }}">Login</a></li>
            <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
            <li><a class="fa fa-moon-o" style="font-size:25px" id="moonicon"></a></li>
        </ul>
    </nav>
</body>
<p1>
    <div class="about-us">
        About us
        <br>
        <br>
        We are 13Keys the market leading e-commerce store for buying instruments.
        As a team we thrive to give our customers the best service we can by not only selling the highest quality equipment possible
        but also give our customers the best experience while purchasing their new equipment.
        <br>
        <br>
        <br>
        Why shop at 13Keys?
        <br>
        <br>
        We only sell the highest of quality equipment so it'll last a lifetime.
        <br>
        We promise excellent customer service from beginning to end and even after.
        <br>



</p1>

<footer>
    <div class="about-us-footer">
        Where to contact us
        <br>
        Twitter: <a id="nothing" href="#">13Keys</a> LinkedIn: <a id="nothing" href="#">13Keys</a> Email: <a id="nothing" href="#">13Keys</a>
</footer>



<script>
    var moonicon = document.getElementById("moonicon");

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
