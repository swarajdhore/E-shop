<?php
$con = mysqli_connect("localhost", "root", "", "e-shop","3308") or die(mysqli_error($con));
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
        
        
        <title>Contact Us |E-Store</title>
        <style>
             footer{
           padding-top: 10px; 
           padding-bottom:10px ;
           background-color: #101010;
           color:#9d9d9d;
           bottom: 0;
           width: 100%;
           
           }
        </style>
    </head>
    

    <body style="background-color: #ccffcc" >
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br><br><br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="title" >LIVE SUPPORT</h1>
		  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>
                  <p>Since years we have been serving our customers through our Live Technical Support. We make sure that our customers are not facing any problems in buying our products.
                  Feel Free to talk to us . Enter your query below and we will contact you back shortly.</p> 
          <div>
             <p></p>
          </div>
      </div>
        <div class="col-md-3">
         <img align="right" src="images/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>Get In Touch</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="mail.php">
				    
                    <div class="form-group col-sm-9">
				        <input type="text" name="name" class="form-control" required="required" placeholder="Name" >
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				    </div>
				    
                    <div class="form-group col-sm-9">
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>
                    <div class="form-group col-sm-9">
		    <button type="submit" class="btn btn-primary">Submit</button>	            
                    
                    <?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                                ?>
                     </div>
                </form>
                   
                    
                       
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Contact Info</h2>
	               <address>
				    <p>E-Store Innovations Pvt. Ltd.</p>
				    <p>BANGLORE Business Park,Banglore</p>
				    <p>India</p>
				    <p>Phone:(080) 2221111</p>
				    <p>Fax:(080) 2221112</p>
				    <p>Email: contact@estore.com</p>
	               </address>
	               
	            
            </div>
        </div>
    </div>
</div>
</body>    



      <?php include 'includes/footer.php'; ?>
    
</html>
