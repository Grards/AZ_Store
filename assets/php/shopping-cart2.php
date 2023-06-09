<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Card</title>
</head>
<body>
    <h2>Shopping Card</h2>
</body>
</html>

<?php


$json = file_get_contents('../json/shopping-card.json');

//decode the JSON file
$json_data = json_decode($json,true);
$totalPrice = 0;

foreach ($json_data as $key => $data) {
    $name = $data['name'];
    $price = $data['price'];
    $url = "../../src/img/" . $name . ".png";

    echo "<p>Name: " . $name . "; Price: " . $price . " € </p>";
    echo "<img src=" . $url . " alt=" . $name . ">";
    echo "<form method='POST' action=''>";
    echo "<input type='hidden' name='key' value='" . $key . "'>";
    echo "<button type='submit' name='delete'>Delete</button>";
    echo "</form>";

    $totalPrice += $price;
}
    echo "<p>Total :".$totalPrice." €</p>";

    if (isset($_POST['delete'])) {
        $keyToDelete = $_POST['key'];
        unset($json_data[$keyToDelete]);
        $updatedJson = json_encode($json_data, JSON_PRETTY_PRINT);
        file_put_contents('../json/shopping-card.json', $updatedJson);
    }
    // http://localhost/AZ_Store/assets/php/shopping-cart2.php
?>