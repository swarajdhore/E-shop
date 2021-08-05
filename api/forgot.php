<?php
session_start();
require "includes/common.php";
if(isset($_POST['submit']))
{
    $id = $_POST['id'];
    $result = mysqli_query($con,"SELECT * FROM users where id='" . $_POST['id'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_id=$row['id'];
	$email=$row['email'];
	$password=$row['password'];
	if($id==$fetch_id) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: $email ";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='user_id'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>



