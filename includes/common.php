

<?php
$serverName ="localhost";
$userName ="root";
$password ="";
$dbName="test";

$con = mysqli_connect("localhost", "root", "", "ecommerce") ;
if(mysqli_connect_error()){
    echo "failed to conect";

}
echo "conect";


session_start();

?>