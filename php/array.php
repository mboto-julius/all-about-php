<?php

$prices = array('Tires' => 100, 'Oil' => 10, 'Spark Plug' => 20);

foreach ($prices as $key => $value) {
    echo $key . " - " . $value . "<br/>";
}


echo "<br/>";
echo "<br/>";


$products = array(
    array('TIR', 'Tires', 100),
    array('OIL', 'Oil', 10),
    array('SPK', 'Spark Plugs', 4)
);

for ($row = 0; $row < 3; $row++) {
    for ($column = 0; $column < 3; $column++) {
        echo '|' . $products[$row][$column];
    }
    echo '| <br/>';
}

// create column names instead of numbers
$bobproducts = array(
    array(
        'code' => 'TIR',
        'Description' => 'Tires',
        'Price' => 100
    ),

    array(
        'code' => 'OIL',
        'Description' => 'Oil',
        'Price' => 10
    ),

    array(
        'code' => 'SPK',
        'Description' => 'Spark Plugs',
        'Price' => 4
    ),

);
