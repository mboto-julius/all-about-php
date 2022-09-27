<?php

session_start();
// include database
require 'dbconnection.php';

?>

<?php include('includes/header.php'); ?>

    <div class="container mt-5">
      <!-- message appear  -->
      <?php include('message.php'); ?>
       
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Student details
              <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  // fetch data from database
                  $query = "SELECT * FROM students";
                  $query = mysqli_query($connection, $query);

                  // check the number of rows, if is greater than zero => show the number of rows
                  if(mysqli_num_rows($query) > 0){
                    foreach($query as $student){
                  ?>
                      <tr>
                        <td><?= $student['id']; ?></td>
                        <td><?= $student['name']; ?></td>
                        <td><?= $student['email']; ?></td>
                        <td><?= $student['phone']; ?></td>
                        <td><?= $student['course']; ?></td>
                        <!-- add action button -->
                        <td>
                          <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                          <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                          <form action="code.php" method="POST" class="d-inline">
                              <button type="submit" name="delete" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                  <?php
                    }
                  }else{
                    echo "<h5>No records found</h5>";
                 ; }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('includes/footer.php'); ?>