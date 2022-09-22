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

     $person1 = new Person("julius", "blue", 28); 
     echo $person1->name;
     echo "<br>";
     echo $person1->eyeColor;
     echo "<br>";
     echo $person1->age;
     echo "<br>";
    //  we can still reference the method and set the name
     $person1->setName("John");
     echo $person1->name;


  ?>

</body>

</html>