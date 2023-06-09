
<!-- http://localhost/AZ_Store/assets/views/checkout.php -->


<?php include './partials/_header.php' ?>

<?php

// create shopping card

$json = file_get_contents('../json/shopping-card.json');

//decode the JSON file
$json_data = json_decode($json,true);
$totalPrice = 0;
foreach($json_data as $data){
    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";
    // echo $data['name'];
    echo "<p>Name: " . $data['name'] . "; Price: " . $data['price'] . " € </p>";
    $totalPrice += $data['price'];

}
    echo "<p>Total :".$totalPrice." €</p>"
?>

    <main id="content">


    <h2>Checkout</h2>
    <?php
    if (isset($_GET['message'])) {
        $messageConfirmation = $_GET['message'];
        echo $messageConfirmation;
      }
    ?>
    <form method="post" action="../../backend/actionCheckout.php">
        <!-- <input type="hidden" name="message" value="Formulaire envoyé avec succès."> -->
        <label for="firstName">First Name :</label>
        <input type="text" name="firstName" required><br>
        
        <label for="lastName">Last Name :</label>
        <input type="text" name="lastName" required><br>
        
        <label for="email">Your mail :</label>
        <input type="email" name="email" required><br>
        
        <label for="adress">Your adress :</label>
        <input type="text" name="adress" required><br>
        
        <label for="city">Your city :</label>
        <input type="text" name="city" required><br>
        
        <label for="zipcode">Your zip code :</label>
        <input type="number" name="zipcode" required><br>
        
        <label for="country">Your country :</label>
        <input type="text" name="country" required><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>



    </main>
    <?php include './partials/_footer.php' ?>