<?php
    require_once('./function/function.php'); 

    $id = $_GET['d'];
    $delete = " DELETE  FROM notice WHERE id = '$id' ";
    if(mysqli_query($con,$delete)){
        echo '<script type="text/javascript"> window.location = "notice_all.php" </script>';
    }
    else{
        echo "<script> alert('not success'); </script>";
    }
?>