<?php
    require_once('./function/function.php'); 

    $id = $_GET['d'];
    $delete = " DELETE  FROM stdinfo WHERE Id = '$id' ";
    if(mysqli_query($con,$delete)){
        echo '<script type="text/javascript"> window.location = "all_student.php" </script>';
    }
    else{
        echo "<script> alert('not success'); </script>";
    }
?>