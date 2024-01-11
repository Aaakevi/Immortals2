<!DOCTYPE html5>
<html>
    <head>
        <title>Information</title>
        <link rel="icon" type="image/x-icon" href="images/logo.PNG">
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <style>
          body{
            background-image:url("images/wow.jpg"); 
            background-size:cover;
            background-attachment:fixed;
          }
          h3{
            color:black;
          }
          p{
            color:antiquewhite
          }
          img{
            border-radius:10px;
          }
        </style>
    </head>
    <body bgcolor="blue">
     
    <div class="container-fluid">
        <div class=row>
             <?php
               include("nav.html");
              ?>"
        </div>
        <center>
        <h1 style="font-size:50px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:ivory;
        "><i>Best 15 of The Immortals</i></h1>
        </center>
         <?php
             include("dispay.php");
         ?>

        
            <div class="row" >
             <?php
               include("footer.html");
              ?>

            </div>
    </div>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>