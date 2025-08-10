<?php
$page_title = "Product Reviews - ArcTech";
$page_description = "Explore detailed reviews of the latest tech gadgets including Powerbeats Pro 2 earbuds, OPPO Watch X2, DJI Mini 4K drone, and Bose QuietComfort wireless headphones.";
$page_keywords = "Powerbeats Pro 2, OPPO Watch X2, DJI Mini 4K drone, Bose QuietComfort, wireless headphones, earbuds, smartwatch, drone reviews";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />

</head>

<body>
    <?php include 'header.php'; ?>

    <main class="product-reviews">
        <h2>Tech Product Reviews</h2>

        <section class="product-review">
            <h3>Powerbeats Pro 2 Earbuds</h3>
            <div class="product-rating" aria-label="Rating: 4.0 out of 5">Rating: ★★★★☆ (4.0)</div>
            <p>Powerbeats Pro 2 deliver impressive sound quality and a comfortable, secure fit designed for active lifestyles. With enhanced battery life and improved Bluetooth connectivity, these earbuds offer great value for workout enthusiasts and casual listeners alike.</p>
            <div class="product-video">
                <iframe src="https://www.youtube.com/embed/6zHFNjK-QiQ" title="Powerbeats Pro 2 Review" allowfullscreen></iframe>
            </div>
        </section>

        <section class="product-review">
            <h3>OPPO Watch X2</h3>
            <div class="product-rating" aria-label="Rating: 4.9 out of 5">Rating: ★★★★★ (4.9)</div>
            <p>The OPPO Watch X2 stands out with its sleek design, vibrant AMOLED display, and robust fitness tracking features. Its long-lasting battery and smooth performance make it a top contender in the smartwatch market for both tech enthusiasts and fitness buffs.</p>
            <div class="product-video">
                <iframe src="https://www.youtube.com/embed/Vp6sKMxLRH0" title="OPPO Watch X2 Review" allowfullscreen></iframe>
            </div>
        </section>

        <section class="product-review">
            <h3>DJI Mini 4K Drone</h3>
            <div class="product-rating" aria-label="Rating: 4.6 out of 5">Rating: ★★★★☆ (4.6)</div>
            <p>The DJI Mini 4K Drone combines portability with impressive aerial capabilities. Featuring a lightweight design, 4K camera, and user-friendly controls, it’s perfect for beginners and hobbyists looking to capture stunning aerial footage with ease.</p>
            <div class="product-video">
                <iframe src="https://www.youtube.com/embed/aEjVbRR2tks" title="DJI Mini 4K Drone Review" allowfullscreen></iframe>
            </div>
        </section>

        <section class="product-review">
            <h3>Bose QuietComfort Wireless Headphones</h3>
            <div class="product-rating" aria-label="Rating: 4.6 out of 5">Rating: ★★★★☆ (4.6)</div>
            <p>Bose QuietComfort Wireless Headphones offer exceptional noise cancellation and rich sound quality in a comfortable, lightweight package. Ideal for travel and daily use, they provide an immersive listening experience with reliable battery life.</p>
            <div class="product-video">
                <iframe src="https://www.youtube.com/embed/t1_pZFj4nJM" title="Bose QuietComfort Wireless Headphones Review" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>
