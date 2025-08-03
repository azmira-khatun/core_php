<?php
$conn= mysqli_connect("localhost","root","","compani_db");
if(!$conn){
    die("connection Failed.");
}
echo "connection sucessfully";
?>

