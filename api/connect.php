<?php 
$connect = mysqli_connect("localhost","root","","voting") or die("connection field!");
if($connect){
    echo"Connected!";
}else{
    echo "not connected!";
}



?>