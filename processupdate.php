<?php
   if($_SERVER["REQUEST_METHOD"]== "POST"){
        require_once "Php/connect.php";

        $query ="UPDATE subscriptions SET firstName = ?, secondName= ?,
        telephone = ?, email= ?, gender = ?, bestTeam=?, WHERE id =?,";
        $id =$_POST['ID'];
        $fn =$_POST['firstName'];
        $sn =$_POST['secondName'];
        $tel =$_POST['telephone'];
        $em =$_POST['email'];
        $gd =$_POST['gender'];
        $bt =$_POST['bestteam'];

        $stmt = mysqli_prepare($con , $query);

        mysqli_stmt_bind_param($stmt , "ssssssi", $fn ,$sn, $tel , $em 
        , $gd , $bt , $id);

        mysqli_stmt_execute($stmt);

        header("Location: ../subscribers.php");
        exit();
   }
   else{
    echo "Data failed";
   }
?>