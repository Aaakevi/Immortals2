<!DOCTYPE html5>
<html>
    <head>
        <title>Immortals</title>
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <style>
          body{
            background-image:url("images/ball8.jpg"); 
            background-size:cover;
            background-attachment:fixed;
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
           
        
           
            <div  >
            <center>
              
               <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
                     <div class="carousel-inner ">
                      <div class="carousel-item active">
                      
                        <img src="images/ball.jpeg" alt="GFG" style ="object-fit:contain " class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                      
                        <img src="images/ball2.jpg" alt="GFG" width="600" height="400" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="images/ball3.jpeg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="images/ball4.jpeg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                      
                        <img src="images/ball5.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="images/ball6.avif" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                      
                        <img src="images/ball7.jpeg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                        
                        <img src="images/ball8.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                      <div class="carousel-item">
                       
                        <img src="images/ball9.jpg" alt="GFG" width="600" height="500" class="d-block w-50" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                
                </div>
              </center>
           </div>
           <center>
              <h1 style="color:white"><b><i>The Immortals</i></b></h1>
              <h3  style="color:white">Footballs Greatest</h3>
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