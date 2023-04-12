<?php
include 'common.php';
if (isset($_SESSION['email_id'])) {
    header('location: index.php');
   }
   
require 'common.php';

$password = $_POST['old password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=enter correct password');
}

$password = $_POST['New password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=enter correct password');
}

$password = $_POST['Re-type New password'];
if (strlen($password) < 6) {
  header('location: index.php?password_error=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);



$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT id,  password, FROM users";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));

$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);




$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();
$first_name = $_GET['password'];
$user_id = $_SESSION['id'];
$update_name_query = "UPDATE users SET passwor= '$password' WHERE id = '$user_id'";
$update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
echo "password updated";


if (isset($_SESSION['password'])) {
  header('location: setting.php');
 }


?>