<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <form action="php/result.php" method="POST">
    <label for="Name">Name:</label><br>
    <input type="text" name="name"><br><br>
    <label for="Password">Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="submit">
  </form>
</body>

</html>