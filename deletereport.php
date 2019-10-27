<?php

include 'db.php';

if (!empty($_GET)) {
    $did= $_GET['did'];

    $query = "DELETE FROM receipt WHERE receipt_id = '$did'";

    $res = mysqli_query($link,$query);
    if($res){
        header('location:allreport.php');
    }else{
        echo "Faild to delete record";
    }
}
?>
