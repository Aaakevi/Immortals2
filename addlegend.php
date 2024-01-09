<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <?php
        include("nav.html");
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
              <form action="processform.php" method="POST">
                    <div class="form-group">
                        <label>Legend</label><br>
                        <input type="text" name="Legend" class="form-control" placeholder="enter your name">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Legendyear</label><br>
                        <input type="number" name="Legendyear" class="form-control" placeholder="enter your the year">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Team</label><br>
                        <input type="text" name="Team" class="form-control" placeholder="enter your team">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Information</label><br>
                        <input type="text" name="Information" class="form-control" placeholder="enter your the description">
                    </div>
                    <button type="submit" class="btn-btn-success">Submit</button>
                </form>
            </div>
            <div class="col-lg-6">
                
            </div>
        </div>
    </div>
   
</body>
</html>