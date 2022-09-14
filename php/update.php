<?php include "db.php";

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query Failed' . mysqli_error($connection));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="form" action="/php/update.php" method="post">
                    <input class="user-input" placeholder="Username" name="username" type="text">
                    <br><br>
                    <input class="user-input" placeholder="Password" name="password" type="password">
                    <br> <br>
                    <select name="id">
                        <?php
                        while ($row = mysqli_fetch_row($result)) {
                            $id = $row['id']
                        ?>
                            <option> <?php echo $id; ?></option>
                        <?php } ?>
                    </select>
                    <br><br>
                    <input name="submit" type="submit" value="UPDATE">
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>