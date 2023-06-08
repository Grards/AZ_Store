<?php

echo"<pre>";
print_r($_POST);
echo"</pre>";


if($_SERVER['REQUEST_METHOD']==='POST'){
    
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];

    //check if the data is ok 
    // echo $name." ".$price;

    //get the json file
    $json = file_get_contents('shopping-card.json');

    //decode the JSON file
    $json_data = json_decode($json,true);

    $newObj = [
        "name" => $name,
        "price" => $price
    ];



    // Add $newObj to the existing data
    $json_data[] = $newObj;



    echo json_encode($json_data);

    // Save the updated JSON back to the file
    file_put_contents('shopping-card.json', json_encode($json_data));
}







// echo"<pre>";
// print_r($json);
// echo"</pre>";





// $name = $json_data


?>