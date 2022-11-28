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
        
          <label class="logo" href="{{ url('welcome')}}"><img src="13keys-black.png" alt="Logo" width= 200px height= 150px></label>
        <ul>
         <li><a  href="{{ url('welcome')}}">Home</a></li>
         <li><a class="current3"href="{{ url('productspage')}}">Products</a></li>
         <li><a href="/">Contact Us</a></li>
         <li><a href="{{ url('login')}}">Login</a></li>         
         <li><a href="/"><i class="fa fa-shopping-cart" style="font-size:25px"></i></a></li>
         <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
        </ul>
    </nav>
    <?php
        $productid = $_GET['productid'];
    ?>


 
    <div class = "product-container">

        <?php

            $db_host = 'localhost';
            $db_name = 'e-commercedb';
            $username = 'root';

            try {
                $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username); 
                #$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                try {
                    $query="SELECT  * FROM  `products` WHERE `id` = '$productid'";
                    $rows =  $db->query($query);
                        
                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{
                            ?>
                            <div class = "product-item">
                            <?php
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



                try {
                    $query="SELECT  * FROM  `images` WHERE `productsid` = '$productid'";
                    $rows =  $db->query($query);
                        
                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{
                            ?>
                            <div class = "product-item">
                            <?php
                            echo '<tr><td><img src ="' . $row['Image1'] . '" ></a></td>';
                            echo '<td><img src ="' . $row['Image2'] . '"></a></td>';
                            echo '<td><img src ="' . $row['Image3'] . '"></a></td>';
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