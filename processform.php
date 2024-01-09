<?php
    require_once("Php/connect.php");

    $name=$_POST['Legend'];
    $year=$_POST['Legendyear'];
    $team=$_POST['Team'];
    $ds=$_POST['Information'];

    $query = "INSERT INTO legends (Legend,Legendyear,Team,Information) VALUES(?,?,?,?)";

    $statement=mysqli_prepare($con , $query);

    mysqli_stmt_bind_param($statement,"ssss",$name,$year,$team,$ds);

    mysqli_stmt_execute($statement);
    echo "data submitted successfully";
?>