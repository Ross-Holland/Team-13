<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products Page</title>
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
        
          <label class="logo" href="{{ url('welcome')}}"><img src="13keys - black.png" alt="Logo" width= 200px height= 150px></label>
        <ul>
         <li><a  href="{{ url('welcome')}}">Home</a></li>
         <li><a class="current3"href="{{ url('productspage')}}">Products</a></li>
         <li><a href="/">Contact Us</a></li>
         <li><a href="{{ url('registrationpage')}}">Login</a></li>         
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>
    </nav>

    <div class="departments-header">
        <h2>DEPARTMENTS</h2>
    </div>

        <div class = "dept-container">
            <div class ="dept">
                <a href="electric-dept"><h3>ELECTRIC</h3><img src="electric_guitar_dept.png" alt="electric" width= 281.25px height = 375px></a>
            </div>
            <div class ="dept">
                <a href="acoustic-dept"><h3>ACOUSTIC</h3><img src="acoustic_guitar_dept.png" alt="acoustic" width= 281.25px height = 375px></a>
            </div>
            <div class ="dept">
                <a href="bass-dept"><h3>BASS</h3><img src="bass_dept.png" alt="acoustic" width= 281.25px height = 375px></a>
            </div>
            <div class ="dept">
                <a href="keyboard-piano-dept"><h3>KEYBOARDS/PIANOS</h3><img src="piano_dept.png" alt="Piano" width= 281.25px height = 375px></a>
            </div>
            <div class ="dept">
                <a href="ukulele-dept"><h3>AMPS</h3><img src="amp_dept.png" alt="amp"width= 281.25px height = 375px></a>
            </div>
            <div class ="dept">
                <a href="Drums-dept"><h3>DRUMS</h3><img src="drums_dept.png" alt="Drums" width= 281.25px height = 375px></a>
            </div>
        </div>
 

    <div class="products-header">
        <h2>SHOP ALL PRODUCTS</h2>
    </div>

    <div class = "product-container">

        <div class = "product-item">
            <a href="productid=0"><img src="electric guitar dept.png" ></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="bass dept.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="acoustic guitar dept.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="amp dept.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="piano dept.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="dark_bass_4__1.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="white_electric_guitar_1__1.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="drums dept.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="marshall_amp_6__1.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
        <div class = "product-item">
            <a href="productid=0"><img src="dark_acoustic_guitar_3__1_.png"></a>
            <span class = "product-name">Fendre 5000 electro acoustic dlrx in sunburst</span>
            <div class = "price">£1,800</div>
        </div>
    </div>
       
 

















        
   
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