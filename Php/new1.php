<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       print date("d/m/y  G:i:s", time());
       echo "<br>";
       
      print "Today is";
      print date("l/j/F/Y,  \a\\t  g:i a", time())
    ?>
</body>
</html>