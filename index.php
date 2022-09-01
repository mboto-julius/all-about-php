<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SITE</title>
</head>

<body>

  <!-- The echo function is embedded with h1 tag -->
  <h1><?php echo "Hello World! Its Me!"; ?></h1>

  <?php

  // $my_array = array(267, 74754, 637, "567", 7647);

  // $names = [
  //   "first_name" => "Julius",
  //   "middle_name" => "John",
  //   "last_name" => "Schendwer"
  // ];

  // print_r($my_array);
  // echo "<br>";
  // var_dump($my_array);
  // echo "<br>";
  // echo $my_array[3];
  // echo "<br>";
  // echo "<br>";
  // print_r($names);
  // echo "<br>";
  // echo $names['first_name'];
  // echo "<br>";
  // echo $names['middle_name'];
  // echo "<br>";
  // echo $names['last_name'];
  // echo "<br>";
  // echo $names['first_name'] . " " . $names['middle_name'] . " " . $names['last_name'];

  // control structures

  // Swith statements are great when you are testing one condition against multiple value


  echo "<p>switch statement</p>";

  $number = 100;

  switch ($number) {
    case 34:
      echo "is it 34";
      break;

    case 54:
      echo "is it 54";
      break;

    case 10:
      echo "is it 10";
      break;

    case 30:
      echo "is it 30";
      break;

      // if the  
    default:
      echo "we could not find anything";
      break;
  }


  echo "<p>While loop</p>";

  $counter = 0;

  while ($counter < 10) {
    echo $counter . " ";
    $counter++;
  }

  echo "<p>for loop</p>";

  for ($value = 0; $value <= 10; $value++) {
    echo $value . " ";
  }

  echo "<p>foreach loop | works only on array</p>";
  $elements = array(343, 434, 766, 724, 8547, 245);

  foreach ($elements as $element) {
    echo $element . "," . " ";
  }

  echo "<h1>Practical!</h1>";
  echo "<em>if statement</em>";


  echo "<em>for loop  | to display 10 numbers</em>";
  echo "<br></br>";
  for ($i = 0; $i < 11; $i++) {
    echo $i . "," . " ";
  }

  echo "<em>switch statement</em>";

  // function here

  echo "<br>";
  echo "<br>";
  echo "<h1>Function</h1>";

  function say_something()
  {
    echo "hello student, do you like the class? yes? okay great!";
  }

  say_something();


  function greeting($message)
  {
    echo $message;
  }

  echo "<br>";
  echo "<br>";
  greeting("Hi, Welcome to this page!!!");
  echo "<br>";
  echo "<br>";
  greeting("Hello, Dear Customer Welcome!!!");


  function calculate($number1, $number2)
  {
    $sum = $number1 + $number2;
    echo $sum;
  }

  echo "<br>";
  echo "<br>";
  calculate(20, 56);

  echo "<br>";
  echo "<br>";
  echo "<h1>Function that return value</h1>";

  function addNumber($num1, $num2)
  {
    $sum = $num1 + $num2;
    return $sum;
  }

  $result = addNumber(64, 36);

  $result = addNumber(100, $result);

  echo $result;

  echo "<br>";
  echo "<br>";
  echo "<h1>Built in function</h1>";

  echo pow(10, 10);
  echo "<br>";
  echo "<br>";
  echo rand();

  echo "<br>";
  echo "<br>";
  echo rand(1, 1000);

  echo "<br>";
  echo "<br>";
  echo "<h1>Calculate the number of string</h1>";

  $string = "Dear user, Welcome to this page!!!";

  echo strlen($string);
  echo "<br>";
  echo "<br>";
  echo strtoupper($string);
  echo "<br>";
  echo "<br>";
  echo strtolower($string);

  echo "<br>";
  echo "<br>";
  echo "<h1>Array Function</h1>";

  $list = [1, 23, 56, 124, 45, 75, 97, 335, 165, 365, 0];
  echo max($list);
  echo "<br>";
  echo "<br>";
  echo min($list);
  echo "<br>";
  echo "<br>";
  print_r($list);

  ?>

</body>

</html>