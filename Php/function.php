<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Defining a Php function*/
        function addition($x , $y){
            $sum=$x+$y;
            echo "The wonderful sum is $sum";
           
        }
        $x= 40;
        $y= 50;
        /*Calling a Php function*/
         addition($x , $y);
    ?>
</body>
</html>