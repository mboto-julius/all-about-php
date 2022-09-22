<?php include 'includes/person.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SITE</title>
</head>

<body>

  <?php 

     $person1 = new Person();
     $person1->setName("Daniel");
     echo $person1->name; 

     echo "<br>";

     $person2 = new Person();
     $person2->setName("Timmy");
     echo $person2->name; 

  ?>

</body>

</html>