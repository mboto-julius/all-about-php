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
  
  echo Person::$drinkingAge;
  echo "<br>";

  Person::setDrinkingAge(21);
  echo Person::$drinkingAge;
  echo "<br>";

  // creating an object
  $person1 = new Person("Daniel", "Blue", 28);
  echo $person1->getDrinkingAge();

  ?>

</body>

</html>