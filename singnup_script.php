<?php
require "includes/common.php";
// $email = $_POST['email_id'];
// $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
// if (!preg_match($regex_email, $email)) {
//   header('location: index.php?email_error=enter correct email');
// }
// $password = $_POST['password'];
// if (strlen($password) < 6) {
//   header('location: index.php?password_error=enter correct password');
// }
// $email = mysqli_real_escape_string($con, $email);
// $password = mysqli_real_escape_string($con, $password);

// $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
// $select_query = "SELECT id, email, first_name FROM users";
// $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

// $con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
// $select_query = "SELECT id, email, first_name FROM user";
// $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
// $total_rows_fetched = mysqli_num_rows($select_query_result);
// echo $total_rows_fetched;

// if ( mysqli_num_rows($select_query_result)>0)
// {
//     echo'email id already exists ';
// }
// else
$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
session_start();

// Store the form data in variables
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email_id']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$phone=mysqli_real_escape_string($con, $_POST['Mobile']);
$Address=mysqli_real_escape_string($con, $_POST['Address']);
$City=mysqli_real_escape_string($con, $_POST['City']);

$query = "insert into users( name,  email_id, password, Mobile, Address,City) values ('$name' ,'$email', '$password', '$phone', '$Address','$City')";
 mysqli_query($con, $query ) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email_id'] = $email_id;
$_SESSION['id'] = mysqli_insert_id($con);





session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".($_SESSION ['email_id']);
} else {
  echo "Hello Guest";
}
if (isset($_SESSION['email'])) {
    header('location: products.php');
   } 


?>


