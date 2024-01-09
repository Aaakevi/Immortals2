<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $d= date("D");
        if($d=="Tue"){
            echo "Have a nice week";
        }
        elseif($d=="Wed"){
            echo "Have a fair week";
        }
        else {
            echo "Have a bad week";
        }
    ?>
</body>
</html>