<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
$listAmount = ProductController::wishListItem();
}
?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="13keys-black.png">

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
       
        @if(Session::has('user'))
        <a href="{{ url('welcome')}}"><img src="13keys-black.png" width="150" height="100" style="margin-left:25px; margin-top:15px;" class="logo" alt=""></a>
        <ul>
            <li><a href="{{ url('myorders') }}">My Orders</a></li>     
            <li><a href="{{ url('welcome')}}">Home</a></li>
            <li><a href="{{ url('productspage')}}">Products</a></li>
            <li><a href="{{ url('aboutus') }}">Contact Us</a></li>  
            <li><a href="{{ url('logout')}}">Logout</a></li>
            <li><a href="wishlist"><i class="fa fa-star-o" style="font-size:25px">({{ $listAmount }})</i></a></li>
            <li><a href="cartmenu"><i class="fa fa-shopping-cart" style="font-size:25px">({{ $total }})</i></a></li>
            <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
         @else
         <a href="{{ url('welcome')}}"><img src="13keys-black.png" width="150" height="100" style="margin-left:25px; margin-top:15px;" class="logo" alt=""></a>
         <ul>
           <li><a href="{{ url('productspage')}}">Products</a></li>
           <li><a href="{{ url('login')}}">Login</a></li>
           <li><i class="fa fa-moon-o" style="font-size:25px" id="moonicon"></i></li>
         @endif
        </ul>
  
  
    </nav>
    <?php
        $productid = $_GET['productid'];
    ?>

    <div class="product-container">
        <div class = "image-container"> 
            <?php
                    
                $db_host = 'localhost';
                $db_name = 'e-commercedb';
                $username = 'root';
                $password = '123';

                try {
                    $db = new PDO("mysql:dbname=$db_name;host=$db_host", $username); 
                    #$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    try {
                        $query="SELECT  * FROM  `images` WHERE `productsid` = '$productid'";
                        $rows =  $db->query($query);
                            
                        if ( $rows && $rows->rowCount()> 0) {
                            while  ($row =  $rows->fetch())	{
                                ?>
                                <div class="product-image">
                                <?php
                                    echo '<img id ="productimg" src ="' . $row['Image1'] . '">';
                                ?>
                                <div class="controls">
                                    <span onclick="img1()" class="imagebtn"><i class="fa fa-search-plus" aria-hidden="true" style= "padding-left:5px; padding-top:2px"></i></span>
                                    <span onclick="img2()" class="imagebtn"><i class="fa fa-search-plus" aria-hidden="true" style= "padding-left:5px; padding-top:2px"></i></span>
                                    <span onclick="img3()" class="imagebtn"><i class="fa fa-search-plus" aria-hidden="true" style= "padding-left:5px; padding-top:2px"></i></span>
                                </div>
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


 
        <div class = "info-container">
        <?php
                try {
                    $query="SELECT  * FROM  `products` WHERE `id` = '$productid'";
                    $rows =  $db->query($query);
                        
                    if ( $rows && $rows->rowCount()> 0) {
                        while  ($row =  $rows->fetch())	{
                           
                                echo '<h1>' . $row['Name'] . '</h1>';
                                echo '<h2>??' . $row['Price'] . '</h2>';
                                echo '<p>' . $row['Description'] . '</p>';
                                ?>
                                <form action="/add_to_cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $row['id'] }}">
                                <button class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add to Cart</button>
                                </form>
                                <form action="/add_to_wish" method="POST">
                                 @csrf
                                 <input type="hidden" name="product_id" value="{{ $row['id'] }}">
                                 <button class="btn btn-primary" style="margin-top:10px"><i class="fa fa-star-o"></i> Add to Wishlist</button>
                                </form>
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
            ?>
        </div>

    </div>


<script>
    let productimg = document.getElementById("productimg");
    let imagebtn = document.getElementsByClassName("imagebtn");
    function img1(){
        <?php
            $query="SELECT  * FROM  `images` WHERE `productsid` = '$productid'";
            $rows =  $db->query($query);
                
            if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo 'productimg.src ="' . $row['Image1'] . '"';
                }
            }
            else {
                echo  "<p>No record in the list.</p>\n";
            }
        ?>
    }
    function img2(){
        <?php
            $query="SELECT  * FROM  `images` WHERE `productsid` = '$productid'";
            $rows =  $db->query($query);
                
            if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo 'productimg.src ="' . $row['Image2'] . '"';
                }
            }
            else {
                echo  "<p>No record in the list.</p>\n";
            }
        ?>
    }
    function img3(){
        <?php
            $query="SELECT  * FROM  `images` WHERE `productsid` = '$productid'";
            $rows =  $db->query($query);
                
            if ( $rows && $rows->rowCount()> 0) {
                while  ($row =  $rows->fetch())	{
                    echo 'productimg.src ="' . $row['Image3'] . '"';
                }
            }
            else {
                echo  "<p>No record in the list.</p>\n";
            }
        ?>
    }
</script>








        
   
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