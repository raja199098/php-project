
<?php 

mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$$conemail_id = $_POST['user_id'];
$first_name = $_POST['item_id'];
$last_name = $_POST['status'];
 
include 'common.php';

$user_Added_to_cart_query = "insert into users(user_id, item_id,status) values ('$user_id', '$item_id', 'Added to cart', )";
$user_Added_to_cart_submit = mysqli_query($con, $user_Added_to_cart_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['item_id'] = $email_id;
$_SESSION['id'] = mysqli_insert_id($con);
session_start();
echo  $_SESSION['id'];
die();
if (isset($_SESSION['email_id'])) {
  header('location: products.php');
 }
?>