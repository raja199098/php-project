<?php
    require_once('includes/common.php');

    if (isset($_SESSION['email'])) {
      header('location: products.php');
     }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet"  type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Khushiya.in</title>
    
   
  </head>
  <body>
    <?php
     include 'includes/header.php'
    ?>
      <div id="banner-image"class="img-responsive " alt="responsive image">
        <div class="container">
          <div id="banner-content" >
          <h1>We sell Lifestyle</h1>
              <p>Flat 40% OFF on premium brands</p><br>
              <a href="Products.php" class="btn btn-danger btn-lg">Shop Now</a>

          </div>
      </div>
  
   

      </div>  
      <div class="container">
          <div class="items">
        
                    <a href="#" >
                  <img src="photo/4.jpg" class="thumbnail">
                       <div class="caption">
                              <h2>Cameras</h2>
                         <p> Choose among the best available in the world</p>
                         </div>
                        </a>
                        </div>
                       
                       <div class="items">
                           <a href="#" >
                        <img src="photo/12.jpg" class="thumbnail">
                             <div class="caption">
                                    <h2>Watch</h2>
                               <p> Original watches from the best  brands</p>
                               </div>
                              </a>
                             </div>
                            
                             <div class="items">
                                 <a href="#" >
                            <img src="photo/6.jpg" class="thumbnail">
                                 <div class="caption">
                                        <h2>Shirt</h2>
                                   <p> Our exquisite collection of shirts to</p>
                                   </div>
                                  </a>
                                 </div>
               
      </div> 
                                     
        <?php
              include 'includes/footer.php'
        ?>

  </body>
  </html>