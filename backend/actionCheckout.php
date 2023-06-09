<?php

// http://localhost/AZ_Store/checkout.php?firstName=Anthony&lastName=Denayer&email=denayeranthony623%40gmail.com&adress=rue+de+la+libert%C3%A9+45&city=Nivelles&zipcode=6750&country=Belgium&submit=Submit


if(isset($_POST['submit'])){
    $firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['adress'], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
    $zipCode = filter_var($_POST['zipcode'], FILTER_SANITIZE_NUMBER_INT);
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);

    // echo $lastName;

    $firstName = ucfirst($firstName);
    echo"<pre>";
    print_r($_POST);
    // echo $firstName." ".$lastName." ".$email." ".$adress." ".$city." ".$zipCode." ".$country;

    $messageConfirmation = "Thank you ".$firstName." for your order !";

    $newJsonData=array();
    $updatedJson = json_encode($newJsonData, JSON_PRETTY_PRINT);
    file_put_contents('../assets/json/shopping-card.json', $updatedJson);
}

header('Location: ../assets/views/checkout.php?message='.urlencode($messageConfirmation));

?>