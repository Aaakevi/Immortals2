<h1>Contact details</h1>
                   <form>
                       <div class="form-group">
                           <label>First name</label>
                           <input type="text" class="form-control" name="first name" placeholder="enter your first name">
                       </div>
   
                       <div class="form-group">
                           <label>Second name</label>
                           <input type="text" class="form-control" name="secondname" placeholder="enter your second name">
                       </div>
   
                       <div class="form-group">
                           <label>Telephone</label>
                           <input type="tel" class="form-control" name="telephone" placeholder="enter your telphone">
                       </div>
   
                       <div class="form-group">
                           <label>Email</label>
                           <input type="email" class="form-control" name="email" placeholder="enter your email ">
                       </div>
                       <!--Best teams-->
                       <div class="form-group">
                           <label>Favorite team</label>
                           <select class="form-control" name="Favourite team">
                               <option value="Barcelona">Barcelona</option>
                               <option value="Real madrid">Real madrid</option>
                               <option value="Atletico">Atletico</option>
                               <option value="Sevilla">Sevilla</option>
                               <option value="Girona">Girona</option>
                           </select>
                       </div>

                       <hr> 
                       <div>
                         <label for="">Approved</label>
                         <input type="checkbox" name="approved">
   
                         <label for="">Denied</label>
                         <input type="checkbox" name="denied">
   
                         <br>
                         <button type="submit" class="btn btn-success">Submit</button>
                         
                        </div>
                         
                   
                   </form>
               </div>
   
               <div class="col-lg-6">
                   <h1>Contact information</h1>
                   
                     <p>First name shall be crosschecked</p>
                     <p>Second name shall be crosschecked</p>
                     <p>Telephone shall be reviewed</p>
                     <p>Email shall be scanned</p>
                     <p>Favourite team shall be processed</p>
                     <p>Approval or Denial</p>
                     
                    
               </div>
               <nav class="navbar navbar-expand-lg bg-black">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Immortals</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" href="Index.html">Index</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="Add.html">Add</a>
                      </li>
          
                      <li class="nav-item">
                        <a class="nav-link" href="Contact.html">Contact</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link" href="Display.html">Display</a>
                      </li>
                      
                        
                      
          
                    </ul>
                    
                  </div>
                </div>
              </nav>
              <div class="overlay"></div>
              <div class="carousel-content">
                <h3></h3>
                <p></p>
              </div>
              <html>
    <head>
        <title>Function</title>
    </head>
    <body>
       <?php
          function addition($a , $b){
          $sum= $a + $b;
          echo "the sum is $sum";
          }
         $a=30;
         $b=50;
     
         addition( $a , $b);
     ?>
    </body>
</html>
<div class="card" style="width:22rem; height:350px"; >
                      <div class="card-body">
                        <h4 class="card-title">Why i love programming</h4>
                        <ul>
                          <li>Python</li>
                          <li>Java</li>
                          <li>Javascript</li>
                          <li>Ruby</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
           <?php
              while($row=mysqli_fetch_assoc($result))
               {
                    ?>
                 <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-header">
                    <?php echo $row['firstname'] . "" . $row['secondname']; ?>                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $row['telephone']; ?></p>
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $row['email']; ?></p>
                    </div>
                    <div class="card-body">
                      <p class="card-text"><?php echo $row['gender']; ?></p>
                    </div>
                    
                     <div class="card-footer">
                      <?php echo $row['bestteam']; ?>
                   </div>
                  </div>
                    
                </div>
                <?php
                 }
               ?>
              </div>
                              


            