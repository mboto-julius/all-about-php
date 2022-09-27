<?php 

require 'dbconnection.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student View Details</title>
  </head>
  <body>

    <div class="container mt-5">
        
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- update code here -->
                        <!-- checking if the id present or not (use get method) -->
                        <?php 
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($connection, $_GET['id']);
                            $query = "SELECT * FROM students  WHERE id='$id'";
                            $query = mysqli_query($connection, $query);

                            // checking if it present or not
                            if(mysqli_num_rows($query) > 0)
                            {
                                $student = mysqli_fetch_array($query);
                        ?>
                            <div class="mb-3">
                                <p><span class="mx-3">Name:</span><?= $student['name']; ?></p>   
                            </div>
                            <div class="mb-3">
                                <p><span class="mx-3">Email:</span><?= $student['email']; ?></p>   
                            </div>
                            <div class="mb-3">
                                <p><span class="mx-3">Phone:</span><?= $student['phone']; ?></p>   
                            </div>
                            <div class="mb-3">
                                <p><span class="mx-3">Course:</span><?= $student['course']; ?></p>   
                            </div>
                        <?php
                              }else{
                                  echo "<h4>No such id found!</h4>";
                              }
                              }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>