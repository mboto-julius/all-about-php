<?php

if (isset($_POST['submit'])) {
  $name = htmlentities($_POST['name']);
  // name of the cookie, parameter and time expire
  setcookie('name', $name, time() + 3600);
  // header function to redirect to different page
  header('Location: php/page.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP cookie</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="Name">Name:</label><br>
    <input type="text" name="name"><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>

</html>