<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];

    //get the json file
    $json = file_get_contents('../assets/json/shopping-card.json');

    //decode the JSON file
    $json_data = json_decode($json,true);

    $id = sizeof($json_data) + 1;
    $newObj = [
        "id" => $id,
        "name" => $name,
        "price" => $price
    ];

    // Add $newObj to the existing data
    $json_data[] = $newObj;

    echo json_encode($json_data);

    // Save the updated JSON back to the file
    file_put_contents('../assets/json/shopping-card.json', json_encode($json_data));
}

// header('Location: ../index.php');
?>