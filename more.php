<?php
    require_once("Php/connect.php");
    $query = "SELECT * FROM subscriptions";
    $result = mysqli_query($con , $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More</title>
    <link rel="stylesheet" href=" css/bootstrap.min.css">
</head>
<body class="bg-dark">
   <center><h1 style="color:white">All subscribers</h1></center> 
    <div class="row">
    <?php
              while($row=mysqli_fetch_assoc($result))
               {
                    ?>
                 <div class="col-md-4 mb-4">
                  <div class="card">
                    <div class="card-header">
                    <?php echo $row['firstname'] . "" . $row['secondname']; ?> </div>
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
    <script src="js/bootstrap.min.js"></script>
</body>
</html>