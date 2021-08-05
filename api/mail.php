<?php
$con = mysqli_connect("localhost", "root", "", "e-shop","3308") or die(mysqli_error($con));
?>
<?php
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  
  $message = $_POST['message'];
  $message = mysqli_real_escape_string($con, $message);
  
  $select_query = "INSERT INTO contact_us(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
  mysqli_query($con, $select_query) or die(mysqli_error($con));
  ?>
<?php
$error = "<span class='red'>We will soon get in touch with you</span>";
  header('location: contact.php?error='.$error );
  ?>
  