<?php 

session_start(); 
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
    <title>Student Edit</title>
  </head>
  <body>

    <div class="container mt-5">
        
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
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

                        <!-- form inside if condition -->
                            <form action="code.php" method="POST">
                                <!-- hidden id field -->
                                <input type="hidden" name="id" value="<?= $student['id']; ?>">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" value="<?= $student['name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $student['email']; ?>"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?= $student['phone']; ?>"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" value="<?= $student['course']; ?>"  class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update"  class="btn btn-primary">Update</button>
                            </div>
                        </form>

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