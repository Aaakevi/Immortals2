<!DOCTYPE html5>
<html>
    <head>
        <title>Contact page</title>
        <link rel="stylesheet" href=" css/bootstrap.min.css">
        <style>
          body{
            background-image:url("images/okay.jpg"); 
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
            <div class="row" >
              <div class="col-lg-6">
                 <h4 style="color:antiquewhite">If you wish to Subscribe to our website<br>Kindly fill in the following information</h4>
                <form style="color:antiquewhite" action="services.php" method="POST">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="enter your first name">
                    </div>

                    <div class="form-group">
                        <label>Second name</label>
                        <input type="text" class="form-control" name="secondname" placeholder="enter your second name">
                    </div>

                    <div class="form-group">
                        <label>Telephone</label>
                        <input type="number" class="form-control" name="telephone" placeholder="enter your telephone">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" placeholder="enter your email ">
                    </div>
                    <!-- Gender -->
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <!-- Movies-->
                    <div class="form-group">
                        <label>Best team</label>
                        <select class="form-control" name="bestteam" >
                            <option value="Fc Barcelona">Fc Barcelona</option>
                            <option value="Real Madrid">Real Madrid</option>
                            <option value="Atletico Madrid">Atletico Madrid</option>
                            <option value="Manchester City">Manchester City</option>
                            <option value="Manchester United">Manchester United</option>
                            <option value="Arsenal">Arsenal</option>
                            <option value="Liverpool">Liverpool</option>
                            <option value="Tottenham Spurs">Tottenham Spurs</option>
                            <option value="Chelsea">Chelsea</option>
                            <option value="Paris Saint German">Paris Saint German</option>
                        </select>
                    </div>
                    <hr> 
                    
                    <label for="">Approve</label>
                    <input type="checkbox" name="Approve">

                    <label for="">Disapprove</label>
                    <input type="checkbox" name="Disapprove">

                     
                   
                    <br>
                   <button type="submit" class="btn btn-success">Subscribe</button>
                </form>
            
              </div>
              
                  <div class="col-lg-6">
                   <h1 style="color:antiquewhite">Priveleges of Subscribers</h1><br>
                  <ul type="disc" style="color:antiquewhite">
                     <li>One is able to get first hand information about the website</li><br>
                     <li>Our subscription also ensures against third party cookies</li><br>
                     <li>A Member is able to learn more about the history in the sport</li><br>
                     <li>At the end of every month a member is acustomed to 50$</li><br>
                     <li>One is free to leave at any particular time according to convenience</li><br>
                     <li>The subscription also ensures a client against Adds</li> <br>
                     <li>Proper screen viewing and website efficiency</li><br>
                     <li>Subscription is also free at charge</li><br>
                     
                  </ul>
                </div>
          </div>
               
            
          <div class="row" >
              <?php
                 include("footer.html");
               ?>
          </div> 
        </div>
 
          
        
       
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>