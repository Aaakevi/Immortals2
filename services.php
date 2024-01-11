<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href=" css/bootstrap.min.css">
    <style>
          body{
            background-image:url("images/wow.jpg"); 
            background-size:cover;
            background-attachment:fixed;
          }
        
        </style>
</head>
<body>
    <div class="row">
        <?php
            include("nav.html");
        ?>
    </div>
    <div class="row">
       <?php
           require_once("Php/connect.php");

           $fn=$_POST['firstname'];
           $sn=$_POST['secondname'];
           $tel=$_POST['telephone'];
           $em=$_POST['email'];
           $gd=$_POST['gender'];
           $bt=$_POST['bestteam'];

           $query="INSERT INTO subscriptions (firstname,secondname,telephone,email,gender,bestteam) VALUES (?,?,?,?,?,?)";
           $stmt=mysqli_prepare($con , $query);
           mysqli_stmt_bind_param($stmt,"ssssss", $fn, $sn , $tel , $em , $gd, $bt);
           mysqli_stmt_execute($stmt);
           header("Location: subscribers.php");
       ?>
    </div>
   <center>
   <h1 style="color:antiquewhite"><u><i>You are now a fulltime subscriber</i></u></h1>
   </center> 
</body>
</html>
