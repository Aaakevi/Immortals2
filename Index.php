
<?php
        require_once("Php/connect.php");
        $query = "select * from subscriptions";
        $result =mysqli_query($con , $query);
    ?><!DOCTYPE html5>
<html>
    <head>
        <title>Immortals</title>
        <link rel="icon" type="image/x-icon" href="images/logo.PNG">
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <style>
          body{
            background-image:url("images/ball8.jpg"); 
            background-size:cover;
            background-attachment:fixed;
          }
        img{
          object-fit: cover;
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
              <center>
                <div id="carouselExampleSlideOnly" class="carousel slide bg-secondary" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                    <img src="images/nice.jpg" alt="GFG" width="1509" height="590" alt="...">
                    
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/ball5.jpg" alt="GFG" width="1560" height="590" alt="...">
                   
                    </div>
                    <div class="carousel-item">
                    <img src="images/ball.jpeg" alt="GFG" width="1509" height="590" alt="...">
                  
                    </div>

                    <div class="carousel-item">
                    <img src="images/legit.webp" alt="GFG" width="1509" height="590" alt="...">
                  
                    </div>

                    <div class="carousel-item">
                    <img src="images/dope.jpg" alt="GFG" width="1509" height="590" alt="...">
                  
                    </div>

                  
                  </div>
                  </div>
               </center>
           </div>
           <center>
              <h1 style="color:black"><b><i>The Immortals</i></b></h1>
              <h3  style="color:black">Footballs Greatest</h3>
           </center>
          

       
           
            <div class=row>
            <?php
              include("footer.html")
            ?>
            </div>
      </div>
        
       
      <script src="js/bootstrap.min.js"></script>
    </body>
</html>