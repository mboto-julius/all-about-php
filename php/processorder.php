<?php

//create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$find = $_POST['find'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order Results</title>
</head>

<body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php

    echo "<p>Order processed at " . date('H:i, jS F Y') . "</p>";
    echo '<p>Your order is as follows: </p>';
    echo htmlspecialchars($tireqty) . ' tires<br />';
    echo htmlspecialchars($oilqty) . ' oil<br />';
    echo htmlspecialchars($sparkqty) . ' spark<br />';


    $totalqty = 0;
    $totalqty = $tireqty + $oilqty + $sparkqty;
    echo "<p>Items ordered: " . $totalqty . "</p>";
    $totalamount = 0.00;

    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);

    $totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

    echo "Subtotal: $" . number_format($totalamount, 2) . "<br />";

    $taxrate = 0.10; // local sales tax is 10%

    $totalamount = $totalamount * (1 + $taxrate);

    echo "Total including tax: $" . number_format($totalamount, 2) . "</p>";


    // echo 'isset($tireqty): ' . isset($tireqty) . '<br />';
    // echo 'isset($nothere): ' . isset($nothere) . '<br />';
    // echo 'empty($tireqty): ' . empty($tireqty) . '<br />';
    // echo 'empty($nothere): ' . empty($nothere) . '<br />';

    switch ($find) {
        case "a":
            echo "<p>Regular customer.</p>";
            break;
        case "b":
            echo "<p>Customer referred by TV advert.</p>";
            break;
        case "c":
            echo "<p>Customer referred by phone directory.</p>";
            break;
        case "d":
            echo "<p>Customer referred by word of mouth.</p>";
            break;
        default:
            echo "<p>We do not know how this customer found us.</p>";
            break;
    }
    ?>
</body>

</html>