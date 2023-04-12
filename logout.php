<?php
session_start();
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION['email_id'];
} else {
    header('location: index.php');
}

session_unset();
session_destroy();
?>