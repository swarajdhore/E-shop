<?php
require "includes/common.php";
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location: login.php');
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
        
        
        <title>Cart|E-Store</title>
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
    <div class="container_fluid" id="content">
<?php 
include 'includes/header.php'; 
?>
<div class="row decor_bg">
<div class="col-md-6 col-md-offset-3">
<table class="table table-striped">


<!--show table only if there are items added in the cart-->
<?php
$sum = 0;
$id=0;
$user_id = $_SESSION['user_id'];
$select_query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
$result = mysqli_query($con, $select_query)or die($mysqli_error($con));
if (mysqli_num_rows($result) >= 1) {
?>
<thead>
<tr>
<th>Item Number</th>
<th></th>
<th>Price</th>
</tr>
</thead>
<tbody>
<?php
while ($row = mysqli_fetch_array($result)) {
$sum+= $row["Price"];
$id .= $row["id"] . ", ";
echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
}
$id = rtrim($id, ", ");
echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
?>
</tbody>
<?php
}else{
?>
<thead>
<tr>
<th>Item Number</th>
<th>Price</th>
<th></th>
</tr>
</thead>

<?php
}
?>
</table>
</div>
</div>
</div>

</body>
</html>

