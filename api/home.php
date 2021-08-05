<?php
require "includes/common.php";

?>

<?php
if (!isset($_SESSION['email'])) {
 header('location: index.php');
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <title>Home|E-Store</title>
        
    
    </head>
    <body>
        <?php
        include "includes/header.php";
        include "includes/check-if-added.php";
        
        ?>
        <div class="container-fluid">
            <div class="row">
               
            <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 1</p>
                </div>   
                <div class="text-center">
                        <a href="#" data-toggle="modal" data-target="#modal"><img src="images/1.jpg" alt=""></a>
                            <div class="caption">
                                <p>Galaxy M31</p>
                                <p>Rs. 17999</p>
                                <p>64MP Quad camera 6,000mAh battery</p>
                                <p>with 16.21cm (6.4") Infinity-U Display</p>
                                
                                <?php
                                if (check_if_added_to_cart(1)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
                
            <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 2</p>
                </div>   
                <div class="text-center">
                        <img src="images/2.jpg" alt="">
                            <div class="caption">
                                <p>Samsung  Guru</p>
                                <p>Rs. 1150</p>
                                <p>3.81 cm (1.5 inch) Display </p> 
                                <p> 800 mAh Battery </p>
                                <?php
                                if (check_if_added_to_cart(2)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                
           
            <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 3</p>
                </div>   
                <div class="text-center">
                        <img src="images/3.jpg" alt="">
                            <div class="caption">
                                <p>Galaxy M21</p>
                                <p>Rs. 13199</p>
                                <p>48 MP Triple Camera 6,000mAh battery</p>
                                <p>with 16.21cm (6.4") sAMOLED display</p>
                                <?php
                                if (check_if_added_to_cart(3)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 4</p>
                </div>   
                <div class="text-center">
                        <img src="images/4.jpg" alt="">
                            <div class="caption">
                                <p>Samsung Galaxy S9</p>
                                <p>Rs. 24999</p>
                                <p>4 GB RAM | 64 GB ROM  3,000mAh battery</p>
                                <p>with 14.73 cm (5.8 inch) Quad HD+ Display</p>
                                <?php
                                if (check_if_added_to_cart(4)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 5</p>
                </div>   
                <div class="text-center">
                        <img src="images/5.jpg" alt="">
                            <div class="caption">
                                <p>Galaxy A10</p>
                                <p>Rs. 7990</p>
                                <p>2 GB RAM | 32 GB ROM 3,400mAh Lithium-ion battery</p>
                                <p>with 15.75 cm (6.2 inch) HD+ Display</p>
                                <?php
                                if (check_if_added_to_cart(5)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
               <div class="jumbotron">
                    <p># 6</p>
                </div>   
                <div class="text-center">
                        <img src="images/6.jpg" alt="">
                            <div class="caption">
                                <p>Galaxy M30s</p>
                                <p>Rs. 16999</p>
                                <p>48MP Quad camera 6,000mAh battery</p>
                                <p>with 16.21cm (6.4") sAMOLED Display</p>
                                <?php
                                if (check_if_added_to_cart(6)){
                                         ?>
                               <p>  <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                                <?php
                                 } else{
                                    ?>
                               <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a></p>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        
    </body>
</html>

