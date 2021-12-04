<?php
    // Error reporting
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // Access the global array called $_POST to get the values of the user inputs
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $kitten = $_POST['Kitten food'];
    $adult  = $_POST['Adult food'];
    $sensitive = $_POST['Sensitive'];
    $shipping = $_POST['shipping'];

    // Calculate the cost
    $kittenCost = $kitten * 25.00;
    $adultCost = $adult * 40.00;
    $sensitiveCost = $sensitive * 45.00;
    $shippingCost = 0;
    $totalCost = 0;


    if ($shipping == "free") {
        $shippingCost = 0;
    } else if ($shipping == "50") {
        $shippingCost = 50;
    } else if ($shipping == "5") {
        $shippingCost = 5;
    }

    // This is the total cost
    $totalCost = $shippingCost + $kittenCost + $adultCost + $sensitiveCost;


    // Print out a wecome message and the user's password a
    echo '<link rel="stylesheet" href="style.css" type="text/css"/>';
    echo "<h2>Welcome to the Cat Supply Store,"  . $email .  "!</h2><br>";
    echo "<h3>Your secret password is: " . $password . "</h3><br>";
    echo "<p>Thank you for your purchase. Here is your receipt: </p><br><br>";

    // This part prints out the receipt
    echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        echo "<th>Quantity</th>";
        echo "<th>Cost Per Item</th>";
        echo "<th>Subtotal</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Kitten food</th>";
        echo "<td>$kitten</td>";
        echo "<td>$25</td>";
        echo "<td>$kittenCost</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Adult food</th>";
        echo "<td>$adult</td>";
        echo "<td>$40</td>";
        echo "<td>$adultCost</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Sensitive food</th>";
        echo "<td>$sensitive</td>";
        echo "<td>$45</td>";
        echo "<td>$sensitiveCost</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Total Cost</th>";
        echo "<td>$totalCost</td>";
        echo "</tr>";
        echo "</table>";
    echo "</div>";

?>