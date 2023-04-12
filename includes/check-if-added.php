<?php
require 'includes/common.php';

function  check_if_added_to_cart($item_id){
require 'includes/common.php';


$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$select_query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and 
status='Added to cart'
";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
echo $total_rows_fetched;
if( mysqli_num_rows($select_query_result)>=1){
    return 1;}
    else{
        return 0;

    }
}


?>