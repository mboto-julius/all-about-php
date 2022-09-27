<?php 

session_start(); 
require 'dbconnection.php';

?>

<?php include('includes/header.php'); ?>

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

    
    <?php include('includes/footer.php'); ?>