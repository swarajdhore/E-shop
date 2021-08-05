<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$id=0;
$user_id = $_SESSION['user_id'];


$query = "UPDATE users_items SET status = 'Confirmed'"
        . " WHERE users_items.user_id =" .$user_id ;
mysqli_query($con, $query) or die($mysqli_error($con));

?>
<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <title>Success|E-Store</title>
        <style>
            .container_fluid{
                margin-top: 100px;
            }
            footer{
           padding: 10px 0;
           background-color: #101010;
           color:#9d9d9d;
           bottom: 0;
           width: 100%;
           }
        </style>
        </head>
        <body>
            <?php include 'includes/header_success.php'; ?>
             <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="home.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        
        </body>
</html>