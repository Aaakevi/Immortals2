<?php
    require_once("Php/connect.php");

    $name=$_POST['Legend'];
    $year=$_POST['Legendyear'];
    $team=$_POST['Team'];
    $ds=$_POST['Information'];

    $query = "INSERT INTO legends (Legend,Legendyear,Team,Information) VALUES(?,?,?,?)";

    $stmt=mysqli_prepare($con , $query);

    mysqli_stmt_bind_param($stmt,"ssss",$name,$year,$team,$ds);

    mysqli_stmt_execute($stmt);
    echo "data submitted successfully";
?>