
<?php
require 'common.php';
mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
if(isset($_POST['login'])){

}
else{
  header("location: sinup.php");
}


$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT * FROM users_products INNER JOIN products_id='$item_id' AND user_id ='$user_id' and 
status='Added to cart'
";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
if( mysqli_num_rows($select_query_result)==0){
    "Add items to the cart first";}
    else{
      while($row = $total_rows_fetche($result)){
        $price= $row['price'] * $row['order_q'];
        $total += $price;
        
      }
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
    <title>cart page</title>
    <style>
    table, th, td {
  border: 1px solid rgb(218, 215, 215);
  border-collapse: collapse;
   width:40% ;
  
  
  margin-top: 10%;
  text-align: center;
  
}

table.center {
  margin-left: auto; 
  margin-right: auto;

  }
  footer{
    padding: 10px 0Px;
    background-color: #101010;
 Color:#9d9d9d;
    bottom: 0;
 width: 100%;
 text-align: center;
 margin-top: 32%;

}


    </style>
  </head>
  <body> 
    <?php
    include 'header.php'
    ?>

    <table class="center">
        <tr>
          <th
        <a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a>>Item Number </th>
          <th>Item Name</th>
          <th>Price</th>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp; &nbsp;</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td>Total</td>
          <td>Rs0/-</td>
          <td>
            <a href="success.html" class="btn btn-primary btn-lg">Confirm Order</a>
                
                  </td>
        </tr>
      </table>
     <?php 
     include 'footer.php'?>
  

  </body>
</html>