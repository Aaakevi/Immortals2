
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updateform</title>
    <link rel="icon" type="image/x-icon" href="images/logo.PNG">
    <link rel="stylesheet" href=" css/bootstrap.min.css">
</head>
<body class="bg-dark text white">
    <div class="row">
        <?php
        include("nav.html");
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        require_once ("Php/connect.php");

                        $query= "SELECT*FROM subscriptions WHERE id = ?";
                        $stmt = mysqli_prepare($con , $query);
                        mysqli_stmt_bind_param($stmt, "i", $id);
                        mysqli_stmt_execute($stmt);
                        $result= mysqli_stmt_get_result($stmt);
                        $data = mysqli_fetch_assoc($result);
                    
               if ($data){
                    
                ?>
              <form action="processupdate.php" method="POST"  >
                  <input type="hidden" name="ID" value="<?php echo $data['ID']; ?>">
                     
                    <div class="form-group">
                        <label style="color:white">First Name</label><br>
                        <input type="text" value="<?php echo $data['firstname']; ?>" name="firstName" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="color:white">Second Name</label><br>
                        <input type="text"  value="<?php echo $data['secondname']; ?>" name="secondName" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="color:white">Telephone</label><br>
                        <input type="number" value="<?php echo $data['telephone']; ?>" name="telephone" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label style="color:white">Email</label><br>
                        <input type="text" value="<?php echo $data['email']; ?>" name="email" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label style="color:white">Gender</label><br>
                        <input type="text"  value="<?php echo $data['gender']; ?>" name="gender" class="form-control" >
                    </div><br>
                    <div class="form-group">
                        <label style="color:white">Best team</label><br>
                        <input type="text" value="<?php echo $data['bestteam']; ?>" name="bestteam" class="form-control">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            
                 <?php
                    }
                     }
                 ?>
            </div>
            <div class="col-lg-6">
                
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>