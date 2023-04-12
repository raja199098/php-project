<?php
    require "includes/common.php";
if (isset($_SESSION['email'])) {
    header('location: products.php');
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
    <title>Signup page</title>
    <style>
        .row{ margin-top: 10%;}
        footer{
    padding: 10px 0Px;
    background-color: #101010;
 Color:#9d9d9d;
    bottom: 0;
 width: 100%;
 text-align: center;
 margin-top: 10%;

}

    </style>
  </head>
  <body>
    <?php
    include 'includes/header.php'
    ?>
      <div class="container">
          <div class="row">
              <div class="col-xs-4 col-xs-offset-4">
                  <h1>SIGN UP</h1>
                  <form method="post" action="singnup_script.php">
                      <div class="forms-group">
                          
                          <input type="text" class="form-control" name="name" placeholder="Name" required="true"pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-za-z\s]{0,}$"><br>
                        
                          
                          <input type="email" class="form-control" name="email_id" placeholder="Email"required="true"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+/.{a-z}{2,3}$"><br>
                          
                          <input type="number" class="form-control" name="password" placeholder="password" required="true"pattern=".{10,}"><br>
                          
                          <input type="Mobile-number" class="form-control" name="Mobile" placeholder="Contact">
                          <br>
                          <input type="text" class="form-control" name="Address" placeholder="Address"><br>
                          <input type="text" class="form-control" name="City" placeholder="City"><br>
                         
                      </div>
                      
                      <input type="submit" value="submit" class="btm btn-primary ">
                  </form>
              </div>
          </div>
      </div> 
      <?php
      include 'includes/footer.php'
      ?> 
    
          </footer>

  </body>