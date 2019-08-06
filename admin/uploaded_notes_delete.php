<?php
    require_once('./function/function.php'); 

    $id = $_GET['d'];
    $delete = " DELETE  FROM student WHERE file = '$id' ";
    if(mysqli_query($con,$delete)){
        echo '<script type="text/javascript"> window.location = "uploaded_notes_all.php" </script>';
    }
    else{
        echo "<script> alert('not success'); </script>";
    }
?>