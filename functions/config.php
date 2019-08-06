<?php 
    $con = mysqli_connect("localhost", "root", "", "management");
    if(!$con){
        echo "Database Connection Error!";
    }
?>