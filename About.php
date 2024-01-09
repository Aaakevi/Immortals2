<!DOCTYPE html5>
<html>
    <head>
        <title>About page</title>
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <style>
          body{
            background-image:url("images/ballondor.jpg"); 
            background-size:cover;
            background-attachment:fixed;
          }
          p{
            color:antiquewhite;
          }
        </style> 
    </head>
    <body>
         <div class="container-fluid">
           <div class="row">
             <?php
               include("nav.html");
              ?>
             </div>
             <div class="row">
             <center><h1 style="color:white"><i>Acknowleging Football's Greatest</i></h1></center>
               </div>
             
              <div class="row"  >
                <?php
                  include("footer.html");
                ?>

              </div>
         </div>

        <script src="js/bootstrap.min.js"></script>
       
    </body>
</html>

