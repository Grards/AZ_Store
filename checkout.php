<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>

    <!-- <?php include './assets/views/partials/_header.php' ?> -->

    <main id="content">

    <form method="post" action="./backend/actionCheckout.php">
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
    <!-- <?php include './assets/views/partials/_footer.php' ?> -->
</body>
</html>