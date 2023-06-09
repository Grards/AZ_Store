<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/style.min.css">
    <title>Az Store</title>
</head>
<body>
    <?php include './assets/views/partials/_header.php' ?>
    <?php 
        function getJSONDatas($file_name){
            // Read the JSON file 
            $json = file_get_contents('./assets/json/'.$file_name.'.json');
            
            // Decode the JSON file
            $json_data = json_decode($json,true);

            // Return Datas
            return $json_data;
        }
    ?>
    <main id="index-content">

        <article class="index-content__welcome">
            <h1 class="welcome__title text-center bg-red-200">Shoe the right <strong>one</strong>.</h1>
            <button class="welcome__button">See our store</button>
            <section class="welcome__image-shoe"></section>
        </article>

        <article class="index-content__products">
            <h3 class="products__title"><strong>Our</strong> last products</h3>
            <ul class="products__list">
                <!-- PHP Products Injection -->
            <?php
                // Display data
                $products = getJSONDatas("products");

                foreach($products as $product){
                    echo
                    
                        '<a href="#"><img src="./src/img/' . $product['name'] . '.png" alt="Image of the product ' . $product['product'] . '"></a>' .

                        '<h4>' . str_replace("_", " ", ucfirst($product['name'])) . '</h4>' . 

                        '<p>$' . $product["price"] . '</p>' . 

                        '<form method="POST" action="./backend/actionProducts.php">' .
                            '<input type="hidden" id="product_id"  name = "product_id" value ="' . $product["id"] . '">' .
                            '<input type="hidden" id="product_price"  name = "product_price" value ="' . $product["price"] . '">' .
                            '<input type="hidden" id="product_name"  name = "product_name" value ="' . $product["name"] . '">' .
                            '<input type="submit" value="Add to cart" id="product_' . $product["id"] . '" data-name="' . trim($product["name"]) .'" data-price="' . trim($product["price"]) . '">' .
                        '</form>';
                }
            ?>
            </ul>
        </article>

        <article class="index-content__quote">
            <section class="quote__image"></section>
            <h2 class="quote__title">We provide you the <strong>best</strong> quality.</h2>
            <p class="quote__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni, dolore eos tempore esse est, enim eaque commodi dolores vel soluta consequatur, voluptas quis voluptatem! Quas excepturi repellat asperiores enim!</p>
        </article>

        <article class="index-content__testimonials">
            <!-- PHP Testimonials Injection -->
            <?php
                // Display data
                $testimonials = getJSONDatas("testimonials");

                foreach($testimonials as $testimonial){
                    echo
                    
                        '<img src="./src/img/image-'. strtolower($testimonial["firstname"]) .'.jpg" alt="Picture of ' . strtolower($testimonial["firstname"]) . '"></img>' .

                        '<h3>' . ucfirst($testimonial["firstname"]) . ' of ' . $testimonial["company"] . '</h3>' .

                        '<p>' . $testimonial["presentation"] . '</p>';
                }
            ?>
        </article>
    </main>
    <?php include './assets/views/partials/_footer.php' ?>
</body>
</html>