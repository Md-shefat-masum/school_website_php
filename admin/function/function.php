<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "management";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $db_name);

    // Check connection
    if (!$con) {
        echo " db false";
    }
?>