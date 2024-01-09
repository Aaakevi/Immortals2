<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $date_array= getdate();
       foreach($date_array as $key => $val ){
        print "$key = $val<br>";
       }
       $formated_date = ("Today's date:");
       $formated_date .=  $date_array["mday"] . "/";
       $formated_date.= $date_array["wday"]. "/";
       $formated_date= $date_array["year"];

       print $formated_date;
    ?>
</body>
</html>