<?php
// use App\Http\Controllers\ProductController;
// $total=ProductController::cartItem();

?>

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
    <script defer src="/js/productsJS.js" ></script>
    

</head>

<body>
    
    <nav>

        <input type="checkbox" id="box">
        <label for="box" class="boxbtn">
            <i class="fa fa-bars"></i>
        </label>
        <a href="{{ url('welcome')}}"><img src="images/13keys_-_black.png" width="125" height="85" class="logo" alt=""></a>
        <ul>
         <li><a href="{{ url('welcome')}}">Home</a></li>
         <li><a class="current1" href="{{ url('productspage')}}">Products</a></li>
         <li><a href="{{ url('aboutus') }}">Contact Us</a></li>
         <li><a href="{{ url('login')}}">Login</a></li>     
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>


    </nav>

    <div class="departments-header">
        <h2>DEPARTMENTS</h2>
    </div>

        <div class = "dept-container">
            <div class ="dept">
                <h3>ELECTRIC</h3><img src="electric_guitar_dept.png" alt="electric" width= 281.25px height = 375px id= "electricGuitarFilter" >
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

        <?php

            $db_host = 'localhost';
            $db_name = 'e-commercedb';
            $username = 'root';
            $password = '123';

            try {
                $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password); 
                #$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                try {
                    $query="SELECT  * FROM  products ";
                    $rows =  $db->query($query);
                        
                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{
                            ?>
                            <div class = "product-item">
                            <form action="/add_to_cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $row['id'] }}">
                                <button class="btn btn-primary">Add to Cart</button>
                            </form>
                            <?php
                            echo '<tr><td><a href="productid="' . $row['id'] . '><img src ="' . $row['Image'] . '" width= 250px height= 350px></a></td>';
                            echo '<td><span class="product-name">' . $row['Name'] . '</span></td>';
                            echo '<td><div class="price">£' . $row['Price'] . '</div></td>';
                            echo '<td><span class="instrument-type">' . $row['Instrument Type'] . '</span></td></tr>';
                            ?>
                            </div>
                            <?php
                        }
                    }
                    else {
                        echo  "<p>No record in the list.</p>\n";
                    }
                }
                catch (PDOexception $ex){
                    echo "Sorry, a database error occurred! <br>";
                    echo "Error details: <em>". $ex->getMessage()."</em>";
                }
            } catch(PDOException $ex) {
                echo("Failed to connect to the database.<br>");
                echo($ex->getMessage());
                exit;
            }
        ?>
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