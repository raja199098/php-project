<?php
// Include the common.php file
require_once('includes/common.php');

// Check if the user is already logged in
if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));

// Check if the login form was submitted
if(isset($_POST['email']) && isset($_POST['password'])) {

    // Retrieve the form data and escape it for security
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Encrypt the password using md5
    $encrypted_password = md5($password);

    // Query the database for a matching user email and password
    $sql = "SELECT id, email FROM users WHERE email='$email' AND password='$encrypted_password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    // If a matching user is found, set session variables for the user ID and email and redirect to the home page
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        // If no matching user is found, display an error message and redirect back to the login page
        $error_message = "Invalid email or password";
        header("Location: login.php?error_message=".urlencode($error_message));
        exit();
    }
}

// If the login form was not submitted, redirect to the login page
header("Location: login.php");
exit();
