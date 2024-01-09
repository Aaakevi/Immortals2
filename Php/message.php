<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="message.php" method="post">
    <input type="text" name="student"><br>
   <input type="submit">
   </form>

   <?php
    $grades = array("Jimmy"=>"10 in 10","Kevin"=>"10 in 10","Charles"=>"10 in 10","Taluga"=>"10 in 10");
    $grades["Amari"]="10 in 8";
    echo  $grades[$_POST["student"]];
   ?>
</body>
</html>