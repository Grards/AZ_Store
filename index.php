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
    <main id="index-content">

        <article class="index-content__welcome">
            <h1 class="welcome__title">Shoe the right <strong>one</strong>.</h1>
            <button class="welcome__button">See our store</button>
            <section class="welcome__image-shoe"></section>
        </article>

        <article class="index-content__products">
            <h3 class="products__title"><strong>Our</strong> last products</h3>
            <ul class="products__list">
                <!-- PHP Products Injection -->
            </ul>
        </article>

        <article class="index-content__quote">
            <section class="quote__image"></section>
            <h2 class="quote__title">We provide you the <strong>best</strong> quality.</h2>
            <p class="quote__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni, dolore eos tempore esse est, enim eaque commodi dolores vel soluta consequatur, voluptas quis voluptatem! Quas excepturi repellat asperiores enim!</p>
        </article>

        <article class="index-content__testimonials">
            <!-- PHP Testimonials Injection -->
        </article>
    </main>
    <?php include './assets/views/partials/_footer.php' ?>
</body>
</html>