
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
        p{
          font-size: x-large;
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
          <div class="row" >
            <center>
              <h1 style="color:black"><i>The Immortals</i></h1>
              <h3  style="color:black"><i>Football's Greatest</i></h3>
            </center>
            <p  style="color:black"><b>
             
              "Greetings and a heartfelt welcome to our sprawling Football Legends Citadel, a grand repository of the sublime tales, unmatched prowess, and enduring legacies of the luminaries who have elevated the sport of football to a realm of unparalleled greatness. As you traverse the virtual corridors of this digital haven, you are not merely entering a website; you are embarking on an odyssey through the corridors of time, where the echoes of unforgettable goals and the thunderous applause for awe-inspiring performances reverberate through the very pixels that bring this legendary tapestry to life.

              Our Citadel stands as a monument to the giants of the beautiful game, a mosaic of talent and charisma, where the narratives of each football legend unfold like chapters in an epic saga. From the pioneers who laid the foundation of football's magic to the contemporary maestros who continue to redefine excellence, every legend showcased here is a beacon of inspiration, a living testament to the indomitable spirit that courses through the veins of this sport.

              Dive deep into the sagas of these football deities – the strikers whose lethal precision left goalkeepers in despair, the midfield maestros orchestrating symphonies on the pitch, and the defenders whose resolute walls denied entry to the most formidable opponents. Each page within this Citadel is a portal to an era, a chronicle of triumphs and tribulations, a kaleidoscope of footballing artistry.

              This is not merely a website; it is a digital mausoleum, where the exploits of football's finest are preserved in the amber of cyberspace. Whether you are a seasoned veteran of the footballing cosmos, a casual admirer, or a newcomer eager to explore the rich tapestry of the sport, our Citadel invites you to bask in the glory of the extraordinary, to relish the stories of those who dared to dream and, in doing so, became legends.

              Immerse yourself in the nostalgia of historic matches, savor the euphoria of championship conquests, and marvel at the brilliance that unfolds when the world's greatest players grace the hallowed turf. This isn't just a welcome; it's an invitation to partake in a symphony of footballing excellence, a celebration of the transcendent skill and undying passion that encapsulates the essence of the beautiful game.

              So, dear aficionado of football's grandeur, fasten your seatbelt as you prepare to embark on a monumental journey through the annals of sporting history. Welcome to our Football Legends Citadel, where the extraordinary becomes the norm, and the spirit of the sport resonates through every pixel, immortalizing the heroes who have etched their names into the very fabric of football's eternal narrative.
              </b></p>
          </div>
       
           
            <div class=row>
            <?php
              include("footer.html")
            ?>
            </div>
      </div>
        
       
      <script src="js/bootstrap.min.js"></script>
    </body>
</html>