<?php
include 'modal.php';
require "includes/common.php";
?>
<?php
if (isset($_SESSION['email'])) {
 header('location: home.php');
} 
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
        
        <link href="style.css" type="text/css"  rel="stylesheet">
        <title>SignUp|E-Store</title>
        <style>
            footer{
           padding-top: 10px; 
           padding-bottom:10px ;
           background-color: #101010;
           color:#9d9d9d;
           bottom: 0;
           width: 100%;}
           
            
            body{
                background-color: #ccffcc;
            }
           </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <br><br><br><br>
        <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <img src="images/signup.jpg">
            </div>

            <div class="col-sm-5">

                <h2>SIGN UP</h2>

                    <form  action="signup_script.php" method="POST">

                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Name" name="name" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>

                        <div class="form-group col-sm-10">
                                <input type="text" class="form-control"  placeholder="Contact" name="contact" maxlength="10" size="10" required>
                                
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="City" name="city"  >
                        </div>

                        <div class="form-group col-sm-10">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" >
                        </div>

                        <div align="right"  class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        <div class="col-sm-10">
                                  Already have an account ?<a href="#" data-toggle="modal" data-target="#loginmodal"> Login</a>
                        </div>

                </form>
        </div>
    </div>
    </div>

      
    </body>
</html>

