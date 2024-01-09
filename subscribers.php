    <?php
        require_once("Php/connect.php");
        $query = "select * from subscriptions";
        $result =mysqli_query($con , $query);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscriptions</title>
    <link rel="stylesheet" href=" css/bootstrap.min.css">
   
</head>
<body class="bg-dark">
  
    <div class="container-fluid">
        <div class="row">
            <?php
                include("nav.html");
            ?>
        </div>
        <div class="row mt-5">
            <div class="col">
              <div class="card mt-5">
                <div class="card-header">
                    <h2>Subscribers</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Second Name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Best team</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <?php
                                while($row=mysqli_fetch_assoc($result))
                                {
                            ?>
                            
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['secondname']; ?></td>
                        <td><?php echo $row['telephone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['bestteam']; ?></td>
                        <td><a href="updateform.php?id=<?php echo $row['ID'];?>">UpdateData</a> </td>
                      </tr>


                        <?php
                             }
                        ?>
                    </table>
                </div>
              </div>
            </div>
         </div>
    </div>
   
  
</body>
</html>