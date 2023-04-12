<?php
require 'includes/common.php';

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
    <title> Product.page</title>
    <style>
        
        footer{
    padding: 10px 0Px;
    background-color: #101010;
 Color:#9d9d9d;
    bottom: 0;
 width: 150%;
 text-align: center;
 margin-top: 10%;
}
</style>
  </head>
  <body>
   <?php
   include 'includes/header.php';
   
   ?>
    <?php
   include 'includes/Check-if-added.php';
   
   ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                    have all in one place.</p>
            </div>
            <div class="container">
                <row class="text-center">
                    <div class="col-md-3 col-sm-6">
                        
                        <img  class="thumbnail img-responsive"  src="photo/5.jpg" >
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                       <p> Price:Rs 36000.00</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>

                    
                       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                       </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-6">
                        
                        <img  class="thumbnail img-responsive"  src="photo/2.jpg" >
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                       <p> Price:Rs 40000.00</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                       </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-6">
                        
                        <img  class="thumbnail img-responsive"  src="photo/3.jpg" >
                        <div class="caption">
                            <h3>Sony DSLR11</h3>
                       <p> Price:Rs 50000.00</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                       </div>
                       
                    </div>
                    <div class="col-md-3 col-sm-6">
                        
                        <img  class="thumbnail img-responsive"  src="photo/4.jpg" >
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                       <p> Price:Rs 80000.00</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                       </div>
                       
                    </div>
                </row>
                <row class="text-center">
                    <div class="col-md-3 col-sm-6">
                        
                        <img  class="thumbnail img-responsive"  src="photo/9.jpg" >
                        <div class="caption">
                            <h3>Titan Model#301</h3>
                       <p> Price:Rs 13000.00</p>
                       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                       </div>
                       </div>
        
               
               
                <div class="col-md-3 col-sm-6">
                    
                    <img  class="thumbnail img-responsive"  src="photo/10.jpg" >
                    <div class="caption">
                        <h3>Titan Model#201</h3>
                   <p> Price:Rs 3000.00</p>
                   <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
                   <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
                   </div>
                   </div>
        
           
        
            <div class="col-md-3 col-sm-6">
                
                <img  class="thumbnail img-responsive"  src="photo/11.jpg" >
                <div class="caption">
                    <h3>HMT Milan</h3>
               <p> Price:Rs 8000.00</p>
               <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
               <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
               </div>
               </div>
        
       

        <div class="col-md-3 col-sm-6">
            
            <img  class="thumbnail img-responsive"  src="photo/10.jpg" >
            <div class="caption">
                <h3>Faber Luba#111</h3>
           <p> Price:Rs 18000.00</p>
           <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
           <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
           </div>
           </div>
    </row>

<row class="text-center">
    
    <div class="col-md-3 col-sm-6">
        
        <img  class="thumbnail img-responsive"  src="photo/8.jpg" >
        <div class="caption">
            <h3>H&W</h3>
       <p> Price:Rs 1000.00</p>
       <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
       <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
       </div>
       </div>
    


<div class="col-md-3 col-sm-6">
    
    <img  class="thumbnail img-responsive"  src="photo/6.jpg" >
    <div class="caption">
        <h3>Lusi Phil</h3>
   <p> Price:Rs 1000.00</p>
   <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
   <input type="submit" value="Add to cart" class="btm btn-primary btn-block">
   </div>
   </div>



<div class="col-md-3 col-sm-6">

<img  class="thumbnail img-responsive"  src="photo/13.jpg" >
<div class="caption">
    <h3>John Zok</h3>
<p> Price:Rs 1500.00</p>
<?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
  
<input type="submit" value="Add to cart" class="btm btn-primary btn-block">
</div>
</div>



<div class="col-md-3 col-sm-6">

<img  class="thumbnail img-responsive"  src="photo/14.jpg" >
<div class="caption">
<h3>Jhalsani</h3>
<p> Price:Rs 1300.00</p> <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) 
                          {
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to 
                            cart</a>';
                        }
                      else {

 ?>
<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block 
btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
<input type="submit" value="Add to cart" class="btm btn-primary btn-block">
</div>
</div>
</row>

</div>
<?php 
include 'includes/footer.php'
?>

  </body>
</html>
