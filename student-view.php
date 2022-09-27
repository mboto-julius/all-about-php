<?php 

require 'dbconnection.php';

?>

<?php include('includes/header.php'); ?>

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

    <?php include('includes/footer.php'); ?>