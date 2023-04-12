<?php
include 'common.php';
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$email = mysqli_real_escape_string($con, $_POST['id']);
$first_name = mysqli_real_escape_string($con, $_POST['user_id']);

$user_deletion_query = "remove into products(user_id,item_id) values ('$user_id', '$item_id', )";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
if (isset($_SESSION['item_id'])) {
    header('location: cart.php');
   }
?>