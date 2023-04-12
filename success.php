<?php
include 'common.php';
if (isset($_SESSION['email_id'])) {
  header('location: index.php');
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
    <title> success Page</title>
    <style>
        .success{ margin-top: 20%;
        text-align: center;}
        footer{
    padding: 10px 0Px;
    background-color: #101010;
 Color:#9d9d9d;
    bottom: 0;
 width: 100%;
 text-align: center;
 margin-top: 25%;

}

    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
              </button>
            <a href="#" class="navbar-brand">Lifestyles</a>
        
        </div>
        <div class="collapse navbar-collapse" id="#mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>login</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <diV class="success">
        <h2>  Thank you for shopping
            with us. <a href="Products.html">​Click</a> here​ to purchase any other item.
        </h2>
    </diV>
      <footer>
        <div class="container " >
        
       <p> copyright @ Lifestyle Store. All Rights Reserved ! Contact Us: 9110092072</p>
        </div>
          </footer>

  </body>
</html>